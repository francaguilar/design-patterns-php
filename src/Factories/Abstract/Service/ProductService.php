<?php

namespace Codenip\Factories\Abstract\Service;

use Codenip\Factories\Abstract\NewProductFactory;
use Codenip\Factories\Abstract\UsedProductFactory;

class ProductService
{
    public function createProduct(string $type): void
    {
        $factory = new NewProductFactory();

        if ('used' === $type) {
            $factory = new UsedProductFactory();
        }

        $product = $factory->createProduct();
        $spareParts = $factory->createSparePartProduct();

    }
}