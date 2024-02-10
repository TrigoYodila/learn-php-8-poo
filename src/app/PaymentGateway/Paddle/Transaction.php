<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

//import DateTime class
use DateTime;

//using alias to import namespace contain same name of class name
use PaymentGateway\Stripe\Transaction as StipeTransaction;

class Transaction{

    //constants
    public const STATUS_PAID = 'paid';

    //static properties
    public static int $count = 0;
    private static string $name = 'Trigo';
    
    /**
     * Class constructor.
     */
    public function __construct(
        public float $amount,
        public string $description
    )
    {
       //use other class in the same namespace
       //var_dump(new CustomerProfile());

       // si la classe php n'est pas importé
       //var_dump(new \DateTime());

       // si elle est importé par use
       //var_dump(new DateTime());

       //use a class from a other namespace
       //var_dump(new \App\Notification\Email());

       self::$count++;

    }

    public static function getName(){
        return self::$name;
    }

    public function process()
    {
        echo 'Processing paddle transaction...';
    }
}