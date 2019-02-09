<?php

//Iniciar variablesde sesion
session_start();
//crear variables de sesion
$_SESSION['nombre']="Juan";
$_SESSION['email']="juan@gmail.com";

//imprimir variable sesion
echo $_SESSION['nombre'];
?>