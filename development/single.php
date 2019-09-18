<?php
    $args = array(
    'post_type' => 'destinos',
    'meta_key' => 'post_views',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'
    );
    $loop = new WP_Query( $args );
    $popular_posts = new WP_Query( $args );
?>
<?php while ( $popular_posts->have_posts() ) : $popular_posts->the_post();?>
    <?php the_title();?>

<?php endwhile;
wp_reset_query();
?>
