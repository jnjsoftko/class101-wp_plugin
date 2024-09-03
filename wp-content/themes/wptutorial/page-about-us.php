<?php get_header('about'); ?>

	<!--<div> 출력템플릿 파일: Page-about-us.php 전용 출력 파일</div>-->

	<div class="my-row">

		<?php //get_sidebar('about');?>
		<div class="main">
			<?php 

			/* 포스트 루프 */
			if(have_posts()) {
				
				//While loop 추가 
				while(have_posts()) {
					the_post();
					
					get_template_part("content","page-aboutus");
				
				}
			} else {
				echo "No post found";
			}
			
			
			?>
		</div>
	</div>
	
<?php get_footer();?>
