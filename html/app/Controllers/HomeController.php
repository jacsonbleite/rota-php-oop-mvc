<?php

namespace App\Controllers;

class HomeController
{
    
    public function index($params = null){        
        return Controller::view('home');       
        
    }
    
}