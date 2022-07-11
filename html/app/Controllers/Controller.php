<?php
namespace App\Controllers;

use Exception;
use League\Plates\Engine;

class Controller
{
    public static function view(string $view, array $data = []){

        $viewPath = dirname(__FILE__,2). "/Views";
        
        if(!file_exists($viewPath. DIRECTORY_SEPARATOR . $view . ".php")){
            throw new Exception("A View {$view} não exite");
        }

        $templates = new Engine($viewPath);
        echo $templates->render($view, $data);

    }
}
