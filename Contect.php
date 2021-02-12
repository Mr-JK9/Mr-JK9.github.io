<?php
if(isset($_POST['submit'])) {
	
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];
if($name=='' || $email=='' || $contact=='' || $message==''){
	echo "</script>alert('All fields are required !')</script>";
} else {

$from       = "Mr-JK9";
$webmaster  = "info@Mr-JK9.com"; //
$to         = "jugalkapde999@gmail.com"; // where you want to get mail 
$subject    = " Contact Us From My-CV";

$headers    = "From: " . $from . "<" . $webmaster . ">\r\n";
$headers    .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers    .= "MIME-Version: 1.0" . "\r\n";
$headers    .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<html><body>";
$message .= "<p>Name :".$_POST['name']  ."</p>";
$message .= "<p>Email : ". $_POST['email'] ."</p>";
$message .= "<p>Phone : ". $_POST['contact'] ."</p>";
$message .= "<p>Message :".$_POST['message']."</p>";
$message .= "</body></html>";

$sendmail = mail($to, $subject, $message, $headers);

echo "<script>alert('Thank You for Contact Me,I Will Contact With You Very Soon')</script>";
echo "<script>window.open('index.php?sent=Your Form Has been Submited','_self')</script>";
}
}

?>