<?php 
	//PASO 1: Recibir los datos enviados en el formulario
	//var_dump($_POST);
	$nombres = $_POST['nombres'];
	$email = $_POST['email'];
	$fecha = $_POST['fecha'];
	$ciudad = $_POST['ciudad'];

	//PASO 2: Conectarnos con la Base de Datos
	require("conexion.php");

	//PASO 3: Insertar los datos mediante SQL
	$sql_insertar = "INSERT INTO usuarios (nombres,email,fecha,ciudad) 
		VALUES('$nombres','$email','$fecha','$ciudad')";
	$conn->exec($sql_insertar);
	
	//PASO 4: Redireccionar el usuario a página de gracias
	header("location:gracias.php");
?>