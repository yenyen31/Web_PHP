<!-- 링크시 GET 방식으로 데이터 전달하기 -->
<!-- http://localhost/post/board_view.php?table=qna&type=write -->

<?php
    // GET 요청에서 'table'과 'type' 값을 확인하여 설정. 값이 없을 경우 빈 문자열로 설정
    $table = isset($_GET["table"]) ? $_GET["table"] : ''; 
    $type = isset($_GET["type"]) ? $_GET["type"] : ''; 

    // 초기값 설정
    $board_title = "문의게시판";  // 기본값: 문의게시판
    $type_title = "";  // 기본값: 빈 문자열

    // 'table' 값에 따라 게시판 제목 설정
    if ($table == "free")
        $board_title = "자유게시판";
    if ($table == "qna")
        $board_title = "질의응답 게시판";

    // 'type' 값에 따라 액션 타입 설정 (목록보기 or 글쓰기)
    if ($type == "list")
        $type_title = "목록보기";
    if ($type == "write")
        $type_title = "글쓰기";
?>
    <h3>
        <?php
            // 게시판 제목과 타입을 출력
            echo ">> ".$board_title." | ".$type_title;
        ?>
    </h3>