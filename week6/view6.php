<!-- 체크박스(이메일) 입력 처리 -->

<html>

<head>
    <meta charset="utf-8"> <!-- 문서의 인코딩을 UTF-8로 설정하여 한글이 깨지지 않도록 설정 -->
    <link href="style.css" rel="stylesheet"> <!-- 외부 CSS 파일 'style.css'를 불러와 스타일을 적용 -->
</head>

<?php
// POST 방식으로 전달된 이메일의 첫 번째 부분과 도메인 부분을 각각 변수에 저장
$email1 = $_POST["email1"]; // 사용자가 입력한 이메일의 앞부분
$email2 = $_POST["email2"]; // 사용자가 선택한 이메일 도메인
?>

<body>
    <ul>
        <!-- 사용자가 입력한 이메일을 '이메일1@이메일2' 형식으로 출력 -->
        <li>이메일 : <?php echo $email1 . "@" . $email2; ?></li>
    </ul>
</body>

</html>