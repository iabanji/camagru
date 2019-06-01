<?php

require_once "app/models/user.php";

class MainController extends Controller
{
	public function index()
	{
		if (isset($_SESSION['login']))
			Route::redirectUrl($_SESSION['login']);
		//include 'app/views/main.php';
		$photos = (new User)->getAllPhotos();
		(new View)->generate('main.php', false, $photos);
	}
}
