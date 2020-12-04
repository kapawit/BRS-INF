<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view("template/layout");
        return view('welcome_message');
        //echo "Ini adalah Controller HOME";
    }

    //--------------------------------------------------------------------
}
