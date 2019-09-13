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
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-box__title">
            <h5 class="modal-title">Lorem</h5>
            <h5 class="modal-subtitle">Ipsum</h5>
            <div class="modal-box__content">
              <p class="modal-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolore
                reiciendis ab quia eaque a cum? Voluptatem repellat officia cum repudiandae doloribus optio officiis,
                mollitia minima quos neque deleniti quibusdam?</p>
              <hr class="main-articles__line">
            </div>
          </div>
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input class="form-control" id="formGroupExampleInput" placeholder="Nombre" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" id="formGroupExampleInput2" placeholder="Destino" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" id="formGroupExampleInput2" placeholder="Correo" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" id="formGroupExampleInput2" placeholder="Teléfono" type="phone">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="btn_modal">
            Enviar
          </div>
          <div class="modal-footer__content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, minus fugiat non veritatis, aperiam
              porro maiores quo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!-- <script src="assets/js/jquery.min.js"></script> -->
  <script src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/setting-slick.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
  <script>
   
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
  </script>
  <?php wp_footer(); ?> <!-- funcion de footer para traer los cambios en el footer -->
</body>

</html>