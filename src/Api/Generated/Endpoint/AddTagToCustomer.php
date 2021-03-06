<?php

namespace Starweb\Api\Generated\Endpoint;

class AddTagToCustomer extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $customerId;
    /**
     * Add a tag to a customer. Retrieves the created `CustomerTag` object
     *
     * @param int $customerId The customers id
     * @param \Starweb\Api\Generated\Model\CustomerAddedTagModel $requestBody 
     */
    public function __construct(int $customerId, \Starweb\Api\Generated\Model\CustomerAddedTagModel $requestBody)
    {
        $this->customerId = $customerId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{customerId}'), array($this->customerId), '/customers/{customerId}/tags');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\CustomerAddedTagModel) {
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
     * @throws \Starweb\Api\Generated\Exception\AddTagToCustomerBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerAddedTagModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\CustomerAddedTagModelItem', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\AddTagToCustomerBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}