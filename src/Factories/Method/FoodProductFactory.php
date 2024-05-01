<?php

namespace Codenip\Factories\Method;

use Codenip\Factories\Method\Product\FoodProduct;
use Codenip\Factories\Method\Product\Product;

class FoodProductFactory extends ProductFactory
{

    public function create(): Product
    {
        return new FoodProduct();
    }
}