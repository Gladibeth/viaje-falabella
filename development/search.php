
<?php get_header(); ?>
<section class="main-parallax">
  <div class="overlay"></div>
  <div class="main-parallax__title main-parallax__title--post">
      <h1>Qué ver</h1>
      <span>y que hacer?</span>
      <div class="main-parallax__btn">
      <div class="btn_custom btn--medium btn--filled">
          Volver
      </div>
      </div>
  </div>
</section>
<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                 <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
<?php } ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>