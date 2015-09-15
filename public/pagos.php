<?php include('html/header_url.php'); ?>
<head>
	<meta name="description" content="Porque pensamos en tu comodidad, tenemos diferentes métodos de pago para ti: Transferencia Bancaria, Depósito, Pago Directo">
	<meta name="author" content="Orange Boutique Creativa">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Pagos</title>
</head>
<!-- Formas de pago -->
<div class="text-center">
    <div class="red__section"></div>
    <h2 class="red__section--title">Formas de Pago</h2>
</div>
<!-- /Formas de pago -->
<section class="payment">
	<div class="container-fluid">
		<h2 class="payment__title">¡La nieve que tienes que vivir!</h2>
		<p class="payment__text">Porque pensamos en tu comodidad, tenemos diferentes métodos de pago para ti</p>
		<hr class="generic__separator payment__separator">
		<p class="payment__text">Ya contamos con medio de pago en línea:</p>
		<figure class="payment__paypal">
			<img src="/images/logopaypal.png" alt="Paypal">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="AG62BHA3Y8H68">
			<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
			<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
		</form>
		</figure>

		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<h5 class="payment__option">Transferencia Bancaria</h5>
			<p class="payment__text">O si lo prefieres realiza una transferencia:</p>
			<p class="payment__text"><strong>Scotiabank</strong></p>
			<p class="payment__text">Clabe: 044180001020116464</p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<h5 class="payment__option">Depósito</h5>
			<p class="payment__text">Realiza tu pago con depósito en la cuenta:</p>
			<p class="payment__text"><strong>Viajes de Gala S.A. de C.V <br> Scotiabank</strong></p>
			<p class="payment__text">Cuenta: 2011646</p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<h5 class="payment__option">Pago Directo</h5>
			<p class="payment__text"><strong>Visítanos en:</strong></p>
			<p class="payment__text">Viajes de Gala S.A. de C.V <br>Francisco Petrarca #133-202 <br> Col. Chapultepec Morales <br> México D.F.</p>
		</div>
	</div>
</section>
<?php include('html/form_url.php'); ?>
<?php include('html/footer_url.php'); ?>
