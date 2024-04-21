<?php

namespace Codenip\Factories\Simple;

class SimpleCarFactory
{
    public function __construct()
    {
        // include extra dependencies here
    }

    public function create(string $type): Car
    {
        // use dependencies here for business logic
        return new Car($type);
    }
}