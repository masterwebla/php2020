<?php
	//recibir el ID del pais
	$pais_id = $_POST['pais_id'];

	//conectarnos con la BD
	require('conexion.php');

	//consultar ciudades del pais
	$sql_ciudades = "SELECT * FROM ciudades WHERE pais_id='$pais_id'";
	$ciudades = $conn->query($sql_ciudades);

	echo "<option value=''>Seleccionar ciudad</option>";
	foreach($ciudades as $ciudad){
		echo "<option>".$ciudad['nombre'] ."</option>";
	}
?>