<?php

namespace App;

//declare(strict_types=1);

use App\Exceptions\RouteNotFoundException;



class Router {

    private array $routes;

    // public function register(string $route, callable | array $action) : self
    // {
    //     $this->routes[$route] = $action;

    //     return $this;
    // }

    public function register(string $requestMethod, string $route, callable | array $action):self
    {
        $this->routes[$requestMethod][$route] = $action;

        return $this;
    }

    public function get(string $route, callable | array $action):self
    {
        return $this->register('get', $route, $action);
    }

    public function post(string $route, callable | array $action):self
    {
        return $this->register('post', $route, $action);
    }

    public function routes(): array
    {
        return $this->routes;
    }

    public function resolve(string $requestUri, string $requestMethod)
    {
        //get first part of request string
        $route = explode('?', $requestUri)[0];
        $action = $this->routes[$requestMethod][$route] ?? null;

        if(!$action){
            //create route exception
            throw new RouteNotFoundException();
        }

        if(is_callable($action)){
            //call callable fonction
            return call_user_func($action);
        }

        if(is_array($action)){
            [$class, $method] = $action;

            if(class_exists($class)){
                $class = new $class();

                if(method_exists($class, $method)){
                    return call_user_func_array([$class, $method], []);
                }
            }
        }

        throw new RouteNotFoundException();
    }
}