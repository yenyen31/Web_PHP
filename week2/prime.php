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
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// 전체 합
$sum = 0;

// 더하기
for ($i = 1; $i <= 100; $i++) {
    // 소수라면
    if (isPrime($i)) {
        echo $i . " ";
        // 결과값에 더하기
        $sum += $i;
    }
}

// 소수들의 합 출력하기
echo "<br>" . "소수들의 합: " . $sum;
