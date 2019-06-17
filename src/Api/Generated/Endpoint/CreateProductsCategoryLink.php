<?php

namespace Starweb\Api\Generated\Endpoint;

class CreateProductsCategoryLink extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    /**
     * Retrieves the created `ProductCategoryLink` object
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Generated\Model\ProductCategoryLinkModel $requestBody 
     */
    public function __construct(int $productId, \Starweb\Api\Generated\Model\ProductCategoryLinkModel $requestBody)
    {
        $this->productId = $productId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}'), array($this->productId), '/products/{productId}/categories');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\ProductCategoryLinkModel) {
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
     * @throws \Starweb\Api\Generated\Exception\CreateProductsCategoryLinkBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductCategoryLinkModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductCategoryLinkModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\CreateProductsCategoryLinkBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}