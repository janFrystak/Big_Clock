<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        
    }

    public function indexWeb(){
        echo view("Big_Counter");
    }
}
