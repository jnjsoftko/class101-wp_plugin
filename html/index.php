<!DOCTYPE html>
<html lang="ko-KR">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>워드프레스 플러그인 개발 </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500;1,900&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

	<div class="header">
	  <h1>워드프레스 튜토리얼</h1>
	  <div>워드프레스 <b>플러그인 개발 강의</b> CSS/JS 이해하기</div>
	  <div> <b>Index.php</b></div>
	</div>

	<div class="my-navbar">
	  <a href="index.php" class="active">Home</a>
	  <a href="about.php">About</a>
	  <a href="contact.php">Contact</a>
	  <a href="#" class="right">Help</a>
	</div>

	<div class="my-row">
	
		<!--<div class="sidebar">
			<h2>Left Sidebar</h2>
			<h5>사이드바 이미지</h5>
			<div class="sideimg">샘플이미지1</div>
			<p>Beautiful designs, powerful features, and the freedom to build anything you want. WordPress is both free and priceless at the same time.
			</p>
			<h3>WordPress</h3>
			<p>WordPress Plugins</p>
			<div class="sideimg-slim">WooCommerce</div>
			<div class="sideimg-slim">bbPress</div>
			<div class="sideimg-slim">Memberships</div>	
		</div>-->

		<div class="main">
			
			<?php 
				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				001▷ 	PHP	코드 시작과 종료 
						<?php 로 시작해서 ?> 로 끝난다
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/

				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				002▷ 	PHP 주석 처리 
						PHP 문장으로 인식하지 않는다. 
						슬래시* 로시작해서 *슬래시로 끝난다. 
						// 한줄 주석처리
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/

				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				003▷ 	문장의 끝은 항상 세미콜론 ; 으로 끝낸다
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/

				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				004▷ 	변수의 내용을 페이지에 출력하는 함수
						echo 
						print/printf
						print_r
						var_dump
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/

				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				005▷ 	PHP 변수 사용법
						$ 로 시작
						$ 바로다음에 알파벳이나 언더스코어 _ 만 사용 / 숫자는 안됨
						알파벳(대소문자 구분)과 숫자 언더스코어 
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/

				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				006▷ 	PHP 데이터타입
						String	문자열
						Integer	정수
						Float	실수
						Boolean	참/거짓 True/False 1/0
						Array	배열 
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/				
				
				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				007▷ 	실습
						폼에서 국어 점수와 영어 점수를 더해서 보여주기
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/	
				
				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				008▷ 	조건문
						if/else/elseif
						비교연산자(Comparison Operators)
						==		$x == $y	같다
						===		$x === $y	값과 데이터 타입 모두가 같아야 한다. 
						!=		Not equal	같지않다
						<>		Not equal	같지않다
						!==					같지 안거나 값이 같더라도 데이터타입이 틀리다
						>		크다
						<		작다 
						>=		크거나 같다
						<=		작거나 같다
						
						논리 연산자 (Logical Operators) - 두개이상의 조건을 조합
						AND(&&)
						OR(||)
						NOT(!)	
						
						축약형 If  $result = (1 == $val) ? 'Yes' : 'No';
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/					

				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				009▷ 	실습
						이름과 국어 점수를 입력하면 등급을 알려주기
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/	

				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				010▷ 	문자열 (String) 조작
						$str1.$str1 	더하기		' " 따옴표 
						strlen	길이
						strpos	문자열 찾기
						explode 구분자로 잘라서 배열로 만듦
						substr	문자열 추출
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/			

				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				011▷ 	For 루프 	★★★★★
								조건을 검사하여 만족하면 계속 반복
								정해진 숫자만큼 반복
						
						while	조건을 검사하여 만족하면 계속 반복
								조건이 만족될때까지 무한 반복
								될 수 있으면 사용을 피할 것 / 프로그램 다운의 주범
								정확히 사용하면 편리함
						
						do while
								먼저 코드를 실행한 뒤 나중에 조건을 체크해서 
								조건을 만족할 때까지 무한 반복
								While과의 차이점은 조건을 만족하지 않더라도 한번은 실행됨
						
						foreach
								배열을 출력하기 위한 루프
								배열의 내용을 끝까지 출력해 준다. 
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/	
				
				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				012▷ 	배열 		★★★★★
								여러개의 값을 하나의 변수에 저장하는 방법
						foreach
								배열 출력을 위한 for 루프
						다차원배열(Multidimensional Array)	
								배열안에 배열을 포함한 구조 
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/		
				
				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				013▷ 	Function ★★★★★★★★★★
								프로그램 안에서 반복적으로 사용되는 코드
								우리가 지금까지 사용했던 echo, print,array, var_dump 모두 
								PHP Built-in function이다. 
								https://www.w3schools.com/php/php_ref_overview.asp 참조
								모든 함수를 알 필요 없음
								필요할 때마다 구글 검색해서 함수를 찾아서 사용 
						
						문법		function 이름() {}
								이름을 정하는 조건은 변수를 만드는 조건과 같다
						리턴값
						인자
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/		
				
				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				014▷ 	Include/Require/Include_once/Require_once
								PHP 함수를 사용하기 위해 함수가 정의된 파일을 포함한다. 
						
						Include/Require 는 기능은 같지만 Require는 파일이 없으면 에러 			
						Include_once/Require_once 기능이 같지만 Require_once 파일 없으면 에러
						_once	한번 포함된 파일은 중복되면 다시 포함시키지 않는다. 
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/	

				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				015▷ 	PHP Super Global Variables
							 
						내용은 var_dump 함수로 출력해서 확인한다. 
						$GLOBALS	
						$_SERVER	
						$_REQUEST
						$_POST
						$_GET
						$_FILES
						$_ENV
						$_COOKIE
						$_SESSION
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/	
				
				/**
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				016▷ 	폼 데이터 송/수신 방식
						$_GET		GET 방식의 데이터만 처리
						$_POST		POST 방식의 데이터만 처리
						$_REQUEST	GET POST 두가지 데이터 모두 처리
						
				◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
				*/
			?>
			<div class="card">
			  <h5 class="card-header">
				<b >CSS/JS 필수코딩 </b> <span class="r-triangle">&#x25B7; </span>
				Javascript
				
			  </h5>
			  <div class="card-body">
				<h5 class="card-title">
					
				</h5>
				<div class="card-text">
				
					<?php

					echo "학생이름:".$_GET["uname"]."<br>";
					echo "국어점수: ".$_GET["s_kor"];
					/*
					echo "<pre>";
					var_dump($_SERVER);
					echo "</pre>";
					
					
					require 'sum.php';
					//echotest(); //함수 이름을 적어서 사용하는 것을 호출한다고 한다.
					//$r_value=echotest();
					//echo "<br>".$r_value;
					
					echo "학생 이름:".$_GET["uname"]."<br>";
					$s_korscore=$_GET["s_kor"];
					$s_engscore=$_GET["s_eng"];
					//$s_sctotal = $s_korscore + $s_engscore;
					$s_sctotal = add_score($s_korscore, $s_engscore);
					//echo "국어점수".$s_korscore."+"."영어점수".$s_engscore."=".$s_sctotal;
					$s_avg = avg_score($s_korscore, $s_engscore);
					echo "평균점수".$s_avg;
					
					
					$str1="WordPress";
					$str2="Tutorial";
					$str3="Welcome to WordPress Tutorial";	
					$arr1= array(); //초기화
					$arr2= array("Word", "Press", "Tutorial", "PHP", "Coding", "array");
					$arr3= array($str1, $str2, $str3);
					$arr4= array("Korean"=>"98", "English"=>"88", "Math"=>"59");
					$arr5= array("Korean"=>"58", "English"=>"68", "Math"=>"50");
					$arr6= array("Korean"=>"90", "English"=>"85", "Math"=>"57");
					$arr7= array( "학생A"=>$arr4, "학생B"=>$arr5, "학생C"=>$arr6);// 다중배열 
					
					//print_r($arr2);
					//echo "<br>";
					//echo $arr2[2];
					//echo "<pre>";
					//var_dump($arr3);
					//echo "</pre>";
					//foreach 배열 출력을 위한 for 루프 
					foreach ($arr7 as $key=>$val ) 
					{
						
						foreach ($val as $subkey=>$value ) 
						{
							//var_dump($value);
							echo $key."-".$subkey.": ".$value."<br>";
						}
					}

					for($x=0,$y=0; ($x<10) && ($y<5); $x++,$y++) // 초기값; 조건; 수행후;
					{
						echo "x 값은:".$x."y값은:".$y."<br>";
					}
					
					$x=0;
					while($x < 10) 
					{
						echo "x 값은: ".$x."<br>";
						$x++; //이 문장이 빠질 경우 무한루프 > 다운됨 
					}
					$x=0;
					do 
					{
						echo "x 값은: ".$x."<br>";
						$x++;
					} while($x < -5);
					
					$str1="WordPress";
					$str2="Tutorial";
					$str3="Welcome to WordPress Tutorial";
					$str4=$str1 . $str2; //합치기
					$str5="Word-Press-Tutorial";
					$str6=explode('-',$str5);// -을 구분자로 해서 배열에 넣는다. 
					
					echo "문자열 출력:".$str1."<br>";
					echo "문자열 더하기:".$str4."<br>";
					echo "문자열 길이:".strlen($str1)."<br>";
					echo "문자열 찾기:".strpos($str3, $str1)."번째"."<br>"; 
					echo "문자열 배열전환:".$str6[0].$str6[1].$str6[2]."<br>";
					echo "문자열 추출:".substr($str5, 0,3).substr($str5, 5,6);
					
					echo "학생 이름:".$_GET["uname"]."<br>";
					$s_korscore=$_GET["s_kor"];
					
					echo "국어점수 등급:";
					if( $s_korscore<=100 && $s_korscore>90) {	echo "A";}
					elseif( $s_korscore<=90 && $s_korscore>80) {echo "B";}
					elseif( $s_korscore<=80 && $s_korscore>70) {echo "C";}
					elseif( $s_korscore<=70 && $s_korscore>60) {echo "D";}
					else {echo "F";}	// 조건을 만족시키지 않는 모든 경우
					
					
					//if 축약형
					$val=2;
					$result= (1 == $val) ? 'Yes' : 'No';
					echo $result;
					
					$comp=99;
					//조건안에 두개 이상의 문장이 필요할 때 중괄호 사용 {} 
					if( $comp<=100 && $comp>80) {	echo "81~100 사이"; echo "참 잘했어요";}
					elseif( $comp<=80 && $comp>70) {echo "71~80 사이"; echo "힘내세요";}
					elseif( $comp<=70 && $comp>60) {echo "61~70 사이"; echo "노력이 필요해요";}
					else {echo "나가 죽어라";}	// 조건을 만족시키지 않는 모든 경우
					
					 echo "학생 이름:".$_GET["uname"]."<br>";
					 $s_korscore=$_GET["s_kor"];
					 $s_engscore=$_GET["s_eng"];
					 $s_sctotal = $s_korscore + $s_engscore;
					 echo "국어점수".$s_korscore."+"."영어점수".$s_engscore."=".$s_sctotal;
					 */
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
			
	
		    <!--<h2>페이지 메인 컨텐츠</h2>
			<h5>HTML, Dec 7, 2020</h5>
			<img class="thumb-img" src="img/wptutorial.jpg">
			<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
			-->

		</div>
	</div>

	<div class="footer">
		푸터 
	</div>
	<script src="main.js"></script>


</body>

</html>





















