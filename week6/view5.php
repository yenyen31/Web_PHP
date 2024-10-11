<html>

<head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <ul>
        <li>나의 취미 :
            <?php
            // count: 배열 개수
            $num = count($_POST["hobby"]);
            for ($i = 0; $i < $num; $i++) {
                echo $_POST["hobby"][$i]; // hobby 배열의 인덱스를 출력
                if ($i != $num - 1) {
                    echo ", ";
                }
            }
            ?>
        </li>
    </ul>
</body>

</html>