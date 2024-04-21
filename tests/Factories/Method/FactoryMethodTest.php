<?php

namespace Codenip\Tests\Factories\Method;

use Codenip\Factories\Method\ElectronicProductFactory;
use Codenip\Factories\Method\FoodProductFactory;
use Codenip\Factories\Method\Logger\FileLogger;
use Codenip\Factories\Method\Logger\StdoutLogger;
use Codenip\Factories\Method\Product\ElectronicProduct;
use Codenip\Factories\Method\Product\FileLoggerFactory;
use Codenip\Factories\Method\Product\FoodProduct;
use Codenip\Factories\Method\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testElectronicProductFactory()
    {
        $factory = new ElectronicProductFactory();
        $product = $factory->create();
        self::assertInstanceOf(ElectronicProduct::class, $product);
        self::assertEquals('electronic', $factory->getType());
    }

    public function testFoodProductFactory()
    {
        $factory = new FoodProductFactory();
        $product = $factory->create();
        self::assertInstanceOf(FoodProduct::class, $product);
        self::assertEquals('food', $factory->getType());
    }

    public function  testCanCreateStoutLogger()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();
        self::assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLoggin()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();
        self::assertInstanceOf(FileLogger::class, $logger);
    }
}