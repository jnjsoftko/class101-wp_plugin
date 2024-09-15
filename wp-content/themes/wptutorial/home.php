<?php get_header(); ?>


	<?php  if(is_active_sidebar('header-sidebar')) { ?>
			<div>
				<?php dynamic_sidebar('header-sidebar');?>
			</div>
	<?php } ?>
		
	<div class="my-row">

		<?php get_sidebar();?>
		<div class="main">
			
			
			<div class="card">
			  <h5 class="card-header">
				<b >테마 제작 </b> <span class="r-triangle">&#x25B7; </span>
				
				<?php _e('WordPress Tutorial Theme','wptutorial');?>
				
				
			  </h5>
			  <div class="card-body">
				<h5 class="card-title">
					
				</h5>
				<div class="card-text">
				
					<?php 

					/* 포스트 루프 */
					if(have_posts()) {
						
						//While loop 추가 
						while(have_posts()) {

							the_post();
							
							get_template_part("content","post");
							

						}
					} else {
						echo "No post found";
					}
					
					?>				

				</div>
			  </div>
			</div>

			<div class="alert alert-primary invisible" id="wpt-alert" role="alert">
			  This is a primary alert—check it out!
			</div>
			
			<div class="card wpt-formcard">
			  <h5 class="card-header">
				<b >폼-Form </b> <span class="r-triangle">&#x25B7; </span>
			  </h5>
			  <div class="card-body">
				<h5 class="card-title">
					
				</h5>
				<div class="card-text">
				<!----------------------------------->
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="form-id" method="get"><!--현재페이지 유지-->
				
					<div class="container wpt-wrapper">
					  <div class="row f-card">
						<div class="col left-colu">
							<div class="">
								<!-- 사용자 정보 -->
								<div class="form-cls">
									<div class="form-group f-input">
										<label >Name</label>
										<input name="uname" id="uname" type="text" class="form-control" placeholder="">
									</div>
									<div class="form-group f-input">
										<label >Password</label>
										<input name="upassword" type="password" class="form-control" placeholder="">
									</div>
									<div class="form-group f-input">
										<label >E-mail</label>
										<input name="uemail" type="email" class="form-control" placeholder="">
									</div>
									<div class="form-group f-input">
										<label >Phone</label>
										<input name="uphone" type="text" class="form-control" placeholder="">
									</div>
									<div class="form-group f-input">
										<label >City</label>
										<input name="ucity" type="text" class="form-control" placeholder="">
									</div>

								</div>
								
							</div>
						  
						</div>
						<div class="col right-colu">
							<div class="">
								<!-- 과목정보 -->
								<div class="form-cls">
									<div class="form-group f-input">
										<label >국어</label>
										<input name="s_kor" id="s_kor" type="text" class="form-control">
									</div>
									<div class="form-group f-input">
										<label >영어</label>
										<input name="s_eng" id="s_eng" type="text" class="form-control">
									</div>
									<div class="form-group f-input">
										<label >수학</label>
										<input name="s_math" id="s_math" type="text" class="form-control">
									</div>
									<div class="form-group f-input">
										<label >과학</label>
										<input name="s_sci" id="s_sci" type="text" class="form-control">
									</div>
									<div class="form-group f-input">
										<label >역사</label>
										<input name="s_his" id="s_his" type="text" class="form-control">
									</div>

								</div>
							</div>
						  
						</div>
						
						<div class="col-12 full-colu">
							<div class="f-input"> 
								<input type="submit" id="submit" class="btn btn-primary wpt-btn" value="Submit">
							</div>

						</div>
					  </div>


					</div>
				</form>
				<!------>
				
				</div>
			  </div>

			</div>
			

		</div>
	</div>




	
<?php get_footer();?>
