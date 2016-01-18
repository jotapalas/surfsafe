<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="./index.css" />
	<link rel="stylesheet" type="text/css" href="./table-ranking.css" />

	<title>SurfSafe - Aprende a navegar seguro</title>
</head>
	<body>
		<div id="header">
		<div id="login">
			<div style="text-align:left; float:left; margin-bottom:10">
				<img src="./img/logo.png" />
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
		<div id="container">
		<table id="table-index">
			<tr><td>
				<img class="dashed" src="./img/index.jpg"
			</td>
			<td><div id="register">
				<h2>Regístrate. ¡Es gratis!</h2><hr>
				<form action="./scripts/do_register.php" method="POST" style="margin-bottom:7px">
					<input type="hidden" name="score" value="0">
					<input type="text" name="nick" placeholder="Nombre de usuario" size="23">
					<input type="text" name="email" placeholder="Correo electrónico (opcional)" size="30"><br>
					<input type="password" name="pass" placeholder="Contraseña" size="23">
					<input type="hidden" name="page" value="index.php" />
					<hr>
				<p style="font-size:small"><strong>De verdad.</strong> No necesitamos más datos que estos para empezar a convertirte en todo un experto en seguridad. Más adelante podrás rellenar tu perfil de manera <strong>opcional</strong>. Te <strong>prometemos</strong> que no usaremos ninguno de tus datos con ningún fin que no sea el de mejorar la aplicación.</p>
				<center><input type="submit" value=""></center>
				</form>
			</div>
			</td></tr>
			<!--tr><td height="100%"></td></tr-->
		</table>
		<center>
			<div id="start_game">
			<a href="./scripts/start_game.php"><img src="./img/start_game.png"></a>
			</div>
		</center>
<?php include ('./includes/footer.php'); ?>