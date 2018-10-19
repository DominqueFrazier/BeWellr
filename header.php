 <head>
  <title>BeWell'r</title>
  <link rel="stylesheet" href=style.css>
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Farsan" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Sansita+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Sahitya" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Amethysta" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
 </head>

<div class = "navbar">
 <ul>
	<li><a href="Index.php">Home</a></li>
	<li class="dropdown">
    <a href="welcome.php" class="dropbtn">Account</a>
    <div class="dropdown-content">
      <?php include 'functions.php';
        if (logged_in() == true) { ?>
            <a href="logout.php">Log Out</a>
            <a href="account.php">My Account</a>
    <?php    }
        else if (logged_in() == false) { ?>
            <a href="login.php">Log In</a>
            <a href="register.php">Sign Up</a>
    <?php    }
        ?>
        <a href="credits.php">Credits</a>
    </div>
  </li>
	<li><a href="contactPage.php">Contact</a></li>
  <li><a href="introduction.php">Introduction</a></li>
  <li><a href="abouttheauthor.php">About</a></li>
  <li><a href="preface.php">Preface</a></li>
  <?php
  if (logged_in() == true)
  { ?>
    <li><a href="notepad.php">Notepad</a></li>
    <li><a href="mynotes.php">My Notes</a></li>
    <li><a href="statistics.php">Statistics</a></li>
  <?php } ?>
</ul>
</div>
