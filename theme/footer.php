<footer>
    <div class="container">
      <div class="main-footer">
        <div class="content__title">
          <h2>
            FOOTER
          </h2>
        </div>
        <a href="">
          Viajes Falabella, Colombia - 2019 - Todos los derechos reservados.
        </a>
      </div>
    </div>
  </footer>
  <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal" role="dialog"
    tabindex="-1">
    <?php echo do_shortcode('[contact-form-7 id="49" title="Formulario"]'); ?>
  </div>
  <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
  <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/setting-slick.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
  <!-- <script>
   
    $(document).ready(function () {
      // Add smooth scrolling to all links
      $("a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
  </script> -->
  <?php wp_footer(); ?> <!-- funcion de footer para traer los cambios en el footer -->
</body>

</html>
