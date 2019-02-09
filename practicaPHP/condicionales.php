<?php

echo "<h1>Condicionales en PHP</h1>";

$edad=20;
if($edad>=18){
	echo "Es mayor de edad";
}

echo "<br><br><br>";


$h=12;

if ($h<=12) {
	echo "Buen dia!";
} else {
	echo "Buenas tardes!";
}


echo "<br><br><br>";


$hora=12;
if ($hora<12) {
	echo "La hora es menor a 12";

} elseif($hora == 12) {
	echo "Son las 12";

}else{
	echo "Es mayor a 12";
}




echo "<br>";
$color="azul";

switch ($color) {
	case 'rojo':
		echo "Mi color favorito es el rojo";
		break;
	case 'azul':
		echo "Mi color favorito es el azul";
		break;
	default:
		echo "No tengo color favorito";
		break;
}

?>