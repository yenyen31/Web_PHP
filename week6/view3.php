<!-- 텍스트 입력 처리 -->

<html>

<head>
    <meta charset="utf-8"> <!-- 문서의 인코딩을 UTF-8로 설정하여 한글이 깨지지 않도록 함 -->
    <link href="style.css" rel="stylesheet"> <!-- 외부 CSS 파일 'style.css'를 불러와 스타일을 적용 -->
</head>

<body>
    <?php
    // POST 방식으로 전달된 'content' 값을 받아서 변수 $content에 저장
    $content = $_POST["content"];
    ?>

    <ul>
        <!-- 사용자가 입력한 'content' 값을 출력 -->
        <li>글 내용 : <?= htmlspecialchars($content, ENT_QUOTES, 'UTF-8') ?></li> <!-- htmlspecialchars 함수로 특수문자 처리를 통해 XSS 공격 방지 -->
    </ul>
</body>

</html>