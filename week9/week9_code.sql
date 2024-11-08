// ** 테이블 생성하기
// friend 테이블 생성
// friend.sql 가져오기

CREATE TABLE FRIEND (
   NUM     INT NOT NULL,
   AUTO_INCREMENT,
   NAME    CHAR(20) NOT NULL,
   TEL     CHAR(20) NOT NULL,
   ADDRESS CHAR(80),
   PRIMARY KEY ( NUM )
);

// ** 테이블에 데이터 삽입하기
// member 테이블에 데이터 삽입

INSERT INTO FRIEND (
   NAME,
   TEL,
   ADDRESS
) VALUES ( '송예지',
           '010-123-4567',
           '경기도 용인시 수지구 정평로 30' );
INSERT INTO FRIEND (
   NAME,
   TEL,
   ADDRESS
) VALUES ( '김수정',
           '031-333-4444',
           '양평군 지평명 목방길 123번지' );


// 삽입한 레코드가 friend 테이블에 잘 저장되었는지 확인
SELECT *
  FROM FRIEND;

// 회원 정보를 관리하기 위한 DB 테이블 member 만들기
CREATE TABLE MEMBER (
   NUM      INT NOT NULL,
   AUTO_INCREMENT,
   ID       CHAR(20) NOT NULL,
   NAME     CHAR(20) NOT NULL,
   GENDER   CHAR(1),
   POST_NUM CHAR(8),
   ADDRESS  CHAR(80),
   TEL      CHAR(20),
   AGE      INT,
   PRIMARY KEY ( NUM )
);

// 테이블에 데이터 가져오기
// member.sql 가져오기
/*
INSERT INTO memtable (id, name, gender, post_num, address, tel, age) VALUES 
('yjhwang', '황영주', 'M', '100-011', '서울시 중구 충무로1가', '234-8879', 35),
('khshul', '설기형', 'M', '607-010', '부산시 동래구 명륜동', '764-3784', 33),
('chpark', '박철호', 'M', '503-200', '광주시 남구 지석동', '298-9730', 34),
('shlee', '이상훈', 'M', '503-201', '광주시 남구 도금동', '838-4347', 32),
('jyjang', '장영숙', 'W', '606-065', '부산시 영도구 봉래동5가', '399-9809', 24),
('yjbae', '배용진', 'M', '122-014', '서울시 은평구 응암4동', '857-5683', 30),
('hbpark', '박혜빈', 'W', '427-760', '경기도 과천시 중앙동', '234-7677', 22),
('mskim', '김문수', 'M', '429-020', '경기도 시흥시 신천동', '370-6003', 63),
('bkcha', '차범길', 'M', '302-121', '대전시 서구 둔산1동', '432-9877', 49),
('kskim', '김길수', 'M', '440-747', '경기도 수원시 장안구 파장동', '324-5875', 54),
('srkim', '김수련', 'M', '704-701', '대구시 달서구 신당동', '987-3688', 23),
('shlee2', '이성현', 'M', '441-081', '경기도 수원시 권선구 매산로1가', '243-6844', 36),
('hnjang', '정한나', 'W', '502-763', '광주시 서구 화정4동', '845-4547', 58),
('mylee', '이명연', 'W', '502-791', '광주시 서구 쌍촌동', '837-9432', 33),
('yskim', '김영숙', 'W', '429-010', '경기도 시흥시 대야동', '374-8438', 53),
('jekim', '김정은', 'W', '503-202', '광주시 남구 원산동', '347-8873', 29),
('yjko', '고영주', 'W', '122-020', '서울시 은평구 녹번동', '479-3874', 32),
('cyahn', '안철영', 'M', '122-030', '서울시 은평구 대조동', '347-4687', 34),
('jmkim', '김진모', 'M', '530-140', '전라남도 목포시 항동', '379-8349', 28),
('ycshul', '설영찬', 'M', '606-070', '부산시 영도구 청학동', '983-8748', 41),
('jjko', '고재진', 'M', '100-013', '서울시 중구 충무로3가', '836-4655', 28),
('hwlee', '이현우', 'M', '606-071', '부산시 영도구 청학1동', '346-8892', 32),
('cskang', '강찬숙', 'W', '668-890', '경상남도 남해군 설천면', '377-6879', 21),
('ypji', '지영필', 'M', '122-040', '서울시 은평구 불광동', '366-3747', 52),
('jbkim', '김진배', 'M', '427-600', '경기도 과천시 과천동', '382-4993', 47),
('jepark', '박지은', 'W', '670-800', '경상남도 거창군 거창읍', '328-8743', 26),
('jhlee', '이지현', 'W', '704-702', '대구시 달서구 월성동', '386-7988', 27),
('bykang', '강부영', 'M', '302-120', '대전시 서구 둔산동', '798-3243', 62),
('jymoon', '문진영', 'W', '302-122', '대전시 서구 둔산2동', '987-3248', 18),
('jyjun', '전지연', 'W', '100-012', '서울시 중구 충무로2가', '347-2236', 28),
('jkko', '고진길', 'M', '122-013', '서울시 은평구 응암3동', '234-7466', 27),
('myjung', '정명윤', 'M', '502-771', '광주시 서구 치평동', '374-8786', 47),
('jsyou', '유지수', 'W', '502-772', '광주시 서구 치평동', '309-3897', 49),
('dsshin', '신달성', 'W', '530-145', '전라남도 신안군 장산면', '399-8789', 53),
('sjshin', '신수진', 'W', '606-796', '부산시 영도구 봉래동5가', '389-8930', 47),
('ckyang', '양창길', 'M', '100-015', '서울시 중구 필동1가', '382-6743', 35),
('mhshin', '신미희', 'W', '530-145', '전라남도 신안군 흑산면', '987-2748', 25),
('yhpark', '박영희', 'W', '503-290', '광주시 북구 운암동', '239-7654', 43),
('ysyun', '윤석용', 'M', '440-747', '경기도 수원시 장안구 정자동', '284-8397', 45),
('jsmoon', '문재성', 'M', '130-010', '서울시 도봉구 창동', '248-7865', 38),
('jjbaek', '백지영', 'W', '503-122', '광주시 북구 용봉동', '756-8879', 37),
('smhong', '홍석민', 'M', '530-150', '전라남도 목포시 대양동', '290-8438', 46),
('bkleem', '이복길', 'W', '530-145', '전라남도 신안군 장산면', '399-8789', 53),
('jsshin', '신지선', 'W', '607-810', '부산시 사하구 하단동', '389-8930', 47),
('kjhwang', '황기준', 'M', '530-110', '전라남도 목포시 상동', '382-2437', 33),
('kycha', '차광열', 'M', '122-050', '서울시 은평구 불광2동', '248-8374', 55),
('shlee3', '이상화', 'M', '503-210', '광주시 남구 서창동', '347-4783', 29),
('hjpark', '박희진', 'W', '100-021', '서울시 중구 회현동', '254-8473', 26); */


// 데이터 잘 입력 되었는지 확인
desc member;
SELECT *
  FROM MEMBER; // member 테이블의 전체 필드와 데이터를 검색하는 명령

/*
* 데이터 검색과 관리
*/

// member 테이블에 저장된 전체 레코드에서 name, tel, address 필드에 해당하는 데이터만 보여주는 쿼리
SELECT NAME,
       TEL,
       ADDRESS
  FROM MEMBER;

// DB 테이블에서 where 다음의 ‘조건식’을 만족하는 여성회원의 아이디, 이름, 주소, 성별 검색하기
SELECT ID,
       NAME,
       ADDRESS,
       GENDER
  FROM MEMBER
 WHERE GENDER = "W";

// 50세 이상인 남성 회원의 이름, 전화번호, 성별, 나이 검색하기
SELECT NAME,
       TEL,
       AGE
  FROM MEMBER
 WHERE AGE >= 50
   AND GENDER = 'M';

// 20대 회원의 이름, 성별, 주소, 나이 검색하기
SELECT NAME,
       GENDER,
       ADDRESS,
       AGE
  FROM MEMBER
 WHERE AGE >= 20
   AND AGE <= 29;

// 30대 또는 50대 남성 회원의 이름, 전화번호, 나이, 성별 검색하기
SELECT NAME,
       TEL,
       AGE,
       GENDER
  FROM MEMBER
 WHERE ( ( AGE >= 30
   AND AGE <= 39 )
    OR ( AGE >= 50
   AND AGE <= 59 ) )
   AND GENDER = 'M';

// 이름이 안철영인 회원의 일련번호, 이름, 전화번호, 주소, 우편번호, 나이, 성별 검색하기
SELECT NUM,
       NAME,
       TEL,
       ADDRESS,
       POST_NUM,
       AGE,
       GENDER
  FROM MEMBER
 WHERE NAME = '안철명';

/*
* 특정 문자열이 포함된 레코드 검색
*/

// 성이 박씨인 회원의 이름, 전화번호, 검색하기
SELECT NAME,
       TEL
  FROM MEMBER
 WHERE NAME LIKE '박%';


// 서울에 거주하는 회원의 일련번호, 이름, 주소, 성별 검색하기
SELECT NUM,
       NAME,
       ADDRESS,
       GENDER
  FROM MEMBER
 WHERE ADDRESS LIKE '서울%';

// 은평구에 거주하는 회원의 모든 정보 검색하기
SELECT *
  FROM MEMBER
 WHERE ADDRESS LIKE '%은평구%';

 // 성이 김씨고 광주에 거주하는 회원의 모든 정보 검색하기
SELECT *
  FROM MEMBER
 WHERE ADDRESS LIKE '%광주%'
   AND NAME LIKE '김%';

/*
* 데이터 검색과 관리 - 레코드 관련
*/

// 레코드 검색
// 서울에 사는 회원을 나이순으로 오름차순 정렬한 뒤 이름, 나이, 주소, 전화번호, 성별 검색하기
SELECT NAME,
       AGE,
       ADDRESS,
       TEL
  FROM MEMBER
 WHERE ADDRES LIKE '부산%'
 ORDER BY AGE DESC;


// 레코드 수정
// 이름이 '고재진'인 레코드의 전화번호를 123-4567로 변경한 뒤 데이터 확인하기
UPDATE MEMBER
   SET
   TEL = '123-4567'
 WHERE NAME = '고재진';
SELECT NAME,
       TEL
  FROM MEMBER
 WHERE NAME = '고재진';

// 이름이 정한나인 회원의 나이를 확인하고 값을 37로 변경
SELECT NAME,
       AGE
  FROM MEMBER
 WHERE NAME = '정한나';
UPDATE MEMBER
   SET
   AGE = 37
 WHERE NAME = '정한나';
SELECT NAME,
       AGE
  FROM MAMBER
 WHERE NAME = '정한나';

// 레코드 삭제
// '김수련' 삭제
DELETE FROM MEMBER
 WHERE NAME = '김수련';

// 이름이 '김'으로 시작하는 사용자 삭제
SELECT *
  FROM MEMBER
 WHERE NAME LIKE '김%';

 // 40대 회원의 레코드를 삭제 한뒤, 35 ~ 53세 회원의 이름, 나이, 성별을 나이순으로 출력 하기
DELETE FROM MEMBER
 WHERE AGE >= 40
   AND AGE <= 49;
SELECT NAME,
       AGE,
       GENDER
  FROM MEMBER
 WHERE AGE >= 35
   AND AGE <= 53
 ORDER BY AGE;

 // member 테이블 삭제
DELETE FROM MEMBER;