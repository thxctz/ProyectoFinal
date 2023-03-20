<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Sistema</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../../../static/css/acceso.css">
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
										
					<!-- Matriculación -->
					<li>
						<a href="../../paginas/matriculacion.php" target="_blank">
							<i class='bx bxs-contact' ></i>
							<span class="title">Matriculación</span>
						</a>
					</li>
								
					<!--  MISIÓN Y VISIÓN -->
					<li>
						<a href="../../../../paginas/nosotros.php">
							<i class='bx bxs-edit-alt'></i>
							<span class="title">Nosotros</span>
						</a>
					</li>

					<!--  Contacto personal acaadémico -->
					<li>
						<a href="../../paginas/contactos.php">
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

			<section class="home">
				<!-- Slideshow container -->
				<div id="slideshow-example" data-component="slideshow">
			        <div role="list">
			          <div class="slide">
			            <img src="../../../static/img/pexels-yan-krukau-8612922.jpg" alt="" style="width:100%">
			          </div>
			          <div class="slide">
			            <img src="../../../static/img/pexels-thirdman-8926546.jpg" alt="" style="width:100%">
			          </div>
			          <div class="slide">
			            <img src="../../../static/img/pexels-rodnae-productions-8364022.jpg" alt="" style="width:100%">
			          </div>
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