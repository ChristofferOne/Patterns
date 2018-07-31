<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-29
 * Time: 14:37
 */

namespace Patterns\IteratorPattern\Music;

class SongsOfThe80s {
    private $bestSongs;

    private $arrayValue = 0;

    public function __construct() {
        $this->bestSongs = [];

        $this->addSong("Roam", "B52s", 1989);
        $this->addSong("Cruel Summer", "Bananarama", 1984);
        $this->addSong("Head Over Heels", "Tears for Fears", 1985);
    }

    public function addSong(String $songName, String $bandName, Int $yearReleased) {
        $songInfo = new SongInfo($songName, $bandName, $yearReleased);

        $this->bestSongs[$this->arrayValue] = $songInfo;
        $this->arrayValue++;
    }

    public function getBestSongs() : array {
        return $this->bestSongs;
    }
}