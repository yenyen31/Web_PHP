<?php
// 1부터 100까지의 소수를 모두 표기하고, 소수들을 모두 더한 값을 출력

// 소수인지 확인하는 함수
function isPrime($num)
{
    // 1 제외하기
    if ($num < 2) {
        return false;
    }

    // 소수인 경우
    // 2부터 그 수의 제곱근까지 나누어 떨어지는지 확인
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; // 나누어 떨어지면 소수 X
        }
    }
    return true; // 나누어 떨어지지 않으면 소수 O
}

// 전체 합
$sum = 0;

// 더하기
for ($i = 1; $i <= 100; $i++) {
    // 소수라면
    if (isPrime($i)) {
        echo $i . " "; // 소수 출력
        $sum += $i;    // 소수 합계에 더하기
    }
}

// 소수들의 합 출력하기
echo "<br>" . "소수들의 합: " . $sum;
