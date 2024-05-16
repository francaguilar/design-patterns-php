<?php

namespace Codenip\Tests\Structural\Decorator;

use Codenip\Structural\Decorator\BasicTrip;
use Codenip\Structural\Decorator\CarRental;
use Codenip\Structural\Decorator\HotelPackage;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testDecorator()
    {
        $trip = new BasicTrip();
        $this->assertEquals(100, $trip->cost());
        $this->assertEquals('Basic trip', $trip->description());

        $tripWithHotel = new HotelPackage($trip);
        $this->assertEquals(300, $tripWithHotel->cost());
        $this->assertEquals('Basic trip + Hotel', $tripWithHotel->description());

        $tripWithCarRental = new CarRental($trip);
        $this->assertEquals(250, $tripWithCarRental->cost());
        $this->assertEquals('Basic trip + Car rental', $tripWithCarRental->description());

        $tripWithHotelAndCarRental = new CarRental($tripWithHotel);
        $this->assertEquals(450, $tripWithHotelAndCarRental->cost());
        $this->assertEquals('Basic trip + Hotel + Car rental', $tripWithHotelAndCarRental->description());
    }
}