<?php get_header(); //Obtener el header
$taxonomy = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); //obtiene los datos de la taxonomia actual --> 
?>
<section class="main-parallax">
	<div class="mask">
	</div>
	<?php 
      $image = get_field('image-category',$taxonomy);
      $image_sizes = $image['sizes'];
    ?>
    <img class="img-round" srcset="<?php echo $image_sizes['480x792']; ?> 480w,<?php echo $image_sizes['768x689']; ?> 768w,<?php echo $image_sizes['555x360']; ?> 1280w,<?php echo $image['url']; ?> 1920w," alt="<?php echo $image['alt'];?>" style="width: 100%;height: 100%;object-fit: cover;">

	
	<div class="main-parallax__title main-parallax__title--post">
	<h1><?php echo $taxonomy->name;?></h1>
	<?php  if (!empty($taxonomy->description)):?>
		<span><?php echo $taxonomy->description;?></span>
	<?php endif;?>
	<div>
		<ul class="breadcrumb">
			<?php
				$breadcrumbs = wp_get_post_terms( $post->ID, $taxonomy->taxonomy, array( 'order' => 'DESC' ) );
			?>
			<?php foreach ($breadcrumbs as $breadcrumb):?>
			<li><a href="<?php echo bloginfo('url').'/'.$taxonomy->taxonomy.'/'.$breadcrumb->slug;?>"><?php echo $breadcrumb->name;?></a><li>
			<?php endforeach;?>
		</ul>
	</div>	
	<div class="main-parallax__btn">
		<div class="btn_custom btn--medium btn--filled--decoration">
			<i class="fa fa-angle-left" style="margin-right:10px;" aria-hidden="true"></i>
			<a href="javascript:window.history.back();">Volver</a>
		</div>
	</div>
</section>
<section class="main-posts">
	<div class="container">
		<ul style="border-bottom: 2px solid #3fae2a;" class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a style="text-transform: initial;" class="nav-link nav-link--text active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
				aria-controls="pills-home" aria-selected="true">Más Recientes</a>
			</li>
			<li class="nav-item">
				<a style="text-transform: initial;" class="nav-link nav-link--text" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
				aria-controls="pills-profile" aria-selected="false">Más Populares</a>
			</li>
			<li class="nav-item">
				<a style="text-transform: initial;" class="nav-link nav-link--text" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
				aria-controls="pills-contact" aria-selected="false">Más comentarios</a>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				<div itemscope itemtype="http://schema.org/LiveBlogPosting" class="main-posts__content">
					<?php //Post mas recientes
					$args = array(
						'post_type' => get_post_type(),
						'tax_query' => array(
						array(
							'taxonomy' => $taxonomy->taxonomy,
							'field' => 'slug',
							'terms' => $taxonomy->slug
						))
					);
					$loop = new WP_Query( $args );
					?>
					<?php function post(){?> <!--esta función permite mostrar los post de las 3 secciones-->
						<?php 
						$count = 0;
						$img_id = get_post_thumbnail_id(get_the_ID());
						$alt = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
						?>
						 <?php if($count <=3):?>
							<a class="main-posts__item" href="<?php the_permalink(); ?>">
								<div class="main-posts__img">
									<img itemprop="image" alt="<?php echo $alt;?>" class="img-round" src="<?php the_post_thumbnail_url('555x360');?>"/>
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
									<hr class="main-articles__line">
									<div class="main-posts__social">
										<div class="main-posts__comments">
											<p><?php echo $numero_de_comentarios = get_comments_number();?></p>
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
								</div>
							</a>
						 <?php else:?>
							<a class="main-posts__item" href="<?php the_permalink(); ?>">
								<div class="main-posts__img">
									<img itemprop="image" alt="<?php echo $alt;?>" class="img-round lazy" data-srcset="<?php the_post_thumbnail_url('555x360');?>"/>
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
									<hr class="main-articles__line">
									<div class="main-posts__social">
										<div class="main-posts__comments">
											<p><?php echo $numero_de_comentarios = get_comments_number();?></p>
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
								</div>
							</a>
						<?php endif;?>
					<?php }?>
					<?php while( $loop->have_posts() ) : $loop->the_post();?>
						<?php post();?>
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
						'post_type' => get_post_type(),
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
						<?php post();?>
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
						'post_type' => get_post_type(),
						'orderby' => 'comment_count',
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
						<?php post();?>
					<?php endwhile;
					wp_reset_query();
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
