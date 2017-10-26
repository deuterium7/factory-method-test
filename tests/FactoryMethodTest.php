<?php

namespace AlexanderZabornyi\FactoryMethodTest\Tests;

use AlexanderZabornyi\FactoryMethodTest\Bicycle;
use AlexanderZabornyi\FactoryMethodTest\CarFerrari;
use AlexanderZabornyi\FactoryMethodTest\CarMercedes;
use AlexanderZabornyi\FactoryMethodTest\Factories\FactoryMethod;
use AlexanderZabornyi\FactoryMethodTest\Factories\GermanFactory;
use AlexanderZabornyi\FactoryMethodTest\Factories\ItalianFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateCheapVehicleInGermany()
    {
        $factory = new GermanFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class, $result);
    }

    public function testCanCreateFastVehicleInGermany()
    {
        $factory = new GermanFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarMercedes::class, $result);
    }

    public function testCanCreateCheapVehicleInItaly()
    {
        $factory = new ItalianFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class, $result);
    }

    public function testCanCreateFastVehicleInItaly()
    {
        $factory = new ItalianFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarFerrari::class, $result);
    }

    public function testUnknownType()
    {
        (new ItalianFactory())->create('unknown');
    }
}