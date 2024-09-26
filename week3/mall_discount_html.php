<form method="POST" action="">
    <label for="price"> 상품 가격 (원):</label>
    <input type="number" id="price" name="price" required><br><br>

    <label for="membership"> 회원 등급:</label>
    <select id="membership" name="membership" required>
      <option value="일반">일반</option>
      <option value="실버">실버</option>
      <option value="골드">골드</option>
    </select><br><br>

    <label for="coupon">쿠폰 사용 여부:</label>
    <input type="checkbox" id="coupon" name="coupon" value="1"><br><br>

    <input type="submit" value="계산하기">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  // 폼에서 입력된 데이터 받기
  $price = $_POST['price'];
  $membership = $_POST['membership'];
  $coupon = isset($_POST['coupon']) ? true : false; // isset 함수는 변수가 선언되어 있고, null이 아닌 경우에만 true 리턴함

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
  if ($price >= 200000){
    $discount_rate += 0.05; // 20만원 이상 구매 시 5% 추가 할인
  } elseif ($price >= 100000) {
    $discount_rate += 0.03; // 10만원 이상 구매 시 3% 추가 할인
  }

  // 쿠폰 사용 시 추가 할인 적용
  if ($coupon){
    $discount_rate += 0.05; // 쿠폰 사용 시 5% 추가 할인
  }

  // 최종 결제 금액 계산
  $discount_amount = $price * $discount_rate;
  $final_price = $price - $discount_amount;

  // 10만원 이상 구매 시 포인트 적립 (if문 사용)
  $points = ($final_price >= 100000) ? $final_price * 0.02 : 0;

  // 결과 출력
  echo "원래 가격: " . number_format($price) . "원<br>";
  echo "적용된 할인율: " . number_format($discount_rate * 100) . "%<br>";
  echo "할인 금액: " . number_format($discount_amount) . "원<br>";
  echo "최종 결제 금액: " . number_format($final_price) . "원<br>";
  echo "적립 포인트: " . number_format($points) . "점<br>";

}

?>
