<!-- 체크박스(취미) 입력 처리 -->

<html>

<head>
    <meta charset="utf-8"> <!-- 문서의 인코딩을 UTF-8로 설정하여 한글이 깨지지 않도록 설정 -->
    <link href="style.css" rel="stylesheet"> <!-- 외부 CSS 파일 'style.css'를 불러와 스타일을 적용 -->
</head>

<body>
    <ul>
        <li>나의 취미 :
            <?php
            // 사용자가 선택한 취미의 개수를 $_POST 배열에서 가져와 변수 $num에 저장
            $num = count($_POST["hobby"]); // hobby 배열의 크기(개수)를 계산

            // 선택한 취미를 하나씩 출력
            for ($i = 0; $i < $num; $i++) {
                echo $_POST["hobby"][$i]; // hobby 배열의 각 요소를 출력
                if ($i != $num - 1) { // 마지막 취미 항목이 아니면 쉼표를 추가
                    echo ", ";
                }
            }
            ?>
        </li>
    </ul>
</body>

</html>