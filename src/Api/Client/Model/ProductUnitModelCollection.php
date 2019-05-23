<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Starweb\Api\Client\Model;

class ProductUnitModelCollection
{
    /**
     * A collection of product units.
     *
     * @var ProductUnitModel[]
     */
    protected $data;

    /**
     * A collection of product units.
     *
     * @return ProductUnitModel[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * A collection of product units.
     *
     * @param ProductUnitModel[] $data
     *
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
