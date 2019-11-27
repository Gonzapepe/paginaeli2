

<?php include('layout.html')?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/246cb5c63c.js" crossorigin="anonymous"></script>
<meta charset="utf-8">
  <title>Login</title>
  
</head>
<body class="bg-secondary" style="background-image: url('./imagenes/marvelogin.jpg'); background-repeat: no-repeat;
background-size: cover; background-position: center center;">
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
  <form  method="post" action="login.php" class="mt-4">
  	<?php include('errors.php'); ?>
    <div class="container login-container m-auto " 
      style="background-color:rgba(255,255,255, 0.8);  ">
            
            <div class="row justify-content-center" style="margin-top:150px;">
                <div class="col-md-6 login-form-1 ">
                <div class="mt-4 text-center text-dark font-weight-bold">
            <h3>Bienvenido a Unimarvel</h3>
            </div>
                    
  	<div class="justify-content-center">
  		<div class="form-group ">
                            <input type="text" class="form-control mt-5" placeholder="Tu usuario *" value="" name="username"/>
                        </div>
  	</div>
  	<div class="form-group">
                            <input type="password" class="form-control" placeholder="Tu contraseña *" value="" name="password"/>
                        </div>
  	<div class="form-group text-center">
    <button type="submit" class="btn btn-success"  name="login_user"><i class="fas fa-sign-in-alt text-light "></i> Login</button>
                        </div>
  	<div class="text-center text-dark"><p>
  		¿No sos miembro? <a href="register.php">Regístrate</a>
  	</p>
    </div>
   </div>
  </form>
  
</body>
</html>