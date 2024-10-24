<?php
/*
    학점계산 코드
    - if문: A, B, C, D, F
    - switch문  
    - A학점: 훌룡합니다.
    - B학점: 잘 했어요.
    - C학점: 노력 필요.
    - D학점: 더 열심히 하세요.
    - F학점: 재수강 필요합니다.
    - 기타: 잘못된 성적입니다.
    */

// 사용자 입력 (0~100까지의 점수)
$score = 83; // 83으로 세팅

// 성적 범위에 따른 학점 결정 (if문 사용)
if ($score >= 90)
    $grade = "A";
elseif ($score >= 80)
    $grade = "B";
elseif ($score >= 70)
    $grade = "C";
elseif ($score >= 60)
    $grade = "D";
else
    $grade = "F";

echo "학점: $grade <br>";


// 학점에 따른 평가 (switch문 사용)
switch ($grade) {
    case 'A':
        echo "훌륭합니다.";
        break;

    case 'B':
        echo "잘 했어요.";
        break;

    case 'C':
        echo "노력 필요.";
        break;

    case 'D':
        echo "더 열심히 하세요.";
        break;

    case 'F':
        echo "재수강 필요 합니다.";
        break;

    default:
        echo "잘못된 성적 입니다.";
        break;
}
