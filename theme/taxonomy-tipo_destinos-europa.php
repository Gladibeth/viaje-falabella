<?php get_header(); //Obtener el header
  $subcategory = array(); //Array que permite obtener las subcategorias de recomendaciones y paises
  $taxonomy = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); //obtiene los datos de la taxonomia actual -->
  // Listado de categorias (Recomendaciones y países)
  $categories = get_categories(array(
      'parent'         => $taxonomy->term_id,
      'taxonomy' => 'tipo_destinos',
      'hide_empty' => false, //oculta categorias que no otenga post
      'order' => 'ASC',
      'post_status' => 'publish',
  )); 
?>
<?php foreach ($categories as $category) : ?>
    <?php array_push($subcategory,$category->term_id); //obtiene el id de recomendaciones y países?>
    <!--<h1><?php //echo ($category->name); ?></h1>-->
<?php endforeach; 
?>

<section class="main-parallax" style="background-image: url('<?php echo get_field('image-category', $taxonomy); ?>');"> <!-- muestra la imagen dinamica de la taxonomia -->
    <div class="overlay"></div>
    <div class="main-parallax__title">
    <h1><?php echo $taxonomy->name; ?></h1>
    </div>
  </section>
  <section class="main-breadcrumb">
    <div class="container">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Recomendaciones</a>
        </li>
        <span class="span_tabs">/</span>
        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Paises</a>
        </li>
       
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <section class="main-articles" itemscope itemtype="http://schema.org/ScholarlyArticle">
            <div class="container">
              <div class="main-articles__content">
                <?php
                  // Listado de subcategorias países
                  $subcategories = get_categories(array(
                  'parent'         => $subcategory[1],
                  'taxonomy' => 'tipo_destinos',
                  'hide_empty' => false, //oculta categorias que no otenga post
                  'order_by' => 'name',
                  'order' => 'ASC',
                  'post_status' => 'publish',
                )); ?>
                <?php foreach ($subcategories as $sub_category) : ?>
                  <div class="main-articles__item">
                  <a href="<?php echo bloginfo('url').'/'.$sub_category->taxonomy.'/'.$sub_category->slug;?>">
                      <div class="main-articles__img">
                      <img class="img-round lazy" data-src="<?php echo get_field('image-category', $sub_category); ?>">
                      </div>
                      <div class="main-articles__title" itemprop="name">
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
              <!-- <hr class="main-articles__line"> -->
            </div>
          </section>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <section class="main-country main-country">
            <div class="container">
              <div class="main-country__content">
                <?php
                  // Listado de subcategorias recomendaciones
                  $subcategories = get_categories(array(
                  'parent'         => $subcategory[0],
                  'taxonomy' => 'tipo_destinos',
                  'hide_empty' => false, //oculta categorias que no otenga post
                  'order_by' => 'name',
                  'order' => 'ASC',
                  'post_status' => 'publish',
                )); ?>
                <?php foreach ($subcategories as $sub_category) : ?>
                <div class="main-country__item">
                  <a href="<?php echo bloginfo('url').'/'.$sub_category->taxonomy.'/'.$sub_category->slug;?>">
                    <div class="main-country__img">
                      <img class="img-round lazy" data-src="<?php echo get_field('image-category', $sub_category); ?>">
                    </div>
                    <div class="main-country__title" itemprop="name">
                      <p><?php echo ($sub_category->name); ?></p>
                    </div>
                    <!-- <div class="main-country__btn">
                      <div class="btn_custom btn--medium btn--filled">
                        <a href="<?php echo bloginfo('url').'/'.$sub_category->taxonomy.'/'.$sub_category->slug;?>">Ver más</a>
                      </div>
                    </div> -->
                    </a>
                  </div>
                  <?php endforeach;?>
              </div>
              <!-- <hr class="maiFmain-article__btn
              n-articles__line"> -->
            </div>
          </section>
        </div>
      
      </div>
    </div>
  </section>
  
<?php get_footer(); ?>