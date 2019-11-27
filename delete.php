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
	<title>Document</title>
</head>
<body>
<div class="" style="margin:auto; width:950px; border:1px solid;">
<?php  
                $query = "SELECT * FROM store ORDER BY cod_barras ASC";  
                $result = mysql_query( $query, $connection);  
                if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
                ?>  
	<ul style="list-style:none; margin:0px; padding:0px;">
		<li style="width:300px; float:left; border:1px solid #d1d1d1; margin-top:50px; margin-left:10 px; margin-right:10px;">
			<div class="col-md-4" style="text-align:center; margin:auto; padding-top:15px;">
			<a href="./imagenes/<?php echo $row["foto"];?>">
                               <img src="./imagenes/<?php echo $row["foto"];?>" class="img-responsive" style=" margin-right:auto; margin-left:auto; width:100px; height:100px;"/></a>
			</div>
							   <h3><?php echo $row["nombre"];?> </h3>
							   <h3><?php echo $row["valor"];?></h3>
							   <button style="margin-left:35%;"type="submit" name="delete" class="btn btn-danger mb-3">Eliminar</button>
		</li>
	</ul>
</div>
	<?php
					 }
					}
	?>
<?php


if(isset($_POST["delete"])){

$id = $_POST["id"];


$query = "DELETE FROM store WHERE cod_barras = '$id'";

$result = mysql_query($connection, $query);


if(!$result){
	die("Consulta fallida");
}else{
	echo "Informacion borrada satisfactoriamente";
}


}

?>

</body>
</html>