<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Contactos</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../../../static/css/contactos.css">
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
			
			<section class="sidebar">
				<div class="nav-header">
					<p class="logo">Añoranzas del Mañana</p>

					<!-- Menú de desplazamiento-->
					<i class='bx bx-menu-alt-right btn-menu'></i>
				</div>
				<!---------------------- --- M E N Ú   D E   N A V E G A C I O N ------------------------------------->
				<ul class="nav-links">
					
					<!-- Información del estudiante-->
					<li>
						<a href="https://drive.google.com/drive/folders/1r2C_k9qEoZE36IwXOYNuh3wtVBZCWkGW?usp=share_link" target="_blank">
							<i class='bx bxs-info-circle'></i>
							<span class="title">Información</span>
						</a>
					</li>
					<!-- Matriculación -->
					<li>
						<a href="../../paginas/matriculacion.php" target="_blank">
							<i class='bx bxs-contact' ></i>
							<span class="title">Matriculación</span>
						</a>
					</li>

					<!--  Contacto personal acaadémico -->
					<li>
						<a href="#">
							<i class='bx bxs-envelope' ></i>
							<span class="title">Contactos</span>
						</a>
					</li>


					<!-- Link Inicio de Sesión-->
					<li>
						<a href="../../paginas/index.php">
							<i class='bx bxs-log-in' ></i>
							<span class="title">Salir</span>
						</a>
					</li>
				</ul>
				
			</section>
			<section class="section-contactos">
				<div class="contenedor-contactos">
					<h1 class="txt-contactos">Contactos</h1>
					<h3 class="title-contact">Correo general academico</h3>
					<a href="mailto:kinder.am.gye@gmail.com?Subject=Aquí%20el%20asunto%20del%20mail" class="ps-contact"><h2>kinder.am.gye@gmail.com</h2></a>

					<h3 class="title-contact">Psicología</h3>
					<a href="mailto:departamentobienestar.am@gmail.com?Subject=Aquí%20el%20asunto%20del%20mail" class="ps-contact"><h2>departamentobienestar.am@gmail.com</h2></a>
				
				</div>
			</section>
			<section class="home">
				<!-- Slideshow container -->
				<div class="contenedor-img__contact">
			            <img src="../../../static/img/contact1.jpg" alt="" style="width:100%" class="img-contact1">
			        </div>
			     </div>
			</section>
			
		
		<script>
			const btn_menu = document.querySelector(".btn-menu");
			const side_bar = document.querySelector(".sidebar");

			btn_menu.addEventListener("click", function(){	
				side_bar.classList.toggle("expand");
			
			});
		</script>
	</body>
	<script src="../../../static/js/slideshow.js"></script>
</html>