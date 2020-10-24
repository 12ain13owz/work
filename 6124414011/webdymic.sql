-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `webdymic`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `member`
-- 

CREATE TABLE `member` (
  `memId` varchar(4) NOT NULL,
  `memName` varchar(20) NOT NULL,
  `memLast` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `address` varchar(50) NOT NULL,
  `type` varchar(1) NOT NULL,
  PRIMARY KEY  (`memId`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- 
-- dump ตาราง `member`
-- 

INSERT INTO `member` VALUES ('0001', 'Phaiboon', 'Withanthamrong', 'Dryst', '1234', 'm', 'Bangkok', '0');
INSERT INTO `member` VALUES ('1111', 'Tom', 'Honland', 'Luciz', '1234', 'm', 'asd', '1');
INSERT INTO `member` VALUES ('1234', 'Jeft', 'Hardy', 'Jeft', '1234', 'f', '999', '1');
INSERT INTO `member` VALUES ('1235', 'Math', 'Hardy', 'Math', '1234', 'f', '999', '1');
INSERT INTO `member` VALUES ('1236', 'John', 'Hardy', 'John', '1234', 'm', '999', '1');
