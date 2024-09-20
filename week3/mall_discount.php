<?php
  // 쇼핑몰 할인 계산
  /*
    - 입력
        - 회원 등급 입력: gold
        - 구매금액: 150000
        - 쿠폰 사용 여부: true
    - switch문: 회원 등급
        - A: 일반: 2%할인
        - B: 일반: 2%할인
        - C: 일반: 2%할인
        - 기타: 잘못된 회원 등급입니다.
    - if문: 총 금액에 따른 할인
        - 20만원 이상: 5% 추가 할인
        - 10만원 이상: 3% 추가 할인
    - if 쿠폰 사용시 추가 5% 할인
    - if 10만원 이상 구매시 추가 2% 적립
  */

  // 사용자 입력
  $membership = "골드"; // 회원 등급: 일반, 실버, 골드
  $total_amount = 150000 // 총 구매 금액
  $coupon = true; // 쿠폰 사용 여부 (true: 사용, false: 미사용)

  // 듭급에 따른 기본 할인율 (switch문 사용)
  switch ($membership) {
    case '일반':
      $discount_rate = 0.02; // 2% 할인
      break;
    case '실버':
      $discount_rate = 0.05; // 5% 할인
      break;
    case '골드':
      $discount_rate = 0.1; // 10% 할인
      break;
    default:
      echo "잘못된 회원 등급입니다.";
      exit;
  }


  // 총 구매 금액에 따른 추가 할인 적용 (if문 사용)
  if ($total_amount >= 200000){
    $discount_rate += 0.05; // 20만원 이상 구매 시 5% 추가 할인
  } elseif ($total_amount >= 100000) {
    $discount_rate += 0.03; // 10만원 이상 구매 시 3% 추가 할인
  }

  // 쿠폰 사용 시 추가 할인 적용
  if ($coupon){
    $discount_rate += 0.05; // 쿠폰 사용 시 5% 추가 할인
  }

  // 최종 결제 금액 계산
  $discount_amount = $total_amount * $discount_rate;
  $final_amount = $total_amount - $discount_amount;

  // 10만원 이상 구매 시 포인트 적립 (if문 사용)
  if ($final_amount >= 100000){
    $points = $final_amount * 0.02; // 2% 적립
  } else {
    $points = 0; // 포인트 적립 없음
  }

  // 결과 출력
  echo "회원 등급: {$membership}<br>";
  echo "총 구매 금액: {$total_amount}원<br>";
  echo "적용된 할인율: " . ($discount_rate * 100) . "%<br>";
  echo "할인 금액: {$discount_amount}원 <br>";
  echo "최종 결제 금액: {$final_amount}원<br>";
  echo "적립 포인트: {$points}점<br>";

  ?>