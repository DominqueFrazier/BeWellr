<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

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
  ?>
</head>

<body>
  <form class="survey" action="" method="post">

    <?php if ($_GET['mode'] == 'youngAdult') {
  		$title = "Young Adult Pre-Assessment Survey";
  	}

  	else if ($_GET['mode']=='Adult') {
  		$title = "Adult Pre-Assessment Survey";
  	}

  	else if ($_GET['mode']== 'olderAdult') {
  		$title = "Older Adult Pre-Assessment Survey";
  	} ?>

  <div class="container2">
    <h2 id="surveyTitle"><?php echo $title ?></h2>

  <div class="innerContainer">
<?php
// <<<<<<< HEAD
$mode_allowed = array('youngAdult', 'Adult', 'olderAdult');
	if(isset($_GET['mode']) == true && in_array($_GET['mode'], $mode_allowed) == true) {
	$type;
	$social = 0;
	$vocational = 0;
	$emotional = 0;
	$physical = 0;
	$intellectual = 0;
	$spiritual = 0;
	$environmental = 0;
	$socialCount = 0;
	$vocationalCount = 0;
	$emotionalCount = 0;
	$physicalCount = 0;
	$intellectualCount = 0;
	$spiritualCount = 0;
	$environmentalCount = 0;
	$questionNumber = 0;
	$count = 0;

	//print_r($_POST); for testing, prints the post array
	if ($_GET['mode'] == 'youngAdult') {
		$type = "YA";
	}

	else if ($_GET['mode']=='Adult') {
		$type = "A";
	}

	else if ($_GET['mode']== 'olderAdult') {
		$type = "OA";
	}
	$query = mysqli_query($connection, "SELECT question, social, vocational, emotional, physical, intellectual, spiritual, environmental from preassessment where $type = 1");
	$questionArray;
	if(isset($_POST) && !empty($_POST)) {
		header('Location: surveyResult.php');
	}
	while ($row = mysqli_fetch_assoc($query)) {
	$questionArray[$questionNumber] = $row;
	?>
				<h3 class="border"><?php echo $row["question"];?></h3>
				<div class="qPadding" id="q1Bullets">
        <label class="border2"><input type="radio" name="<?php echo $questionNumber ?>" value=0>Never</label>
        <label class="border2"><input type="radio" name="<?php echo $questionNumber ?>" value=1>Once in a while</label>
        <label class="border2"><input type="radio" name="<?php echo $questionNumber ?>" value=2>Sometimes</label>
        <label class="border2"><input type="radio" name="<?php echo $questionNumber ?>" value=3>Often</label>
        <label class="border2"><input type="radio" name="<?php echo $questionNumber ?>" value=4>Very Often</label>
        <label class="border2"><input type="radio" name="<?php echo $questionNumber ?>" value=5>Always</label>
      </div>


<?php

	$questionNumber++;
	}

	if ( ! empty( $_POST ) )
	{
		while($count < $questionNumber){
			if ($questionArray[$count]['social'] == 1){
				$social = $social + $_POST[$count];
				$socialCount++;
			}
			else if ($questionArray[$count]['vocational'] == 1){
				$vocational = $vocational + $_POST[$count];
				$vocationalCount++;
			}
			else if ($questionArray[$count]['emotional'] == 1){
				$emotional = $emotional + $_POST[$count];
				$emotionalCount++;
			}
			else if ($questionArray[$count]['physical'] == 1){
				$physical = $physical + $_POST[$count];
				$physical++;
			}
			else if ($questionArray[$count]['intellectual'] == 1){
				$intellectual = $intellectual + $_POST[$count];
				$intellectualCount++;
			}
			else if ($questionArray[$count]['spiritual'] == 1){
				$spiritual = $spiritual + $_POST[$count];
				$spiritualCount++;
			}
			else if ($questionArray[$count]['environmental'] == 1){
				$environmental = $environmental + $_POST[$count];
				$environmentalCount++;
			}
			$count++;
		}
		echo $social;
		echo $vocational;
		$social = $social/$socialCount;
		$vocational = $vocational/$vocationalCount;
		$physical = $physicalCount++;
		$intellectual = $intellectual/$intellectualCount;
		$spiritual = $spiritual/$spiritualCount;
		$environmental = $environmental/$environmentalCount;
		echo $socialCount;
		echo $vocationalCount;
	$post_data = array ($social, $vocational, $emotional, $physical, $intellectual, $spiritual, $environmental);
	$sql = "INSERT INTO preassessment_results (user_id, socialScore, vocationalScore, emotionalScore, physicalScore, intellectualScore, spiritualScore, environmentalScore) VALUES ($user_id, $social, $vocational, $emotional, $physical, $intellectual, $spiritual, $environmental)";
	$insert = $connection->query($sql);
		    if ( $insert ) {
						session_start();
						$_SESSION['data'] = $post_data;
		    }
		    else{
		        die("Error: {$connection->errno} : {$connection->error}");
		    }
	}


//print_r($questionArray); //this prints the array of arrays for the questions.  it's for testing.
?>
    <br>
    <br>
    <button id="surveyButton">Submit</button>
		</div>
    </form>
<?php } ?>

</body>
</html>
