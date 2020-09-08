
<?php 


//*****************************************************
//**THEME TRANSLATION INTEGRATION**********************
//*****************************************************

function mg_translations_setup() {
	/*
	 * Makes available for translation.
	 * Translations can be added to the /lang/ directory.
	 */
	$my_theme = wp_get_theme();
	load_child_theme_textdomain( $my_theme->get( 'Name' ), get_stylesheet_directory() . '/lang' );
}
add_action( 'after_setup_theme', 'mg_translations_setup' );

?>