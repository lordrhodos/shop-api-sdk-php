<?php

namespace Starweb\Api\Generated\Exception;

class DeleteStockLocationForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden', 403);
    }
}