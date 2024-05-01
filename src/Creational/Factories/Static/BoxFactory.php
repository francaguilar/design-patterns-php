<?php

declare(strict_types=1);

namespace Codenip\Creational\Factories\Static;

class BoxFactory
{
    public static function createSmallBox(): SmallBox
    {
        return new SmallBox();
    }

    public static function createMediumBox(): MediumBox
    {
        return new MediumBox();
    }

    public static function createLargeBox(): LargeBox
    {
        return new LargeBox();
    }
}