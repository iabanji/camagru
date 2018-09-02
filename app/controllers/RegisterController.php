<?php

require_once "app/models/user.php";

class RegisterController
{
	public function index()
	{
		if(isset($_SESSION['login']))
			Route::redirectUrl("user" . $_SESSION['user_id']);
		include "app/views/register.php";
	}

	public function register()
	{
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$name = $_POST['name'];
		if (empty($email) || empty($pass) || empty($name))
			Route::redirectUrl();
		$user = new User;
		$user->addNewUser($email, $pass, $name);
		Route::redirectUrl('login');
	}
}
