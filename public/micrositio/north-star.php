<?php include('html/header.php'); ?>

<!-- sliderMinisite -->
<section class="minisite__slider">
	<!-- carousel -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  		<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
    		<div class="item active">
      		<img src="images/northstar/slider1.jpg" alt="Carousel-item">
      			<div class="container">
	      			<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">Toda la Aventura <br> que buscas <br> <small>está en Northstar</small></h1>
						<h6 class="minisite__weather"></h6>
	      			</div>
      			</div>
    		</div>
    		<div class="item">
      		<img src="images/northstar/slider2.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">Toda la Aventura <br> que buscas <br> <small>está en Northstar</small></h1>
						<h6 class="minisite__weather"></h6>
      				</div>
        		</div>
    		</div>
    		<div class="item">
      		<img src="images/northstar/slider3.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">Toda la Aventura <br> que buscas <br> <small>está en Northstar</small></h1>
						<h6 class="minisite__weather"></h6>
      				</div>
        		</div>
    		</div>
    		<div class="item">
      		<img src="images/northstar/slider4.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">Toda la Aventura <br> que buscas <br> <small>está en Northstar</small></h1>
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
    location: 'Northstar, CA, USA',
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
<!-- northStarMinisite -->
	<div class="text-center">
        <div class="red__section"></div>
    	<h2 class="red__section--titleSmall">North Star</h2>
    </div>
<!-- /northStarMinisite -->
<!-- minisiteAbout -->
<section class="minisite___about">
	<div class="container-fluid no-space">
		<div class="col-lg-6 no-space">
			<div class="minisite__about--content">
				<h5 class="minisite__about--darkgrey-title">Acerca De</h5>
				<p class="minisite__about--info">Situado en la línea fronteriza de los Estados de California y Nevada, localizada en la zona norte de Lake Tahoe. <br> Ideal para familias modernas que buscan una esencia única y relajada, este sitio combina la tranquilidad de California con lujo y esa alegría característica de la montaña sin perder el sofisticado ambiente del pueblo.</p>
			</div>
		</div>
		<div class="col-lg-6 no-space">
			<div class="minisite__about--activities">
				<h5 class="minisite__about--lightgrey-title">Actividades</h5>
				<ul class="list-inline minisite__about--icons">
					<li>
						<img src="images/northstar/actividades/actv1.png" alt="Actividades">
						<span>Ice Skating</span>
					</li>
					<li>
						<img src="images/northstar/actividades/actv2.png" alt="Actividades">
						<span>Cross Country Skiing</span>
					</li>
					<li>
						<img src="images/northstar/actividades/actv3.png" alt="Actividades">
						<span>Tubing</span>
					</li>
					<li>
						<img src="images/northstar/actividades/actv4.png" alt="Actividades">
						<span>Free Mountain Tours</span>
					</li>
					<li>
						<img src="images/northstar/actividades/actv5.png" alt="Actividades">
						<span>Bungy Trampoline</span>
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
		<div class="col-lg-3 no-space">
			<figure class="minisite__for--item">
			<img src="images/northstar/ideal1.jpg" alt="Ideal">
				<figcaption class="minisite__for--item-name">
					<h6>Parejas</h6>
				</figcaption>
			</figure>
		</div>
		<div class="col-lg-3 no-space">
			<figure class="minisite__for--item">
			<img src="images/northstar/ideal2.jpg" alt="Ideal">
				<figcaption class="minisite__for--item-name">
					<h6>Deportistas</h6>
				</figcaption>
			</figure>
		</div>		
		<div class="col-lg-3 no-space">
			<figure class="minisite__for--item">
			<img src="images/northstar/ideal3.jpg" alt="Ideal">
				<figcaption class="minisite__for--item-name">
					<h6>Familia</h6>
				</figcaption>
			</figure>
		</div>			
		<div class="col-lg-3 no-space">
			<figure class="minisite__for--item">
			<img src="images/northstar/ideal4.jpg" alt="Ideal">
				<figcaption class="minisite__for--item-name">
					<h6>Amigos</h6>
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
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

  		<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
    		<div class="item active">
      		<img src="images/heavenly/slideh1.jpg" alt="Carousel-item">
      			<div class="container">
	      			<div class="carousel-caption">
	        			<h2 class="minisites__hotels--name">Northstar Properties</h2>
	      			</div>
      			</div>
    		</div>
    		<div class="item">
      		<img src="images/heavenly/slideh2.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
      					<h2 class="minisites__hotels--name">Ritz Carlton</h2>
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
				<span class="minisite__mountain--details">2,624.33 M.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Elevación de la cumbre</span>
			</li>
			<li>
				<span class="minisite__mountain--details">1,929.08 M.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Elevación de la base</span>
			</li>
			<li>
				<span class="minisite__mountain--details">694.94 M.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Vertical</span>
			</li>
			<li>
				<span class="minisite__mountain--details">97</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Número de pistas</span>
			</li>
			<li>
				<span class="minisite__mountain--details">1,282 ha.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Terreno esquiable</span>
			</li>
			<li>
				<span class="minisite__mountain--details">1.6 km</span>
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
			<a href="images/northstar/info-montana.pdf" download="infoMontanaNorthStar"><h5 class="minisite__mountain--download">Descargar Información de la Montaña</h5></a>
		</div>
	</div>
	<div class="minisite__mountain-icons">
		<div class="container">
			<div class="col-lg-4">
				<article class="minisite__mountain-icons--item">
					<img src="images/aspen/ic-montana1.jpg" alt="Terreno Principiantes">
					<span class="minisite__mountain-icons-x">13%</span>
					<span class="minisite__mountain-icons-t">Terreno para <br> principiantes</span>
				</article>
			</div>
			<div class="col-lg-4">
				<article class="minisite__mountain-icons--item">
					<img src="images/aspen/ic-montana2.jpg" alt="Terreno Intermedios">
					<span class="minisite__mountain-icons-x">60%</span>
					<span class="minisite__mountain-icons-t">Terreno para <br> intermedios</span>
				</article>
			</div>
			<div class="col-lg-4">
				<article class="minisite__mountain-icons--item">
					<img src="images/aspen/ic-montana3.jpg" alt="Terreno avanzados">
					<span class="minisite__mountain-icons-x">27%</span>
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
				<h6 class="minisite__resort--item-name"><a href="http://www.northstarcalifornia.com">www.northstarcalifornia.com</a></h6>
			</article>
		</div>
		<div class="col-lg-3">
			<article class="minisite__resort--item">
				<figure class="minisite__resort--icon">
					<img src="images/aspen/ic-datos2.png" alt="Website">
				</figure>
				<h6 class="minisite__resort--item-name">5001 Northstar Dr, Truckee, <br> California 96161, Estados Unidos</h6>
			</article>
		</div>
		<div class="col-lg-3">
			<article class="minisite__resort--item">
				<figure class="minisite__resort--icon">
					<img src="images/aspen/ic-datos3.png" alt="Website">
				</figure>
				<h6 class="minisite__resort--item-name">Phone: <br> +1 530-562-2267</h6>
			</article>
		</div>
		<div class="col-lg-3">
			<article class="minisite__resort--item">
				<figure class="minisite__resort--icon">
					<img src="images/aspen/ic-datos4.png" alt="Website">
				</figure>
				<h6 class="minisite__resort--item-name">northstarattahoe@vailresorts.com</h6>
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