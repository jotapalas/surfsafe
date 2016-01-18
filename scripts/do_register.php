<?php

echo 'Espera un momento...';
echo '<form action="../'.$_POST['page'].'" method="post" id="reg">';
echo '<input type="hidden" name="score" value="'.$_POST['score'].'">';
echo '</form>';

include ('./conexion.php');

// escape variables for security
$nick = mysqli_real_escape_string($con, $_POST['nick']);
$passw = mysqli_real_escape_string($con, sha1($_POST['pass']));
$email = mysqli_real_escape_string($con, $_POST['email']);
$score = mysqli_real_escape_string($con, $_POST['score']);

//hacemos consulta de nombres
	/*email debe ser unico. Al dar la posibilidad de dejarlo en blanco,
	  tenemos que asegurarnos de que no se intenta insertar un email
	  existente*/
	if ($email == ""){
		$email = NULL;
	}
	if($nick!="" && $passw!=""){
		$sql="INSERT INTO users (nick, password, email, score)
			VALUES ('$nick','$passw','$email','$score')";

		if (!mysqli_query($con,$sql)) {
			echo "<br><a href='..'>VOLVER</a><br>";
			die('Error: ese usuario ya existe');
		}

		mysqli_close($con);
	}
	else {
		echo "<script text='javascript'>alert('Ha dejado algun campo sin rellenar. Por favor, rellene el formulario completo.')</script>";
		mysqli_close($con);
	}

session_start();

$_SESSION['logged'] = 'yes'; 
$_SESSION['usuario'] = $nick;
$_SESSION['email'] = $email;
$_SESSION['score'] = $score;

echo '<script>document.forms["reg"].submit();</script>';
?>