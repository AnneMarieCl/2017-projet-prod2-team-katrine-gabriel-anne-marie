<?php
// Activer les menus
function mesMenus() {
	register_nav_menus( array(
		'menuprincipal' => 'Menu principal',
		'menucontact' => 'Menu contact',
		'menufooter' => 'Menu footer',
		'menuccis' => 'Menu ccis',
		'menusocialfooter' => 'Menu réseaux sociaux',
	) );
}
// Pouvoir déclarer du php dans les widget
add_filter('widget_text', 'php_text', 99);
function php_text($text) {
	if (strpos($text, '<' . '?') !== false) {
	ob_start();
	eval('?' . '>' . $text);
	$text = ob_get_contents();
	ob_end_clean();
}
	return $text;
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

//Remove link and list from Category Tag
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_category', function ( $thelist ) {
  return strip_tags( $thelist, '' );
} );

/* Tentative de pagination à changer ****
function pagination($query) {  
	
	$baseURL="http://".$_SERVER['HTTP_HOST'];
	if($_SERVER['REQUEST_URI'] != "/"){
		$baseURL = $baseURL.$_SERVER['REQUEST_URI'];
	}
 
	// Suppression de '/page' de l'URL
	$sep = strrpos($baseURL, '/page/');
	if($sep != FALSE){
		$baseURL = substr($baseURL, 0, $sep);
	}
 
  // Suppression des paramètres de l'URL
	$sep = strrpos($baseURL, '?');
	if($sep != FALSE){
	// On supprime le caractère avant qui est un '/'
		$baseURL = substr($baseURL, 0, ($sep-1));
	}	
	
	$page = $query->query_vars["paged"];  
	if ( !$page ) $page = 1;  
	$qs = $_SERVER["QUERY_STRING"] ? "?".$_SERVER["QUERY_STRING"] : "";  
	
	// Nécessaire uniquement si on a plus de posts que de posts par page admis 
	if ( $query->found_posts > $query->query_vars["posts_per_page"] ) {  
		echo '<ul class="pagination">'; 
		// lien précédent si besoin
		if ( $page > 1 ) { 
			echo '<li class="next_prev prev"><a title="Revenir à la page précédente (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page-1).'/'.$qs.'">« précédente</a></li>'; 
		} 
		// la boucle pour les pages
		for ( $i=1; $i <= $query->max_num_pages; $i++ ) { 
			// ajout de la classe active pour la page en cours de visualisation
			if ( $i == $page ) { 
				echo '<li class="active"><a href="#pagination" title="Vous êtes sur cette page '.$i.'">'.$i.'</a></li>'; 
			} else { 
				echo '<li><a title="Rejoindre la page '.$i.'" href="'.$baseURL.'/page/'.$i.'/'.$qs.'">'.$i.'</a></li>'; 
			} 
		} 
		// le lien next si besoin
		if ( $page < $query->max_num_pages ) { 
			echo '<li class="next_prev next"><a title="Passer à la page suivante (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page+1).'/'.$qs.'">suivante »</a></li>'; 
		} 
		echo '</ul>';  
	}  
}*/
?>