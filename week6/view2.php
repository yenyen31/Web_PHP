<!-- 아이디, 비밀번호 처리 -->

<html>

<head>
  <meta charset="utf-8"> <!-- 문서의 인코딩을 UTF-8로 설정하여 한글이 깨지지 않도록 설정 -->
  <link href="style.css" rel="stylesheet"> <!-- 외부 CSS 파일 'style.css'를 불러와 스타일을 적용 -->
</head>

<body>
  <?php
  // POST 방식으로 전달된 아이디와 비밀번호 값을 받아 변수에 저장
  $id = $_POST["id"]; // 사용자가 입력한 아이디 값을 $id 변수에 저장
  $pass = $_POST["pass"]; // 사용자가 입력한 비밀번호 값을 $pass 변수에 저장
  ?>

  <ul>
    <!-- 아이디 값을 출력 -->
    <li>아 &nbsp;이 &nbsp;디 : <?= $id ?></li>
    <!-- 비밀번호 값을 출력 -->
    <li>비밀번호 : <?= $pass ?> </li>
  </ul>

</body>

</html>