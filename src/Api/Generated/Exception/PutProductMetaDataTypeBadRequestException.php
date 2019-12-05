<?php

namespace Starweb\Api\Generated\Exception;

class PutProductMetaDataTypeBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Bad request', 400);
    }
}