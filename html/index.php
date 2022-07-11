<?php

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

require __DIR__.'/vendor/autoload.php';
require __DIR__ . '/routes/router.php';

try{
    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    // $path = parse_url($_SERVER["REQUEST_URI"]["path"]);
    $request = $_SERVER["REQUEST_METHOD"];

    if(!isset($router[$request])){        
        throw new Exception("Conteúdo não encontrado! :(");
    }

    if(!array_key_exists($path, $router[$request])){
        throw new Exception("Conteúdo não encontrado! :(");
    }

    $controller = $router[$request][$path];    
    $controller();

}catch(Exception $e){
    $e->getMessage();
}
