<?php 
session_start();
include('./conexion.php');
//Paso variables
$nick = mysqli_real_escape_string($con, $_POST['nick']);
$pass = mysqli_real_escape_string($con, sha1($_POST['pass']));

$bool=false;

if ($nick == "" or $pass == ""){
	mysqli_close($con);
	echo "<script>window.location='..'</script>";
}

//login
$result = mysqli_query($con,"SELECT * FROM users WHERE nick = '$nick'");
if (!$result){
	mysqli_close($con);
	echo "<script text='javascript'>alert('ERROR: el usuario no existe')</script>";
	echo "<script>window.location='..'</script>";
}

while($row = $result->fetch_assoc()){
	$bool=false;
	if($row['nick']==$nick) {
		if($row['password']==$pass){
			$id = $row['nick'];
			$_SESSION['logged'] = 'yes'; 
			$_SESSION['usuario'] = $nick;
			$_SESSION['email'] = $row['email'];
			$_SESSION['score'] = $row['score'];

			mysqli_close($con);
			echo '<script>window.location=".."</script>';
		}
		else {
			mysqli_close($con);
			echo "<script text='javascript'>alert('ERROR: contraseña incorrecta')</script>";
			echo "<script>window.location='..'</script>";
		}
	}
}
?>