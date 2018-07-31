<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-23
 * Time: 20:49
 */

namespace Patterns\CompositePattern\Music;

use Assets\SingletonOutputBuffer;

class Song extends SongComponent {
    private $songName;
    private $bandName;
    private $releaseYear;

    public function __construct(String $songName, String $bandName, Int $releaseYear) {
        $this->songName = $songName;
        $this->bandName = $bandName;
        $this->releaseYear = $releaseYear;
    }

    public function getSongName(): String {
        return $this->songName;
    }

    public function getBandName(): String {
        return $this->bandName;
    }

    public function getReleaseYear(): Int {
        return $this->releaseYear;
    }

    public function displaySongInfo() {
        SingletonOutputBuffer::getInstance()->write($this->getSongName().$this->getBandName().$this->getReleaseYear());
    }
}