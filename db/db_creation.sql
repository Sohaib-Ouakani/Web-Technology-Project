-- *********************************************
-- * SQL MySQL generation (CORRECTED)
-- *********************************************

create schema if not exists `volume` default character set utf8;
use `volume`;

-- Tables Section
-- _____________

create table CLIENT (
     ID int auto_increment,
     Name varchar(100) not null,
     Surname varchar(100) not null,
     Username varchar(100) not null unique,
     Password varchar(100) not null,
     IsAdmin BOOLEAN not null,
     constraint IDUSER primary key (ID));

create table DISH (
     ID int auto_increment,
     Name varchar(100) not null,
     Description varchar(100) not null,
     ImagePath varchar(100) not null,
     Special BOOLEAN not null,
     constraint IDDISH primary key (ID));

create table FOOD_ORDER (
     ID int auto_increment,
     DISH_ID int not null,
     USER_ID int not null,
     OrderDate datetime not null,
     IsComplete BOOLEAN not null,
     constraint IDORDER primary key (ID),
     constraint UQ_ORDER unique (USER_ID, DISH_ID, OrderDate));

-- Constraints Section
-- ___________________

alter table FOOD_ORDER add constraint FKR
     foreign key (USER_ID)
     references CLIENT (ID)
     on delete cascade
     on update cascade;

alter table FOOD_ORDER add constraint FKR_1
     foreign key (DISH_ID)
     references DISH (ID)
     on delete cascade
     on update cascade;

-- Index Section (optional but recommended for performance)
-- _____________

create index IDX_ORDER_USER on FOOD_ORDER (USER_ID);
create index IDX_ORDER_DISH on FOOD_ORDER (DISH_ID);
create index IDX_ORDER_DATE on FOOD_ORDER (OrderDate);