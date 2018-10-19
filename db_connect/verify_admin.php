<?php     
 
/*
 * adminVerified returns true if the admin account is verified by the database administrator
 *
 *    *NOTE* administrators must be verified by whomever is in charge of the database. 1 = verified & 0 = not verified.
 * 
 */

//include 'db_config.php';
 
function adminVerified($email){
    
      // connect to database
      $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

      // check connection
      if ($mysqli->connect_error)
      {
          die('Connection error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect-error);
      }

      // retrieve the users hash
      $sql = "SELECT verified FROM admin WHERE email = '$email'";
      $result = $mysqli->query($sql);

      $assoc = $result->fetch_assoc();
      $verify = $assoc['verified'];
      
      //Close the connection
      $mysqli->close();
    
      // verify admin
      if($verify == 1)
	  {
		return true;
	  }
	  else
	  {
		return false;
	  }

}
?>