<?php 

// require_once '../app/PaymentGateway/Stripe/Transaction.php';
// require_once '../app/Notification/Email.php';
// require_once '../app/PaymentGateway/Paddle/CustomerProfile.php';
// require_once '../app/PaymentGateway/Paddle/Transaction.php';

/*spl_autoload_register(function($class){
    //construire le path pour charger les classes
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\','/', $class)) . '.php';

    require $path;
});*/

//load files with composer
require_once __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

//$paddleTransaction = new Transaction();

//var_dump($paddleTransaction);

//used uuid package
//importation du namespace uuid
$id = new \Ramsey\Uuid\UuidFactory();

//echo $id->uuid4();

//used constants

echo Transaction::STATUS_PAID;

var_dump(Transaction::$count);
var_dump(Transaction::getName());