<?php

namespace Codenip\Tests\Factories\Simple;

use Codenip\Factories\Simple\CarService;
use Codenip\Factories\Simple\SimpleCarFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testCreateCar(string $type): void
    {
        $factory = new SimpleCarFactory();
        $car = $factory->create($type);

        self::assertEquals($type, $car->type());
    }

    public function dataProvider(): iterable
    {
        yield 'electric' => ['type' =>'electric'];
        yield 'gasoline' => ['type' =>'gasoline'];
        yield 'diesel' => ['type' =>'diesel'];

    }
}