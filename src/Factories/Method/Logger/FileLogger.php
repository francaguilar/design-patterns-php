<?php

namespace Codenip\Factories\Method\Logger;

class FileLogger implements Logger
{

    public function __construct(private string $filePath)
    {
    }

    public function log(string $message)
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}