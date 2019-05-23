<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Starweb\Api\Client\Model;

class ProductLanguageModelItem
{
    /**
     * @var ProductLanguageModel
     */
    protected $data;

    /**
     * @return ProductLanguageModel
     */
    public function getData(): ?ProductLanguageModel
    {
        return $this->data;
    }

    /**
     * @param ProductLanguageModel $data
     *
     * @return self
     */
    public function setData(?ProductLanguageModel $data): self
    {
        $this->data = $data;

        return $this;
    }
}
