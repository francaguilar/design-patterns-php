<?php

namespace Codenip\Factories\Method;

use Codenip\Factories\Method\Product\Product;

abstract class ProductFactory
{
    abstract public function create(): Product;

    public function getType(): string
    {
        $product = $this->create();

        return $product->type();
    }
}