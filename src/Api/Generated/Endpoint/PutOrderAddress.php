<?php

namespace Starweb\Api\Generated\Endpoint;

class PutOrderAddress extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $orderId;
    protected $addressType;
    /**
     * Updates an order adress. Retrieves the updated `OrderAddress` object
     *
     * @param int $orderId The orders id
     * @param string $addressType The order address type
     * @param \Starweb\Api\Generated\Model\AddressModel $requestBody 
     */
    public function __construct(int $orderId, string $addressType, \Starweb\Api\Generated\Model\AddressModel $requestBody)
    {
        $this->orderId = $orderId;
        $this->addressType = $addressType;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{orderId}', '{addressType}'), array($this->orderId, $this->addressType), '/orders/{orderId}/addresses/{addressType}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\AddressModel) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\PutOrderAddressBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutOrderAddressNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\AddressModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\AddressModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PutOrderAddressBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PutOrderAddressNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}