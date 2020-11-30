<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		//echo "Ini adalah Controller HOME";
		echo view("template/layout");
		return view('welcome_message');

	}


	//--------------------------------------------------------------------
	public function dashboard($nim, $nm_mhs)
	{
		$data = [
			'title' => 'Halaman Dashboard', 'id' => $nim,
			'nama' => $nm_mhs
		];
		return view('home_dashboard', $data);
	}
}
