<?php 
	function loadingStyles(){
	    wp_enqueue_style(
	        'bootstrap',
	        get_template_directory_uri() . '/css/bootstrap.min.css',
	        false,
	        '1.1',
	        'all'
	    );
	    wp_enqueue_style(
	        'style',
	        get_stylesheet_uri(),
	        false,
	        '1.0',
	        'all'
	    );
	}
	
	add_action('wp_enqueue_scripts', 'loadingStyles');

	register_nav_menus(array(
        'primary' => 'Nawigacja główna',
        'secondary' => 'Nawigacja w stopce' 
    ));
?>