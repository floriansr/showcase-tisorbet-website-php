<?php include 'index.php'; ?>

<?php

if($_GET['m']=="success"){
	
	$display = "block";
	$message = "<img src='images/happyf.svg' width='90px' ><br>
	¡Gracias por contactarnos!<br>Nos pondremos en contacto lo más pronto posible.";
	
}else if($_GET['m']=="err"){
	
	$display = "block";
	$message = "<img src='images/alert.svg' width='55px' ><br>Lo sentimos pero la solicitud no pudo ser procesada. <br>Favor de contactarnos via correo electrónico: contacto@tisorbet.com";
	
}else{
	$display = "none";
	$message = " ";
}

echo '
<div class="cotizador-message" style="vertical-align: middle;text-align:center;display:' . $display . ';" onclick="$(\'.cotizador-message\').slideToggle();" >
	<div style="position:absolute;top:1px;right:5px;color:black;font-size:12px;font-weight:bold;cursor:pointer;" >[Cerrar]</div>
	<div style="font-size:22px; font-weight:700;color:#D32027;" >'. $message .'</div>
</div>
';

?>

<!--
Smiley Icon Credit:
Hand-Drawn Goods (handdrawngoods.com), from designer/set Jolly Icons — Part 1: Social Media and Communication. Use under Creative Commons Attribution 2.5 License.
-->
