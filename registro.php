<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de registro de usuarios</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Formulario de registro</h1>
		<form action="guardar.php" method="post">
			<div class="form-group">
				<label for="nombres">Nombres</label>
				<input type="text" class="form-control" name="nombres" id="nombres" placeholder="Ingrese sus nombres aquí...">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su email aquí...">
			</div>
			<div class="form-group">
				<label for="fecha">Fecha</label>
				<input type="date" class="form-control" name="fecha" id="fecha">
			</div>
			<div class="form-group">
				<label for="ciudad">Ciudad</label>
				<select name="ciudad" id="ciudad" class="form-control">
					<option>Bogota</option>
					<option>Cali</option>
					<option>Medellin</option>
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-success">Guardar</button>
				<a class="btn btn-danger" href="listar.php">Cancelar</a>
			</div>
		</form>
	</div>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>