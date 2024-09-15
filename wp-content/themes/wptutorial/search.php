<?php get_header(); ?>

	<!--<div> Search.php </div>-->

	<div class="my-row">

		<?php get_sidebar();?>
		<div class="main">
			<?php 

			/* 포스트 루프 */
			if(have_posts()) {
				
				//While loop 추가 
				while(have_posts()) {

					the_post();
						
					the_title();
					the_content();
				
				}
			} else {
				echo "No post found";
			}
			?>
		</div>
	</div>
	

<?php get_footer();?>
