
<?php 

function mobile_redirect() {     
    
	if ( wp_is_mobile() AND is_front_page() ) {
		wp_redirect( get_permalink( 72 ) ); // pagina producto
		exit;
	}

     
}

//add_action( 'template_redirect', 'mobile_redirect' );

?>