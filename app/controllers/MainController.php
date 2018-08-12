<?php

class MainController
{
	public function index()
	{
		/*if (isset($_SESSION['user']))
			Route::redirectUrl($_SESSION['user']);*/
		include 'app/views/main.php';
	}
}
