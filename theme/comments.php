
<section class="main-post__commend">
    <div class="container">
        <div class="main-commend__title">
            <h2>comentarios</h2>
        </div>
        <div class="main-commend__formbox">
            <div class="main-commend__form">
                <?php if( have_comments() ) { ?>
                    <div class="main-commend__formbox">
                        <div class="main-commend__form">
                            <div class="main-post__form--img">
                                <img class="img-round lazy" data-src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                            </div>
                        </div>
                    </div>
                <?php paginate_comments_links(); }?>
                <?php comment_form(array(
                    'title_reply' =>__('','apk'), //cambiar el titulo
                    'label_submit' =>__('Enviar','apk'), //Boton Submit
                    'comment_field' => '' . _x( '', 'noun' ) . '<div class="main-post__form--form"><div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1"  id="comment" name="comment" placeholder="Comentario"  rows="3"></textarea></div></div>', //textarea comentario
                    'comment_notes_before' =>'', //eliminar la cadena: Tu dirección de correo electrónico no será publicada. Los campos obligatorios están marcados con *
                    'comment_notes_after' => ''
                    ));
                ?>
            </div>
        </div>
    </div>
</section>
   
<section class="main-post__commend">
    <div class="container">
        <hr class="line-gray">
        <div class="main-commend__formbox">
            <div class="main-commend__form">
            <div class="main-post__form--img">
                <img class="img-round lazy" data-src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
            </div>
            <ul class="lista-comentarios">
                <?php	wp_list_comments('type=comment&callback=formato_comentarios');?>
            </ul>
            <?php 
            function formato_comentarios($comment,	$args,	$depth)	{
                $GLOBALS['comment'] = $comment;	 //Obtengo el objeto comentario
            ?>
            <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"> 
                <div id="comment-<?php comment_ID(); ?>">
    
            <div class="main-post__form--info">
                <div class="main-post__form--name">
                <span class="form-name"><?php echo get_comment_author_link();?></span>
                <span><?php echo get_comment_date('d/m/y');?></span>
                </div>
                <div class="main-post__form--description">
                <p><?php comment_text(); ?> <?php if ($comment->comment_approved == '0') : ?>
	<em><?php _e('Tu comentario está a la espera de moderación.'); ?></em>
    <?php endif; ?> <?php edit_comment_link(__('(Edit)'),'','') ?></p>
                </div>
                <div class="main-post__form--detail">
                <div class="main-post__form--arrow">
                    <i class="fa fa-angle-up"></i>
                    <i class="fa fa-angle-down"></i>
                </div>
                <div class="main-post__form--compatir">
                    <span><?php comment_reply_link(array_merge($args, array('depth' => $depth, 
          'max_depth' => $args['max_depth'])));?></span>
                    <!-- <span>Compartir</span> -->
                </div>
                </div>
            
        
    
  
<?php
}?>

</div>
</div>
   </section>

   <style>
.submit{
  min-width: 85px;
    font-size: 24px;
    border-radius: 1px;
    padding: .5rem 1rem;
    line-height: 1.1;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    font-family: PF BeauSans Pro,sans-serif;
    background-color: #3fae2a;
    color: #fff;
    transition: .3s ease-in-out;
    border: 1px solid #3fae2a;
    text-decoration: none;
    float: right;
}
ul{list-style: none;}
form{
    display: flex;
    flex-wrap: wrap;
    width: 100%;
}
.main-post__form--form{
    width: 100%;
}
.main-post__form--form:nth-child(1){
    order: 3;
}
.main-post__form--form:nth-child(2){
    order: 1;
}
.main-post__form--form:nth-child(3){
    order: 2;
}
.form-submit{
    float: right;
    order: 4;
    width: 100%;
}
#submit{
    cursor: pointer;
}
.main-post__commend{
    padding: 0;
}
.children .main-post__form--detail{
    display: none;
}
</style>