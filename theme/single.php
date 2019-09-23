<?php get_header(); ?>
<?php
    $page_taxonomy = basename(dirname($_SERVER['HTTP_REFERER'])); //nombre de la taxonomia; 
    $page_referer = basename($_SERVER['HTTP_REFERER']); //nombre de la subcategoria;
    $taxonomy = get_categories(array(
        'slug' =>  $page_referer,
        'taxonomy' => $page_taxonomy,
        'hide_empty' => false, //oculta categorias que no otenga post
        'order' => 'ASC',
        'showposts'=> 1,
        'post_status' => 'publish',
    )); 
  
?>
    <section class="main-parallax">
        <div class="overlay" style="background-image: url('<?php echo get_field('image-category', $taxonomy); ?>');"></div> <!-- muestra la imagen dinamica de la taxonomia -->
        <div class="main-parallax__title main-parallax__title--post" style="bottom: -60px;">
        <h1><?php echo $taxonomy[0]->name;?></h1>
        <?php   //print_r($taxonomy);?>
        <span><?php echo $taxonomy[0]->description;?><span>
        <div class="main-parallax__btn">
            <div class="btn_custom btn--medium btn--filled--decoration">
            <i class="fa fa-angle-left" style="margin-right:10px;" aria-hidden="true"></i>
            Volver
            </div>
        </div>
        </div>
    </section>
    <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
    <section class="main-posts">
        <div class="container">
        <div class="main-detailsposts__content">
            <div class="main-posts__item" href="post.html">
            <div class="main-posts__box">
                <div class="main-posts__title">
                <p><?php the_title();?></p>
                </div>
                <div class="main-posts__autor">
                <div class="main-posts__name">
                    <p><?php the_author();?></p>
                </div>
                <div class="main-posts__line"></div>
                <div class="main-posts__date">
                    <span><?php the_date('d/m/y');?></span>
                </div>
                </div>
                <hr class="main-articles__line">
                <div class="main-posts__social">
                <div class="main-posts__comments d-flex">
                    <i class="fa fa-comment-o" style="margin-right: 5px;" aria-hidden="true"></i>
                    <p><?php echo $numero_de_comentarios = get_comments_number(); ?></p>
                    <?php echo get_the_tag_list('tipo_destinos_tags'); ?>
                    
                </div>
                <div class="main-posts__tags">
                    <p>tags</p>
                    <p>tags</p>
                </div>
                </div>
                <div class="main-posts__description">
                    <?php the_content(); ?>
    
                <div class="main-posts__description--redes">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-linkedin"></i>
                </div>
                </div>
                <!-- <div class="main-posts__btn">
                <div class="btn_custom btn--medium btn--filled">
                    Ver más
                </div>
                </div> -->
            </div>
            </div>
        </div>
        <hr class="main-articles__line">
        </div>
    </section>
    <section class="main-post__contact">
        <div class="container">
        <div class="main-post__content">
            <div class="main-post__info">
            <h5 class="modal-title">Lorem</h5>
            <h5 class="modal-subtitle">Ipsum</h5>
            <div class="modal-box__content">
                <p class="modal-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolore reiciendis ab quia eaque a cum? Voluptatem repellat officia cum repudiandae doloribus optio officiis, mollitia minima quos neque deleniti quibusdam?</p>
            </div>
            </div>
            <div class="main-post__form">
            <form>
                <div class="form-group">
                <input class="form-control" id="formGroupExampleInput" placeholder="Nombre" type="text">
                </div>
                <div class="form-group">
                <input class="form-control" id="formGroupExampleInput2" placeholder="Destino" type="text">
                </div>
                <div class="form-group">
                <input class="form-control" id="formGroupExampleInput2" placeholder="Correo" type="text">
                </div>
                <div class="form-group">
                <input class="form-control" id="formGroupExampleInput2" placeholder="Teléfono" type="phone">
                </div>
                <div class="group-btn">
                <div class="btn_modal">
                    Enviar
                </div>
                <div class="modal-footer__content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, minus fugiat non veritatis, aperiam porro maiores quo.</p>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </section>
    <section class="main-post__commend">
        <div class="container">
        <div class="main-commend__title">
            <h2>comentarios</h2>
        </div>
        <div class="main-commend__formbox">
            <div class="main-commend__form">
            <div class="main-post__form--img">
                <img class="img-round lazy" data-src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
            </div>
            <div class="main-post__form--form">
                <form>
                <div class="form-group">
                    <input class="form-control" id="formGroupExampleInput" placeholder="Nombre y Apellido" type="text">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="Comentario"  rows="3"></textarea>
                </div>
                <div class="float-right">
                    <div class="btn_custom btn--medium btn--filled">
                    Enviar
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        <hr class="line-gray">
        <div class="main-commend__formbox">
            <div class="main-commend__form">
            <div class="main-post__form--img">
                <img class="img-round lazy" data-src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
            </div>
            <div class="main-post__form--info">
                <div class="main-post__form--name">
                <span class="form-name">Gladibeth Franco</span>
                <span>09/09/2019</span>
                </div>
                <div class="main-post__form--description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius quae nam quis ipsum cupiditate quod, culpa numquam dol.</p>
                </div>
                <div class="main-post__form--detail">
                <div class="main-post__form--arrow">
                    <i class="fa fa-angle-up"></i>
                    <i class="fa fa-angle-down"></i>
                </div>
                <div class="main-post__form--compatir">
                    <span>Responder</span>
                    <span>Compartir</span>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- <h1>222</h1> -->
    <?php
    
    ?>
<?php endwhile; endif; ?>

<?php if ( comments_open() || get_comments_number() ) : ?>
            <?php comments_template(); ?>
          <?php endif; ?>
<?php require('footer.php'); ?>
