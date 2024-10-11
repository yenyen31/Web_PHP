<!-- 라디오 버튼 텍스트 입력 처리 -->

<html>

<head>
    <meta charset="utf-8"> <!-- 문서의 인코딩을 UTF-8로 설정하여 한글이 깨지지 않도록 함 -->
    <link href="style.css" rel="stylesheet"> <!-- 외부 CSS 파일 'style.css'를 불러와 스타일을 적용 -->
</head>

<body>
    <?php
    // POST 방식으로 전달된 'gender'와 'email_ok' 값을 각각 변수에 저장
    $gender = $_POST["gender"]; // 성별 값을 'gender' 변수에 저장
    $email_ok = $_POST["email_ok"]; // 이메일 수신 여부를 'email_ok' 변수에 저장

    // 이메일 수신 여부에 따라 출력할 텍스트 설정
    if ($email_ok == "예") {
        $email = "수신"; // 이메일 수신 동의 시 "수신"으로 설정
    } else {
        $email = "비수신"; // 이메일 수신 거부 시 "비수신"으로 설정
    }
    ?>

    <ul>
        <!-- 사용자가 선택한 성별을 출력 -->
        <li>성별 : <?= $gender ?></li>
        <!-- 사용자가 선택한 이메일 수신 여부를 출력 -->
        <li>이메일 : <?= $email ?></li>
    </ul>
</body>

</html>