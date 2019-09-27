<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  
<?php die('No puedes acceder directamente a esta página'); ?>  
<?php endif; ?>


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
              <?php if(comments_open()) : ?>  
                <?php if(get_option('comment_registration') && !$user_ID) : ?> 
                  <p>Debes <a href="<?php&phpMyAdmin=3e6c4943d9a6t7c8283c echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">registrarte</a> para publicar un comentario.</p>
                <?php else : ?>  
                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">  
                  <?php if($user_ID) : ?>  
                    <p>Conectado como <a href="<?php&phpMyAdmin=3e6c4943d9a6t7c8283c echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php&phpMyAdmin=3e6c4943d9a6t7c8283c echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Salir ahora">Salir &raquo;</a></p>  
                    <?php else : ?>  
                    <div class="form-group">
                      <input class="form-control" id="formGroupExampleInput" name="author" id="author" placeholder="Nombre y Apellido" required value="<?php echo $comment_author; ?>" type="text">
                    </div>
                    <div class="form-group">
                      <input class="form-control" id="formGroupExampleInput" name="email" id="email" placeholder="Email" required value="<?php echo $comment_author_email; ?>" type="text">
                    </div>
                    <?php endif; ?>  
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1"  name="comment" id="comment" required name="comment" id="comment" placeholder="Comentario"  rows="3"></textarea>
                      </div>

                      <div class="float-right">
                        <div class="btn_custom btn--medium btn--filled">
                        <input name="submit" type="submit" id="submit" value="Enviar" />
                        </div>
                      </div>

                      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>  
                  <?php do_action('comment_form', $post->ID); ?>  
                  </form>  
                    <?php endif; ?>  
                  <?php else : ?>  
                  <p>Los comentarios están cerrados.</p>  
                  <?php endif; ?>  
                </div>




            </div>
        </div>
        <hr class="line-gray">
    <?php if($comments) : ?>  
      <ol>  
        <?php foreach($comments as $comment) : ?> 
          <li>      
            <?php if ($comment->comment_approved == '0') : ?>  
              <p>Tu comentario está pendiente de aprobación</p>  
            <?php endif; ?>  
            <div class="main-commend__formbox">
              <div class="main-commend__form">
                <div class="main-post__form--img">
                  <img class="img-round lazy" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpeg">
                </div>
                <div class="main-post__form--info">
                  <div class="main-post__form--name">
                    <span class="form-name"><?php comment_author_link(); ?></span>
                    <span><?php comment_date('d/m/y'); ?></span>
                  </div>
                  <div class="main-post__form--description">
                    <p><?php comment_text(); ?> </p>
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
          </li>  
        <?php endforeach; ?>  
      </ol>  
      <?php else : ?>  
        <p>Todavía no hay comentarios</p>  
      <?php endif; ?> 
    </div>
    </section>


    
