<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
		<link rel="javascript" type="text" href="java.js">
	</head>

	<body>
		<h1>CUSPIDE LIBROS</h1>
		<h2>Formulario de Modificación de Libro</h2>
		 <main>
		  <form class="form2" action="modificar3.php" method="post" enctype="multipart/form-data">
		   <?php 
		      $isbn=$_GET["isbn"];
			  
		      $conexion=mysql_connect("localhost","root","");
			  mysql_select_db("cuspide",$conexion);
			  $consulta="select * from libros where ISBN='$isbn'";
			  $resultado=mysql_query($consulta, $conexion);
			 
			  $isbn=mysql_result($resultado, 0, 0);
			  $titulo=mysql_result($resultado, 0, 1);
			  $autor=mysql_result($resultado, 0, 2);
			  $editorial=mysql_result($resultado, 0, 3);
			  $genero=mysql_result($resultado, 0, 4);
			  $tapa=mysql_result($resultado, 0, 5);
			  $resumen=mysql_result($resultado, 0, 6);
			  $stock=mysql_result($resultado, 0, 7);
			  $precio=mysql_result($resultado, 0, 8);
			  mysql_close($conexion);
			  
			  echo "<p>ISBN: <br/><input type='text' name='isbn' value=$isbn readonly='readonly'/></p>";
			  echo "<p>TÍTULO: <br/><input type='text' name='titulo' value=$titulo required='required'/></p>";
			  echo "<p>AUTOR: <br/><input type='text' name='autor'  value=$autor required='required'/></p>";
			  echo "<p>EDITORIAL:<br/> <input type='text' name='edit' value=$editorial required='required'/></p>";
			  echo "<p>GÉNERO: <br/><input type='text' name='genero' value=$genero required='required'/></p>";
			  echo "<p>RESUMEN: <br/><textarea name='resumen' value=$resumen required='required'></textarea></p>";
			  echo "<p>STOCK: <br/><input type='number' name='stock' value=$stock required='required'/></p>";
			  echo "<p>PRECIO: <br/><input type='number' name='precio' value=$precio required='required'/></p>";
			  echo "<p>TAPA (archivo jpg o bien png):<br/><input type='file' value=$tapa name='tapa' accept='image/x-png,image/gif,image/jpeg' required='required'/></p>";
			  echo "<p><button type='submit' name='modif'>MODIFICAR DATOS DEL LIBRO</button></p>";
			 
			  
			?>  
		  </form>
						
		</main>
	

	</body>

</html>