<?php

namespace App\Library;

class Library
{
    private $storage = [];

    public function addShelf($Shelf)
    {
        $this->storage[] = $Shelf;
        return $this;
    }

    public function titles()
    {
        return collect($this->storage)->reduce( function ($titles, $Shelf) {
            return $titles->merge($Shelf->titles());
        }, collect())->all();
    }
}