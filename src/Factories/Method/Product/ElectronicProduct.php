<?php

namespace Codenip\Factories\Method\Product;

class ElectronicProduct implements Product
{

    public function type(): string
    {
        return 'electronic';
    }
}