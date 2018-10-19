<?php include 'db_config.php';

//connect to MySQL
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

if(!$connection)
{
	die("Connection error: " .mysqli_connect_error());
}
else {
	echo "";
}

//generates random number between the range indicated
$quoteID = rand(1,5);

//SQL query that fetches the quote text and quote author when the quote id matches
//the random number generated
$query = "SELECT quoteText, quoteAuthor FROM quote_table WHERE quoteID = $quoteID";

$result = mysqli_query($connection, $query);

	if(mysqli_num_rows($result) > 0)
	{
			while($row = mysqli_fetch_array($result))
			{
				$quoteText = $row["quoteText"];
				$quoteAuthor = $row["quoteAuthor"];
			}
	}
	else
	{
			echo("No results");
	}

    mysqli_close($connection);
?>
