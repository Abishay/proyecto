<?php
require 'funciones.php'; //mis funciones estan en otro archivo, entonces para poder llamarlo colocamos esto
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
	<h2>Ingrese los valores:</h2>
	<div class="col-sm-4">
		<form method="post">

		<input type="text" name="valor1" class="form-control" placeholder="Ingrese el primer valor">

		<input type="text" name="valor2" class="form-control" placeholder="Ingrese el segundo valor">

		<select name="operacion" class="form-control">
			<option value="suma">Sumar</option>
			<option value="resta">Restar</option>
			<option value="multiplicar">Producto</option>
			<option value="dividir">Dividir</option>

		</select>


		<input type="submit" name="name" class="btn btn-success" placeholder="Calcular">

		</form>	
	</div>
	<?php
		//var_dump($_POST);

	if(isset($_POST["valor1"]) && $_POST["valor1"] !='' && (isset($_POST["valor2"])) && $_POST["valor1"] !=''){//para verificar si estan o no vacios

		$valor1=$_POST["valor1"];
		$valor2=$_POST["valor2"];
		$operacion=$_POST["operacion"];
		//echo($valor1);

	switch ($operacion) {
		case 'suma': 
			$resultado=sumar($valor1,$valor2);
			
			break;
		case 'resta':
			$resultado=restar($valor1,$valor2);
			
			break;
		case 'multiplicar':
			$resultado=multiplicar($valor1,$valor2);
			
			break;
		case 'dividir':
			$resultado=dividir($valor1,$valor2);
			
			break;
		
	default:
		echo "No se realizo ninguna accion!";
		break;
	
	}
	
		
	}else{
		echo "Verifica los campos!";
	}

	?>

	<?php if ($resultado) { ?>
		<div class="col-sm-12"><!--sm: para tablets, md: para pantallas mas grandes, xs: para moviles, lg:para pantallad gigantes-->
			<h2><?php echo $resultado; ?></h2>
		</div>

	<?php } ?>
</main>



</body>
</html>