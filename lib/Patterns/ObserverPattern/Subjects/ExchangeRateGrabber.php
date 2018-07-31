<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-15
 * Time: 18:39
 */

namespace Patterns\ObserverPattern\Subjects;

use Patterns\ObserverPattern\Observers\Observer;

class ExchangeRateGrabber implements Subject {
    private $observers = [];

    // Exchange rate roughly based on SEK
    private $eur = 0;
    private $gbp = 0;
    private $usd = 0;

    public function register(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function unregister(Observer $observer) {
        $index = array_search($observer, $this->observers);
        unset($this->observers[$index]);
    }

    public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->update($this->eur, $this->gbp, $this->usd);
        }
    }

    public function setEur(float $rate) {
        $this->eur = $rate;
        $this->notifyObservers();
    }

    public function setGbp(float $rate) {
        $this->gbp = $rate;
        $this->notifyObservers();
    }

    public function setUsd(float $rate) {
        $this->usd = $rate;
        $this->notifyObservers();
    }
}