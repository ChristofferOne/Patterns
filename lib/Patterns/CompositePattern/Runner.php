<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-23
 * Time: 19:58
 */

namespace Patterns\CompositePattern;

use Assets\BaseRunner;
use Assets\SingletonOutputBuffer;
use Patterns\CompositePattern\Music\DJ;
use Patterns\CompositePattern\Music\Song;
use Patterns\CompositePattern\Music\SongGroup;

class Runner extends BaseRunner {
    /**
     *
     *
     *
     */
    protected function Run() {
        $industrialMusic = new SongGroup("Industrial", "Desc 1");
        $heavyMetallMusic = new SongGroup("Heavy metal", "Desc 2");
        $dubsteplMusic = new SongGroup("Dubstep", "Desc 3");

        $everySong = new SongGroup("Song list", "Every song");
        $everySong->add($industrialMusic);

        $industrialMusic->add(new Song("Song 1", "Band 1", 1990));
        $industrialMusic->add(new Song("Song 2", "Band 12", 1976));

        $industrialMusic->add($dubsteplMusic);

        $dubsteplMusic->add(new Song("Song 3", "Band 15", 1996));
        $dubsteplMusic->add(new Song("Song 4", "Band 22", 2003));

        $everySong->add($heavyMetallMusic);

        $heavyMetallMusic->add(new Song("Song 5", "Band 19", 2012));
        $heavyMetallMusic->add(new Song("Song 6", "Band 4", 1987));

        $larry = new DJ($everySong);
        $larry->getSongList();

        $buffer = SingletonOutputBuffer::getInstance()->readBuffer();
        foreach ($buffer as $item) {
            $this->write($item);
        }
    }
}