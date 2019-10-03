<?php 
// Fija el tamaño del texto del excerpt
  function tamano__excerpt( $length ) { return 20;}
  add_filter( 'excerpt_length', 'tamano__excerpt', 20 );

// Fija el contenido del exceprt eliminando [...]
  function final__texto__excerpt( $more ) { return ''; }
  add_filter('excerpt_more', 'final__texto__excerpt' );


//insertar imagen destacada en el post
  add_theme_support( 'post-thumbnails' ); ?>

<?php
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
          <label class="label"  for="descripcion_imagen_post"><?php _e( 'Descripción de la imagen del post ', 'cyb_textdomain' );?></label>
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
    'description' => 'Insertar imagen del viajero del mes',
    'before_widget' => '<div class="main-post__img">',
    'after_widget'  => '</div>'

));
};
//+++++++++++++++++++++++++++++++++++ end siderbar



//+++++++++++++++++++++++++++++++++++campos taxonomias
function categorias_add_new_meta_fields(){
	?>
	<div class="form-field">
		<label for="term_meta[texto01]">Texto 01</label>
		<input type="text" name="term_meta[texto01]" id="term_meta[texto01]" value="">
		<p class="description">Descripción para este campo</p>
	</div>
	<div class="form-field">
		<label for="term_meta[imagen]">Imagen</label>
		<input type="text" name="term_meta[imagen]" id="term_meta[imagen]" value="">
		<p class="description">Imagen de la Categoría</p>
	</div>
	<?php
}
add_action( 'tipo_destinos_add_form_fields', 'categorias_add_new_meta_fields', 10, 2 );
function categorias_edit_meta_fields($term){
	$t_id = $term->term_id;

	$term_meta = get_option("taxonomy_$t_id");
	?>
		<tr class="form-field">
			<th scope="row" valign="top">
				<label for="term_meta[texto01]">Texto 01</label>
			</th>
			<td>
				<input type="text" name="term_meta[texto01]" id="term_meta[texto01]" value="<?php echo esc_attr( $term_meta['texto01'] ) ? esc_attr( $term_meta['texto01'] ) : ''; ?>">
				<p class="description">Descripción para este campo</p>
			</td>
		</tr>
		<tr class="form-field">
			<th scope="row" valign="top">
				<label for="term_meta[imagen]">Imagen</label>
			</th>
			<td>
				<input type="text" name="term_meta[imagen]" id="term_meta[imagen]" value="<?php echo esc_attr( $term_meta['imagen'] ) ? esc_attr( $term_meta['imagen'] ) : ''; ?>">
			<p class="description">Imagen de la Categoría</p>
			</td>
		</tr>
	<?php
}
add_action( 'tipo_destinos_edit_form_fields', 'categorias_edit_meta_fields', 10, 2 );
function categorias_save_custom_meta( $term_id ) {
	if ( isset( $_POST['term_meta'] ) ) {
		$t_id = $term_id;
		$term_meta = get_option( "taxonomy_$t_id" );
		$cat_keys = array_keys( $_POST['term_meta'] );
		foreach ( $cat_keys as $key ) {
			if ( isset ( $_POST['term_meta'][$key] ) ) {
				$term_meta[$key] = $_POST['term_meta'][$key];
			}
		}
		update_option( "taxonomy_$t_id", $term_meta );
	}
}  

add_action( 'edited_tipo_destinos', 'categorias_save_custom_meta', 10, 2 );  
add_action( 'create_tipo_destinos', 'categorias_save_custom_meta', 10, 2 );
//+++++++++++++++++++++++++++++++++++end campos taxonomias



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


//editar lista de comentarios
