<?php

$EmailFrom = "$Email";
$EmailTo = "info@yokono.cl";
$subject = "Contacto de reclamos desde www.yokono.cl";
$Nombre = Trim(stripslashes($_POST['Nombre'])); 
$Motivo = Trim(stripslashes($_POST['Motivo'])); 
$Local = Trim(stripslashes($_POST['Local']));
$Email = Trim(stripslashes($_POST['Email'])); 
$Mensaje = Trim(stripslashes($_POST['Mensaje'])); 

// prepare email body text
$body = "";
$body .= "Nombre: ";
$body .= $Nombre;
$body .= "\n";
$body .= "Motivo: ";
$body .= $Motivo;
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