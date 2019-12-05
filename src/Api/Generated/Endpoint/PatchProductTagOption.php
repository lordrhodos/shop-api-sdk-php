<?php

namespace Starweb\Api\Generated\Endpoint;

class PatchProductTagOption extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return '/product-tags/{productTagId}/options/{productTagOptionId}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagOptionBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagOptionNotFoundException
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagOptionMethodNotAllowedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Starweb\Api\Generated\Exception\PatchProductTagOptionBadRequestException();
        }
        if (404 === $status) {
            throw new \Starweb\Api\Generated\Exception\PatchProductTagOptionNotFoundException();
        }
        if (405 === $status) {
            throw new \Starweb\Api\Generated\Exception\PatchProductTagOptionMethodNotAllowedException();
        }
    }
}