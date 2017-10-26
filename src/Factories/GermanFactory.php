<?php

namespace AlexanderZabornyi\FactoryMethodTest\Factories;

use AlexanderZabornyi\FactoryMethodTest\Bicycle;
use AlexanderZabornyi\FactoryMethodTest\CarMercedes;
use AlexanderZabornyi\FactoryMethodTest\VehicleInterface;
use Prophecy\Exception\InvalidArgumentException;

class GermanFactory extends FactoryMethod
{
    /**
     * Создать объект
     *
     * @param string $type
     *
     * @return VehicleInterface
     */
    protected function createVehicle(string $type): VehicleInterface
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                $mercedes = new CarMercedes();
                $mercedes->addTuning();

                return $mercedes;
            default:
                throw new InvalidArgumentException("That $type is not a valid vehicle");
        }
    }
}