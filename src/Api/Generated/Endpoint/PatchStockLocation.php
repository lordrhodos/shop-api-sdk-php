<?php

namespace Starweb\Api\Generated\Endpoint;

class PatchStockLocation extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return '/stock-locations/{stockLocationId}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\PatchStockLocationBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchStockLocationForbiddenException
     * @throws \Starweb\Api\Generated\Exception\PatchStockLocationNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Starweb\Api\Generated\Exception\PatchStockLocationBadRequestException();
        }
        if (403 === $status) {
            throw new \Starweb\Api\Generated\Exception\PatchStockLocationForbiddenException();
        }
        if (404 === $status) {
            throw new \Starweb\Api\Generated\Exception\PatchStockLocationNotFoundException();
        }
    }
}