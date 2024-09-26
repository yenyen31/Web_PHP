<?php
    // 교통비 계산
    /*
    - 입력
        - 주말
        - 택시
    - if문: 주말, 평일 판단
    - 주말 요금은 10% 추가
    - switch문: 이동수단에 따른 비용
        - A: 버스 1200원
        - B: 지하철 1250원
        - C: 택시 8000원
        - 기타: 잘못된 이동수단입니다.
    */ 

    // 사용자 입력
    $day_type = "주말"; // 주말 또는 평일
    $transport = "택시"; // 버스, 지하철, 택시 중 선택

    // 주말인지 평일인지에 따라 요금 추가 여부 결정 (if문 사용)
    if($day_type == "주말"){
        $extra_fee = 1.1; // 주말에 10% 추가
    }
    else{
        extra_fee = 1.0; // 평일은 추가 요금 없음
    }

    // 이동 수단에 따른 기본 요금 (switch문 사용)
    switch ($transport) {
        case "버스":        
            $base_fare = 1200;
            break;
        case "지하철":
            $base_fare = 1250;
            break;
        case "택시":
            $base_fare = 8000;
            break;
        
        default:
            echo "잘못된 이동 수단입니다.";
            exit;
    }

    // 최종 요금 계산
    $total_fare = $base_fare * $extra_fee;
    echo "이동 수단: {$transport}, 최종 요금: {$total_fare}원입니다.";

?>