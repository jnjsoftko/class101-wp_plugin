<?php
/*
echo "<hr> About Us 페이지 전용 컨텐츠 <hr>";
the_title();
*/
the_content();//show nothing

//로그인 여부 체크
if(!is_user_logged_in()) {
   echo "로그인이 필요한 서비스 입니다";
}
else {
   //echo  "회원전용 컨텐츠";

//Html 컨텐츠 
?>
<div class="wptobe_2_7004_topfullwidthrow" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/background.jpg');">
  <div class="row justify-content-center">
	<!-- Content : -->
	<div class="wptobe_2_7004_content_wrapper">
		<div class="wptobe_2_7004_content_triangle">
			<div class="wptobe_2_7004_content__inner_wrapper">
				<div class="wptobe_2_7004_content">
					<h2>
						펜션 소개
					</h2>

					<p>
						푸른 숲과 시원한 바람이 불어오는 곳에 위치한
						자연과 함께하는 여유로운 분위기가 있습니다.
						맑은 공기와 깨끗한 자연이 보여주는 풍경은
						일상에 지친 마음에 작은 힐링을 선물합니다.

					</p>

					<a class="wptobe_2_7004_content_button">
						숙박 요금 알아보기
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Content : -->
  </div>
</div>

<?php
}