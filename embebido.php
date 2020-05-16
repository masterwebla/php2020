<?php
	$edad = 16;
	$imagenperfil = "https://www.eltiempo.com/files/image_184_123/uploads/2018/11/17/5bf0bdb2839cc.jpeg";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Embebido de PHP en HTML</title>
</head>
<body>
	<h1>PHP dento de HTML</h1>
	<img src="<?php echo $imagenperfil; ?>" alt="">
	<?php if($edad>18){ ?>
		<p>Soy mayor de edad</p>
		<p>Estos son los videos para adultos</p>
	<?php 
   		} else { 
   	?>
		<p>Soy menor de edad</p>
		<p>Estos son videos para niños</p>
	<?php } ?>
</body>
</html>