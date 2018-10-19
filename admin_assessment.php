<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <?php
   include 'header.php';
   include 'db_connect/db_config.php';
   $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
//   $user_id = get_userid($connection);
	// print_r($_POST); //Used For Testing $_POST Array
	 $entireQuestionNumber = 1;
	  if(!empty($_POST))
	  {
		 for($i = 1; $i <= count($_POST); $i++)
		 {
			 if ($_POST[$i] != null)
			 {
				 $update = "UPDATE preassessment SET question = '$_POST[$i]' where questionid = $i";
				 if ($connection->query($update) === TRUE) {
					echo "Record updated successfully";
					}
 					else {
					echo "Error updating record: " . $connection->error;
					}
			 }
		 }
			 
	  }
  ?>
  
  </head>
    <body>
        <h2>Change Assessment Questions</h2>
		<form class="survey" action="" method="post">
        <div class="form" id="edit">
          <?php
  $question = mysqli_query($connection, "SELECT * from preassessment");
  $questionNumber=0;
        ?><h3>Interactive Behavior Questions</h3>
    <?php while ($row = mysqli_fetch_assoc($question))
  {?>
      
      <input type="text" name = <?php echo $entireQuestionNumber ?> placeholder="<?php echo $questionNumber+1 ?>. <?php echo $row["question"]?>"/>
        

    
    <?php
$questionNumber++;
  $entireQuestionNumber++;
  }
     ?>
	 
	<button>Change</button></div>
	</form>

        
    
    
    
    
    </body>
</html>
         