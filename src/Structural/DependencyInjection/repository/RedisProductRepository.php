<?php

namespace Codenip\Structural\DependencyInjection\repository;

use Codenip\Structural\DependencyInjection\model\Product;

class RedisProductRepository implements ProductRepository
{

    public function save(Product $product): void
    {
        echo 'Saving product with RedisProductRepository' . PHP_EOL;
    }
}