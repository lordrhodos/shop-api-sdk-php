<?php

namespace Starweb\Api\Generated\Endpoint;

class PatchCustomerAddress extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $customerId;
    protected $addressType;
    /**
     * Updates a customer address. Retrieves the updated `CustomerAddress` object
     *
     * @param int $customerId The customers id
     * @param string $addressType The customer address type
     * @param \Starweb\Api\Generated\Model\AddressModel $requestBody 
     */
    public function __construct(int $customerId, string $addressType, \Starweb\Api\Generated\Model\AddressModel $requestBody)
    {
        $this->customerId = $customerId;
        $this->addressType = $addressType;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{customerId}', '{addressType}'), array($this->customerId, $this->addressType), '/customers/{customerId}/addresses/{addressType}');
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
     * @throws \Starweb\Api\Generated\Exception\PatchCustomerAddressBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchCustomerAddressNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerAddressesModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\CustomerAddressesModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PatchCustomerAddressBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PatchCustomerAddressNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}