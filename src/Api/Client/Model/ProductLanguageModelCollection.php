<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Starweb\Api\Client\Model;

class ProductLanguageModelCollection
{
    /**
     * A collection of product languages.
     *
     * @var ProductLanguageModel[]
     */
    protected $data;

    /**
     * A collection of product languages.
     *
     * @return ProductLanguageModel[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * A collection of product languages.
     *
     * @param ProductLanguageModel[] $data
     *
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
