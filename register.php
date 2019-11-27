<?php include('server.php') ?>
<?php include('layout.html') ?>
<!DOCTYPE html>
<html>
<head>
  <title>registro</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/246cb5c63c.js" crossorigin="anonymous"></script>
  
</head>
<body style="background-image: url('./imagenes/123.png'); background-repeat: no-repeat;
background-size: cover; background-position: center center;">
  <div class="text-center text-light mb-3" style="margin-top:50px;">
  	<h2>Registrarse</h2>
  </div>
	
  <form class="card card-body text-center col-md-3 m-auto" style="background: rgba(0,0,0,0.8);" method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="w-100 p-3">
  	  <label style="width: 100%; font-weight: 600" class="text-light">Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="w-100 p-3">
  	  <label style="width: 100%; font-weight: 600" class="text-light">Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="w-100 p-3">
  	  <label style="width: 100%; font-weight: 600" class="text-light">Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="w-100 p-3">
  	  <label style="width: 100%; font-weight: 600" class="text-light">Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="w-100 p-3">
  	  <button class="btn btn-success mt-2" type="submit" name="reg_user"><i class="fas fa-user-plus"></i> Register</button>
  	</div>
  	<p class="text-light mt-2">
  		¿Ya sos miembro? <a href="login.php">Iniciar sesión</a>
  	</p>
  </div>
  </div>
  </form>
  
</body>
</html>