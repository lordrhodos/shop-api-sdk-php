<?php

namespace Starweb\Api\Generated\Exception;

class PatchProductMetaDataTypeBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Bad request', 400);
    }
}