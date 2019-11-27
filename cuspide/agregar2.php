<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
		<link rel="javascript" type="text" href="java.js">
	</head>

	<body>
		<h1>CUSPIDE LIBROS</h1>
		<h2>Formulario de Alta de Libro</h2>
		 <main>
		  <form class="form2" action="agregar2.php" method="post" enctype="multipart/form-data">
		   <?php 
		      $isbn=$_GET["isbn"];
		      echo "<p>ISBN:<br/><input type='number' name='isbn' value=$isbn readonly='readonly'/></p>";
			?>  
			<p>TÍTULO: <br/><input type="text" name="titulo"  required="required"/></p>
			<p>AUTOR: <br/><input type="text" name="autor"  required="required"/></p>
			<p>EDITORIAL:<br/> <input type="text" name="edit"  required="required"/></p>
			<p>GÉNERO: <br/><input type="text" name="genero"  required="required"/></p>
			<p>RESUMEN: <br/><textarea name="resumen" required="required"></textarea></p>
			<p>STOCK: <br/><input type="number" name="stock" required="required"/></p>
			<p>PRECIO: <br/><input type="number" name="precio"  required="required"/></p>
			<p>TAPA (archivo jpg o bien png):<br/><input type="file" name="tapa" accept="image/x-png,image/gif,image/jpeg" required="required"/></p>
			<p><button type="submit" name="agregar">AGREGAR LIBRO</button></p>
		  </form>	
				
			<?php
			  if(isset($_POST["agregar"])) //si se presionó el botón submit
			  { $isbn=$_POST["isbn"];
				$titulo=$_POST["titulo"];   
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
			    $consulta="insert into libros(ISBN, TITULO, AUTOR, EDITORIAL, GENERO, RESUMEN, STOCK, PRECIO, TAPA) VALUES ('$isbn', '$titulo', '$autor', '$edit', '$genero','$resumen', '$stock', '$precio', '$tapa')";
				$resultado=mysql_query($consulta, $conexion);
				if($resultado=="1")
				   echo "<script> alert('El libro se ha agregado a la BD');window.location='index.php';</script>";
				else	
			 	   echo "<script> alert('Hubo un error al agregar el libro');window.location='index.php';</script>";
				mysql_close($conexion);
				 
			  }//del if isset		
			  
	  		?>
			
		</main>
	

	</body>

</html>