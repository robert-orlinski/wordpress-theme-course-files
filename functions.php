<?php 
	function loadingStyles(){
	    wp_enqueue_style(
	        'style',
	        get_stylesheet_uri(),
	        false,
	        '1.1',
	        'all'
	    );
	}

	add_action('wp_enqueue_scripts', 'loadingStyles');
?>