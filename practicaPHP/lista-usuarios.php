<?php

	session_start();
	echo $_SESSION['nombre'];

	echo "<br><a href='salir.php'>salir</a>";

	require '../conexion/conexion.php'; 
	$sql="SELECT * FROM usuarios";//hacer la consulta
	$query=$connection->prepare($sql);//preparar
	$query->execute();//ejecutar
	$result=$query->fetchAll();//me duvuelve un array con los usuarios encontrados
	print_r($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Curso CAPACIT</title>
	<link rel="stylesheet" href="../../Proyecto/css/bootstrap.css">
</head>
<body>

<main>
	<a href="index.php">Volver</a>
	<h1>Lista de Usuarios</h1>


	<div class="col-sm-12">
		<table class="table table-striped table-dark">
		  <thead>
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Email</th>
		      <th scope="col">Pass</th>
		      <th scope="col">Acciones</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php foreach($result as $row) { ?>

		    <tr>
		          <td><?php echo $row['id_usuario']; ?></td>
			      <td><?php echo $row['nombre'];?></td>
			      <td><?php echo $row['email'];?></td>
			      <td><?php echo $row['pass'];?></td>
			      <td>
			      	<a href="">Eliminar</a>
			      	<a href="">Actualizar</a>
			      </td>
		    </tr>
			<?php } ?>
		   
		  </tbody>
</table>

	</div>
</main>



</body>
</html>