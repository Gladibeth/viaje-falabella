<?php get_header(); ?>
<section class="main-parallax" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/articulo-1.jpg')">
    <div class="overlay"></div>
    <div class="main-parallax--search">
      <button class="" href="#">
          <i class="fa fa-search"></i>
      </button>
        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>" style="width:60%;">
            <input type="search" class="search-field parallax-input"  placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        </form>

    </div>
  </section>
<section class="main-posts" itemscope itemtype="http://schema.org/LiveBlogPosting">
    <div class="container">
      <div class="main-search_content">
      <?php
            $s =get_search_query();
            $args = array('s' =>$s);
            // The Query
            $the_query = new WP_Query( $args );
        ?>
        <?php if ( $the_query->have_posts()):?>
        <h1>Post relacionados con: <?php echo "$s"; ?> </h1>  
            <?php while ( $the_query->have_posts()): ?>
            <?php $the_query->the_post();?>
        <div class="main-search__items">
          <div itemscope itemtype="http://schema.org/Article" class="main-search__item" href="post.html">
            <div class="main-posts__box">
              <div class="main-search__title">
                <h2 itemprop="name">
                  <?php the_title();?>
                </h2>
              </div>

              <div class="main-posts__description">
                <p itemprop="description">
                 <?php the_excerpt();?>
                </p>


              </div>
            </div>
          </div>
          <a href="<?php the_permalink(); ?>" class="main-search_item">
            <div class="main-search__img">
            <?php 
              $img_id = get_post_thumbnail_id(get_the_ID());
              $alt = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
            ?>
              <img class="lazy" data-srcset="<?php the_post_thumbnail_url('555x360'); ?>" alt="<?php echo $alt; ?>">
            </div>
            <div class="main-search__element">
              <div class="main-search__element-item">
                <div class="main-search__element--white">
                  <p>Conoce más</p>
                </div>
              </div>
              <div class="main-search__element-item">
                <div class="main-search__element--green">
                  <i class="fa fa-play"></i>
                </div>
              </div>
            </div>
          </a>
        </div>

        <hr class="line-gray line-gray--full">
      
        <?php endwhile;?>
        <?php else:?>
        <h3>No se encontraron post relacionados con: <?php echo "$s"; ?> </h3>  
    <?php ;endif;?>


      </div>
    </div>
  </section>
<?php get_footer(); ?>