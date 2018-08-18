<?php

class LoginController
{
	public function index()
	{
		if(isset($_SESSION['login']))
			Route::redirectUrl("user" . $_SESSION['user_id']);
		include "app/views/login.php";
	}

	public function resetPass()
	{
		if(isset($_SESSION['login']))
			Route::redirectUrl("user" . $_SESSION['user_id']);
		include "app/views/reset_pass.php";
	}
}
