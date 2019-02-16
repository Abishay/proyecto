<?php
session_start();
if (!isset($_SESSION['logueado'])){//si es que no hay la variable logueado
  header('Location: login.php');//me impida el paso a index y me redirija al login

}


?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <?php include 'includes/header.php'; ?>

	<?php
		if (isset($_POST)){
			if (isset($_POST['Guardar']) && $_POST['Guardar']=='Guardar' && $_POST['nombre'] != '' ){

				//Capturar los datos recibidos via POST y guardarlos en variables

				$nombre=$_POST['nombre'];
				$descripcion_corta=$_POST['descripcion_corta'];//encriptar la contraseña recibida
        $descripcion_detallada=$_POST['descripcion_detallada'];
				$activo=$_POST['activo'];
				$imagen=$_POST['imagen'];
				$precio=$_POST['precio'];
        $duracion=$_POST['duracion'];
        $dias=$_POST['dias'];

				//guardar una consulta sql a ejecutar en una variable

				$sql='INSERT INTO cursos (nombre, descripcion_corta, activo, imagen, precio, duracion, dias, fecha_add) VALUES (:nombre, :descripcion_corta,  :activo, :imagen, :precio, :duracion, :dias, NOW())';//el now() es una funcion sql que guardar la fecha actual
				//definir VARIABLE $DATA array() con los valores a guardarse para la consulta sql

				$data=array(
					//tienen que ser iguales a los parametros del insert, y los de la derecha a las variables
					'nombre'=>$nombre,
					'descripcion_corta'=>$descripcion_corta,
					'activo'=>$activo,
					'imagen'=>$imagen,
					'precio'=>$precio,
          'duracion'=>$duracion,
          'dias'=>$dias
				);
				//preparar la consulta SQL
				$query=$connection->prepare($sql);

				try{
					$query->execute($data); //ejecutamos la consulta
					//Guardamos un mensaje de exito en una variable
					$mensaje='<p class="alert alert-success">Registrado correctamente</p>';
					//redireccionamos al listado de usuarios con Javascript
					echo '<script>window.location="cursos.php";</script>';

				}	catch(Exception $e){
					$mensaje= '<p class="alert alert-danger">'. $e . '</p>';

				}
			}
		}


	?>
 

  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'includes/aside.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registro de Cursos <a href="cursos.php" class="btn btn-success">Lista de Cursos</a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--FORMULARIO-->
          <div class="col-sm-12"><!--para que me agarre toda la pantalla-->
            <div class="panel row">

            	<?php include 'includes/mensajes.php' ?>
            	
            	<form action="" method="POST">
            		<div class="form-group col-md-6">
            			<label>Nombre</label>
            			<input type="text" name="nombre" class="form-control" required>

            			<label>Descripcion</label>
            			<textarea class="form-control" name="descripcion_corta"></textarea>

            			<label>Activo</label>
                  <select class="form-control" name="activo" required>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                  </select>

            			
                  <label>Precio</label>
                  <input type="text" name="precio" class="form-control" required>

                  <label>Duracion</label>
                  <input type="text" name="duracion" class="form-control" required>

                  <label>Dias</label>
                  <input type="text" name="dias" class="form-control" required>

                  <label>Imagen</label>
                  <input type="text" name="imagen" class="form-control" required>

            			<br>
            			<input type="submit" class="btn btn-success" name="Guardar" value="Guardar">
            		</div>
            		

            	</form>
             
            </div>


          </div>


      <!--FIN FORMULARIO-->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include 'includes/footer.php'; ?>

 
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>

