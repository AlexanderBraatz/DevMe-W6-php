<?php

namespace App;

class Person
{
    private $firstN;
    private $lastN;

    public function __construct($firstN, $lastN)
    {
        $this->firstN = $firstN;
        $this->lastN = $lastN;
    }

    public function sayHelloTo($Person)
    {
        return "Hello {$Person->fullname()}";
    } 

    public function fullname()
    {
        return "{$this->firstN} {$this->lastN}";
    }  
}