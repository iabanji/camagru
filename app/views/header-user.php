<html>
<head>
	<meta charset="UTF-8">
	<title>Camagru</title>
	<link rel="stylesheet" href="../css/style_register.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="../css/styles.css" media="screen" type="text/css" />
	<style type="text/css">
		.container_header {
			background: #ffb83a;
		    height: 100px;
		    width: 100%;
		    display: flex;
			justify-content: space-between;
			border: 2px solid black;
		}
		.container {
			max-width:1170px;
			margin:auto;
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
		.div-cont {
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			border: 2px solid black;
		}
		.div-foto {
			display: flex;
			flex-direction: row;
			justify-content: space-around;
			align-items: center;
			flex-wrap: wrap;
			align-content: space-around;
			background: aquamarine;
			border: 10px solid grey;
			margin: 20px 100px;
			height: 90%;
			min-width: 200px;
			max-height: 700px;
			min-height: 500px;
		}
		.div-foto>img {
			border: 4px solid black;
			width: 27%;
		}
		.change-forms {
			width: 400px;
			margin: 20px 100px;
			min-width: 200px;
			max-height: 700px;
			min-height: 500px;
		}
		.text-input {
			padding: 15px 20px;
		}
		.div-users-photo {
			text-align: center;
   			padding-top: 20px;
			padding-bottom: 20px;
			display: flex;
			flex-direction: row;
			justify-content: space-around;
			align-items: center;
			flex-wrap: wrap;
			align-content: space-around;
		}
		.div-users-photo-inside {
			flex:3;
		}

		#footer {
		    left: 0; bottom: 0;
		    padding: 10px;
		    background: #ffb83a;
		    color: #fff;
			border: 2px solid black;
		}
	</style>
</head>
<body>
	<section>
		<div class="container_header">
			<div class="header_left">
				<a href="/" class="header__home"><img src="../img/icons/website-home.png"></a>
			</div>
			<div  class="header_right">
				<ul>
					<li>
						<a href="/<?php echo $_SESSION['login']; ?>/showMyPhotos"><img src="../img/icons/photos-symbol.png"></a>
					</li>
					<li>
						<a  href="/<?php echo $_SESSION['login']; ?>/settings"><img src="../img/icons/icon-settings.png"></a>
					</li>
					<li>
						<a  href="/<?php echo $_SESSION['login']; ?>/logout"><img src="../img/icons/icon-exit.png"></a>
					</li>
					<li>
						<a href="#"><?php echo $_SESSION['login']; ?></a>
					</li>
				</ul>
			</div>
		</div>
	</section>