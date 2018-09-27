<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "tran.huaes@gmail.com";
    $email_subject = "FROM WEBSITE CODE#021557** ";
 
    function died($error) {
?> 
<!DOCTYPE html>
<html lang="en">
<!-- START: Head -->	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Elson S. Tran &mdash; User Experience Designer</title>
		<meta name="description" content="Elson's UX Design Portfolio">
		<meta name="keywords" content="UX design, ux, ui, ia, user experience, user interface, general assembly">

		<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet"> 
		<link rel="stylesheet" href="css/styles-merged.css">
		<link rel="stylesheet" href="css/style.min.css">
		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js">
		
		<!--[if lt IE 9]>
		  <script src="js/vendor/html5shiv.min.js"></script>
		  <script src="js/vendor/respond.min.js"></script>
		<![endif]-->
	  </head>
	  <section class="probootstrap-section probootstrap-section-colored mb0">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-8 col-md-offset-2 section-heading probootstrap-animate">
          <h2>Sorry, Please try again!</h2>
        </div>
      </div>
      <div class="row button-padding">
        <div class="col-md-4 col-md-offset-4 probootstrap-animate">
          <p class="text-center">
            <a href="http://www.elsontran.com/Contact.html" class="btn btn-ghost btn-ghost-blue btn-lg btn-block" role="button">Go Back</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- END: section -->
  <!-- START: footer -->
<footer role="contentinfo" class="probootstrap-footer">
		  <div class="row mt40">
			<div class="col-md-12 text-center">
				<p>
					<small>&copy; 2018 Elson S. Tran. All Rights Reserved. <br> Designed by <a href="My_Story.html" target="_blank">Elson S. Tran</a><br>
					<a href="http://www.linkedin/com/in/elsontran" target="_blank">View My LinkedIn</a></small>
				</p>
			</div>
		  </div>
</footer>
  <!-- END: footer -->
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>
  </body>
</html>
<?php
		die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
	    !isset($_POST['subject']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
	$subject = $_POST['subject']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below From all smiles website, pleace contact patient.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
	$email_message .= "subject: ".clean_string($subject)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<!DOCTYPE html>
<html lang="en">
<!-- START: Head -->	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Elson S. Tran &mdash; User Experience Designer</title>
		<meta name="description" content="Elson's UX Design Portfolio">
		<meta name="keywords" content="UX design, ux, ui, ia, user experience, user interface, general assembly">

		<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet"> 
		<link rel="stylesheet" href="css/styles-merged.css">
		<link rel="stylesheet" href="css/style.min.css">
		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js">
		
		<!--[if lt IE 9]>
		  <script src="js/vendor/html5shiv.min.js"></script>
		  <script src="js/vendor/respond.min.js"></script>
		<![endif]-->
	  </head>
	  <section class="probootstrap-section probootstrap-section-colored mb0">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-8 col-md-offset-2 section-heading probootstrap-animate">
          <h2>Thanks for contacting me! I'll reply as soon as I can!</h2>
        </div>
      </div>
      <div class="row button-padding">
        <div class="col-md-4 col-md-offset-4 probootstrap-animate">
          <p class="text-center">
            <a href="http://www.elsontran.com/" class="btn btn-ghost btn-ghost-blue btn-lg btn-block" role="button">Back to Home Page</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- END: section -->
  <!-- START: footer -->
<footer role="contentinfo" class="probootstrap-footer">
		  <div class="row mt40">
			<div class="col-md-12 text-center">
				<p>
					<small>&copy; 2018 Elson S. Tran. All Rights Reserved. <br> Designed by <a href="My_Story.html" target="_blank">Elson S. Tran</a><br>
					<a href="www.linkedin/com/in/elsontran" target="_blank">View My LinkedIn</a></small>
				</p>
			</div>
		  </div>
</footer>
  <!-- END: footer -->
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>
  </body>
</html>
<?php
 
}
?>