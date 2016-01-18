<?php
	include ('./includes/header.php');
?>

		<div id="score" style="visibility:visible">
				Hemos llegado al final.<br>
				Has obtenido una <strong>puntuación</strong> de:<hr>
				<form action="./end_game.php" method="post">
				<input id="marcador" value=<?php
					echo '"'.$_POST['score'].' PUNTOS"'
				?> readonly><br>
				</form>
				<hr>
				Puedes compartir esto en Facebook. ¡No es precisamente información personal! 
				<div class="fb-share-button" data-href=<?php
					echo '"./share.php?score='.$_POST['score'].'"';
				?> data-layout="button_count"></div><hr>
				<?php
				if($_SESSION['logged'] == "no"){
					echo '<table cellpadding="10px" style="font-size:12pt"><tr align="justify"><td style="vertical-align:top">';
					echo '<p align="justify"><strong>Regístrate</strong> para guardar tu posición en el ranking y acceder a más preguntas.<br>';
					echo 'Puedes dejar tu <strong>correo electrónico</strong> en blanco si quieres, pero sí necesitarás una contraseña ';
					echo 'para reclamar tu puntuación como tuya.<br><br>';
					echo '<strong>Recuerda</strong> que siempre puedes volver e intentar mejorarla.</p>';
					echo '</td><td>';
					echo '<form action="./scripts/do_register.php" method="POST" style="margin-bottom:7px" id="register">
							<input type="hidden" name="score" value='.$_POST['score'].'>
							<input type="text" name="nick" placeholder="Nombre de usuario" size="30"><br>
							<input type="text" name="email" placeholder="Correo electrónico" size="30"><br>
							<input type="password" name="pass" placeholder="Contraseña" size="30">
							<input type="hidden" name="page" value="end_game.php" />
							<hr>
							<center><input type="submit" value=""></center>';
					echo '</form>';
					echo '</td></tr></table>';
				}
				echo "<center><h1>RANKING</h1></center>";
				if ($_POST['score'] > $_SESSION['score']){
					$_SESSION['score'] = $_POST['score'];
					include ('./scripts/conexion.php');
					$sql = "UPDATE users SET score=".$_SESSION['score']." WHERE nick='".$_SESSION['usuario']."'";
					mysqli_query($con,$sql);
					mysqli_close($con);
				}
				include ('./includes/ranking.php');	
				?>

		</div>
	<?php
	include('./includes/footer.php');
?>