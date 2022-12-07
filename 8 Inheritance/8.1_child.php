<?php
require_once "8_inheritance.php";

$paperBook = new Book('Tom Soier', 'Mark Twan', 20);
$PDFBook = new Book('kindle', 'Amazon', 78);

print $paperBook->getTitle() . PHP_EOL;   # Tom Soier
print $paperBook->getAuthor() . PHP_EOL;  # Mark Twan
print $paperBook->getPrice() . PHP_EOL;   # $20
