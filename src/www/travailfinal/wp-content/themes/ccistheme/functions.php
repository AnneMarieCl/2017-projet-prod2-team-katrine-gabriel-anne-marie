<?php
// Activer les menus
function mesMenus() {
	register_nav_menus( array(
		'monMenuPrincipal' => 'Menu principal',
        'monMenuSecondaire' => 'Menu footer',
		'menuccis' => 'Menu à propos'
		) );
}

// Déclencher les fonctions
add_action( 'init', 'mesMenus' );


?>