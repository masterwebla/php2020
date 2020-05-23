<?php 
	//Conectarnos a la BD
	require('conexion.php');

	$sql_paises = "SELECT * FROM paises ORDER BY nombre ASC";
	$paises = $conn->query($sql_paises);

?>

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
				<input type="text" class="form-control" name="nombres" id="nombres" placeholder="Ingrese sus nombres aquí..." required="required">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su email aquí..." required="required" onblur="consEmail()">
			</div>
			<div class="form-group">
				<label for="fecha">Fecha</label>
				<input type="date" class="form-control" name="fecha" id="fecha" required="required">
			</div>
			<div class="form-group">
				<label for="pais">País</label>
				<select name="pais" id="pais" class="form-control" onchange="consCiudades()" required="required">
					<option value="">Seleccionar</option>
					<?php foreach($paises as $pais){ ?>
						<option value="<?php echo $pais['id']; ?>"><?php echo $pais['nombre']; ?></option>
					<?php } ?>
				</select>
			</div>

			<div class="form-group">
				<label for="ciudad">Ciudades</label>
				<select name="ciudad" id="ciudad" class="form-control" required="required">
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-success">Guardar</button>
				<a class="btn btn-danger" href="listar.php">Cancelar</a>
			</div>
		</form>
	</div>

	<!-- Latest compiled JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script>
		function consCiudades(){
			var pais_id = $("#pais").val();
			$.ajax({
				url:"consultarCiudades.php",
				data:{pais_id:pais_id},
				type:"POST",
				success:function(resultado){
					$("#ciudad").empty();
					$("#ciudad").html(resultado);
				}
			})
		}

		function consEmail(){
			var email_in = $("#email").val();
			$.ajax({
				url:"consultarEmail.php",
				data:{email:email_in},
				type:"POST",
				success:function(cantidad){
					if(cantidad>0)
						$("#email").css({"border":"4px solid red"});
					else
						$("#email").css({"border":"4px solid green"});
				}
			})
		}
	</script>
</body>
</html>