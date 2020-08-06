<?php

namespace App\Library;
    

class Book
{
    private $title; 
    private $numberOfPages;
    private $bookmark = 1;

    public function __construct(string $title, int $numberOfPages)
    {
        $this->title = $title;
        $this->numberofPages = $numberOfPages;
    }

    public function read(int $progress) : Book
    {
        $this->bookmark += $progress;
        return $this;
    }

    public function currentPage() : int
    {
        return $this->bookmark;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

}