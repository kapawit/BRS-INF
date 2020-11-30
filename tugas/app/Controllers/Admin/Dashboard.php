<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        echo view("template/layout");
        echo "<h3>Selamat datang</h3> " . $session->get('nm_mhs');
    }
}
