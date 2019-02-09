<?php
session_start();

session_destroy();//eliminamos la sesion(para poder crearla hay que iniciar sesion)
header('Location:login.php');//y nos redirije a iniciar sesion o login

?>