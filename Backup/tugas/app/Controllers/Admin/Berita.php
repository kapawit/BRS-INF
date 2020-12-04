<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BeritaModel;

class Berita extends BaseController{
    public function index()
    {
        echo view("template/layout");
        //echo "Ini adalah Controller HOME";
        $model = new BeritaModel();

        //load seluruh data
        $data['halaman'] = $model->orderBy('id_halaman', 'DESC')->findAll();

        return view('berita_index', $data);
    }
}