<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>He conseguido una puntuación de 
		<?php
			echo $_GET['score'];
		?>
		 ¿Cuánto sabes tú de navegar seguro?</title>
	</title>
	<body>
		Averigua cómo de seguro estás navegando por Internet y aprende a hacerlo mejor.
		<img src="./img/index.jpg" />
		<?php
			session_start();
			session_destroy();
			echo "<script>window.location='.'</script>";
		?>
	</body>
</html>