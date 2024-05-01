<?php

namespace Codenip\Factories\Method;

use Codenip\Factories\Method\Product\ElectronicProduct;
use Codenip\Factories\Method\Product\Product;

class ElectronicProductFactory extends ProductFactory
{

    public function create(): Product
    {
        return new ElectronicProduct();
    }
}