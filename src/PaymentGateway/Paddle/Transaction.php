<?php

declare(strict_types=1);

namespace PaymentGateway\Paddle;

//import DateTime class
use DateTime;

//using alias to import namespace contain same name of class name
use PaymentGateway\Stripe\Transaction as StipeTransaction;

class Transaction{
    
    /**
     * Class constructor.
     */
    public function __construct()
    {
       //use other class in the same namespace
       //var_dump(new CustomerProfile());

       // si la classe php n'est pas importé
       //var_dump(new \DateTime());

       // si elle est importé par use
       //var_dump(new DateTime());

       //use a class from a other namespace
       var_dump(new \Notification\Email());
    }
}