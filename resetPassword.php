 <?php
	include 'header.php';
	include 'db_connect/db_config.php';
	require_once __DIR__ . '/db_connect/db_config.php';
    require_once __DIR__ . '/db_connect/verify_password.php';
    ini_set('display_errors',1); // for error checking
    error_reporting(E_ALL);      // for error checking

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
	    if(!empty($_POST['password1']) )
		{
			$password = $_POST['password1'];
			$email = $_POST['email'];
			$result = verifyPassword($email, $password);
			$newpassword = $_POST['password2'];
			$confirmnewpassword =$_POST['password3'];
			//Create salted hash for the password
			$saltedhash = password_hash($newpassword, PASSWORD_DEFAULT);
			if($newpassword == $confirmnewpassword)
			{	
				if($result)
				{
					$query2 = mysqli_query($connection, "UPDATE user_data SET saltedhash='$saltedhash' WHERE email = '$email'");
				}
				else
				{
					echo "Incorrect password.";
				}
			}
			else
			{
				echo "New Password does not match";
			}	
		}
?>
        <h1>Reset Password</h1>
	
    <div class="set-password">
        <div class="form">
            <form method="post" action="">
			<p>Please fill in the boxes below</p>
			 <input name="email" type="email" placeholder="Email" required />
			<input name="password1" type="password" placeholder="Old Password" required />
            <input name="password2" type="password" placeholder="New Password" required />
            <input name="password3" type="password" placeholder="Confirm new Password" required/>
           
			<button>Reset</button>
			</form>
        </div>
    </div>
