<?php 

// require_once '../app/PaymentGateway/Stripe/Transaction.php';
// require_once '../app/Notification/Email.php';
// require_once '../app/PaymentGateway/Paddle/CustomerProfile.php';
// require_once '../app/PaymentGateway/Paddle/Transaction.php';

spl_autoload_register(function($class){
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\','/', $class)) . '.php';

    require $path;
});

use App\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();

var_dump($paddleTransaction);