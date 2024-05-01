<?php

namespace Codenip\Creational\Factories\Static;

class LargeBox implements Box
{

    public function size(): string
    {
        return "Large";
    }
}