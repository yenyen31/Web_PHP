CREATE TABLE BOARD (
   NUM         INT NOT NULL,
   ID          CHAR(15) NOT NULL,
   NAME        CHAR(10) NOT NULL,
   SUBJECT     CHAR(200) NOT NULL,
   CONTENT     TEXT NOT NULL,
   REGIST_DAY  CHAR(20) NOT NULL,
   HIT         INT NOT NULL,
   FILE_NAME   CHAR(40),
   FILE_TYPE   CHAR(40),
   FILE_COPIED CHAR(40),
   PRIMARY KEY ( NUM )
);