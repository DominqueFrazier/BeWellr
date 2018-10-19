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
    
	$queryIfAlreadyTaken = $connection->query("SELECT * from postassessment_results where user_id = $user_id");
    $isAlreadyTaken = mysqli_fetch_assoc($queryIfAlreadyTaken);
	
	if($isAlreadyTaken['user_id'] != NULL){
		header('Location: postSurveyResult.php');
	}
	else {
?>
    
<div class = "suvContainer">Good work on your 4 week wellness program!  It's now time to see how much you've grown!</div>
    
<div class="guest-ages-section">
  <div class="form">
      <p class="message">Select your stage in life.</p>
    <form class="guest-ages" action="postSurvey.php?mode=youngAdult" method = "post">
        <button>Student</button>
      </form>
      <form class="guest-ages" action="postSurvey.php?mode=Adult" method="post">
        <button>Working</button>
      </form>
      <form class="guest-ages" action="postSurvey.php?mode=olderAdult" method="post">
      <button>Retired</button>
    </form>
  </div>
</div>
<?php }
?>