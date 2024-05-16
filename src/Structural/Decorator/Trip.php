<?php

namespace Codenip\Structural\Decorator;

interface Trip
{
    public function cost(): int;

    public function description(): string;
}