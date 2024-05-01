<?php

namespace Codenip\Factories\Simple;

readonly class Car
{
    public function __construct(private string $type)
    {

    }

    public function type(): string
    {
        return $this->type;
    }

}