<?php

namespace Starweb\Api\Generated\Exception;

class ListProductCategoriesBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Bad request', 400);
    }
}