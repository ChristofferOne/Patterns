<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 15:58
 */

namespace Patterns\AdapterPattern\AirTransport;

class Airship {
    public function lift() : String {
        return "Dropping dead-weight. Going up!";
    }

    public function fillBalloon(Int $kilos) : String {
        return "Filling balloon with $kilos Kilos of gas!";
    }

    public function tieSandBags() : String {
        return "Trying to tie the sand bags to the ship!";
    }
}