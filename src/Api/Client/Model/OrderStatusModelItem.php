<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Starweb\Api\Client\Model;

class OrderStatusModelItem
{
    /**
     * @var OrderStatusModel
     */
    protected $data;

    /**
     * @return OrderStatusModel
     */
    public function getData(): ?OrderStatusModel
    {
        return $this->data;
    }

    /**
     * @param OrderStatusModel $data
     *
     * @return self
     */
    public function setData(?OrderStatusModel $data): self
    {
        $this->data = $data;

        return $this;
    }
}
