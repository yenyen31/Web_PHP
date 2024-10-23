<?php
session_start(); // 사용자 정보를 세션에 저장하기 위해 세션을 시작합니다.

// 이미 등록된 사용자 리스트 (예시용으로 미리 등록된 사용자 아이디들)
$existing_users = array("user1", "testuser");

// 입력된 데이터 가져오기
$username = $_POST['username'];              // POST 요청으로 전달된 'username' 데이터를 가져옴
$password = $_POST['password'];              // POST 요청으로 전달된 'password' 데이터를 가져옴
$confirm_password = $_POST['confirm_password']; // POST 요청으로 전달된 비밀번호 확인 필드의 데이터를 가져옴
$intro = $_POST['intro'];                    // POST 요청으로 전달된 자기소개 내용을 가져옴
$gender = $_POST['gender'];                  // POST 요청으로 전달된 성별 값을 가져옴
$hobbies = isset($_POST['hobby']) ? $_POST['hobby'] : array(); // 취미 데이터를 배열로 받아오고, 없을 시 빈 배열로 처리
$upload_dir = "uploads/";                    // 업로드된 파일을 저장할 디렉토리 경로 설정

// 오류 메시지를 저장할 배열
$errors = array(); // 발생할 수 있는 오류 메시지들을 저장할 배열

// 아이디 중복 체크
if (in_array($username, $existing_users)) {
    // 입력한 아이디가 이미 등록된 아이디 리스트에 있는 경우 오류 추가
    $errors[] = "이미 등록된 아이디입니다.";
}

// 비밀번호 일치 및 강도 체크
if ($password !== $confirm_password) {
    // 비밀번호와 비밀번호 확인 필드가 일치하지 않는 경우 오류 추가
    $errors[] = "비밀번호가 일치하지 않습니다.";
} elseif (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[\W]).{8,}$/', $password)) {
    // 비밀번호 강도 체크: 8자 이상이고, 대문자, 소문자, 숫자, 특수문자를 포함해야 함
    $errors[] = "비밀번호는 8자 이상이어야 하며, 대문자, 소문자, 숫자, 특수문자를 포함해야 합니다.";
}

// 성별 체크 (필수 항목)
if (empty($gender)) {
    // 성별이 선택되지 않은 경우 오류 추가
    $errors[] = "성별을 선택해야 합니다.";
}

// 취미 체크 (최소 2개 이상 선택)
if (count($hobbies) < 2) {
    // 취미가 2개 미만으로 선택된 경우 오류 추가
    $errors[] = "취미는 최소 2개 이상 선택해야 합니다.";
}

// 사진 업로드 처리
$file = $_FILES['profile_pic']; // 업로드된 파일 정보 가져오기
$allowed_types = array("image/jpeg", "image/png", "image/gif"); // 허용된 파일 형식
$max_size = 2 * 1024 * 1024; // 파일 크기 제한 2MB

if (!in_array($file['type'], $allowed_types)) {
    // 파일 형식이 JPG, PNG 또는 GIF가 아닌 경우 오류 추가
    $errors[] = "프로필 사진은 JPG, PNG 또는 GIF 형식이어야 합니다.";
} elseif ($file['size'] > $max_size) {
    // 파일 크기가 2MB를 초과한 경우 오류 추가
    $errors[] = "프로필 사진은 2MB 이하만 업로드할 수 있습니다.";
}

// 업로드할 파일의 최종 경로를 설정 (업로드 디렉토리 + 파일 이름)
$profile_pic_path = $upload_dir . basename($file['name']);

if (empty($errors) && move_uploaded_file($file['tmp_name'], $profile_pic_path)) {
    // 파일 업로드에 성공했으며 오류가 없는 경우

    // 사용자 데이터를 세션에 저장
    $_SESSION['user'] = array(
        "username" => $username,       // 세션에 저장할 사용자 아이디
        "intro" => $intro,             // 자기소개
        "gender" => $gender,           // 성별
        "hobbies" => $hobbies,         // 취미 목록
        "profile_pic" => $profile_pic_path // 업로드된 프로필 사진 경로
    );

    // 회원 가입 정보 출력
    echo "<h2>회원 가입 정보</h2>";
    echo "아이디: $username <br>";         // 입력된 아이디 출력
    echo "자기소개: $intro <br>";          // 입력된 자기소개 출력
    echo "성별: $gender <br>";             // 선택된 성별 출력
    
    // 선택된 취미 목록 출력 (쉼표로 구분)
    echo "취미: " . implode(", ", $hobbies) . "<br>";
    
    // 업로드된 프로필 사진을 출력 (이미지 태그 사용)
    echo "<br>프로필 사진:<br>";
    echo "<img src='$profile_pic_path' width='200'>"; // 200px 크기로 이미지 출력
    
} else {
    // 오류가 있을 경우 오류 메시지 출력
    echo "<h2>오류가 발생했습니다:</h2>";
    foreach ($errors as $error) {
        // 각 오류 메시지를 출력
        echo "<p>$error</p>";
    }
}
?>
