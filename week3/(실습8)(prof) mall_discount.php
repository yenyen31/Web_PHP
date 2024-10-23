<!-- HTML -->
<form method="POST" action="">
    <label for="price">상품 가격 (원):</label>
    <input type="number" id="price" name="price" value="0" required><br><br> <!-- 상품 가격 입력, 기본값을 0으로 설정 -->

    <label for="membership">회원 등급:</label>
    <select id="membership" name="membership" value="일반" required> <!-- 회원 등급 선택 -->
        <option value="일반">일반</option>
        <option value="실버">실버</option>
        <option value="골드">골드</option>
    </select><br><br>

    <label for="coupon">쿠폰 사용 여부:</label> <!-- 쿠폰 사용 여부 선택, 체크박스 사용 -->
    <input type="checkbox" id="coupon" name="coupon" value="1"><br><br> <!-- 폼 제출 전송 버튼 -->

    <input type="submit" value="계산하기">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // 폼이 제출되었는지 확인하는 조건문. 폼이 POST 방식으로 제출되면 내부의 코드가 실행됨
    // 폼에서 입력된 데이터 받기
    $price = $_POST['price']; // 사용자가 입력한 상품 가격을 $_POST 배열에서 가져와 변수 $price에 저장
    $membership = $_POST['membership']; // 사용자가 선택한 회원 등급을 $_POST 배열에서 가져와 변수 $membership에 저장
    // 쿠폰 사용 여부는 체크박스이므로, isset() 함수로 확인
    // 체크박스가 체크되었을 때만 값이 $_POST에 전달 (체크 x -> false 반환)
    $coupon = isset($_POST['coupon']) ? true : false;  #isset() : 변수가 선언되어 있고, null이 아닌 경우에만 true를 반환

    // 등급에 따른 기본 할인율 (switch문 사용)
    switch ($membership) {
        case "일반":
            $discount_rate = 0.02; // 2% 할인
            break;
        case "실버":
            $discount_rate = 0.05; // 5% 할인
            break;
        case "골드":
            $discount_rate = 0.1;  // 10% 할인
            break;
        default:
            $discount_rate = 0;
    }

    // 상품 가격에 따라 추가 할인 적용 (if문 사용)
    if ($price >= 200000) {
        $discount_rate += 0.05; // 20만 원 이상일 경우 5% 추가 할인
    } elseif ($price >= 100000) {
        $discount_rate += 0.03; // 10만 원 이상일 경우 3% 추가 할인
    }

    // 쿠폰 사용 시 추가 할인 적용
    if ($coupon) {
        $discount_rate += 0.05; // 쿠폰 사용 시 5% 추가 할인
    }

    // 최종 가격 계산
    $discount_amount = $price * $discount_rate; // 할인 금액 계산
    $final_price = $price - $discount_amount;   // 최종 결제 금액 계산

    // 10만 원 이상 구매 시 포인트 적립
    $points = ($final_price >= 100000) ? $final_price * 0.02 : 0;

    // 결과 출력
    // number_format(): 큰 숫자를 천 단위로 쉼표(또는 다른 구분 기호)를 삽입하여 가독성을 높여줌
    echo "원래 가격: " . number_format($price) . "원<br>";
    echo "적용된 할인율: " . ($discount_rate * 100) . "%<br>";
    echo "할인 금액: " . number_format($discount_amount) . "원<br>";
    echo "최종 결제 금액: " . number_format($final_price) . "원<br>";
    echo "적립 포인트: " . number_format($points) . "점<br>";
}
?>