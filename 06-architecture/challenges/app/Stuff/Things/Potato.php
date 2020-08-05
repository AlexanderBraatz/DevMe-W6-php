<?php

namespace App\Stuff\Things;

class Potato
{
    
    private $Watercount = 0;

    public function water()
    {
        $this->Watercount += 1;
        return $this;
    }

    public function hasGrown()
    {
        return $this->Watercount >= 5;
    }
}