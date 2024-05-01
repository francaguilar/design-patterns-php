<?php

namespace Codenip\Factories\Abstract;

use Codenip\Factories\Abstract\Interface\Product;
use Codenip\Factories\Abstract\Interface\ProductFactory;
use Codenip\Factories\Abstract\Interface\SparePartProduct;
use Codenip\Factories\Abstract\Product\UsedProduct;
use Codenip\Factories\Abstract\SparePartProduct\UsedSparePartProduct;

class UsedProductFactory implements ProductFactory
{

    public function createProduct(): Product
    {
        return new UsedProduct();
    }

    public function createSparePartProduct(): SparePartProduct
    {
        return new UsedSparePartProduct();
    }
}