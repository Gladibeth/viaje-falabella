<!DOCTYPE html>
<html lang="en" id="body-scroll">
<head>
	<meta charset="UTF-8">
	<meta name="Title" content="astivik">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<meta name="description" content="">
	<link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/icofont.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet">
	<?php wp_head(); ?>
	<title>Viajes</title>
</head>
<body>
	<header>
    <nav class="navbar navbar-expand-sm fixed-top navbar-fixed-js">
      <div class="main-brand">
        <a class="navbar-brand" href="index.html">
            <img id="iso" src="<?php echo get_template_directory_uri();?>/assets/img/logo.png">
          </a>
        <button class="navbar-toggler p-0 border-0" data-toggle="offcanvas" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>
      </div>
      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-autos">
          <li class="nav-item dropdown">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="dropdown01">Destinos</a>
            <div aria-labelledby="dropdown01" class="dropdown-menu">
              <div class="d-flex">
                <a class="dropdown-item" href="recommended.html">
                    <img id="site1" src="<?php bloginfo('template_url') ?>/assets/img/icons/Icono-europa-01.svg">
                    Europa
                  </a>
                <a class="dropdown-item" href="recommended.html">
                    <img id="site2" src="<?php bloginfo('template_url') ?>/assets/img/icons/Icono-caribe-01.svg">
                    Caribe
                  </a>
                <a class="dropdown-item" href="recommended.html">
                    <img id="site3" src="<?php bloginfo('template_url') ?>/assets/img/icons/Icono-turquia-01.svg">
                    Turquía
                  </a>
                <a class="dropdown-item" href="recommended.html">
                    <img id="site4" src="<?php bloginfo('template_url') ?>/assets/img/icons/Icono-resto-del-mundo-01.svg">
                    Resto del mundo
                  </a>
              </div>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">
                ¿Cómo es tu viaje
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#destiny">Recursos viajeros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gastronomía</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre nosotros</a>
          </li>
        </ul>
      </div>
      <div class="main-nav__search">
        <a data-toggle="modal" href="#exampleModal">
            <i class="fa fa-search"></i>
          </a>
        <a class="main-nav__mail" data-toggle="modal" href="#exampleModal">
            <i class="fa fa-envelope-o"></i>
          </a>
      </div>
    </nav>
  </header>
