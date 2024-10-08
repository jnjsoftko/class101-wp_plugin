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
	  <h1><?php echo get_bloginfo( 'name' );?></h1>
	  <div> <b><?php echo get_bloginfo( 'description' );?></b>  </div>
	  <div> <b>Header-about.php</b></div>
	</div>
	
	<?php 
		
		wp_nav_menu(
			array(
				'theme_location'=>'second_nav',
				'container'		=>'div',
				'container_class'	=>'my-navbar',
			)
		);

	?>

