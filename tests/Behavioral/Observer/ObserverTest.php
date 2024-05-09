<?php

namespace Codenip\Tests\Behavioral\Observer;

use Codenip\Behavioral\Observer\Display;
use Codenip\Behavioral\Observer\WeatherStation;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testObserver()
    {
        $weatherStation = new WeatherStation();

        $display1 = new Display();
        $display2 = new Display();

        $weatherStation->registerObserver($display1);
        $weatherStation->registerObserver($display2);

        ob_start();
        $weatherStation->setTemperature(10.0);
        $output = ob_get_clean();
        $expectedOutput = "Temperature has changed: 10ºC\nTemperature has changed: 10ºC\n";

        self::assertEquals($expectedOutput, $output);

        $weatherStation->removeObserver($display2);

        ob_start();
        $weatherStation->setTemperature(20.0);
        $output = ob_get_clean();
        $expectedOutput = "Temperature has changed: 20ºC\n";

        self::assertEquals($expectedOutput, $output);
    }
}