<?php

namespace Starweb\Api\Client\Endpoint;

class DeleteProductsVariantsPricelistVolumePrice extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $variantId;
    protected $pricelistId;
    protected $quantity;
    /**
     * Deletes a product variant pricelist volume price permanently.
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param int $pricelistId The pricelist id
     * @param int $quantity The volume quantity
     */
    public function __construct(int $productId, int $variantId, int $pricelistId, int $quantity)
    {
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->pricelistId = $pricelistId;
        $this->quantity = $quantity;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{variantId}', '{pricelistId}', '{quantity}'), array($this->productId, $this->variantId, $this->pricelistId, $this->quantity), '/products/{productId}/variants/{variantId}/prices/{pricelistId}/volume/{quantity}');
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
     * @throws \Starweb\Api\Client\Exception\DeleteProductsVariantsPricelistVolumePriceNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\DeleteProductsVariantsPricelistVolumePriceNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}