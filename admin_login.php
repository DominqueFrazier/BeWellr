<?php

include_once 'header.php';
  ini_set('display_errors',1); // for error checking
  error_reporting(E_ALL);      // for error checking
	logged_in_redirect();

require_once __DIR__ . '/db_connect/db_config.php';
  require_once __DIR__ . '/db_connect/verify_admin_password.php';
    require_once __DIR__ . '/db_connect/verify_admin.php';

  if ($_POST && !empty($_POST['email']) && !empty($_POST['password']) )
  {

      $email = $_POST['email'];
      $password = $_POST['password'];

      $result = verifyPassword($email, $password);
	  $result2 = adminVerified($email);
	  
	  // checks if username and password is in admin table.
      if ($result)
      {
		  // checks if that email is a verified administrator.
		  if($result2)
		  {  
			$_SESSION['email'] = $_POST['email'];
			header("Location: admin_welcome.php");
		  }
		  else
		  {
			  echo "Not a verified administrator. Contact the database administrator to be verified.";
		  }
      }
      else
      {
          echo "Invalid Email or Password";
      }
  }
?>

<h1>Login</h1>

<div class="login-page">
  <div class="form" >
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method = "post">
      <input type="text" name = "email" placeholder="Email"/>
      <input type="password" name = "password" placeholder="Password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="admin_register.php">Create an account</a></p>
    </form>
  </div>
</div>