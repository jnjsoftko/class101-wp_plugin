<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @since WordPress Tutorial 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body>

	<div class="header">
		<?php the_widget('WP_Widget_Wpt_logo');?>
	  <h1><?php  echo get_bloginfo( 'name' );?></h1>
	  <div> <b><?php echo get_bloginfo( 'description' );?></b>  </div>
	  <div> <b><?php _e('Header.php','wptutorial');?>	</b></div>


		<?php /* if(is_active_sidebar('header-sidebar')) { ?>
				<div>
					<?php dynamic_sidebar('header-sidebar');?>
				</div>
		<?php } */ ?>
	
	</div>

	<?php 
		
		wp_nav_menu(
			array(
				'theme_location'=>'main_nav',
				'container'		=>'div',
				'container_class'	=>'my-navbar',
			)
		);

	?>

