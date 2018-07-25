<?php

namespace Starweb\Api\Operation\MediaFiles;

use Starweb\Api\Model\UploadFileInterface;
use Starweb\Api\Operation\Operation;
use Starweb\Api\Operation\UploadFileOperation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpdateMediaFile extends Operation implements UploadFileOperation
{
    /**
     * @var UploadFileInterface
     */
    private $uploadFile;

    public function __construct(
        UploadFileInterface $uploadFile,
        array $queryParameters = [],
        array $pathParameters = [],
        array $headers = []
    ) {
        parent::__construct($queryParameters, $pathParameters, $headers);
        $this->uploadFile = $uploadFile;
    }

    public function getUploadFile(): UploadFileInterface
    {
        return $this->uploadFile;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getPath(): string
    {
        return '/media-files/{mediaFileId}';
    }

    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired(['mediaFileId']);
        $resolver->setAllowedTypes('mediaFileId', 'int');

        return $resolver;
    }


}
