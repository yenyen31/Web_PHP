<html>

<head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <?php
    // 파일 저장 위치를 설정
    $file_dir = "C:\\xampp\\htdocs\\6\\data\\";

    // 업로드된 파일의 전체 경로를 생성
    $file_path = $file_dir . $_FILES["upload"]["name"];  // 파일 이름을 포함한 풀 패스

    // 파일을 지정된 경로로 이동시키는 함수
    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $file_path)) {  // 파일 저장 성공 시
        // 이미지 경로를 설정
        $img_path = "data\\" . $_FILES["upload"]["name"];
    ?>
        <ul>
            <!-- 업로드된 이미지를 보여줌 -->
            <li><img src="<?= $img_path ?>"></li> <!-- 이미지 보여준다 -->
            <!-- 입력된 설명을 보여줌 -->
            <li><?= $_POST["comment"] ?></li> <!-- 이미지 설명 내용 -->
        </ul>
    <?php
    } else {
        // 파일 업로드에 실패했을 경우 에러 메시지 출력
        echo "파일 업로드 오류가 발생했습니다!";
    }
    ?>
</body>

</html>