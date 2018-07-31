<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 15:04
 */

namespace Patterns\CommandPattern;

interface Command {
    public function execute();
    public function undo();
}