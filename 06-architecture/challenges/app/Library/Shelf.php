<?php

namespace App\Library;
class Shelf
{
    private $onShelf = [];


    public function addBook(Book $Book) : Shelf
    {
        $this->onShelf[] = $Book;
        return $this;
    }

    public function titles() : array
    {
        return collect($this->onShelf)->map(fn($Book) => $Book->getTitle())->all();
        //return collect($this->onShelf)->reduce(fn($str, $Book) =>  "{$str}, {$Book->getTitle()}", "");
    }
}
