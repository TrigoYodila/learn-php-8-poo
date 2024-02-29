<?php 

require_once __DIR__ . '/../vendor/autoload.php';

//started session

//session_start();

$router = new App\Router();

// $router->register(
//     '/',
//     function (){
//         echo 'Home';
//     }
// );

$router
    ->get('/', [App\Classes\Home::class,'index'])
    ->get('/invoices', [App\Classes\Invoice::class, 'index'])
    ->get('/invoices/create', [App\Classes\Invoice::class, 'create'])
    ->post('/invoices/create', [App\Classes\Invoice::class, 'create']);

// $router->register(
//     '/invoices',
//     function(){
//         echo 'Invoices';
//     }
// );

echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));

// var_dump($_SESSION);

var_dump($_COOKIE);