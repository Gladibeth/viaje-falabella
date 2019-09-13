<?php get_header(); ?>
<?php $currentlang = get_bloginfo('language'); ?>
<?php if($currentlang=="es-ES"){
// español-->
	$cotizar ='Cotizar Servicios';
	$cita = 'Programar Cita';


// end español -->
}else{
// english -->
	$cotizar ='Quote Service';
	$cita = 'Schedule Appointment';

// end English -->
}?>
<?php $currentlang = get_bloginfo('language'); ?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
	<section id="inicio">
		<?php $post_thumbnail_id = get_post_thumbnail_id();
		$url_img = wp_get_attachment_url( $post_thumbnail_id);?>





		<!--slider home-->
		<div id="bs4-slide-carousel" class="carousel slide carousel-fade" data-ride="carousel" >
			<?php 
			$gallery = 0;
			$images = get_field('slider_home');
			if( $images ): ?>
			<div class="carousel-inner-home inicio-img">
				<?php foreach( $images as $image ): ?>
					<?php $gallery++; ?>
					<?php if ($gallery == 1): ?>
						<div class="carousel-item active">
							<img class="d-block w-100" src="<?php echo $image['sizes']['large']; ?>" alt="Slide One">
						</div>
					<?php else: ?>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo $image['sizes']['large']; ?>" alt="Slide One">
						</div>
					<?php endif; ?>

				<?php endforeach; ?>

			</div>
		<?php endif; ?>
		<a class="carousel-control-prev" href="#bs4-slide-carousel" role="button" data-slide="prev">

			<span class="carousel-control-prev-icon" aria-hidden="true"></span>

			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#bs4-slide-carousel" role="button" data-slide="next">

			<span class="carousel-control-next-icon" aria-hidden="true"></span>

			<span class="sr-only">Next</span>
		</a> 
	</div>
	<style>
	.w-100{width:100%!important;height:100vh!important;object-fit:cover!important;background-size:center!important}
	
</style>


<!--slider home-->
	<!--<div class="inicio-img" style="background-image: url(<?php echo $url_img; ?>);
		">-->
		<div class="mask-inicio-img"></div>
		<div class="container">
			<div class="texto-inicio wow zoomIn animated">
				<?php the_content(); ?>
			</div>
			<div class="opciones fadeInUp animated" style="">
				<ul>
					<li>
						<a href="<?php echo bloginfo('url').'/index.php/index.php/ayuda/#tab1'; ?> " class="color-icon">
							<div class="imagen-opciones">
								<div class="box-icon">
									<center>
										<svg
										xmlns:dc="http://purl.org/dc/elements/1.1/"
										xmlns:cc="http://creativecommons.org/ns#"
										width="40%"
										height="50px"
										viewBox="0 0 285.89118 301.63502"
										id="svg4816"
										version="1.1"
										inkscape:version="0.91 r13725"
										sodipodi:docname="icono-1.svg">
										<metadata
										id="metadata7">
									</metadata>
									<defs
									id="defs5" />
									<path
									style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:#000000;stroke-width:1.9902581;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:0"
									d="m 120.21185,18.815423 c -3.74569,0 -6.7609,3.015214 -6.7609,6.760906 l 0,17.798552 A 111.0473,109.55673 0 0 0 85.960186,54.484072 L 71.297645,41.051689 c -2.761917,-2.530224 -7.022885,-2.344577 -9.553109,0.41734 L 33.983485,71.773866 c -2.530224,2.761916 -2.344577,7.022884 0.41734,9.553108 l 12.216134,11.190671 a 111.0473,109.55673 0 0 0 -12.58379,29.444315 l -11.975667,0.12719 c -3.74548,0.04 -6.727374,3.08896 -6.687375,6.83444 l 0.439201,41.09605 c 0.04,3.74548 3.086969,6.72738 6.832449,6.68738 L 34.1067,176.58381 a 111.0473,109.55673 0 0 0 12.665271,29.57349 l -11.673592,13.73049 c -2.426454,2.85351 -2.082429,7.10479 0.771085,9.53125 l 31.30844,26.62429 c 2.853515,2.42645 7.104793,2.08243 9.531248,-0.77109 l 9.501438,-11.17477 a 111.0473,109.55673 0 0 0 28.59572,11.3755 l 0.36965,17.26197 c 0.0803,3.74484 3.16115,6.69411 6.90597,6.61384 l 41.08811,-0.88039 c 3.74483,-0.0803 6.69611,-3.15916 6.61584,-6.90399 l -0.35375,-16.50083 a 111.0473,109.55673 0 0 0 27.29204,-10.9343 l 9.97442,11.77694 c 2.42073,2.85837 6.6709,3.20969 9.52927,0.78897 l 31.36209,-26.56071 c 2.85838,-2.42073 3.21169,-6.67088 0.79095,-9.52926 l -12.19228,-14.39624 a 111.0473,109.55673 0 0 0 12.78452,-29.75831 l 18.07876,-0.4869 c 3.74434,-0.10064 6.67876,-3.19543 6.57807,-6.93977 l -1.10496,-41.08413 c -0.10063,-3.74435 -3.19542,-6.67677 -6.93976,-6.57609 l -16.72142,0.44914 A 111.0473,109.55673 0 0 0 235.49902,91.166259 l 12.4566,-12.088945 c 2.68801,-2.608603 2.7517,-6.873047 0.14309,-9.561058 L 219.47715,40.024238 c -2.60861,-2.68801 -6.87305,-2.751693 -9.56107,-0.143088 L 195.6371,53.736834 A 111.0473,109.55673 0 0 0 168.07081,42.983376 l 0,-17.407047 c 0,-3.745692 -3.01521,-6.760906 -6.76091,-6.760906 l -41.09805,0 z m 22.10511,55.299522 a 75.48472,73.373839 0 0 1 75.48486,73.374315 75.48472,73.373839 0 0 1 -11.89816,39.53002 c 0.14458,-0.25488 0.29374,-0.50412 0.43523,-0.76313 l -1.19638,-1.62961 -31.35415,-32.5386 3.21749,-23.68106 -31.03617,-30.575107 -26.66802,4.137627 20.69211,23.45052 -3.45001,15.8629 -19.08038,2.98695 -23.219992,-20.69012 -1.37921,33.56605 27.357622,23.67907 32.87445,-1.3792 26.89855,27.81669 2.75246,2.08869 a 75.48472,73.373839 0 0 1 -40.4303,11.51063 75.48472,73.373839 0 0 1 -75.484852,-73.37232 75.48472,73.373839 0 0 1 75.484852,-73.374315 z"
									id="rect4236"
									inkscape:connector-curvature="0" />
								</svg>
							</center>
						</div>
						<div class="item-icon">
							<p><?php echo $cotizar; ?></p>
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="<?php echo bloginfo('url').'/index.php/index.php/ayuda/#tab1'; ?>" class="color-icon" >
					<div class="imagen-opciones">

						<div class="box-icon">
							<center>
								<svg
								xmlns:svg="http://www.w3.org/2000/svg"
								xmlns="http://www.w3.org/2000/svg"
								width="40%"
								height="50px"
								viewBox="0 0 285.89118 301.63502"
								id="svg2"
								version="1.1">
								<defs id="defs4818" />
								<metadata id="metadata4821"></metadata>
								<g
								inkscape:label="Capa 1"
								inkscape:groupmode="layer"
								id="layer1"
								transform="translate(-237.05439,-450.11613)">
								<path
								style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:#000000;stroke-width:1.07051075;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:0"
								d="M 84.316406 31.681641 A 17.837441 19.608535 0 0 0 66.429688 51.179688 A 17.837441 19.608535 0 0 0 69.037109 61.470703 L 54.121094 61.470703 C 44.606114 61.470703 36.947266 69.131474 36.947266 78.646484 L 36.947266 236.08398 C 36.947266 245.599 44.606114 253.25977 54.121094 253.25977 L 219.43164 253.25977 C 228.94667 253.25977 236.60742 245.599 236.60742 236.08398 L 236.60742 78.646484 C 236.60742 69.131474 228.94667 61.470703 219.43164 61.470703 L 205.6875 61.470703 A 17.837441 19.608535 0 0 0 208.30273 51.515625 L 208.30469 51.289062 A 17.837441 19.608535 0 0 0 190.51758 31.681641 A 17.837441 19.608535 0 0 0 172.62891 51.179688 A 17.837441 19.608535 0 0 0 175.23633 61.470703 L 99.488281 61.470703 A 17.837441 19.608535 0 0 0 102.10352 51.515625 L 102.10547 51.289062 A 17.837441 19.608535 0 0 0 84.316406 31.681641 z M 69.119141 106.06836 L 204.41602 106.06836 C 207.58768 106.06836 210.14062 108.6213 210.14062 111.79297 L 210.14062 220.77734 C 210.14062 223.94901 207.58768 226.50195 204.41602 226.50195 L 69.119141 226.50195 C 65.947481 226.50195 63.392578 223.94901 63.392578 220.77734 L 63.392578 111.79297 C 63.392578 108.6213 65.947481 106.06836 69.119141 106.06836 z M 161.30859 123.81445 C 160.25595 123.81445 159.4082 124.6622 159.4082 125.71484 L 159.4082 161.88672 C 159.4082 162.93936 160.25595 163.78711 161.30859 163.78711 L 194.57422 163.78711 C 195.62686 163.78711 196.47461 162.93936 196.47461 161.88672 L 196.47461 125.71484 C 196.47461 124.6622 195.62686 123.81445 194.57422 123.81445 L 161.30859 123.81445 z M 78.152344 123.93555 C 77.099699 123.93555 76.251953 124.78329 76.251953 125.83594 L 76.251953 162.00781 C 76.251953 163.06046 77.099699 163.90625 78.152344 163.90625 L 111.41797 163.90625 C 112.47061 163.90625 113.31836 163.06046 113.31836 162.00781 L 113.31836 125.83594 C 113.31836 124.78329 112.47061 123.93555 111.41797 123.93555 L 78.152344 123.93555 z M 120.66016 123.93555 C 119.60751 123.93555 118.75977 124.78329 118.75977 125.83594 L 118.75977 162.00781 C 118.75977 163.06046 119.60751 163.90625 120.66016 163.90625 L 153.92773 163.90625 C 154.98038 163.90625 155.82812 163.06046 155.82812 162.00781 L 155.82812 125.83594 C 155.82812 124.78329 154.98038 123.93555 153.92773 123.93555 L 120.66016 123.93555 z M 78.152344 169.02148 C 77.099699 169.02148 76.251953 169.86728 76.251953 170.91992 L 76.251953 207.0918 C 76.251953 208.14444 77.099699 208.99219 78.152344 208.99219 L 111.41797 208.99219 C 112.47061 208.99219 113.31836 208.14444 113.31836 207.0918 L 113.31836 170.91992 C 113.31836 169.86728 112.47061 169.02148 111.41797 169.02148 L 78.152344 169.02148 z M 119.23047 169.02148 C 118.17782 169.02148 117.33008 169.86728 117.33008 170.91992 L 117.33008 207.0918 C 117.33008 208.14444 118.17782 208.99219 119.23047 208.99219 L 152.49609 208.99219 C 153.54874 208.99219 154.39648 208.14444 154.39648 207.0918 L 154.39648 170.91992 C 154.39648 169.86728 153.54874 169.02148 152.49609 169.02148 L 119.23047 169.02148 z M 161.30859 169.02148 C 160.25595 169.02148 159.4082 169.86728 159.4082 170.91992 L 159.4082 207.0918 C 159.4082 208.14444 160.25595 208.99219 161.30859 208.99219 L 194.57422 208.99219 C 195.62686 208.99219 196.47461 208.14444 196.47461 207.0918 L 196.47461 170.91992 C 196.47461 169.86728 195.62686 169.02148 194.57422 169.02148 L 161.30859 169.02148 z "
								transform="translate(237.05439,450.11613)"
								id="path4386" />
							</g>
						</svg>
					</center>
				</div>
			</div>
			<div class="item-icon">
				<p><?php echo $cita; ?></p>
			</div>
		</a>
	</li>
	<li  class="color-icon">
		<a href="<?php echo bloginfo('url').'/index.php/index.php/ayuda/#tab3'; ?>" class="color-icon" >
			<div class="imagen-opciones"  class="color-icon">

				<div class="box-icon">
					<center>
						<svg
						xmlns:dc="http://purl.org/dc/elements/1.1/"
						xmlns:cc="http://creativecommons.org/ns#"
						width="40%"
						height="50px"
						viewBox="0 0 285.89118 301.63502"
						id="svg4816"
						version="1.1">
						<defs
						id="defs4818" />

						<metadata
						id="metadata4821">

					</metadata>
					<g
					inkscape:label="Capa 1"
					inkscape:groupmode="layer"
					id="layer1"
					transform="translate(-237.05439,-450.11613)">
					<path
					style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.44827858px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:0"
					d="m 383.59992,494.54647 c -15.28205,-0.0771 -30.3568,1.50145 -45.39521,3.37346 -24.03122,10.25075 -40.43119,23.77182 -56.15128,37.58449 -10.13428,19.26448 -16.37217,41.63305 -21.24769,62.36325 a 16.528286,17.433946 0 0 0 -8.639,15.19771 16.528286,17.433946 0 0 0 16.38668,17.53277 16.528286,17.433946 0 0 0 16.66862,-17.23334 l 0.002,-0.2005 a 16.528286,17.433946 0 0 0 -6.9562,-14.19694 c 4.09104,-15.77634 8.35963,-31.6416 16.46549,-49.42535 12.90501,-11.80586 28.23932,-23.59244 51.16944,-35.32032 16.20003,-2.75363 36.03057,-3.43321 60.67957,-1.35885 26.3105,13.53496 40.19432,28.31278 54.79243,43.01898 9.54905,14.95311 13.62318,29.22215 16.22647,43.30704 a 16.528286,17.433946 0 0 0 -6.67429,13.87651 16.528286,17.433946 0 0 0 16.38669,17.53277 16.528286,17.433946 0 0 0 16.66861,-17.23334 l 0.002,-0.2005 a 16.528286,17.433946 0 0 0 -8.64864,-15.3194 l -6.33894,-33.3591 c -16.00756,-26.30267 -41.28631,-50.60148 -69.28368,-66.11321 -12.21662,-2.70481 -24.22753,-3.76614 -36.1136,-3.82613 z m -38.15009,42.76946 c -19.59044,9.8769 -34.13762,25.30096 -41.66014,48.4526 0,0 -11.87449,5.25607 -17.76129,4.80324 l -0.9053,42.85789 13.04562,7.12255 c 13.83648,34.01492 44.62475,62.64778 76.37547,77.89542 l 8.82984,-0.33971 c 34.23315,-10.40602 68.57743,-54.59363 71.20712,-75.2828 l 0.0166,-0.077 17.53455,-8.31592 -3.57748,-41.59623 -15.33167,-4.80323 c -15.24508,-37.269 -30.49051,-39.37552 -45.73578,-50.71681 l -62.03755,0 z m 12.74004,53.63757 -8.32552,27.21717 39.06416,-19.53251 c 5.02355,11.18801 11.30644,19.01726 18.89158,23.3744 l 34.58228,2.24139 c -6.40488,12.10335 -9.69013,24.83134 -11.84787,37.78411 l -38.16496,-1.78961 c -2.50781,-6.35947 -8.38595,-10.5131 -14.9158,-10.5398 -8.94123,-0.0267 -16.21724,7.58256 -16.26848,17.01357 -0.0511,9.43139 7.14247,17.12815 16.08375,17.20882 6.15576,0.0467 11.80626,-3.58564 14.58833,-9.37795 l 24.26832,0.29243 -37.1432,28.81766 c -22.87965,-12.47536 -44.52697,-27.76712 -61.4781,-53.79343 -5.32836,-13.44835 -6.12039,-26.89671 -6.40374,-40.34508 11.16953,-7.01238 26.50994,-13.26603 47.06925,-18.57117 z"
					id="path4469"
					inkscape:connector-curvature="0" />
				</g>
			</svg>

		</center>
	</div>

</div>
<div class="item-icon">
	<?php if($currentlang=="es-ES"):?>
		<!-- español-->
		<p>Asistencia</p>
		<p>Inmediata</p>
		<!-- end español -->
	<?php else: ?>
		<!-- english -->
		<p>Immediate</p>
		<p>Assistance</p>
		<!-- end English -->
	<?php endif; ?>
</div>

</a>
</li>
</ul>
<a class="link-sales" href="<?php echo bloginfo('url').'/index.php/index.php/ayuda/#tab3'; ?>">
	<?php if($currentlang=="es-ES"):?>
		<!-- español-->
		Contactar a un asesor de ventas
		
		<!-- end español -->
	<?php else: ?>
		<!-- english -->
		Contact an agent
		<!-- end English -->
	<?php endif; ?>
</a>
</div>

</div>

</div>

</section>
<?php endwhile; endif; ?>
<!--************************************************buscador************************************************-->
<section id="buscador" class=" wow fadeInUp animated" data-wow-duration="2s"  style="">
	<div class="container">
		<div style="width: 100%;display: flex;/*! align-items: center; */justify-content: center;">
			<div class="buscador" style="width: 700px;height: 100%;background: white; border-radius: 1%;">
				<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/02_buscador_inteligente.png" alt="" class="lazy img-responsive">

				<div class="buscador-txt">
					<?php if($currentlang=="es-ES"):?>
						<?php $solution = 'Solucionar'; ?>
						<!-- español-->
						<h4>Buscador Inteligente Astivik</h4>
						<h1>¿en qué te </h1>
						<h1>ayudamos?</h1>
						<?php $question = 'Introduzca una pregunta'; ?>
						<!-- end español -->
					<?php else: ?>
						<!-- english -->
						<?php $solution = 'Solve'; ?>
						<h4>Smart Search</h4>
						<h1>What can we</h1>
						<h1>Help you with?</h1>
						<?php $question = 'Enter a question'; ?>
						<!-- end English -->
					<?php endif; ?>
					<div class="buscador" style="text-align: left;">
						<div id="div">
							<select class="js-example-basic-single" name="state"onchange="window.location.href=this.value;">
								<option selected disabled><?php echo $question; ?></option>
								<?php $the_query = new WP_Query('post_type=search&order=ASC'); ?>
								<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
									<option value="<?php the_permalink(); ?>"><?php the_title();?></option>
								<?php endwhile; endif; ?>

							</select>
						</div>
					</div>

				</div>
			</div>
		</div>

	</div>
</section>
<!--************************************************END buscador************************************************-->
<!--************************************************INFORMACION************************************************-->
<section id="info">
	<div class="container">
		<?php if($currentlang=="es-ES"):?>
			<!-- español-->
			<div class="info">
				<div class="row">
					<div class="col-md-12">
						<p class="wow fadeInUp animated" style="visibility: visible;-webkit-animation-duration: 4s; -moz-animation-duration: 4s; animation-duration: 4s;">Hoy somos uno de los astilleros más importantes y seguros del caribe </p>
						<h3 class="infor wow fadeInUp animated" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;"><span>capacidad max. de levante de</span> 4.000 toneladas</h3>
					</div>
				</div>
				<div class="container" >
					<div class="row">
						<div class="col-sm-4  col-sm-auto linea-inicio counters-item">
							<h4  data-speed="3000" data-to="520">4 diques </h4>
							<p>secos</p>
						</div>
						<div class="col-sm-4  col-sm-auto linea-inicio">
							<h4>+46 años</h4>
							<p>de experiencia</p>
						</div>
						<div class="col-sm-4  col-sm-auto">
							<h4>+600 embarcaciones</h4>
							<p>atendidas en tan solo 3 años</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end español -->
		<?php else: ?>
			<!-- english -->
			<div class="info">
				<div class="row">
					<div class="col-md-12">
						<p class="wow fadeInUp animated" style="visibility: visible;-webkit-animation-duration: 4s; -moz-animation-duration: 4s; animation-duration: 4s;">WE ARE ONE OF THE SAFEST AND MOST IMPORTANT SHIPYARDS IN THE CARIBBEAN REGION.</p>
						<h3 class="infor wow fadeInUp animated" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;"><span>Maximum Lifting Capacity</span> 4.000 tons</h3>
					</div>
				</div>
				<div class="container" >
					<div class="row">
						<div class="col-sm-4  col-sm-auto linea-inicio counters-item">
							<h4  data-speed="3000" data-to="520">4 dry</h4>
							<p>docks</p>
						</div>
						<div class="col-sm-4  col-sm-auto linea-inicio">
							<h4>+46 years</h4>
							<p>of experience</p>
						</div>
						<div class="col-sm-4  col-sm-auto">
							<h4>+600 vessels</h4>
							<p>attended in the last three years</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end English -->
		<?php endif; ?>
	</div>
</section>
<style>

</style>
<!--************************************************INFORMACION************************************************-->

<!--************************************************SERVICIO************************************************-->
<?php include('render_servicios.php'); ?>
<!--************************************************SERVIVIO END************************************************-->

<!--************************************************BARCOS************************************************-->
<?php include('render_barcos.php'); ?>
<!--************************************************bARCOS END************************************************-->

<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
	<!--cita-->

	<section id="cita"  style="background-image: linear-gradient(#fff,transparent),url(<?php echo the_field('imagen_embarcacion'); ?>);
	height: 600px;
	background-position: bottom;
	background-size: cover;">
	<div class="cita  wow zoomIn animated ">
		<?php echo the_field('descripcion_embarcacion'); ?>

	</div>
</section>
<!--************************************************CITA END************************************************-->

<!--************************************************OTRA SECCION************************************************-->
<section id="informacion">
	<div class="container-fluid">
		<?php if($currentlang=="es-ES"):?>
			<!-- español-->
			<div class="row">
				<div class="col-md-6">

					<img data-srcset="<?php echo the_field('imagen_control_ambiental'); ?>" alt="Control Ambiental" class="lazy img-responsive">

					<a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad'; ?>"><div class="mask-informacion">
					</div></a>
					<div class="texto-informacion wow fadeInUp animated"  style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/14_icon_ambiente_btn.png" alt="" class="lazy img-responsive">
						<p>Protegemos nuestro entorno</p>
						<h3>Control ambiental</h3>
						<a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad'; ?>">CONOCER MÁS</a>
					</div>
				</div>
				<div class="col-md-6">

					<img data-srcset="<?php echo the_field('imagen_seguridad_responsabilidad'); ?>" alt="Seguridad y Responsabilidad" class="lazy img-responsive">
					<a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad'; ?>"><div class="mask-informacion"></div></a>
					<div class="texto-informacion wow fadeInUp animated" style="visibility: visible;-webkit-animation-duration: 5s; -moz-animation-duration: 5s; animation-duration: 5s;">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/15_icon_seguridad_btn.png" alt="" class="lazy img-responsive">
						<p>Comprometidos con nuestra gente </p>
						<h3>seguridad y responsabilidad</h3>
						<a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad'; ?>">CONOCER MÁS</a>
					</div>
				</div>
			</div>
			<!-- end español -->
		<?php else: ?>
			<!-- english -->
			<div class="row">
				<div class="col-md-6">
					<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/seguridad_btn.jpeg" alt="" class="lazy img-responsive">

					<a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad'; ?>"><div class="mask-informacion">
					</div></a>
					<div class="texto-informacion wow fadeInUp animated"  style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/14_icon_ambiente_btn.png" alt="" class="lazy img-responsive">
						<p>We protect our environment</p>
						<h3>Environmental Control</h3>
						<a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad'; ?>">KNOW MORE</a>
					</div>
				</div>
				<div class="col-md-6">

					<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/medio_ambiente_btn.jpeg" alt="" class="lazy img-responsive">
					<a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad'; ?>"><div class="mask-informacion"></div></a>
					<div class="texto-informacion wow fadeInUp animated" style="visibility: visible;-webkit-animation-duration: 5s; -moz-animation-duration: 5s; animation-duration: 5s;">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/15_icon_seguridad_btn.png" alt="" class="lazy img-responsive">
						<p>Committed to our people</p>
						<h3>Safety and Responsibility</h3>
						<a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad'; ?>">KNOW MORE</a>
					</div>
				</div>
			</div>v>
		</div>
		<!-- end English -->
	<?php endif; ?>
</div>
</section>
<?php endwhile; endif; ?>
<!--************************************************END OTRA SECCIONr************************************************-->

<?php get_footer(); ?>
<style>
.carousel-fade .carousel-item {
	opacity: 0;
	transition-duration: .6s;
	transition-property: opacity;
}

.carousel-fade  .carousel-item.active,
.carousel-fade  .carousel-item-next.carousel-item-left,
.carousel-fade  .carousel-item-prev.carousel-item-right {
	opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade  .active.carousel-item-right {
	opacity: 0;
}

.carousel-fade  .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item.active,
.carousel-fade .active.carousel-item-left,
.carousel-fade  .active.carousel-item-prev {
	transform: translateX(0);
	transform: translate3d(0, 0, 0);
}


</style>
<script>
	$('#bs4-slide-carousel').carousel({

		interval: 3000
	})

</script>
<script>
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
	$('.js-example-basic-single').select2();

});
</script>
