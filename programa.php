<!DOCTYPE html>
<html>
<head>
	<title>Unimarvel</title>
</head>
<body>
<?php



	if(isset($_POST["buscar"])){
		$codigo = $_POST["cod_barras"];
		$conexion = mysql_connect("localhost","root","");
		mysql_select_db("unimarvel",$conexion);
		$consulta = "select * from libros where cod_barras = '$codigo' ";
		$res = mysql_query($consulta,$conexion);
		$cant = mysql_num_rows($res);
		if($cant == 0){
			echo "<p class= 'p'  >No se encontraron remeras. </p>";
			echo "<p class= 'p'  > <a href='index.php?codigo=$codigo'>AGREGAR</a></p>";
		}
		else{



	
			
	
			$codigo= mysql_result($res,0,0);
			$nombre = mysql_result($res,0,1);
			$valor = mysql_result($res,0,2);
			$descripcion = mysql_result($res,0,3);
			$foto = mysql_result($res,0,4);
			$talle = mysql_result($res,0,5);
			$stock = mysql_result($res,0,6);
			
			
			

			echo "<tr style = background-color:#fffff>";
			echo "<td> $codigo </td>";
			echo "<td class='nombre'> $nombre</td>";
			echo "<td> $valor </td>";
			echo "<td class='descripcion'> $descripcion </td>";
			echo "<td> $genero </td>";
			echo "<td><a href='H:/pepe/pagina/$foto' target='_blank' /><img src='H:/pepe/pagina/$tapa' alt='no se encontro xd' </td>";
			echo "<td> $stock </td>";
			echo "<td class='precio'>$ $valor </td>";
			echo "</tr>";


		
		echo "</table>";
		echo "<td> total de libros: $cant </td>";
	}
		mysql_close($conexion);
		}
	?>
</body>
</html>