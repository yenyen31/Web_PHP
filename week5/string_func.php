<?php
// 문자열 관련 내장 함수 사용 하기 

$tel = "010-1111-2222";

echo "\$tel : $tel<br>"; # $tel : 010-1111-2222

$num_tel = strlen($tel);  // 문자열의 길이 계산 strlen()
echo "\$tel의 길이 : $num_tel<br>"; # $tel의 길이 : 13

$tel1 = substr($tel, 0, 3);  // 앞에서 세 문자를 가져옴 substr()
echo "$tel1<br>";            # 010

$tel2 = substr($tel, 4, 4);  // 네 번째 문자에서 네 개를 가져옴 substr()
echo "$tel2<br>";             # 1111

$tel3 = substr($tel, 9, 4);  // 아홉 번째 문자에서 네 개를 가져옴 substr()
echo "$tel3<br>";             # 2222

$phone = explode("-", $tel);  // 하이픈(-)을 기준으로 문자열 분리 explode()
echo "전화번호 : $phone[0] $phone[1] $phone[2]<br>"; # 전화번호 : 010 1111 2222