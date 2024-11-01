<?php
$to = "r0900822@student.thomasmore.be";
$subject = "E-mail subject";
$message = "Hello world!";
$headers = "From: yourname@yourdomainname.be"
mail($to, $subject, $message, $headers);
?>