<?php

require_once "app/models/user.php";

class RegisterController extends Controller
{
	public function index()
	{
		if(isset($_SESSION['login']))
			Route::redirectUrl($_SESSION['login']);
		View::generate('register.php');
	}

	public function register()
	{
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$name = $_POST['name'];
		if (empty($email) || empty($pass) || empty($name))
		{
			$this->message = "Присутствуют пустые поля!";
			View::generate('register.php', $this->message);
			exit();
		}
		$user = new User;
		if ($user->isUniqUser($name, $email))
		{
			$user->addNewUser($email, $pass, $name);
			$data = $user->getUserByEmail($email);
			$user->sendMailRegister($email, $data['activation']);
			Route::redirectUrl('login');
		}
		else
		{
			$this->message = "Пользователь с таким именем или email уже существует!";
			View::generate('register.php', $this->message);
			exit();
		}
	}

	public function activate()
	{
		if(isset($_SESSION['login']))
			Route::redirectUrl($_SESSION['login']);
		if (!array_key_exists('act', $_GET))
		{
			Route::redirectUrl();
			exit();
		}
		$act = $_GET['act'];
		$user = new User;
		$data = $user->getUserAct($act);
		if (!$data)
		{
			Route::redirectUrl();
			exit();
		}
		if ($data['status'] != '0')
		{
			Route::redirectUrl('login');
			exit();
		}
		$user->updateAct($data['id']);
		$_SESSION['login'] = $data['nik'];
		Route::redirectUrl($data['nik']);
	}
}
