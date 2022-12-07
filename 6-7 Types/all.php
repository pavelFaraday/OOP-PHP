<?php
include_once "6_types.php";
include_once "7_class_type_declarations.php";

$playlist = new Playlist();
$song_1 = new Song("I love U", 87990);
$song_2 = new Song("bla bla bla", 26);

$playlist->addSong($song_1);
$playlist->addSong($song_2);
print count($playlist->songs) . PHP_EOL; #2

foreach ($playlist->songs as $song) {
    print $song->name . PHP_EOL;
    print $song->numberOfPlays . PHP_EOL;
}

print $playlist->something();
