<?php 
include 'header.php';   
require_once __DIR__ . '/db_connect/db_config.php';

$_SESSION['message'] = '';
    
if (@($_POST['submittedVerificationKey'])) 
{
    session_start();
    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE );
	    
    //Check our connection
    if ( $mysqli->connect_error ) 
    {
        die( 'connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect-error );
    }
    $email = $_SESSION['email'];
	    
    // set correctKey to the corresponding key value in unverified_users for the corresponding email value
    $query = "SELECT verificationKey FROM unverified_users WHERE email = '$email'";
    $result = mysqli_query($mysqli, $query);

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
  		{
  		    $correctVerificationKey = $row["verificationKey"];
  		}
    }
    else
    {
        echo("No results");
    }
	    
    // set submittedKey to the entered value
    $submittedVerificationKey = $_POST['submittedVerificationKey'];
	    
    //Check for matching password
    if ($correctVerificationKey == $submittedVerificationKey) {
        // transfer info from unverified_users to user_data
        // retrieve the information from user_data
        $query = "SELECT saltedhash, firstname, lastname, dob, weight, height, gender, workstatus, organization, occupation, ethnicity, maritalstatus, education FROM unverified_users WHERE email = '$email'";
        $result = mysqli_query($mysqli, $query);
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
                $saltedhash = $row["saltedhash"];
                $firstname = $row["firstname"];
                $lastname = $row["lastname"];
                $dob = $row["dob"];
                $weight = $row["weight"];
                $height = $row["height"];
                $gender = $row["gender"];
                $workstatus = $row["workstatus"];
                $organization = $row["organization"];
                $occupation = $row["occupation"];
                $ethnicity = $row["ethnicity"];
                $maritalstatus = $row["maritalstatus"];
                $education = $row["education"];
            }
        }
        else
        {
            echo("No results");
        }

        // create a new entry for the verified user into user_data
        $sql = "INSERT INTO user_data ( email, saltedhash, firstname, lastname, dob, weight, height, gender, workstatus, organization, occupation, ethnicity, maritalstatus, education) VALUES ( '$email', '$saltedhash', '$firstname', '$lastname', '$dob', '$weight', '$height','$gender', '$workstatus', '$organization', '$occupation', '$ethnicity', '$maritalstatus', '$education'  )";
        $insert = $mysqli->query($sql);

        if ( $insert ) 
        {
            // remove the user's entry in unverified_users
            $query = "DELETE FROM unverified_users WHERE email = '$email'";
            $result = mysqli_query($mysqli, $query);
            $_SESSION['message'] = "The account has been verified.";
            $username = $_POST['email'];
            $_SESSION['username'] = $username;
       		logged_in_redirect();    
	        header("location:login.php"); //redirect to home		        
	    }
	    else
	    {
	        die("Error: {$mysqli->errno} : {$mysqli->error}");
	    }
    }
    else 
    {
        $_SESSION['message'] = "The entered key is incorrect";
    }

    //Close the connection
    $mysqli->close();
}
?>

<!--This is an error message.-->
<div class="alert alert-error">
 <?= $_SESSION['message'] ?>
</div>

    <h1>Verify Email</h1>
	
    <div class="login-page">
        <div class="form">
            <form method="post" action="">
			<p>Please enter your verification key that was emailed to you.</p>
            <input name ="submittedVerificationKey"  type="text" placeholder="Your verification key"/>
            <button>Submit</button>
			</form>
        </div>
    </div>

