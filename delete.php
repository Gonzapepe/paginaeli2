<?php 

include('templates/layout.html'); 

$connection = mysql_connect('localhost', 'root', '');
mysql_select_db('registro',$connection);

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