<?php

add_action( 'widgets_init', function(){
     register_widget( 'Social_Accounts' );
     register_widget( 'Biography' );
     register_widget( 'Subscribe' );
     register_widget( 'Instagram_Widget' );
     register_widget( 'TOC' );
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
/****************************************
	Adds Biography widget.
*****************************************/

class Biography extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Biography', // Base ID
			__('Biography', 'text_domain'), // Name
			array('description' => __( 'This widget allows you to upload an image with a text box', 'text_domain' ),) // Args
		);
		add_action('admin_enqueue_scripts', array($this, 'upload_scripts'));
	}
	/**
	    * Upload the Javascripts for the media uploader
	    */
    public function upload_scripts() {
       wp_enqueue_script('media-upload');
       wp_enqueue_script('thickbox');
       wp_enqueue_script('upload_media_widget', get_template_directory_uri() . '/_static/js/media-upload.js', array('jquery'));

       wp_enqueue_style('thickbox');
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
		$image = esc_attr( $instance['image'] );
		$title = esc_attr( $instance['title'] );
		$bio = balanceTags( $instance['bio'] );
		echo '<p class="title">'. $title .'</p>';
		echo '<img src="'. $image . '" alt="beth bio picture">';
		echo '<p class="bio">'. $bio .'</p>';
	}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {

		        $image = '';
		        if(isset($instance['image']))
		        {
		            $image = $instance['image'];
		        }
		        $title = $instance['title'];
		        $bio = $instance['bio'];
				?>
				<p>
					<label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title' ); ?></label>
					<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
				</p>
		        <p>
		            <label for="<?php echo $this->get_field_name( 'image' ); ?>"><?php _e( 'Image:' ); ?></label>
		            <input name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image ); ?>" />
		            <input class="upload_image_button button button-primary" type="button" value="Upload Image" />
		        </p>
		         <p>
		        	<label for="<?php echo $this->get_field_name( 'bio' ); ?>"><?php _e( 'Biography' ); ?></label>
		        	<textarea class="widefat theEditor" id="<?php echo $this->get_field_id( 'bio' ); ?>" name="<?php echo $this->get_field_name( 'bio' ); ?>"><?php echo esc_attr( $bio ); ?></textarea>
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

		$updated_instance = $new_instance;

		

		return $updated_instance;
	}
} // class Biography Widget

/****************************************
	Adds Subscribe Widget.
*****************************************/
class Subscribe extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Subscribe', // Base ID
			__('Subscribe Widget', 'text_domain'), // Name
			array('description' => __( 'This widget contains the Subscribe Area used on all Pages', 'text_domain' ),) // Args
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
		   $title = esc_attr( $instance['signup_title'] );
		   $rss = esc_attr( $instance['rss'] );
		   $rssImage = get_bloginfo('template_directory') . '/_static/images/icons/RSS.png';

		   echo '<div class="subscribe-widget"><div class="clearfix"><p class="title">'. $title .'</p>';                  
		   echo '<form class="fbf-widget" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open("http://feedburner.google.com/fb/a/mailverify?uri=localMilk", "popupwindow", "scrollbars=yes,width=550,height=520"); return true">
		           <label for="subscribeEmail">Email:</label>
		           <input class="subscription_email" type="text" name="email" id="subscribeEmail" placeholder=""><input type="hidden" value="localMilk" name="uri">
		           <input type="hidden" name="loc" value="en_US">
		           <input class="subscription_btn" type="submit" value="">
		    	</form>';
		    echo '<div class="rss"><p>rss: <a href="'. $rss .'" target="_blank"><img src="'. $rssImage .'" alt="rss feed"></a></div>';

		   
	}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = esc_attr($instance['signup_title']);
		$rss = esc_attr($instance['rss']); ?>
		<p>
		<label for="<?php echo $this->get_field_id( 'signup_title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'signup_title' ); ?>" name="<?php echo $this->get_field_name( 'signup_title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'rss' ); ?>"><?php _e( 'RSS URL:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'rss' ); ?>" name="<?php echo $this->get_field_name( 'rss' ); ?>" type="text" value="<?php echo esc_attr( $rss ); ?>">
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

		$instance['signup_title'] = strip_tags( $new_instance['signup_title'] );
		$instance['rss'] = strip_tags( $new_instance['rss'] );

		return $instance;
	}
} // class Subscribe

/****************************************
	Adds Instagram_Widget
*****************************************/
/* This widget is levergaing the Instagram Feed Plugin */

class Instagram_Widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Instagram_Widget', // Base ID
			__('Instagram', 'text_domain'), // Name
			array('description' => __( 'This adds the Insta-Feed plugin shortcode', 'text_domain' ),) // Args
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
		
		echo '<div class="instagram-widget"><p class="title">Insta-Milk</p>';
		echo do_shortcode('[instagram-feed num=1 showbutton=false showfollow=false]'); 
		echo '</div>';
	}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {


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

		

		return $instance;
	}
} // class Instagram_Widget
/****************************************
	Adds Table of Contents
*****************************************/
/* This widget is levergaing the Instagram Feed Plugin */

class TOC extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Table of Contents', // Base ID
			__('Table of Contents', 'text_domain'), // Name
			array('description' => __( 'Dispalys a table of contents with categories choosen in the theme&rsquo;s options', 'text_domain' ),) // Args
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
		
		
		$terms = get_field('list_of_categories', 'option');


		if( $terms ): ?>
			<nav id="table-contents">
				<p class="title">Table of contents</p>
				<ol class=toc>

				<?php foreach( $terms as $term ): ?>

					<li><span class="roman"></span><span><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></span></li>


				<?php endforeach; ?>

				</ol>
			</nav>

		<?php endif;
	}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {


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

		

		return $instance;
	}
} // class TOC
?>