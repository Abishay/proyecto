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
			<h1>Contactenos!</h1>
			<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</h2>
		</div>
	</section>
	<section class="contenido">
		<div class="container">
			<div class="col-md-3">
				<h3>Informaciones</h3>
				<!--telefono-->
				<div class="media">
					  <div class="media-left">
					  </div>

  					  <div class="media-body">
   						<h4 class="media-heading">Teléfono</h4>
   						<span>0994123456</span> <!--para agregar pequeños textos-->
  					  </div>
				</div>
				<!--email-->
				<div class="media">
					  <div class="media-left">
					  </div>

  					  <div class="media-body">
   						<h4 class="media-heading">E-mail</h4>
   						<span>prakashabishay@gmail.com</span> <!--para agregar pequeños textos-->
  					  </div>
  					  
				</div>
				<!--direccion-->
				<div class="media">
					  <div class="media-left">
					  </div>

  					  <div class="media-body">
   						<h4 class="media-heading">Dirección</h4>
   						<span>Avda. Colón y Campo Vía (Área 4)</span> <!--para agregar pequeños textos-->
  					  </div>
  					  
				</div>
			</div>
			<div class="col-md-9">
				<h3>Formulario de Contacto</h3>
				<form>
		<br>
		<label>Nombre:</label>
		<input type="text" name="nombre" class="form-control" placeholder="Inserte su nombre" required>
		<br> <!--required no permite que se envie el formulario, ya que es obligatorio-->

		<label>Apellido:</label>
		<input type="text" name="apellido" class="form-control" placeholder="Inserte su apellido" required>
		<br>

		<label>Dirección:</label>
		<input type="text" name="direccion" class="form-control" placeholder="Inserte su dirección" required><br>

		<label>Edad:</label>
		<input type="number" name="edad" class="form-control" placeholder="Inserte su edad" required>
		<br>

		<label>Teléfono:</label>
		<input type="text" name="telefono" class="form-control" placeholder="Inserte su telefono" required>
		<br>
	
		<label>Mensaje:</label>
		<textarea name="mensaje" class="form-control"></textarea><!--el form-control es una clase de bootstrap-->
		
		<button type="submit" name="enviar" class="btn btn-success">Enviar Reclamo</button>
		

	</form>
			</div>		
		</div>
	</section>
	<div class="container-fluid"> <!--seria el contenedor mas grande-->
		<div class "row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14403.479553783354!2d-54.6295968!3d-25.5093855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb12fbfc9747b41e3!2sCapacit!5e0!3m2!1ses!2spy!4v1546711339461" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	
</main>
	<!--Fin del contenido-->

	<!--Inicio del Footer-->
	<?php include 'includes/footer.php'; ?>
	<!--Fin del Footer-->

	<?php include 'includes/script.php'; ?>
</body>
</html>
