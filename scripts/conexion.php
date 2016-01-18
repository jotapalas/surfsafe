<?php
$dbhost="mysql.hostinger.es";
$dbname="u603155175_ssafe";
$dbuser="u603155175_sroot";
$dbpass="j5eTh1SdUzbakUpKwq";
//hacemos conexión
$con=mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
// Comprobamos conexion
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>