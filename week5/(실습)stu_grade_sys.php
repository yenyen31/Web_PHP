<?php

// 학생 성적 관리 시스템
/* 학생들의 이름과 각 과목의 성적을 저장하고, 이를 바탕으로 총점, 평균, 최고 점수 등을 계산하는 프로그램을 작성 
  (조건문, 반복문, 배열, 함수를 모두 사용하여 기능 구현

  학생 데이터 입력:
  - 학생 이름과 세 과목(수학, 영어, 과학)의 성적을 배열에 저장
  - 총 3명의 학생 정보를 저장

  함수 사용:
  - 총점 계산 함수: 특정 학생의 성적 배열을 받아 총점을 계산하는 함수 작성
  - 평균 계산 함수: 특정 학생의 총점을 받아 평균 점수를 계산하는 함수 작성

  반복문을 사용해 모든 학생의 성적 계산:
  - 반복문을 사용해 모든 학생의 총점과 평균을 계산하고 출력

  조건문을 사용해 성적 판정:
  - 학생의 평균 점수를 기준으로 합격/불합격을 판정. 평균 점수가 60점 이상이면 합격, 그렇지 않으면 불합격 출력

  추가 요구사항:
  최고 점수 학생 찾기: 각 과목별 최고 점수를 가진 학생의 이름과 점수를 출력

  연관배열 사용하기!!

  학생 배열은 다음과 같음
    $students = array(
  array("name" => "일지매", "math" => 85, "english" => 78, "science" => 90),
  array("name" => "홍수", "math" => 62, "english" => 88, "science" => 75),
  array("name" => "수홍", "math" => 95, "english" => 82, "science" => 85)
  );

  */

// code 

// 학생 데이터 배열 초기화
// 각 학생의 이름과 세 과목(수학, 영어, 과학) 성적을 연관 배열로 저장
$students = array(
  array("name" => "일지매", "math" => 85, "english" => 78, "science" => 90),
  array("name" => "홍수", "math" => 62, "english" => 88, "science" => 75),
  array("name" => "수홍", "math" => 95, "english" => 82, "science" => 85)
);

// 총점 계산 함수
// 각 학생의 성적 배열을 받아 총점을 계산하여 반환
function calculateTotal($student)
{
  return $student["math"] + $student["english"] + $student["science"];
}

// 평균 계산 함수
// 총점을 받아 과목 수(3)로 나눈 평균을 반환
function calculateAverage($total)
{
  return $total / 3;
}

// 모든 학생의 총점, 평균, 합격/불합격 여부 계산 및 출력
foreach ($students as $student) {
  $name = $student["name"];  // 학생 이름
  $total = calculateTotal($student);  // 총점 계산
  $average = calculateAverage($total);  // 평균 계산

  echo "학생 : $name<br>";
  echo "총점 : $total<br>";
  echo "평균 : $average<br>";

  // 합격/불합격 판정
  if ($average >= 60) {
    echo "판정 : 합격<br>";
  } else {
    echo "판정 : 불합격<br>";
  }
  echo "<br>";  // 각 학생 정보 사이에 줄바꿈을 추가
}

// 과목별 최고 점수 학생 찾기
// 각 과목(math, english, science)에 대해 최고 점수를 가진 학생을 찾음
$subjects = ["math", "english", "science"];  // 과목 배열
foreach ($subjects as $subject) {
  $highest_score = 0;  // 해당 과목의 최고 점수를 저장할 변수
  $top_student = "";  // 최고 점수를 가진 학생의 이름

  // 모든 학생의 해당 과목 점수 비교
  foreach ($students as $student) {
    if ($student[$subject] > $highest_score) {  // 현재 학생의 점수가 최고 점수보다 높으면
      $highest_score = $student[$subject];  // 최고 점수 갱신
      $top_student = $student["name"];  // 최고 점수 학생 이름 갱신
    }
  }

  // 과목별 최고 점수와 학생 이름 출력
  echo "$subject 과목 최고 점수: $top_student - $highest_score 점<br>";
}
