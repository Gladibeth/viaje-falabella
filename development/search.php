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
            <?php while ( $the_query->have_posts()): ?>
            <?php $the_query->the_post();?>










        <div class="main-search__items">
          <div itemscope itemtype="http://schema.org/Article" class="main-search__item" href="post.html">
            <div class="main-posts__box">
              <div class="main-search__title">
                <p itemprop="name">
                  <?php the_title();?>
                </p>
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
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
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
    <?php ;endif;?>


      </div>
    </div>
  </section>
<?php get_footer(); ?>