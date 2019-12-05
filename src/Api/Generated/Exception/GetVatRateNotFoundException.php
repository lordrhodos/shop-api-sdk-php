<?php

namespace Starweb\Api\Generated\Exception;

class GetVatRateNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Entity not found', 404);
    }
}