<footer>
    <div class="container">
      <hr class="main-articles__line">
      <div class="main-footer">
        <div class="main-footer__content">
          <div class="main-footer__item">
            <div class="main-footer__title">
              <p>Acerca de Viajes Falabella</p>
            </div>
            <ul class="main-footer__ul">
              <li>
                <a href="">
                  Sobre Nosotros
                </a>
              </li>
              <li>
                <a href="">
                  Reporte de Sostenibilidad
                </a>
              </li>
              <li>
                <a href="">
                  Trabaja con Nosotros
                </a>
              </li>
            </ul>
          </div>
          <div class="main-footer__item">
            <div class="main-footer__title">
              <p>Acerca de Viajes Falabella</p>
            </div>
            <ul class="main-footer__ul">
              <li>
                <a href="">
                  Atención al Cliente
                </a>
                </li>
              <li>
                <a href="">Contáctanos</a>
                </li>
              <li>
                <a href="">Sucursales</a>
                </li>
              <li>
                <a href="">Web Check-In</a>
                </li>
              <li>
                <a href="">Reversión de pagos</a>
                </li>
            </ul>
          </div>

          <div class="main-footer__item">
            <div class="main-footer__title">
              <p>Políticas y Condiciones</p>
            </div>
            <ul class="main-footer__ul">
              <li>
                <a href="">Política de Tratamiento de Datos</a>
                </li>
              <li>
                <a href="">Ley de Retracto y Desistimiento</a>
                </li>
              <li>
                <a href="">Términos y condiciones</a>
                </li>
              <li>
                <a href="">Términos y condiciones de Servicios</a>
                </li>
              <li>
                <a href="">Políticas de Sostenibilidad</a>
                </li>
              <li>
                <a href="">Derechos y Deberes de los Pasajeros</a>
                </li>
            </ul>
          </div>
          <div class="main-footer__item">
            <div class="main-footer__title">
              <p>Otros Viajes</p>
            </div>
            <ul class="main-footer__ul">
              <li>
                <a href="">Atención a Empresas</a>
                </li>
              <li>
                <a href="">Grupos Especiales</a>
                </li>

            </ul>
          </div>
    
        </div>

        <div class="main-footer__redes">
          <div class="main-footer__redesitems">
            <a href="#" class="main-footer__redesitem">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/f_logo_RGB-Blue_1024.svg" alt="">
            </a>
            <a href="#" class="main-footer__redesitem">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Twitter_Social_Icon_Circle_Color.svg" alt="">
            </a>
            <a href="#" class="main-footer__redesitem">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/linked in logo circulo.svg" alt="">
            </a>
          </div>
        </div>
        <div class="main-footer__redes">
          <p>Viajes Falabella, Colombia - 2019 - Todos los derechos reservados.</p>
        </div>
        <?php if (!dynamic_sidebar('Footer')); ?>
      </div>
    </div>
  </footer>
  <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal" role="dialog"
    tabindex="-1">
    <div class="modal-dialog">
      <?php echo do_shortcode('[contact-form-7 id="49" title="Formulario"]'); ?>
    </div>
  </div>

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