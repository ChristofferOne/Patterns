<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-29
 * Time: 14:34
 */

namespace Patterns\IteratorPattern\Music;

class SongInfo {
    private $songName;
    private $bandName;
    private $yearReleased;

    public function __construct(String $songName, String $bandName, Int $yearReleased) {
        $this->songName = $songName;
        $this->bandName = $bandName;
        $this->yearReleased = $yearReleased;
    }

    public function getSongName() { return $this->songName; }
    public function getBandName() { return $this->bandName; }
    public function getYearReleased() { return $this->yearReleased; }
}