<?php
$name=$_post['name'];
$visitor_email=$_POST['email'];
$message=$_POST['massage'];



$email_from='samratsasmal2021@gmail.com';
$email_subject="new from submission";
$email_body="user name: $name.\n".
              "user email: $visitor_email.\n".
                "user massage: $massage.\n";

$to="samratsasmal2021@gmail.com";
$headers="from: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: index.html");
?>