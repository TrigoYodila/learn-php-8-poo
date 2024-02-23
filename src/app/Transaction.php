<?php

namespace App;

/**
 * @property int $x
 * @property float $y
 * @property-read $z
 */

class Transaction
{
    /** 
     * Some description
     * 
     * @param Customer $customer
     * @param gloat $amount
     * 
     * @throws \RuntimeException  // exception
     * @throws \InvalidArgumentException
     * 
     * @return bool
     */

    public function process($customer, $amount)
    {
        
    }
    
}