<?php

namespace Starweb\Api\Generated\Model;

class CustomerAddedTagModelCollection
{
    /**
     * A list of customer tags
     *
     * @var CustomerAddedTagModel[]|null
     */
    protected $data;
    /**
     * A list of customer tags
     *
     * @return CustomerAddedTagModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of customer tags
     *
     * @param CustomerAddedTagModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}