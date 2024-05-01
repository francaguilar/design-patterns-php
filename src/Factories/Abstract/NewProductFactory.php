<?php

namespace Codenip\Factories\Abstract;

use Codenip\Factories\Abstract\Interface\Product;
use Codenip\Factories\Abstract\Interface\ProductFactory;
use Codenip\Factories\Abstract\Interface\SparePartProduct;
use Codenip\Factories\Abstract\Product\NewProduct;
use Codenip\Factories\Abstract\SparePartProduct\NewSparePartProduct;

class NewProductFactory implements ProductFactory
{

    public function createProduct(): Product
    {
        return new NewProduct();
    }

    public function createSparePartProduct(): SparePartProduct
    {
        return new NewSparePartProduct();
    }
}