<?php

class RegisterController
{
	public function index()
	{
		if(isset($_SESSION['login']))
			Route::redirectUrl("user" . $_SESSION['user_id']);
		include "app/views/register.php";
	}
}
