<?php

namespace AlexanderZabornyi\FactoryMethodTest;

class CarFerrari implements VehicleInterface
{
    private $color;

    /**
     * Установить цвет
     *
     * @param string $rgb
     */
    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
}