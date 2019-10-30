<?php
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
                'hide_empty' => false, //oculta categorias que no otenga post
                'order_by' => 'name',
                'order' => 'ASC',
                'post_status' => 'publish',
              )); ?>
              <?php foreach ($subcategories as $sub_category) : ?>
                <div class="main-articles__item">
                  <div class="mask"></div>
             <a href="<?php echo bloginfo('url').'/'.$sub_category->taxonomy.'/'.$sub_category->slug;?>">
                <div class="main-articles__img">
                <img class="img-round lazy" src="<?php echo get_field('image-category', $sub_category); ?>">
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
