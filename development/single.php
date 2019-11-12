<?php get_header(); ?>
<?php
   /*  $page_taxonomy = basename(dirname($_SERVER['HTTP_REFERER'])); //nombre de la taxonomia; 
    $page_referer = basename($_SERVER['HTTP_REFERER']); //nombre de la subcategoria;
    $taxonomy = get_categories(array(
        'slug' =>  $page_referer,
        'taxonomy' => $page_taxonomy,
        'hide_empty' => false, //oculta categorias que no otenga post
        'order' => 'ASC',
        'showposts'=> 1,
        'post_status' => 'publish',
    ));  */
  
?>
    <section class="main-parallax">
        <?php 
            $img_id = get_post_thumbnail_id(get_the_ID());
            $alt = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
        ?>
        <div class="overlay">
            <img srcset="<?php the_post_thumbnail_url('480x792'); ?> 480w,<?php the_post_thumbnail_url('768x689'); ?> 768w,<?php the_post_thumbnail_url('555x360'); ?> 1024w,<?php the_post_thumbnail_url('1280x689'); ?> 1280w, <?php the_post_thumbnail_url(); ?> 1920w," alt="<?php echo $alt; ?>" style="width: 100%;height: 100%;object-fit: cover;">
        </div> <!-- muestra la imagen dinamica de la taxonomia -->
        <div class="main-parallax--boxtitle">

        <div class="main-parallax--title">
            <h1><?php //echo $taxonomy[0]->name;?><?php the_title();?></h1>
        
            <div class="main-parallax__btn">
                <div class="btn_custom btn--medium btn--filled--decoration">
                    <i class="fa fa-angle-left" style="margin-right:10px;" aria-hidden="true"></i>
                    <a href="javascript:window.history.back();">Volver</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
    <section class="main-posts">
        <div class="container">
        <div class="main-detailsposts__content">
          <div class="main-posts__item" href="post.html">
            <div class="main-posts__box">
                <div class="main-posts__title">
                
                </div>
                <div class="main-posts__autor">
                <div class="main-posts__name">
                    <p><?php the_author();?></p>
                </div>
                <div class="main-posts__line"></div>
                <div class="main-posts__date">
                    <span><?php the_date('d/m/y');?></span>
                </div>
                </div>
                <hr class="main-articles__line">
                <div class="main-posts__social">
                <div class="main-posts__comments d-flex">
                    <i class="fa fa-comment-o" style="margin-right: 5px;" aria-hidden="true"></i>
                    <p><?php echo $numero_de_comentarios = get_comments_number(); ?></p>
                    
                </div>
                <div class="main-posts__tags">
                    <?php 
                        $tags = get_the_tags();
                        if ($tags):?> 
                            <?php foreach( $tags as $tag ):?>
                            <p><?php echo $tag->name;?></p>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
                </div>
                <div class="main-posts__description">
                    <?php the_content(); ?>
                <div class="main-posts__description--redes">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                    
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a  href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="javascript:print()">
                        <i class="fa fa-print"></i>      
                    </a>
                </div>
                </div>

            </div>
          </div>
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
        <!-- <hr class="main-articles__line"> -->
        </div>
    </section>
    
    <?php
    ?>
<?php endwhile; endif; ?>
<?php if ( comments_open() || get_comments_number() ) : ?>
            <?php comments_template(); ?>
          <?php endif; ?>
<?php require('footer.php'); ?>
