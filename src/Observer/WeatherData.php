<?php
/**
 * User: dongww
 * Date: 2015-2-5
 * Time: 15:20
 */

namespace Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class WeatherData implements \SplSubject
{
    /**
     * @var \SplObjectStorage
     */
    private $observers;
    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct()
    {
        $this->observers = new SplObjectStorage;
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        /** @var SplObserver $o */
        foreach ($this->observers as $o) {
            $o->update($this);
        }
    }

    public function measurementsChanged()
    {
        $this->notify();
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }

    public function getPressure()
    {
        return $this->pressure;
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->pressure    = $pressure;

        $this->measurementsChanged();
    }
}
