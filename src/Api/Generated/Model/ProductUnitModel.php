<?php

namespace Starweb\Api\Generated\Model;

class ProductUnitModel
{
    /**
     * The units id
     *
     * @var int|null
     */
    protected $unitId;
    /**
     * The external id of this pricelist
     *
     * @var string|null
     */
    protected $externalId = '';
    /**
     * The system name the externalId belongs to.
     *
     * @var string|null
     */
    protected $externalIdType;
    /**
     * 
     *
     * @var ProductUnitLanguageModelCollection|null
     */
    protected $languages;
    /**
     * The units id
     *
     * @return int|null
     */
    public function getUnitId() : ?int
    {
        return $this->unitId;
    }
    /**
     * The units id
     *
     * @param int|null $unitId
     *
     * @return self
     */
    public function setUnitId(?int $unitId) : self
    {
        $this->unitId = $unitId;
        return $this;
    }
    /**
     * The external id of this pricelist
     *
     * @return string|null
     */
    public function getExternalId() : ?string
    {
        return $this->externalId;
    }
    /**
     * The external id of this pricelist
     *
     * @param string|null $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId) : self
    {
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * The system name the externalId belongs to.
     *
     * @return string|null
     */
    public function getExternalIdType() : ?string
    {
        return $this->externalIdType;
    }
    /**
     * The system name the externalId belongs to.
     *
     * @param string|null $externalIdType
     *
     * @return self
     */
    public function setExternalIdType(?string $externalIdType) : self
    {
        $this->externalIdType = $externalIdType;
        return $this;
    }
    /**
     * 
     *
     * @return ProductUnitLanguageModelCollection|null
     */
    public function getLanguages() : ?ProductUnitLanguageModelCollection
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductUnitLanguageModelCollection|null $languages
     *
     * @return self
     */
    public function setLanguages(?ProductUnitLanguageModelCollection $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}