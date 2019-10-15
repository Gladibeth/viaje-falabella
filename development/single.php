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
        <?php $post_thumbnail_id = get_post_thumbnail_id();
        $url = wp_get_attachment_url( $post_thumbnail_id);?>
        <div class="overlay" style="background-image: url('<?php echo $url; ?>');"></div> <!-- muestra la imagen dinamica de la taxonomia -->
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
                    <?php echo get_the_tag_list('tipo_destinos_tags'); ?>
                    
                </div>
                <div class="main-posts__tags">
                    <p>tags</p>
                    <p>tags</p>
                </div>
                </div>
                <div class="main-posts__description">
                    <?php the_content(); ?>
    
                <div class="main-posts__description--redes">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-linkedin"></i>
                    <i class="fa fa-print"></i>
                </div>
                </div>

            </div>
          </div>
          <div class="main-posts__item">
            <div class="main-posts__sidebar">
              <div class="sidebar"></div>
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
