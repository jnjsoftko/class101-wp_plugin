<?php
require get_template_directory().'/widget/wpt-widget.php';

function wptutorial_load_stle() {
	wp_enqueue_style('theme-default', get_stylesheet_uri());
	wp_enqueue_style('theme-bootstrap', get_template_directory_uri().'/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('font-roboto', get_template_directory_uri().'/font/roboto/roboto.css');
	
	wp_enqueue_script("jquery");//워드프레스 기본 Jquery 로드
	wp_enqueue_script('theme-bootstrap-js', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js');
	

	//Conditional Tags
	if ( is_front_page() && is_home() ) {
	  // Default homepage
	  //echo "Conditional Tag: Default home";
	  wp_enqueue_style('main-css', get_template_directory_uri().'/css/main.css');
	  wp_enqueue_script('theme-main-js', get_template_directory_uri().'/js/main.js');
	  
	} elseif ( is_front_page() ) {
	  // static homepage
	  //echo "Conditional Tag: Static page home";
	} elseif ( is_home() ) {
	  // blog page
	  //echo "Conditional Tag: Blog home";
	}elseif ( is_single() ) {
		//echo "Conditional Tag: is_single";
	} elseif ( is_page() ) {
		//echo "Conditional Tag: is_page";
		if ( is_page( 'about-us' ) ) {
		   //echo " + Page Title: About us";
		   wp_enqueue_style('main-css', get_template_directory_uri().'/css/main.css');
		} elseif ( is_page( 'contact-us' ) ) {
			 //echo " + Page Title: contact us";
		} else {
			//echo " + General page";
		}
	}	

}
add_action('wp_enqueue_scripts', 'wptutorial_load_stle');

//add_filter('show_admin_bar','__return_false');


function wptutorial_theme_menus() {
	add_theme_support('menus');
	//테마에서 사용할 메뉴 프레임 만들기
	register_nav_menus(
		array(
			'main_nav'=> __('Main','wptutorial'),
			'second_nav'=> __('Second','wptutorial')
		)
	);
}
add_action('after_setup_theme', 'wptutorial_theme_menus');

function wptutorial_widget_init() {
	register_sidebar(
		array(
			'name'=> __('Header Sidebar','wptutorial'),
			'id'=> 'header-sidebar',
			'description'=> __('Header', 'wptutorial')
		)
	);
	register_sidebar(
		array(
			'name'=> __('Left Sidebar','wptutorial'),
			'id'=> 'left-sidebar',
			'description'=> __('Left Sidebar', 'wptutorial')
		)
	);
	register_sidebar(
		array(
			'name'=> __('Footer Sidebar','wptutorial'),
			'id'=> 'footer-sidebar',
			'description'=> __('Footer', 'wptutorial')
		)
	);
}
add_action('widgets_init','wptutorial_widget_init');

function wpt_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length','wpt_excerpt_length');

function wpt_excerpt_more($more) {
	global $post;
	return '<a href="'.get_permalink($post->ID).'"> Read More...</a>';
}
add_filter('excerpt_more','wpt_excerpt_more');

function wpt_add_content ($content) {
	
	if ( is_single() ) {
		return $content;//.esc_html__('-포스트에 추가되는 데이터-','wptutorial');
	} elseif ( is_page() ) {
		//echo "Conditional Tag: is_page";
		if ( is_page( 'about-us' ) ) {
		   //return $content.esc_html__('-어바웃 페이지에 추가되는 데이터-','wptutorial');
		   $about_cont = "회원전용 컨텐츠";
		   
			return;
		   
		} elseif ( is_page( 'contact-us' ) ) {
			 return $content;//.esc_html__('-컨택트 페이지에 추가되는 데이터-','wptutorial');
		} else {
			return $content;//.esc_html__('-일반 페이지에 추가되는 데이터-','wptutorial');
		}
	}	
	
	// 아무런 변경사항이 없을 경우 원래 데이터 출력 
	return $content;
}
add_filter ('the_content', 'wpt_add_content');

//번역 
function wptutorial_theme_textdomain() {
	load_theme_textdomain('wptutorial', get_template_directory().'/lang');
}
add_action ('after_setup_theme', 'wptutorial_theme_textdomain');




















































