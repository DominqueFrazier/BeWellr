<?php     
 
/*
 * createAccount creates a new entry in the database. It returns true if the entry was created successfully and false otherwise.
 */

//include 'db_config.php';
 
function createAccount($email, $password, $firstname, $lastname, $dob, $weight, $height, $gender, $workstatus, $organization, $occupation, $ethnicity, $maritalstatus, $education)
{
    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE );

    //Check our connection
    if ( $mysqli->connect_error ) 
    {
        return false;
    }	
	    
    // Create salted hash for the password
    $saltedhash = password_hash($password, PASSWORD_DEFAULT);

    //create user 
    $sql = "INSERT INTO user_data ( email, saltedhash, firstname, lastname, dob, weight, height, gender, workstatus, organization, occupation, ethnicity, maritalstatus, education) VALUES ( '{$mysqli->real_escape_string($email)}', '$saltedhash', '{$mysqli->real_escape_string($firstname)}', '{$mysqli->real_escape_string($lastname)}', '{$mysqli->real_escape_string($dob)}', '{$mysqli->real_escape_string($weight)}', '{$mysqli->real_escape_string($height)}','{$mysqli->real_escape_string($gender)}', '{$mysqli->real_escape_string($workstatus)}', '{$mysqli->real_escape_string($organization)}', '{$mysqli->real_escape_string($occupation)}', '{$mysqli->real_escape_string($ethnicity)}', '{$mysqli->real_escape_string($maritalstatus)}', '{$mysqli->real_escape_string($education)}'  )";
    $insert = $mysqli->query($sql);
    
    //Close the connection
    $mysqli->close();

    //Print response from MySQL
    if ( $insert ) 
    {
        return true;
    }
    else
    {
        return false;
    }

    //Close the connection
    $mysqli->close();
}
?>
