<?php

namespace Starweb\Api\Client\Exception;

class DeleteOrderStatusForbiddenException extends \RuntimeException implements ClientException
{
    private $errorModel;
    public function __construct(\Starweb\Api\Client\Model\ErrorModel $errorModel)
    {
        parent::__construct('Bad request', 403);
        $this->errorModel = $errorModel;
    }
    public function getErrorModel()
    {
        return $this->errorModel;
    }
}