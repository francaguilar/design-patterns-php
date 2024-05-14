<?php

namespace Codenip\Tests\Behavioral\Strategy;

use Codenip\Behavioral\Strategy\FixedAmountDiscountStrategy;
use Codenip\Behavioral\Strategy\model\Product;
use Codenip\Behavioral\Strategy\NoDiscountStrategy;
use Codenip\Behavioral\Strategy\OrderProcessor;
use Codenip\Behavioral\Strategy\PercentageDiscountStrategy;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testDiscountStrategy(OrderProcessor $processor, float $expectedFinalPrice)
    {
        $product = new Product('Macbook Pro', 4000.0);

        $finalPrice = $processor->calculateFinalPrice($product);

        $this->assertEquals($expectedFinalPrice, $finalPrice);
    }


    public static function dataProvider(): iterable
    {
        yield 'No discount' => [
            'processor' => new OrderProcessor(new NoDiscountStrategy()),
            'expectedFinalPrice' => 4000.0
        ];

        yield 'Percentage discount' => [
            'processor' => new OrderProcessor(new PercentageDiscountStrategy(10)),
            'expectedFinalPrice' => 3600.0
        ];

        yield 'Fixed amount discount' => [
            'processor' => new OrderProcessor(new FixedAmountDiscountStrategy(1000.0)),
            'expectedFinalPrice' => 3000.0
        ];

        yield 'Fixed discount greater than product price' => [
            'processor' => new OrderProcessor(new FixedAmountDiscountStrategy(5000.0)),
            'expectedFinalPrice' => 0.0
        ];
    }
}