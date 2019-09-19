<?php get_header(); ?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
    <section class="main-parallax">
        <div class="overlay"></div>
        <div class="main-parallax__title main-parallax__title--post">
            <h1><?php the_title();?></h1>
        <span><span>
        <div class="main-parallax__btn">
            <div class="btn_custom btn--medium btn--filled">
            <a href="javascript:window.history.back();">Volver</a>
            </div>
        </div>
        </div>
    </section>
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
                <div class="main-posts__comments">
                    <p>999</p>
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
                    <input class="form-control" id="formGroupExampleInput" placeholder="Nombre" type="text">
                </div>
                <div class="form-group">
                    <input class="form-control" id="formGroupExampleInput2" placeholder="Destino" type="text">
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
<?php endwhile; endif; ?>
<?php echo $pagina_anterior=$_SERVER['HTTP_REFERER'];?>
<?php get_footer(); ?>