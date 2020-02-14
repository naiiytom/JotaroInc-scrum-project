CREATE DATABASE IF NOT EXISTS `db` COLLATE 'utf8mb4_unicode_ci';

USE `db`;

CREATE TABLE `Item` (
 `itemID`   varchar(10) NOT NULL ,
 `itemName` varchar(45) NOT NULL ,
PRIMARY KEY (`itemID`));

CREATE TABLE `Roll`(
    `rollID` int(2) NOT NULL,
    `rollName` varchar(45) NOT NULL,
    PRIMARY KEY (`rollID`));

CREATE TABLE `Member`(
 `email`  varchar(45) NOT NULL ,
 `name`   varchar(45) NOT NULL ,
 `rollID` int(2) NOT NULL ,
PRIMARY KEY (`email`),
KEY `fkIdx_17` (`rollID`),
CONSTRAINT `FK_17` FOREIGN KEY `fkIdx_17` (`rollID`) REFERENCES `Roll` (`rollID`));
