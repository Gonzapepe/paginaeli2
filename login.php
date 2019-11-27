<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>

<!-- STYLES -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!-- SCRIPTS -->



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




  <!-- NAV -->

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav">
      <li class="nav-item active ">
        <a href="login.php">
          <button class="btn btn-outline-light mr-2" >
            <ion-icon name="contact"></ion-icon>
          </button>
         </a>
      </li>
    </ul>

    <ul class="navbar-nav">
      <li class="nav-item active ">
        <a href="index.php">
        <button class="btn btn-outline-light">
          <ion-icon name="home"></ion-icon>
        </button>
      </a>
      </li>
    </ul>
</nav>


  <!-- FORMULARIO -->
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
                            <input type="text" class="form-control mt-5" placeholder="Tu usuario *" value="" name="username" required="required" />
                        </div>
  	</div>
  	<div class="form-group">
                            <input type="password" class="form-control" placeholder="Tu contraseña *" value="" name="password" required="required" />
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




  <!-- SCRIPT -->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/246cb5c63c.js" crossorigin="anonymous"></script>

</body>
</html>