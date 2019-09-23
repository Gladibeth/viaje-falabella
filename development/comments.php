
<?php if( have_comments() ) { ?>

<h3><?php comments_number(
 __('No hay comentarios aún', 'apk'),
 __('Hay un comentario publicado', 'apk'),
 __('Hay % comentarios','apk')
 ); ?></h3>

 <ul class="commentlist"><?php wp_list_comments(array('style' => 'ul')); ?></ol>

   <?php paginate_comments_links(); ?>

   <?php  } ?>

   <?php comment_form(array(
      'title_reply' =>__('','apk'), //cambiar el titulo
      'label_submit' =>__('Publicar','apk'), //Boton Submit
      'comment_field' => '' . _x( '', 'noun' ) . '<input class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true" placeHolder="Atrévete Y Comenta"></input>', //textarea comentario
      'comment_notes_before' =>'', //eliminar la cadena: Tu dirección de correo electrónico no será publicada. Los campos obligatorios están marcados con *
      'comment_notes_after' => ''
    ));
    ?>
    <style>
    .comment >ul{
      padding-left: 30px;
    }
    .comentarios{
      width: 100% !important;
    }
    .name-email{
      width: 34% !important;
    }
    .button{
      display: inline-block;
    }
    .container-comment{
      width: 60%!important;
    }
    .form-control{
      display: inline-block;
      width: 70%;
      margin-right: 10px;
      margin-bottom: 15px;
    }
    .commentlist img{
      width: 60px;
      height: 60px;
      position: relative;
      z-index: 99;
    }
    .children img{
      width: 50px;
      height: 50px;
    }
    .children .children img{
      width: 40px;
      height: 40px;
    }
    .commentlist  img:hover {
      box-shadow: 3px 3px 0px #5542b1!important;
    }
    .comment-author{
      background: #f1f0f9;
      padding: 10px 12px;
      border-bottom: 1px solid #ffffff;
      overflow: hidden;
      -webkit-border-radius: 4px 4px 0 0;
      -moz-border-radius: 4px 4px 0 0;
      border-radius: 4px 4px 0 0;
    }

    .comentario1{
      background: #ffffff;
      padding: 12px;
      font-size: 15px;
      color: #595959;
      -webkit-border-radius: 0 0 4px 4px;
      -moz-border-radius: 0 0 4px 4px;
      border-radius: 0 0 4px 4px;
    }

    .comment-author a,.comment-edit-link{
      color: #999;
      font-size: 13px;
      position: relative;
      top: 1px;
    }
    .commentlist{
      list-style: none;
    }
    .comment-body p{
      padding-left: 50px;
    }
    .comment-body{
      border: 1px solid #f1f0f9;
      margin-bottom: 20px;
    }
    .reply{
      text-align: right;
      margin: 5px 20px;
    }
    .reply a{
      color: gray;

    }
    .reply a:hover{
      color: #5542b1;

    }
    .fn{
      margin: 13px;
    }
    .submit {
      font-size: 15px;
      padding: 6px;
      background: #f1f0f9;
      border: 1px solid #f1f0f9;

      cursor: pointer;
    }
    .form-submit{
      display: inline;
    }
    .form-submit input:hover{
     box-shadow: 2px 2px rebeccapurple;
   }


</style>
