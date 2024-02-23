<?php

namespace App;

class CollectionAgency implements DebitCollector 
{
    public function collect(float $owedAmount):float
    {
        $guaranteedd = $owedAmount * 0.5;

        return mt_rand($guaranteedd, $owedAmount);
    }
}
