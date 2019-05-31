<?php

namespace Starweb\Api\Client\Model;

class ProductBundleProductPriceModel
{
    /**
     * The pricelist this price is for
     *
     * @var int
     */
    protected $pricelistId;
    /**
     * The special price excluding vat (a discounted price)
     *
     * @var float
     */
    protected $specialPriceExVat;
    /**
     * The pricelist this price is for
     *
     * @return int
     */
    public function getPricelistId() : ?int
    {
        return $this->pricelistId;
    }
    /**
     * The pricelist this price is for
     *
     * @param int $pricelistId
     *
     * @return self
     */
    public function setPricelistId(?int $pricelistId) : self
    {
        $this->pricelistId = $pricelistId;
        return $this;
    }
    /**
     * The special price excluding vat (a discounted price)
     *
     * @return float
     */
    public function getSpecialPriceExVat() : ?float
    {
        return $this->specialPriceExVat;
    }
    /**
     * The special price excluding vat (a discounted price)
     *
     * @param float $specialPriceExVat
     *
     * @return self
     */
    public function setSpecialPriceExVat(?float $specialPriceExVat) : self
    {
        $this->specialPriceExVat = $specialPriceExVat;
        return $this;
    }
}