<html>

<head>
  <meta charset="utf-8"> <!-- 문서 인코딩을 UTF-8로 설정 -->
</head>

<body>
  <?php
  // 세션 시작
  session_start(); // 세션을 시작하여 서버와 클라이언트 간의 세션 데이터를 사용할 수 있게 함
  echo "세션 시작!!<br>"; // 세션 시작 메시지 출력

  // 세션 데이터 등록
  $_SESSION['userid'] = "ocella"; // 'userid'라는 세션 변수에 "ocella" 값을 할당
  $_SESSION['username'] = "박영준"; // 'username'이라는 세션 변수에 "박영준" 값을 할당
  echo '세션 등록 완료!!<br>'; // 세션 등록 완료 메시지 출력

  // 세션 변수 값 출력
  echo $_SESSION['userid'] . "<br>"; // 'userid' 세션 변수 값 출력
  echo $_SESSION['username'] . "<br>"; // 'username' 세션 변수 값 출력
  ?>
</body>

</html>