<?php get_header(); ?> 
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <section class="main-parallax main-parallax__banner--parallax" style="background-image: url('<?php the_post_thumbnail_url()?>">
    <div class="mask"></div>
    <div class="main-parallax--search">
      <div class="container">
        <div class="main-about__bannertitle">
          <?php $title = explode( ' ',get_the_title());?>
          <h1><?php echo $title[0];?>
            <span><?php echo $title[1];?></span>
          </h1>

        </div>
      </div>
    </div>
  </section>
  <section class="main-about">
    <div class="container">
      <div class="main-about__content">
        <div class="main-about__item">
          <div class="main-about__text">
              <?php the_content();?>
            <div class="main-about__descrption">
              <div class="main-post__btn">
                <a class="btn_custom btn--medium btn-border" data-toggle="modal" href="#about">
                  Visítanos!
                </a>
              </div>
              <hr class="main-about__line">
              <div class="main-about__subtitle">
                <p>
                  20 RAZONES PARA COMPRAR EN 
                  <span>VIAJES FALABELLA</span>
                </p>
              </div>
            </div>
            <div class="main-about__slider">
              <?php
                $args = array(
                'post_type' => 'galerias',
              );
                $loop = new WP_Query( $args );
              ?>
              <?php while( $loop->have_posts() ) : $loop->the_post();?>
                <?php 
                  $img_id = get_post_thumbnail_id(get_the_ID());
                  $alt_carousel = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
                ?>
                <div class="main-about__slideritem">
                  <div class="main-about__sliderimg">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $alt_carousel;?>">
                    <hr class="main-about__line">
                  </div>
                  <div class="main-about__slidertitle">
                    <p><?php the_title();?></p>
                  </div>
                </div>
              <?php endwhile;
	              wp_reset_query();
              ?>
            </div>
          </div>
        </div>
        <div class="main-about__item">
          <div class="main-about__img">
            <div class="main-posts__item">
              <div class="main-posts__sidebar">
                <div class="sidebar">
                    <?php if (get_field('sidebar')):?>
                    <a href="<?php echo get_field('sidebar_link');?>" target="_blank" rel="noopener noreferrer">
                      <?php 
                          $img_id = get_post_thumbnail_id(get_the_ID());
                          $alt = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
                      ?>
                      <img src="<?php echo get_field('sidebar_imagen');?>" alt="<?php echo $alt;?>">
                    </a>
                  <?php else:?>
                      <?php if (!dynamic_sidebar('sidebar')); ?>   
                  <?php endif;?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <?php endwhile; endif; ?>
    <div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog--ubication" role="document">
      <div class="modal-content">
      
        <div class="modal-body modal-body--ubications">
          <div class="main-modal__content">
            <div class="main-modal__item">
              <div class="main-modal__first">
                <div class="main-modal__title">
                  <p>Sucursales</p>
                </div>
                <select class="form-control" name="sucursales" id="sucursales">
      
                  <option value="bogota">Bogotá</option>
                  <option value="chia">Chía</option>
                  <option value="medellin">Medellín</option>
                  <option value="cali">Cali</option>
                  <option value="bucaramanga">Bucaramanga</option>
                  <option value="barranquilla">Barranquilla</option>
                  <option value="pereira">Pereira</option>
                  <option value="manizales">Manizales</option>
                </select>
              </div>
              <!--direcciones bogota-->
              <div class="main-content__options ciudad" id="bogota">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <!--1-->
                <a class="tabs-a active" id="bogota-santa-fe-tab" data-toggle="pill" href="#bogota-santa-fe" role="tab" aria-controls="bogota-santa-fe" aria-selected="true">
                  <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>C.C. SANTA FÉ</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Calle 185 # 45 - 03 - Tienda Falabella</span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>5930230 - Ext: 6094 - 6095</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>calacevedo@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>
                <!--2-->
                <a class="tabs-a" id="bogota-parque-colina-tab" data-toggle="pill" href="#bogota-parque-colina" role="tab" aria-controls="bogota-parque-colina" aria-selected="false">
                  <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>C.C. PARQUE LA COLINA</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Carrera 58D # 146 – 51 – Tienda Falabella</span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>5930230 Ext: 4463 – 4464 – 4465</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>calacevedo@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>

                </a>
                <!--3-->
                <a class="tabs-a" id="bogota-la-felicidad-tab" data-toggle="pill" href="#bogota-la-felicidad" role="tab" aria-controls="bogota-la-felicidad" aria-selected="false">
                  <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>C.C. LA FELICIDAD</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Av. Boyacá # 13 – 01 Tienda Falabella</span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>5930230 Ext: 4749</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>jmbenavides@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>

                <!--4-->
                <a class="tabs-a" id="bogota-unicentro-tab" data-toggle="pill" href="#bogota-unicentro" role="tab" aria-controls="bogota-unicentro" aria-selected="false">
                <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>C.C. UNICENTRO</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Carrera 15 # 127 – 23 Tienda Falabella</span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>5930230 Ext: 6460 – 6467 – 6464</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>calacevedo@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>

                <!--5-->
                <a class="tabs-a" id="bogota-titan-plaza-tab" data-toggle="pill" href="#bogota-titan-plaza" role="tab" aria-controls="bogota-titan-plaza" aria-selected="false">
                  <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>C.C. TITÁN PLAZA</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Carrera 72 # 80 – 94 Tienda Falabella</span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>5930230 Ext: 5258 – 5257 – 5259</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>jmbenavides@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>

                <!--6-->
                <a class="tabs-a" id="bogota-galerias-tab" data-toggle="pill" href="#bogota-galerias" role="tab" aria-controls="bogota-galerias" aria-selected="false">
                  <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>C.C. GALERIAS</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Calle 54 # 25 – 81 Tienda Falabella</span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>5930230 Ext: 6567 – 6566</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>jmbenavides@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>

                <!--7-->
                <a class="tabs-a" id="bogota-hayuelos-tab" data-toggle="pill" href="#bogota-hayuelos" role="tab" aria-controls="bogota-hayuelos" aria-selected="false">
                  <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>C.C. HAYUELOS</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Calle 20 # 82 – 52 Tienda Falabella</span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>5930230 Ext: 6327 – 6326</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>jmbenavides@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>

                <!--8-->
                <a class="tabs-a" id="bogota-centro-mayor-tab" data-toggle="pill" href="#bogota-centro-mayor" role="tab" aria-controls="bogota-centro-mayor" aria-selected="false">
                  <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>CENTRO MAYOR</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Calle 20 # 82 – 52 Tienda Falabella</span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>5930230 Ext: 6327 – 6326</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>jmbenavides@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>

                <!--9-->
                <a class="tabs-a" id="bogota-boutique-calle-99-tab" data-toggle="pill" href="#bogota-boutique-calle-99" role="tab" aria-controls="bogota-boutique-calle-99" aria-selected="false">
                  <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>C.C. BOUTIQUE CALLE 99</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Calle 99 # 11a – 40 Tienda Falabella</span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>5930230 Ext: 7287 – 7282</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>jmbenavides@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>

                <!--10-->
                <a class="tabs-a" id="bogota-homecenter-80-tab" data-toggle="pill" href="#bogota-homecenter-80" role="tab" aria-controls="bogota-homecenter-80" aria-selected="false">
                  <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>HOMECENTER CALLE 80</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Carrera 68 # 80 – 77</span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>5930230 Ext: 7055 – 7030</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>jmbenavides@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>

                 <!--11-->
                 <a class="tabs-a" id="bogota-homecenter-68-tab" data-toggle="pill" href="#bogota-homecenter-68" role="tab" aria-controls="bogota-homecenter-68" aria-selected="false">
                  <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>HOMECENTER CALLE AV. 68 SUR</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Carrera 68 # 37 - 37 Sur</span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>5930230 Ext: 8384 – 8385 – 8396</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>jmbenavides@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>
                </div>
              </div>
              <!--end direcciones bogota-->
              
              <!--direcciones chia-->
              <div class="main-content__options js-ocultarCiudad ciudad" id="chia">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                 <!--1-->
                 <a class="tabs-a active" id="chia-contanar-tab" data-toggle="pill" href="#chia-contanar" role="tab" aria-controls="chia-contanar" aria-selected="true">
                  <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>C.C. FONTANAR</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Km 2.5 Via Chía – Cajica Costado Oriental </span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>5930230 Ext: 5895 – 5896</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>calacevedo@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>
                </div>
              </div>
              <!--end direcciones chia-->
              
              <!--direcciones medellin-->
              <div class="main-content__options js-ocultarCiudad ciudad" id="medellin">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <!--1-->
                <a class="tabs-a active" id="medellin-santafe-tab" data-toggle="pill" href="#medellin-santafe" role="tab" aria-controls="medellin-santafe" aria-selected="true">
                  <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>C.C. SANTAFÉ</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Carrera 43 A # 7 Sur – 170 Tienda Falabella</span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>3569180 Ext: 6892 – 6894</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>yduque@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>

                <!--2-->
                <a class="tabs-a" id="medellin-san-diego-tab" data-toggle="pill" href="#medellin-san-diego" role="tab" aria-controls="medellin-san-diego" aria-selected="false">
                  <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>C.C.  SAN DIEGO</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Carrera 43 # 36 – 04 Tienda Falabella</span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>3569180 Ext: 6249 – 6228 – 6229</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>yduque@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>

                 <!--3-->
                 <a class="tabs-a" id="medellin-homecenter-san-juan-tab" data-toggle="pill" href="#medellin-homecenter-san-juan" role="tab" aria-controls="medellin-homecenter-san-juan" aria-selected="false">
                  <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>C.C. HOME CENTER SAN JUAN</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Calle 44 # 65 – 100 Homecenter</span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>3569180 Ext:</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>yduque@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>

                </div>
              </div>
              <!--end direcciones medellin-->

              <!--direcciones cali-->
              <div class="main-content__options js-ocultarCiudad ciudad" id="cali">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <!--1-->
                  <a class="tabs-a active" id="cali-unicentro-tab" data-toggle="pill" href="#cali-unicentro" role="tab" aria-controls="cali-unicentro" aria-selected="true">
                    <div class="main-modal__box">
                      <div class="main-modal__ubication">
                        <p>C.C. UNICENTRO</p>
                        <hr class="main-about__line">
                      </div>
                      <ul class="main-modal__ul">
                        <li>
                          DIRECCIÓN: 
                          <span>Carrera 100 # 5 – 169 local 208</span>
                        </li>
                        <li>
                          TELÉFONO:  
                          <span>4891677 Ext: 6648 – 6649 – 6598</span>
                        </li>
                        <li>
                          HORARIO: 
                          <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                        </li>
                        <li>
                          CORREO: 
                          <span>gialvega@falabella.com.co</span>
                        </li>
                      </ul>
                    </div>
                  </a>
                    <!--2-->
                    <a class="tabs-a" id="cali-world-trade-center-tab" data-toggle="pill" href="#cali-world-trade-center" role="tab" aria-controls="cali-world-trade-center" aria-selected="false">
                    <div class="main-modal__box">
                      <div class="main-modal__ubication">
                        <p>WORLD TRADE CENTER</p>
                        <hr class="main-about__line">
                      </div>
                      <ul class="main-modal__ul">
                        <li>
                          DIRECCIÓN: 
                          <span>Calle 38 # 6 – 35 Tienda Falabella</span>
                        </li>
                        <li>
                          TELÉFONO:  
                          <span>4891677 Ext: 5695</span>
                        </li>
                        <li>
                          HORARIO: 
                          <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                        </li>
                        <li>
                          CORREO: 
                          <span>gialvega@falabella.com.co</span>
                        </li>
                      </ul>
                    </div>
                  </a>

                  <!--3-->
                  <a class="tabs-a" id="cali-jardin-plaza-tab" data-toggle="pill" href="#cali-jardin-plaza" role="tab" aria-controls="cali-jardin-plaza" aria-selected="false">
                  <div class="main-modal__box">
                    <div class="main-modal__ubication">
                      <p>C.C JARDÍN PLAZA</p>
                      <hr class="main-about__line">
                    </div>
                    <ul class="main-modal__ul">
                      <li>
                        DIRECCIÓN: 
                        <span>Calle 25 # 98 – 416 Local 229</span>
                      </li>
                      <li>
                        TELÉFONO:  
                        <span>4891677 Ext: 5995 – 5996</span>
                      </li>
                      <li>
                        HORARIO: 
                        <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                      </li>
                      <li>
                        CORREO: 
                        <span>gialvega@falabella.com.co</span>
                      </li>
                    </ul>
                  </div>
                </a>
                </div>
              </div>
              <!--end direcciones cali-->

              <!--direcciones bucaramanga-->
              <div class="main-content__options js-ocultarCiudad ciudad" id="bucaramanga">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <!--1-->
                <a class="tabs-a active" id="bucaramanga-caracoli-tab" data-toggle="pill" href="#bucaramanga-caracoli" role="tab" aria-controls="bucaramanga-caracoli" aria-selected="true">
                    <div class="main-modal__box">
                      <div class="main-modal__ubication">
                        <p>C.C. Parque Caracolí</p>
                        <hr class="main-about__line">
                      </div>
                      <ul class="main-modal__ul">
                        <li>
                          DIRECCIÓN: 
                          <span>Diagonal 31 # 30 – 131 Tienda Falabella</span>
                        </li>
                        <li>
                          TELÉFONO:  
                          <span>6853585 Ext: 5459 – 5458</span>
                        </li>
                        <li>
                          HORARIO: 
                          <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                        </li>
                        <li>
                          CORREO: 
                          <span>yduque@falabella.com.co</span>
                        </li>
                      </ul>
                    </div>
                  </a>
                <!--2-->
                <a class="tabs-a" id="bucaramanga-homecenter-tab" data-toggle="pill" href="#bucaramanga-homecenter" role="tab" aria-controls="bucaramanga-homecenter" aria-selected="false">
                    <div class="main-modal__box">
                      <div class="main-modal__ubication">
                        <p>HOMECENTER</p>
                        <hr class="main-about__line">
                      </div>
                      <ul class="main-modal__ul">
                        <li>
                          DIRECCIÓN: 
                          <span>Carrera 21 # 45 – 02 Local 2</span>
                        </li>
                        <li>
                          TELÉFONO:  
                          <span>6853585 Ext: 5459 – 5458</span>
                        </li>
                        <li>
                          HORARIO: 
                          <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                        </li>
                        <li>
                          CORREO: 
                          <span>yduque@falabella.com.co</span>
                        </li>
                      </ul>
                    </div>
                  </a>

                  </div> 
              </div>
              <!--end direcciones bucaramanga-->

              <!--direcciones barranquilla-->
              <div class="main-content__options js-ocultarCiudad ciudad" id="barranquilla">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <!--1-->
                <a class="tabs-a active" id="barranquilla-villa-country-tab" data-toggle="pill" href="#barranquilla-villa-country" role="tab" aria-controls="barranquilla-villa-country" aria-selected="true">
                    <div class="main-modal__box">
                      <div class="main-modal__ubication">
                        <p>C.C. VILLA COUNTRY</p>
                        <hr class="main-about__line">
                      </div>
                      <ul class="main-modal__ul">
                        <li>
                          DIRECCIÓN: 
                          <span>Calle 78 # 53 – 70 Tienda Falabella</span>
                        </li>
                        <li>
                          TELÉFONO:  
                          <span>3308300 Ext: 5169 – 5158</span>
                        </li>
                        <li>
                          HORARIO: 
                          <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                        </li>
                        <li>
                          CORREO: 
                          <span>yduque@falabella.com.co</span>
                        </li>
                      </ul>
                    </div>
                  </a>
                <!--2-->
                <a class="tabs-a" id="barranquilla-homecenter-tab" data-toggle="pill" href="#barranquilla-homecenter" role="tab" aria-controls="barranquilla-homecenter" aria-selected="false">
                    <div class="main-modal__box">
                      <div class="main-modal__ubication">
                        <p>HOMECENTER NORTE</p>
                        <hr class="main-about__line">
                      </div>
                      <ul class="main-modal__ul">
                        <li>
                          DIRECCIÓN: 
                          <span>Carrera 53 # 99 – 160</span>
                        </li>
                        <li>
                          TELÉFONO:  
                          <span>3308300 Ext: 8111 – 8112</span>
                        </li>
                        <li>
                          HORARIO: 
                          <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                        </li>
                        <li>
                          CORREO: 
                          <span>yduque@falabella.com.co</span>
                        </li>
                      </ul>
                    </div>
                  </a>

                  </div> 
              </div>
              <!--end direcciones barranquilla-->

               <!--direcciones pereira-->
               <div class="main-content__options js-ocultarCiudad ciudad" id="pereira">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <!--1-->
                <a class="tabs-a active" id="pereira-parque-arboleda-tab" data-toggle="pill" href="#pereira-parque-arboleda" role="tab" aria-controls="pereira-parque-arboleda" aria-selected="true">
                    <div class="main-modal__box">
                      <div class="main-modal__ubication">
                        <p>C.C. PARQUE ARBOLEDA</p>
                        <hr class="main-about__line">
                      </div>
                      <ul class="main-modal__ul">
                        <li>
                          DIRECCIÓN: 
                          <span>Av Circunvalar # 5 – 20 local 415</span>
                        </li>
                        <li>
                          TELÉFONO:  
                          <span>3400510 Ext: 6996 – 6993 – 6994</span>
                        </li>
                        <li>
                          HORARIO: 
                          <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                        </li>
                        <li>
                          CORREO: 
                          <span>gialvega@falabella.com.co</span>
                        </li>
                      </ul>
                    </div>
                  </a>
                <!--2-->
                <a class="tabs-a" id="pereira-parque-arboleada-pereira-tab" data-toggle="pill" href="#pereira-parque-arboleada-pereira" role="tab" aria-controls="pereira-parque-arboleada-pereira" aria-selected="false">
                    <div class="main-modal__box">
                      <div class="main-modal__ubication">
                        <p>PARQUE ARBOLEDA / PEREIRA</p>
                        <hr class="main-about__line">
                      </div>
                      <ul class="main-modal__ul">
                        <li>
                          DIRECCIÓN: 
                          <span>Avenida Circunvalar # 5 – 20 local 214</span>
                        </li>
                        <li>
                          TELÉFONO:  
                          <span>3400510 Ext: 6992 – 6993 – 6994 – 6994</span>
                        </li>
                        <li>
                          HORARIO: 
                          <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                        </li>
                        <li>
                          CORREO: 
                          <span>yduque@falabella.com.co</span>
                        </li>
                      </ul>
                    </div>
                  </a>

                  </div> 
              </div>
              <!--end direcciones pereira-->

              <!--direcciones manizales-->
              <div class="main-content__options js-ocultarCiudad ciudad" id="manizales">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <!--1-->
                <a class="tabs-a active" id="manizales-plaza-tab" data-toggle="pill" href="#manizales-plaza" role="tab" aria-controls="manizales-plaza" aria-selected="true">
                    <div class="main-modal__box">
                      <div class="main-modal__ubication">
                        <p>C.C. MALL PLAZA / MANIZALES</p>
                        <hr class="main-about__line">
                      </div>
                      <ul class="main-modal__ul">
                        <li>
                          DIRECCIÓN: 
                          <span>Avenida Kevin Ángel # 55 D – 10 F local 135</span>
                        </li>
                        <!-- <li>
                          TELÉFONO:  
                          <span>-</span>
                        </li> -->
                        <li>
                          HORARIO: 
                          <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m. </span>
                        </li>
                        <li>
                          CORREO: 
                          <span>gialvega@falabella.com.co</span>
                        </li>
                      </ul>
                    </div>
                  </a>
                  </div> 
              </div>
              <!--end direcciones manizales-->
              
            </div>

            <!--mapa bogota-->
            <div class="main-modal__item mapa-ciudad" id="mapa-bogota">
              <div class="tab-content" id="v-pills-tabContent">

                <!--1-->
                <div class="tab-pane tab-pane--modal fade show active" id="bogota-santa-fe" role="tabpanel" aria-labelledby="bogota-santa-fe-tab">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15904.16865099533!2d-74.05417073022461!3d4.762666399999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f859394581b81%3A0x49a68dce30e7149f!2sFalabella%20SantaF%C3%A9!5e0!3m2!1ses-419!2sve!4v1573742526153!5m2!1ses-419!2sve" width="" height="" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                
                <!--2-->
                <div class="tab-pane tab-pane--modal fade show" id="bogota-parque-colina" role="tabpanel" aria-labelledby="bogota-parque-colina-tab">
                  parque colina
                </div>

                <!--3-->
                <div class="tab-pane tab-pane--modal fade show" id="bogota-la-felicidad" role="tabpanel" aria-labelledby="bogota-la-felicidad-tab">
                 la-felicidad
                </div>

                <!--4-->
                <div class="tab-pane tab-pane--modal fade show" id="bogota-unicentro" role="tabpanel" aria-labelledby="bogota-unicentro-tab">
                unicentro
              </div>

              <!--5-->
              <div class="tab-pane tab-pane--modal fade show" id="bogota-titan-plaza" role="tabpanel" aria-labelledby="bogota-titan-plaza-tab">
                titan-plaza
              </div>

              <!--6-->
              <div class="tab-pane tab-pane--modal fade show" id="bogota-galerias" role="tabpanel" aria-labelledby="bogota-galerias-tab">
                galerias
              </div>

              <!--7-->
              <div class="tab-pane tab-pane--modal fade show" id="bogota-hayuelos" role="tabpanel" aria-labelledby="bogota-hayuelos-tab">
                hayuelos
              </div>

              <!--8-->
              <div class="tab-pane tab-pane--modal fade show" id="bogota-centro-mayor" role="tabpanel" aria-labelledby="bogota-centro-mayor-tab">
                centro-mayor
              </div>

              <!--9-->
              <div class="tab-pane tab-pane--modal fade show" id="bogota-boutique-calle-99" role="tabpanel" aria-labelledby="bogota-boutique-calle-99-tab">
                boutique-calle-99
              </div>

              <!--9-->
              <div class="tab-pane tab-pane--modal fade show" id="bogota-homecenter-80" role="tabpanel" aria-labelledby="bogota-homecenter-80-tab">
                homecenter-80
              </div>

              <!--9-->
              <div class="tab-pane tab-pane--modal fade show" id="bogota-homecenter-68" role="tabpanel" aria-labelledby="bogota-homecenter-68-tab">
                homecenter-68
              </div>
                 
                
              </div>

            </div>
            <!--end mapa bogota-->
            
            <!--mapa chia-->
            <div class="main-modal__item js-ocultarCiudad mapa-ciudad" id="mapa-chia">
              <div class="tab-content" id="v-pills-tabContent">

                <!--1-->
                <div class="tab-pane tab-pane--modal fade show active" id="chia-fontanar" role="tabpanel" aria-labelledby="chia-fontanar-tab">
                  chia
                </div>
              </div>
            </div>
            <!--end mapa chia-->

            <!--mapa medellin-->
            <div class="main-modal__item js-ocultarCiudad mapa-ciudad" id="mapa-medellin">
              <div class="tab-content" id="v-pills-tabContent">

                <!--1-->
                <div class="tab-pane tab-pane--modal fade show active" id="medellin-santafe" role="tabpanel" aria-labelledby="medellin-santafe-tab">
                  santafe
                </div>

                <!--2-->
                <div class="tab-pane tab-pane--modal fade show" id="medellin-san-diego" role="tabpanel" aria-labelledby="medellin-san-diego-tab">
                  san-diego
                </div>

                <!--3-->
                <div class="tab-pane tab-pane--modal fade show" id="medellin-homecenter-san-juan" role="tabpanel" aria-labelledby="medellin-homecenter-san-juan-tab">
                  homecenter-san-juan
                </div>
              </div>
            </div>
            <!--end mapa medellin-->

            <!--mapa cali-->
            <div class="main-modal__item js-ocultarCiudad mapa-ciudad" id="mapa-cali">
              <div class="tab-content" id="v-pills-tabContent">

                <!--1-->
                <div class="tab-pane tab-pane--modal fade show active" id="cali-unicentro" role="tabpanel" aria-labelledby="cali-unicentro-tab">
                cali-unicentro
                </div>
                <!--2-->
                <div class="tab-pane tab-pane--modal fade show" id="cali-world-trade-center" role="tabpanel" aria-labelledby="cali-world-trade-center-tab">
                cali-world-trade-center
                </div>
                <!--3-->
                <div class="tab-pane tab-pane--modal fade show" id="cali-jardin-plaza" role="tabpanel" aria-labelledby="cali-jardin-plaza-tab">
                cali-jardin-plaza
                </div>
              </div>
            </div>
            <!--end mapa cali-->

            <!--mapa bucaramanga-->
            <div class="main-modal__item js-ocultarCiudad mapa-ciudad" id="mapa-bucaramanga">
              <div class="tab-content" id="v-pills-tabContent">

                <!--1-->
                <div class="tab-pane tab-pane--modal fade show active" id="bucaramanga-caracoli" role="tabpanel" aria-labelledby="bucaramanga-caracoli-tab">
                  bucaramanga caracoli
                </div>

                <!--2-->
                <div class="tab-pane tab-pane--modal fade show active" id="bucaramanga-homecenter" role="tabpanel" aria-labelledby="bucaramanga-homecenter-tab">
                  bucaramanga home center
                </div>
              </div>
            </div>
            <!--end mapa bucaramanga-->

            <!--mapa barranquilla-->
            <div class="main-modal__item js-ocultarCiudad mapa-ciudad" id="mapa-barranquilla">
              <div class="tab-content" id="v-pills-tabContent">

                <!--1-->
                <div class="tab-pane tab-pane--modal fade show active" id="barranquilla-villa-country" role="tabpanel" aria-labelledby="barranquilla-villa-country-tab">
                  barranquilla villa-country
                </div>

                <!--2-->
                <div class="tab-pane tab-pane--modal fade show active" id="barranquilla-homecenter" role="tabpanel" aria-labelledby="barranquilla-homecenter-tab">
                  barranquilla home center
                </div>
              </div>
            </div>
            <!--end mapa barranquilla-->

            <!--mapa pereira-->
            <div class="main-modal__item js-ocultarCiudad mapa-ciudad" id="mapa-pereira">
              <div class="tab-content" id="v-pills-tabContent">

                <!--1-->
                <div class="tab-pane tab-pane--modal fade show active" id="pereira-parque-arboleda" role="tabpanel" aria-labelledby="pereira-parque-arboleda-tab">
                  pereira parque-arboleda
                </div>

                <!--2-->
                <div class="tab-pane tab-pane--modal fade show" id="pereira-parque-arboleada-pereira" role="tabpanel" aria-labelledby="pereira-parque-arboleada-pereira-tab">
                  pereira 2
                </div>
              </div>
            </div>
            <!--end mapa pereira-->

            <!--mapa manizales-->
            <div class="main-modal__item js-ocultarCiudad mapa-ciudad" id="mapa-manizales">
              <div class="tab-content" id="v-pills-tabContent">

                <!--1-->
                <div class="tab-pane tab-pane--modal fade show active" id="manizales-plaza" role="tabpanel" aria-labelledby="manizales-plaza-tab">
                  manizales
                </div>
              </div>
            </div>
            <!--end mapa pereira-->


          </div>
          
        </div>
        
      </div>
    </div>
  </div>
<?php get_footer(); ?> 