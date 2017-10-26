<?php

namespace AlexanderZabornyi\FactoryMethodTest;

class Bicycle implements VehicleInterface
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