<?php
// 세션 시작
session_start();

// 특정 세션 변수 삭제
unset($_SESSION["username"]); // 'username' 세션 변수 삭제

// 전체 세션 삭제를 원하면 session_destroy()를 사용
// session_destroy(); 

?>

<html>

<head>
  <meta charset="utf-8">
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>
  <ul>
    <li>
      <?= "userid 세션 : " . (isset($_SESSION["userid"]) ? $_SESSION["userid"] : "세션이 없습니다.") . "<br>" ?>
    </li>
    <li>
      <?= "username 세션 : " . (isset($_SESSION["username"]) ? $_SESSION["username"] : "세션이 없습니다.") . "<br>" ?>
    </li>
    <li><?= "username 세션이 삭제되었습니다!" ?></li>
  </ul>
</body>

</html>