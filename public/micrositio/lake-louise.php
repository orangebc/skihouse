<?php include('html/header.php'); ?>

<!-- sliderMinisite -->
<section class="minisite__slider">
	<!-- carousel -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  		<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
    		<div class="item active">
      		<img src="images/lakelouise/slider1.jpg" alt="Carousel-item">
      			<div class="container">
	      			<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">Todo lo <br> espectacular <br> <small>está en Lake Louise</small></h1>
						<h6 class="minisite__weather"></h6>
	      			</div>
      			</div>
    		</div>
    		<div class="item">
      		<img src="images/lakelouise/slider2.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">Todo lo <br> espectacular <br> <small>está en Lake Louise</small></h1>
						<h6 class="minisite__weather"></h6>
      				</div>
        		</div>
    		</div>
    		<div class="item">
      		<img src="images/lakelouise/slider3.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">Todo lo <br> espectacular <br> <small>está en Lake Louise</small></h1>
						<h6 class="minisite__weather"></h6>
      				</div>
        		</div>
    		</div>
    		<div class="item">
      		<img src="images/lakelouise/slider4.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
						<h1 class="generic__title--white minisite__slider--caption">Todo lo <br> espectacular <br> <small>está en Lake Louise</small></h1>
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
    location: 'Lake Louise, AB, Canada',
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
<!-- lakeLouiseMinisite -->
	<div class="text-center">
        <div class="red__section"></div>
    	<h2 class="red__section--titleSmall">Lake Louise</h2>
    </div>
<!-- /lakeLouiseMinisite -->
<!-- minisiteAbout -->
<section class="minisite___about">
	<div class="container-fluid no-space">
		<div class="col-lg-6 no-space">
			<div class="minisite__about--content">
				<h5 class="minisite__about--darkgrey-title">Acerca De</h5>
				<p class="minisite__about--info">El Parque Nacional Banff es un territorio vasto e indómito que quiere ser explorado. Los animales salvajes rondan por los valles, las águilas vuelan sobre las Montañas Rocallosas canadienses y los arroyos de agua pura fluyen hacia los ríos desde 1,000 glaciares. Hace cientos de años los primeros que descubrieron su belleza fueron los nativos, seguidos rápidamente por exploradores, cartógrafos y alpinistas. Incluso las celebridades más extravagantes o miembros de la realeza han aparecido por ahí. Y ahora usted.</p>
				<p class="minisite__about--info" style="padding-top: 0;">Escale las mismas montañas, reme en los ríos e inhale el aire. Eso es alpinismo puro. La gran cantidad de aventuras, tanto bajo techo como al aire libre, son tan difíciles de contar como los picos que se extienden en la distancia. Esquíe, vaya de compras, disfrute de un spa, aprenda la historia del lugar en museos y galerías de arte, o pasee por uno o dos senderos de excursionismo. En Banff y en Lake Louise las posibilidades son ilimitadas.</p>
			</div>
		</div>
		<div class="col-lg-6 no-space">
			<div class="minisite__about--activities">
				<h5 class="minisite__about--lightgrey-title">Actividades</h5>
				<ul class="minisite__about--icons">
					<li>
						<img src="images/lakelouise/actividades/actv1.png" alt="Actividades">
						<span>Cross country ski</span>
					</li>
					<li>
						<img src="images/lakelouise/actividades/actv2.png" alt="Actividades">
						<span>Dog sledding</span>
					</li>
					<li>
						<img src="images/lakelouise/actividades/actv3.png" alt="Actividades">
						<span>Tubing</span>
					</li>
					<li>
						<img src="images/lakelouise/actividades/actv4.png" alt="Actividades">
						<span>Snowshoeing</span>
					</li>
					<li>
						<img src="images/lakelouise/actividades/actv5.png" alt="Actividades">
						<span>Snowmobiling</span>
					</li>
				</ul>
				<ul class="minisite__about--icons">
					<li>
						<img src="images/lakelouise/actividades/actv6.png" alt="Actividades">
						<span>Gondolas</span>
					</li>
					<li>
						<img src="images/lakelouise/actividades/actv7.png" alt="Actividades">
						<span>Ice Fishing</span>
					</li>
					<li>
						<img src="images/lakelouise/actividades/actv8.png" alt="Actividades">
						<span>Ice skating</span>
					</li>
					<li>
						<img src="images/lakelouise/actividades/actv9.png" alt="Actividades">
						<span>Hot spring</span>
					</li>
					<li>
						<img src="images/lakelouise/actividades/actv10.png" alt="Actividades">
						<span>Sightseeing & tours</span>
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
			<img src="images/lakelouise/ideal1.jpg" alt="Ideal">
				<figcaption class="minisite__for--item-name">
					<h6>Parejas</h6>
				</figcaption>
			</figure>
		</div>
		<div class="col-lg-3 no-space">
			<figure class="minisite__for--item">
			<img src="images/lakelouise/ideal2.jpg" alt="Ideal">
				<figcaption class="minisite__for--item-name">
					<h6>Familias</h6>
				</figcaption>
			</figure>
		</div>		
		<div class="col-lg-3 no-space">
			<figure class="minisite__for--item">
			<img src="images/lakelouise/ideal3.jpg" alt="Ideal">
				<figcaption class="minisite__for--item-name">
					<h6>Jóvenes</h6>
				</figcaption>
			</figure>
		</div>			
		<div class="col-lg-3 no-space">
			<figure class="minisite__for--item">
			<img src="images/lakelouise/ideal4.jpg" alt="Ideal">
				<figcaption class="minisite__for--item-name">
					<h6>Deportistas</h6>
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
			</ol>

  		<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
    		<div class="item active">
      		<img src="images/marmot/slideh1.jpg" alt="Carousel-item">
      			<div class="container">
	      			<div class="carousel-caption">
	        			<h2 class="minisites__hotels--name">Deer Lodge</h2>
	      			</div>
      			</div>
    		</div>
    		<div class="item">
      		<img src="images/marmot/slideh2.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
      					<h2 class="minisites__hotels--name">Deer Lodge</h2>
      				</div>
        		</div>
    		</div>
    		<div class="item">
      		<img src="images/marmot/slideh3.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
      					<h2 class="minisites__hotels--name">Moraine Lake Lodge</h2>
      				</div>
        		</div>
    		</div>
    		<div class="item">
      		<img src="images/marmot/slideh4.jpg" alt="Carousel-item">
      			<div class="container">
      				<div class="carousel-caption">
      					<h2 class="minisites__hotels--name">The Fairmont Chateau Lake Louise</h2>
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
				<span class="minisite__mountain--details">3,529.98 M.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Elevación de la cumbre</span>
			</li>
			<li>
				<span class="minisite__mountain--details">1,382.88 M.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Elevación de la base</span>
			</li>
			<li>
				<span class="minisite__mountain--details">820 M.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Vertical</span>
			</li>
			<li>
				<span class="minisite__mountain--details">115</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Número de pistas</span>
			</li>
			<li>
				<span class="minisite__mountain--details">3,135 ha.</span>
				<hr class="minisite__mountain--separator">
				<span class="minisite__mountain--data">Terreno esquiable</span>
			</li>
			<li>
				<span class="minisite__mountain--details">6 km</span>
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
			<a href="images/lakelouise/info-montana.pdf" download="infoMontanaLakeLouise"><h5 class="minisite__mountain--download">Descargar Información de la Montaña</h5></a>
		</div>
	</div>
	<div class="minisite__mountain-icons">
		<div class="container">
			<div class="col-lg-4">
				<article class="minisite__mountain-icons--item">
					<img src="images/aspen/ic-montana1.jpg" alt="Terreno Principiantes">
					<span class="minisite__mountain-icons-x">25%</span>
					<span class="minisite__mountain-icons-t">Terreno para <br> principiantes</span>
				</article>
			</div>
			<div class="col-lg-4">
				<article class="minisite__mountain-icons--item">
					<img src="images/aspen/ic-montana2.jpg" alt="Terreno Intermedios">
					<span class="minisite__mountain-icons-x">45%</span>
					<span class="minisite__mountain-icons-t">Terreno para <br> intermedios</span>
				</article>
			</div>
			<div class="col-lg-4">
				<article class="minisite__mountain-icons--item">
					<img src="images/aspen/ic-montana3.jpg" alt="Terreno avanzados">
					<span class="minisite__mountain-icons-x">30%</span>
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
				<h6 class="minisite__resort--item-name"><a href="http://www.banfflakelouise.com ">www.banfflakelouise.com </a></h6>
			</article>
		</div>
		<div class="col-lg-3">
			<article class="minisite__resort--item">
				<figure class="minisite__resort--icon">
					<img src="images/aspen/ic-datos2.png" alt="Website">
				</figure>
				<h6 class="minisite__resort--item-name">224 Banff Ave AB <br> JT1L 1B3 Canada</h6>
			</article>
		</div>
		<div class="col-lg-3">
			<article class="minisite__resort--item">
				<figure class="minisite__resort--icon">
					<img src="images/aspen/ic-datos3.png" alt="Website">
				</figure>
				<h6 class="minisite__resort--item-name">Phone: <br>+1 403-762-8421</h6>
			</article>
		</div>
		<div class="col-lg-3">
			<article class="minisite__resort--item">
				<figure class="minisite__resort--icon">
					<img src="images/aspen/ic-datos4.png" alt="Website">
				</figure>
				<h6 class="minisite__resort--item-name">info@banfflakelouise.com</h6>
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