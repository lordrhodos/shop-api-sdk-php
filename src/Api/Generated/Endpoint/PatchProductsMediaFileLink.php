<?php

namespace Starweb\Api\Generated\Endpoint;

class PatchProductsMediaFileLink extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return '/products/{productId}/media-files/{mediaFileId}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\PatchProductsMediaFileLinkBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsMediaFileLinkNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Starweb\Api\Generated\Exception\PatchProductsMediaFileLinkBadRequestException();
        }
        if (404 === $status) {
            throw new \Starweb\Api\Generated\Exception\PatchProductsMediaFileLinkNotFoundException();
        }
    }
}