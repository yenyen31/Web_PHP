<!DOCTYPE html>
<html lang="ko"> <!-- 문서 유형을 HTML5로 설정, 페이지 언어를 한국어로 지정 -->

<head>
  <meta charset="UTF-8"> <!-- 문서의 인코딩을 UTF-8로 설정하여 한글이 깨지지 않도록 설정 -->
  <title>이미지 업로드</title> <!-- 브라우저 탭에 표시될 페이지 제목 설정 -->
</head>

<body>

  <!-- 이미지를 업로드할 폼 -->
  <form action="" method="post" enctype="multipart/form-data">
    <!-- action="" : 현재 페이지로 폼 데이터를 전송 -->
    <!-- method="post" : POST 방식으로 데이터를 전송 -->
    <!-- enctype="multipart/form-data" : 파일 업로드를 가능하게 함 -->

    <!-- 파일 입력 필드 -->
    <label for="file">이미지 파일을 선택하세요:</label> <!-- 파일 입력 필드에 대한 설명 -->
    <input type="file" name="image" id="file" required><br><br>
    <!-- type="file" : 파일 입력 필드로 사용자가 파일을 선택할 수 있음 -->
    <!-- name="image" : 서버에서 업로드된 파일에 접근할 때 사용할 이름 -->
    <!-- id="file" : 레이블과 연결된 파일 입력 필드 -->
    <!-- required : 필수 입력 필드로 설정, 파일을 선택하지 않으면 폼이 제출되지 않음 -->

    <!-- 업로드 버튼 -->
    <input type="submit" value="업로드"> <!-- 폼을 제출하는 버튼 -->
  </form>

  <?php

  // 사용자가 이미지를 업로드 했는지 확인하는 부분
  // 1. 폼이 제출되었는지 확인 -> 
  // 2. 업로드된 파일이 있는지 확인
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {

    // 업로드 할 파일이 저장될 디렉토리 경로 설정 (이미 생성된 디렉토리)
    $upload_dir = "uploads/";  // 파일이 저장될 경로

    // 사용자가 업로드한 파일의 이름을 가져와 저장될 전체 파일 경로 설정
    $upload_file = $upload_dir . basename($_FILES['image']['name']);

    // move_uploaded_file: 임시 폴더에서 파일을 최종 업로드 경로로 이동
    if (move_uploaded_file($_FILES['image']['tmp_name'], $upload_file)) {
      echo "파일 업로드 성공!<br>";  // 파일 업로드 성공 메시지 출력

      // 업로드된 이미지를 브라우저에 표시
      echo "<img src='" . $upload_file . "' width='300'>";  // 업로드된 이미지의 너비를 300px로 설정해 출력
    } else {
      echo "파일 업로드 실패!";  // 업로드 실패 시 출력될 메시지
    }
  }
  ?>

</body>

</html>