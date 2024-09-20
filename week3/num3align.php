<?php
  $a = 2;
  $b = 6;
  $c = 9;

  if($a > $b)       // $a가 $b 보다 큰 경우
  {
    if($a > $c)    // $a가 $c 보다 큰 지를 비교하여 크면
    {
       $max1 = $a; // 가장 큰수 $max1은 $a
      if($b > $c)  // 그 다음 큰 수를 찾기 위해 $b와 $c 비교
      {
        $max2 = $b // 두번째 큰 수 $max2는 $b
        $max3 = $c; // 세번째는 $max3은 $c
      }
      else{
        $max2 = $c;
        $max3 = &b;
      }
    }
    else{           // $a가 $b보다 큰 상태에서 $c가 $a보다 큰 경우
      $max1 = $c;   // $c가 가장 크고
      $max2 = $a;   // $a가 그 다음
      $max3 = $b;   // $b가 마지막
    }
  }
  else             // $b가 $a보다 큰 경우
  { 
    if($a > $c)    // $a와 $c를 비교할 필요있음
    {
      $max1 = $b;   // $c가 가장 크고
      $max2 = $a;   // $a가 그 다음
      $max3 = $c;   // $b가 마지막
    }
    else{           // $c가 $a보다 큰 경우
      if($b > $c)   // $b와 $c중에 가장 큰 수 찾음
      {
        $max1 = $b;   // $b 가장 큰 수
        $max2 = $c;   // $c가 그 다음
        $max3 = $a;   // $a 마지막
      }
      else
      {
        $max1 = $c;   
        $max2 = $a;   
        $max3 = $b;   
        // echo "디버깅 포인트 <br>";
      }
    }
  }

  echo "입력된 세 정수 : $a $b $c <br>";
  echo "입력된 정수를 큰수대로 배열 : $max1 $max2 $max3 <br>";

  ?>