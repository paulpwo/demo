<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$txt = $_POST['message'];

// Create the email and send the message
$to = 'esquineroscr@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Mensaje del Website cliente:  $name";
$email_body = "Ha recibido un nuevo mensaje de su formulario del sitio Web.".
"Aquí están los detalles Nombre: $name Email: $email_address\n\n Telefono: $phone\n\n Mensaje:\n$message";
/*$headers = "From: noreply@yourdomain.com"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	 */




$subject = "Mensaje del Website cliente:  $name";
   
$headers = "From: info@esquineroscr.com\r\n";
$headers .= "Reply-To: ". $email_address . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= "Ha recibido un nuevo mensaje de su formulario del sitio Web.";
$message .= "<br>";
$message .= "Nombre: " . $name ;
$message .= "<br>";
$message .= "Email: " . $email_address ;
$message .= "<br>";
$message .= "Telefono: " . $phone ;
$message .= "<br>";
$message .= "Mensaje: " . $txt  ;


$message .= "</body></html>";

mail($to, $subject, $message, $headers);
return true;			
?>