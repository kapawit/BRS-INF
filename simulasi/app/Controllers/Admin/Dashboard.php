<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        echo view("template/v_header");
        echo view("template/v_sidebar");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");
        return view("welcome_message");
        
    }
}
