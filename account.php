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
  				$firstname = $row["firstname"];
  				$lastname = $row["lastname"];
  				$dob = $row["dob"];
  				$weight = $row["weight"];
  				$height = $row["height"];
  				$gender = $row["gender"];
  			}
  	}
  	else
  	{
  			echo("No results");
  	}

  ?>
  <div class="middleContainer">
    <h3 class="accountInfo"><u>Account Information</u></h3>
    <div class="personalInfo">
      <p>Email Address: <?php echo $email; ?></p>
      <p>First Name: <?php echo $firstname; ?></p>
      <p>Last Name: <?php echo $lastname; ?></p>
      <p>Date of Birth: <?php echo $dob; ?></p>
      <p>Weight: <?php echo $weight; ?></p>
      <p>Height: <?php echo $height; ?></p>
      <p>Gender: <?php echo $gender; ?></p>
    </div>
	 <div class="updateAccount">
      <h3 class="accountInfo"><u>Update Account</u></h3>
	<form class="guest-ages" action="updateAccount.php" method="post">
      <button>Update Account</button>
	   </form>
      </div>
   
  
 </body>
</html>
