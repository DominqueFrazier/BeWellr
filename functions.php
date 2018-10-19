<?php
session_start();
function logged_in() {
		return (isset($_SESSION['email'])) ? true : false;
	}
	
	function logged_in_redirect() {
		if (logged_in() == true) {
			header('Location: welcome.php');
			exit();
		}
	}
	
	// Redirects users to index page if they are not logged in.
	function protect_page() {
		if (logged_in() == false) {
			header('Location: Index.php');
			exit();
		}
	}
	
	function get_userid($connection){
		$logged_in = $_SESSION['email'];
  //SQL query that pulls user information from the user_data table
  $query = "SELECT user_id FROM user_data WHERE email = '$logged_in'";
  $result = mysqli_query($connection, $query);
  $user_idArray = mysqli_fetch_array($result);
		return $user_idArray['user_id'];
	}
	
	function has_taken_preassessment($connection, $user_id) {
		$result = mysqli_fetch_array(mysqli_query($connection, "select count(user_id) from preassessment_results where user_id = $user_id"));
		if ($result[0] > 0) {
			return true;
		}
		else {
			return false;
		}
	}
?>