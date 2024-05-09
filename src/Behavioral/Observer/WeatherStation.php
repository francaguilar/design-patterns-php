<?php

namespace Codenip\Behavioral\Observer;

class WeatherStation implements Subject
{
    private float $temperature = 0.0;
    /**
     * @var array Observer
     */
    private array $observers = [];

    public function setTemperature(float $temperature): void
    {
        $this->temperature = $temperature;
        $this->notifyObservers();
    }


    public function registerObserver(Observer $observer): void
    {
        if (!in_array($observer, $this->observers, true)) {
            $this->observers[] = $observer;
        }
    }

    public function removeObserver(Observer $observer): void
    {
        if (in_array($observer, $this->observers, true)) {
            unset($this->observers[array_search($observer, $this->observers, true)]);
        }

//        $key = array_search($observer, $this->observers, true);
//        if (false !== $key) {
//            unset($this->observers[$key]);
//        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature);
        }
    }
}