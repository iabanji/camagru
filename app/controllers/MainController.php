<?php

class MainController
{
	public function index()
	{
		if (isset($_SESSION['login']))
			Route::redirectUrl($_SESSION['login']);
		//include 'app/views/main.php';
		View::generate('main.php');
	}
}
