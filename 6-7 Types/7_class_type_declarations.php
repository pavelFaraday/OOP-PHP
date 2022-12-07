<?php

class Playlist
{
    public $songs = [];
    public function addSong($song): void
    {
        $this->songs[] = $song;
    }
    public function something(): int
    {
        return 6887878;
    }
}
