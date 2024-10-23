<?php
// 숫자로 된 월에 해당하는 계정 이름 출력 프로그램

$month = 12; // 12월

if ($month >= 3 && $month <= 5) { # Q : &&
    $season = "봄";
    echo "{$month}월은 {$season}입니다.";
} elseif ($month >= 6 && $month <= 8) { # Q : else if
    $season = "여름";
    echo "{$month}월은 {$season}입니다.";
} elseif ($month >= 9 && $month <= 11) { # Q : else if
    $season = "가을";
    echo "{$month}월은 {$season}입니다.";
} elseif ($month == 12 || $month == 1 || $month == 2) { # Q : ||
    $season = "겨을";
    echo "{$month}월은 {$season}입니다.";
} else {
    echo "잘못 입력되었습니다!";
}
