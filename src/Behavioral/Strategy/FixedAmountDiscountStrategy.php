<?php

namespace Codenip\Behavioral\Strategy;

use Codenip\Behavioral\Strategy\model\Product;

readonly class FixedAmountDiscountStrategy implements DiscountStrategy
{

    public function __construct(
        private float $amount
    )
    {
    }

    public function calculateDiscount(Product $product): float
    {
        return min($this->amount, $product->getPrice());
    }
}