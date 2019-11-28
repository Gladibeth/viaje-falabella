<?php get_header(); ?> 
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <section class="main-parallax main-parallax__banner--parallax" style="background-image: url('<?php the_post_thumbnail_url()?>">
    <div class="mask"></div>
    <div class="main-parallax--search">
      <div class="container">
        <div class="main-about__bannertitle">
          <?php $title = explode( ' ',get_the_title());?>
          <h1><?php echo $title[0];?>
            <span><?php echo $title[1];?></span>
          </h1>
        </div>
      </div>
    </div>
  </section>
  <section class="main-about">
    <div class="container">
      <div class="main-about__content">
        <div class="main-about__item">
          <div class="main-about__text">
              <?php the_content();?>
            <div class="main-about__descrption">
              <div class="main-post__btn">
                <a class="btn_custom btn--medium btn-border" data-toggle="modal" href="#about">
                  Visítanos!
                </a>
              </div>
              <hr class="main-about__line">
              <div class="main-about__subtitle">
                <p>
                  20 RAZONES PARA COMPRAR EN 
                  <span>VIAJES FALABELLA</span>
                </p>
              </div>
            </div>
            <div class="main-about__slider">
              <?php
                $args = array(
                'post_type' => 'galerias',
              );
                $loop = new WP_Query( $args );
              ?>
              <?php while( $loop->have_posts() ) : $loop->the_post();?>
                <?php 
                  $img_id = get_post_thumbnail_id(get_the_ID());
                  $alt_carousel = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
                ?>
                <div class="main-about__slideritem">
                  <div class="main-about__sliderimg">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $alt_carousel;?>">
                    <hr class="main-about__line">
                  </div>
                  <div class="main-about__slidertitle">
                    <p><?php the_title();?></p>
                  </div>
                </div>
              <?php endwhile;
	              wp_reset_query();
              ?>
            </div>
          </div>
        </div>
        <div class="main-about__item">
          <div class="main-about__img">
            <div class="main-posts__item">
              <div class="main-posts__sidebar">
                <div class="sidebar">
                    <?php if (get_field('sidebar')):?>
                    <a href="<?php echo get_field('sidebar_link');?>" target="_blank" rel="noopener noreferrer">
                      <?php 
                          $img_id = get_post_thumbnail_id(get_the_ID());
                          $alt = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
                      ?>
                      <img src="<?php echo get_field('sidebar_imagen');?>" alt="<?php echo $alt;?>">
                    </a>
                  <?php else:?>
                      <?php if (!dynamic_sidebar('sidebar')); ?>   
                  <?php endif;?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <?php endwhile; endif; ?>
    <div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog--ubication" role="document">
      <div class="modal-content">
      
     <?php include_once('ubications.php');?>
        
      </div>
    </div>
  </div>
<?php get_footer(); ?> 