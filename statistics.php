<?php
include 'header.php';
protect_page();
require_once __DIR__ . '/db_connect/db_config.php';

// connect to database
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

// check connection
if ( $connection->connect_error ) {
	die( 'connect Error: ' . $connection->connect_errno . ': ' . $connection->connect-error );
}

if (!empty($_POST))
{

	$where = array();

	// check if gender is empty and add it to array if not empty
	if (isset($_POST['gender']) && $_POST['gender'] !== '') {
		array_push($where, "gender = '{$connection->real_escape_string($_POST['gender'])}'");
	}

	// check if workstatus is empty and add it to array if not empty
	if (isset($_POST['workstatus']) && $_POST['workstatus'] !== '') {
		array_push($where, "workstatus = '{$connection->real_escape_string($_POST['workstatus'])}'");
	}

	// check if organization is empty and add it to array if not empty
	if (isset($_POST['organization']) && $_POST['organization'] !== '') {
		array_push($where, "organization = '{$connection->real_escape_string($_POST['organization'])}'");
	}	

	// check if occupation is empty and add it to array if not empty
	if (isset($_POST['occupation']) && $_POST['occupation'] !== '') {
		array_push($where, "occupation = '{$connection->real_escape_string($_POST['occupation'])}'");
	}	

	// check if ethnicity is empty and add it to array if not empty
	if (isset($_POST['ethnicity']) && $_POST['ethnicity'] !== '') {
		array_push($where, "ethnicity = '{$connection->real_escape_string($_POST['ethnicity'])}'");
	}	

	// check if marital status is empty and add it to array if not empty
	if (isset($_POST['maritalstatus']) && $_POST['maritalstatus'] !== '') {
		array_push($where, "maritalstatus = '{$connection->real_escape_string($_POST['maritalstatus'])}'");
	}	

	// check if education is empty and add it to array if not empty
	if (isset($_POST['education']) && $_POST['education'] !== '') {
		array_push($where, "education = '{$connection->real_escape_string($_POST['education'])}'");
	}

	$query = implode(' AND ', $where);

	// queries to get averages
	$IBScore = mysqli_fetch_array(mysqli_query($connection, "select avg(IBScore) FROM intervention_results LEFT JOIN user_data ON intervention_results.user_id = user_data.user_id where $query"));

	$FSScore = mysqli_fetch_array(mysqli_query($connection, "select avg(FSScore) FROM intervention_results LEFT JOIN user_data ON intervention_results.user_id = user_data.user_id where $query"));

	$PAScore = mysqli_fetch_array(mysqli_query($connection, "select avg(PAScore) FROM intervention_results LEFT JOIN user_data ON intervention_results.user_id = user_data.user_id where $query"));

	$PGScore = mysqli_fetch_array(mysqli_query($connection, "select avg(PGScore) FROM intervention_results LEFT JOIN user_data ON intervention_results.user_id = user_data.user_id where $query"));	

	$i = 1;

	$datax = array($IBScore[0], $FSScore[0], $PAScore[0], $PGScore[0]);

	if (!$IBScore)
	{
		printf("Error: %s \n", mysqli_error($connection));	// print error

	}
}	

?>

<DOCTYPE! html>

<html>
	<h1> Statistics </h1>
	<head>
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/black-tie/jquery-ui.css">
	  	<link rel="stylesheet" href="/resources/demos/style.css">
	  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  	<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	</head>
	<body>
	<div class="form">
	    <form method="post">
	        <br> Gender <br>
	        <select name="gender" type="gender" class="occupation">
	            <option selected disabled value="Select">Select</option>
	            <option value="Male">Male</option>
	            <option value="Female">Female</option>
	        </select>
				
				
	        <br> Work Status <br>
	        <select name="workstatus" type="workstatus" class="occupation">
	            <option selected disabled value="Select">Select</option>
	            <option value="Unemployed">Unemployed</option>
	            <option value="Full Time">Full Time</option>
	            <option value="Part Time">Part Time</option>    
	        </select>
	            
				
	        <br> My Organization <br>
	        <select name="organization" type="organization" class="occupation">
	            <option selected disabled value="Select">Select</option>
	            <option value="East Carolina University">East Carolina University</option>
	            <option value="ECU School of Medicine">ECU School of Medicine</option>
	            <option value="Western Kentucky University">Western Kentucky University</option>
	            <option value="State of Maine Employees">State of Maine Employees</option>
	            <option value="US Marine Corp">US Marine Corp</option>
	        </select>
	            
	        <br> Occupation <br> 
	        <select name="occupation" type="occupation" class="occupation">
	            <option selected disabled value="Select">Select</option>
	            <option value="Attendant">Attendant</option>
	            <option value="Baker">Baker</option>
	            <option value="Bank Teller">Bank Teller</option>
	            <option value="Barber">Barber</option>
	            <option value="Bartender">Bartender</option>
	            <option value="Bookkeeper">Bookkeeper</option>
	            <option value="Brake Person">Brake Person</option>
	            <option value="Bus Driver">Bus Driver</option>
	            <option value="Checker">Checker</option>
	            <option value="Chef">Chef</option>
	            <option value="Chief Executive">Chief Executive</option>
	            <option value="Clerk">Clerk</option>
	            <option value="Construction Helper">Construction Helper</option>
	            <option value="Construction Helper">Construction Helper</option>
	            <option value="Cook">Cook</option>
	            <option value="Cutler">Cutler</option>
	            <option value="Dentist">Dentist</option>
	            <option value="Doctor">Doctor</option>
	            <option value="Drafts Person">Drafts Person</option>
	            <option value="Drill Press Operator">Drill Press Operator</option>
	            <option value="Electrician">Electrician</option>
	            <option value="Firefighter">Firefighter</option>
	            <option value="Garage Guard">Garage Guard</option>
	            <option value="General Laborer">General Laborer</option>
	            <option value="Homemaker">Homemaker</option>
	            <option value="Hospital Aide">Hospital Aide</option>
	            <option value="Janitor">Janitor</option>
	            <option value="Large Business Manager">Large Business Manager</option>
	            <option value="Large Business Owner">Large Business Owner</option>
	            <option value="Law Enforcement">Law Enforcement</option>
	            <option value="Lawyer">Lawyer</option>
	            <option value="Licensed Certified Practitioner">Licensed Certified Practitioner</option>
	            <option value="Machine Operator">Machine Operator</option>
	            <option value="Machinist">Machinist</option>
	            <option value="Mechanic">Mechanic</option>
	            <option value="Medium Business Manager">Medium Business Manager</option>
	            <option value="Medium Business Owner">Medium Business Owner</option>
	            <option value="Nurse">Nurse</option>
	            <option value="Optician">Optician</option>
	            <option value="Other Manager">Other Manager</option>
	            <option value="Other Manual Laborer">Other Manual Laborer</option>
	            <option value="Other Professional">Other Professional</option>
	            <option value="Other Skilled Laborer">Other Skilled Laborer</option>
	            <option value="Painter">Painter</option>
	            <option value="Paper Hanger">Paper Hanger</option>
	            <option value="Pharmacist">Pharmacist</option>
	            <option value="Plumber">Plumber</option>
	            <option value="Porter">Porter</option>
	            <option value="Professor">Professor</option>
	            <option value="Repair Person">Repair Person</option>
	            <option value="Reporter">Reporter</option>
	            <option value="Retired">Retired</option>
	            <option value="Salesperson">Salesperson</option>
	            <option value="Secretary">Secretary</option>
	            <option value="Small Business Owner">Small Business Owner</option>
	            <option value="Social Worker">Social Worker</option>
	            <option value="Spot Welder">Spot Welder</option>
	            <option value="Student">Student</option>
	            <option value="Tailor">Tailor</option>
	            <option value="Teacher">Teacher</option>
	            <option value="Technician">Technician</option>
	            <option value="Timekeeper">Timekeeper</option>
	            <option value="Unable to work/Disabled">Unable to work/Disabled</option>
	            <option value="Unemployed">Unemployed</option>
	            <option value="Waiter">Waiter</option>
	            <option value="Welder">Welder</option>
	        </select>
	            
	        <br> Ethnic Background <br>
	        <select name="ethnicity" type="ethnicity" class="occupation">
	            <option selected disabled value="Select">Select</option>
	            <option value="White">White</option>
	            <option value="Native American">Native American</option>
	            <option value="Asian">Asian</option>
	            <option value="Hispanic">Hispanic</option>
	            <option value="African American-Black">African American-Black</option>
	            <option value="Multi or Biracial">Multi or Biracial</option>
	        </select>
	            
	        <br> Marital Status <br>
	        <select name="maritalstatus" type="maritalstatus" class="occupation">
	            <option selected disabled value="Select">Select</option>
	            <option value="Never Married">Never Married</option>
	            <option value="Married">Married</option>
	            <option value="Divorced">Divorced</option>
	            <option value="Live with significant other">Live with significant other</option>
	            <option value="widowed or widower">widowed or widower</option>
	            <option value="Separated">Separated</option>
	            <option value="Living with children at home">Living with children at home</option>    
	        </select>
	            
	        <br> Education Level <br>
	        <select name="education" type="education" class="occupation">
	            <option selected disabled value="Select">Select</option>
	            <option value="Some Highschool">Some Highschool</option>
	            <option value="Highschool Graduate">Highschool Graduate</option>
	            <option value="Some college">Some college</option>
	            <option value="College Graduate">College Graduate</option>
	            <option value="Masters">Masters</option>
	            <option value="Doctorate">Doctorate</option>
	        </select>
			</br>
			<button>Show Results</button>
		</form>
	</div>

	<?php
		if (!empty($_POST))
		{
	?>
	<div class = "chart">
		<canvas id = "myChart" ></canvas>
		<script>var obj = <?php echo json_encode($datax);?>;</script>
		<script src = "statchart.js"></script>
	</div>

	</br>
	<?php } ?>
	</body>
</html>