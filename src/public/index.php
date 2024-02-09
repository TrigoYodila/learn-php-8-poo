<?php

//Classes & Objects

// import class
require_once '../Transaction.php';

//create transaction object
$transaction = new Transaction(15,'Transaction 1');

var_dump($transaction->amount);