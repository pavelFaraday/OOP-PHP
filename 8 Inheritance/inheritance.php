<?php
require_once "Book.php";
require_once "PhysicalBook.php";

$physicalBook = new PhysicalBook('Tom Soier', 'Mark Twan', 20, 4);
print $physicalBook->printout();
