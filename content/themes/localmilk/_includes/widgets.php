<?php

add_action( 'widgets_init', function(){
     register_widget( 'Social_Accounts' );
});

/****************************************
	Adds Social_Accounts widget.
*****************************************/

class Social_Accounts extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Social_Accounts', // Base ID
			__('Social Accounts', 'text_domain'), // Name
			array('description' => __( 'Add Your Social Accounts Here!', 'text_domain' ),) // Args
		);
	}
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		
		// get the usernames of the social accounts

		   extract( $args );
		    
		   $facebook = $instance['facebook'];
		   $twitter = $instance['twitter'];
		   $pinterest = $instance['pinterest'];
		   $instagram = $instance['instagram'];
		   $bloglovin = $instance['bloglovin'];


		 
		   echo '<div id="socialMedia" class="social-media widget-area social-nav"><ul>';    

		   echo '<li><a href=https://instagram.com/' . $instagram . ' target="_blank"><img src="'. get_template_directory_uri() .'/_static/images/icons/IG.png" alt="follow local milk on instagram"></a></li>';  
		   echo '<li><a href=https://pinterest.com/' . $pinterest . ' target="_blank"><img src="'. get_template_directory_uri() .'/_static/images/icons/Pinterest.png" alt="follow local milk on pinterest"></a></li>';
		   echo '<li><a href=https://facebook.com/' . $facebook . ' target="_blank"><img src="'. get_template_directory_uri() .'/_static/images/icons/FB.png" alt="follow local milk on facebook"></a></li>';
		   echo '<li><a href=https://bloglovin.com/blogs/' . $bloglovin . ' target="_blank"><img src="'. get_template_directory_uri() .'/_static/images/icons/BlogLovin.png" alt="follow local milk on instagram"></a></li>';
		   echo '<li><a href=https://twitter.com/' . $twitter . ' target="_blank"><img src="'. get_template_directory_uri() .'/_static/images/icons/Twitter.png" alt="follow local milk on twitter"></a></li>';
		   echo '</ul></div>';
		   
	}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$facebook = esc_attr( $instance['facebook'] );
		$twitter = esc_attr( $instance['twitter'] );
		$pinterest = esc_attr($instance['pinterest']);
		$instagram = esc_attr($instance['instagram']);
		$bloglovin = esc_attr($instance['bloglovin']); ?>

		<p>
		<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e( 'Facebook Username:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>">
		</p>

		<p>
		<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e( 'Twitter Username:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>">
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e( 'Instagram Username:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo esc_attr( $instagram ); ?>">
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php _e( 'Pinterest Username:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" type="text" value="<?php echo esc_attr( $pinterest ); ?>">
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'bloglovin' ); ?>"><?php _e( 'BlogLovin Username:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'bloglovin' ); ?>" name="<?php echo $this->get_field_name( 'bloglovin' ); ?>" type="text" value="<?php echo esc_attr( $bloglovin ); ?>">
		</p>
		<?php 
	}
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['facebook'] = strip_tags( $new_instance['facebook'] );
		$instance['twitter'] = strip_tags( $new_instance['twitter'] );
		$instance['pinterest'] = strip_tags( $new_instance['pinterest'] );
		$instance['instagram'] = strip_tags( $new_instance['instagram'] );
		$instance['bloglovin'] = strip_tags( $new_instance['bloglovin'] );

		return $instance;
	}
		
} // class Social_Accounts
?>