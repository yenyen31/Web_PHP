CREATE TABLE MEMBERS (
   NUM        INT NOT NULL,
   ID         CHAR(15) NOT NULL,
   PASS       CHAR(15) NOT NULL,
   NAME       CHAR(10) NOT NULL,
   EMAIL      CHAR(80),
   REGIST_DAY CHAR(20),
   LEVEL      INT,
   POINT      INT,
   PRIMARY KEY ( NUM )
);