<?php
// 쿠키 생성
$a = setcookie("userid", "rubato"); // 'userid'라는 이름의 쿠키를 생성하고 값은 'rubato'로 설정
$b = setcookie("uesrname", "김채린", time() + 60); // 'uesrname'라는 이름의 쿠키를 생성하고 값은 '김채린'으로 설정, 만료 시간은 현재 시간부터 60초 후

// 두 쿠키가 모두 성공적으로 생성되었는지 확인
if ($a and $b) {
  echo "쿠키 'userid'와 'username' 생성 완료! <br>";
  echo "쿠키 'username'은 60초(1분)간 지속됨!";
}
