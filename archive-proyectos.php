<?php
/**
 * Plantilla básica para mostrar archivos de proyectos.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * Template Name: Archive Proyecto 
 */
 

get_header();

$args = array(

  'post_type'   => 'proyectos',
  'post_status' => 'publish'
  
  /*,'tax_query'   => array(
  array(
  		'taxonomy' => 'testimonial_service',
  		'field'    => 'slug',
  		'terms'    => 'diving'
  	)
  )*/
  
);
 
$proyectos = new WP_Query( $args );

if( $proyectos->have_posts() ) {

?>

<main id="site-content" role="main">

	<?php
				  
	while( $proyectos->have_posts() ){
		  
		$proyectos->the_post();
		
		?>
		
		<?php 
		get_template_part( 'inc/proyectos/loop', 'proyecto' );  
		?>
			
	<?php
	
	}
					  	
	wp_reset_postdata();
	
} else {
  
  esc_html_e( 'No proyectos !', 'text-domain' );

} 
 
?>


</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>

