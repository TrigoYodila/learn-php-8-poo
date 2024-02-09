<?php

declare(strict_types=1);

class Transaction {
    public float $amount;
    public string $description;

    /**
     * Class constructor.
     */
    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }
}