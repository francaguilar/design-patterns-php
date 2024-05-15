<?php

namespace Codenip\Structural\DependencyInjection\repository;

use Codenip\Structural\DependencyInjection\model\Product;

interface ProductRepository
{
    public function save(Product $product): void;
}