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
	<section class="main-header">
		<div class="container">
			<h1>Titulo del Curso</h1>
			<h2>Descripcion corta de cursos</h2>
		</div>

	</section>
	<section class="contenido">
		<div class="container">
			<div class="col-md-3">
				<h3>Detalles</h3>
				<div class="media">
					  <div class="media-left">
					  </div>

  					  <div class="media-body">
   						<h4 class="media-heading">Precio</h4>
   						<span>550.000 GS</span> <!--para agregar pequeños textos-->
  					  </div>
				</div>
				<div class="media">
					  <div class="media-left">
					  </div>

  					  <div class="media-body">
   						<h4 class="media-heading">Duracion</h4>
   						<span>4 meses</span> <!--para agregar pequeños textos-->
  					  </div>
				</div>
				<div class="media">
					  <div class="media-left">
					  </div>

  					  <div class="media-body">
   						<h4 class="media-heading">Dias</h4>
   						<span>Lunes a Viernes</span> <!--para agregar pequeños textos-->
  					  </div>
				</div>
			</div>
			<div class="col-md-9">
				<p>Descripcion</p>
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