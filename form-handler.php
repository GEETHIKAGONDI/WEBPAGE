<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email-from ='info@skillseekho.org';
$email-subject =' New Form Submission';
$email-body =" User Name: $name.\n". 
            " User Email: $visitor_email.\n".
            " User Subject: $subject.\n".
            " User Message: $message.\n";

$to ='geethikagondi2000@gmail.com';

$headers = "Form: $email_form \r\n";

$headers .="Reply-To: $visitor_email \r\n;

mail($to,$email_subject,$visitor_email,$headers);

header("Location: contact.html");
?>