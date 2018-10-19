<?php

include 'header.php';
include 'db_connect/db_config.php';
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
$user_id;
if (logged_in()) {  
  $user_id = get_userid($connection);
}
else {
	$user_id = 0;
}
$result = mysqli_fetch_array(mysqli_query($connection, "select count(user_id) from postassessment_results where user_id = $user_id"));
$data = array();
$data1 = array();
if ($result[0] > 0 && logged_in()){
	 $results = mysqli_fetch_array(mysqli_query($connection, "select socialScore, vocationalScore, emotionalScore, physicalScore, intellectualScore, spiritualScore, environmentalScore from postassessment_results where user_id = $user_id"));
		for($i = 0; $i < sizeof($results)/2; $i++) {
			$data[$i] = $results[$i];
		}
	}
else if (!logged_in() && isset($_SESSION['data'])) {
	$data = $_SESSION['data'];
}
	 $results = mysqli_fetch_array(mysqli_query($connection, "select socialScore, vocationalScore, emotionalScore, physicalScore, intellectualScore, spiritualScore, environmentalScore from preassessment_results where user_id = $user_id"));

for($i = 0; $i < sizeof($results)/2; $i++) {
			$data1[$i] = $results[$i];
		}

?>

<h1>Postassessment Results</h1>
<div class = "chart">
<canvas id = "barChart"></canvas>
<script>var obj = <?php echo json_encode($data);?>;</script>
<script>var obj1 = <?php echo json_encode($data1);?>;</script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src = "postChart.js"></script>
</div>
 
<?php 
        if (logged_in() == true) { ?>
            <div class = "suvContainer"><b>Thank you for taking this survey!</b> We hope you enjoyed your time with us and are weller for your efforts!</div>
    <?php    }
        else if (logged_in() == false) { ?>
            <div class = "suvContainer"><b>Thank you for taking this survey!</b> If you are willing to give yourself a chance to live a better life, <a href="register.php">click here to register with BeWell`r!</a></div>
    <?php    }
        ?>
