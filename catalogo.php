<?php include('server.php') ?>
<?php include('templates/layout.html')?>
<?php 

 $connect = mysql_connect("localhost", "root", "");
   mysql_select_db('registro');
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/246cb5c63c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
</head>
<body style="background-image: url('./imagenes/fondo.jpg'); background-repeat: no-repeat;
background-size: cover; background-position: center center;">
<div class="container" style="width:700px;">  
                <?php  
                $query = "SELECT * FROM store ORDER BY cod_barras ASC";  
                $result = mysql_query( $query, $connect);  
                if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;"> 
                                <a href="./imagenes/<?php echo $row["foto"];?>" >
                               <img src="./imagenes/<?php echo $row["foto"];?>" class="img-responsive" style=" margin-right:auto; margin-left:auto; width:100px; height:100px;"/>
                                </a><br />  
                               <h4 class="text-info"><?php echo $row["nombre"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["valor"]; ?></h4>   
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                          </div> 
                           
                     </form>  
                </div>
                <?php  
                     }  
                }  
                ?>     
</body>
</html>
           