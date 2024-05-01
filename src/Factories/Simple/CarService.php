<?php

namespace Codenip\Factories\Simple;

readonly class CarService
{
    public function __construct(private SimpleCarFactory $simpleCarFactory)
    {

    }

    public function createCar(string $type): void
    {
        $car = $this->simpleCarFactory->create($type);
    }

}