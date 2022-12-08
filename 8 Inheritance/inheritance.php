<?php
require_once "Book.php";
require_once "PhysicalBook.php";
require_once "DigitalBook.php";

$physicalBook = new PhysicalBook('Tom Soier', 'Mark Twan', 20, 4);
print $physicalBook->printout();

$digitalBook = new DigitalBook('Kindle', 'Amazon', 14, 3);
print $digitalBook->printout();
