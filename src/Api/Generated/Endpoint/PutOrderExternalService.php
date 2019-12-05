<?php

namespace Starweb\Api\Generated\Endpoint;

class PutOrderExternalService extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/orders/{orderId}/external-services/{serviceName}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\PutOrderExternalServiceBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutOrderExternalServiceNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Starweb\Api\Generated\Exception\PutOrderExternalServiceBadRequestException();
        }
        if (404 === $status) {
            throw new \Starweb\Api\Generated\Exception\PutOrderExternalServiceNotFoundException();
        }
    }
}