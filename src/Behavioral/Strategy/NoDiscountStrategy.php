<?php

namespace Codenip\Behavioral\Strategy;

use Codenip\Behavioral\Strategy\model\Product;

class NoDiscountStrategy implements DiscountStrategy
{

    public function calculateDiscount(Product $product): float
    {
        return 0.0;
    }
}