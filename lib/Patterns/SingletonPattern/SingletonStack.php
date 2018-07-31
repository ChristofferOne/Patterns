<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 14:34
 */

namespace Patterns\SingletonPattern;

class SingletonStack {
    private static $firstInstance = null;
    private $stack = [];

    private function __construct() {}

    public static function getInstance() : SingletonStack {
        if (self::$firstInstance == null) {
            self::$firstInstance = new SingletonStack();
        }

        return self::$firstInstance;
    }

    public function push(String $tItem) {
        $this->stack[] = $tItem;
    }

    public function pop() {
        return array_pop($this->stack);
    }
}