<?php
  echo "시간당 급여<br>";
  echo "-주간 근무 : 9500원<br>";
  echo "-야간 근무 : 주간 시급 * 1.5 <br>";
  echo "-주말 근무 : 주간 시급 * 2 (주간/야간 모두 적용) <br>";
  echo "-주말 근무 : 야간 시급 * 1.5 * 2 <br><br>";

  $hour_rate = 9500;

  // 입력 데이터
  $day_hours = 5; // 주간 근무 시간
  $night_hours = 3; // 야간 근무 시간
  $is_weekend = true; // 주말 근무 여부 (true: 주말, false: 평일 )

  // 급여 계산
  if ($is_weekend) {
    $day_pay = $day_hours * $hour_rate * 2; // 주말 주간 근무
    $night_pay = $night_hours * $hour_rate * 1.5 * 2; // 주말 야간 근무
  }
  else {
    $day_pay = $day_hours * $hour_rate; // 평일 주간 근무
    $night_pay = $night_hours * $hour_rate * 1.5; // 평일 야간 근무
  }

  $total_pay = $day_pay + $night_pay;
  // echo $day_pay . "<br>";
  // echo $night_pay . "<br>";

  echo "주간 근무: $day_hours 시간 <br>";
  echo "야간 근무: $night_hours 시간 <br>";
  echo "주말 여부: " . ($is_weekend ? "주말" : "평일") . "<br>";
  echo "<br>";
  echo "총 급여는 $total_pay 원 입니다.";

?>