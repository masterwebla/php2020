<?php
	//recibir el ID del pais
	$email = $_POST['email'];

	//conectarnos con la BD
	require('conexion.php');

	//consultar si el email existe
	$sql_email = "SELECT * FROM usuarios WHERE email='$email'";
	$emails = $conn->query($sql_email);
	$cantidad = $emails->rowCount();

	echo $cantidad;
?>