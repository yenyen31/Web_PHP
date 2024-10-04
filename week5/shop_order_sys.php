<?php 
  // 쇼핑몰 주문 관리 시스템

  /* 미션 : 고객들의 주문 정보를 저장하고, 주문 총액, 가장 비싼 주문 찾기, 할인 적용 등의 기능을 구현하는 프로그램을 작성. 
  조건문, 반복문, 배열, 함수를 모두 사용하여 기능 구현


  주문 데이터 입력:
  - 고객의 이름과 각 제품의 이름, 수량, 가격을 저장
  - 총 3명의 고객 정보를 저장

  함수 사용:
  - 주문 총액 계산 함수: 특정 고객의 주문 배열을 받아 주문 총액을 계산하는 함수를 작성
  - 할인 적용 함수: 총액을 받아 특정 조건(예: 100달러 이상)에서 할인을 적용하는 함수를 작성

  반복문을 사용해 모든 고객의 주문 총액 계산:
  - 반복문을 사용해 모든 고객의 주문 총액과 할인이 적용된 금액을 계산하고 출력

  조건문을 사용해 할인 적용 여부 확인:
  - 주문 총액이 100달러 이상이면 10% 할인을 적용, 그렇지 않으면 할인을 적용하지 않는다

  추가 요구사항:
  가장 비싼 주문 찾기: 모든 고객의 주문 중 가장 비싼 제품을 찾아서 그 정보를 출력

  연관 배열 이용해서 코드 작성

  // 관련 데이터는 아래 배열 참고
    $orders = array(
  array("name" => "홍수", "products" => array(
  array("name" => "Laptop", "quantity" => 1, "price" => 900),
  array("name" => "Mouse", "quantity" => 2, "price" => 20)
  )),
  array("name" => "게이츠", "products" => array(
  array("name" => "Keyboard", "quantity" => 1, "price" => 50),
  array("name" => "Monitor", "quantity" => 1, "price" => 150)
  )),
  array("name" => "스티브", "products" => array(
  array("name" => "Phone", "quantity" => 1, "price" => 600),
  array("name" => "Charger", "quantity" => 1, "price" => 25)
  ))
  ); */

  // code

  // 고객 주문 데이터 배열 초기화
  $orders = array(
    array("name" => "홍수", "products" => array(
    array("name" => "Laptop", "quantity" => 1, "price" => 900),
    array("name" => "Mouse", "quantity" => 2, "price" => 20)
    )),
    array("name" => "게이츠", "products" => array(
    array("name" => "Keyboard", "quantity" => 1, "price" => 50),
    array("name" => "Monitor", "quantity" => 1, "price" => 150)
    )),
    array("name" => "스티브", "products" => array(
    array("name" => "Phone", "quantity" => 1, "price" => 600),
    array("name" => "Charger", "quantity" => 1, "price" => 25)
    ))
  );

  // 주문 총액 계산 함수
  function calculateTotal($products){
    $total = 0;
    foreach($products as $product){
      $total += $product["quantity"] * $product["price"];
    }
    return $total;
  }

  // 할인 적용 점수
  function applyDiscount($total){
    if($total >= 100){
      return $total * 0.9; // 10% 할인
    }
    return $total;
  }

  // 모든 고객의 주문 총액 및 할인 적용된 총액 계산 및 출력
foreach ($orders as $order) {
  $name = $order["name"];  // 고객의 이름 추출
  $products = $order["products"];  // 주문한 상품 목록 추출
  $total = calculateTotal($products);  // 총액 계산
  $discounted_total = applyDiscount($total);  // 할인이 적용된 총액 계산

  echo "고객: $name<br>";
  echo "주문 총액: $$total<br>";
  echo "할인 적용된 총액: $$discounted_total<br>";
  echo "<br>";
}

// 가장 비싼 제품 찾기
$most_expensive_product = null;
$highest_price = 0;

foreach ($orders as $order) {
    foreach ($order["products"] as $product) {
        if ($product["price"] > $highest_price) {
            $highest_price = $product["price"];
            $most_expensive_product = $product;
        }
    }
}

if ($most_expensive_product) {
    echo "가장 비싼 제품: " . $most_expensive_product["name"] . " - $" . $highest_price;
}

?>



