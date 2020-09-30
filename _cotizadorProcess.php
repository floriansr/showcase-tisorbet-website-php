<?php

header('Content-type: text/html; charset=UTF-8');

if(isset($_POST['email'])) {
 
	// EDIT THE 2 LINES BELOW AS REQUIRED
	$email_from = "contacto@tisorbet.com";
	$email_to = "contacto@tisorbet.com";
	$email_subject = "Cotización TiSorbet - ";

	function died($error) {
		// your error code can go here
		echo "We are very sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		header("Location: http://www.tisorbet.com/contact.php?m=err"); /* Redirect browser */
		//exit();
		die();
		
	}

	// validation expected data exists
	if(!isset($_POST['name']) ||
	!isset($_POST['email']) ||
	!isset($_POST['tel']) ||
	!isset($_POST['date']) ||
	!isset($_POST['tipoEvento']) ||
	!isset($_POST['lugarEvento']) ||
	!isset($_POST['asistentes'])
	) {
	died('We are sorry, but there appears to be a problem with the form you submitted.');       
	}

	$name = $_POST['name']; // required
	$email = $_POST['email']; // required
	$tel = $_POST['tel']; // required
	$date = $_POST['date']; // required
	$tipoEvento = $_POST['tipoEvento']; // required
	$lugarEvento = $_POST['lugarEvento']; // required
	$asistentes = $_POST['asistentes']; // required
	
	//$tel = intval($tel);
	$asistentes = intval($asistentes);
	
	$error_message = "";

	$email = filter_var($email, FILTER_SANITIZE_EMAIL);

	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
	if(!preg_match($email_exp,$email)) {
	$error_message .= 'El EMAIL ingresado contiene caracteres no válidos.<br />';
	}

	//$string_exp = "/^[A-Za-z .'-]+$/";
	$string_exp = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ.'-]+$/";

	if(!preg_match($string_exp,$name)) {
	$error_message .= 'El texto ingresado en NOMBRE contiene caracteres no válidos.<br />';
	}
	
	if(!preg_match($string_exp,$lugarEvento)) {
	$error_message .= 'El texto ingresado en LUGAR DE EVENTO contiene caracteres no válidos.<br />';
	}
	
	/*
	if(!is_int($tel)) {
	$error_message .= 'El TELEFONO ingresado contiene caracteres no válidos.<br />';
	}
	*/
	
	if(!is_int($asistentes)) {
	$error_message .= 'La cantidad de ASISTENTES ingresada contiene caracteres no válidos.<br />';
	}
	
	$os = array("Boda", "Quince", "Cumple", "Posada","Aniversario", "Bautizo", "PrimeraComunion", "Corporativo", "Otro");
	
	if (!in_array($tipoEvento, $os)) {
	$error_message .= 'El TIPO DE EVENTO ingresado contiene caracteres no válidos.<br />';
	}
	
	if(strlen($error_message) > 0) {
	died($error_message);
	}

	$email_message = "Form details below: \n\n";

	 
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}

	//$date = date('Y-m-d');
	
    //$email_message .= "Fecha/Hora procesado: ".$date."\n";
    $email_message .= "Nombre: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Telefono/Celular: ".clean_string($tel)."\n";
    $email_message .= "Fecha del Evento: ".clean_string($date)."\n";
    $email_message .= "Tipo de Evento: ".clean_string($tipoEvento)."\n";
    $email_message .= "Lugar del Evento: ".clean_string($lugarEvento)."\n";
    $email_message .= "Numero de Asistentes: ".clean_string($asistentes)."\n";
	
	$email_subject .= clean_string($date) . " - " . clean_string($name);
 

 
// create email headers
$headers =
"Content-Type: text/plain; charset=utf-8" ."\r\n".
"Content-Transfer-Encoding: 8bit"."\r\n".
'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
$success = mail($email_to, $email_subject, $email_message, $headers); 

//mail('example@example.com', 'My Subject', $message);
if (!$success) {
    $errorMessage = error_get_last()['message'];
	echo $errorMessage;
	header("Location: http://www.tisorbet.com/contact.php?m=err"); /* Redirect browser */
	exit();
}

header("Location: http://www.tisorbet.com/contact.php?m=success"); /* Redirect browser */
exit();

?>

<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>