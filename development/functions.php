<?php 
// Fija el tamaño del texto del excerpt
function tamano__excerpt( $length ) { return 20;}
add_filter( 'excerpt_length', 'tamano__excerpt', 20 );

// Fija el contenido del exceprt eliminando [...]
function final__texto__excerpt( $more ) { return ''; }
add_filter('excerpt_more', 'final__texto__excerpt' );


//insertar imagen destacada en el post
add_theme_support( 'post-thumbnails' ); 

?>
<?php

add_action( 'init', 'cyb_register_meta_fields' );
function cyb_register_meta_fields() {
  register_meta( 'post',
               'cyb_name',
               [
                 'description'      => _x( 'Enter your name', 'meta description', 'cyb-textdomain' ),
                 'single'           => true,
                 'sanitize_callback' => 'sanitize_text_field',
                 'auth_callback'     => 'cyb_custom_fields_auth_callback'
               ]
  );
  register_meta( 'post',
               'cyb_favorite_color',
               [
                 'description'      => _x( 'Choose your favorite color', 'meta description', 'cyb-textdomain' ),
                 'single'           => true,
                 'sanitize_callback' => 'sanitize_text_field',
                 'auth_callback'     => 'cyb_custom_fields_auth_callback'
               ]
  );
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
    add_meta_box( 'cyb-meta-box', __( 'Mi primer Meta Box', 'cyb_textdomain' ), 'cyb_meta_box_callback', 'destinos' );
}
function cyb_meta_box_callback( $post ) {
     // El nonce es opcional pero recomendable. Vea http://codex.wordpress.org/Function_Reference/wp_nonce_field
     wp_nonce_field( 'cyb_meta_box', 'cyb_meta_box_noncename' );
     // El input text
     ?>
     <p>
         <label class="label" for="cyb_name"><?php _e( 'Introduce tu nombre', 'cyb_textdomain' ); ?></label>
         <input  name="cyb_name" id="cyb_name" type="text" value="<?php echo esc_attr( get_post_meta( $post->ID, 'cyb_name', true ) ); ?>">
     </p>
     <?php
     // El select
     // La función selected() es similar a
     // if ( $current_value == "un valor") { echo ' selected="selected"' ; }
     $current_value = get_post_meta( $post->ID, 'cyb_favorite_color', true );
     ?>
     <p>
         <label class="label" for="cyb_favorite_color"><?php  _e( 'Elige un color', 'cyb_textdomain' ); ?></label>
         <select name="cyb_favorite_color" id="cyb_favorite_color">
             <option value="rojo" <?php selected( $current_value, "rojo"); ?>><?php _e( 'Rojo', 'cyb_textdomain' ); ?></option>
             <option value="verde" <?php selected( $current_value, "verde"); ?>><?php _e( 'Verde', 'cyb_textdomain' ); ?></option>
             <option value="amarillo" <?php selected( $current_value, "amarillo"); ?>><?php _e( 'Amarillo', 'cyb_textdomain' ); ?></option>
         </select>
    </p>
    <?php
    // La función checked() es similar a
    // if ( $current_value == "un valor") { echo ' checked="checked"' ; }
    $current_value = get_post_meta( $post->ID, 'destino-destacado', true );
    ?>
    <p>
        <input type="checkbox" name="destino-destacado" id="destino-destacado" value="1" <?php checked( $current_value, 1 ); ?>>
        <label class="label" for="destino-destacado"><?php  _e( 'Soy extraordinario', 'cyb_textdomain' ); ?></label>
   </p>
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
    if( isset( $_POST['cyb_name'] ) && $_POST['cyb_name'] != "" ) {
        update_post_meta( $post_id, 'cyb_name', $_POST['cyb_name'] );
    } else {
        // Opcional
        // $_POST['cyb_name'] no tiene valor establecido,
        // eliminar el meta field de la base de datos si existe previamente
        delete_post_meta( $post_id, 'cyb_name' );
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