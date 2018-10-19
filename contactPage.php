<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <?php include 'header.php'?>
  <?php require_once 'swiftmailer/lib/swift_required.php'?>;
</head>

<body>
  <div class="contact">

  <?php
  if (empty($_POST) == false) {
    $require_fields = array('first_name', 'email', 'message');
    foreach($_POST as $key=>$value) {
      if(empty($value) && in_array($key, $require_fields) == true) {
        $errors[] = '*All fields are required!';
        break 1;
      }
    }
  }
  ?>

  <h3 id="contactTitle">Contact the BeWellr Team</h3>

  <?php

	// function that sends out emails
	function send_email($to, $subject, $body) {
		mail($to, $subject, $body, '');
	}

	// Puts an array into a list form.
	function output_errors($errors){
		return'<ul><li>'. implode('</li><li>', $errors) . '</li></ul>';
	}

  ?>

  <?php
  if (isset($_GET['success']) && empty ($_GET['success']))
  {
    echo 'Your message has been sent! Thank you!';
  }
  else
  {
    if(empty($_POST) == false && empty($errors) == true)
    {
      $email = $_POST['email'];
      $subject = $email;
      $text = $_POST['message'];
      $name = $_POST['first_name'];

      // send the user an email with the verification key
      $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
        ->setUsername('bewellrinfo@gmail.com')
        ->setPassword('bewellrinfo123');

      $mailer = Swift_Mailer::newInstance($transport);

      $message = Swift_Message::newInstance('Email Verification')
        // Give the message a subject
        ->setSubject($subject)
        ->setFrom(array($email => $name))
        ->setTo(array('bewellrinfo@gmail.com'))
        ->setBody($text);

      $result = $mailer->send($message);

      header("location: contactPage?success");

      exit();
    }
    ?>

    <div class = errors>
    <?php
    if (empty($errors) == false) {
       echo output_errors($errors);
    }?>
    </div>

  <div class ="form_Contact">
    <form action="" method="post">
      <input type="text" name = "first_name" placeholder="First Name" />
      <input type="text" name = "email" placeholder="E-mail Address"/>
      <textarea name="message" placeholder = "Please share any comments, questions, or feedback with us!"></textarea>
      <input type = "submit" value = "Send"/>
    </form>
  </div>
  <?php } ?>
  </div>
</body>
</html>
