<?php

require_once "app/models/user.php";

class UserController extends Controller
{
	public function index()
	{
		if(!isset($_SESSION['login']))
			Route::redirectUrl('login');
		$photos = (new User)->getAllPhotos();
		(new View)->generate('user.php', false, $photos);
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

	public function settings()
	{
		if(!isset($_SESSION['login']))
			Route::redirectUrl('login');
		$photos = (new User)->getAllPhotos();
		(new View)->generate('settings.php', false, $photos);
	}

	public function showMyPhotos()
	{
		if(!isset($_SESSION['login']))
			Route::redirectUrl('login');
		$photos = (new User)->getPhotosById($_SESSION['user_id']);
		(new View)->generate('show-user-photos.php', false, $photos);
	}

	public function changePass(){
		$pass = $_POST["pass"];
		echo "123";
	}
}
