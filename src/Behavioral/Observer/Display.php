<?php

namespace Codenip\Behavioral\Observer;

class Display implements Observer
{

    public function update(float $temperature): void
    {
        echo sprintf("Temperature has changed: %sºC", $temperature) . PHP_EOL;
    }
}