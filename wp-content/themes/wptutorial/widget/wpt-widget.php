<?php 

function register_widget_wpt_logo() {
		register_widget( 'WP_Widget_Wpt_logo' );
}
add_action('widgets_init', 'register_widget_wpt_logo');


// Widget Class
class WP_Widget_Wpt_logo extends WP_Widget {

	public function __construct() {
		$widget_ops = array('classname' => 'ClWidget_wpt_logo', 'description' => __( 'WP Tutorial Logo widget'), 'widgetsbgimage' => plugins_url( 'screenshot', __FILE__ ) );
		parent::__construct('wp_tutorial_logo', __('WPTutorial Logo'), $widget_ops);

		add_shortcode('wpt_logo', array(&$this, 'widget'));
	}

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

		require 'wpt-html.php';
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);

		return $instance;
	}

	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
		$title = strip_tags($instance['title']);

	}
}