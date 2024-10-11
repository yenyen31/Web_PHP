<!-- 파일 업로드 입력 처리 -->

<html>

<head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
</head>

<?php
// 선택 박스 입력 처리
// selectbox.html 에서 입력된 이메일 처리
// 사용자로부터 입력된 이메일 앞부분과 뒷부분을 받아옴
$email1 = $_POST["email1"];  // 이메일의 앞부분
$email2 = $_POST["email2"];  // 이메일의 도메인 부분
?>

<body>
    <ul>
        <li>이메일 :
            <?php
            // 사용자의 이메일을 완성하여 출력
            echo $email1 . "@" . $email2;
            ?>
        </li>
    </ul>
</body>

</html>