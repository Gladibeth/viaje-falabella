<?php 
// Fija el tamaño del texto del excerpt
  function tamano__excerpt( $length ) { return 20;}
  add_filter( 'excerpt_length', 'tamano__excerpt', 20 );

// Fija el contenido del exceprt eliminando [...]
  function final__texto__excerpt( $more ) { return ''; }
  add_filter('excerpt_more', 'final__texto__excerpt' );


//insertar imagen destacada en el post
  add_theme_support( 'post-thumbnails' );
   
  //Agregar campos personalizados en destinos
  add_action( 'init', 'cyb_register_meta_fields' );
  function cyb_register_meta_fields() {
    register_meta( 'post',
                'descripcion_imagen_post',
                [
                  'description'      => _x( 'Enter your name', 'meta description', 'cyb-textdomain' ),
                  'single'           => true,
                  'sanitize_callback' => 'sanitize_text_field',
                  'auth_callback'     => 'cyb_custom_fields_auth_callback'
                ]
    );
    /*register_meta( 'post',
                'cyb_favorite_color',
                [
                  'description'      => _x( 'Choose your favorite color', 'meta description', 'cyb-textdomain' ),
                  'single'           => true,
                  'sanitize_callback' => 'sanitize_text_field',
                  'auth_callback'     => 'cyb_custom_fields_auth_callback'
                ]
    ); */
    register_meta( 'post',
                'destino-destacado',
                [
                  'description'      => _x( 'Are you a extraordinary person?', 'meta description', 'cyb-textdomain' ),
                  'single'           => true,
                  'sanitize_callback' => 'cyb_sanitize_extraordinary_person',
                  'auth_callback'     => 'cyb_custom_fields_auth_callback'
                ]
    );
    
  }
  function cyb_sanitize_extraordinary_person( $value ) {
    // Si hay algún valor, el checbox fue seleccionado
    if( ! empty( $value ) ) {
      return 1;
    } else {
      return 0;
    }
  }
  function cyb_custom_fields_auth_callback( $allowed, $meta_key, $post_id, $user_id, $cap, $caps ) {
    
    if( 'post' == get_post_type( $post_id ) && current_user_can( 'edit_post', $post_id ) ) {
      $allowed = true;
    } else {
      $allowed = false;
    }
    return $allowed;
  }
  add_action( 'add_meta_boxes', 'cyb_meta_boxes' );
  function cyb_meta_boxes() {
      add_meta_box( 'cyb-meta-box', __( 'Banner principal', 'cyb_textdomain' ), 'cyb_meta_box_callback', 'destinos' );
  }
  function cyb_meta_box_callback( $post ) {
      // El nonce es opcional pero recomendable. Vea http://codex.wordpress.org/Function_Reference/wp_nonce_field
      wp_nonce_field( 'cyb_meta_box', 'cyb_meta_box_noncename' );
      // El input text
      $current_value = get_post_meta( $post->ID, 'destino-destacado', true );
     ?>
      <p>
          <input type="checkbox" name="destino-destacado" id="destino-destacado" value="1" <?php checked( $current_value, 1 ); ?>>
          <label class="label" for="destino-destacado"><?php  _e( 'Destacar post', 'cyb_textdomain' ); ?></label>
    </p>
      <p>
          <label class="label"  for="descripcion_imagen_post"><?php _e( 'Descripción de la imagen del post', 'cyb_textdomain' );?></label>
          <input minlength="10" maxlength="20" name="descripcion_imagen_post" id="descripcion_imagen_post" type="text" value="<?php echo esc_attr( get_post_meta( $post->ID, 'descripcion_imagen_post', true ) ); ?>">
      </p>
      <?php
      // El select
      // La función selected() es similar a
      // if ( $current_value == "un valor") { echo ' selected="selected"' ; }
      //$current_value = get_post_meta( $post->ID, 'cyb_favorite_color', true );
     /*  ?>
      <p>
          <label class="label" for="cyb_favorite_color"><?php  _e( 'Elige un color', 'cyb_textdomain' ); ?></label>
          <select name="cyb_favorite_color" id="cyb_favorite_color">
              <option value="rojo" <?php selected( $current_value, "rojo"); ?>><?php _e( 'Rojo', 'cyb_textdomain' ); ?></option>
              <option value="verde" <?php selected( $current_value, "verde"); ?>><?php _e( 'Verde', 'cyb_textdomain' ); ?></option>
              <option value="amarillo" <?php selected( $current_value, "amarillo"); ?>><?php _e( 'Amarillo', 'cyb_textdomain' ); ?></option>
          </select>
      </p>
      <?php */
      // La función checked() es similar a
      // if ( $current_value == "un valor") { echo ' checked="checked"' ; }
      
      ?>
     
    <?php
  }
  add_action( 'save_post', 'cyb_save_custom_fields', 10, 2 );
  function cyb_save_custom_fields( $post_id, $post ) {
      
      // Primero, comprobamos el nonce como medida de segurida
      if ( ! isset( $_POST['cyb_meta_box_noncename'] ) || ! wp_verify_nonce( $_POST['cyb_meta_box_noncename'], 'cyb_meta_box' ) ) {
          return;
      }
              
      // Segundo, si hemos recibido valor de un custom field, los actualizamos
      // El saneado/validación se hace automáticamente en el callback definido en el paso 2
      if( isset( $_POST['descripcion_imagen_post'] ) && $_POST['descripcion_imagen_post'] != "" ) {
          update_post_meta( $post_id, 'descripcion_imagen_post', $_POST['descripcion_imagen_post'] );
      } else {
          // Opcional
          // $_POST['descripcion_imagen_post'] no tiene valor establecido,
          // eliminar el meta field de la base de datos si existe previamente
          delete_post_meta( $post_id, 'descripcion_imagen_post' );
      }
      
      if( isset( $_POST['cyb_favorite_color'] ) && $_POST['cyb_favorite_color'] != "" ) {
          update_post_meta( $post_id, 'cyb_favorite_color', $_POST['cyb_favorite_color'] );
      } else {
          // Opcional
          // $_POST['cyb_favorite_color'] no tiene valor establecido
          delete_post_meta( $post_id, 'cyb_favorite_color' );
      }
      // En nuestro ejemplo, solo el valor 1 es válido
      if( isset( $_POST['destino-destacado'] ) && $_POST['destino-destacado'] == "1" ) {
          update_post_meta( $post_id, 'destino-destacado', $_POST['destino-destacado'] );
      } else {
          // Opcional
          // $_POST['destino-destacado'] no tiene valor establecido
          // o tiene un valor no válido (diferente de "1" en este ejemplo)
          delete_post_meta( $post_id, 'destino-destacado' );
      }
  }
//end campos personalizados destinos

//+++++++++++++++++++++++++++++++++++++++++++++++++++post mas visitados++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Funcion para contar visualizaciones de un post.
function set_post_views() {
  if (is_single()) {
    $post_ID = get_the_ID();
    $count = get_post_meta( $post_ID, 'post_views', true );
    if ( $count == '' ) {
      delete_post_meta( $post_ID, 'post_views' );
      add_post_meta( $post_ID, 'post_views', 1 );
    } else {
      update_post_meta( $post_ID, 'post_views', ++$count );
    }
  }
}
add_action( 'wp', 'set_post_views' );
// Funci��n para obtener el n��mero de visualizaciones de un post
function get_post_views($post_ID){
  $count = get_post_meta($post_ID, 'post_views', true);
  if ($count == ''){
    delete_post_meta($post_ID, 'post_views');
    add_post_meta($post_ID, 'post_views', 0);
    return 0;
  }
  return $count;
}
// A�0�9adir columna al listado de post de wp-admin
/* function posts_column_views($defaults){
  $defaults['post_views'] = __('Vistas', 'your_textdomain');
  return $defaults;
}
add_filter('manage_posts_columns', 'posts_column_views');
function posts_custom_column_views($column_name, $id){
  if ($column_name === 'post_views'){
    echo get_post_views(get_the_ID());
  }
}
add_action('manage_posts_custom_column', 'posts_custom_column_views', 5, 2); */


function bld_total_comentarios() {

  $numero_comentarios = wp_count_comments();
  return $numero_comentarios->approved;
  }
  
  add_shortcode('total_comentarios','bld_total_comentarios');










//++++++++++++++++++++++++++++++++++++registrar sidebar
if(function_exists('register_sidebar')) {
  register_sidebar(array(
      'name'          => 'Viajero del mes',
      'id'            => 'viajero-del-mes',
      'description' => 'Insertar texto y link del viajero del mes',
      'before_widget' => ' <div class="main-post__content"><div class="main-post__box">',
      'after_widget'  => '</div>',
      'before_title'  => "<div class='main-post__title'><p>",
      'after_title'   => '</p></div>',

  ));
  register_sidebar(array(
    'name'          => 'Viajero del mes imagen',
    'id'            => 'viajero-del-mes-imagen',
    'description' => 'Insertar imagen del viajero del mes tamaño: 555x555',
    'before_widget' => '<div class="main-post__img">',
    'after_widget'  => '</div>'

  ));

  register_sidebar(array(
    'name'          => 'Footer columna 1',
    'id'            => 'footer-1',
    'description' => 'Listado footer 1',
    'before_title'  => "<div class='main-footer__title'><p>",
    'after_title'   => '</p></div>',

  ));
  register_sidebar(array(
    'name'          => 'Footer columna 2',
    'id'            => 'footer-2',
    'description' => 'Listado footer 2',
    'before_title'  => "<div class='main-footer__title'><p>",
    'after_title'   => '</p></div>',

  ));
  register_sidebar(array(
    'name'          => 'Footer columna 3',
    'id'            => 'footer-3',
    'description' => 'Listado footer 3',
    'before_title'  => "<div class='main-footer__title'><p>",
    'after_title'   => '</p></div>',

  ));
  register_sidebar(array(
    'name'          => 'Footer columna 4',
    'id'            => 'footer-4',
    'description' => 'Listado footer 4',
    'before_title'  => "<div class='main-footer__title'><p>",
    'after_title'   => '</p></div>',

  ));
  register_sidebar(array(
    'name'          => 'Footer redes sociales',
    'id'            => 'footer-redes-sociales',
    'description' => 'Listado footer redes sociales',
    'before_title'  => "<div class='main-footer__title'><p>",
    'after_title'   => '</p></div>',

  ));

  register_sidebar(array(
    'name'          => 'Footer copyright',
    'id'            => 'footer-copyright',
    'description' => 'copyright',

  ));
};
//+++++++++++++++++++++++++++++++++++ end siderbar




//eliminar url del campo formulario
function dcms_disable_url_comment($fields) { 
  unset($fields['url']);
  return $fields;
}
add_filter('comment_form_default_fields','dcms_disable_url_comment');
//en url

//editar el campo author del formulario
function modify_comment_fields($fields){

  $fields =  array('author' =>'<div class="main-post__form--form"><div class="form-group">
  <input class="form-control" name="author" id="author" placeholder="Nombre y Apellido" type="text"></div></div>' , 'email' => '<div class="main-post__form--form"><div class="form-group"><input class="form-control id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" placeholder="Email"  required="required"></div></div>'
);

  return $fields;

  }
  add_filter('comment_form_default_fields','modify_comment_fields');
//end campo ahutor formulario

//redimencionando las imágenes
add_image_size( '1280x689', 1280, 689, true );
add_image_size( '768x689', 768, 689, true );
add_image_size( '555x555', 555, 555, true );
add_image_size( '555x360', 555, 360, true );
add_image_size( '480x792', 480, 792, true );
add_image_size( '455x160', 455, 160, true );
add_image_size( '170x200',170, 200, true );
//end imágenes


//limitar el tamaño de las imágenes
function check_valid_image_size( $file ) {
  $allowed_mimetypes = array('image/gif', 'image/jpeg', 'image/png', 'image/bmp');

  if (!in_array($file['type'], $allowed_mimetypes)){
      return $file;
  }

  $image = getimagesize($file['tmp_name']);

  $maximum = array(
      'width' => '1920',
      'height' => '1300'
  );

  $image_width = $image[0];
  $image_height = $image[1];

  $too_large = "La imagen supera el tamaño permitido {$maximum['width']} x {$maximum['height']} pixeles. El tamaño de la imagen a subir es: $image_width x $image_height pixeles.";

  if ( $image_width > $maximum['width'] || $image_height > $maximum['height'] ) {
      //add in the field 'error' of the $file array the message
      $file['error'] = $too_large;
      return $file;
  }else {
      return $file;
  }
}
add_filter('wp_handle_upload_prefilter', 'check_valid_image_size');


//limitar el peso de las imágenes
function nelio_max_image_size( $file ) {
 
  $size = $file['size'];
  $size = $size / 1920;
  $type = $file['type'];
  $is_image = strpos( $type, 'image' ) !== false;
  $limit = 500;
  $limit_output = '350kb';
 
  if ( $is_image && $size > $limit ) {
    $file['error'] = 'Peso maximo de imagen ' . $limit_output;
  }//end if
 
  return $file;
 
}//end nelio_max_image_size()
add_filter( 'wp_handle_upload_prefilter', 'nelio_max_image_size' );

add_filter('posts_join', 'childorbit_search_join');

function childorbit_search_join($join){
	global $wpdb;
	
	if ( is_search() ) {
		$join .= "INNER JOIN {$wpdb->term_relationships} tr ON {$wpdb->posts}.ID = tr.object_id INNER JOIN {$wpdb->term_taxonomy} tt ON tt.term_taxonomy_id=tr.term_taxonomy_id INNER JOIN {$wpdb->terms} t ON t.term_id = tt.term_id INNER JOIN {$wpdb->postmeta} pm ON {$wpdb->posts}.ID = pm.post_id ";
	}
	return $join;
}

add_filter('posts_where','childorbit_search_where');

function childorbit_search_where($where){
	global $wpdb;
	
	if ( is_search() ) {
		$where .= " OR (t.name LIKE '%".get_search_query()."%') ";
		$where .= " OR (pm.meta_value LIKE '%".get_search_query()."%') ";
	}
	return $where;
}

add_filter('posts_groupby', 'childorbit_search_groupby');

function childorbit_search_groupby($groupby){
    global $wpdb;

    // we need to group on post ID
    $groupby_id = "{$wpdb->posts}.ID";
    if(!is_search() || strpos($groupby, $groupby_id) !== false) return $groupby;

    // groupby was empty, use ours
    if(!strlen(trim($groupby))) return $groupby_id;

    // wasn't empty, append ours
    return $groupby.", ".$groupby_id;
}   


//alt imágenes
/* 
function isa_add_img_title( $attr, $attachment = null ) {
 
  $img_title = trim( strip_tags( $attachment->post_title ) );
  $img_title = trim( strip_tags( $attachment->post_title ) );

  $attr['title'] = $img_title;
  $attr['alt'] = $img_title;

  return $attr;
}
add_filter( 'wp_get_attachment_image_attributes','isa_add_img_title', 10, 2 ); */


function breadcrumb() {
  global $post;
  echo '<ul id="breadcrumbs">';
  if (!is_home()) {
  echo '<li><a href="';
  echo get_option('home');
  echo '">';
  echo 'Inicio';
  echo '</a></li><li class="separator"> > </li>';
  if (is_category() || is_single()) {
  echo '<li>';
  the_category(' </li><li class="separator"> > </li><li> ');
  if (is_single()) {
  echo '</li><li class="separator"> > </li><li>';
  the_title();
  echo '</li>';
  }
  } elseif (is_page()) {
  if($post->post_parent){
  $anc = get_post_ancestors( $post->ID );
  $title = get_the_title();
  foreach ( $anc as $ancestor ) {
  $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).' ">'.get_the_title($ancestor).'</a></li> <li class="separator"> > </li>';
  }
  echo $output;
  echo '<strong title="'.$title.'"> '.$title.'</strong>';
  } else {
  echo '<li><strong> '.get_the_title().'</strong></li>';
  }
  }
  }
  elseif (is_tag()) {single_tag_title();}
  elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
  elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
  elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
  elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
  elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
  elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
  echo '</ul>';
  }