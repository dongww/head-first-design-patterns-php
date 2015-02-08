<?php
/**
 * User: dongww
 * Date: 2015-2-8
 * Time: 14:30
 */

namespace Observer\Tests;


use InvalidArgumentException;
use Observer\Display\CurrentConditionsDisplay;
use Observer\WeatherData;

class ObserverTest extends \PHPUnit_Framework_TestCase
{
    /** @var WeatherData */
    protected $weatherData;

    /** @var CurrentConditionsDisplay  */
    protected $currentDisplay;

    public function setup()
    {
        $this->weatherData    = new WeatherData();
        $this->currentDisplay = new CurrentConditionsDisplay($this->weatherData);
    }

    public function testCurrentDisplay()
    {
        $this->expectOutputString(
            "Current conditions: 80 F degrees and 65% humidity\n" .
            "Current conditions: 82 F degrees and 70% humidity\n"
        );

        $this->weatherData->setMeasurements(80, 65, 30.4);
        $this->weatherData->setMeasurements(82, 70, 29.2);
    }
}
