<?php
namespace Patterns\StrategyPattern\Animals\Traits;

class ItFlys implements Flys {
  public function fly() : string {
    return "Flying";
  }
}
