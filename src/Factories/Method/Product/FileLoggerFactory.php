<?php

namespace Codenip\Factories\Method\Product;

use Codenip\Factories\Method\Logger\FileLogger;
use Codenip\Factories\Method\Logger\Logger;
use Codenip\Factories\Method\LoggerFactory;

class FileLoggerFactory implements LoggerFactory
{
    public function __construct(private string $filePath)
    {
    }

    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}