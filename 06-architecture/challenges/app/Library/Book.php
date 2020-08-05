<?php

namespace App\Library;
    

class Book
{
    private $title; 
    private $numberOfPages;
    private $bookmark = 1;

    public function __construct($title, $numberOfPages)
    {
        $this->title = $title;
        $this->numberofPages = $numberOfPages;
    }

    public function read($progress)
    {
        $this->bookmark += $progress;
        return $this;
    }

    public function currentPage()
    {
        return $this->bookmark;
    }

    public function getTitle()
    {
        return $this->title;
    }

}