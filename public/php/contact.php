<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SkiHouse</title>
</head>
<body>
<?php
	
	$nombre = $_POST['contactName'];
	$email = $_POST['contactEmail'];
	$celular = $_POST['contactMobile'];
	$privado = $_POST['contactPrivatePhone'];
	$mensaje = $_POST['contactMessage'];

	$to = 'ventas@vdegalatours.com.mx';
	$title = 'Skihouse Formulario Cotizador';
	$from = "SkiHouse-Contacto@skihouse.com.mx";

	$headers = 'From: ' . $from . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	$message = '<html><body><head><meta charset="UTF-8"></head>';
	$message .= '<strong>SkiHouse Formulario de Contacto </strong><br><br>';
	$message .= 'Nombre de Cliente: ' . '<strong>' . $nombre . '</strong><br><br>';
	$message .= 'Email: ' . '<strong>' . $email . "</strong><br><br>";	
	$message .= 'Celular: ' . '<strong>' . $celular . "</strong><br><br>";
	$message .= 'Teléfono: ' . '<strong>' . $privado . "</strong><br><br>";
	$message .= 'Comentarios: ' . '<strong>' . $mensaje . "</strong><br><br>";
	$message .= '</body></html>';

  
	if ($_POST['submit']) {
	if (mail($to, $title, $message, $headers )) {

	echo '
	<script type="text/javascript">		
			alert("Gracias, en breve nos comunicaremos con usted.");
	</script>

	<script type="text/javascript">
		window.location.href = "http://skihouse.com.mx";
	</script>
		'
	; 
		} else { 
			echo 'Falló el envio'; } 
		}
?>
</body>
</html>

