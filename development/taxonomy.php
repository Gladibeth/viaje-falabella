<?php get_header(); ?>
<?php $taxonomy = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); ?>
<section class="main-parallax" style="background-image: url('<?php echo get_field('image-category', $taxonomy); ?>');">
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
          <section class="main-country main-country">
            <div class="container">
              <div class="main-country__content">
                <div class="main-country__item">
                  <div class="main-country__img">
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <section class="main-country main-country">
            <div class="container">
              <div class="main-country__content">
                <div class="main-country__item">
                  <div class="main-country__img">
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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
                    <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                  </div>
                  <div class="main-country__title">
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