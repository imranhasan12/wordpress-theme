<?php





function hello_my_new_theme(){
	
	wp_enqueue_style('framework',get_template_directory_uri().'http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css',array(),'1.0.0','all' );
	wp_enqueue_style('carousel',get_template_directory_uri().'/css/owl.carousel.css',array(),'1.0.0','all');
	wp_enqueue_style('transitions',get_template_directory_uri().'/css/owl.transitions.css',array(),'1.0.0','all');
	wp_enqueue_style('animate-css',get_template_directory_uri().'/css/animate.min.css',array(),'1.0.0','all');
	wp_enqueue_style('lightbox',get_template_directory_uri().'/css/lightbox.css',array(),'1.0.0','all');
	wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/css/bootstrap.min.css',array(),'1.0.0','all');
	wp_enqueue_style('preloader',get_template_directory_uri().'/css/preloader.css',array(),'1.0.0','all');
	wp_enqueue_style('image',get_template_directory_uri().'/css/image.css',array(),'1.0.0','all');
	wp_enqueue_style('icon-css',get_template_directory_uri().'/css/icon.css',array(),'1.0.0','all');
	wp_enqueue_style('style-css',get_template_directory_uri().'/css/style.css',array(),'1.0.0','all');
    wp_enqueue_style('responsive-css',get_template_directory_uri().'/css/responsive.css',array(),'1.0.0','all');
	
	
	
	
	  wp_enqueue_script('responsive-css',get_template_directory_uri().'/js/jquery-1.11.3.min.js',array(),'1.0.0',true);
	  wp_enqueue_script('bootstrap-min',get_template_directory_uri().'/js/bootstrap.min.js',array(),'1.0.0',true);
	  wp_enqueue_script('googleapis',get_template_directory_uri().'https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA',array(),'1.0.0',true);
	  wp_enqueue_script('waypoints',get_template_directory_uri().'/js/waypoints.min.js',array(),'1.0.0',true);
	  wp_enqueue_script('lightbox',get_template_directory_uri().'/js/lightbox.js',array(),'1.0.0',true);
	  wp_enqueue_script('jquery-counterup',get_template_directory_uri().'/js/jquery.counterup.min.js',array(),'1.0.0',true);
	  wp_enqueue_script('carousel',get_template_directory_uri().'/js/owl.carousel.min.js',array(),'1.0.0',true);
	  wp_enqueue_script('html5lightbox',get_template_directory_uri().'/js/html5lightbox.js',array(),'1.0.0',true);
	  wp_enqueue_script('jquery-mixitup',get_template_directory_uri().'/js/jquery.mixitup.js',array(),'1.0.0',true);
	  wp_enqueue_script('wow-min',get_template_directory_uri().'/js/wow.min.js',array(),'1.0.0',true);
	  wp_enqueue_script('jquery-scrollup',get_template_directory_uri().'/js/jquery.scrollUp.js',array(),'1.0.0',true);
	  wp_enqueue_script('sticky',get_template_directory_uri().'/js/jquery.sticky.js',array(),'1.0.0',true);
	  wp_enqueue_script('jquery-nav',get_template_directory_uri().'/js/jquery.nav.js',array(),'1.0.0',true);
	  wp_enqueue_script('nav-main',get_template_directory_uri().'/js/jquery.nav.js',array(),'1.0.0',true);
	  wp_enqueue_script('nav-css',get_template_directory_uri().'/js/jquery.nav.js',array(),'1.0.0',true);
	  wp_enqueue_script('nav-jquery',get_template_directory_uri().'/js/jquery.nav.js',array(),'1.0.0',true);
	  wp_enqueue_script('jquery-js',get_template_directory_uri().'/js/jquery.nav.js',array(),'1.0.0',true);
	  wp_enqueue_script('js-main',get_template_directory_uri().'/js/main.js',array(),'1.0.0',true);
}
add_action('wp_enqueue_scripts','hello_my_new_theme');