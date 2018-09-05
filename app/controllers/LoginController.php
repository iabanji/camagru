<?php
require_once "app/models/user.php";

class LoginController
{
	public function index()
	{
		if(isset($_SESSION['login']))
			Route::redirectUrl($_SESSION['login']);
		View::generate('login.php');
	}

	public function resetPass()
	{
		if(isset($_SESSION['login']))
			Route::redirectUrl($_SESSION['login']);
		View::generate('reset_pass.php');
	}

	public function login()
	{
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$user = (new User)->isTruePass($email, $pass);
		if (!$user)
		{
			Route::redirectUrl('login');
			exit();
		}
		$_SESSION['login'] = $user['nik'];
		Route::redirectUrl($_SESSION['login']);
	}
}
