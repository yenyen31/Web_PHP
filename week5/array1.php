<?php
// 배열 이용 합계, 평균 구하기, 배열의 원소는 0부터 시작한다.
$score[0] = 90;
$score[1] = 80;
$score[2] = 85;
$score[3] = 95;
$score[4] = 93;

$sum = 0;

for ($a = 0; $a <= 4; $a++) {
  $sum = $sum + $score[$a];
}

$avg = $sum / 5;

echo ("과목 점수 : $score[0], $score[1], $score[2], $score[3], $score[4] <br>");
echo ("합계 : $sum, 평균: $avg <br>");
