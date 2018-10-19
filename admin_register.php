<?php 
// *NOTE* administrators must be verified by whomever is in charge of the database. 1 = verified & 0 = not verified.

include 'header.php';
logged_in_redirect();    

    // the file is required, so if it isn't there, this file will not be executed
    require_once __DIR__ . '/db_connect/db_config.php';

    $_SESSION['message'] = '';

    //connect to MySQL
    if ( ! empty( $_POST ) ) {
	    session_start();
	    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE );

	    //Check our connection
	    if ( $mysqli->connect_error ) {
	        die( 'connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect-error );
	    }	
	
	    $password = $_POST['password'];
	    $password2 = $_POST['password2'];
	    
	    // Create salted hash for the password
	    $saltedhash = password_hash($password, PASSWORD_DEFAULT);
	    
	    //Check for matching password
	    if ($password == $password2) {
	    
	        
		    //create user in admin
		    $sql = "INSERT INTO admin ( email, saltedhash, firstname, lastname) VALUES ( '{$mysqli->real_escape_string($_POST['email'])}', '$saltedhash', '{$mysqli->real_escape_string($_POST['firstname'])}', '{$mysqli->real_escape_string($_POST['lastname'])}')";
		    $insert = $mysqli->query($sql);

            //redirect to admin_login.php
		    header("location:admin_login.php"); //redirect to email verification

		    //Print response from MySQL
		    if ( $insert ) {
		        echo "Success!  Row ID: {$mysqli->insert_id}";
		    }
		    else{
		        die("Error: {$mysqli->errno} : {$mysqli->error}");
		    }
	    }
	    else {
	        $_SESSION['message'] = "The two passwords do not match";
	    }

        //Close the connection
        $mysqli->close();
    }
?>

<!--This is an error message.-->
<div class="alert alert-error">
 <?= $_SESSION['message'] ?>
</div>

        <h1>Register</h1>
	
    <div class="login-page">
        <div class="form">
            <form method="post" action="">
			<p>Please fill in the boxes below</p>
            <input name ="firstname"  type="text" placeholder="First Name"/>
            <input name ="lastname"  type="text" placeholder="Last Name"/>
            <input name="email" type="email" placeholder="Email" required />
            <input name="password" type="password" placeholder="Password" required />
            <input name="password2" type="password" placeholder="Confirm Password" required/>
			<button>Register</button>
			</form>
        </div>
    </div>