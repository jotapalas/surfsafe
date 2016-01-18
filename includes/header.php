<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="./style.css" />
	<link rel="stylesheet" type="text/css" href="./table-ranking.css" />

	<title>SurfSafe - Aprende a navegar seguro</title>
</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
 		 var js, fjs = d.getElementsByTagName(s)[0];
 		 if (d.getElementById(id)) return;
 		 js = d.createElement(s); js.id = id;
 		 js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
 		 fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>


		<div id="container">
		<div id="header">
		<div id="login">
			<div style="text-align:left; float:left; margin-bottom:10">
				<a href="."><img src="./img/logo.png" /></a>
			</div>
			<?php
				session_start();

				if(!isset($_SESSION['logged'])) $_SESSION['logged'] = 'no';
				
				if($_SESSION['logged'] == 'yes'){
					echo '<a href="./scripts/logout.php">Cerar sesión</a>';
				}
				else {
					echo '<form action="./scripts/login.php" method="POST" style:"margin-bottom:2px">
						  <input type="text" name="nick" placeholder="Usuario" size="15">
						  <input type="password" name="pass" placeholder="Contraseña" size="15">
						  <input type="submit" value="Entrar">
						  </form>';
				}
			?>
		</div><!-- login -->
		</div>
		<div id="footer">
		<center><h2>Aprende a navegar seguro</h2></center>
		</div>
