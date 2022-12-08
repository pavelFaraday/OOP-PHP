<?php
require_once "Book.php";

class PhysicalBook extends Book
{
    public $weight;

    // transpering/clone Parent properties in child via constructor
    public function __construct(string $title, string $author, int $price, int $weight)
    {
        parent::__construct($title, $author, $price);
        $this->weight = $weight;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }
    public function printout()
    {
        return
            "Title: {$this->title}, Author: {$this->author}, Price: \${$this->price}, Weight: {$this->weight}KG \n";
    }
}
