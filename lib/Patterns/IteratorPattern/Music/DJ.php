<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-29
 * Time: 14:55
 */

namespace Patterns\IteratorPattern\Music;

use Assets\SingletonOutputBuffer;

class DJ {
    private $songsOfThe70s;
    private $songsOfThe80s;
    private $songsOfThe90s;

    public function __construct(SongsOfThe70s $songsOfThe70s, SongsOfThe80s $songsOfThe80s, SongsOfThe90s $songsOfThe90s) {
        $this->songsOfThe70s = $songsOfThe70s;
        $this->songsOfThe80s = $songsOfThe80s;
        $this->songsOfThe90s = $songsOfThe90s;
    }

    public function showTheSongs() {
        $array70sSongs = $this->songsOfThe70s->getBestSongs();

        SingletonOutputBuffer::getInstance()->write("Songs of the 70s:");

        for ($i = 0; i < sizeof($array70sSongs); $i++) {
            $bestSongs = $array70sSongs[$i];
            SingletonOutputBuffer::getInstance()->write($bestSongs->getSongName);
        }
    }
}