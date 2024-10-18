<?php
// cookie_set 에서 쿠키 생성 후 실행
// 쿠키가 존재하는지 확인
if (isset($_COOKIE["userid"]) && isset($_COOKIE["username"])) {
  $userid = $_COOKIE["userid"];
  $username = $_COOKIE["username"];

  // 쿠키 값 출력 (보안 처리 포함)
  echo "userid 쿠키 : " . htmlspecialchars($userid, ENT_QUOTES, 'UTF-8') . "<br>";
  echo "username 쿠키 : " . htmlspecialchars($username, ENT_QUOTES, 'UTF-8') . "<br>";
} else {
  // 쿠키가 없을 때 메시지 출력
  echo "쿠키가 생성되지 않았다!";
}
