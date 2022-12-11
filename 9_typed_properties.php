<?php
class Song
{
    // Typed Properties
    public string $title;
    public $author;

    public function __construct(string $title, int $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
}


$song = new Song('HBi', 900);
var_dump($song); // "title", 900

$songTitles = ['Yesterday', 'Hello Dolly', 'Bla bla bla'];
$song = new Song($songTitles[0], 67);
$song->title = $songTitles;
var_dump($song->title); // Fatal error: Uncaught TypeError: Cannot assign array to property Song::$title of type string in /Users/macbooknew/Documents/PHP/OOP-PHP/9_typed_properties.php:21
