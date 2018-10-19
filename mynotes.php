<DOCTYPE! HTML>

<html>
 <body>
   <?php
    include 'header.php';
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
    $query = "SELECT date, note FROM notes WHERE email = '$logged_in'";

    $result = mysqli_query($connection, $query);

      if(mysqli_num_rows($result) > 0)
      {
        echo '<div class="middleContainer">';
        echo '<table cellpadding="0" cellspacing="0" class="db-table">';
        echo '<tr><th>Date</th><th>Note</th></tr>';

          while($row = mysqli_fetch_array($result)) {
        			echo '<tr>';
        			foreach($row as $key=>$value) {
        				echo '<td>',$value,'</td>';
        			}
        			echo '</tr>';
        		}
  		      echo '</table><br />';
            echo '</div>';
      }
      else
      {
          echo("No results");
      }

        mysqli_close($connection);

    ?>
 </body>
</html>
