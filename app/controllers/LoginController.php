<?php
require_once "app/models/user.php";

class LoginController extends Controller
{
	public function index()
	{
		if(isset($_SESSION['login']))
		{
			Route::redirectUrl($_SESSION['login']);
			exit();
		}
		View::generate('login.php');
	}

	public function resetPass()
	{
		if(isset($_SESSION['login']))
		{
			Route::redirectUrl($_SESSION['login']);
			exit();
		}
		View::generate('reset_pass.php');
	}

	public function login()
	{
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$user = (new User)->isTruePass($email, $pass);
		if (!$user || $user['status'] != '1')
		{
			$this->message = "Неправильный пароль или такого пользователя не существует!";
			View::generate('login.php', $this->message);
			exit();
		}
		$_SESSION['login'] = $user['nik'];
		$_SESSION['user_id'] = $user['id'];
		Route::redirectUrl($_SESSION['login']);
	}

	public function changePass()
	{
		$email = $_POST['email'];
		$user = new User();
		$data = $user->getUserByEmail($email);
		if(isset($_SESSION['login']))
		{
			Route::redirectUrl($_SESSION['login']);
			exit();
		}
		if (!$data)
		{
			Route::redirectUrl('resetpass');
			exit();
		}
		$user->updateAct($data['id'], '0');
		$user->sendMailRegister($email, $data['activation']);
		Route::redirectUrl('login');
	}
}
