<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Starweb\Api\Client\Model;

class CustomerModelItem
{
    /**
     * @var CustomerModel
     */
    protected $data;

    /**
     * @return CustomerModel
     */
    public function getData(): ?CustomerModel
    {
        return $this->data;
    }

    /**
     * @param CustomerModel $data
     *
     * @return self
     */
    public function setData(?CustomerModel $data): self
    {
        $this->data = $data;

        return $this;
    }
}
