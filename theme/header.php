<!DOCTYPE html>
<html lang="en" id="body-scroll">
<head>
	<meta charset="UTF-8">
	<meta name="Title" content="Viajes Falabella">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<meta name="description" content="">
	<link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/media_0px.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/icofont.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet">
	<?php wp_head(); ?>
	<title>Viajes</title>
</head>
<body>
  <!-- <div id="preloader">
		<div class="main-loader">
		  <span class="loader1"></span>
		  <span class="loader2"></span>
		  <span class="loader3"></span>
		</div>
	</div> -->
	<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-js">
      <div class="main-brand">
        <a class="navbar-brand" href="<?php echo bloginfo('url');?>">
            <img id="iso" src="<?php echo get_template_directory_uri();?>/assets/img/logo.png">
            <img id="iso_green" class="display_none" src="<?php echo get_template_directory_uri();?>/assets/img/logo-b.png">
          </a>
        <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-autos">
          <li class="nav-item dropdown">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link nav-link-active dropdown-toggle " data-toggle="dropdown" href="#" id="dropdown01">Destinos</a>
            <div aria-labelledby="dropdown01" class="dropdown-menu">
              <div class="sub-drop-destiny">
                <a class="dropdown-item" href="<?php echo bloginfo('url').'/tipo_destinos/europa';?>">
                    <img id="site1" src="<?php bloginfo('template_url') ?>/assets/img/icons/Icono-europa-01.svg">
                    <img id="site_1" class="display_none" src="<?php bloginfo('template_url') ?>/assets/img/icons/site1.png">
                    Europa
                  
                  </a>
                <a class="dropdown-item" href="<?php echo bloginfo('url').'/tipo_destinos/caribe';?>">
                    <img id="site2" src="<?php bloginfo('template_url') ?>/assets/img/icons/Icono-caribe-01.svg">
                    <img id="site_2" class="display_none" src="<?php bloginfo('template_url') ?>/assets/img/icons/site2.png">
                    Caribe
                  </a>
                <a class="dropdown-item" href="<?php echo bloginfo('url').'/tipo_destinos/turquia';?>">
                    <img id="site3" src="<?php bloginfo('template_url') ?>/assets/img/icons/Icono-turquia-01.svg">
                    <img id="site_3" class="display_none" src="<?php bloginfo('template_url') ?>/assets/img/icons/site3.png">
                    Turquía
                  </a>
                <a class="dropdown-item" href="<?php echo bloginfo('url').'/tipo_destinos/resto-del-mundo';?>">
                    <img id="site4" src="<?php bloginfo('template_url') ?>/assets/img/icons/Icono-resto-del-mundo-01.svg">
                    <img id="site_4" class="display_none" src="<?php bloginfo('template_url') ?>/assets/img/icons/site4.png">
                    Resto del mundo
                  </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link nav-link-active dropdown-toggle " data-toggle="dropdown" href="#" id="dropdown01">Productos</a>
            <div aria-labelledby="dropdown02" class="dropdown-menu">
              <div class="sub-drop-destiny">
                <a class="dropdown-item" href="<?php echo bloginfo('url').'/tipo_productos/temporada/';?>">
                    <img id="site1" src="<?php bloginfo('template_url') ?>/assets/img/icons/Icono-europa-01.svg">
                    <img id="site_1" class="display_none" src="<?php bloginfo('template_url') ?>/assets/img/icons/site1.png">
                    Temporada
                  
                  </a>
                
              </div>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo bloginfo('url').'/como-es-tu-viaje';?>">
                ¿Cómo es tu viaje?
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo bloginfo('url').'/tipo-recursos';?>">Recursos viajeros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre nosotros</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Gastronomía</a>
          </li> -->
        </ul>
      </div>
      <div class="main-nav__search">
        <?php  //get_search_form();?>
        <!-- <div class="search-first">
          <div class="searchBox">
              <input class="searchInput"type="text" name="" placeholder="Search">
              <button class="searchButton" href="#">  
                  <i class="fa fa-search"></i>
              </button>
          </div>
        </div> -->
        <div class="search">
          <input class="change-color" type="text" placeholder=" ">
          <div>
              <svg class="svg-white" >
                  <use xlink:href="#path">
              </svg>
          </div>
      </div>
          
      <svg class="svg-white" xmlns="http://www.w3.org/2000/svg" style="display: none;">
          <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 28" id="path">
              <path d="M32.9418651,-20.6880772 C37.9418651,-20.6880772 40.9418651,-16.6880772 40.9418651,-12.6880772 C40.9418651,-8.68807717 37.9418651,-4.68807717 32.9418651,-4.68807717 C27.9418651,-4.68807717 24.9418651,-8.68807717 24.9418651,-12.6880772 C24.9418651,-16.6880772 27.9418651,-20.6880772 32.9418651,-20.6880772 L32.9418651,-29.870624 C32.9418651,-30.3676803 33.3448089,-30.770624 33.8418651,-30.770624 C34.08056,-30.770624 34.3094785,-30.6758029 34.4782612,-30.5070201 L141.371843,76.386562" transform="translate(83.156854, 22.171573) rotate(-225.000000) translate(-83.156854, -22.171573)"></path>
          </symbol>
      </svg>
        
        <a class="main-nav__mail" data-toggle="modal" href="#exampleModal">
            <i class="fa fa-envelope-o"></i>
          </a>
      </div>
    </nav>
  </header>

