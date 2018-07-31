<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-29
 * Time: 14:31
 */

namespace Patterns\IteratorPattern\Music;

class SongsOfThe70s {
    private $bestSongs;

    public function __construct() {
        $this->bestSongs = [];

        $this->addSong("Imagine", "John Lennon", 1971);
        $this->addSong("American Pie", "Don McLean", 1971);
        $this->addSong("I Will Survive", "Gloria Gaynor", 1979);
    }

    public function addSong(String $songName, String $bandName, Int $yearReleased) {
        $songInfo = new SongInfo($songName, $bandName, $yearReleased);

        $this->bestSongs[] = $songInfo;
    }

    public function getBestSongs() : array {
        return $this->bestSongs;
    }
}