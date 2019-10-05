
<ul class="lista-comentarios">
	 <?php	wp_list_comments('type=comment&callback=formato_comentarios');?>
</ul>

<?php 
function formato_comentarios($comment,	$args,	$depth)	{
	$GLOBALS['comment'] = $comment;	 //Obtengo el objeto comentario
?>
 
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"> 
	<div id="comment-<?php comment_ID(); ?>">
 
   <!-- Obtengo el gravatar del autor. A mayores imprimo el nombre del autor y enlace a su perfil-->
   <div class="autor-container">
	<?php echo get_avatar($comment,$size='48',$default='<path_to_url>' );?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="cita">Dice:</span>'), get_comment_author_link());	?>
   </div>
 
    <!--Si el comentario no está moderado mostrará un mensaje-->
    <?php if ($comment->comment_approved == '0') : ?>
	<em><?php _e('Tu comentario está a la espera de moderación.'); ?></em>
    <?php endif; ?>
   
   <!-- Muestro la fecha y la hora a la que se escribió el mensaje. 
   También un enlace con la opción de editar-->
   <div class="comment-meta commentmetadata">
        <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID) )?>">
            <?php printf(__('%1$s a las %2$s'), get_comment_date(), get_comment_time())	?>
        </a>
      
        <?php edit_comment_link(__('(Edit)'),'','') ?>
   </div>
	
	<!--Muestro el contenido del comentario-->
	<?php comment_text(); ?>
 
   <!--Enlace para responder teniendo en cuenta la profundidad o nivel que pueden tener las respuestas-->
   <div class="reply">
	<?php comment_reply_link(array_merge($args, array('depth' => $depth, 
          'max_depth' => $args['max_depth'])));?>
   </div>
   
  </div>
<?php
}
