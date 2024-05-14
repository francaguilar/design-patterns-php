<?php

namespace Codenip\Behavioral\Strategy\model;

class Product
{
    public function __construct(
        private readonly string $name,
        private readonly float $price
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }




}