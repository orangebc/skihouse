<?php include('html/header.php'); ?>

<!-- sliderMinisite -->
<section class="minisite__slider">
	<!-- carousel -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  		<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
    		<div class="item active">
      		<img src="images/coppermountain/slider1.jpg" alt="Carousel-item">
      			<div class="container">
	      			<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">No hay mejor<br> lugar que<br> <small>Copper Mountain</small></h1>
						<h6 class="minisite__weather"></h6>
	      			</div>
      			</div>
    		</div>
    		<div class="item">
      		<img src="images/coppermountain/slider2.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">No hay mejor<br> lugar que<br> <small>Copper Mountain</small></h1>
						<h6 class="minisite__weather"></h6>
      				</div>
        		</div>
    		</div>
    		<div class="item">
      		<img src="images/coppermountain/slider3.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">No hay mejor<br> lugar que<br> <small>Copper Mountain</small></h1>
						<h6 class="minisite__weather"></h6>
      				</div>
        		</div>
    		</div>
    		<div class="item">
      		<img src="images/coppermountain/slider4.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">No hay mejor<br> lugar que<br> <small>Copper Mountain</small></h1>
						<h6 class="minisite__weather"></h6>
      				</div>
        		</div>
    		</div>
    	</div>
    	<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
</section>
<!-- /sliderMinisite -->
<!-- Weather -->
<script>
$(document).ready(function() {
  $.simpleWeather({
    location: 'Copper Mountain, CO, USA',
    woeid: '',
    unit: 'c',
    success: function(weather) {
      html = '<i class="icon-'+weather.code+'"></i>' + ' ' + weather.temp + '&deg' + weather.units.temp;
  
      $(".minisite__weather").html(html);
    },
    error: function(error) {
      $(".minisite__weather").html('<p>'+error+'</p>');
    }
  });
});
</script>
<!-- /weather -->
<!-- copperMoutainMinisite -->
	<div class="text-center">
        <div class="red__section"></div>
    	<h2 class="red__section--title">Copper Mountain</h2>
    </div>
<!-- /copperMountainMinisite -->
<!-- minisiteAbout -->
<section class="minisite___about">
	<div class="container-fluid no-space">
		<div class="col-lg-6 no-space">
			<div class="minisite__about--content">
				<h5 class="minisite__about--darkgrey-title">Acerca De</h5>
				<p class="minisite__about--info">El centro recreativo más aventurero dentro del Condado de Summit; una montaña destinada para aquellos amantes del freestyle y muy amigable para cualquiera que quiera adrenalina y ganas de observar una joya invernal. <br>
				Las pistas verdes, azules y negras se encuentran separadas naturalmente de este a oeste; un pueblo novedoso con tiendas restaurantes, bares y más. </p>
			</div>
		</div>
		<div class="col-lg-6 no-space">
			<div class="minisite__about--activities">
				<h5 class="minisite__about--lightgrey-title">Actividades</h5>
				<ul class="minisite__about--icons">
					<li>
						<img src="images/coppermountain/actividades/actv1.png" alt="Patinaje sobre hielo">
						<span>Tubing</span>
					</li>
					<li>
						<img src="images/coppermountain/actividades/actv2.png" alt="Snowshoe">
						<span>Ice Skating</span>
					</li>
					<li>
						<img src="images/coppermountain/actividades/actv3.png" alt="Snowcat">
						<span>Critterland</span>
					</li>
					<li>
						<img src="images/coppermountain/actividades/actv4.png" alt="Cross Country Skiing">
						<span>Zipline</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- /minisiteAbout -->
<!-- minisiteFor -->
<section class="minisite__for">
	<h2 class="minisite__for--title">Ideal para</h2>
	<div class="container-fluid no-space">
		<div class="col-lg-4 no-space">
			<figure class="minisite__for--item">
			<img src="images/coppermountain/ideal1.jpg" alt="Parejas">
				<figcaption class="minisite__for--item-name">
					<h6>Parejas</h6>
				</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 no-space">
			<figure class="minisite__for--item">
			<img src="images/coppermountain/ideal2.jpg" alt="Skiadores">
				<figcaption class="minisite__for--item-name">
					<h6>Skiadores</h6>
				</figcaption>
			</figure>
		</div>		
		<div class="col-lg-4 no-space">
			<figure class="minisite__for--item">
			<img src="images/coppermountain/ideal3.jpg" alt="Familias">
				<figcaption class="minisite__for--item-name">
					<h6>Familias</h6>
				</figcaption>
			</figure>
		</div>		
	</div>
</section>
<!-- /minisiteFor -->
<!-- minisiteHotels -->
	<div class="text-center">
        <div class="red__section"></div>
    	<h2 class="red__section--titleSmall">Hoteles</h2>
    </div>
<section class="minisite__hotels">
	<!-- carousel -->
	<div id="carousel2" class="carousel slide" data-ride="carousel">
  		<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel2" data-slide-to="0" class="active"></li>
				<li data-target="#carousel2" data-slide-to="1"></li>
				<li data-target="#carousel2" data-slide-to="2"></li>
				<li data-target="#carousel2" data-slide-to="3"></li>
			</ol>

  		<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
    		<div class="item active">
      		<img src="images/breckenridge/slideh1.jpg" alt="Carousel-item">
      			<div class="container">
	      			<div class="carousel-caption">
	        			<h2 class="minisites__hotels--name">Cooper Junction</h2>
	      			</div>
      			</div>
    		</div>
    		<div class="item">
      		<img src="images/breckenridge/slideh2.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
      					<h2 class="minisites__hotels--name">Cooper Springs</h2>
      				</div>
        		</div>
    		</div>
    		<div class="item">
      		<img src="images/breckenridge/slideh3.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
      					<h2 class="minisites__hotels--name">Masters</h2>
      				</div>
        		</div>
    		</div>
    		<div class="item">
      		<imgcarousel-example-generic src="images/breckenridge/slideh4.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
      					<h2 class="minisites__hotels--name">Mill Club</h2>
      				</div>
        		</div>
    		</div>
    	</div>
    		<!-- Controls -->
				<a class="left carousel-control" href="#carousel2" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel2" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
	</div>
	<p class="minisite__hoteles--content">Contamos con una gran variedad de hospedaje en hotel o condominios para individuales, <br> familias y grupos, para mayor información. <strong>¡Contáctanos!</strong></p>
</section>
<!-- /minisiteHotels-->
<!-- minisiteMountain -->
<div class="text-center">
    <div class="red__section"></div>
   	<h2 class="red__section--title">Acerca de la Montaña</h2>
</div>
<section class="minisite__mountain">
	<div class="container-fluid">
		<ul class="list-inline minisite__mountain--items">
			<li>
				<span class="minisite__mountain--details">3,752.70 M.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Elevación de la cumbre</span>
			</li>
			<li>
				<span class="minisite__mountain--details">260.2 M.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Elevación de la base</span>
			</li>
			<li>
				<span class="minisite__mountain--details">1,035.7 M.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Vertical</span>
			</li>
			<li>
				<span class="minisite__mountain--details">126</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Número de pistas</span>
			</li>
			<li>
				<span class="minisite__mountain--details">453 ha.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Terreno esquiable</span>
			</li>
			<li>
				<span class="minisite__mountain--details">3.2 km.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Sendero más largo</span>
			</li>
		</ul>
	</div>
</section>
<!-- /minisiteMountain -->
	<div class="container-fluid no-space">
		<div class="col-lg-6 no-space">
			<h5 class="minisite__mountain--levels">Niveles de la Montaña</h5>
		</div>
		<div class="col-lg-6 no-space">
			<a href="images/coppermountain/info-montana.pdf" download="infoMontanaCopperMountain"><h5 class="minisite__mountain--download">Descargar Información de la Montaña</h5></a>
		</div>
	</div>
	<div class="minisite__mountain-icons">
		<div class="container">
			<div class="col-lg-4">
				<article class="minisite__mountain-icons--item">
					<img src="images/aspen/ic-montana1.jpg" alt="Terreno Principiantes">
					<span class="minisite__mountain-icons-x">21%</span>
					<span class="minisite__mountain-icons-t">Terreno para <br> principiantes</span>
				</article>
			</div>
			<div class="col-lg-4">
				<article class="minisite__mountain-icons--item">
					<img src="images/aspen/ic-montana2.jpg" alt="Terreno Intermedios">
					<span class="minisite__mountain-icons-x">25%</span>
					<span class="minisite__mountain-icons-t">Terreno para <br> intermedios</span>
				</article>
			</div>
			<div class="col-lg-4">
				<article class="minisite__mountain-icons--item">
					<img src="images/aspen/ic-montana3.jpg" alt="Terreno avanzados">
					<span class="minisite__mountain-icons-x">54%</span>
					<span class="minisite__mountain-icons-t">Terreno para <br> avanzados</span>
				</article>
			</div>
		</div>
	</div>
<!-- minisiteResort -->
<section class="minisite__resort">
	<h5 class="minisite__resort--title">Datos del Resort</h5>
	<div class="container-fluid">
		<div class="col-lg-3">
			<article class="minisite__resort--item">
				<figure class="minisite__resort--icon">
					<img src="images/aspen/ic-datos1.png" alt="Website">
				</figure>
				<h6 class="minisite__resort--item-name"><a href="http>//www.coppercolorado.com">www.coppercolorado.com</a></h6>
			</article>
		</div>
		<div class="col-lg-3">
			<article class="minisite__resort--item">
				<figure class="minisite__resort--icon">
					<img src="images/aspen/ic-datos2.png" alt="Website">
				</figure>
				<h6 class="minisite__resort--item-name">209 10 Mile Cir, Frisco,<br>CO 80443, Estados Unidos</h6>
			</article>
		</div>
		<div class="col-lg-3">
			<article class="minisite__resort--item">
				<figure class="minisite__resort--icon">
					<img src="images/aspen/ic-datos3.png" alt="Website">
				</figure>
				<h6 class="minisite__resort--item-name">International: <br> +1 970-968-2318 </h6>
			</article>
		</div>
		<div class="col-lg-3">
			<article class="minisite__resort--item">
				<figure class="minisite__resort--icon">
					<img src="images/aspen/ic-datos4.png" alt="Website">
				</figure>
				<h6 class="minisite__resort--item-name">privacy@coppercolorado.com</h6>
			</article>
		</div>
	</div>
	<div class="minisite__resort--background">
		<h6 class="minisite__resort--p">Porque esos increíbles momentos, <br> merecen el lugar ideal.</h6>
	</div>
</section>
<!-- /minisiteResort -->

<?php include('html/form.php'); ?>
<?php include('html/footer.php'); ?>