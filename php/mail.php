<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$msg=$_POST['msg'];
$my_email="faizanahmadi2000@gmail.com";
$email_subject="New form submission";
$email_body="user name: $name <br> user email: $visitor_email <br> user message: $msg";
$header = "From: $visitor_email \r\n";
$header .= "Replay-To: $visitor_email \r\n";
$retval = mail ($visitor_email,$email_subject,$email_body,$header);
if( $retval == true ) {
            echo "<script type='text/javascript'>alert('Message sent successfully...');</script>";
         }else {
            echo "<script type='text/javascript'>alert('Message could not be sent...');</script>";
         }
header('Location: /contact.html');
 ?>
