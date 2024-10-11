<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // 기본 입력 데이터 처리
  $username = $_POST['username'] ?? '';
  $bio = $_POST['bio'] ?? '';
  $gender = $_POST['gender'] ?? '';
  $hobbies = $_POST['hobbies'] ?? [];

  // 비밀번호 검증은 클라이언트에서 처리했지만 서버에서도 검증 필요 (안전성 확보)
  $password = $_POST['password'] ?? '';
  $passwordRegex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/';

  if (!preg_match($passwordRegex, $password)) {
    die("비밀번호가 요구사항에 맞지 않습니다.");
  }

  // 성별 필수 체크
  if (empty($gender)) {
    die("성별을 선택해야 합니다.");
  }

  // 취미 최소 2개 선택 확인
  if (count($hobbies) < 2) {
    die("취미는 최소 2개 이상 선택해야 합니다.");
  }

  // 파일 업로드 처리
  if (isset($_FILES['photo'])) {
    $file = $_FILES['photo'];
    $fileName = $file['name'];
    $fileSize = $file['size'];
    $fileTmp = $file['tmp_name'];
    $fileError = $file['error'];

    // 파일 확장자 체크
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (!in_array($fileExt, $allowedExtensions)) {
      die("JPG, PNG, GIF 파일만 업로드 가능합니다.");
    }

    // 파일 크기 체크 (최대 2MB)
    if ($fileSize > 2 * 1024 * 1024) {
      die("파일 크기는 2MB 이하이어야 합니다.");
    }

    // 파일 저장
    // 여기서 파일 업로드에 자꾸 실패하는 상황 발생
    $uploadDir = '/Applications/XAMPP/xamppfiles/htdocs/Web_PHP/week6/data/'; // 업로드 할 디렉토리 정보
    if (!is_dir($uploadDir)) {
      mkdir($uploadDir, 0777, true);
    }
    $uploadFilePath = $uploadDir . basename($fileName); // 파일의 최종 저장 경로
    if (!move_uploaded_file($fileTmp, $uploadFilePath)) {
      die("파일 업로드에 실패했습니다.");
    }
  }

  // 입력된 데이터 출력
  echo "<h3>입력된 회원 정보</h3>";
  echo "아이디: " . htmlspecialchars($username) . "<br>";
  echo "소개글: " . htmlspecialchars($bio) . "<br>";
  echo "성별: " . htmlspecialchars($gender) . "<br>";
  echo "취미: " . implode(', ', array_map('htmlspecialchars', $hobbies)) . "<br>";

  if (isset($uploadFilePath)) {
    echo "업로드된 사진:<br><img src='" . htmlspecialchars($uploadFilePath) . "' alt='사진' width='200'><br>";
  }
}
