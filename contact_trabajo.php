<?php

$EmailFrom = "$Email";
$EmailTo = "trabajo@yokono.cl";
$subject = "Contacto de trabajo desde www.yokono.cl";
$Nombre = Trim(stripslashes($_POST['Nombre'])); 
$Cargo = Trim(stripslashes($_POST['Cargo'])); 
$Local = Trim(stripslashes($_POST['Local']));
$Email = Trim(stripslashes($_POST['Email'])); 
$Mensaje = Trim(stripslashes($_POST['Mensaje'])); 

// prepare email body text
$body = "";
$body .= "Nombre: ";
$body .= $Nombre;
$body .= "\n";
$body .= "Cargo: ";
$body .= $Cargo;
$body .= "\n";
$body .= "Local: ";
$body .= $Local;
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