<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Documentos</title>
	<link rel="stylesheet" href="../../../static/css/documentos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	

	<style>
			body {
				padding-top: 0;
				padding-bottom: 0px;
				background-color: #36864e;
				color: #000;
			}
			
			.container-doc {
				align-items: center;
				display: flex;
				justify-content: center;
				padding: 0;
				
			}
			.content-doc{
				box-flex: 10px;
				margin: 10px;
			}
			.container-form{
				padding-top: 35px;
				padding-right: 25px;

			}
			.form-control{
				margin-right: 1rem;
				box-sizing: 25px;
				padding-top: 75px;
				padding-left: 150px;
				padding-bottom: 35px;
				background-color: #fff;
				color: #fff;
			}
			.content-button{
				align-content: center;
				align-items: center;
				justify-self: center;
			}
	</style>	
</head>
<body>
	<nav class="navbar bg-dark" data-bs-theme="dark">
	  <form class="container-fluid justify-content-start">
	  	<a class="navbar-brand mb-0 h1" href="../../paginas/acceso.php" >Añoranzas del Mañana</a>
	    <a href="../../paginas/documentos.php"><button class="btn btn-outline-success me-2" type="button">Documentos</button></a>

	    <a href="../../paginas/matriculacion.php"><button class="btn btn-outline-success me-3" type="button">Regresar</button></a>

	  </form>
	</nav>

	<div class="container-doc">
		<div class="jumbotron jumbotron-fluid primary">
			<div class="content-doc">
				<h1 class="display-3 col-md-3">Subir archivos</h1>
				<p class="lead">Estudiantes</p>
			</div>
		</div>
		<div class="container-form">
			<form action="../crud/procesar_archivos.php" method="POST" enctype="multipart/form-data" class="form-control">
				<h2>Partida de nacimiento</h2>
				<input type="file" name="archivo[]"><br>
				<h2>Carnet de vacunación</h2>
				<input type="file" name="archivo[]"><br>
				<h2>Cédula de identidad</h2>
				<input type="file" name="archivo[]"><br>
				<h2>PLanilla de servicios básicos</h2>
				<input type="file" name="archivo[]"><br>
				<h2>Fe de bautismo</h2>
				<input type="file" name="archivo[]"><br>
				<h2>Acta de matrimonio (opcional)</h2>
				<input type="file" name="archivo[]"><br>

				<div class="content-button">
				<button type="submit" class="btn btn-group-sm bg-success">Enviar</button>
				</div>

			</form>
		</div>
	</div>

	
</body>


</html>