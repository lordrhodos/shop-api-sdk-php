<?php

namespace Starweb\Api\Generated\Model;

class ProductStockStatusModelCollection
{
    /**
     * A list of product stock statuses
     *
     * @var ProductStockStatusResponseModel[]
     */
    protected $data;
    /**
     * A list of product stock statuses
     *
     * @return ProductStockStatusResponseModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A list of product stock statuses
     *
     * @param ProductStockStatusResponseModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}