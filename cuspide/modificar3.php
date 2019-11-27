<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
		<link rel="javascript" type="text" href="java.js">
	</head>

	<body>
		<h1>CUSPIDE LIBROS</h1>
		<h2>Modificación de Libro</h2>
		 <main>
		  
		  	<?php
			    $isbn=$_POST["isbn"];
				echo "<script>alert($isbn)</script>";
			    $titulo=$_POST["titulo"];   
				echo "<script>alert($titulo)</script>";
				$autor=$_POST["autor"];   
				$edit=$_POST["edit"];   
				$genero=$_POST["genero"];   
				$resumen=$_POST["resumen"];   
				$stock=$_POST["stock"];   
				$precio=$_POST["precio"];  
                $tapa=$_FILES["tapa"]["name"];//array que toma de archivo de la tapa, el nombre
                		
				$destino="libros/tapas/$tapa";
				move_uploaded_file($_FILES['tapa']['tmp_name'], $destino);//sube la tapa
				
                $conexion=mysql_connect("localhost","root","");
			    mysql_select_db("cuspide",$conexion);
			    $consulta="update libros set TITULO='$titulo', AUTOR='$autor', EDITORIAL='$edit', GENERO='$genero', RESUMEN='$resumen', STOCK='$stock', PRECIO='$precio', TAPA='$tapa' where ISBN='$isbn'";
				$resultado=mysql_query($consulta, $conexion);
				if($resultado=="1")
				   echo "<script> alert('El libro se ha Modificado exitosamente');window.location='index.php';</script>";
				else	
			 	   echo "<script> alert('Hubo un error añl modificar el libro');window.location='index.php';</script>";
				mysql_close($conexion);
				 
			 
			  
	  		?>
			
		</main>
	

	</body>

</html>