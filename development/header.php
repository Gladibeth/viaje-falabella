<!DOCTYPE html>
<html id="body-scroll" <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link async href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link async href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
    <?php wp_head(); ?>
    <?php if (is_tax()) :
    $taxonomy = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); //obtiene los datos de la taxonomia actual -->
    // Listado de categorias (Recomendaciones y países)
    $categories = get_categories(array(
      'parent'         => $taxonomy->term_id,
      'taxonomy' => $taxonomy->taxonomy,
      'hide_empty' => false, //oculta categorias que no otenga post
      'order' => 'ASC',
      'post_status' => 'publish',
    ));
  ?>

    <!-- navegador -->
    <meta name="name" content="<?php echo the_field('seo_title', $taxonomy) . ' | '; ?><?php echo bloginfo('name'); ?>">
    <meta name="description" content="<?php echo the_field('seo_description', $taxonomy); ?>">
    <meta name="keywords" content="<?php echo the_field('seo_keywords', $taxonomy); ?>">
    <link rel="canonical" href="<?php echo $url_actual = home_url(add_query_arg(array(), $wp->request)); ?>" />

    <!-- opengraph -->
    <meta property="og:title" content="<?php echo the_field('seo_title', $taxonomy); ?>">
    <meta property="og:description" content="<?php echo the_field('seo_description', $taxonomy); ?>">
    <meta property="og:url" content="<?php echo $url_actual = home_url(add_query_arg(array(), $wp->request)); ?>">
    <meta property="og:image" content="<?php echo get_field('image-category', $taxonomy); ?>">
    <meta property="og:type" content="website" />

    <!--twitter!-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo the_field('seo_title', $taxonomy); ?>">
    <meta name="twitter:description" content="<?php echo the_field('seo_description', $taxonomy); ?>">
    <meta name="twitter:url" content="<?php echo $url_actual = home_url(add_query_arg(array(), $wp->request)); ?>" />
    <meta name="twitter:image" content="<?php echo get_field('image-category', $taxonomy); ?>">

    <?php endif; ?>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-js">
            <div class="main-brand">
                <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
                    <img id="iso" alt="logo Viajesfalabella"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
                    <img id="iso_green" alt="logo Viajesfalabella" class="display_none"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-b.png">
                </a>
                <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos"
                    data-toggle="offcanvas" type="button" onclick="menuHamburguesa()">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-autos">
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true"
                            class="nav-link nav-link-active dropdown-toggle dropdown-toggle1 " data-toggle="dropdown"
                            href="#" id="dropdown01">Destinos</a>
                        <div aria-labelledby="dropdown01" class="dropdown-menu">
                            <div class="sub-drop-destiny">
                                <a class="dropdown-item"
                                    href="<?php echo bloginfo('url') . '/tipo_destinos/europa'; ?>">
                                    <img id="icons-nav" alt="Icono Europa"
                                        src="<?php bloginfo('template_url') ?>/assets/img/icons/Icono-europa-01.svg">
                                    <!-- <img id="site_1" alt="Icono Europa" class="display_none" src="<?php bloginfo('template_url') ?>/assets/img/icons/site1.png"> -->

                                    Europa

                                </a>
                                <a class="dropdown-item"
                                    href="<?php echo bloginfo('url') . '/tipo_destinos/caribe'; ?>">
                                    <img id="icons-nav" alt="Icono Caribe"
                                        src="<?php bloginfo('template_url') ?>/assets/img/icons/Icono-caribe-01.svg">
                                    <!-- <img id="site_2" alt="Icono Caribe" class="display_none" src="<?php bloginfo('template_url') ?>/assets/img/icons/site2.png"> -->
                                    Caribe
                                </a>
                                <a class="dropdown-item"
                                    href="<?php echo bloginfo('url') . '/tipo_destinos/turquia'; ?>">
                                    <img id="icons-nav" alt="Icono Turquia"
                                        src="<?php bloginfo('template_url') ?>/assets/img/icons/Icono-turquia-01.svg">
                                    <!-- <img id="site_3" alt="Icono Turquia" class="display_none" src="<?php bloginfo('template_url') ?>/assets/img/icons/site3.png"> -->
                                    Turquía
                                </a>
                                <a class="dropdown-item"
                                    href="<?php echo bloginfo('url') . '/tipo_destinos/resto-del-mundo'; ?>">
                                    <img id="icons-nav" alt="Icono resto del mundo"
                                        src="<?php bloginfo('template_url') ?>/assets/img/icons/Icono-resto-del-mundo-01.svg">
                                    <!-- <img id="site_4" alt="Icono resto del mundo" class="display_none" src="<?php bloginfo('template_url') ?>/assets/img/icons/site4.png"> -->
                                    Resto del mundo
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true"
                            class="nav-link nav-link-active dropdown-toggle dropdown-toggle2 " data-toggle="dropdown"
                            href="#" id="dropdown01">Productos</a>
                        <div aria-labelledby="dropdown02" class="dropdown-menu">
                            <div class="sub-drop-destiny">
                                <a class="dropdown-item"
                                    href="<?php echo bloginfo('url') . '/tipo_productos/temporada/'; ?>">
                                    <img id="site5" alt="Icono Temporada"
                                        src="<?php bloginfo('template_url') ?>/assets/img/icons/Icono temporadas-1.svg">
                                    <img id="site_5" alt="Icono Temporada" class="display_none"
                                        src="<?php bloginfo('template_url') ?>/assets/img/icons/Icono temporadas-2.svg">
                                    Temporada
                                </a>
                                <a class="dropdown-item" target="_blank"
                                    href="https://viajesfalabella.blog/agenda-tu-cita/">
                                    <img id="site6" alt="Icono paquetes en oferta"
                                        src="<?php bloginfo('template_url') ?>/assets/img/icons/icono-paquetes-white.svg">
                                    <img id="site_6" alt="Icono paquetes en oferta" class="display_none"
                                        src="<?php bloginfo('template_url') ?>/assets/img/icons/icono-paquetes-gray.svg">
                                    Asesor Virtual
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo bloginfo('url') . '/tipo_de_viajes/como-es-tu-viaje'; ?>">
                            ¿Cómo es tu viaje?
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="<?php echo bloginfo('url') . '/tipo_recursos/recursos-viajeros/'; ?>">Recursos
                            viajeros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo bloginfo('url') . '/sobre-nosotros/'; ?>">Sobre
                            nosotros</a>
                    </li>

                    <div class="main-nav__search ">
                        <div class="content-nav icon-nav">
                            <?php get_search_form(); ?>
                        </div>
                        <a class="main-nav__mail js-formulario" data-toggle="modal" href="#formulario">
                            <img alt="Icono Email" src="<?php bloginfo('template_url') ?>/assets/img/icons/Group 4.svg">
                        </a>
                    </div>
                </ul>
            </div>

        </nav>
    </header>