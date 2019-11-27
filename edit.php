<?php 

include('templates/layout.html'); 

$connection = mysql_connect('localhost', 'root', '');
mysql_select_db('registro',$connection);



if(isset($_POST["modificar"])){

$codigo = $_POST["codigo"];
$nombre =$_POST["nombre"];
$valor = $_POST["valor"];
$descripcion = $_POST["descripcion"];
$foto = $_FILES["foto"]["name"];


$query = "UPDATE store SET nombre = '$nombre', valor = '$valor', descripcion = '$descripcion', foto = '$foto' WHERE cod_barras = '$id' ";


$result = mysql_query($connection, $query);

if(!result){
	die('Consulta fallida');
}else{
	echo "Editado Satisfactioriamente";
}




}



?>