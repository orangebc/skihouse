<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Skihouse</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    
    <!-- Minisite CSS -->
    <link rel="stylesheet" href="css/minisite.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Weather -->
    <script src="../js/jquery.simpleWeather.js"></script>

  </head>
  <body>
<!-- HEADER -->
   <header class="header">
       <div class="container-fluid no-space">
            <div class="col-lg-3 col-md-3 col-xs-6 no-space">
                <div class="header__logo">
                    <a href="../index.php"><img src="../images/logo.png" alt="Skihouse"></a>
                </div>
           </div>
           <div class="col-lg-9 col-md-9 col-xs-6">
               <div class="header__social">
                   <ul class="header__social--media list-inline">
                       <li><span class="header__info">Tel. (55) 55457761 |  (55) 52504201</span></li>
                       <li><a href="../pagos.php"><span class="header__info">Realizar pago <img src="../images/ic1.png" class="header__icon--payment" alt="Realizar pago"></span></a></li>
                       <li><a href="#"><img src="../images/ic2.png" class="header__icon" alt="Instagram"></a></li>
                       <li><a href="https://www.facebook.com/skihousemx" target="_blank"><img src="../images/ic3.png" class="header__icon" alt="Facebook"></a></li>
                       <li><a href="#"><img src="../images/ic4.png" class="header__icon" alt="Twitter"></a></li>
                   </ul>
                   <span class="header__social--menu" id="nav-toggle">
                       <img src="../images/icmenu.png" class="header__icon--menu" alt="Skihouse Menú">
                   </span>
               </div>
           </div>
       </div>
   </header>
   <!-- NAVIGATION -->
   <nav class="navigation" id="nav">
       <ul class="navigation__list">
           <li><a href="../index.php">Home</a></li>
           <li><a href="../somos.php">Somos</a></li>
           <li><a href="../destinos.php">Destinos</a></li>
           <li><a href="../servicios.php">Servicios</a></li>
           <li><a href="../promociones.php">Promos</a></li>
           <li><a href="../pagos.php">Formas de Pago</a></li>
           <li><a href="http://blog.skihouse.com.mx">Blog</a></li>
           <li><a href="../contacto.php">Contacto</a></li>
       </ul>
        <div class="visible-xs visible-sm navigation__mobile">
       <span class="mobile__payment"><a href="../pagos.php">Realizar pago <img src="../images/ic1.png" class="header__icon--payment" alt="Realizar pago"></a></span>
           <ul class="list-inline">
                <li><a href="#"><img src="../images/ic2.png" alt="Instagram"></a></li>
                <li><a href="https://www.facebook.com/skihousemx"><img src="../images/ic3.png" alt="Facebook"></a></li>
                <li><a href="#"><img src="../images/ic4.png" alt="Twitter"></a></li>
           </ul>
           <span class="header__info">Tel. (55) 55457761 |  (55) 52504201</span></li>
       </div>
       <span class="fa fa-times navigation__close"></span>
   </nav>

  <div class="goBack-grey">
    <figure class="goBack__icon">
      <img src="images/ic-subir.png" alt="goBack">
    </figure>
    <a href="../destinos.php" class="goBack__text-grey">[ Regresar <br> al mapa ]</a>
  </div>