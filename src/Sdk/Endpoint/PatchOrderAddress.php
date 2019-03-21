<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Starweb\Sdk\Endpoint;

class PatchOrderAddress extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return '/orders/{orderId}/addresses/{addressType}';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Sdk\Exception\PatchOrderAddressBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchOrderAddressNotFoundException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Starweb\Sdk\Exception\PatchOrderAddressBadRequestException();
        }
        if (404 === $status) {
            throw new \Starweb\Sdk\Exception\PatchOrderAddressNotFoundException();
        }
    }
}
