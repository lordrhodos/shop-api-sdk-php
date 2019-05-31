<?php

namespace Starweb\Api\Client\Model;

class ProductMetaDataModelUpdatable
{
    /**
     * The ID of the meta data.
     *
     * @var int
     */
    protected $metaDataId;
    /**
     * The ID of the meta data type. Available meta data types can be fetched using the /product-meta-data-types endpoint
     *
     * @var int
     */
    protected $metaDataTypeId;
    /**
     * The sort index of this meta data for this product
     *
     * @var int
     */
    protected $sortIndex;
    /**
     * A collection of product meta data languages
     *
     * @var ProductMetaLanguageDataModel[]
     */
    protected $languages;
    /**
     * The ID of the meta data.
     *
     * @return int
     */
    public function getMetaDataId() : ?int
    {
        return $this->metaDataId;
    }
    /**
     * The ID of the meta data.
     *
     * @param int $metaDataId
     *
     * @return self
     */
    public function setMetaDataId(?int $metaDataId) : self
    {
        $this->metaDataId = $metaDataId;
        return $this;
    }
    /**
     * The ID of the meta data type. Available meta data types can be fetched using the /product-meta-data-types endpoint
     *
     * @return int
     */
    public function getMetaDataTypeId() : ?int
    {
        return $this->metaDataTypeId;
    }
    /**
     * The ID of the meta data type. Available meta data types can be fetched using the /product-meta-data-types endpoint
     *
     * @param int $metaDataTypeId
     *
     * @return self
     */
    public function setMetaDataTypeId(?int $metaDataTypeId) : self
    {
        $this->metaDataTypeId = $metaDataTypeId;
        return $this;
    }
    /**
     * The sort index of this meta data for this product
     *
     * @return int
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * The sort index of this meta data for this product
     *
     * @param int $sortIndex
     *
     * @return self
     */
    public function setSortIndex(?int $sortIndex) : self
    {
        $this->sortIndex = $sortIndex;
        return $this;
    }
    /**
     * A collection of product meta data languages
     *
     * @return ProductMetaLanguageDataModel[]
     */
    public function getLanguages() : ?array
    {
        return $this->languages;
    }
    /**
     * A collection of product meta data languages
     *
     * @param ProductMetaLanguageDataModel[] $languages
     *
     * @return self
     */
    public function setLanguages(?array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}