<?php
// 1부터 100까지의 숫자 중 짝수만 출력

// 1부터 100까지 반복
for ($i = 1; $i <= 100; $i++) {
    // 짝수인 경우만 출력
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
