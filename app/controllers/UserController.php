<?php

class UserController extends Controller
{
	public function index()
	{
		if(!isset($_SESSION['login']))
			Route::redirectUrl('login');
		echo "uhefoihohfoih111";
	}

	public function logout()
	{
		if(!isset($_SESSION['login']))
			Route::redirectUrl('login');
		unset($_SESSION['login']);
		Route::redirectUrl('login');
	}
}
