<?php

namespace Codenip\Structural\Facade;

readonly class VideoFile
{
    public function __construct(private string $filePath)
    {
    }

    public function getFilePath(): string
    {
        return $this->filePath;
    }

}