<?php

//Classes & Objects

// import class
require_once '../Transaction.php';

//create transaction object
$transaction = new Transaction(100,'Transaction 1');

// crée l'object avec appel des méthodes
// $transaction = (new Transaction(100,'Transaction 1'))
//     ->addTax(8)
//     ->applyDiscount(10)
//     ->getAmount();

// $transaction->addTax(8);
// $transaction->applyDiscount(10);

// appel des méthodes combinées
$transaction->addTax(8)->applyDiscount(10);

var_dump($transaction->getAmount());