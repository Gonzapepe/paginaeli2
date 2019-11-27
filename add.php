<?php include('layout.html') ?>

<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/246cb5c63c.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="boostrap.css">
	<title>agregar</title>
</head>
<body class="bg-secondary d-flex" style="background-image: url('./imagenes/14358.jpg'); background-repeat: no-repeat;
background-size: cover; background-position: center center; flex-direction: column;">
<form class="mt-3 d-flex" style="justify-content: center; align-items: center; flex: 1" action ="index.php" method="post">
	<div class="d-flex card p-2 text-light mt-4" style="width: 80%; background: rgba(0, 0 , 0, .8); flex-direction: row;">
		<div style="flex: 1">
			<div class="w-100 p-3">
				<label style="width: 100%; font-weight: 600">Código</label>
				<input style="width: 80%; border-radius: 2px; border: none; padding: 5px;" type='number' name='codigo' required="required"> 
			</div>

			<div class="w-100 p-3">
			<label style="width: 100%; font-weight: 600"> Remera </label>
			<input style="width: 80%; border-radius: 2px; border: none; padding: 5px;" type="text" name="nombre" required = "required">
		</div>
			<div class="w-100 p-3">
			<label style="width: 100%; font-weight: 600"> Valor </label>
			<input style="width: 80%; border-radius: 2px; border: none; padding: 5px;" type='number' name="valor" required='required'> 
			</div>
			<div class="w-100 p-3">
			<label style="width: 100%; font-weight: 600"> Descripción</label>
			<input style="width: 80%; border-radius: 2px; border: none; padding: 5px;" type='text' name="descripcion" type='text'> 
			</div>
			<div class="w-100 p-3">
			<label style="width: 100%; font-weight: 600"> Stock </label>
			<input style="width: 80%; border-radius: 2px; border: none; padding: 5px;" type='number' name='stock' required='required'> 
			</div>
		</div>
		
		 <div style="flex: 1">

			<div class="w-100 p-3">
			<label style="width: 100%; font-weight: 600"> Talle </label>
			<input style="width: 80%; border-radius: 2px; border: none; padding: 5px;" type='text' name='talle' required='required'> 
			</div>
			<div class="w-100 p-3">
			<label style="width: 100%; font-weight: 600"> Foto </label>
			<input style="width: 80%; border-radius: 2px; border: none; padding: 5px;" type='file' name='foto' id='foto'>
			</div>

				<div class="d-flex" style="flex-direction: column; align-items: center;">
		 		<button class="btn btn-success p-3" style="" type="submit" name="subir"><i class="fas fa-upload"></i> Subir Remera </button>
		 		<p class="mt-2"> ¿Su remera ya está?</p> 
		 		<a href='index.php'>búsquela por su código o nombre. </a>
		 	</div>
		</div>

		 </div>
	

</form>
<?php
if(isset($_POST['subir'])){
    // Hacemos una condicion en la que solo permitiremos que se suban imagenes y que sean menores a 20 KB
    if ((($_FILES["foto"]["type"] == "image/gif") ||
    ($_FILES["foto"]["type"] == "image/jpeg") ||
    ($_FILES["foto"]["type"] == "image/jpg") ||
    ($_FILES["foto"]["type"] == "image/pjpeg")) &&
    ($_FILES["foto"]["size"] < 2000000)) {

    //Si es que hubo un error en la subida, mostrarlo, de la variable $_FILES podemos extraer el valor de [error], que almacena un valor booleano (1 o 0).
      if ($_FILES["foto"]["error"] > 0) {
        echo $_FILES["foto"]["error"] . "";
      } else {
        // Si no hubo ningun error, hacemos otra condicion para asegurarnos que el archivo no sea repetido
        if (file_exists("foto/" . $_FILES["foto"]["name"])) {
          echo $_FILES["foto"]["name"] . " ya existe. ";
        } else {
         // Si no es un archivo repetido y no hubo ningun error, procedemos a subir a la carpeta /archivos, seguido de eso mostramos la imagen subida
        	
          move_uploaded_file($_FILES["archivo"]["tmp_name"],
          "imagenes/" . $_FILES["foto"]["name"]);
          echo "Archivo Subido ";
          echo '<img src="imagenes/".$_FILES["foto"]["name"]>';
        }
      }
    } else {
        // Si el usuario intenta subir algo que no es una imagen o una imagen que pesa mas de 20 KB mostramos este mensaje
        echo "Archivo no permitido";
    }
}
?>


<?php

	if (isset($_POST["subir"])) {
		
	$codigo = $_POST["codigo"];
	$nombre =$_POST["nombre"];
	$valor = $_POST["valor"];
	$descripcion = $_POST["descripcion"];
	$foto = $_FILES["foto"]["name"];
	$talle = $_POST["talle"];
	$stock = $_POST["stock"];
	
	$conexion = mysql_connect("localhost","root","");
	mysql_select_db("registro",$conexion);
	$consulta = "insert into store (cod_barras, nombre, valor, descripcion, foto) values ($codigo, '$nombre',$valor, '$descripcion', '$foto') ";
	$consulta2 = "insert into talles (cod_barras, talle, stock) values ('$codigo, '$talle', '$stock')";
	$res = mysql_query($consulta,$conexion);
	$res2 = mysql_query($consulta2, $conexion);
	if ($res=="1" && $res2=="1") {
		echo "<script> alert( 'La remera se agregó al sistema.' ); window.location='add.php' </script>";
	}
	else{
		echo"<script> alert( 'La remera  no se ha agregado al sistema' ); window.location='add.php' </script>";
	}

		mysql_close($conexion);
	}
	
		
	?>

</body>
</html>