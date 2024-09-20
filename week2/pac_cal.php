<?php
    // 계산 결과 값 변수
    $result = 1;
    
    for($i = 1; $i <= 10; $i++) {

        $result *= $i;
        
        echo "{$i}! = {$result}<br/>";
        
    }

?>