<?php 
	//PASO 1: Recibir el ID del usuario a borrar
	$id = $_GET['id'];

	//PASO 2: Conectarnos con la Base de Datos
	require("conexion.php");

	//PASO 3: SQL para borrar
	$sql_borrar = "DELETE FROM usuarios WHERE id='$id'";
	$conn->exec($sql_borrar);

	//PASO 4: Redireccionar el usuario a página de gracias
	header("location:listar.php");
?>