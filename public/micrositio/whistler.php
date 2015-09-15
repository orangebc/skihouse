<?php include('html/header.php'); ?>

<!-- sliderMinisite -->
<section class="minisite__slider">
	<!-- carousel -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  		<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
    		<div class="item active">
      		<img src="images/whistler/slider1.jpg" alt="Carousel-item">
      			<div class="container">
	      			<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">No hay mejor<br> lugar que <br> <small>Whistler</small></h1>
						<h6 class="minisite__weather"></h6>
	      			</div>
      			</div>
    		</div>
    		<div class="item">
      		<img src="images/whistler/slider2.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">No hay mejor<br> lugar que <br> <small>Whistler</small></h1>
						<h6 class="minisite__weather"></h6>
      				</div>
        		</div>
    		</div>
    		<div class="item">
      		<img src="images/whistler/slider3.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">No hay mejor<br> lugar que <br> <small>Whistler</small></h1>
						<h6 class="minisite__weather"></h6>
      				</div>
        		</div>
    		</div>
    		<div class="item">
      		<img src="images/whistler/slider4.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">No hay mejor<br> lugar que <br> <small>Whistler</small></h1>
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
    location: 'Whistler, BC, Canada',
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
<!-- whistlerMinisite -->
	<div class="text-center">
        <div class="red__section"></div>
    	<h2 class="red__section--titleSmall">Whistler</h2>
    </div>
<!-- /whistlerMinisite -->
<!-- minisiteAbout -->
<section class="minisite___about">
	<div class="container-fluid no-space">
		<div class="col-lg-6 no-space">
			<div class="minisite__about--content">
				<h5 class="minisite__about--darkgrey-title">Acerca De</h5>
				<p class="minisite__about--info">Ubicado en la costa oeste de Canadá, al sur de la provincia de Columbia Británica y sólo tres horas en auto de la frontera con Estados Unidos. Las montañas de Whistler y Blackcomb son parte de la cordillera Pacifica, la cual recorre desde Alaska hasta México con espectaculares montañas. Debido a la proximidad con el océano y las abundantes precipitaciones, se llegan a tener más de 9 metros de altura de nieve por temporada, además de contar con las temperaturas más moderadas de Canadá. Whistler se encuentra a tan sólo dos horas de Vancouver el trayecto entre ambos sigue la autopista 99 cuyo camino recorre el increíbles Howe Sound hasta llegar al pueblo de Squamish. Estación de esquí más grande de toda Norte América, con un 60% más de zona de Ski por lo cual pueden pasar dos semanas y no recorrerás la misma pista.</p>
			</div>
		</div>
		<div class="col-lg-6 no-space">
			<div class="minisite__about--activities">
				<h5 class="minisite__about--lightgrey-title">Actividades</h5>
				<ul class="minisite__about--icons">
					<li>
						<img src="images/whistler/actividades/actv1.png" alt="Actividades">
						<span>Ski</span>
					</li>
					<li>
						<img src="images/whistler/actividades/actv2.png" alt="Actividades">
						<span>Snowboard</span>
					</li>
					<li>
						<img src="images/whistler/actividades/actv3.png" alt="Actividades">
						<span>Heli-Skiing</span>
					</li>
					<li>
						<img src="images/whistler/actividades/actv4.png" alt="Actividades">
						<span>Cat-Skiing</span>
					</li>
					<li>
						<img src="images/whistler/actividades/actv5.png" alt="Actividades">
						<span>Tube Park</span>
					</li>
				</ul>
				<ul class="minisite__about--icons">
					<li>
						<img src="images/whistler/actividades/actv6.png" alt="Actividades">
						<span>Dog Skiing</span>
					</li>
					<li>
						<img src="images/whistler/actividades/actv7.png" alt="Actividades">
						<span>Bungee de Invierno</span>
					</li>
					<li>
						<img src="images/whistler/actividades/actv8.png" alt="Actividades">
						<span>Tours de Hockey</span>
					</li>
					<li>
						<img src="images/whistler/actividades/actv9.png" alt="Actividades">
						<span>Escalada en Hielo</span>
					</li>
					<li>
						<img src="images/whistler/actividades/actv10.png" alt="Actividades">
						<span>Snowshoeing</span>
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
			<img src="images/whistler/ideal1.jpg" alt="Ideal">
				<figcaption class="minisite__for--item-name">
					<h6>Parejas</h6>
				</figcaption>
			</figure>
		</div>
		<div class="col-lg-3 no-space">
			<figure class="minisite__for--item">
			<img src="images/whistler/ideal2.jpg" alt="Ideal">
				<figcaption class="minisite__for--item-name">
					<h6>Deportistas</h6>
				</figcaption>
			</figure>
		</div>		
		<div class="col-lg-3 no-space">
			<figure class="minisite__for--item">
			<img src="images/whistler/ideal3.jpg" alt="Ideal">
				<figcaption class="minisite__for--item-name">
					<h6>Familias</h6>
				</figcaption>
			</figure>
		</div>			
		<div class="col-lg-3 no-space">
			<figure class="minisite__for--item">
			<img src="images/whistler/ideal4.jpg" alt="Ideal">
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
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				<li data-target="#carousel-example-generic" data-slide-to="4"></li>
			</ol>

  		<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
    		<div class="item active">
      		<img src="images/whistler/slideh1.jpg" alt="Carousel-item">
      			<div class="container">
	      			<div class="carousel-caption">
	        			<h2 class="minisites__hotels--name">Fairmont Chateaux</h2>
	      			</div>
      			</div>
    		</div>
    		<div class="item">
      		<img src="images/whistler/slideh2.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
      					<h2 class="minisites__hotels--name">Four Seasons</h2>
      				</div>
        		</div>
    		</div>
    		<div class="item">
      		<img src="images/whistler/slideh3.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
      					<h2 class="minisites__hotels--name">Listel Whistler Hotel</h2>
      				</div>
        		</div>
    		</div>
    		<div class="item">
      		<img src="images/whistler/slideh4.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
      					<h2 class="minisites__hotels--name">The Westin Resort & Spa</h2>
      				</div>
        		</div>
    		</div>
    		<div class="item">
      		<img src="images/whistler/slideh5.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
      					<h2 class="minisites__hotels--name">Whistler Pinnacle Hotel</h2>
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
				<span class="minisite__mountain--details">2,438.4 M.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Elevación de la cumbre</span>
			</li>
			<li>
				<span class="minisite__mountain--details">2,182 M.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Elevación de la base</span>
			</li>
			<li>
				<span class="minisite__mountain--details">1,530 M.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Vertical</span>
			</li>
			<li>
				<span class="minisite__mountain--details">115</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Número de pistas</span>
			</li>
			<li>
				<span class="minisite__mountain--details">10.11 ha.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Terreno esquiable</span>
			</li>
			<li>
				<span class="minisite__mountain--details">11 km</span>
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
			<a href="images/whistler/info-montana.pdf" download="infoMontanaWhistler"><h5 class="minisite__mountain--download">Descargar Información de la Montaña</h5></a>
		</div>
	</div>
	<div class="minisite__mountain-icons">
		<div class="container">
			<div class="col-lg-4">
				<article class="minisite__mountain-icons--item">
					<img src="images/aspen/ic-montana1.jpg" alt="Terreno Principiantes">
					<span class="minisite__mountain-icons-x">18%</span>
					<span class="minisite__mountain-icons-t">Terreno para <br> principiantes</span>
				</article>
			</div>
			<div class="col-lg-4">
				<article class="minisite__mountain-icons--item">
					<img src="images/aspen/ic-montana2.jpg" alt="Terreno Intermedios">
					<span class="minisite__mountain-icons-x">55%</span>
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
				<h6 class="minisite__resort--item-name"><a href="http://www.whistler.com">www.whistler.com</a></h6>
			</article>
		</div>
		<div class="col-lg-3">
			<article class="minisite__resort--item">
				<figure class="minisite__resort--icon">
					<img src="images/aspen/ic-datos2.png" alt="Website">
				</figure>
				<h6 class="minisite__resort--item-name">Whistler, Columbia Británica <br> V0N, Canadá</h6>
			</article>
		</div>
		<div class="col-lg-3">
			<article class="minisite__resort--item">
				<figure class="minisite__resort--icon">
					<img src="images/aspen/ic-datos3.png" alt="Website">
				</figure>
				<h6 class="minisite__resort--item-name">Phone: <br>+52 558 525 6176</h6>
			</article>
		</div>
		<div class="col-lg-3">
			<article class="minisite__resort--item">
				<figure class="minisite__resort--icon">
					<img src="images/aspen/ic-datos4.png" alt="Website">
				</figure>
				<h6 class="minisite__resort--item-name">--</h6>
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