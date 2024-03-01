<?php 

require_once __DIR__ . '/../vendor/autoload.php';


define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');

use App\View;

try {
    $router = new App\Router();


    $router
        ->get('/', [App\Controllers\HomeController::class,'index'])
        ->get('/download', [App\Controllers\HomeController::class, 'download'])
        ->get('/invoices', [App\Controllers\InvoiceController::class, 'index'])
        ->post('/upload', [App\Controllers\HomeController::class, 'upload'])
        ->get('/invoices/create', [App\Controllers\InvoiceController::class, 'create'])
        ->post('/invoices/create', [App\Controllers\InvoiceController::class, 'create']);


    echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
} catch (\App\Exceptions\RouteNotFoundException $e) {
    // renvoyer le headers
    //header('HTTP/1.1 404 Not Found');

    http_response_code(404);
    echo View::make('error/404');
}

