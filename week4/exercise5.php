<?php
// 반복문 (for 문)
// for문 1부터 50까지의 수 중 3의 배수 출력

for ($i = 1; $i <= 50; $i++) {
  if ($i % 3 == 0) { // 3의 배수이면
    echo $i . " "; // 출력
  }
}
