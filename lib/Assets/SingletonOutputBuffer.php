<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-23
 * Time: 21:01
 */

namespace Assets;

class SingletonOutputBuffer extends OutputBuffer {
    private static $firstInstance;

    private function __construct() {
    }

    public static function getInstance() : SingletonOutputBuffer {
        if (self::$firstInstance == null) {
            self::$firstInstance = new SingletonOutputBuffer();
        }

        return self::$firstInstance;
    }
}