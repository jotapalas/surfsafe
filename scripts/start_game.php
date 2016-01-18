<?php

function generate_questions ($max, $num_questions){
	$aleatorio = mt_rand(1, $max); //Genereamos aleatorio 
	$usados[] = $aleatorio; //Guardamos el primero en un array ya que el primero no puede estar repetido 
	$_SESSION['p1'] = $aleatorio;
	for ($i = 1; $i < $num_questions; $i++) { 
	    $aleatorio = mt_rand(1, $max); //Generamos aleatorio 
	    while(in_array($aleatorio,$usados)) { //buscamos que no este repetido 
	        $aleatorio = mt_rand(1, $max); 
	    } 
	    $usados[] = $aleatorio;    //No esta repetido, luego guardamos el aleatorio
	    $_SESSION['p'.($i+1)] = $aleatorio; 
	} 
}

session_start();

if(!isset($_SESSION['logged'])){
	$_SESSION['logged'] = "no";
} 

if($_SESSION['logged'] == "no"){
	//el usuario no registrado sólo tiene acceso a las cinco primeras preguntas
	$_SESSION['max_questions'] = 5; 
} else {
	//este número se actualizará a medida que haya más preguntas
	$_SESSION['max_questions'] = 5; 
}
generate_questions($_SESSION['max_questions'], 5);

echo "<script>window.location='../instrucciones.php'</script>";
?>