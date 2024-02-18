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
use App\PaymentGateway\Stripe\Transaction as StripeTransaction;
use App\Toaster;
use App\ToasterPro;

//$paddleTransaction = new Transaction();

//var_dump($paddleTransaction);

//used uuid package
//importation du namespace uuid
$id = new \Ramsey\Uuid\UuidFactory();

//echo $id->uuid4();

//used constants

// echo Transaction::STATUS_PAID;

// var_dump(Transaction::$count);
// var_dump(Transaction::getName());

//Heritage

// $toaster = new Toaster();
// $toasterBagel = new ToasterPro();

// $toaster->addSlice('bread');
// $toaster->toast();
// $toasterBagel->addSlice('God');
// $toasterBagel->addSlice('God');
// $toasterBagel->addSlice('God');
// $toasterBagel->addSlice('God');
// $toasterBagel->toastBagel();

//Abstract class and methods

$fields = [
    new \App\Text('textField'),
    new \App\Checkbox('checkboxField'),
    new \App\Radio('radioField'),
];

foreach ($fields as $field) {
    echo $field->render() . '<br />';
}