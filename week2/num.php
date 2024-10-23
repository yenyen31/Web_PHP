<?php
# 숫자 출력, 줄바꿈
echo 1 . "<br>";
echo 2 + 2 . "\n";
echo 2 * 2 . "\n";
echo 2 / 2 . "\n";
echo 2 - 2 . "\n";

# var_dump() : 변수형을 알려주는 함수
var_dump(6);   // int
var_dump(6.5); // float

var_dump(7777);  // 숫자
var_dump('7777'); // 문자열
var_dump("7777"); // 문자열

# "" vs ''
# "" : 변수, 특수문자 해석해 출력, 문자열 안에 변수가 있으면 그 변수의 값을 읽어서 문자열에 삽입
# '' : 문자열 그대로 출력
$name = "John";
echo "Hello, " . $name . "!" . "<br>"; // Hello, John!
echo "Hello, $name!";                  // Hello, John!
echo 'Hello, $name!';                  // Hello, $name!