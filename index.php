<!DOCTYPE html>
<html>
<head>
		<title>Mi primera página</title>
	
	<meta name="description" content="Cursos de programación CAPACIT CDE">
	<meta name="keywords" content="programacion, cursos">
	<?php include 'includes/head.php';?>

	<style>
		body {background-color: #f1f1f1;}
	</style>
</head>
<body>
	<!--Inicio del Header-->
	<?php include 'includes/header.php';?>
	<!--Fin del Header-->
	<!--Inicio del contenido principal-->
	<main>
	<div class="container-fluid text-center" id="banner"> <!--el container fluid sirve para que el texto no se pegue en el borde de la  pagina, es de bootstrap-->
		<div class="container">
			<h1>TITULO DE LA PAGINA</h1>
			<p class="text-justify">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<a class="btn btn-primary" href="#">Enviar informacion</a>
		</div>	
	</div>
	<section class="contenido" id="home">
		<div class="container">

			<div class="col-md-12  text-center titulo-seccion">
				<h2>Porque estudiar con nosotros</h2>
				<hr>
			</div>
			<div class="col-md-4 text-center">
				<h2>TITULO DE LA SECCION</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="col-md-4 text-center">
				<h2>TITULO DE LA SECCION</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="col-md-4 text-center">
				<h2>TITULO DE LA SECCION</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
			
		</div>
	</section>

	<section id="banner-medio">
			<div class="container">
				<div class="info-banner-medio titulo-seccion">
					<h2>Los mejores cursos entan aqui</h2>
				</div>
				<a href="#" class="btn btn-success">Inscribite ahora</a>
			</div>
		</section>

	<section class="contenido" id="cursos-destacados">
		<div class="container text-center">
			<div class="col-md-12 text-center titulo-seccion">
				<h2>Cursos Destacados</h2>
				<hr>
			</div>
			<div class="col-md-3 text-justify">
				<h3>TITULO DEL CURSO</h3>
				<img src="img/course01.jpg" class="img-responsive"> <!--para que la imagen se adpate al contenedor-->
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<span class="precio-curso">500.000 GS</span><span class="mes-curso">  X Mes</span><br>
				<a href="detalles.php" class="btn btn-info">Leer Mas</a>
			</div>
			
			<div class="col-md-3 text-justify">
				<h3>TITULO DEL CURSO</h3>
				<img src="img/course01.jpg" class="img-responsive"> <!--para que la imagen se adpate al contenedor-->
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<span class="precio-curso">500.000 GS</span><span class="mes-curso">  X Mes</span><br>
				<a href="detalles.php" class="btn btn-info">Leer Mas</a>
			</div>

			<div class="col-md-3 text-justify">
				<h3>TITULO DEL CURSO</h3>
				<img src="img/course01.jpg" class="img-responsive"> <!--para que la imagen se adpate al contenedor-->
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<span class="precio-curso">500.000 GS</span><span class="mes-curso">  X Mes</span><br>
				<a href="detalles.php" class="btn btn-info">Leer Mas</a>
			</div>

			<div class="col-md-3 text-justify">
				<h3>TITULO DEL CURSO</h3>
				<img src="img/course01.jpg" class="img-responsive"> <!--para que la imagen se adpate al contenedor-->
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<span class="precio-curso">500.000 GS</span><span class="mes-curso">  X Mes</span><br>
				<a href="detalles.php" class="btn btn-info">Leer Mas</a>
			</div>
		</div>
	</section>
	</main>
	<!--Fin del contenido-->

	<!--Inicio del Footer-->
	<?php include 'includes/footer.php';?>
	<!--Fin del Footer-->

	<?php include 'includes/script.php';?>
</body>
</html>