<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysql_connect('localhost', 'root', '');

mysql_set_charset('UTF8', $db);
mysql_select_db("registro", $db);

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysql_real_escape_string($_POST['username'], $db);
  $email = mysql_real_escape_string($_POST['email'], $db);
  $password_1 = mysql_real_escape_string($_POST['password_1'], $db);
  $password_2 = mysql_real_escape_string($_POST['password_2'], $db);

  // form validation: asegurarse que el formulario es correctamente rellenado...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "El nombre es requerido."); }
  if (empty($email)) { array_push($errors, "El Email es requerido"); }
  if (empty($password_1)) { array_push($errors, "La contraseña es requerida. "); }
  if ($password_1 != $password_2) {
	array_push($errors, "La contraseña no es igual.");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysql_query($db, $user_check_query);
  $user = mysql_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password_1;//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysql_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
if (isset($_POST['login_user'])) {
  $username = mysql_real_escape_string( $_POST['username'], $db );
  $password = mysql_real_escape_string( $_POST['password'], $db );

  if (empty($username)) {
    array_push($errors, "Username es requerido");
  }
  if (empty($password)) {
    array_push($errors, "Password es requerido");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysql_query($query, $db);
  
    if ($results == 0) {
      
      array_push($errors, "Nombre de usuario o contraseña equivocada");
    }else {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }
  }
}

?>
