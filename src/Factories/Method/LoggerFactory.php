<?php

namespace Codenip\Factories\Method;

use Codenip\Factories\Method\Logger\Logger;

interface LoggerFactory
{
    public function createLogger(): Logger;
}