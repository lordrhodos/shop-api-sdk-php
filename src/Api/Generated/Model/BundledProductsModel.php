<?php

namespace Starweb\Api\Generated\Model;

class BundledProductsModel
{
    /**
     * Bundled product only valid for a single variant
     *
     * @var bool|null
     */
    protected $singleVariant;
    /**
     * The bundled products id
     *
     * @var int|null
     */
    protected $bundledProductId;
    /**
     * The sku of the variant the product is locked to in the variant
     *
     * @var string|null
     */
    protected $variantSku;
    /**
     * The quantity for this bundled product
     *
     * @var int|null
     */
    protected $quantity;
    /**
     * The sort index of this bundled product.
     *
     * @var int|null
     */
    protected $sortIndex;
    /**
     * A collection of bundled product prices
     *
     * @var ProductBundleProductPriceModel[]|null
     */
    protected $prices;
    /**
     * Bundled product only valid for a single variant
     *
     * @return bool|null
     */
    public function getSingleVariant() : ?bool
    {
        return $this->singleVariant;
    }
    /**
     * Bundled product only valid for a single variant
     *
     * @param bool|null $singleVariant
     *
     * @return self
     */
    public function setSingleVariant(?bool $singleVariant) : self
    {
        $this->singleVariant = $singleVariant;
        return $this;
    }
    /**
     * The bundled products id
     *
     * @return int|null
     */
    public function getBundledProductId() : ?int
    {
        return $this->bundledProductId;
    }
    /**
     * The bundled products id
     *
     * @param int|null $bundledProductId
     *
     * @return self
     */
    public function setBundledProductId(?int $bundledProductId) : self
    {
        $this->bundledProductId = $bundledProductId;
        return $this;
    }
    /**
     * The sku of the variant the product is locked to in the variant
     *
     * @return string|null
     */
    public function getVariantSku() : ?string
    {
        return $this->variantSku;
    }
    /**
     * The sku of the variant the product is locked to in the variant
     *
     * @param string|null $variantSku
     *
     * @return self
     */
    public function setVariantSku(?string $variantSku) : self
    {
        $this->variantSku = $variantSku;
        return $this;
    }
    /**
     * The quantity for this bundled product
     *
     * @return int|null
     */
    public function getQuantity() : ?int
    {
        return $this->quantity;
    }
    /**
     * The quantity for this bundled product
     *
     * @param int|null $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity) : self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * The sort index of this bundled product.
     *
     * @return int|null
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * The sort index of this bundled product.
     *
     * @param int|null $sortIndex
     *
     * @return self
     */
    public function setSortIndex(?int $sortIndex) : self
    {
        $this->sortIndex = $sortIndex;
        return $this;
    }
    /**
     * A collection of bundled product prices
     *
     * @return ProductBundleProductPriceModel[]|null
     */
    public function getPrices() : ?array
    {
        return $this->prices;
    }
    /**
     * A collection of bundled product prices
     *
     * @param ProductBundleProductPriceModel[]|null $prices
     *
     * @return self
     */
    public function setPrices(?array $prices) : self
    {
        $this->prices = $prices;
        return $this;
    }
}