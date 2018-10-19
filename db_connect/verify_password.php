<?php     
 
/*
 * verifyPassword returns true if the password input matches the true password, and false otherwise
 *
 * Parameters: 
 *      userid - the identifier of the user whose password is being verified
 *      password - the string being compared against the user's password
 */

//include 'db_config.php';
 
function verifyPassword($email, $password){
    
      // connect to database
      $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

      // check connection
      if ($mysqli->connect_error)
      {
          die('Connection error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect-error);
      }

      // retrieve the users hash
      $sql = "SELECT saltedhash FROM user_data WHERE email = '$email'";
      $result = $mysqli->query($sql);

      $assoc = $result->fetch_assoc();
      $hash = $assoc['saltedhash'];
      
      //Close the connection
      $mysqli->close();
    
      // verify the password is correct
      return password_verify($password, $hash);

}
?>
