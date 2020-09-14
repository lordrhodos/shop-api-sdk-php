<?php

namespace Starweb\Api\Generated\Model;

class CustomerTagModelCollection
{
    /**
     * A list of customer tags
     *
     * @var CustomerTagModel[]|null
     */
    protected $data;
    /**
     * A list of customer tags
     *
     * @return CustomerTagModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of customer tags
     *
     * @param CustomerTagModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}