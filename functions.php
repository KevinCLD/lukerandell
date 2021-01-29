<?php
	
	add_action( 'wp_enqueue_scripts', function() {
		
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
		
		wp_enqueue_script( 'jquery-effects-core' );
		
		wp_enqueue_script( 'respond', get_template_directory_uri() . '/assets/js/respond.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'vendor', get_template_directory_uri() . '/assets/js/vendor.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'yt', 'https://www.youtube.com/iframe_api', null, '1.0.0', true );
		
	});
	
	add_action( 'init', function() {
		
		add_image_size( 'desktop', 1920, 9999, true );
		add_image_size( 'logo', 180, 80 );
		
	});
	
	

	