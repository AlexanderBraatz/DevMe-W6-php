<?php

namespace App\Stuff\Things;

class Potato
{
    
    private $Watercount = 0;

    public function water() : Potato
    {
        $this->Watercount += 1;
        return $this;
    }

    public function hasGrown() : bool
    {
        return $this->Watercount >= 5;
    }
}