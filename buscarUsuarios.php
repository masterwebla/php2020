<?php
	//recibir el ID del pais
	$nombrein = $_POST['nombrein'];

	//conectarnos con la BD
	require('conexion.php');

	//consultar si el email existe
	$sql_nombre = "SELECT * FROM usuarios WHERE nombres LIKE '%$nombrein%'";
	$usuarios = $conn->query($sql_nombre);
	
	foreach($usuarios as $usuario){
		echo "<tr>
				<td>".$usuario['nombres']."</td>
				<td>".$usuario['email']."</td>
				<td>".$usuario['fecha']."</td>
				<td>".$usuario['ciudad']."</td>
			</tr>";
	}
?>