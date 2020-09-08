
<?php 


//*****************************************************
//**LOGGIN WIDGET*********************************
//*****************************************************

 
// Creating the widget 
class mg_user_login_widget extends WP_Widget {
 
	function __construct() {
		parent::__construct(
		 
		// Base ID of your widget
		'mg_widget', 
		 
		// Widget name will appear in UI
		__('User Log-in Widget (DSB)', 'mg_login_widget'), 
		 
		// Widget description
		array( 'description' => __( 'Mostrar formulario de ingreso', 'mg_login_widget' ), ) 
		);
	}
	 
	// Creating widget front-end
	 
	public function widget( $args, $instance ) {
		
		$title = apply_filters( 'widget_title', $instance['title'] );
		 
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];

		// This is where you run the code and display the output
		// echo __( 'Hello, World!', 'mg_login_widget' );
		?>
		
		
		<?php if (is_user_logged_in()) { 
			
			?>
		
			<a href="<?php echo wp_logout_url($_SERVER['REQUEST_URI'])?>"><?php _e( 'Log Out' )?></a>
			
			<?php } else { 
			
				
				if ( ! empty( $title ) ) echo $args['before_title'] . $title . $args['after_title'];
		
				?>
			
				<form action="<?php echo wp_login_url($_SERVER['REQUEST_URI'])?>" method="post">
					
					<?php _e('Username')?><br />
					
					<input type="text" size="20" name="log"/>
					
					<br /><br />
					
					<?php _e('Password')?><br />
					
					<input type="password" size="20" name="pwd"/>
					
					<br /><br />
					
					<input type="submit" value="<?php esc_attr_e('Log In')?>" name="wp-submit">
					<input type="hidden" value="forever" name="rememberme"/>
					
				</form>
				
		<?php 
		
			// echo '<br />';
			// echo '<a href="'.site_url('wp-login.php?action=register', 'login').'">'._e('Register').'</a>';
			// echo ' | <a href="'.site_url('wp-login.php?action=lostpassword', 'login').'">'._e('Lost your password?').'</a>';
				
		
		} 
		
		echo $args['after_widget'];

	}
			 
	// Widget Backend 
	public function form( $instance ) {
		
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		} else {
			$title = __( 'Iniciar Sesión', 'mg_login_widget' );
		}
		
		
		// Widget admin form
		?>

		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>

		<?php 
	}
			 
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
	
} // Class mg_widget ends here


// Register and load the widget
function mg_load_user_login_widget() {

	register_widget( 'mg_user_login_widget' );
	
}

add_action( 'widgets_init', 'mg_load_user_login_widget' );


?>