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

    $is_weekend = "주말";
    $trans = "택시";
    

    if($is_weekend="주말"){

        switch ($trans) {
            case '버스': // 버스
                echo "이동수단: 버스";
                $fee = 1200 * 1.1;
                break;
            
            case '지하철': // 지하철
                echo "이동수단: 지하철";
                $fee = 1250 * 1.1;
                break;
    
            case '택시': // 택시
                echo "이동수단: 택시";
                $fee = 8000 * 1.1;
                break;
        }

        echo ", 최종 요금: $fee 원입니다.";

    }

    else{ // 평일
        switch ($trans) {
            case '버스': // 버스
                echo "이동수단: 버스";
                $fee = 1200;
                break;
            
            case '지하철': // 지하철
                echo "이동수단: 지하철";
                $fee = 1250;
                break;
    
            case '택시': // 택시
                echo "이동수단: 택시 : ";
                $fee = 8000;
                break;
        }
    }
?>