<?php

declare(strict_types=1);

namespace App\PaymentGateway\Stripe;

class Transaction{

    private float $amount;

    /**
     * Class constructor.
     */
    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount() : float
    {
        return $this->amount;
    }

    public function setAmount(float $amount):float
    {
        $this->amount = $amount;
    }

}