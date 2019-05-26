<html>
<head>
	<meta charset="UTF-8">
	<title>Camagru</title>
	<link rel="stylesheet" href="css/style_register.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="css/styles.css" media="screen" type="text/css" />
	<style type="text/css">
		.container_header {
			background: #ffb83a;
		    height: 100px;
		    width: 100%;
		    display: flex;
		    justify-content: space-between;
		}
		.header_left {
			flex: 2;
		    display: flex;
		    justify-content: center;
		    align-items: center;
		}
		.header_right {
			flex: 7
		}
		.header_right>ul{
			width: 100%;
		    display: flex;
		    justify-content: flex-end;
		    align-items: center;
		    /* margin: auto; */
		    flex-wrap: wrap;
		    list-style-type: none;
		}
		.header_right>ul>li{
			flex: 1;
    		max-width: 120px;
    		min-width: 100px;
		}
		.header_right>ul>li{
			text-decoration: none;
		}
		.header_right>ul>li img {
			height: 50px;
		}
		.div-foto {
			width: 50%;
			min-width: 800px;
			display: flex;
			flex-direction: row;
			justify-content: space-around;
			align-items: center;
			flex-wrap: wrap;
			align-content: space-around;
			background: aquamarine;
			border: 10px solid grey;
			margin: 20px 100px;
		}
		.div-foto>img {
			border: 4px solid black;
			width: 27%;
			max-width: 400px;
			min-width: 200px;
		}
		#footer {
		    position: fixed;
		    left: 0; bottom: 0;
		    padding: 10px;
		    background: #39b54a;
		    color: #fff;
		    width: 100%;
		}
	</style>
</head>
<body>
	<section>
		<div class="container_header">
			<div class="header_left">
				<a href="/" class="header__home"><img src="img/icons/website-home.png"></a>
			</div>
			<div  class="header_right">
				<ul>
					<li>
						<a href="/<?php echo $_SESSION['login']; ?>/showMyPhotos"><img src="img/icons/photos-symbol.png"></a>
					</li>
					<li>
						<a  href="/<?php echo $_SESSION['login']; ?>/settings"><img src="img/icons/icon-settings.png"></a>
					</li>
					<li>
						<a  href="/<?php echo $_SESSION['login']; ?>/logout"><img src="img/icons/icon-exit.png"></a>
					</li>
					<li>
						<a href="#"><h2><?php echo $_SESSION['login']; ?></h2></a>
					</li>
				</ul>
			</div>
		</div>
	</section>