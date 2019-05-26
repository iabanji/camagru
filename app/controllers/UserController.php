<?php

require_once "app/models/user.php";

class UserController extends Controller
{
	public function index()
	{
		if(!isset($_SESSION['login']))
			Route::redirectUrl('login');
		$photos = (new User)->getAllPhotos();
		View::generate('user.php', false, $photos);
	}

	public function logout()
	{
		if(!isset($_SESSION['login']))
			Route::redirectUrl('login');
		unset($_SESSION['login']);
		unset($_SESSION['user_id']);
		Route::redirectUrl('login');
	}

	public function savePhoto()
	{
		$photo = $_POST['photo'];
		(new User)->addNewPhoto($photo, $_SESSION['user_id']);
		Route::redirectUrl();
	}
}
