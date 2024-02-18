<?php

namespace App;

//abstract class
abstract class Field
{
    /**
     * Class constructor.
     */
    public function __construct(protected string $name)
    {
        
    }

    //define abstract method
    abstract public function render():string;
}