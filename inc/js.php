
<?php 

//*****************************************************
//**ADD JS THEME FUNCION**********************
//*****************************************************

function mg_load_scripts() 
{
	//$ua = mg_getBrowser();
	//$yourbrowser= "Your browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
	//print_r($yourbrowser);
	//if($ua['name'] == "Google Chrome") wp_enqueue_script( 'nicescroll', get_bloginfo('stylesheet_directory') .  '/js/jquery.nicescroll.min.js', array(), '1.0.0', true );
	
	wp_enqueue_script( 'scb-script', get_bloginfo('stylesheet_directory') .  '/js/script.js', array(), '2.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'mg_load_scripts' );

?>