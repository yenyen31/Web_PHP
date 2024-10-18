<?php
// 쿠키 삭제
// 쿠키를 삭제하려면 해당 쿠키의 유효 시간을 과거로 설정하면 됩니다.
// 'userid'와 'username' 쿠키의 만료 시간을 1시간 전으로 설정하여 삭제

setcookie("userid", "", time() - 3600);
setcookie("username", "", time() - 3600);

?>

<html>

<head>
  <meta charset="utf-8">
</head>

<body>
  <?php {
    // 메시지 출력
    echo "userid와 username 쿠키가 삭제되었다!";
  }
  ?>
</body>

</html>