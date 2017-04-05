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

//ACTIVER LES WIDGETS

if ( function_exists('register_sidebar') ) {
register_sidebar(
		array(
			'name' => 'Sidebar Index', // Le nom qui s’affiche dans l’admin
			'description' => 'La barre qui s’affiche à droite dans l\'index',
			'id' => 'sidebar-index', // l’ID pour l’appeler dans le template
));
register_sidebar(
		array(
			'name' => 'Sidebar CCIS', // Le nom qui s’affiche dans l’admin
			'description' => 'La barre qui s’affiche à droite dans à propos',
			'id' => 'sidebar-ccis', // l’ID pour l’appeler dans le template
));
register_sidebar(
		array(
			'name' => 'Sidebar Publications', // Le nom qui s’affiche dans l’admin
			'description' => 'La barre qui s’affiche à droite dans la page publications',
			'id' => 'sidebar-publications', // l’ID pour l’appeler dans le template
));
register_sidebar(
		array(
			'name' => 'Sidebar Événements', // Le nom qui s’affiche dans l’admin
			'description' => 'La barre qui s’affiche à droite dans la page événements',
			'id' => 'sidebar-events', // l’ID pour l’appeler dans le template
));
register_sidebar(
		array(
			'name' => 'Sidebar Blogue', // Le nom qui s’affiche dans l’admin
			'description' => 'La barre qui s’affiche à droite dans la page blogue',
			'id' => 'sidebar-blogue', // l’ID pour l’appeler dans le template
));
}


?>