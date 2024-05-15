<?php

namespace Codenip\Structural\DependencyInjection\repository;

use Codenip\Structural\DependencyInjection\model\Product;

class MySQLProductRepository implements ProductRepository
{

    public function save(Product $product): void
    {
        echo 'Saving product with MySQLProductRepository' . PHP_EOL;
    }
}