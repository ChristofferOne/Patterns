<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-23
 * Time: 20:16
 */

namespace Patterns\CompositePattern\Music;

abstract class SongComponent {
    public function add(SongComponent $component) {
        return "UnfupportedOperationException";
    }

    public function remove(SongComponent $component) {
        return "UnfupportedOperationException";
    }

    public function get(Int $componentIndex) {
        return "UnfupportedOperationException";
    }

    public function getSongName() : String {
        return "UnfupportedOperationException";
    }

    public function getBandName() : String {
        return "UnfupportedOperationException";
    }

    public function getReleaseYear() : Int {
        return "UnfupportedOperationException";
    }

    public function displaySongInfo() {
        return "UnfupportedOperationException";
    }
}