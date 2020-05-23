<?php
	//PASO 1: Conectarnos a la Base de Datos
	require("conexion.php");

	//PASO 2: Consultar la tabla usuarios (SQL)
	$sql_consultar = "SELECT * FROM usuarios";
	$resultado = $conn->query($sql_consultar);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listado de usuarios</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center">Listado de Usuarios
			<a class="btn btn-success" href="registro.php">Crear</a>
		</h1>
		<input type="text" name="nombrein" id="nombrein" style="margin-bottom: 30px" onkeyup="buscar()" placeholder="Buscar por nombres...">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Nombres</th>
					<th>Email</th>
					<th>Fecha</th>
					<th>Ciudad</th>
				</tr>
			</thead>
			<tbody id="encontrados">
				<?php 
					foreach($resultado as $usuario){
				?>
					<tr>
						<td><?php echo $usuario['nombres']; ?></td>
						<td><?php echo $usuario['email']; ?></td>
						<td><?php echo $usuario['fecha']; ?></td>
						<td><?php echo $usuario['ciudad']; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<!-- Latest compiled JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script>
		function buscar(){
			var nombrein = $("#nombrein").val();
			$.ajax({
				url:"buscarUsuarios.php",
				data:{nombrein:nombrein},
				type:"POST",
				success:function(resultado){
					console.log(resultado);
					$("#encontrados").html(resultado)
				}
			})
		}
	</script>
</body>
</html>