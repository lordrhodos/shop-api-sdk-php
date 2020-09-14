<?php

namespace Starweb\Api\Generated\Model;

class ProductLanguageSlimModel
{
    /**
     * The langCode for this language. Supported language codes are: sv, en, ar, no, da, fi, de, fr, es
     *
     * @var string|null
     */
    protected $langCode;
    /**
     * The products name
     *
     * @var string|null
     */
    protected $name;
    /**
     * The products short description
     *
     * @var string|null
     */
    protected $shortDescription;
    /**
     * The permalink for this product and language
     *
     * @var string|null
     */
    protected $permalink;
    /**
     * The langCode for this language. Supported language codes are: sv, en, ar, no, da, fi, de, fr, es
     *
     * @return string|null
     */
    public function getLangCode() : ?string
    {
        return $this->langCode;
    }
    /**
     * The langCode for this language. Supported language codes are: sv, en, ar, no, da, fi, de, fr, es
     *
     * @param string|null $langCode
     *
     * @return self
     */
    public function setLangCode(?string $langCode) : self
    {
        $this->langCode = $langCode;
        return $this;
    }
    /**
     * The products name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The products name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The products short description
     *
     * @return string|null
     */
    public function getShortDescription() : ?string
    {
        return $this->shortDescription;
    }
    /**
     * The products short description
     *
     * @param string|null $shortDescription
     *
     * @return self
     */
    public function setShortDescription(?string $shortDescription) : self
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }
    /**
     * The permalink for this product and language
     *
     * @return string|null
     */
    public function getPermalink() : ?string
    {
        return $this->permalink;
    }
    /**
     * The permalink for this product and language
     *
     * @param string|null $permalink
     *
     * @return self
     */
    public function setPermalink(?string $permalink) : self
    {
        $this->permalink = $permalink;
        return $this;
    }
}