<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-15
 * Time: 18:51
 */

namespace Patterns\ObserverPattern\Observers;

use Assets\OutputBuffer;
use Patterns\ObserverPattern\Subjects\Subject;

class ExchangeRateObserver implements Observer {
    private static $observerTrackingId = 0;
    private $observerId;
    private $subject;
    private $buffer;

    private $eur;
    private $gbp;
    private $usd;

    public function __construct(Subject $subject, OutputBuffer $buffer) {
        $this->subject = $subject;
        $this->buffer = $buffer;
        $this->observerId = ++self::$observerTrackingId;

        $this->buffer->write("Registered Observer with id: $this->observerId");
        $this->subject->register($this);
    }

    public function update($eur, $gbp, $usd) {
        $this->eur = $eur;
        $this->gbp = $gbp;
        $this->usd = $usd;

        $this->printRates();
    }

    private function printRates() {
        $prices = json_encode(array(
            'ObserverId' => $this->observerId,
            'EUR' => $this->eur,
            'GBP' => $this->gbp,
            'USD' => $this->usd
        ));
        $this->buffer->write($prices);
    }

    public function unregister() {
        $this->buffer->write("Unregister Observer with id: $this->observerId");
        $this->subject->unregister($this);
    }
}
