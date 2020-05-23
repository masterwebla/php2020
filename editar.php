<?php
	//PASO 1: Recibir el ID del usuario que se va a editar
	$id = $_GET['id'];

	//PASO 2: Conectarnos a la BD
	require('conexion.php');

	//PASO 4: Consultar todos los datos de ese usuario con ID recibido
	$sql_consultar = "SELECT * FROM usuarios WHERE id='$id'";
	$resultado = $conn->query($sql_consultar);
	$usuario = $resultado->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de edición de usuarios</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Formulario de edición</h1>
		<form action="actualizar.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
				<label for="nombres">Nombres</label>
				<input type="text" class="form-control" name="nombres" id="nombres" placeholder="Ingrese sus nombres aquí..." value="<?php echo $usuario['nombres']; ?>">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su email aquí..." value="<?php echo $usuario['email']; ?>">
			</div>
			<div class="form-group">
				<label for="fecha">Fecha</label>
				<input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo $usuario['fecha']; ?>">
			</div>
			<div class="form-group">
				<label for="ciudad">Ciudad</label>
				<select name="ciudad" id="ciudad" class="form-control">
					<option <?php if($usuario['ciudad']=="Bogota"){ ?> selected <?php } ?> >Bogota</option>
					<option <?php if($usuario['ciudad']=="Cali"){ ?> selected <?php } ?>>Cali</option>
					<option <?php if($usuario['ciudad']=="Medellin"){ ?> selected <?php } ?>>Medellin</option>
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-success">Actualizar</button>
				<a class="btn btn-danger" href="listar.php">Cancelar</a>
			</div>
		</form>
	</div>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>