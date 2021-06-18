<?php

namespace App\Controllers;

class Home extends BaseController
{
	//método
	public function index()
	{
		return view('welcome_message');
	}
}
