<?php

namespace Starweb\Api\Generated\Endpoint;

class PutStockLocation extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $stockLocationId;
    /**
     * Update a stock location. Retrieves the updated `StockLocation` object
     *
     * @param int $stockLocationId The stock location id
     * @param \Starweb\Api\Generated\Model\StockLocationPutRequestModel $requestBody 
     */
    public function __construct(int $stockLocationId, \Starweb\Api\Generated\Model\StockLocationPutRequestModel $requestBody)
    {
        $this->stockLocationId = $stockLocationId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{stockLocationId}'), array($this->stockLocationId), '/stock-locations/{stockLocationId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\StockLocationPutRequestModel) {
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
     * @throws \Starweb\Api\Generated\Exception\PutStockLocationBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutStockLocationNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\StockLocationModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\StockLocationModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PutStockLocationBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PutStockLocationNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}