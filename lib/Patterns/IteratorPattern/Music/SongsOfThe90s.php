<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-29
 * Time: 14:42
 */

namespace Patterns\IteratorPattern\Music;

class SongsOfThe90s {
    private $bestSongs = [];

    private $hashKey = 0;

    public function __construct() {
        $this->addSong("Losing My Religion", "REM", 1991);
        $this->addSong("Creep", "Radiohead", 1993);
        $this->addSong("Walk on the Ocean", "Toad the Wet Sprocket", 1991);
    }

    public function addSong(String $songName, String $bandName, Int $yearReleased) {
        $songInfo = new SongInfo($songName, $bandName, $yearReleased);

        $this->bestSongs[$this->hashKey] = $songInfo;
        $this->hashKey++;
    }

    public function getBestSongs() : array {
        return $this->bestSongs;
    }
}