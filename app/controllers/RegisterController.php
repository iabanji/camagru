<?php

require_once "app/models/user.php";

class RegisterController
{
	public function index()
	{
		if(isset($_SESSION['login']))
			Route::redirectUrl("user" . $_SESSION['user_id']);
		View::generate('register.php');
	}

	public function register()
	{
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$name = $_POST['name'];
		if (empty($email) || empty($pass) || empty($name))
			Route::redirectUrl();
		$user = new User;
		if ($user->isUniqUser($name, $email))
		{
			$user->addNewUser($email, $pass, $name);
			Route::redirectUrl('login');
		}
		else
			Route::redirectUrl('register');
	}

	public function activate()
	{
		if (!array_key_exists('act', $_GET))
			Route::redirectUrl();
		$act = $_GET['act'];
		$user = new User;
		$data = $user->getUserAct($act);
		if (!$data || count($data) > 1)
			Route::redirectUrl();
		$user->updateAct($data['id']);
		Route::redirectUrl($data['nik']);
	}
}
