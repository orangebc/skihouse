<?php

	$nombre = $_POST['formNombre'];
	$email = $_POST['formEmail'];
	$telefono = $_POST['formTelefono'];
	$esUsted = $_POST['formEsUsted'];
	$dat = new DateTime($_POST['formDate']);
	$new_format = $dat->format('d/m/Y');
	$datReturn = new DateTime($_POST['formDateReturn']);
	$new_formatReturn = $datReturn->format('d/m/Y');
	$pais = $_POST['formPais'];
	$estado = $_POST['formEstado'];
	$resort = $_POST['formResort'];
	$personas = $_POST['formPersonas'];
	$ninos = $_POST['formNinos'];
	$wishlist = $_POST['formWishlist'];
	$dondeNosVio = $_POST['formDondeNosVio'];
	$comentarios = $_POST['formComentarios'];
	$wishlist = join(", ", $_POST['formWishlist']);

	$to = 'ventas@vdegalatours.com.mx';
	$title = 'Skihouse Formulario Cotizador';
	$from = "SkiHouse Website@skihouse.com.mx";

	$headers = 'From: ' . $from . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	$message = '<html><body><head><meta charset="UTF-8"></head>';
	$message .= '<strong>SkiHouse Cotizador </strong><br><br>';
	$message .= 'Nombre de Cliente: ' . '<strong>' . $nombre . '</strong><br><br>';
	$message .= 'Email: ' . '<strong>' . $email . "</strong><br><br>";
	$message .= 'Fecha de salida: ' . '<strong>' . $new_format . "</strong><br><br>";
	$message .= 'Fecha de regreso: ' . '<strong>' . $new_formatReturn . "</strong><br><br>";
	$message .= 'Teléfono: ' . '<strong>' . $telefono . "</strong><br><br>";
	$message .= 'Es Usted: ' . '<strong>' . $esUsted . "</strong><br><br>";
	$message .= 'País: ' . '<strong>' . $pais . "</strong><br><br>";
	$message .= 'Estado: ' . '<strong>' . $estado . "</strong><br><br>";
	$message .= 'Personas: ' . '<strong>' . $personas . "</strong><br><br>";
	$message .= 'Niños: ' . '<strong>' . $ninos . "</strong><br><br>";
	$message .= 'Wishlist: ' . '<strong>' . $wishlist . "</strong><br><br>";
	$message .= 'Dónde nos vio: ' . '<strong>' . $dondeNosVio . "</strong><br><br>";
	$message .= 'Comentarios adicionales ' . '<strong>' . $comentarios . "</strong><br><br>";
	$message .= '</body></html>';


	if ($_POST['submit']) {
	if (mail($to, $title, $message, $headers )) {

	echo '
	<script type="text/javascript">
			alert("Gracias, en breve nos comunicaremos con usted.");
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
