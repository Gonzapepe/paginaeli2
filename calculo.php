<!DOCTYPE html>
<html>
<head>
	<title>calculo</title>
</head>
<body>
<?php
$user = $_POST["user"];
$contraseña = $_POST["pass"];
$queja = $_POST["queja"];
$pibe = strlen($user);
$letra = strlen ($contraseña);
$abc= strlen($queja);
$echo = 0;
if ($pibe > 0 && $letra > 0 && $abc > 0) {

	if ($letra <= 10 && $letra >= 6) {
		 if (!preg_match('/[a-z]/', $contraseña)) {
		 	echo "<p>La clave debe tener al menos una letra minúscula</p>";
		 	echo "<a href='strings.html'>Volver</a>";

		 } else if (!preg_match('/[A-Z]/',$contraseña)) {
		 	echo "<p>La clave debe tener al menos una letra mayúscula</p>" ;
		 	echo "<a href='strings.html'>Volver</a>";

		 } else if (!preg_match('/[0-9]/', $contraseña)) {
		 	echo "<p>La clave debe tener al menos un caracter numérico</p>";
		 	echo "<a href='strings.html'>Volver</a>";

		 } else {
		 	if ($abc >= 10 && $abc <= 140) {
		 		echo "Los datos estan correctos";
		 	} else {
		 		echo 'El comentario debe tener entre 10 y 140 caracteres';
		 		echo "<a href='strings.html'>Volver</a>";
		 	}
		 }
	} else {
		echo '<p>La contraseña debe tener entre 6 y 10 caracteres.</p>';
		echo "<a href='strings.html'>Volver</a>";

	}

} else {
	echo "<p>Complete todos los campos</p>";
	echo "<a href='strings.html'>Volver</a>";

} 


?>

</body>
</html>