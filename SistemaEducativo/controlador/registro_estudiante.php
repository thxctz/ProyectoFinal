<?php

if(!empty($_POST['btnregistrar'])){
	# validar datos...
	if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["nacimiento"]) and !empty($_POST["correo"]) ){

		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$dni = $_POST["dni"];
		$nacimiento = $_POST["nacimiento"];
		$correo = $_POST["correo"];

		$sql=$conexion->query(" insert into estudiante(nombre, apellido, dni, fecha_nac, correo)values('$nombre', '$apellido', '$dni', '$nacimiento', '$correo')");

		if($sql==1){
			echo '<div class="alert alert-success">Estudiante registrado correctamente</div>';
		}else{
			'<div class="alert alert-danger">Error al registrar</div>';
		}

	}else{
		echo '<div class="alert alert-warning">Algunos de los campos esté vacío</div>';
	}




}


?>