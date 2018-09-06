<?php

class User
{
	public $db;

	function __construct()
	{
		$this->db = new PDO('mysql:host=localhost;dbname=camagru;charset=utf8', 'root1', 'root1');
	}

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

	public function getUserAct($act)
	{
		$db = new PDO('mysql:host=localhost;dbname=camagru;charset=utf8', 'root1', 'root1');
		$user = $db->prepare("SELECT * FROM users WHERE activation=?");
		$user->execute([$act]); 
		$user = $user->fetch(PDO::FETCH_ASSOC);
		return $user;
	}

	public function updateAct($id, $st='1')
	{
		$db = new PDO('mysql:host=localhost;dbname=camagru;charset=utf8', 'root1', 'root1');
		$sql = $db->prepare("UPDATE users SET status=? WHERE id=?");
		$sql->execute([$st, $id]);
		return true;
	}

	public function isUniqUser($name, $email)
	{
		$db = new PDO('mysql:host=localhost;dbname=camagru;charset=utf8', 'root1', 'root1');
		$data = $db->prepare("SELECT * FROM users WHERE nik=? OR WHERE email=?");
		$data = $data->execute([$name, $email]);
		if ($data)
			return false;
		return true;
	}

	public function isTruePass($email, $password)
	{
		$pass = md5($password);
		$db = new PDO('mysql:host=localhost;dbname=camagru;charset=utf8', 'root1', 'root1');
		$user = $db->prepare("SELECT * FROM users WHERE email=?");
		$user->execute([$email]); 
		$user = $user->fetch(PDO::FETCH_ASSOC);
		if (!$user || $pass != $user['password'] || $user['status'] != '1')
			return false;
		return $user;
	}

	public function getUserByEmail($email)
	{
		$db = new PDO('mysql:host=localhost;dbname=camagru;charset=utf8', 'root1', 'root1');
		$user = $db->prepare("SELECT * FROM users WHERE email=?");
		$user->execute([$email]);
		$user = $user->fetch(PDO::FETCH_ASSOC);
		return $user;
	}

	public function sendMailRegister($email, $act)
	{
		$subj = 'Confirm registration Camagru!';
		$message = 'Confirm your registration, click the link:  ' . "http://camagru/activation?act=" . $act;
		$headers = 'From: webmaster@example.com' . "\r\n" .
				    'Reply-To: webmaster@example.com' . "\r\n" .
				    'X-Mailer: PHP/' . phpversion();
		mail($email, $subj, $message, $headers);
	}
}