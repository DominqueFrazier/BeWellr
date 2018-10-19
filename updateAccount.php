<?php
	include 'header.php';
	require_once __DIR__ . '/db_connect/db_config.php';
    require_once __DIR__ . '/db_connect/verify_password.php';
        require_once __DIR__ . '/db_connect/delete_account.php';
    
    ini_set('display_errors',1); // for error checking
    error_reporting(E_ALL);      // for error checking

  //connect to MySQL
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

  if(!$connection)
  {
  	die("Connection error: " .mysqli_connect_error());
  }
  else {
  	echo "";
  }

  //current logged in user
  $logged_in = $_SESSION['email'];

?>
    
<h1>Update Account</h1>
    
<div class="Update Account">
  <div class="form">
    <form class="Update" action="resetPassword.php" method = "post">
        <button>Password reset</button>
      </form>
      <form class="Update" action="updateDb.php" method="post">
        <button>Update user information</button>
      </form>
      <form class="Update" action="deleteAccount.PHP" method="post">
      <button>Delete Account</button>
    </form>
  </div>
</div>
