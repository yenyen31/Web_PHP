// 1. MEMBER테이블의 전체 데이터를 조회합니다.

SELECT *
  FROM MEMBER;

 

// 2. id, name, age 컬럼만 선택하여 조회합니다

SELECT ID,
       NAME,
       AGE
  FROM MEMBER;

 

// 3. 나이가 30세 이상인 회원만 조회합니다.

SELECT *
  FROM MEMBER
 WHERE AGE > 30;

 

// 4.name이 **'김영숙'**인 회원만 조회합니다.

SELECT *
  FROM MEMBER
 WHERE NAME = '김영숙';

 

// 5.나이가 25세에서 35세 사이의 회원만 조회합니다.

SELECT *
  FROM MEMBER
 WHERE AGE BETWEEN 25 AND 35;

 

// 6. 이름이 '김'으로 시작하는 회원을 조회합니다.

SELECT *
  FROM MEMBER
 WHERE NAME LIKE '김%';

 

// 7. 성별이 남성이면서, 이름이 '김'으로 시작하지 않는 회원을 조회합니다

SELECT *
  FROM MEMBER
 WHERE GENDER = 'M'
   AND NAME NOT LIKE '김%';

 

//8.나이를 기준으로 내림차순 정렬하여 조회합니다.

SELECT *
  FROM MEMBER
 ORDER BY AGE DESC;

 

// 9. 전체 회원 수를 조회합니다.

SELECT COUNT(*) AS 회원수
  FROM MEMBER;

 

// 10. 성별별 인원 수를 조회합니다

SELECT GENDER,
       COUNT(*) AS 인원수
  FROM MEMBER
 GROUP BY GENDER;

 

// 11. 성별별 인원 수가 5명 이상인 경우만 조회합니다. (없음)

SELECT GENDER,
       COUNT(*) AS 인원수
  FROM MEMBER
 GROUP BY GENDER
HAVING COUNT(*) > 5;

 

// 12.전체 회원의 평균 나이를 조회합니다.

SELECT AVG(AGE) AS 평균나이
  FROM MEMBER;

 

// 13. 회원 중 최고 나이와 최저 나이를 조회합니다.

SELECT MAX(AGE) AS 최고나이,
       MIN(AGE) AS 최저나이
  FROM MEMBER;

 

// 14. 성별별 평균 나이를 조회합니다

SELECT GENDER,
       AVG(AGE) AS 평균나이
  FROM MEMBER
 GROUP BY GENDER;

 

// 15. 회원 중 가장 나이가 많은 회원의 정보를 조회합니다.

SELECT *
  FROM MEMBER
 WHERE AGE = (
   SELECT MAX(AGE)
     FROM MEMBER
);

 

// 16. 나이에 따라 나이대를 분류하여 조회합니다.

SELECT NAME,
       AGE,
       CASE
          WHEN AGE < 20              THEN
             '청소년'
          WHEN AGE BETWEEN 20 AND 39 THEN
             '청년'
          WHEN AGE BETWEEN 40 AND 59 THEN
             '중장년'
          ELSE
             '노년'
       END AS 나이대
  FROM MEMBER;

 

// 17. 중복 없이 고유한 address 값을 조회합니다.

SELECT DISTINCT ADDRESS
  FROM MEMBER;

 

// 18. 우편번호가 '100'으로 시작하는 회원을 조회합니다.

SELECT *
  FROM MEMBER
 WHERE POST_NUM LIKE '100%';

 

// 19.나이를 기준으로 내림차순 정렬하여 상위 5명을 조회합니다.

// mysql
// SELECT * FROM MEMBER ORDER BY age DESC LIMIT 5;

// oracle
/* SELECT * FROM (
    SELECT * FROM MEMBER ORDER BY AGE DESC
) WHERE ROWNUM <= 5;
*/


// 20.나이를 기준으로 내림차순 정렬하여 6번째부터10번째까지의 회원을 조회합니다

// SELECT * FROM MEMBER ORDER BY age DESC LIMIT 5 OFFSET 5;