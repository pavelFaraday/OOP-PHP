<?php
require_once "Book.php";

class DigitalBook extends Book
{
    public $fileSize;

    // transpering/clone Parent properties in child via constructor
    public function __construct(string $title, string $author, int $price, int $fileSize)
    {
        parent::__construct($title, $author, $price);
        $this->fileSize = $fileSize;
    }

    public function getfileSize()
    {
        return $this->fileSize;
    }

    public function printout()
    {
        return
            "Title: {$this->title}, Author: {$this->author}, Price: \${$this->price}, Filesize: {$this->fileSize}MB \n";
    }
}
