<?php get_header(); ?>

	<!--<div> Archive.php </div>-->

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
						the_excerpt();//포스트 내용중 일부만을 잘라서 보여줌 Read more...
					
					}
				} else {
					echo "No post found";
				}
				
			?>
		</div>
	</div>
	

<?php get_footer();?>
