<?php get_header(); ?> 
  <div class="main-banner">
    <div class="slider slider-for__banner">
      <?php
	      $args = array(
        'post_type' => 'destinos',
        'showposts'=> 3,
        'post_status' => 'publish',
         'meta_key' => 'destino-destacado',
        'orderby' => 'meta_value_num', //valor del campo seleccionado
        'order' => 'DESC'
        );
        $loop = new WP_Query( $args );
      ?>
      <?php while( $loop->have_posts() ) : $loop->the_post();?>
        <div class="main-banner__item">
          <div class="mask"></div>
          <div class="main-banner__text">
            <div class="main-banner__number">
              <span>01</span>
              <div class="main-banner-smaline"></div>
            </div>
            <div class="main-banner__title">
              <p><?php the_title();?></p>
              <!-- <span></span> -->
            </div>
            <div class="main-banner__description">
              <p><?php the_excerpt();?></p>
            </div>
            <div class=" btn-banner">
              <a href="<?php the_permalink(); ?>" class="btn-light">
                Descubre
              </a>
            </div>
            <!-- <div class="main-banner__mail">
              <div class="main-banner__boxmail">
                <a href="">
                  <i class="fa fa-envelope-o "></i>
                  <span></span>
                  <p>mailing ipsum</p>
                </a>
              </div>
            </div> -->
          </div>
          <div class="main-banner__camara">
            <div class="text__camara">
              <p> <?php echo the_field("descripcion_imagen_post"); ?></p>
            </div>
            <div class="icons__camara">
              <i class="fa fa-camera" aria-hidden="true"></i>
            </div>
          </div>
          <div class="main-banner__scroll">
          <div class="scroll__container">
            <a href="#destiny">
            SCROLL
            </a>
          </div>
          </div>
          <div class="main-banner__img">
            <?php 
              $img_id = get_post_thumbnail_id(get_the_ID());
              $alt_banner_principal = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
            ?>
            <img srcset="<?php the_post_thumbnail_url('480x792'); ?> 480w,<?php the_post_thumbnail_url('768x689'); ?> 768w,<?php the_post_thumbnail_url('555x360'); ?> 1024w,<?php the_post_thumbnail_url('1280x689'); ?> 1280w, <?php the_post_thumbnail_url('555x360'); ?> 1920w," alt="<?php echo $alt_banner_principal; ?>">
          </div>
        </div>
      <?php endwhile;
	      wp_reset_query();
      ?>
    </div>
    <div class="fixed">
      <div class="slider slider-nav__banner">
      <?php
	      $args = array(
        'post_type' => 'destinos',
        'showposts'=> 3,
        'post_status' => 'publish',
        'meta_key' => 'destino-destacado',
        'orderby' => 'meta_value_num', //valor del campo seleccionado
        'order' => 'DESC'
        );
        $loop = new WP_Query( $args );
      ?>
        <?php while( $loop->have_posts() ) : $loop->the_post();?>
          <div>
            <div class="main-slider__next">
              <div class="slider-progress">
                <div class="progress"></div>
              </div>
              <div class="main-slider__box">
                <div class="main-slider__text">
                  <!-- <hr class="main-slider__line"> -->
                  <div class="main-slider__number">
                    <span class="number--active">01</span>
                    <div class="main-slider-smaline"></div>
                  </div>
                  <div class="main-slider__title">
                    <p><?php the_title();?></p>
                  </div>
                  <div class="main-slider__description">
                    <!-- <p>ipsum</p> -->
                  </div>
                </div>
                <?php 
                  $img_id = get_post_thumbnail_id(get_the_ID());
                  $alt_banner_secundario = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
                ?>
                <div class="main-slider__img">
                  <img class="main-slider__img--active" alt="<?php echo $alt_banner_secundario;?>" src="<?php the_post_thumbnail_url('medium'); ?>">
                  <div class="bg-box d-lg-none d-md-none d-sm-none"></div>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile;
          wp_reset_query();
        ?>
      </div>
    </div>
  </div>

  <section class="main-destiny" id="destiny">
    <div class="container">
      <div class="content__title">
        <h2>Destinos del mes</h2>
      </div>
      <div style="position:relative;">
        <div class="slider-container">
          <div class="slider-content">
            <?php $count_category = 0; ?>
            <?php
            // Listado de categorias
            $categories = get_categories( array(
              'taxonomy' => 'tipo_destinos',
              'hide_empty' => false,
              'orderby' => 'name',
              'order' => 'DESC'
            ) );
            ?>
            <?php foreach ($categories as $category):?>
            <?php if (get_field('destacar_destino',$category)): ?>
              <?php $count_category++; ?>
              <?php if ($count_category < 4): ?>
              <div class="slider-single">
              <div style="display:grid; grid-template-columns: 50% 50%;" class="content">
                <div class="content-items">
                  <div class="main-destiny__box">
                    <div class="main-destiny__title">
                      <p><?php echo $category->name; ?></p>
                    </div>
                    <div class="main-destiny__site">
                      <div class="main-destiny__icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                      </div>
                      <div class="main-destiny__text">
                      <?php echo the_field('ciudad_destino', $category); ?>
                      </div>
                    </div>
                    <hr class="main-articles__line">
                    <div class="main-destiny__descrption">
                    <p><?php echo the_field('descripcion_destino', $category); ?></p>
                    </div>
                  </div>

                </div>
                <?php 
                  echo $img_id = get_post_thumbnail_id($category);
                  $alt_text_category = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
                ?>
                <img class="slider-single-image lazy"
                data-src="<?php echo get_field('image-category', $category); ?>"
                  alt="<?php echo $alt_text_category;?>" />
                </a>
              </div>
            </div>
              <?php else: break;?>
              <?php endif; ?>
              <?php endif; ?>
            <?php endforeach; ?>   
          </div>
          <a class="slider-left" href="javascript:void(0);"><i class=""></i></a>
          <a class="slider-right" href="javascript:void(0);"><i class=""></i></a>
        </div>
      </div>
    </div>
  </section>

  <section class="main-post">
    <div class="container">
      <?php if (!dynamic_sidebar('Viajero del mes')); ?>   
          <?php if (!dynamic_sidebar('Viajero del mes imagen')); ?>
          
      </div>
    </div>
  </section>
  <section class="main-articles main-articles-home">
    <div class="container">
      <div class="content__title">
        <h2>últimos artículos</h2>
      </div>
      <div class="main-articles__content">
        <?php //Post mas recientes
          $args = array(
            'post_type' => 'recursos_viajeros',
            'post_status' => 'publish',
            'posts_per_page' => 4,

            
          );
          $loop = new WP_Query( $args );
        ?>
        
        <?php while( $loop->have_posts() ) : $loop->the_post();?>
          <div class="main-articles__item">
            <div class="mask"></div>
            <a href="<?php the_permalink(); ?>">
              <div class="main-articles__img">
              <?php 
                $img_id = get_post_thumbnail_id(get_the_ID());
                $alt_text_articulos = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
              ?>
              <img class="lazy" data-srcset="<?php the_post_thumbnail_url('455x160'); ?> 480w,<?php the_post_thumbnail_url('345x300'); ?> 768w,<?php the_post_thumbnail_url('555x360'); ?> 1024w," alt="<?php echo $alt_text_articulos; ?>">
              </div>
              <div class="main-articles__title">
                <p><?php the_title();?></p>
                <span></span>
              </div>
              <!-- <div class="main-article__btn">
                <a class="btn_custom btn--medium btn--filled" href="<?php the_permalink(); ?>">Ver más </a>
              </div> -->
            </a>
          </div>
        <?php endwhile;
            wp_reset_query();
        ?>
      
    </div>
  </section>
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
          }, 8000, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
  </script>
  <?php if (!dynamic_sidebar('buscador')); ?>
<?php get_footer(); ?>