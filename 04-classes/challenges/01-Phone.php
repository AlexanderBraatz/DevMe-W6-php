<?php
//Create a class that represents a phone
declare(strict_types=1);
require __DIR__ . "/vendor/autoload.php";


// ... your class here
class Phone
{
    //properties
    private $model;
    private $make;

    //constructor
    public function __construct(string $make,string $model)
    {
        $this->model = $model;
        $this->make = $make;
    }
    //methods 
    public function make() : string
    {
        return $this->make;
    }
    public function model() : string
    {
        return $this->model;
    }
}

// create three phones
$iPhone = new Phone("Apple", "iPhone XS");
$galaxy = new Phone("Samsung", "Galaxy");
$retro = new Phone("Nokia", "3210");

// use methods to find out model/make
dump($iPhone->model()); // "iPhone XS"
dump($retro->make()); // "Nokia"
dump($galaxy->make()); // "Samsung"
dump($iPhone->make()); // "Apple"