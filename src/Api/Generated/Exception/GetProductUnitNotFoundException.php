<?php

namespace Starweb\Api\Generated\Exception;

class GetProductUnitNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Entity not found', 404);
    }
}