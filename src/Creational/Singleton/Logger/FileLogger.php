<?php

declare(strict_types=1);

namespace Codenip\Creational\Singleton\Logger;

class FileLogger implements LoggerInterface
{

    public function log(string $message): void
    {
        echo sprintf("Writing log message to file: %s\n", $message);
    }
}