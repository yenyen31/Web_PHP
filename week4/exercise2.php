<?php // 숫자 1부터 100까지 짝수만 출력
$i = 1;
while ($i <= 100) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
    $i++;
}
?>