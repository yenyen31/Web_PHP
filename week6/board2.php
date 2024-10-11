<!-- 링크시 GET 방식으로 데이터 전달하기 -->

<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
    // 게시판 테이블 변수를 설정
    $table1 = "free";  // 자유게시판 테이블
    $table2 = "qna";   // 질문과 답변 게시판 테이블
    ?>
    <!-- 자유게시판 섹션 -->
    <h3>자유게시판</h3>
    <!-- 자유게시판 목록보기 링크 -->
    <a href="board_view.php?table=<?= $table1 ?>&type=list">목록보기</a>
    <br>
    <!-- 자유게시판 글쓰기 링크 -->
    <a href="board_view.php?table=<?= $table1 ?>&type=write">글쓰기</a>

    <br>

    <!-- 질문과 응답 게시판 섹션 -->
    <h3>질의응답 게시판</h3>
    <!-- 질문과 응답 게시판 목록보기 링크 -->
    <a href="board_view.php?table=<?= $table2 ?>&type=list">목록보기</a>
    <br>
    <!-- 질문과 응답 게시판 글쓰기 링크 -->
    <a href="board_view.php?table=<?= $table2 ?>&type=write">글쓰기</a>
</body>

</html>