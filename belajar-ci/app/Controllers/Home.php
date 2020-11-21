<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view("template/v_header");
		echo view("template/v_sidebar");
		echo view("template/v_topbar");
		echo view("template/v_footer");
		//echo "Ini adalah Controller HOME";
		return view('welcome_message');
	}


	//--------------------------------------------------------------------
	public function dashboard($id, $nama)
	{
		$data = [
			'title' => 'Halaman Dashboard', 'id' => $id,
			'nama' => $nama
		];
		return view('home_dashboard', $data);
	}
}
