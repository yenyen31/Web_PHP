// member 테이블에서 실습 진행


// 1. 전체 회원의 평균 나이, 최대 나이, 최소 나이를 구하시오
SELECT AVG(AGE) AS 평균나이,
       MAX(AGE) AS 최고나이,
       MIN(AGE) AS 최저나이
  FROM MEMBER;


// 남자 여자 별 평균 나이 조회
SELECT GENDER,
       AVG(AGE) AS AVERAGE_AGE
  FROM MEMBER
 GROUP BY GENDER;

// 우편번호가 100으로 시작하는 사람
SELECT *
FROM MEMBER
WHERE POST_NUM LIKE '100%';

// 20대는 청년, 20대 이하는 청소년 표시해서 나눠보기 (나이대 분류)
SELECT name, age,
CASE WHEN age < 20 then '청소년'
WHEN age 

// 2. memtable 만들기