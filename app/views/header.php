<html>
<head>
	<meta charset="UTF-8">
	<title>Camagru</title>
	<link rel="stylesheet" href="css/style_register.css" media="screen" type="text/css" />
	<style>
		* {
			padding: 0;
			margin: 0;
		}
		body {
			background-color: #E6E6FA;
		}
		#header {
			position: relative;
			height: 75px;
			background-color: #B0E0E6;
		}
		#header h1 {
			text-decoration: none;
			position: absolute;
			left: 80px;
			bottom: 22px;
		}
		#header h1 a {
			text-decoration: none; 
		}
		.a {
			text-decoration: none;
			color: blue;
			position: absolute;
			right: 80px;
			bottom: 22px;
		}
		#a1 {
			right: 200px;
		}
		#content {
			height: 1000px;
		}
		#footer {
			position: relative;
			bottom: -110px;
			height: 75px;
			background-color: #B0E0E6;
		}
		#footer p {
			position: absolute;
	        top: 50%;
	        left: 50%;
	        margin-right: -50%;
		}
		#login {
			height: 1000px;
		}
	</style>
</head>
<body>
	<div id="header">
		<h1><a href="/">CAMAGRU</a></h1>
		<a id="a1" class="a" href="/login"><h2>Sign In</h2></a>
		<a class="a" href="/register"><h2>Sign Up</h2></a>
	</div>