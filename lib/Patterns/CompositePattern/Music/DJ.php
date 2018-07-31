<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-23
 * Time: 20:52
 */

namespace Patterns\CompositePattern\Music;

class DJ {
    private $songList;

    public function __construct(SongComponent $songList) {
        $this->songList = $songList;
    }

    public function getSongList() {
        $this->songList->displaySongInfo();
    }
}