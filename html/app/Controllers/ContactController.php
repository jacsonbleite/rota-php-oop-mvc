<?php

namespace App\Controllers;

class ContactController{
    public function index(){
        Controller::view('contact');
    }

    public function store($params){        
        Controller::view('contact');
    }
}