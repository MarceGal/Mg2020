
<?php 

function mg_load_styles() {
	
    //wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	
    wp_register_style( 'mg2020-style', get_bloginfo('stylesheet_directory'). '/css/style.css',array(),'null','all');
	
	wp_register_style( 'mg2020-proyectos-style', get_bloginfo('stylesheet_directory'). '/css/proyectos.css',array(),'null','all');	
	
    wp_enqueue_style( 'mg2020-style' );
    wp_enqueue_style( 'mg2020-proyectos-style' );
}

add_action('wp_enqueue_scripts', 'mg_load_styles', 100 );

?>