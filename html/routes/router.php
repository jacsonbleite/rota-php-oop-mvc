<?php


function load(string $controller, string $action)
{
    try {

        //verifica se o controller existe
        $controllerNamespace = "App\\Controllers\\{$controller}";
        if (!class_exists($controllerNamespace)) {
            throw new Exception("O controller {$controller} não existe");
        }

        $controllerInstance = new $controllerNamespace();

        if (!method_exists($controllerInstance, $action)) {
            throw new Exception("O método {$action} não existe no controller {$controller}");
        }

        $controllerInstance->$action((object) $_REQUEST);
        
    } catch (Exception $e) {
        echo $e->getMessage();
        exit;
    }
}

$router = [
    "GET"  => [
        "/" => fn() => load('HomeController', "index"),
        "/contact" => fn() => load('ContactController', "index")
    ],
    "POST" => [
        "/contact" => fn() => load('ContactController', "store")
    ],
];
