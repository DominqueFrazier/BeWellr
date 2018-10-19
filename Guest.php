<?php
	include 'header.php';
	logged_in_redirect();
	
?>
    
<h1>Guest Selection</h1>
    
<div class="guest-ages-section">
  <div class="form">
      <p class="message">Select your stage in life.</p>
    <form class="guest-ages" action="survey.php?mode=youngAdult" method = "post">
        <button>Student</button>
      </form>
      <form class="guest-ages" action="survey.php?mode=Adult" method="post">
        <button>Working</button>
      </form>
      <form class="guest-ages" action="survey.php?mode=olderAdult" method="post">
      <button>Retired</button>
    </form>
  </div>
</div>