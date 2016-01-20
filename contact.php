<?php

$EmailFrom = "$Email";
$EmailTo = "info@yokono.cl";
$subject = "Contacto desde www.yokono.cl";
$FirstName = Trim(stripslashes($_POST['Nombre'])); 
$LastName = Trim(stripslashes($_POST['Apellido'])); 
$Website = Trim(stripslashes($_POST['Telefono']));
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Mensaje'])); 

// prepare email body text
$body = "";
$body .= "Nombre: ";
$body .= $Nombre;
$body .= "\n";
$body .= "Apellido: ";
$body .= $Apellido;
$body .= "\n";
$body .= "Telefono: ";
$body .= $Telefono;
$body .= "\n";
$body .= "Email: ";
$body .= $Email;
$body .= "\n";
$body .= "Mensaje: ";
$body .= $Mensaje;
$body .= "\n";

// send email 
$success = mail($EmailTo, $subject, $body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
header("Location: sucess.html");
}
else{
header("Location: error.html");
}
?>