<?php

namespace App;

class Invoice
{
    /**
     * Class constructor.
     */
    public function __construct(public float $amount, public string $description)
    {
        
    }
}