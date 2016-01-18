<?php
	include ('./includes/header.php');
?>
		<!-- GAME -->
		<div id="game-container">
			<?php
				for ($i = 0; $i < 5; $i++) {
					$index = 'p'.($i+1);
					$pregunta = $_SESSION[$index];
					echo "<input type='hidden' id='".$index."' value='".$pregunta."'>";
    				$path = './game/'.$pregunta.'.php';
    				include($path);
				}
			?>
			<div id="score">
				<form action="./end_game.php" method="post" name="submit_score">
				<input id="marcador" name="score" value="puntuacion" readonly><br>
				</form>
			</div>
		</div>
		<script>
			var score = 0;
			var respondidas = 0;
			var MAX_PREGUNTAS = <?php echo $_SESSION['max_questions'];?>;
			var actual = 0;

			function first(pregunta){
				document.getElementById(pregunta).style.visibility = "visible";
				document.body.scrollTop = document.documentElement.scrollTop = 0;
				actual = pregunta;
				pack_game();
			}

			function answer(pregunta, puntuacion) {
				score += puntuacion;
				pregunta_aux = "pregunta_" + pregunta;
			    document.getElementById(pregunta_aux).style.visibility = "hidden";
			    respondidas++;

			    if(puntuacion<100){
			    	var error = "error_" + pregunta + "_" + puntuacion;
			    	actual = error;
			    	document.getElementById(error).style.visibility = "visible";
			    }
			    else {
			    	var correcto = "correcto_" + pregunta;
			    	actual = correcto;
			    	document.getElementById(correcto).style.visibility = "visible";
			    }
			    pack_game();
			    document.body.scrollTop = document.documentElement.scrollTop = 0;
			}

			function next_question(esconder){
				document.getElementById(esconder).style.visibility = "hidden";
				if (respondidas==MAX_PREGUNTAS) end_game(score);
			    else {
			    	var p = "pregunta_" + document.getElementById("p" + (respondidas + 1)).value;
			    	document.getElementById(p).style.visibility= "visible";
			    	actual = p;
			    }
			    pack_game();
			    document.body.scrollTop = document.documentElement.scrollTop = 0;
			}
			function end_game(score){
				document.getElementById("marcador").value = score;
				document.forms["submit_score"].submit();
			}

			function pack_game(){
				document.getElementsByClassName("pregunta").height = 
					document.getElementById("footer").height + 
					document.getElementById(actual).height;
			}

			var primera_pregunta = "pregunta_" + document.getElementById("p1").value;
			first(primera_pregunta);
		</script>		
<?php
	include('./includes/footer.php');
?>