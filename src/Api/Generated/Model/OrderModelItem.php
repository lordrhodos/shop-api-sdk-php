<?php

namespace Starweb\Api\Generated\Model;

class OrderModelItem
{
    /**
     * 
     *
     * @var OrderModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return OrderModel|null
     */
    public function getData() : ?OrderModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderModel|null $data
     *
     * @return self
     */
    public function setData(?OrderModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}