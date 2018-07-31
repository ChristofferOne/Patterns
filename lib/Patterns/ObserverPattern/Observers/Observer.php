<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-15
 * Time: 18:35
 */

namespace Patterns\ObserverPattern\Observers;

interface Observer {
    public function update($eur, $gbp, $usd);
}