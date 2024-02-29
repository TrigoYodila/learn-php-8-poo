<?php 

require_once __DIR__ . '/../vendor/autoload.php';

//recupere le dossier du fichier index.php,
//sort d'un niveau du fichier index.(src), prend le dossier storage
define('STORAGE_PATH', __DIR__ . '/../storage');

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
    ->post('/upload', [App\Classes\Home::class, 'upload'])
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

//var_dump($_COOKIE);
