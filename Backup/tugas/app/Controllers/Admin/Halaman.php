<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BeritaModel;

class Halaman extends BaseController{
    public function index()
    {
        echo view("template/layout");
        //echo "Ini adalah Controller HOME";
        $model = new BeritaModel();

        //load seluruh data
        $data['halaman'] = $model->orderBy('id_halaman', 'DESC')->findAll();

        return view('berita_view_all', $data);
    }
    public function create() {
        echo view("template/layout");
        return view('create_berita');
    }
    public function store(){
        echo view("template/layout");
        
        $model = new BeritaModel();

        $data = [
            'judulhalaman' => $this->request->getVar('judulhalaman'),
            'author'=> $this->request->getVar('author'),
        ];
        $save = $model->insert($data);

        return redirect()->to(base_url('admin/halaman'));
    }
    public function edit ($id_halaman = null){

        echo view("template/layout");
        $model = new BeritaModel();
       $data['halaman'] = $model->where('id_halaman', $id_halaman)->first();
    
        return view('edit_berita', $data);
    }
        public function update(){

            $model = new BeritaModel();
            $id_halaman = $this->request->getVar('id_halaman');
            $data = [
                'judulhalaman' => $this->request->getVar('judulhalaman'),
                'author'=> $this->request->getVar('author'),
            ];
            $save = $model->update($id_halaman, $data);
    
            return redirect()->to(base_url('admin/halaman'));
        }
        public function delete($id_halaman = null){
            $model = new BeritaModel();
            $data['halaman'] = $model->where('id_halaman',$id_halaman)->delete();

            return redirect()->to(base_url('admin/halaman'));
        }
    }
