<?php
// (실습4) month2.php 코드 활용
// switch 문으로 변경


// 입력 데이터
$month = 12; // 12월

// 유효한 월인지 검사
if ($month < 1 || $month > 12) {
  echo "잘못된 입력입니다. 1월부터 12월까지의 숫자를 입력해 주세요.";
} else {
  // 계절과 활동 추천
  switch ($month) {
    case 3:
    case 4:
    case 5:
      $season = "봄";
      $activity = "꽃 구경";
      break;

    case 6:
    case 7:
    case 8:
      $season = "여름";
      $activity = "해수욕";
      break;
    case 9:
    case 10:
    case 11:
      $season = "가을";
      $activity = "단풍 구경";
      break;
    case 12:
    case 1:
    case 2:
      $season = "겨울";
      $activity = "스키 타기";
      break;

    default:
      # code...
      break;
  }
  // 출력
  echo $month . "월은 " . $season . "입니다. 추천하는 활동: " . $activity . ".";
}
