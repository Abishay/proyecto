<?php

session_start();
require '../conexion/conexion.php';
if ($_POST){//si se apreto el boton inicio sesion, ya que es por el metodo post(detras de la pagina trabaja), no get(url)
  if($_POST['email'] != '' && $_POST['pass'] !=''){//del name del formulario, (si hay algo en el form)
    $email= $_POST['email'];//guardamos en una variable
    $password= md5($_POST['pass']);

    $sql="SELECT * FROM usuarios WHERE email='$email' AND pass='$password'";//comparo con la BD
    $query=$connection->prepare($sql);//preparamos la conexion
    $query->execute();

    if ($query->rowCount()>0){//si existe e usuario, si hay 1 registro
      foreach ($query->fetchAll() as $row){
        $_SESSION['logueado']='logueado';
        $_SESSION['id_usuario']=$row['id_usuario'];
        $_SESSION['nombre_usuario']=$row['nombre'];
        $_SESSION['email_usuario']=$row['email'];
        $_SESSION['avatar']=$row['avatar'];

        header('Location:index.php');//una vez correcto los datos nos redirecciona a la pagina principal

      }

    }else{
      $message='<p class="alert alert-danger">Los Datos ingresados no coinciden!</p>';
    }
  }
}


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingrese su usuario y contraseña</p>
    <?php 
      if ( isset($message)){
        echo $message;
      }


     ?>


    <form action="" method="post">

      <div class="form-group has-feedback">

        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" name="pass" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesion</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
