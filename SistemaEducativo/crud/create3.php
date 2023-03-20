<?php
$servername = "localhost";
$username = "root";
$password = "2003";
$database = "academico";
$port = "3307";

// CREAR CONEXION 
$connection = new mysqli($servername, $username, $password, $database, $port);




$nombre = "";
$apellido = "";
$dni = "";
$nacimiento = "";
$correo = "";

// enviar la informacion 
$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$dni = $_POST['dni'];
	$nacimiento = $_POST['nacimiento'];
	$correo = $_POST['correo'];


	// SI LOS CAMPOS ESTÁN VACÍOS 
	do{
		if( empty($nombre) || empty($apellido) || empty($dni) || empty($nacimiento) || empty($correo)){
			$errorMessage = "Todos los campos son obligatorios.";
			break;
		}
		// Agregar nuevo estudiante a la base de datos

		$sql = "INSERT INTO estudiante_c (nombre, apellido, dni, fecha_nac, correo )" .
				"VALUES ('$nombre', '$apellido', '$dni' , '$nacimiento', '$correo')";
		$result = $connection->query($sql);

		if (!$result){
			$errorMessage = "Consulta incorrecta: " . $connection->error;
			break;
		}

		$nombre = "";
		$apellido = "";
		$dni = "";
		$nacimiento = "";
		$correo = "";

		$successMessage = "Estudiante agregado con éxito.";

		header("location: ../../../../paginas/datos_estudiante3.php");
		exit;

	}while (false);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alumnos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<nav class="navbar bg-dark" data-bs-theme="dark">
	  <form class="container-fluid justify-content-start">
	  	<a class="navbar-brand mb-0 h1" href="../../paginas/acceso.php" >Añoranzas del Mañana</a>
	    <a href="../../paginas/registro_estudiante.php"><button class="btn btn-outline-success me-3" type="button">Matricula Online</button></a>
	    <a href="#"><button class="btn btn-outline-success me-3" type="button">Información</button></a>

	  </form>
	</nav>

	<div class="container my-5">
		<h2>Nuevo Estudiante</h2>

		<?php
		if (!empty ($errorMessage)){
			echo " 
			<div class='alert alert-warning alert-dismissible fade show' role='alert'>
				<strong>$errorMessage</strong>
				<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
			</div>


			";
		}
		?>
		<form method="post">
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Nombre</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>">
				</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Apellido</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="apellido" value="<?php echo $apellido; ?>">
				</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">DNI</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="dni" value="<?php echo $dni; ?>">
				</div>
			</div>
			
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Fecha de Nacimiento</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" name="nacimiento" value="<?php echo $nacimiento; ?>">
				</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Correo</label>
				<div class="col-sm-6">
					<input type="email" class="form-control" name="correo" value="<?php echo $correo; ?>">
				</div>
			</div>

			<?php
			if (!empty($successMessage)){
				echo " 
				<div class='row mb-3'>
					<div class='offset-sm-3 col-sm-6'>
					<div class='alert alert-success alert-dismissible fade show' role='alert'>
						<strong>$successMessage</strong>
						<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					</div>
					
				</div>
				</div>
				
				";
			}

			?>

			<div class="row mb-3">
				<div class="offset-sm-3 col-sm-3 d-grid">
					<button type="submit" class="btn btn-primary">Enviar</button>
				</div>

				<div class="col-sm-3 d-grid">
					<a class="btn btn-outline-primary" href="../../../../paginas/datos_estudiante3.php" role="button">Cancel</a>
				</div>

			</div>


		</form>
		
	</div>
	
</body>
</html>