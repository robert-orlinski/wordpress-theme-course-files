<?php
	function loadingStyles(){
	    wp_enqueue_style(
	        'bootstrap',
	        get_template_directory_uri() . '/css/bootstrap.min.css',
	        false,
	        false,
	        'all'
	    );
	    wp_enqueue_style(
	        'style',
	        get_stylesheet_uri(),
	        false,
	        false,
	        'all'
	    );
			wp_enqueue_style(
	        'google-fonts',
	        'https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&amp;subset=latin-ext'
	    );
	}

	add_action('wp_enqueue_scripts', 'loadingStyles');

	register_nav_menus(array(
        'primary' => 'Nawigacja główna',
        'secondary' => 'Nawigacja w stopce'
    ));
?>
