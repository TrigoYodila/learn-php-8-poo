<?php

namespace App;

trait CappucinoTrait
{
    public function makeCappucino()
    {
        echo static::class . ' is making cappucino' . PHP_EOL;
    }
}