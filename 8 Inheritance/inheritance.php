<?php
require_once "Book.php";
require_once "PhysicalBook.php";
require_once "DigitalBook.php";

$book = new Book('Galahad', 'John Doe', 20);
print $book->printout() . "\n";

$physicalBook = new PhysicalBook('Tom Soier', 'Mark Twan', 36, 4);
print $physicalBook->printout();

$digitalBook = new DigitalBook('Kindle', 'Amazon', 14, 3);
print $digitalBook->printout();
