<?php

namespace AlexanderZabornyi\FactoryMethodTest;

class CarMercedes implements VehicleInterface
{
    private $color;
    private $tuning;

    /**
     * Установить цвет
     *
     * @param string $rgb
     */
    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }

    /**
     * Добавить тюнинг
     */
    public function addTuning()
    {
        $this->tuning = true;
    }
}