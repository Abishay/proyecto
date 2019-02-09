<?php
echo "<h1>Array indexado</h1>"; 

$dias=array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");

$numeros=array(33,12,83,55);

echo "El primer dia es: ". $dias[0]."<br>";

echo "El segundo numero es: ". $numeros[1]."<br>";


//arrays asociativos
echo "<h1>Array asociativo</h1>";

$colores=array("color1"=>"rojo","color2"=>"verde","color3"=>"azul");

echo "Color 3: ".$colores["color3"]."<br>";

$cosas=array("color1" =>"rojo","importe" =>300,"activo" =>true,3 =>55);


echo "Activo 3: ".$cosas["activo"]."<br>";

echo "3: ".$cosas[3]."<br>";

//Multidimensionales
$_colores=array(
'frutas'=>array('manzana'=>'roja', 'ciruela'=>'purpura'),
'flores'=>array('rosa'=>'rosada', 'violeta'=>'azul')
);

echo "Una ciruela es: ".$_colores['frutas']['ciruela']. " , y una violeta es: " .$_colores['flores']['violeta'];

echo "<br>";

var_dump($_colores);echo "<br>";//imprime todos los detalles del vector
var_dump($cosas);echo "<br>";
print_r($cosas);//imprime el vector




?>