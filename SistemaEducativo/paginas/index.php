<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Sistema de usuario</title>
	<link rel="stylesheet" href="../../../static/css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
	
	<main>
		<div class="contenedor__todo">
					<div class="caja__trasera">
						<div class="caja__trasera-login">
							<h3>¿Ya tienes una cuenta?</h3>
							<p>Inicia Sesión para entrar a la página</p>
							<button id="btn__iniciar-sesion">Iniciar Sesión</button>

						</div>
						<div class="caja__trasera-register">
							<h3>¿Aún no tienes una cuenta?</h3>
							<p>Regístrate para iniciar sesión</p>
							<button id="btn__registrarse">Registrarse</button>

						</div>
					</div>

					<div class="contenedor__login-register">
						<form action="" class="formulario__login">
							<h2>Iniciar Sesión</h2>
                            <img src="../../../static/img/perfil.png" class="img_class">
							
							<input type="text" placeholder="Usuario">
	
							
							<input type="password" placeholder="Contraseña">
							<button><a href= "../../paginas/acceso.php">Entrar</a></button>
						</form>

						<form action="" class="formulario__register">
							<h2>Registrarse</h2>
							<input type="text" placeholder="Primer nombre">
							<input type="text" placeholder="Apellido">
							<input type="text" placeholder="Nombre de usuario">
							<input type="password" placeholder="contraseña">
							<button>Registrarse</button>
						</form>
					</div>
		</div>

	</main>	
	
	<script src="../../../static/js/login.js"></script>
</body>
	
</html>