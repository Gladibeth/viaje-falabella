<footer>
    <div class="container">
      <hr class="main-articles__line">
      <div class="main-footer">
        <div class="main-footer__content">
          <div class="main-footer__item">
            <?php if (!dynamic_sidebar('Footer columna 1')); ?>
          </div>
          <div class="main-footer__item">
            <?php if (!dynamic_sidebar('Footer columna 2')); ?>
          </div>

          <div class="main-footer__item">
            <?php if (!dynamic_sidebar('Footer columna 3')); ?>
          </div>
          <div class="main-footer__item">
            <?php if (!dynamic_sidebar('Footer columna 4')); ?>
          </div>
    
        </div>
        <div class="main-footer__redes">
          <div class="main-footer__redesitems">
            <?php if (!dynamic_sidebar('Footer redes sociales')); ?>
          </div>
        </div>
        <div class="main-footer__redes">
          <?php if (!dynamic_sidebar('Footer copyright')); ?>
        </div>
        
      </div>
    </div>
  </footer>
  <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal" role="dialog"
    tabindex="-1">
    <div class="modal-dialog">
      <?php echo do_shortcode('[contact-form-7 id="49" title="Formulario"]'); ?>
    </div>
  </div>

  <!-- <script async src="<?php // echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script> -->
  <link async href="<?php echo get_template_directory_uri();?>/assets/css/media_0px.css" rel="stylesheet">
  <link async href="<?php echo get_template_directory_uri();?>/assets/css/slick.css" rel="stylesheet">
  <link async href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css" rel="stylesheet">
  <link async href="<?php echo get_template_directory_uri();?>/assets/css/icofont.css" rel="stylesheet">
  <link async href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
  <!-- <script async src="<?php //echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script> -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/8.14.0/lazyload.min.js"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/assets/js/configuration-lazyload.js"></script>
  <script defer src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
  <script async src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script defer src="<?php echo get_template_directory_uri();?>/assets/js/setting-slick.js"></script>
  <script defer src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
  <?php wp_footer(); ?> <!-- funcion de footer para traer los cambios en el footer -->
</body>
</html>