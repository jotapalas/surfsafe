<?php 
include('./scripts/conexion.php');
//login
$consulta="SELECT * FROM users ORDER BY score DESC";
echo "<div class='CSSTableGenerator' style='width:300px; margin:auto'>";
echo "<table>";  
echo "<tr>";  
echo "<td style='width:30px'>#</td>";
echo "<td>Usuario</td>";  
echo "<td style='width:30px'>Puntos</td>";    
echo "</tr>"; 

$score_notlogged = $_POST['score'];

$pos = 1;
$posUsuario = 0;
if ($resultado = mysqli_query($con,$consulta)) {
    /* obtener el array de objetos */
    while ($pos <= 20 and $fila = mysqli_fetch_row($resultado)) {
        if ($_SESSION['logged']=='no' and $fila[3] <= $score_notlogged){
            echo "<tr style='font-weight:bold; background-color:yellow; color:white;'>";
            echo "<td style='text-align:center; width:30px'>".$pos."</td>";
            echo "<td><strong><i>Tú</i></strong></td>";  
            echo "<td style='text-align:center; width:60px'>".$score_notlogged."</td>";  
            echo "</tr>";
            $score_notlogged = -1;
            $posUsuario = $pos;
            $pos++;
        }
        echo "<tr";
        if($fila[0] == $_SESSION['usuario']) {
            echo " style='font-weight:bold; background-color:yellow; color:white;'";
            $posUsuario = $pos;
        }
        echo ">";  
    	echo "<td style='text-align:center; width:30px'>".$pos."</td>";
        echo "<td>".$fila[0]."</td>";  
        echo "<td style='text-align:center; width:60px'>".$fila[3]."</td>";  
        echo "</tr>";
    	$pos++;
    }
    /* liberar el conjunto de resultados */
}
echo "</table>";  
echo "</div>";

if($posUsuario == 0){
    echo "<hr>";
    echo "<div class='CSSTableGenerator' style='width:300px; margin:auto'>";
    echo "<table style='height:30px'>"; 
    while ($fila = mysqli_fetch_row($resultado) and $posUsuario == 0) {
        if($_SESSION['logged'] == 'no' and $fila[3] <= $score_notlogged){
            echo "<tr style='font-weight:bold; background-color:yellow; color:white;'>";
            echo "<td style='text-align:center; width:30px'>".$pos."</td>";
            echo "<td><strong><i>Tú</i></strong></td>";  
            echo "<td style='text-align:center; width:60px'>".$score_notlogged."</td>";  
            echo "</tr>";
            $posUsuario = $pos;
            $score_notlogged = -1;
        } else if($fila[0] == $_SESSION['usuario']){
            $posUsuario = $pos;
            echo "<tr style='font-weight:bold'>";
            echo "<td style='text-align:center; width:30px'>".$pos."</td>";
            echo "<td style='text-align:left'>".$fila[0]."</td>";  
            echo "<td style='text-align:center; width:60px'>".$fila[3]."</td>";  
            echo "</tr>";
        }
        $pos++;
    }
    echo "</table></div>";
}
mysqli_free_result($resultado);
mysqli_close($con);

?>