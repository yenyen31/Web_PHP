<?php
// month1.php 코드 활용
// - 입력: 1~12중 변수에 입력
/* - 입력: 1~12중 변수에 입력
    - 3~5월: 봄, 꽃구경
    - 6~8월: 여름, 해수욕
    - 9~11월: 가을, 단풍 구경
    - 12~1월: 겨울, 스키 타기
    - 출력: 12월은 겨울입니다. 추천하는 활동: 스키 타기. */
// - 출력: 12월은 겨울입니다. 추천하는 활동: 스키 타기


// 입력 데이터
$month = 12; // 12월

// 유효한 월인지 검사
if ($month < 1 || $month > 12) {
  echo "잘못된 입력입니다. 1월부터 12월까지의 숫자를 입력해 주세요.";
} else {
  // 계절과 활동 추천
  if ($month >= 3 && $month <= 5) {
    $season = '봄';
    $activity = '꽃 구경';
  } elseif ($month >= 6 && $month <= 8) {
    $season = '여름';
    $activity = '해수욕';
  } elseif ($month >= 9 && $month <= 11) {
    $season = '가을';
    $activity = '단풍 구경';
  } elseif ($month >= 12 || $month == 1 || $month == 2) {
    $season = '겨울';
    $activity = '스키 타기';
  }

  // 출력
  echo $month . "월은 " . $season . "입니다. 추천하는 활동: " . $activity . ".";
}
