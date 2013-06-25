<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
       //console.log("run javascript");
       wp_register_script('bootstrap', get_bloginfo('template_directory')."/js/bootstrap.min.js");
       wp_enqueue_script('bootstrap');
    //   wp_register_script('script-carousel', get_bloginfo('template_directory')."/js/script.js");
      // wp_enqueue_script('script-carousel');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }



    if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
                'main-nav' => 'Menu 1'
            )


        );
    }


    function five_posts_on_homepage( $query ) {
        if ( $query->is_home() && $query->is_main_query() ) {
            $query->set( 'posts_per_page', '3' );
        }
    }
    add_action( 'pre_get_posts', 'five_posts_on_homepage' );

?>