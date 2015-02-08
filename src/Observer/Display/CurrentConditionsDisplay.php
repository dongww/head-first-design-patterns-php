<?php
/**
 * User: dongww
 * Date: 2015-2-5
 * Time: 15:25
 */

namespace Observer\Display;

use InvalidArgumentException;
use Observer\DisplayElement;
use Observer\WeatherData;
use SplSubject;

class CurrentConditionsDisplay implements \SplObserver, DisplayElement
{
    private $temperature;
    private $humidity;

    const EXCEPTION_INVALID_ARGUMENT_MESSAGE = '参数 $subject 必须是 WeatherData 类的实例';

    public function __construct(SplSubject $subject)
    {
        if(!($subject instanceof WeatherData)){
            throw new InvalidArgumentException(static::EXCEPTION_INVALID_ARGUMENT_MESSAGE);
        }

        $subject->attach($this);
    }

    public function display()
    {
        echo "Current conditions: {$this->temperature} F degrees and {$this->humidity}% humidity\n";
    }

    public function update(SplSubject $subject)
    {
        if(!($subject instanceof WeatherData)){
            throw new InvalidArgumentException(static::EXCEPTION_INVALID_ARGUMENT_MESSAGE);
        }

        /** @var WeatherData $subject */
        $this->temperature = $subject->getTemperature();
        $this->humidity    = $subject->getHumidity();

        $this->display();
    }
}
