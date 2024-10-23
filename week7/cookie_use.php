<?php
// cookie_set 에서 쿠키 생성 후 실행

// 쿠키가 존재하는지 확인 -> isset() 사용
if (isset($_COOKIE["userid"]) && isset($_COOKIE["username"])) {
  $userid = $_COOKIE["userid"];
  $username = $_COOKIE["username"];

  // 쿠키 값 출력 (보안 처리 포함)
  echo "userid 쿠키 : " . $userid . "<br>";
  echo "username 쿠키 : " . $username . "<br>";
} else {
  // 쿠키가 없을 때 메시지 출력
  echo "쿠키가 생성되지 않았다!";
}
