<?php
echo "<h1>Ciclos</h1>";

echo "<h2>Ciclo While</h2>";

$n=1;
while($n<=10){
 echo "El valor de n es: ". $n. "<br>";
 $n++;
}


echo "<h2>Ciclo Do While</h2>";

$x=1;
do{
	echo "El numero es: ". $x . "<br>";
	$x++;
}while($x<=5);

echo "<h2>Ciclo For</h2>";

for ($i=0; $i<10  ; $i++) { 
	echo "El numero es: ". $i . "<br>";
}

echo "<h2>Ciclo Foreach</h2>";

$personas=array('Juan','Luis','Maria','Jose','Bernardo','Julio');
foreach ($personas as $row) {
	echo $row. "<br>";
}
?>