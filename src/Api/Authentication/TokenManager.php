<?php

namespace Starweb\Api\Authentication;

use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Http\Message\RequestFactory;
use Starweb\Exception\InvalidCredentialsException;

class TokenManager
{
    /**
     * @var HttpClient
     */
    private $client;

    /**
     * @var MessageFactory
     */
    private $messageFactory;

    /**
     * @var ClientCredentials
     */
    private $credentials;

    /**
     * @var TokenCacheInterface
     */
    private $storage;

    /**
     * @var string
     */
    private $baseUri;

    /**
     * TokenManager constructor.
     * @param HttpClient $client
     * @param MessageFactory $messageFactory
     * @param ClientCredentials $credentials
     * @param TokenCacheInterface $storage
     * @param string $baseUri
     */
    public function __construct(
        HttpClient $client,
        RequestFactory $messageFactory,
        ClientCredentials $credentials,
        TokenCacheInterface $storage,
        string $baseUri
    ) {
        $this->client = $client;
        $this->messageFactory = $messageFactory;
        $this->credentials = $credentials;
        $this->storage = $storage;
        $this->baseUri = $baseUri;
    }


    /**
     * @param HttpClient $client
     *
     * @return TokenInterface
     *
     * @throws InvalidCredentialsException
     * @throws \Http\Client\Exception
     */
    public function requestToken(): TokenInterface
    {
        $parameters = [
            'grant_type' => 'client_credentials',
            'client_id' => $this->credentials->getId(),
            'client_secret' => $this->credentials->getSecret(),
        ];

        $response = $this->client->sendRequest($this->messageFactory->createRequest(
            'POST',
            $this->baseUri.'/token',
            ['Content-Type' => 'application/x-www-form-urlencoded'],
            http_build_query($parameters)
        ));

        $responseData = json_decode($response->getBody()->__toString(), true);

        if (400 === $response->getStatusCode() && 'invalid_client' === $responseData['error']) {
            throw new InvalidCredentialsException($responseData['error_description']);
        }

        return new AccessToken($responseData['access_token'], $responseData['expires_in']);
    }

    /**
     * @param HttpClient $client
     *
     * @return TokenInterface
     *
     * @throws InvalidCredentialsException
     * @throws \Http\Client\Exception
     */
    public function getToken(): TokenInterface
    {
        if (!$this->storage->hasToken() || $this->storage->isExpired()) {
            $token = $this->requestToken();
            $this->storage->setToken($token);
        } else {
            $token = $this->storage->getToken();
        }

        return $token;
    }

    /**
     * @throws InvalidCredentialsException
     * @throws \Http\Client\Exception
     */
    public function refreshToken(): void
    {
        $token = $this->requestToken();
        $this->storage->setToken($token);
    }
}
