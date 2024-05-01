<?php

namespace Codenip\Factories\Method;

use Codenip\Factories\Method\Logger\Logger;
use Codenip\Factories\Method\Logger\StdoutLogger;

class StdoutLoggerFactory implements LoggerFactory
{

    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}