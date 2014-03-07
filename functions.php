<?php 
//
// Imagen Destacada
//
if (function_exists('add_theme_support')) {
     add_theme_support('post-thumbnails');
}





//
// Tamaños "extras" de imágenes
//
if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'post-thumb', 550, 400 );
add_image_size( 'home-thumb', 380, 245, true );
}




//
// Array que crea los diferentes "huecos" de menús. Usar a discreción
// Esto nos crea 3 "espacios" para agregar los menús que creemos en el 
// administrador de Wordpress. 
// USO:

/*
	$defaults = array(
	'theme_location'  => 'main-nav-menu',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '',
	'depth'           => 0,
	'walker'          => ''
);
	wp_nav_menu( $defaults );
*/
//
add_action( 'init', 'register_my_menus' );
 
function register_my_menus() {
	register_nav_menus(
		array(
			'main-nav-menu' => __( 'Menu Superior' ),
            'footer' => __( 'Menu del footer' ),
			'mobile' => __( 'Menu Para Móviles (4 items solo)' )
		)
	);
}




//
//  Cambiar los datos de redes sociales de los usuarios administrativos
//
function new_contactmethods( $contactmethods ) {
  $contactmethods['twitter'] = 'Twitter'; // Add Twitter
  $contactmethods['facebook'] = 'Facebook'; // Add Facebook
  unset($contactmethods['yim']); // Remove Yahoo IM
  unset($contactmethods['aim']); // Remove AIM
  unset($contactmethods['jabber']); // Remove Jabber

return $contactmethods;
}
add_filter('user_contactmethods','new_contactmethods',10,1);





//
// Desactivamos el editor del administrador de WP.
// Uncomment last line

// define('DISALLOW_FILE_EDIT', true);

 ?>