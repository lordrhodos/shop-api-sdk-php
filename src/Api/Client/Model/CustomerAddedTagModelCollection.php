<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Starweb\Api\Client\Model;

class CustomerAddedTagModelCollection
{
    /**
     * A list of customer tags.
     *
     * @var CustomerAddedTagModel[]
     */
    protected $data;

    /**
     * A list of customer tags.
     *
     * @return CustomerAddedTagModel[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * A list of customer tags.
     *
     * @param CustomerAddedTagModel[] $data
     *
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
