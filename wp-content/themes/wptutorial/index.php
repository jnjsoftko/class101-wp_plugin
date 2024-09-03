<?php get_header(); ?>

	<div> Index.php </div>

	<?php 

	/* 포스트 루프 */
	if(have_posts()) {
		
		//While loop 추가 
		while(have_posts()) {
			echo "<hr>";
			the_post();
				
			the_title();
			the_content();
		
		}
	} else {
		echo "No post found";
	}
	

	?>
<?php get_footer();?>
