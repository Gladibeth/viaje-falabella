
<section class="main-post__commend">
        <div class="container">
        <div class="main-commend__title">
            <h2>comentarios</h2>
        </div>
        <div class="main-commend__formbox">
            <div class="main-commend__form">
            
     
       
        

<?php if( have_comments() ) { ?>

<h3><?php comments_number(
 __('', 'apk'),
 __('', 'apk'),
 __('','apk')
 ); ?></h3>


 <ul class="commentlist"><?php wp_list_comments(array('style' => 'ul')); ?>
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
   <?php paginate_comments_links(); ?>

   <?php  } ?>

   <?php comment_form(array(
      'title_reply' =>__('','apk'), //cambiar el titulo
      'label_submit' =>__('Enviar','apk'), //Boton Submit
      'comment_field' => '' . _x( '', 'noun' ) . '<div class="main-post__form--form"><div class="form-group">
      <textarea class="form-control" id="exampleFormControlTextarea1"  id="comment" name="comment" placeholder="Comentario"  rows="3"></textarea>
  </div></div>', //textarea comentario
      'comment_notes_before' =>'', //eliminar la cadena: Tu dirección de correo electrónico no será publicada. Los campos obligatorios están marcados con *
      'comment_notes_after' => ''
    ));
    ?>
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
</style>