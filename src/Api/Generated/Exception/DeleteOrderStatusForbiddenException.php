<?php

namespace Starweb\Api\Generated\Exception;

class DeleteOrderStatusForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Bad request', 403);
    }
}