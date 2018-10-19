<DOCTYPE! HTML>

<html>
 <body>
     <?php include 'header.php';
       require_once __DIR__ . '/db_connect/db_config.php';

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
     $query = "SELECT user_id FROM user_data WHERE email = '$logged_in'";

     $result = mysqli_query($connection, $query);

     	if(mysqli_num_rows($result) > 0)
     	{
     			while($row = mysqli_fetch_array($result))
     			{
     				$userid = $row["user_id"];
     			}
     	}
     	else
     	{
     			echo("No results");
     	}

       if(isset($_POST['noteSubmit']))
       {
         $note = addslashes($_POST['note']);
         $email = $logged_in;

        $sql = "INSERT INTO notes (note_id, user_id, email, date, note) VALUES (NULL, '$userid', '$email', now(), '$note')";
        $insert = $connection->query($sql);
       }

       mysqli_close($connection);

     ?>

     <h2 class="surveyTitle">Notepad</h2>

     <script>
     function eraseText() {
       document.getElementById("output").value = "";
      }
     </script>

     <form action="" method="post">
       <div class="paper">
        <div class="paper-content">

            <textarea name="note" id="output" placeholder="What's on your mind?"></textarea>

        </div>
      </div>

    <div class="noteButtons">
      <input type="submit" name="noteSubmit" id="noteSubmit" value="Save Note" class="notepadBTN">
      <input type="button" class="notepadBTN" value="Clear Notepad" onclick="javascript:eraseText();">

    </form>
    </div>
 </body>
</html>
