<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home');
	}

	public function profile()
	{
		return view('profile');
	}

	public function kemahasiswaan()
	{
		return view('kemahasiswaan');
	}

	public function portofolio()
	{
		return view('portofolio');
	}

	public function kontak()
	{
		return view('kontak');
	}
}
