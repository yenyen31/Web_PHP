<!-- 폼 양식의 데이터 처리 - 액션 속성 -->

<html>

<head>
  <meta charset="utf-8"> <!-- 문서의 인코딩을 UTF-8로 설정 -->
</head>

<body>
  <?php
  // POST 방식으로 전달된 name1 값을 변수 $name에 저장
  $name = $_POST["name1"];

  // 저장된 $name 값을 출력하고, 뒤에 "님 반갑습니다~!" 문구를 추가하여 화면에 표시
  echo $name . "님 반갑습니다~!";
  ?>
</body>

</html>