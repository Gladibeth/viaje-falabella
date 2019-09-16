<?php get_header(); //Obtener el header
//   $subcategory = array(); //Array que permite obtener las subcategorias de recomendaciones y paises
//   $taxonomy = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); //obtiene los datos de la taxonomia actual -->
//   // Listado de categorias (Recomendaciones y países)
//   $categories = get_categories(array(
//       'parent'         => $taxonomy->term_id,
//       'taxonomy' => 'tipo_destinos',
//       'hide_empty' => false, //oculta categorias que no otenga post
//       'order' => 'ASC',
//       'post_status' => 'publish',
//   )); 
// ?>


<section class="main-parallax" style="background-image: url('<?php echo get_field('image-category', $taxonomy); ?>');"> <!-- muestra la imagen dinamica de la taxonomia -->
    <div class="overlay"></div>
    <div class="main-parallax__title">
      <h1>hola</h1>
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
                <div class="main-articles__item">
                  <div class="main-articles__img">
                    <img class="img-round" src="<?php echo get_template_directory_uri();?>/assets/img/Capadocia.jpg">
                  </div>
                  <div class="main-articles__title" itemprop="name">
                    <p>Qué ver</p>
                    <span>y que hacer?</span>
                  </div>
                  <div class="main-article__btn">
                    <div class="btn_custom btn--medium btn--filled">
                      Ver más
                    </div>
                  </div>
                </div>
                <div class="main-articles__item">
                  <div class="main-articles__img">
                    <img class="img-round" src="<?php echo get_template_directory_uri();?>/assets/img/Capadocia.jpg">
                  </div>
                  <div class="main-articles__title" itemprop="name">
                    <p>Lugares</p>
                    <span>recomendados</span>
                  </div>
                  <div class="main-article__btn">
                    <div class="btn_custom btn--medium btn--filled">
                      Ver más
                    </div>
                  </div>
                </div>
                <div class="main-articles__item">
                  <div class="main-articles__img">
                    <img class="img-round" src="<?php echo get_template_directory_uri();?>/assets/img/Capadocia.jpg">
                  </div>
                  <div class="main-articles__title" itemprop="name">
                    <p>Parques</p>
                    <span>u naturaleza</span>
                  </div>
                  <div class="main-article__btn">
                    <div class="btn_custom btn--medium btn--filled">
                      Ver más
                    </div>
                  </div>
                </div>
                <div class="main-articles__item">
                  <div class="main-articles__img">
                    <img class="img-round" src="<?php echo get_template_directory_uri();?>/assets/img/Capadocia.jpg">
                  </div>
                  <div class="main-articles__title" itemprop="name">
                    <p>Islas</p>
                    <span>y playas</span>
                  </div>
                  <div class="main-article__btn">
                    <div class="btn_custom btn--medium btn--filled">
                      Ver más
                    </div>
                  </div>
                </div>
                <div class="main-articles__item">
                  <div class="main-articles__img">
                    <img class="img-round" src="<?php echo get_template_directory_uri();?>/assets/img/Capadocia.jpg">
                  </div>
                  <div class="main-articles__title" itemprop="name">
                    <p>Museos</p>
                    <span>y monumentos</span>
                  </div>
                  <div class="main-article__btn">
                    <div class="btn_custom btn--medium btn--filled">
                      Ver más
                    </div>
                  </div>
                </div>
              </div>
              <hr class="main-articles__line">
            </div>
          </section>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <section class="main-country main-country">
            <div class="container">
              <div class="main-country__content">
                <div class="main-country__item">
                  <div class="main-country__img">
                    <img class="img-round" src="<?php echo get_template_directory_uri();?>/assets/img/Capadocia.jpg">
                  </div>
                  <div class="main-country__title" itemprop="name">
                    <p>Alemania</p>
                  </div>
                  <div class="main-country__btn">
                    <div class="btn_custom btn--medium btn--filled">
                      Ver más
                    </div>
                  </div>
                </div>
                <div class="main-country__item">
                  <div class="main-country__img">
                    <img class="img-round" src="<?php echo get_template_directory_uri();?>/assets/img/Capadocia.jpg">
                  </div>
                  <div class="main-country__title" itemprop="name">
                    <p>España</p>
                  </div>
                  <div class="main-country__btn">
                    <div class="btn_custom btn--medium btn--filled">
                      Ver más
                    </div>
                  </div>
                </div>
                <div class="main-country__item">
                  <div class="main-country__img">
                    <img class="img-round" src="<?php echo get_template_directory_uri();?>/assets/img/Capadocia.jpg">
                  </div>
                  <div class="main-country__title" itemprop="name">
                    <p>Grecia</p>
                  </div>
                  <div class="main-country__btn">
                    <div class="btn_custom btn--medium btn--filled">
                      Ver más
                    </div>
                  </div>
                </div>
                <div class="main-country__item">
                  <div class="main-country__img">
                    <img class="img-round" src="<?php echo get_template_directory_uri();?>/assets/img/Capadocia.jpg">
                  </div>
                  <div class="main-country__title" itemprop="name">
                    <p>Holanda</p>
                  </div>
                  <div class="main-country__btn">
                    <div class="btn_custom btn--medium btn--filled">
                      Ver más
                    </div>
                  </div>
                </div>
                <div class="main-country__item">
                  <div class="main-country__img">
                    <img class="img-round" src="<?php echo get_template_directory_uri();?>/assets/img/Capadocia.jpg">
                  </div>
                  <div class="main-country__title" itemprop="name">
                    <p>Inglaterra</p>
                  </div>
                  <div class="main-country__btn">
                    <div class="btn_custom btn--medium btn--filled">
                      Ver más
                    </div>
                  </div>
                </div>
                <div class="main-country__item">
                  <div class="main-country__img">
                    <img class="img-round" src="<?php echo get_template_directory_uri();?>/assets/img/Capadocia.jpg">
                  </div>
                  <div class="main-country__title" itemprop="name">
                    <p>Italia</p>
                  </div>
                  <div class="main-country__btn">
                    <div class="btn_custom btn--medium btn--filled">
                      Ver más
                    </div>
                  </div>
                </div>
                <div class="main-country__item">
                  <div class="main-country__img">
                    <img class="img-round" src="<?php echo get_template_directory_uri();?>/assets/img/Capadocia.jpg">
                  </div>
                  <div class="main-country__title" itemprop="name">
                    <p>Republica</p>
                    <span>checa</span>
                  </div>
                  <div class="main-country__btn">
                    <div class="btn_custom btn--medium btn--filled">
                      Ver más
                    </div>
                  </div>
                </div>
                <div class="main-country__item">
                  <div class="main-country__img">
                    <img class="img-round" src="<?php echo get_template_directory_uri();?>/assets/img/Capadocia.jpg">
                  </div>
                  <div class="main-country__title" itemprop="name">
                    <p>Suiza</p>
                    <span>checa</span>
                  </div>
                  <div class="main-country__btn">
                    <div class="btn_custom btn--medium btn--filled">
                      Ver más
                    </div>
                  </div>
                </div>
              </div>
              <hr class="main-articles__line">
            </div>
          </section>
        </div>
      
      </div>
    </div>
  </section>
  
<?php get_footer(); ?>