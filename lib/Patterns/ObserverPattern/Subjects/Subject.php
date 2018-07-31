<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-15
 * Time: 18:34
 */

namespace Patterns\ObserverPattern\Subjects;

use Patterns\ObserverPattern\Observers\Observer;

interface Subject {
    public function register(Observer $observer);
    public function unregister(Observer $observer);
    public function notifyObservers();
}