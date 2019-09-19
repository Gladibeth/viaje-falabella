<?php 
// Fija el tamaño del texto del excerpt
function tamano__excerpt( $length ) { return 20;}
add_filter( 'excerpt_length', 'tamano__excerpt', 20 );

// Fija el contenido del exceprt eliminando [...]
function final__texto__excerpt( $more ) { return ''; }
add_filter('excerpt_more', 'final__texto__excerpt' );


function jml_metabox() {
  add_meta_box( 'libros-metabox', 'Información de los libros', 'campos_libros', 'post', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'jml_metabox' );
 
function campos_libros($post) {

  $libro = get_post_meta( $post->ID, 'libro', true );
  $autor = get_post_meta( $post->ID, 'autor', true );
  $formato = get_post_meta( $post->ID, 'formato', true );  
  

  $array_formato = array("Selecciona un formato", 
		'ePub' =>'ePub', 				   
        'Mobi' =>'Mobi', 
        'Papel' =>'Papel', 
        'Pdf' =>'Pdf', 
        'Txt' =>'Txt', 
   );  
 
 
  wp_nonce_field( 'campos_libros_metabox', 'campos_libros_metabox_nonce' );?>
 
  <table width="100%" cellpadding="1" cellspacing="1" border="0">
    <tr>
      <td width="20%"><strong>Título del libro : </strong><br /></td>
      <td width="80%"><input type="text" name="libro" value="<?php echo sanitize_text_field($libro);?>" class="large-text" placeholder="Título del Libro" /></td>
    </tr>
    <tr>
      <td><strong>Autor : </strong></td>
      <td><input type="text" name="autor" value="<?php echo sanitize_text_field($autor);?>" class="large-text" placeholder="Autor" /></td>
    </tr>
    <tr>
      <td><strong>Formato</strong><br /></td>
      <td><select name="formato" class="postform">
        <?php foreach ($array_formato as $key => $formato) {?>
          <option value="<?php echo ($key);?>" <?php if ($formato == $key){?>selected="selected"<?php }?>><?php echo $formato;?></option>
        <?php }?>
      </select></td>
    </tr>
  </table>
<?php }?>
 

 
<?php
function campos_libros_save_data($post_id) {

  if ( ! isset( $_POST['campos_libros_metabox_nonce'] ) ) {
    return $post_id;
  }
  $nonce = $_POST['campos_libros_metabox_nonce']; 

  if ( !wp_verify_nonce( $nonce, 'campos_libros_metabox' ) ) {
    return $post_id;
  } 

  if ( defined( 'DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
    return $post_id;
  } 

  if ( $_POST['post_type'] == 'page' ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
      return $post_id;
  } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
      return $post_id;
  }


  $old_libro = get_post_meta( $post_id, 'libro', true );
  $old_autor = get_post_meta( $post_id, 'autor', true );
  $old_formato = get_post_meta( $post_id, 'formato', true );
 
  $libro = sanitize_text_field( $_POST['libro'] );
  $autor = sanitize_text_field( $_POST['autor'] );
  $formato = sanitize_text_field( $_POST['formato'] );
 
  update_post_meta( $post_id, 'libro', $libro, $old_libro );
  update_post_meta( $post_id, 'autor', $autor, $old_autor );
  update_post_meta( $post_id, 'formato', $formato, $old_formato );
}
add_action( 'save_post', 'campos_libros_save_data' );


add_filter( 'the_content', 'jml_add_custom_fields_to_content' );
function jml_add_custom_fields_to_content( $content ) {
 
    $custom_fields = get_post_custom();
 
    $content .= "<div class='campos'>";
 
    if( isset( $custom_fields['libro'] ) ) {
         $content .= '<li>Libro: '. $custom_fields['libro'][0] . '</li>';
    }
    if( isset( $custom_fields['autor'] ) ) {
         $content .= '<li>Autor: ' . $custom_fields['autor'][0] . '</li>';
    }
    if( isset( $custom_fields['formato'] ) ) {
         $content .= '<li>Formato: ' . $custom_fields['formato'][0] . '</li>';  
    $content .= '</div>';
	}
    return $content;
}
