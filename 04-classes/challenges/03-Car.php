<?php
declare(strict_types=1);
require __DIR__ . "/vendor/autoload.php";


//Create a class that represents a car


class Car
{
    private $make;
    private $numberplate;
    private $mileage = 0;

    public function __construct(string $make, string $numberplate)
    {
        $this->make =$make;
        $this->numberplate = $numberplate;
        //$this->mileage = $mileage; ????? why not??

    }
    
    public function getNumberplate() : string
    {
        return $this->numberplate;
    }

    public function getMake() :string
    {
        return $this->make;
    }

    public function getMileage() : float
    {
        return $this->mileage;
    }

    public function addJourney(float $miles) : Car
    {
        $this->mileage += $miles;
        return $this;
    }

}

// you pass in a make and number plate
$car = new Car("Ford", "XY11 4TY");

// you can get various bits of information about it
dump($car->getNumberplate()); // "XY11 4TY"
dump($car->getMake()); // "Ford"
dump($car->getMileage()); // 0

// you can add journey
//$car->addJourney(100); not needed because i implemented chaining
dump($car->addJourney(100)->getMileage()); // 100

// $car->addJourney(200); same
dump($car->addJourney(200)->getMileage()); // 300