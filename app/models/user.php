<?php

class User
{
	public function addNewUser($email, $pass, $name)
	{
		$db = new PDO('mysql:host=localhost;dbname=camagru;charset=utf8', 'root1', 'root1');
		$smt = $db->prepare("INSERT INTO users(nik, email, password, activation, status) VALUES(:name, :email, :pass, :act, :status)");
		$activation = md5($email . time());
		$smt->execute(array(
		    "name" => $name,
		    "email" => $email,
		    "pass" => md5($pass),
		    "act" => $activation,
		    "status" => '0'
		));
	}
}