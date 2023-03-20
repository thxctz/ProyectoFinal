<?php
if ( isset($_GET["id"]) ){
	$id = $_GET["id"];

	$servername = "localhost";
	$username = "root";
	$password = "2003";
	$database = "academico";
	$port = "3307";

	// CREAR CONEXION 
	$connection = new mysqli($servername, $username, $password, $database, $port);

	$sql = "DELETE FROM estudiante_b WHERE id = $id";
	$connection->query($sql);

}

header("location: ../../../../paginas/datos_estudiante2.php");
exit;

?>