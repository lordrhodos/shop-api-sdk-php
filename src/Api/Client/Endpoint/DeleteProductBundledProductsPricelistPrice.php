<?php

namespace Starweb\Api\Client\Endpoint;

class DeleteProductBundledProductsPricelistPrice extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $bundledProductId;
    protected $pricelistId;
    /**
     * Deletes a bundled product pricelist price permanently.
     *
     * @param int $productId The product id
     * @param int $bundledProductId The bundled products id
     * @param int $pricelistId The pricelist id
     */
    public function __construct(int $productId, int $bundledProductId, int $pricelistId)
    {
        $this->productId = $productId;
        $this->bundledProductId = $bundledProductId;
        $this->pricelistId = $pricelistId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{bundledProductId}', '{pricelistId}'), array($this->productId, $this->bundledProductId, $this->pricelistId), '/products/{productId}/bundled-products/{bundledProductId}/prices/{pricelistId}');
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
     * @throws \Starweb\Api\Client\Exception\DeleteProductBundledProductsPricelistPriceNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\DeleteProductBundledProductsPricelistPriceNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}