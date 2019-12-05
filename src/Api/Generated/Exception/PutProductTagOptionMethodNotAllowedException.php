<?php

namespace Starweb\Api\Generated\Exception;

class PutProductTagOptionMethodNotAllowedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Method Not Allowed', 405);
    }
}