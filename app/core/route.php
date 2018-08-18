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
			$controllerName = 'Login';
		else if ($routes[1] == 'register')
			$controllerName = 'Register';
		else if ($routes[1] == 'resetpass')
		{
			$controllerName = 'Login';
			$action = 'resetPass';
		}
		else
			$controllerName = 'User';

		if (!empty($routes[2]))
			$action = $routes[2];

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
