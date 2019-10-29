<footer>
    <div class="container">
      <hr class="main-articles__line">
      <div class="main-footer">
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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
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
<style>
.screen-reader-response{
    padding: 10px 20% !important;
    width: 100% !important;;
    clip: auto !important;
    height: auto !important;;
    z-index: 1;
    bottom: 0;
    margin: auto;
    text-align: center;
}
</style>
<!-- 

<button id="miId" onclick="evento(this);">onclick</button>
<script>
  function evento(e){
    console.log(e);
  }
</script> -->