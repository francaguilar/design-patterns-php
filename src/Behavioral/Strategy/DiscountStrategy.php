<?php

namespace Codenip\Behavioral\Strategy;

use Codenip\Behavioral\Strategy\model\Product;

interface DiscountStrategy
{
    public function calculateDiscount(Product $product): float;
}