<?php 
include('templates/layout.html'); 
include('server.php');

$connection = mysql_connect('localhost', 'root', '');
mysql_select_db('registro',$connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/246cb5c63c.js" crossorigin="anonymous"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>UniMarvel</title>
</head>
<body>


<?php  
                $query = "SELECT * FROM store ORDER BY cod_barras ASC";  
                $result = mysql_query( $query, $connection);  
                if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
       
 ?>             <form action="delete.php" method="POST">
				        <div class="container">
							<div class="row">
								<div class="col-sm-4">
									<div class="card">
										<img src="imagenes/<?php echo $row["foto"] ?>" alt="">
									</div>
									
									<div class="card-body">

										<input class="card-text" id="id" name="id" value="<?php echo $row["cod_barras"]?>" readonly="readonly"></input>
										<h5 class="card-title"><?php echo $row["nombre"] ?></h5>
										<h6 class="card-title">$<?php echo $row["valor"] ?></h5>

										<button type="submit" class="btn btn-danger" id="delete" name="delete">Borrar</button>
									</div>
								</div>								
							</div>
						</div>
				</form>	
<?php
					 }
					}




	error_reporting(E_ERROR | E_PARSE);
				if(isset($_POST["delete"])){

				$id = $_POST["id"];


				$query = "DELETE FROM store WHERE cod_barras = '$id'";

				$result = mysql_query($query, $connection);


			if(!$result){
				die("Consulta fallida");
			}else{
				echo "<script>alert(Informacion borrada satisfactoriamente)</script>";
			}
		}


?>


</body>
</html>