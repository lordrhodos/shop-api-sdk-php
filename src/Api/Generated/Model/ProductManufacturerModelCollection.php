<?php

namespace Starweb\Api\Generated\Model;

class ProductManufacturerModelCollection
{
    /**
     * A collection of product manufacturers
     *
     * @var ProductManufacturerModel[]|null
     */
    protected $data;
    /**
     * A collection of product manufacturers
     *
     * @return ProductManufacturerModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product manufacturers
     *
     * @param ProductManufacturerModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}