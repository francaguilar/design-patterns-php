<?php

namespace Codenip\Factories\Method\Product;

class FoodProduct implements Product
{

    public function type(): string
    {
        return 'food';
    }
}