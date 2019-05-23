<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Starweb\Api\Client\Endpoint;

class PutOrderStatus extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $orderStatusId;

    /**
     * Updates an oder status. Retrieves the updated `Orderstatus` object.
                   NB! You are not allowed to update standard order statuses (all statuses with an idCode set)
     *
     * @param int                                        $orderStatusId The order status id
     * @param \Starweb\Api\Client\Model\OrderStatusModel $requestBody
     */
    public function __construct(int $orderStatusId, \Starweb\Api\Client\Model\OrderStatusModel $requestBody)
    {
        $this->orderStatusId = $orderStatusId;
        $this->body = $requestBody;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{orderStatusId}'], [$this->orderStatusId], '/order-statuses/{orderStatusId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        if ($this->body instanceof \Starweb\Api\Client\Model\OrderStatusModel) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Client\Exception\PutOrderStatusBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutOrderStatusForbiddenException
     * @throws \Starweb\Api\Client\Exception\PutOrderStatusNotFoundException
     *
     * @return \Starweb\Api\Client\Model\OrderStatusModelItem|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\OrderStatusModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PutOrderStatusBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
        if (403 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PutOrderStatusForbiddenException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PutOrderStatusNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}
