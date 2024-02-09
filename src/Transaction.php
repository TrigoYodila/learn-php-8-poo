<?php

declare(strict_types=1);

class Transaction {
    private float $amount;
    private string $description;

    /**
     * Class constructor.
     */
    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    // public function addTax(float $rate){
    //     $this->amount += $this->amount * $rate / 100;
    // }

    public function addTax(float $rate) : Transaction {
        $this->amount += $this->amount * $rate / 100;

        return $this;
    }

    // public function applyDiscount(float $rate){
    //     $this->amount -= $this->amount * $rate / 100;
    // }

    public function applyDiscount(float $rate): Transaction{
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }

    public function getAmount(){
        return $this->amount;
    }


}