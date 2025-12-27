-- *********************************************
-- * SQL MySQL generation
-- *--------------------------------------------
-- * DB-MAIN version: 11.0.2
-- * Generator date: Sep 14 2021
-- * Generation date: Sat Dec 27 13:58:11 2025
-- * LUN file:
-- * Schema: Schema1/1
-- *********************************************


-- Database Section
-- ________________
--
create schema if not exists `volume` default character set utf8;
use `volume`;

-- Tables Section
-- _____________

create table CLIENT (
     ID char(5) not null,
     Name varchar(10) not null,
     Surname varchar(10) not null,
     constraint IDUSER primary key (ID));

create table DISH (
     ID char(5) not null,
     Name varchar(10) not null,
     Description varchar(10) not null,
     constraint IDDISH primary key (ID));

create table FOOD_ORDER (
     DISH_ID char(5) not null,
     USER_ID char(5) not null,
     OrderDate date not null,
     constraint IDORDER primary key (USER_ID, DISH_ID));


-- Constraints Section
-- ___________________

alter table FOOD_ORDER add constraint FKR
     foreign key (USER_ID)
     references CLIENT (ID);

alter table FOOD_ORDER add constraint FKR_1
     foreign key (DISH_ID)
     references DISH (ID);


-- Index Section
-- _____________
