<?php get_header(); ?> 
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <section class="main-parallax main-parallax__banner--parallax" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/articulo-1.jpg')">
    <div class="mask"></div>
    <div class="main-parallax--search">
      <div class="container">
        <div class="main-about__bannertitle">
          <h2>
            <?php the_title();?>
          </h2>

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
                    <img src="<?php the_post_thumbnail_url('455x160'); ?>" alt="<?php echo $alt_carousel;?>">
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
                <select class="form-control">
                  <option>
                    <a class="tabs-a" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Bogotá</a>
                    
                 </option>
                  
                    <a class="tabs-a" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Cartagena</a>
                  </option>
                </select>
              </div>
              <div class="main-content__options">

                <div class="tab-content" id="v-pills-tabContent">
                
                  <div class="tab-pane tab-pane--modal fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                  <div class="tab-pane tab-pane--modal fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                </div>
                  
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="tabs-a active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
    
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
                  <a class="tabs-a" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
    
                    <div class="main-modal__box">
                      <div class="main-modal__ubication">
                        <p>C.C. PARQUE LA COLINA</p>
                        <hr class="main-about__line">
                      </div>
    
                      <ul class="main-modal__ul">
                        <li>
                          DIRECCIÓN: 
                          <span>Carrera 58 D # 146 - 51 - Tienda Falabella</span>
                        </li>
                        <li>
                          TELÉFONO: 
                          <span>5930230 - Ext: 4463 - 4464 - 4465</span>
                        </li>
                        <li>
                          HORARIO: 
                          <span>L a S: 10 a.m. a 9 p.m. - D y F: 10 a.m. a 8 p.m.</span>
                        </li>
                        <li>
                          CORREO: 
                          <span>calacevedo@falabella.com.co</span>
                        </li>
                      </ul>
                    </div>
                  </a>
                  <a class="tabs-a" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                  <a class="tabs-a" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                </div>
              </div>
              
            </div>
            <div class="main-modal__item">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane tab-pane--modal fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15904.16865099533!2d-74.05417073022461!3d4.762666399999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f859394581b81%3A0x49a68dce30e7149f!2sFalabella%20SantaF%C3%A9!5e0!3m2!1ses-419!2sve!4v1573742526153!5m2!1ses-419!2sve" width="" height="" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="tab-pane tab-pane--modal fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.2086995298246!2d-74.06834878584232!3d4.733774996561886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f851a62f14a77%3A0x1ac79ea4d13d41c9!2sFalabella%20Parque%20La%20Colina!5e0!3m2!1ses-419!2sve!4v1573742558506!5m2!1ses-419!2sve" width="" height="" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="tab-pane tab-pane--modal fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                <div class="tab-pane tab-pane--modal fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
              </div>

            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?> 