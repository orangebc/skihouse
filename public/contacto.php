<?php include('html/header.php'); ?>
<head>
	<meta name="description" content="Para mayor información, escríbanos un mensaje y a la brevedad nos pondremos en contacto.">
	<meta name="author" content="Orange Boutique Creativa">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Contacto</title>
</head>
    <!-- TITLE -->
    <div class="text-center">
        <div class="red__section"></div>
        <h2 class="red__section--titleSmall">Contacto</h2>
    </div>
    <!-- CONTACT FORM -->
    <section class="contactUs">
        <div class="contactUs__container">
            <p class="contactUs__info">Para mayor información, escríbanos un mensaje y a la brevedad nos pondremos en contacto.</p>
            <form class="contactUs__form" action="php/contact.php" method="post">
                <div class="form-group">
                    <label for="contactName" class="contactUs__form--label" >Nombre</label>
                    <input type="text" class="form-control contactUs__form--field" name="contactName" placeholder="Ingresa tu nombre" id="contactName" required>
                </div>
                <div class="form-group">
                    <label for="contactEmail" class="contactUs__form--label">Email</label>
                    <input type="email" class="form-control contactUs__form--field" name="contactEmail" placeholder="correo@tudominio.com" id="contactEmail" required>
                </div>
                <div class="form-group">
                    <label for="contactMobile" class="contactUs__form--label">Celular</label>
                    <input type="tel" class="form-control contactUs__form--field" placeholder="Celular a 10 digitos" name="contactMobile" id="contactMobile" maxlength="10" minlength="10" required>
                </div>
                <div class="form-group">
                    <label for="contactPrivatePhone" class="contactUs__form--label">Teléfono Particular</label>
                    <input type="tel" class="form-control contactUs__form--field" placeholder="Teléfono a 10 digitos" name="contactPrivatePhone" id="contactPrivatePhone" maxlength="10" minlength="10" required>
                </div>
                <div class="form-group">
                    <label for="contactMessage" class="contactUs__form--label">Mensaje</label>
                    <textarea type="tel" class="form-control contactUs__form--field" rows="6" name="contactMessage" id="contactMessage" required></textarea>
                </div>
                <input type="submit" value="Enviar" name="submit" class="btn contactUs__form--btn">
            </form>
        </div>
    </section>
    <!-- /contactForm -->
   <?php include('html/form.php'); ?>
   <?php include('html/footer.php'); ?>
