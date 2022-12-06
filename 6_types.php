<?php

declare(strict_types=1);

class Song
{

    /* OLD WAY
    * @param string $name
    * @param int $numberOfPlays
    */
    public function __construct(public string $name, public int $numberOfPlays)
    {
    }
}

$song = new Song('Yesterday', 10299);
print $song->name . PHP_EOL; #Yesterday
print $song->numberOfPlays . PHP_EOL; #10299
