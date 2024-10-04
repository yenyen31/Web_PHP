<?php

  function cal_fee($day, $age) // 일반 입장권 요금 구하기
  {
      if ($day == "주간") {
          if ($age > 12 && $age < 65) {
              $money = 26000;
          } else {
              $money = 19000;
          }
      } else {
          if ($age > 12 && $age < 65) {
              $money = 21000;
          } else {
              $money = 16000;
          }
      }
      return $money; // 세미콜론 추가
  }

  function cal_fee2($day, $age) // 자유이용권 요금 구하기
  {
      if ($day == "주간") {
          if ($age > 12 && $age < 65) {
              $money = 33000;
          } else {
              $money = 24000;
          }
      } else {
          if ($age > 12 && $age < 65) {
              $money = 28000;
          } else {
              $money = 21000;
          }
      }

      return $money;
  }

  function cal_fee3($age) // 2일 자유 이용권 요금 구하기
  {
      if ($age > 12 && $age < 65) {
          $money = 55000;
      } else {
          $money = 40000;
      }

      return $money;
  }

  function cal_fee4($age) // 콤비권 요금 구하기
  {
      if ($age > 12 && $age < 65) {
          $money = 54000;
      } else {
          $money = 40000;
      }

      return $money;
  }

  $category = 1;
  $age = 13;
  $day = "야간";

  // 올바른 함수 이름으로 수정
  if ($category == 1) {
      $fee = cal_fee($day, $age); // 함수 이름 변경
  } elseif ($category == 2) {
      $fee = cal_fee2($day, $age);
  } elseif ($category == 3) {
      $fee = cal_fee3($age);
  } else {
      $fee = cal_fee4($age);
  }

  if ($category == 1) {
      $cat = "일반 입장권";
  } elseif ($category == 2) {
      $cat = "자유이용권";
  } elseif ($category == 3) {
      $cat = "2일 자유이용권";
  } else {
      $cat = "콤비권";
  }

  echo "- 구분 : $cat<br>";

  if ($category == 1 || $category == 2) {
      echo "- 주야간 : $day<br>";
  }

  echo "- 나이 : $age 세<br>";
  echo "- 입장료 : $fee 원";
?>