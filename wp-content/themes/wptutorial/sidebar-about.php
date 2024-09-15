<div class="sidebar">
	<h5>About Us 전용 사이드바 </h5>
	
	<div>
	<?php if(is_active_sidebar('left-sidebar')) { ?>
			<div>
				<?php dynamic_sidebar('left-sidebar');?>
			</div>
	<?php }  ?>
	</div>
	
</div>