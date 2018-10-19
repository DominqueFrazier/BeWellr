<?php
include 'header.php';
	include 'db_connect/db_config.php';
	require_once __DIR__ . '/db_connect/db_config.php';
    //ini_set('display_errors',1); // for error checking
   // error_reporting(E_ALL);      // for error checking

	//connect to MySQL
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

	if(!$connection)
	{
		die("Connection error: " .mysqli_connect_error());
	}
	else 
	{
		echo "";
	}
	
	if(!empty($_POST['email']) )
	{
		$email = $_POST['email'];
		$first = $_POST['newFirst'];
		$last = $_POST['newLast'];
		$height = $_POST['newWeight'];
		$weight = $_POST['newHeight'];
	
		if($first != null)
		{
			$query2 = mysqli_query($connection, "UPDATE user_data SET firstname='$first' WHERE email = '$email'");
		}
		if($last != null)
		{
			$query2 = mysqli_query($connection, "UPDATE user_data SET lastname='$last' WHERE email = '$email'");
		}
		if($weight != null)
		{
			$query2 = mysqli_query($connection, "UPDATE user_data SET weight='$weight' WHERE email = '$email'");
		}
		if($height != null)
		{
			$query2 = mysqli_query($connection, "UPDATE user_data SET height='$height' WHERE email = '$email'");
		}
		header('Location: account.php');
	}
	
?>
	<h1>Account Update</h1>
    <div class="Update-page">
        <div class="form">
            <form method="post" action="">
			<p>Enter email for confirmation</p>
			<input name="email" type="email" placeholder="Email" required />
			<p>Update only wanted information else leave blank</p>
			<input name="newFirst" type="text" placeholder="Update First name" />
			<input name="newLast" type="text" placeholder="Update Last name" />
			<input name="newWeight" type="text" placeholder="Update Weight" />
			<input name="newHeight" type="text" placeholder="Update Height in inches" />
			<button>Update</button>
			</form>
        </div>
    </div>
