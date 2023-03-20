<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de Alumnos</title>
	<link rel="stylesheet" href="../../../static/css/matriculacion.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<!-- BARRA DE NAVEGACIÓN -->
	
	<nav class="navbar bg-dark" data-bs-theme="dark">
	  <form class="container-fluid justify-content-start">
	  	<a class="navbar-brand mb-0 h1" href="../../paginas/acceso.php" >Añoranzas del Mañana</a>
	    <a href="../../paginas/documentos.php"><button class="btn btn-outline-success me-2" type="button">Documentos</button></a>

	    <a href="../../paginas/matriculacion.php"><button class="btn btn-outline-success me-3" type="button">Regresar</button></a>

	  </form>
	</nav>

	<div class="container my-5">
		<h2>Lista de estudiantes</h2>
		<a class="btn btn-primary" href="../../crud/create3.php" role="button">Nuevo Estudiante</a>
		<br>

		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>DNI</th>
					<th>Fecha de Nacimiento</th>
					<th>Correo</th>
				</tr>
			</thead>
			<tbody>
				
					<!-- CONECTAR A LA BASE DE DATOS-->
					<?php
					$servername = "localhost";
					$username = "root";
					$password = "2003";
					$database = "academico";
					$port = "3307";

					// CREAR CONEXION 
					$connection = new mysqli($servername, $username, $password, $database, $port);

					// VERIFICAR CONEXION 
					if ($connection->connect_error){
						die("Conexión fallida: " . $connection->connect_error);
					}

					// LEER TODAS LAS FILAS DE LA BASE DE DATOS - tabla
					$sql = "SELECT * FROM estudiante_c";
					$result = $connection->query($sql);

					if (!$result) {
						// code...
						die("Invalid query: " . $connection->connect_error);
					}

					// leer datos de cada fila
					while ($row = $result->fetch_assoc()) {
						// code...
						echo " 
						<tr>
							<td>$row[id]</td>
							<td>$row[nombre]</td>
							<td>$row[apellido]</td>
							<td>$row[dni]</td>
							<td>$row[fecha_nac]</td>
							<td>$row[correo]</td>
							<td>
								<a class='btn btn-primary btn-sm' href='../../crud/editar3.php?id=$row[id]'>Editar</a>
								<a class='btn btn-danger btn-sm' href='../../crud/eliminar3.php?id=$row[id]'>Eliminar</a>

							</td>

						</tr>	
						";
					}

					?>

			</tbody>
			
		</table>



	</div>

	
</body>
</html>