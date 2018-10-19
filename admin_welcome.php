<DOCTYPE! HTML>

<html>
 <body>
 <?php
	include 'header.php';
  include 'db_connect/db_config.php';
  //connect to MySQL
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
  //current logged in user
  $user_id = get_userid($connection);
     $logged_in = $_SESSION['email'];
  //SQL query that pulls user information from the user_data table
  $query = "SELECT firstname, lastname FROM admin WHERE email = '$logged_in'";
  $result = mysqli_query($connection, $query);
  	if(mysqli_num_rows($result) > 0)
  	{
  			while($row = mysqli_fetch_array($result))
  			{
  				$firstname = $row["firstname"];
  				$lastname = $row["lastname"];
            }
  	}
  	else
  	{
  			echo("No results");
  	}

	protect_page();

?>
	<h2>Welcome!</h2>
	<div class="container">
		<div class="bioBox">
			<h4><?php echo "Welcome $firstname $lastname to the BeWellr Administrator Interface";?> </h4>
			<p><?php echo "Select the set of survey questions you wish to edit on the right side of the screen."?></p>
        </div>

		<div class="wrap">

            <a href="admin_assessment.php" class="button2">Pre-Assessment</a>
            
            <a href="admin_intervention.php" class="button3">Intervention</a>

		</div>
    </div>

<?php mysqli_close($connection); ?>
 </body>
</html>