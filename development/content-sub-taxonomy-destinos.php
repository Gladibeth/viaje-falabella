<!-- <?php
    $subcategory = array(); //Array que permite obtener las subcategorias de recomendaciones y paises
    $taxonomy = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); //obtiene los datos de la taxonomia actual -->
    // Listado de categorias (Recomendaciones y países)
    $categories = get_categories(array(
        'parent'         => $taxonomy->term_id,
        'taxonomy' => $taxonomy->taxonomy,
        'hide_empty' => false, //oculta categorias que no otenga post
        'order' => 'ASC',
        'post_status' => 'publish',
    )); 
?> -->
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
    <ul class="breadcrumb">
			<?php
				$breadcrumbs = wp_get_post_terms( $post->ID, $taxonomy->taxonomy, array( 'order' => 'DESC' ) );
			?>
			<?php foreach ($breadcrumbs as $breadcrumb):?>
			<li><a href="<?php echo bloginfo('url').'/'.$taxonomy->taxonomy.'/'.$breadcrumb->slug;?>"><?php echo $breadcrumb->name;?></a><li>
			<?php endforeach;?>
		</ul>
    <div class="main-parallax__btn">
      
      <div class="btn_custom btn--medium btn--filled--decoration">
        <i class="fa fa-angle-left" style="margin-right:10px;" aria-hidden="true"></i>
        <a href="javascript:window.history.back();">Volver</a>
      </div>
    </div>
  </div>
</section>
<!-- <section class="main-parallax" style="background-image: url('<?php echo get_field('image-category', $taxonomy); ?>');"> <!-- muestra la imagen dinamica de la taxonomia -->
  <div class="overlay"></div>
  <div class="main-parallax__title">

  </div>
</section>
<section class="main-breadcrumb">
  <div class="container">
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <section class="main-articles" itemscope itemtype="http://schema.org/ScholarlyArticle">
          <div class="container">
            <div class="main-articles__content">
              <?php
                $subcategories = get_categories(array(
                'parent'         => $taxonomy->term_id,
                'taxonomy' => $taxonomy->taxonomy,
                'hide_empty' => true, //oculta categorias que no otenga post
                'order_by' => 'name',
                'order' => 'ASC',
                'post_status' => 'publish',
              )); ?>
              <?php foreach ($subcategories as $sub_category) : ?>
                <div class="main-articles__item">
                  <div class="mask"></div>
             <a href="<?php echo bloginfo('url').'/'.$sub_category->taxonomy.'/'.$sub_category->slug;?>">
                <div class="main-articles__img">
                  <?php 
                    $image = get_field('image-category',$sub_category);
                    $image_sizes = $image['sizes'];
                  ?>
                  <img class="img-round lazy" data-srcset="<?php echo $image_sizes['455x160']; ?> 768w,<?php echo $image_sizes['555x360']; ?> 1024w,<?php echo $image_sizes['555x360']; ?>" alt="<?php echo $image['alt'];?>">
                </div>
                <div class="main-articles__title main-articles__title--small" itemprop="name">
                  <p><?php echo ($sub_category->name); ?></p>
                  <span><?php echo ($sub_category->description); ?></span>
                </div>
                <!-- <div class="main-article__btn">
                  <div class="btn_custom btn--medium btn--filled">
                  <a href="<?php echo bloginfo('url').'/'.$sub_category->taxonomy.'/'.$sub_category->slug;?>">Ver más</a>
                  </div>
                </div> -->
               </a>
             </div>
              <?php endforeach;?> 
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>
