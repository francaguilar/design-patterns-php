<?php

namespace Codenip\Tests\Factories\Abstract;

use Codenip\Factories\Abstract\NewProductFactory;
use Codenip\Factories\Abstract\Product\NewProduct;
use Codenip\Factories\Abstract\Product\UsedProduct;
use Codenip\Factories\Abstract\SparePartProduct\NewSparePartProduct;
use Codenip\Factories\Abstract\SparePartProduct\UsedSparePartProduct;
use Codenip\Factories\Abstract\UsedProductFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testNewProductFactory(): void
    {
        $factory = new NewProductFactory();

        $product = $factory->createProduct();
        $sparePartProduct = $factory->createSparePartProduct();

        self::assertInstanceOf(NewProduct::class, $product);
        self::assertInstanceOf(NewSparePartProduct::class, $sparePartProduct);
    }

    public function testUsedProductFactory(): void
    {
        $factory = new UsedProductFactory();

        $product = $factory->createProduct();
        $sparePartProduct = $factory->createSparePartProduct();

        self::assertInstanceOf(UsedProduct::class, $product);
        self::assertInstanceOf(UsedSparePartProduct::class, $sparePartProduct);
    }
}