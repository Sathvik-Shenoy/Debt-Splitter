DROP DATABASE IF EXISTS `debt_splitter`;
CREATE DATABASE `debt_splitter`;
USE `debt_splitter`;
SET SQL_SAFE_UPDATES=0;
#-----------------------------------------------------------------------------
SET NAMES utf8;

CREATE TABLE people
(
    ID int PRIMARY KEY AUTO_INCREMENT,
    Name varchar(30) NOT NULL
);
INSERT INTO people VALUES (100,'ABC');