<?php 
	//Recibir los datos
	$id = $_POST['id'];
	$nombres = $_POST['nombres'];
	$email = $_POST['email'];
	$fecha = $_POST['fecha'];
	$ciudad = $_POST['ciudad'];

	//PASO 2: Conectarnos con la Base de Datos
	require("conexion.php");

	//PASO 3: Actualizar los datos mediante SQL
	$sql_actualizar = "UPDATE usuarios SET nombres='$nombres',email='$email',fecha='$fecha',ciudad='$ciudad'
					WHERE id='$id'";
	$conn->exec($sql_actualizar);

	//PASO 4: Redireccionar el usuario a página de gracias
	header("location:listar.php");
?>