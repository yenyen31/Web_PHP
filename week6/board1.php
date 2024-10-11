<!-- Get 데이터 전달 -->
<!-- http://localhost/6/board1.php?table=free -->

<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
    // URL 파라미터에서 'table' 값을 가져옴
    $table = $_GET["table"];

    // 'table' 값에 따라 다른 게시판 제목 설정
    if ($table == "free") {
        $board_title = "자유게시판";  // 자유게시판일 경우
    } elseif ($table == "download") {
        $board_title = "자료실";  // 자료실일 경우
    } elseif ($table == "notice") {
        $board_title = "공지사항";  // 공지사항일 경우
    } else {
        $board_title = "문의게시판";  // 그 외의 경우
    }
?>
    <!-- 설정된 게시판 제목을 출력 -->
    <h1><?= $board_title?></h1>
</body>
</html>