// 1. member테이블의 전체 데이터를 조회합니다.

SELECT * FROM member;

 

// 2. id, name, age 컬럼만 선택하여 조회합니다

SELECT id, name, age FROM member;

 

// 3. 나이가 30세 이상인 회원만 조회합니다.

SELECT * FROM member WHERE age > 30;

 

// 4.name이 **'김영숙'**인 회원만 조회합니다.

SELECT * FROM member WHERE name = '김영숙';

 

// 5.나이가 25세에서 35세 사이의 회원만 조회합니다.

SELECT * FROM member WHERE age BETWEEN 25 AND 35;

 

// 6. 이름이 '김'으로 시작하는 회원을 조회합니다.

SELECT * FROM member WHERE name LIKE '김%';

 

// 7. 성별이 남성이면서, 이름이 '김'으로 시작하지 않는 회원을 조회합니다

SELECT * FROM member WHERE gender = 'M' AND name NOT LIKE '김%';

 

//8.나이를 기준으로 내림차순 정렬하여 조회합니다.

SELECT * FROM member ORDER BY age DESC;

 

// 9. 전체 회원 수를 조회합니다.

SELECT COUNT(*) AS 회원수 FROM member;

 

// 10. 성별별 인원 수를 조회합니다

SELECT gender, COUNT(*) AS 인원수 FROM member GROUP BY gender;

 

// 11. 성별별 인원 수가 5명 이상인 경우만 조회합니다. (없음)

SELECT gender, COUNT(*) AS 인원수 FROM member GROUP BY gender HAVING COUNT(*) > 5;

 

// 12.전체 회원의 평균 나이를 조회합니다.

SELECT AVG(age) AS 평균나이 FROM member;

 

// 13. 회원 중 최고 나이와 최저 나이를 조회합니다.

SELECT MAX(age) AS 최고나이, MIN(age) AS 최저나이 FROM member;

 

// 14. 성별별 평균 나이를 조회합니다

SELECT gender, AVG(age) AS 평균나이 FROM member GROUP BY gender;

 

// 15. 회원 중 가장 나이가 많은 회원의 정보를 조회합니다.

SELECT * FROM member WHERE age = (SELECT MAX(age) FROM member);

 

// 16. 나이에 따라 나이대를 분류하여 조회합니다.

SELECT name, age,

       CASE

           WHEN age < 20 THEN '청소년'

           WHEN age BETWEEN 20 AND 39 THEN '청년'

           WHEN age BETWEEN 40 AND 59 THEN '중장년'

           ELSE '노년'

       END AS 나이대

FROM member;

 

// 17. 중복 없이 고유한 address 값을 조회합니다.

SELECT DISTINCT address FROM member;

 

// 18. 우편번호가 '100'으로 시작하는 회원을 조회합니다.

SELECT * FROM member WHERE post_num LIKE '100%';

 

// 19.나이를 기준으로 내림차순 정렬하여 상위 5명을 조회합니다.

SELECT * FROM member ORDER BY age DESC LIMIT 5;

 

// 20.나이를 기준으로 내림차순 정렬하여 6번째부터10번째까지의 회원을 조회합니다

SELECT * FROM member ORDER BY age DESC LIMIT 5 OFFSET 5;