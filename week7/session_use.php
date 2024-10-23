<?php
// 등록한 세션의 사용

session_start(); // 세션을 시작하거나 기존 세션을 불러옴

// 세션 변수에서 값을 가져옴
$userid = $_SESSION["userid"]; // 'userid' 세션 변수 값을 $userid 변수에 저장
$username = $_SESSION["username"]; // 'username' 세션 변수 값을 $username 변수에 저장


?>

<html>

<head>
  <meta charset="utf-8">
</head>

<body>
  <h3> 등록된 세션의 사용 </h3>
  <ul>
    <!-- 세션 변수를 출력 -->
    <!-- <?= $변수명 ?>는 PHP의 짧은 출력 방식으로, echo와 같은 역할 -->
    <li>등록된 세션(userid) : <?= $userid ?></li>
    <li>등록된 세션(username) : <?= $username ?></li>
  </ul>
  </table>
</body>

</html>