<?php
// Activer les menus
function mesMenus() {
	register_nav_menus( array(
		'menuprincipal' => 'Menu principal',
		'menucontact' => 'Menu contact',
		'menufooter' => 'Menu footer',
	) );
}

// Déclencher les fonctions
add_action( 'init', 'mesMenus' );

// Add Thumbnail
add_theme_support( 'post-thumbnails' );
add_image_size( 'blogue', 800, 800, true );

?>