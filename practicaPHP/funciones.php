<?php
//$nombre="jUAN";

//saludar($nombre);
	function saludar($nombre){
		echo"Hola, " . $nombre;
	}
//ponemos return para que nos lleve el resultado a la pagina y alli mostramos, porque si mostramos aqui nos cortara la pagina

	function sumar($valor1,$valor2){
		$r=$valor1+$valor2;
		return $r;
	}

	function restar($valor1,$valor2){
		$r=$valor1-$valor2;
		return $r;
	}

	function multiplicar($valor1,$valor2){
		$r=$valor1*$valor2;
		return $r;
	}

	function dividir($valor1,$valor2){
		$r=$valor1/$valor2;
		return $r;
	}
?>