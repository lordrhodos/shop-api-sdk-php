<?php

namespace Starweb\Api\Client\Endpoint;

class ListProductsVariantsPricelistVolumePrices extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $variantId;
    protected $pricelistId;
    /**
     * Returns a list of the variants pricelist volume prices
     *
     * @param int $productId The products id
     * @param int $variantId The products variants id
     * @param int $pricelistId The pricelist id
     */
    public function __construct(int $productId, int $variantId, int $pricelistId)
    {
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->pricelistId = $pricelistId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{variantId}', '{pricelistId}'), array($this->productId, $this->variantId, $this->pricelistId), '/products/{productId}/variants/{variantId}/prices/{pricelistId}/volume');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Client\Exception\ListProductsVariantsPricelistVolumePricesBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantVolumePriceModelCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductVariantVolumePriceModelCollection', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\ListProductsVariantsPricelistVolumePricesBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}