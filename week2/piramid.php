<?php
// 피라미드 높이 설정 (높이: 10)
$height = 10;

// 피라미드 출력
for ($i = 1; $i < $height; $i++) {
    // 각 줄에 1부터 i까지 출력
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    // 줄바꿈
    echo "<br>";
}
