<?php     
 
/*
 * deleteAccount deletes an account and returns true if the account was successfully deleted, and false otherwise.
 *
 * Parameters: 
 *      email - the email of the user whose account is being deleted
 */

//include 'db_config.php';
 
function deleteAccount($email)
{
    
    // establish database connection
    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

    // test connection
    if ($mysqli->connect_error)
    {
        // connection failed
        return false;
    }
    // connection successful
    // delete database entry
    $sql = "DELETE FROM user_data WHERE email = '$email'";
    $result = $mysqli->query($sql);

    // test if the row was deleted
    if (mysqli_affected_rows($mysqli) > 0) 
    {     
        //row was deleted
        $mysqli->close();
        return true;
    }
    // row was not deleted
    $mysqli->close();
    return false;
}
?>
