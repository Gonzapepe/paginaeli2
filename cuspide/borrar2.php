<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
		<link rel="javascript" type="text" href="java.js">
	</head>

	<body>
		<h1>CUSPIDE LIBROS</H1>
		  	<?php
			  $isbn=$_GET["isbn"];
			  $conexion=mysql_connect("localhost","root","");
			  mysql_select_db("cuspide",$conexion);
			  $consulta="delete from libros where isbn='$isbn'";
			  $resultado=mysql_query($consulta, $conexion);
			 			  
			  if($resultado==1)// si no hay registros recuperados
				echo "<script>alert('El libro se ha eliminado');window.location='index.php';</script>";
			  else
				echo "<script>alert('Hubo un problema al eliminar el libro');window.location='index.php';</script>";
 			 mysql_close($conexion);
	  	   ?>
			
		</main>
	

	</body>

</html>