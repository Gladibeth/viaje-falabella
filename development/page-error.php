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
<section class="main-error">
  <div class="container">
    <div class="main-error__content">
      <div class="main-error__item">
        <div class="main-error__info">
          <div class="main-error__title">
            <p>404</p>
          </div>
          <div class="main-error__subtitle">
            <p>La página no se encuentra disponible</p>
          </div>
          <div class="main-error__btn">
            <div class="">
              <a class="btn_custom btn--medium btn--filled" href="<?php echo bloginfo('url');?>">Volver</a>
            </div>
          </div>
        </div>
      </div>
      <div class="main-error__item">
        <div class="main-error__img"> 
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/error-1.svg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
  <!-- <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/8.14.0/lazyload.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/configuration-lazyload.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/setting-slick.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
  <?php wp_footer(); ?> <!-- funcion de footer para traer los cambios en el footer -->
  <script></script>
</body>

</html> 