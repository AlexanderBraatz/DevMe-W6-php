<?php

namespace App\Library;
class Shelf
{
    private $onShelf = [];


    public function addBook($Book)
    {
        $this->onShelf[] = $Book;
        return $this;
    }

    public function titles()
    {
        return collect($this->onShelf)->map(fn($Book) => $Book->getTitle())->all();
        //return collect($this->onShelf)->reduce(fn($str, $Book) =>  "{$str}, {$Book->getTitle()}", "");
    }
}
