<?php

namespace Starweb\Api\Generated\Endpoint;

class RemoveAddressFromCustomer extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return '/customers/{customerId}/addresses/{addressType}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\RemoveAddressFromCustomerForbiddenException
     * @throws \Starweb\Api\Generated\Exception\RemoveAddressFromCustomerNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (204 === $status) {
            return null;
        }
        if (403 === $status) {
            throw new \Starweb\Api\Generated\Exception\RemoveAddressFromCustomerForbiddenException();
        }
        if (404 === $status) {
            throw new \Starweb\Api\Generated\Exception\RemoveAddressFromCustomerNotFoundException();
        }
    }
}