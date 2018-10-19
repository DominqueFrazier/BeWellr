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
				 $update = "UPDATE intervention SET question = '$_POST[$i]' where questionid = $i";
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
        <h2>Change Intervention Questions</h2>
		<form class="survey" action="" method="post">
        <div class="form" id="edit">
          <?php
  $copingArray; //creates an array for holding Coping answer values
  $copingQCount = 0; //Counts the coping questions
  $coping = mysqli_query($connection, "SELECT * from intervention where coping = 1");
  $questionNumber=0;
        ?><h3>Interactive Behavior Questions</h3>
    <?php while ($row = mysqli_fetch_assoc($coping))
  {?>
      
      <input type="text" name = <?php echo $entireQuestionNumber ?> placeholder="<?php echo $questionNumber+1 ?>. <?php echo $row["question"]?>"/>
        

    
    <?php
$questionNumber++;
  $copingQCount++;
  $entireQuestionNumber++;
  }
              ?>
         
        
        <?php
  $foodArray; //creates an array for holding Coping answer values
  $foodQCount = 0; //Counts the coping questions
  $food = mysqli_query($connection, "SELECT * from intervention where food = 1");
  $questionNumber=0;
        ?><h3>Food Selection Questions</h3>
    <?php while ($row = mysqli_fetch_assoc($food))
  {?>
      
      <input type="text" name = <?php echo $entireQuestionNumber ?> placeholder="<?php echo $questionNumber+1 ?>. <?php echo $row["question"]?>"/>
        

    
    <?php
$questionNumber++;
  $foodQCount++;
   $entireQuestionNumber++;
  }
              ?>

         <?php
  $physicalArray; //creates an array for holding Coping answer values
  $physicalQCount = 0; //Counts the coping questions
  $physical = mysqli_query($connection, "SELECT * from intervention where physical = 1");
  $questionNumber=0;
        ?><h3>Physical Activity Questions</h3>
    <?php while ($row = mysqli_fetch_assoc($physical))
  {?>
      
      <input type="text" name = <?php echo $entireQuestionNumber ?> placeholder="<?php echo $questionNumber+1 ?>. <?php echo $row["question"]?>"/>
        

    
    <?php
$questionNumber++;
  $physicalQCount++;
   $entireQuestionNumber++;
  }
              ?>
         <?php
  $personalArray; //creates an array for holding Coping answer values
  $personalQCount = 0; //Counts the coping questions
  $personal = mysqli_query($connection, "SELECT * from intervention where personal = 1");
  $questionNumber=0;
        ?><h3>Personal Growth Questions</h3>
    <?php while ($row = mysqli_fetch_assoc($personal))
  {?>
      
      <input type="text" name = <?php echo $entireQuestionNumber ?> placeholder="<?php echo $questionNumber+1 ?>. <?php echo $row["question"]?>"/>
        

    
    <?php
$questionNumber++;
  $personalQCount++;
   $entireQuestionNumber++;
  }
              ?>
			    <br/>
        <button>Change</button></div>
	</form>

        
    
    
    
    
    </body>
</html>