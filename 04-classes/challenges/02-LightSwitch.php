<?php
declare(strict_types=1);
//Create a class that represents a light switch

require __DIR__ . "/vendor/autoload.php";

class LightSwitch 
{
    private $state = false;

    // public function __contruct($initialState)
    // {
    //     $this->state = $initialState;
    // }

    public function isOn() : bool
    {
        return $this->state;
    }

    public function turnOn() : LightSwitch
    {
         $this->state = true;
         return $this;
    }

    public function turnOff() : LightSwitch
    {
        $this->state = false;
        return $this;
    }

}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
dump($lightSwitch->isOn()); // false

// you can turn it on
$lightSwitch->turnOn();
dump($lightSwitch->isOn()); // true

// you can turn it off
$lightSwitch->turnOff();
dump($lightSwitch->isOn()); // false