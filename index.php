<?php include('templates/layout.html') ?>
<?php include('server.php') ?>

<?php
	

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Tenes que iniciar sesión primero.";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
 ?>
<!DOCTYPE html >
<html lang="es">
<head>
	<meta charset = "UTF-8" />
	<title>MAIN</title>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/246cb5c63c.js" crossorigin="anonymous"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body class="bg-secondary" style="background-image: url('./imagenes/index.jpg'); background-repeat: no-repeat;
background-size: cover; background-position: center center;">
<div class=" text-center justify-content-center">
<div class="container card card-body col-md-3 mt-3  " style="background-color:rgba(255,255,255,0.8); margin-bottom:10px; margin-top:20px;">
	<h1 class="ml-4 mt-4 text-center text-dark"><i class="fas fa-tshirt"></i> Remeras </h1>
	<h2 class="ml-4 mt-4 text-center text-dark"> Listado de remeras:</h2>
	<h2 class="ml-4 mt-4 text-center text-dark"> Búsqueda por Título </h2>
</div>
	<form  class="mt-4"action ="index.php" method="post" class="text-center">
		<div class="card card-body col-md-3  m-auto" style="background-color:rgba(0,0,0,0.6);">
		<p class= ' text-weight-bold text-light '>Remera: <br/> <input class="input-group" type="text" name="nombre" type = "text"> </p>
		
		 <button class="ml-3 mr-3 btn btn-success" type = "submit" name = "buscar"><i class="fas fa-search"></i> Buscar </button></p>
		 <p class="ml-3 text-light"> ¿Su remera no está?</p> <a class="ml-3 mr-3 btn btn-primary" href='add.php'>Agregue su pedido </a>
		 </div>

	</form>

  	<p class="text-center "><a href="register.php" class="mt-2 ml-4 btn btn-dark text-light">Registrarse</a> <a href="login.php" class="mt-2 btn btn-dark text-light">Iniciar sesión</a></p>


  <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      	</div>
  	<?php endif ?>
<?php  if (isset($_SESSION['username'])) : ?>
	<div class="container col-3 m-auto " style="background-color:rgba(0,0,0, 0.8);">
    	<p class="ml-4 text-center text-light ">Bienvenido <strong><?php echo $_SESSION['username']; ?></strong></p></div>
    	<p class="text-center"> <a href="index.php?logout='1'" class="ml-4 btn btn-danger text-center"style="color: white;"><i class="fas fa-sign-out-alt"></i> Log out</a> </p>
    <?php endif ?>






	
  	<?php
  		error_reporting(E_ERROR | E_PARSE);
		if (isset($_POST["buscar"])){

		$nombre = $_POST['nombre'];
		$conexion = mysql_connect("localhost","root","");
		mysql_select_db("registro",$conexion);


		echo '<div class="card card-body bg-transparent" style="background-color:rgba(255,255,255,0.8);">

		<div class="card card-body " style=" width:100%; height:100%; float:right; margin-right:450px; background-color:rgba(255,255,255,0.8);">';

			$consulta = "select * from store where nombre like '%$nombre%'";
			$res = mysql_query($consulta, $conexion);

			echo '<table style="width:100%; height:20px;">

			    <tr style="width:30px; height:50px;">
      				<th scope="col">Código</th>
			      	<th scope="col">Nombre</th>
			      	<th scope="col">Valor</th>
			      	<th scope="col">Descripción</th>
			      	<th scope="col">Foto</th>
			      	<th scope="col">Talle</th>
			      	<th scope="col">Stock</th>
    			</tr>';

			for($i=0; $i < mysql_num_rows($res); $i++) {

				$codigo = mysql_result($res, $i, 0);

				$consulta2 = "select * from talles where cod_barras = '$codigo'";

				$res2 = mysql_query($consulta2, $conexion);


				echo '<tr>';

				for($j=0; $j < mysql_num_fields($res); $j++) {

					if($j == 4) {
						echo '<td><img  class="justify-content-center" style=" display:block; margin:auto; width:75%; height:20%; float:left;"class="img" src="./imagenes/'. mysql_result($res, $i, $j) .'"  /></td>';
					} else {
						echo "<td>" . mysql_result($res, $i, $j) . "</td>";
					}
					
				}

				if(!mysql_result($res2, $i, 1)) {
					echo '<td>No posee talle</td>';
				} else {
					echo "<td>" . mysql_result($res2, $i, 1) .  "</td>";
				}
				if(!mysql_result($res2, $i, 2)) {
					echo '<td>No posee stock</td>';
				} else {
					echo "<td>" . mysql_result($res2, $i, 2) .  "</td>";
				}
				
				echo '</tr>';
			}


			echo '</table>';


		}

		echo '</div>
		</div>';
		
		
		?>

	<div style="clear:both;"> </div>
	
</div>

	<?php include('footer.html')?>




</body>
</html>