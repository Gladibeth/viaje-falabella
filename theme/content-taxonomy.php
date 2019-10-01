<?php get_header(); //Obtener el header
  $taxonomy = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); //obtiene los datos de la taxonomia actual --> 

?>
  <section class="main-parallax">
    <div class="overlay" style="background-image: url('<?php echo get_field('image-category', $taxonomy); ?>');"></div> <!-- muestra la imagen dinamica de la taxonomia -->
    <div class="main-parallax__title main-parallax__title--post">
      <h1><?php echo $taxonomy->name;?></h1>
      <span><?php echo $taxonomy->description;?></span>
      <div class="main-parallax__btn">
        <div class="btn_custom btn--medium btn--filled--decoration">
          <i class="fa fa-angle-left" style="margin-right:10px;" aria-hidden="true"></i>
          <a href="javascript:window.history.back();">Volver</a>
        </div>
      </div>
    </div>
  </section>
  <section class="main-posts">
    <div class="container">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
            aria-controls="pills-home" aria-selected="true">Más Recientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
            aria-controls="pills-profile" aria-selected="false">Más Populares</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
            aria-controls="pills-contact" aria-selected="false">Más comentarios</a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div itemscope itemtype="http://schema.org/LiveBlogPosting" class="main-posts__content">
          <?php //Post mas recientes
            $args = array(
              'post_type' => 'destinos',
              'tax_query' => array(
								array(
									'taxonomy' => $taxonomy->taxonomy,
									'field' => 'slug',
									'terms' => $taxonomy->slug
								))
            );
            $loop = new WP_Query( $args );
          ?>
          <?php while( $loop->have_posts() ) : $loop->the_post();?>
            <div class="main-posts__item" href="post.html">
              <div class="main-posts__img">
                <img itemprop="image" class="img-round" src="<?php the_post_thumbnail_url(); ?>"/>
              </div>
              <div class="main-posts__box">
                <div class="main-posts__title">
                  <p itemprop="name"><?php the_title();?></p>
                </div>
                <div class="main-posts__autor">
                  <div class="main-posts__name">
                    <p itemprop="author"><?php the_author();?></p>
                  </div>
                  <div class="main-posts__line"></div>
                  <div class="main-posts__date">
                    <span itemprop="datePublished"><?php the_date('d/m/y');?></span>
                  </div>
                </div>
                <div class="main-posts__description">
                  
                    <?php the_excerpt();?>
                  
                </div>
                <div class="main-posts__btn">
                  <div class="btn_custom btn--medium btn--filled-green "><a href="<?php the_permalink(); ?>">Ver más </a>
                  </div>
                </div>
                <hr class="main-articles__line">
                <div class="main-posts__social">
                  <div class="main-posts__comments">
                    <p><?php echo $numero_de_comentarios = get_comments_number();?></p>
                  </div>
                  <div class="main-posts__tags">
                    <p>tags</p>
                    <p>tags</p>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile;
            wp_reset_query();
          ?>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <!-- Más populares -->
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div itemscope itemtype="http://schema.org/LiveBlogPosting" class="main-posts__content">
          <?php //mas populares
            $args = array(
            'post_type' => 'destinos',
            'meta_key' => 'post_views',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
            'tax_query' => array(
              array(
                'taxonomy' => $taxonomy->taxonomy,
                'field' => 'slug',
                'terms' => $taxonomy->slug
              ))
            );
            $loop = new WP_Query( $args );
            $popular_posts = new WP_Query( $args );
          ?>
          <?php while ( $popular_posts->have_posts() ) : $popular_posts->the_post();?>
            <div class="main-posts__item" href="post.html">
              <div class="main-posts__img">
                <img itemprop="image" class="img-round" src="<?php the_post_thumbnail_url(); ?>"/>
              </div>
              <div class="main-posts__box">
                <div class="main-posts__title">
                  <p itemprop="name"><?php the_title();?></p>
                </div>
                <div class="main-posts__autor">
                  <div class="main-posts__name">
                    <p itemprop="author"><?php the_author();?></p>
                  </div>
                  <div class="main-posts__line"></div>
                  <div class="main-posts__date">
                    <span itemprop="datePublished"><?php the_date('d/m/y');?></span>
                  </div>
                </div>
                <div class="main-posts__description">
                  
                    <?php the_excerpt();?>
                  
                </div>
                <div class="main-posts__btn">
                  <div class="btn_custom btn--medium btn--filled-green"><a href="<?php the_permalink(); ?>">Ver más </a>
                  </div>
                </div>
                <hr class="main-articles__line">
                <div class="main-posts__social">
                  <div class="main-posts__comments">
                    <p><?php echo $numero_de_comentarios = get_comments_number();?></p>
                  </div>
                  <div class="main-posts__tags">
                    <p>tags</p>
                    <p>tags</p>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile;
            wp_reset_query();
          ?>
          </div>
        </div>
          <!-- End Más populares -->
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div itemscope itemtype="http://schema.org/LiveBlogPosting" class="main-posts__content">
          <?php //Post con mas comentarios
          $numero_de_comentarios = get_comments_number();
            $args = array(
              'post_type' => 'destinos',
              'tax_query' => array(
								array(
									'taxonomy' => $taxonomy->taxonomy,
									'field' => 'slug',
									'terms' => $taxonomy->slug
								))
            );
            $loop = new WP_Query( $args );
          ?>
          
          <?php while( $loop->have_posts() ) : $loop->the_post();?>
            <div class="main-posts__item" href="post.html">
              <div class="main-posts__img">
                <img itemprop="image" class="img-round" src="<?php the_post_thumbnail_url(); ?>"/>
              </div>
              <div class="main-posts__box">
                <div class="main-posts__title">
                  <p itemprop="name"><?php the_title();?></p>
                </div>
                <div class="main-posts__autor">
                  <div class="main-posts__name">
                    <p itemprop="author"><?php the_author();?></p>
                  </div>
                  <div class="main-posts__line"></div>
                  <div class="main-posts__date">
                    <span itemprop="datePublished"><?php the_date('d/m/y');?></span>
                  </div>
                </div>
                <div class="main-posts__description">
                  
                    <?php the_excerpt();?>
                  
                </div>
                <div class="main-posts__btn">
                  <div class="btn_custom btn--medium btn--filled"><a href="<?php the_permalink(); ?>">Ver más </a>
                  </div>
                </div>
                <hr class="main-articles__line">
                <div class="main-posts__social">
                  <div class="main-posts__comments">
                    <p><?php echo $numero_de_comentarios = get_comments_number();?></p>
                  </div>
                  <div class="main-posts__tags">
                    <p>tags</p>
                    <p>tags</p>
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
      <hr class="main-articles__line">
    </div>
  </section>
<?php get_footer(); ?>