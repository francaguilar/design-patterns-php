<?php

namespace Codenip\Structural\Decorator;

class HotelPackage extends TripDecorator
{
    private const int COST = 200;
    public function cost(): int
    {
        return $this->trip->cost() + self::COST;
    }

    public function description(): string
    {
        return sprintf( '%s + Hotel', $this->trip->description());
    }



}