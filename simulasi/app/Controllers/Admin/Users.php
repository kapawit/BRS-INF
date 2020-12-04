<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UsersModel;

class Users extends BaseController{
    public function index()
    {
        echo view("template/v_header");
        echo view("template/v_sidebar");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");
        //echo "Ini adalah Controller HOME";
        $model = new UsersModel();

        //load seluruh data
        $data['user'] = $model->orderBy('nim', 'DESC')->findAll();

        return view('users_view_all', $data);
    }
    public function create() {
        echo view("template/v_header");
		echo view("template/v_sidebar");
		echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");
        return view('users_create_user');
    }
    public function store(){
        echo view("template/v_header");
		echo view("template/v_sidebar");
		echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");
        
        $model = new UsersModel();

        $data = [
            'nm_mhs' => $this->request->getVar('nm_mhs'),
            'email'=> $this->request->getVar('email'),
        ];
        $save = $model->insert($data);

        return redirect()->to(base_url('admin/users'));
    }
    public function edit ($nim = null){

        echo view("template/v_header");
		echo view("template/v_sidebar");
		echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");
        $model = new UsersModel();
       $data['user'] = $model->where('nim', $nim)->first();
    
        return view('users_edit_user', $data);
    }
        public function update(){

            $model = new UsersModel();
            $nim = $this->request->getVar('nim');
            $data = [
                'nm_mhs' => $this->request->getVar('nm_mhs'),
                'email'=> $this->request->getVar('email'),
            ];
            $save = $model->update($nim, $data);
    
            return redirect()->to(base_url('admin/users'));
        }
        public function delete($nim = null){
            $model = new UsersModel();
            $data['user'] = $model->where('nim',$nim)->delete();

            return redirect()->to(base_url('admin/users'));
        }
    }

?>
