<?php

namespace Codenip\Factories\Method\Logger;

class StdoutLogger implements Logger
{

    public function log(string $message): void
    {
        echo $message;
    }
}