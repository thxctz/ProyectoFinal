<?php
$servername = "localhost";
$username = "root";
$password = "2003";
$database = "academico";
$port = "3307";

// CREAR CONEXION 
$connection = new mysqli($servername, $username, $password, $database, $port);


//variables de la tabla estudiante
$id = "";
$nombre = "";
$apellido = "";
$dni = "";
$nacimiento = "";
$correo = "";

// enviar la informacion 
$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
	// Método GET: Muestra los datos del estudiante
	if (!isset($_GET["id"])){
		header("location: ../../../paginas/datos_estudiante.php");
		exit;
	}

	$id = $_GET["id"];

	// Leer la fila del estudiante seleccionado en la tabla de DB
	$sql = "SELECT * FROM estudiante_a WHERE id=$id";
	$result = $connection->query($sql);
	$row = $result->fetch_assoc();

	if (!$row){
		header("location: ../../../paginas/datos_estudiante.php");
		exit;
	}

	$nombre = $row["nombre"];
	$apellido = $row["apellido"];
	$dni = $row["dni"];
	$nacimiento = $row["fecha_nac"];
	$correo = $row["correo"];


}else{
	// Método POST: Actualiza los datos del estudiante
	$id = $_POST["id"];
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$dni = $_POST["dni"];
	$nacimiento = $_POST["nacimiento"];
	$correo = $_POST["correo"];

	do{
		if( empty($id) || empty($nombre) || empty($apellido) || empty($dni) || empty($nacimiento) || empty($correo)){
			$errorMessage = "Todos los campos son obligatorios.";
			break;
		}
		// ACTUALIAZAR
		$sql = "UPDATE estudiante_a " . "SET nombre = '$nombre', apellido = '$apellido', dni='$dni', fecha_nac = '$nacimiento', correo = '$correo' " . 
			   "WHERE id = $id";

		$result = $connection->query($sql);

		if (!$result) {
			$errorMessage = "Consulta inválida: " . $connection->error;
			break;
		}

		$successMessage = "Estudiante actualizado con éxito";

		header("location: ../../../paginas/datos_estudiante.php");
		exit;

	}while(false);
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
	    <a href="https://drive.google.com/drive/folders/1r2C_k9qEoZE36IwXOYNuh3wtVBZCWkGW?usp=share_link"><button class="btn btn-outline-success me-3" type="button">Información</button></a>

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
			<input type="hidden" name="id" value="<?php echo $id; ?>">
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
					<a class="btn btn-outline-primary" href="../../../paginas/datos_estudiante.php" role="button">Cancel</a>
				</div>

			</div>


		</form>
		
	</div>
	
</body>
</html>