<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-15
 * Time: 17:07
 */

namespace Patterns\ObserverPattern;

use Assets\OutputBuffer;
use Patterns\ObserverPattern\Observers\ExchangeRateObserver;
use Patterns\ObserverPattern\Subjects\ExchangeRateGrabber;

class Runner {
    /**
     *
     * The observer pattern is used to update many objects at
     * the same time with data coming from a "Publisher"
     * that would transmit data without knowing about
     * the existence of the "Observers" or objects
     * who gets updated.
     *
     * The observers would subscribe to the types
     * of updates they want to receive from
     * the Publisher.
     *
     * This pattern has a very loose coupling
     * between the Publisher and the
     * Observers since a publisher
     * doesn't know about the
     * Observers however
     * many they are.
     *
     * Publisher = Subject
     *
     */
    public function run() {
        $outputBuffer = new OutputBuffer();

        $exchangeRateGrabber = new ExchangeRateGrabber();
        $exchangeRateGrabber->setEur(10.04);
        $exchangeRateGrabber->setGbp(12.25);
        $exchangeRateGrabber->setUsd(8.14);

        $observer1 = new ExchangeRateObserver($exchangeRateGrabber, $outputBuffer);
        $exchangeRateGrabber->setGbp(11.98);
        $exchangeRateGrabber->setGbp(11.91);

        $observer2 = new ExchangeRateObserver($exchangeRateGrabber, $outputBuffer);
        $exchangeRateGrabber->setUsd(8.64);

        $observer3 = new ExchangeRateObserver($exchangeRateGrabber, $outputBuffer);
        $observer2->unregister();
        $exchangeRateGrabber->setGbp(12.22);
        $exchangeRateGrabber->setEur(9.32);

        return $outputBuffer->readBuffer();
    }
}
