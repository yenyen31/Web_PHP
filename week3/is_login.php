<?php
		// 회원 레벨이 1~7까지는 로그인 가능, 그 외는 로그인 불가능
    $level = 7;
    echo "회원레벨 : $level<br>";

    if ($level >= 1 and $level <= 7)
        echo "로그인 가능합니다!";
    else
        echo "로그인이 가능하지 않습니다!";

?>