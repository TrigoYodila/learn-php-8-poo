<?php

namespace App;

class CoffeeMarker
{
    public function makeCoffee()
    {
        echo static::class . ' is making coffee' . PHP_EOL;
    }
}