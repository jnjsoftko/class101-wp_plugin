
$(document).ready(function() {
	$('#submit').click(function() {
		// 자바스크립트 변수
		// 데이터 타입 : String, Number, Boolean, null, undefined 
		const stu_name="홍길동";
		const title_kor="국어점수";//string
		const score_kor=88;//Number
	
		const stu_result = `${stu_name}은 ${title_kor}가 ${score_kor} 이다.`;

		//console.log(stu_result);

		const chk_name = document.getElementById("wpt-alert");
		//console.log(chk_name);
		const input_name=document.getElementById("uname").value;
		
		
		//이름이 "홍길동"이면
		/*
		if(input_name === stu_name) {
			console.log(input_name);
			console.log("이미 존재하는 이름입니다");
			chk_name.classList.remove("invisible", "alert-primary");
			chk_name.classList.add("alert-danger");
			chk_name.innerHTML = input_name + ": 이미 존재하는 이름입니다";
		}
		else {
			console.log(input_name);
			console.log("사용가능한 이름입니다");
			chk_name.classList.remove("invisible", "alert-danger");
			chk_name.classList.add("alert-primary");
			chk_name.innerHTML = input_name + ": 사용 가능한 이름입니다";
			
		}
		*/
		
		if(input_name === stu_name) {//이름이 "홍길동"이 아니면 폼 수행
			console.log(input_name);
			console.log("이미 존재하는 이름입니다");
			chk_name.classList.remove("invisible", "alert-primary");
			chk_name.classList.add("alert-danger");
			chk_name.innerHTML = input_name + ": 이미 존재하는 이름입니다";
			return false;
		}
		else {
			document.getElementById("form-id").submit();
		}

	})
});


/* 주석처리 
$(document).ready(function() {
	$('#submit').click(function() {
		if(document.getElementById('uname').value === '') {
			alert("이름을 정확히 입력하세요");
			document.getElementById('uname').focus();
			return false;
		}
		else {
			document.getElementById("form-id").submit();
		}
	})
});
*/