<?php

class Car
{
  public function __construct(public string $name) {}

  public function start(): string
  {
    return "Car {$this->name} is started";
  }

  public function drive(): string
  {
    return "Driving {$this->name}";
  }
}

class Bike
{

  public function start(): string
  {
    return "Bike started";
  }

  public function ride(): string
  {
    return "Riding bike";
  }
}

class VehicleFactory
{
  public static function create(string $type)
  {
    $availableCars = ['mercedes', 'volsvagan', 'bmw'];
    return match ($type) {
      'car' => new Car($availableCars[array_rand($availableCars)]),
      'bike' => new Bike()
    };
  }
}

$car = VehicleFactory::create('car');
$bike = VehicleFactory::create('bike');

echo $car->start() . PHP_EOL;
echo $car->drive() . PHP_EOL;
echo $bike->start() . PHP_EOL;
echo $bike->ride() . PHP_EOL;
