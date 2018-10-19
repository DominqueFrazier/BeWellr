<DOCTYPE! HTML>

<html>
 <body>
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

  //SQL query that pulls user information from the user_data table
  $query = "SELECT email, firstname, lastname, dob, weight, height, gender FROM user_data WHERE email = '$logged_in'";

  $result = mysqli_query($connection, $query);

  	if(mysqli_num_rows($result) > 0)
  	{
  			while($row = mysqli_fetch_array($result))
  			{
  				$email = $row["email"];
  			}
  	}
  	else
  	{
  			echo("No results");
  	}

      mysqli_close($connection);

    if (!empty($_POST['password']) )
    {
        $password = $_POST['password'];
        $result = verifyPassword($email, $password);

        if ($result)
        {
            deleteAccount($email);
            header("Location: logout.php");
        }
        else
        {
            echo "Incorrect password.";
        }
    }


  ?>
 </body>
</html>

 <div class="deleteContainer">
      <h3 class="accountInfo"><u>Delete Account</u></h3>
      <p id="deleteParagraph">This action is permanent; think twice before proceeding!</p>
      <form class="login-form" method = "post">
        <input type="password" name = "password" placeholder="Password"/>
      <button>Delete Account</button>
      </div>
      </div></div>