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
  $query = "SELECT firstname, lastname FROM user_data WHERE email = '$logged_in'";
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
			<h4><?php echo "Welcome $firstname $lastname to BeWellr";?> </h4>
            <?php
                if (has_taken_preassessment($connection, $user_id) == true) { ?>
                <p>Thank you for taking the Pre-assesment survey! <br><b>You're Doing Great!!</b><br>You can always go back and view your Pre-assesment results by clicking the Pre-assesment button to the right.<br><br>We hope you are enjoying the journey to living a better life. When you are ready, click the Intervention button on the right to jump right into your exciting 4-week intervention. <br><br>When you are finished with your Intervention, you can click the Post-assesment button to take an exit survey that will show you how far you have come.</p>
            <?php    }
            else {      ?>
                <p>Welcome to the BeWell'r 4-week program! Congratulations on taking the first step at living a better and healthier lifestyle. <br> To start, please click on the Pre-assesment Button on the right. This is where you'll take a survey where we'll compare the progress you've made at the end. We hope you enjoy and thanks again for joining BeWell'r! </p>
            <?php }    ?>

        </div>
		<div class="wrap">

            <a href="userSurvey.php" class="button2">Pre-Assessment</a>
            <?php
        if (has_taken_preassessment($connection, $user_id) == true) { ?>
            <a href="intervention.php" class="button3">Intervention</a>
            <a href="userSurveyPost.php" class="button">Post-Assessment</a>
    <?php    }
        else {

        }
        ?>

			</div>
    </div>

<?php mysqli_close($connection); ?>
 </body>
</html>
