<?php

namespace App\Library;

class Library
{
    private $storage = [];

    public function addShelf(Shelf $Shelf) : Library
    {
        $this->storage[] = $Shelf;
        return $this;
    }

    public function titles() : array
    {
        return collect($this->storage)->reduce( function ($titles, $Shelf) {
            return $titles->merge($Shelf->titles());
        }, collect())->all();
    }
}