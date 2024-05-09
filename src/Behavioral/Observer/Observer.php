<?php

namespace Codenip\Behavioral\Observer;

interface Observer
{
    public function update(float $temperature): void;

}