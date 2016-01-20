<?php

$EmailFrom = "$email";
$EmailTo = "simplepublicidadgraficamente@gmail.com";
$subject = "Contacto desde yokono.cl";
$FirstName = Trim(stripslashes($_POST['FirstName'])); 
$LastName = Trim(stripslashes($_POST['LastName']));
$email = Trim(stripslashes($_POST['Email'])); 
$Website = Trim(stripslashes($_POST['Website']));
$message = Trim(stripslashes($_POST['Message'])); 

// prepare email body text
$body = "";
$body .= "FirstName: ";
$body .= $FirstName;
$body .= "\n";
$body .= "LastName: ";
$body .= $LastName;
$body .= "\n";
$body .= "Website: ";
$body .= $Website;
$body .= "\n";
$body .= "Email: ";
$body .= $email;
$body .= "\n";
$body .= "Message: ";
$body .= $message;
$body .= "\n";

// send email 
$success = mail($EmailTo, $subject, $body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
header("Location: ../sucess.html");
}
else{
header("Location: ../error.html");
}
?>