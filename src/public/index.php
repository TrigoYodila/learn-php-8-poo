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

echo '</br></br>';

// Namespaces
require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../PaymentGateway/Paddle/Transaction.php';

//utilisation de use pour importer l'espace de nom
use PaymentGateway\Paddle\Transaction;

//utilise la classe se trouvant dans le namespace précisé
var_dump(new PaymentGateway\Stripe\Transaction());

//utiliser avec use
var_dump(new Transaction());