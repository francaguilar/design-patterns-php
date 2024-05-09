<?php

namespace Codenip\Behavioral\Observer;

interface Subject
{
    public function registerObserver(Observer $observer): void;

    public function removeObserver(Observer $observer): void;

    public function notifyObservers(): void;
}