<?php

namespace AlexanderZabornyi\FactoryMethodTest\Factories;

use AlexanderZabornyi\FactoryMethodTest\VehicleInterface;

abstract class FactoryMethod
{
    const CHEAP = 'cheap';
    const FAST = 'fast';

    abstract protected function createVehicle(string $type): VehicleInterface;

    /**
     * Создать объект из соответствующей фабрики
     *
     * @param string $type
     *
     * @return VehicleInterface
     */
    public function create(string $type): VehicleInterface
    {
        $obj = $this->createVehicle($type);
        $obj->setColor('black');

        return $obj;
    }
}