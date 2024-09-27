<?php // 1부터 100까지의 짝수 합 + 홀수 합 구하기
// 짝수 합과 홀수 합을 저장할 변수 초기화
$even_sum = 0;
$odd_sum = 0;

// 1부터 100까지 반복
for ($i = 1; $i <= 100; $i++) {
    // 짝수인 경우
    if ($i % 2 == 0) {
        $even_sum += $i;
    } else {
        // 홀수인 경우
        $odd_sum += $i;
    }
}

// 결과 출력
echo "짝수 합: " . $even_sum . "<br>";
echo "홀수 합: " . $odd_sum . "<br>";
?>