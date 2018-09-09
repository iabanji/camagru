<?php

class UserController extends Controller
{
	public function index()
	{
		if(!isset($_SESSION['login']))
			Route::redirectUrl('login');
		View::generate('user.php');
	}

	public function logout()
	{
		if(!isset($_SESSION['login']))
			Route::redirectUrl('login');
		unset($_SESSION['login']);
		Route::redirectUrl('login');
	}
}
