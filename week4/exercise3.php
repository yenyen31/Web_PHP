<?php
// 반복문 (while 문)
// 1부터 100까지 합 출력

$i = 1;
$sum = 0;

while ($i <= 100) {
    $sum += $i;
    $i++;
}

// 출력
echo "합계: " . $sum;
