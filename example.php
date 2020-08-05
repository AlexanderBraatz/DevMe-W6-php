<?php
 //properties
  //constructor
 //methods 

require __DIR__ . "/vendor/autoload.php";

// a class is a template for making objects
class Classname // 1st-Capitalised
{
    private $a;
    private $b;

    private $c = _value_; // $this->c is given a *default* value

    public function __construct($_b_)
    {
        $this->b =$_b_;
        $this->numberplate = $numberplate;
        //$this->mileage = $mileage; ????? why not??

    }
    
    public function getNumberplate()
    {
        return $this->numberplate;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function getMileage()
    {
        return $this->mileage;
    }

    public function addJourney($miles)
    {
        $this->mileage += $miles;
    }

}