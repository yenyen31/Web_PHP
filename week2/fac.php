<?php
// 1부터 5까지의 팩토리얼 계산

// 계산할 숫자 설정
$n = 5; // 5로 설정
$factorial = 1;

// 1부터 n까지 반복하여 곱셈
for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}

// 결과 출력
echo "$n! = " . $factorial;
