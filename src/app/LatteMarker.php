<?php

namespace App;

class LatteMarker extends CoffeeMarker
{
    //call trait of class
    use LatteTrait;
    
    // public function makeLatte(){
    //     echo static::class . 'is making latte' . PHP_EOL;
    // }   
}