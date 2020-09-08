<?php
/**
 * Template Name: Acceso a usuarios
 * Template Post Type: page
 * Version: 1.0
 */
?>
<!doctype html>
<html lang="en">
  <head>
  
	<title>Mi <?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex,follow">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="//dsbox.com.ar/wp-content/themes/dsb/favicons/apple-touch-icon-57x57.png"><link rel="apple-touch-icon-precomposed" sizes="114x114" href="//dsbox.com.ar/wp-content/themes/dsb/favicons/apple-touch-icon-114x114.png"><link rel="apple-touch-icon-precomposed" sizes="72x72" href="//dsbox.com.ar/wp-content/themes/dsb/favicons/apple-touch-icon-72x72.png"><link rel="apple-touch-icon-precomposed" sizes="144x144" href="//dsbox.com.ar/wp-content/themes/dsb/favicons/apple-touch-icon-144x144.png"><link rel="apple-touch-icon-precomposed" sizes="60x60" href="//dsbox.com.ar/wp-content/themes/dsb/favicons/apple-touch-icon-60x60.png"><link rel="apple-touch-icon-precomposed" sizes="120x120" href="//dsbox.com.ar/wp-content/themes/dsb/favicons/apple-touch-icon-120x120.png"><link rel="apple-touch-icon-precomposed" sizes="76x76" href="//dsbox.com.ar/wp-content/themes/dsb/favicons/apple-touch-icon-76x76.png"><link rel="apple-touch-icon-precomposed" sizes="152x152" href="//dsbox.com.ar/wp-content/themes/dsb/favicons/apple-touch-icon-152x152.png"><link rel="icon" type="image/png" href="//dsbox.com.ar/wp-content/themes/dsb/favicons/favicon-196x196.png" sizes="196x196"><link rel="icon" type="image/png" href="//dsbox.com.ar/wp-content/themes/dsb/favicons/favicon-96x96.png" sizes="96x96"><link rel="icon" type="image/png" href="//dsbox.com.ar/wp-content/themes/dsb/favicons/favicon-32x32.png" sizes="32x32"><link rel="icon" type="image/png" href="//dsbox.com.ar/wp-content/themes/dsb/favicons/favicon-16x16.png" sizes="16x16"><link rel="icon" type="image/png" href="//dsbox.com.ar/wp-content/themes/dsb/favicons/favicon-128.png" sizes="128x128"><meta name="application-name" content="&nbsp;"><meta name="msapplication-TileColor" content="#FFFFFF"><meta name="msapplication-TileImage" content="//dsbox.com.ar/wp-content/themes/dsb/favicons/mstile-144x144.png"><meta name="msapplication-square70x70logo" content="//dsbox.com.ar/wp-content/themes/dsb/favicons/mstile-70x70.png"><meta name="msapplication-square150x150logo" content="//dsbox.com.ar/wp-content/themes/dsb/favicons/mstile-150x150.png"><meta name="msapplication-wide310x150logo" content="//dsbox.com.ar/wp-content/themes/dsb/favicons/mstile-310x150.png"><meta name="msapplication-square310x310logo" content="//dsbox.com.ar/wp-content/themes/dsb/favicons/mstile-310x310.png"> 

	
    <!-- Custom styles for this template -->
   <link rel="stylesheet" href="//dsbox.com.ar/wp-content/themes/dsb/css/login.css" rel="stylesheet">
	
	
    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
  </head>

  <body class="text-center">
  <div class="loginform">
	  
	  <a href="//" target="_blank">
		<img class="mb-4" src="//dsbox.com.ar/wp-content/uploads/2017/10/logo.c.png" alt="" 	width="179" height="50">
	  </a>
      
	  <h1>Ingreso a Clientes</h1>
	  
	  <?php
			/*
			Template Name: usr_log
			*/
			  wp_admin_css( 'wp-admin', true );
			  wp_admin_css( 'colors-fresh', true );
			  wp_admin_css( 'ie', true );

				  if (!is_user_logged_in()){
				  
				   $args = array( 'redirect' => site_url() );

				   if(isset($_GET['login']) && $_GET['login'] == 'failed')
				   {
					?>
					
					 <div id="login-error" style="background-color: #FFEBE8;border:1px solid #C00;padding:5px;">
					  <p>Ingreso incorrecto: Ha ingresado un dato invalido. Por favor, intentelo nuevamente.</p>
					 </div>
					 
					 
					<?php
					
					}
					
					$args = array(
					'echo' => true,
					'redirect' => site_url('/wp-admin/' ), 
					'form_id' => 'loginform',    
					'id_username' => 'user_login',
					'placeholder_username' => 'Usuario',              
					'id_password' => 'user_pass',
					'id_remember' => 'rememberme',
					'id_submit' => 'wp-submit',
					
					'remember' => true,
					'label_username' => __( '' ),
					'label_password' => __( '' ),
					'label_remember' => __( 'Recordar mi sesión' ),
					'value_username' => NULL,
					'value_remember' => false 
					);
					
					wp_login_form( $args ); 
				   
				  ?>
				  
				  
				<!--<a href="<?php echo wp_lostpassword_url(); ?>" id = "rec_pass"title="Lost Password">Olvide mi contraseña</a> -->
				  
				  
				  <?php 
				  }else{
				   wp_redirect(home_url());
				   exit();
				  }
			?>
			<p>&copy; 2017 - <?php echo date("Y"); ?></p>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<script>
	
	
	( function( $ ) {

	   $("#user_login").addClass("form-control").attr("placeholder", "E-mail");	   
	   $("#user_pass").addClass("form-control").attr("placeholder", "Password");
	   $("#wp-submit").addClass("btn btn-lg btn-primary btn-block");   
	   

	} )( jQuery );
	
	 jQuery(document).ready(function() {
		 
	 });
	
	</script>
	
  </body>
</html>