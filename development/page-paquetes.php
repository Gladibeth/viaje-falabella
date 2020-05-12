<?php get_header(); ?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <section class="main-parallax main-parallax__banner--parallax" style="background-image: url('<?php the_post_thumbnail_url()?>">
    <div class="mask"></div>
    <div class="main-parallax--search">
      <div class="container">
        <div class="main-about__bannertitle">
          <?php $title = explode( ' ',get_the_title());?>
          <h1><?php echo $title[0];?>
            <span><?php echo $title[1].' '.$title[2];?></span>
          </h1>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; endif; ?>
<section class="main-breadcrumb">
<div class="container">
 <div class="tab-content" id="pills-tabContent">
   <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
     <section class="main-articles" itemscope itemtype="http://schema.org/ScholarlyArticle">
       <div class="container">
         <div class="main-articles__content">
         <?php //Post mas recientes
          $args = array(
            'post_type' => 'paquetes',
            'post_status' => 'publish',
          );
          $loop = new WP_Query( $args );
        ?>
        <?php while( $loop->have_posts() ) : $loop->the_post();?>
        <?php $post_slug = get_post_field( 'post_name', get_post() ); ?>
          <div class="main-articles__item">
            <div class="mask"></div>
            <a target="_blank" href="<?php echo bloginfo('url').'/paquetes-en-oferta/'.$post_slug;?>">
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
            </a>
          </div>
        <?php endwhile;
            wp_reset_query();
        ?>
         </div>
       </div>
     </section>
   </div>
 </div>
</div>
</section>
<?php get_footer(); ?>