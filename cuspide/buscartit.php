<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
		<link rel="javascript" type="text" href="java.js">
	</head>

	<body>
		<h1> <img src="img/cuspide.jpg" /> <a href="index.php" title="Volver al Inicio"><img src="img/volver.png" /></a></h1>
		
		  <form action="buscartit.php" method="post">
		    <p>Ingrese título a buscar: <input type="text" name="titulo" /><button type="submit" name="buscar">Buscar</button></p>
		  </form>	
			<main>	
			<?php
			  if(isset($_POST["buscar"])) //si se presionó el botón submit
			  {
				$t=$_POST["titulo"];   
				$conexion=mysql_connect("localhost","root","");
			    mysql_select_db("cuspide",$conexion);
			    $consulta="select * from libros where titulo like '$t%' order by titulo";
			    $resultado=mysql_query($consulta, $conexion);
			    $cant=mysql_num_rows($resultado);
			    $cont=0;
			    if($cant==0)// si no hay registros recuperados
					echo "<p> No se encontró el libro ingresado.</p>";
				else
				{	
			      echo "<table>";
			      echo "<tr class='encab'><td>ISBN</td><td>TÍTULO</td><td>AUTOR</td><td>EDITORIAL</td><td>GÉNERO</td><td>TAPA</td><td>RESUMEN</td><td>STOCK</td><td>PRECIO</td>";
			  			  			  
			      for($i=0;$i<$cant;$i++)
			      {  
		            //para colorear las filas
				    $cont++;
		            if($cont%2==0)
					    $color="#ccc";
				    else
				        $color="#d7d9b2";
				    //----------------
			        echo "<tr style='background-color:$color'>";
				    $isbn=mysql_result($resultado, $i, 0);
				    $titulo=mysql_result($resultado, $i, 1);
				    $autor=mysql_result($resultado, $i, 2);
				    $editorial=mysql_result($resultado, $i, 3);
				    $genero=mysql_result($resultado, $i, 4);
				    $tapa=mysql_result($resultado, $i, 5);
				    $resumen=mysql_result($resultado, $i, 6);
				    $stock=mysql_result($resultado, $i, 7);
				    $precio=mysql_result($resultado, $i, 8);
				    echo "<td>$isbn</td>";
				    echo "<td class='titulo'>$titulo</td>";
				    echo "<td>$autor</td>";
				    echo "<td>$editorial</td>";
				    echo "<td>$genero</td>";
				    echo "<td><a href='libros/tapas/$tapa' target='_blank' title='Ampliar'><img src='libros/muestras/$tapa' alt='Foto de tapa' /></a></td>";
				    echo "<td class='resumen'>$resumen</td>";
				    echo "<td>$stock</td>";
				    echo "<td class='precio'>$ $precio</td>";
				    echo "</tr>";
				  }//del for
			      echo "</table>";
			      echo "<p>Total de Títulos encontrados: $cant</p>";
			 }//del encontrado  
			 mysql_close($conexion);
			}//del if isset		
			
	  		?>
			
		</main>
	

	</body>

</html>