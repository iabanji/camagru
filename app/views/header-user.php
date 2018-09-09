<html>
<head>
	<meta charset="UTF-8">
	<title>Camagru</title>
	<link rel="stylesheet" href="css/style_register.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="css/styles.css" media="screen" type="text/css" />
</head>
<body>
	<div id="header">
		<h1><a href="/"><img src="img/icons/website-home.png"></a></h1>
		<a id="icon1" class="icon" href="/<?php echo $_SESSION['login']; ?>/showMyPhotos"><img src="img/icons/photos-symbol.png"></a>
		<a id="icon2" class="icon" href="/<?php echo $_SESSION['login']; ?>/settings"><img src="img/icons/icon-settings.png"></a>
		<a id="icon3" class="icon" href="/<?php echo $_SESSION['login']; ?>/logout"><img src="img/icons/icon-exit.png"></a>
		<a class="icon" href="#"><h2><?php echo $_SESSION['login']; ?></h2></a>
	</div>