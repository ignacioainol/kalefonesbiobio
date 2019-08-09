<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

if($_POST){
	$messageError = "";
	$nombre = $_POST['nombreForm'];
	$email = $_POST['emailForm'];
	$telefono = $_POST['telefonoForm'];
	$mensaje = $_POST['mensajeForm'];
	//echo $nombre ." ". $email . " " . $telefono ." ". $mensaje;

	if($nombre == "" || $nombre == null){
		$messageError .= "Debes ingresar tu nombre\n";
	}

	if($email == "" || $email == null){
		$messageError .= "Debes ingresar tu email\n";
	}

	if($telefono == "" || $telefono == null){
		$messageError .= "Debes ingresar tu telefono\n";
	}

	if($mensaje == "" || $mensaje == null){
		$messageError .= "Ingresa un mensaje\n";
	}

	if($messageError == ""){
		try {
	    //Server settings
	    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
	    $mail->isSMTP();                                            // Set mailer to use SMTP
	    $mail->Host       = 'smtp.gmail.com'; 					    // Specify main and backup SMTP servers
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'noreply.info.cyrax@gmail.com';                     // SMTP username
	    $mail->Password   = 'sendmailer123';                               // SMTP password
	    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
	    $mail->Port       = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('noreply.info.cyrax@gmail.com', 'Nuevo Correo');
	    $mail->addAddress('ignacio.ainolrivera@gmail.com', 'Formulario de Contacto');     // Add a recipient


	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Nuevo email desde sitio web!';
	    $mail->Body    = "{$nombre} desea ponerse en contacto contigo. Sus datos son los sigtes:<br>
	    				 <bold>Email:</bold> {$email}<br>
	    				 <bold>Teléfono:</bold> {$telefono}<br>
	    				 <bold>Mensaje:</bold> {$mensaje}";
	    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	    echo 'Mensaje enviado. Nos contactaremos contigo a la brevedad!.';
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
	}else{
		echo $messageError;
	}

}else{
	echo "no post";
}
