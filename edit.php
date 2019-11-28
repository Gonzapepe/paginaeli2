<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Unimarvel</title>

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

include('templates/layout.html'); 

$connection = mysql_connect('localhost', 'root', '');
mysql_select_db('registro',$connection);







$query = "SELECT * FROM store ORDER BY cod_barras ASC";  
$result = mysql_query( $query, $connection);  

while($row = mysql_fetch_array($result))  
    {
?>  
    <form action="edit.php" method="POST">
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

										<button type="submit" class="btn btn-danger" id="modificar" name="modificar">Modificar</button>
									</div>
								</div>								
							</div>
						</div>
				</form>	


<?php
	 }
if(isset($_POST["modificar"])){
// PONER UN FORMULARIO PARA EDITAR LOS CATALOGOS!!!
$codigo = $_POST["codigo"];
$nombre =$_POST["nombre"];
$valor = $_POST["valor"];
$descripcion = $_POST["descripcion"];
$foto = $_FILES["foto"]["name"];


$query = "UPDATE store SET nombre = '$nombre', valor = '$valor', descripcion = '$descripcion', foto = '$foto' WHERE cod_barras = '$codigo' ";


$result = mysql_query($connection, $query);

if(!result){
	die('Consulta fallida');
}else{
	echo "Editado Satisfactioriamente";
}




}



?>

</body>
</html>