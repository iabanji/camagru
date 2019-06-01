<?php

class Route
{
	static function start()
	{
		$controllerName = 'Main';
		$action = 'index';
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		if (count($routes) > 3)
			Route::ErrorPage404();
		
		if (empty($routes[1]) || $routes[1] == 'index.php')
			$controllerName = 'Main';
		else if ($routes[1] == '404')
			$controllerName = '404';
		else if ($routes[1] == 'login')
		{
			if ($_SERVER['REQUEST_METHOD'] === 'POST')
				$action = 'login';
			$controllerName = 'Login';
		}
		else if ($routes[1] == 'register')
		{
			if ($_SERVER['REQUEST_METHOD'] === 'POST')
				$action = 'register';
			$controllerName = 'Register';
		}
		else if (stristr($routes[1], 'activation'))
		{
			$controllerName = 'Register';
			$action = 'activate';
		}
		else if ($routes[1] == 'resetpass')
		{
			$controllerName = 'Login';
			$action = 'resetPass';
			if ($_SERVER['REQUEST_METHOD'] === 'POST')
				$action = 'changePass';
		}
		else
		{
			if (isset($routes[2]))
			{
				if(!isset($_SESSION['login']) || $_SESSION['login'] != $routes[1])
					Route::redirectUrl('login');
				if ($routes[2] == 'logout')
					$action = 'logout';
				if ($routes[2] == 'savePhoto')
					$action = 'savePhoto';
				if ($routes[2] == 'settings')
					$action = 'settings';
				if ($routes[2] == 'showMyPhotos')
					$action = 'showMyPhotos';
			}
			if ($_SERVER['REQUEST_METHOD'] === 'POST')
			{
				if(!isset($_SESSION['login']) || $_SESSION['login'] != $routes[1])
					Route::redirectUrl('login');
				if ($routes[2] == "changePass")
					$action = "changePass";
			}
			$controllerName = 'User';
		}

		/*if (!empty($routes[2]))
			$action = $routes[2];*/

		$controllerPath = "app/controllers/" . $controllerName . "Controller" . '.php';
		if (file_exists($controllerPath))
			include_once $controllerPath;
		else
			Route::ErrorPage404();

		$controller = $controllerName . 'Controller';
		$controller = new $controller;
		if (method_exists($controller, $action))
			$controller->$action();
		else
			Route::ErrorPage404();
	}

	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location: '. $host. '404');
    }

    function redirectUrl($url = '')
    {
    	$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
    	header('Location: ' . $host . $url);
    }
}
