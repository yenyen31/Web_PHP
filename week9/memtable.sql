CREATE TABLE memtable (
    id CHAR(20) NOT NULL PRIMARY KEY,    -- 회원 아이디
    name CHAR(10) NOT NULL,              -- 회원 이름
    gender CHAR(1) NOT NULL,             -- 성별 ('M' 또는 'W')
    post_num CHAR(10),                   -- 우편번호
    address VARCHAR(100),                -- 주소
    tel CHAR(15),                        -- 전화번호
    age INT                              -- 나이
);

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
('hjpark', '박희진', 'W', '100-021', '서울시 중구 회현동', '254-8473', 26);