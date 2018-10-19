<?php
	include 'header.php';
	include 'db_connect/db_config.php';
	
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if (logged_in()) {  
      $user_id = get_userid($connection);
    }
    else {
	    $user_id = 0;
    }	
    
	$queryIfAlreadyTaken = $connection->query("SELECT * from preassessment_results where user_id = $user_id");
    $isAlreadyTaken = mysqli_fetch_assoc($queryIfAlreadyTaken);
	
	if($isAlreadyTaken['user_id'] != NULL){
		header('Location: surveyResult.php');
	}
	else {
?>
    
<div class = "suvContainer">You are about to embark on a journey to a healthier life. But before you do so, we need you to take a pre-assessment survey. This will allow us to collect data needed and also see the progress you make over the next 4-weeks compared to how you start.</div>
    
<div class="guest-ages-section">
  <div class="form">
      <p class="message">Select your stage in life.</p>
    <form class="guest-ages" action="survey.php?mode=youngAdult" method = "post">
        <button>Student</button>
      </form>
      <form class="guest-ages" action="survey.php?mode=Adult" method="post">
        <button>Working</button>
      </form>
      <form class="guest-ages" action="survey.php?mode=olderAdult" method="post">
      <button>Retired</button>
    </form>
  </div>
</div>
<?php }
?>