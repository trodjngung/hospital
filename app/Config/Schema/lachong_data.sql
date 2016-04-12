-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2016 at 09:27 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15
--
  -- This file is …….
  -- Developed by PHP language program, use Framework Cakephp.
  -- Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
  -- Short name: OREGON CO.,LTD
  -- Website: http://vietoregon-tech.com/?lang=eng 
  -- Email: vietoregon.tech.com@gmail.com
  -- Thanks and best regard !
  -- —————————————————————————————————————
  -- Đây là file dùng để ……. 
  -- Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
  -- Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT-OREGON
  -- Tên ngắn giao dịch: OREGON CO.,LTD
  -- Website: http://vietoregon-tech.com/?lang=vn
  -- Địa chỉ Email: vietoregon.tech.com@gmail.com
  -- Cám ơn quý đối tác !
--

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for documents
-- ----------------------------
DROP TABLE IF EXISTS `documents`;
CREATE TABLE `documents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `teacher_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filepath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `del_flag` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'N' COMMENT 'N',
  `extension` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for select_options
-- ----------------------------
DROP TABLE IF EXISTS `select_options`;
CREATE TABLE `select_options` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `column_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `select_code` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `display_order` int(4) NOT NULL,
  `memo` text COLLATE utf8_unicode_ci,
  `del_flag` varchar(1) COLLATE utf8_unicode_ci DEFAULT 'N',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uni_key` (`column_name`,`select_code`,`display_name`),
  KEY `idx_column_name` (`column_name`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of select_options
-- ----------------------------
INSERT INTO `select_options` VALUES ('2', 'class', '1A', '1A', '1', 'Class 1A', 'N', null, null);
INSERT INTO `select_options` VALUES ('3', 'class', '1B', '1B', '2', 'Class 1B', 'N', null, null);
INSERT INTO `select_options` VALUES ('4', 'class', '1C', '1C', '3', 'Class 1C', 'N', null, null);
INSERT INTO `select_options` VALUES ('5', 'class', '2A', '2A', '4', 'Class 2A', 'N', null, null);
INSERT INTO `select_options` VALUES ('6', 'class', '2B', '2B', '5', 'Class 2B', 'N', null, null);
INSERT INTO `select_options` VALUES ('7', 'class', '2C', '2C', '6', 'Class 2C', 'N', null, null);
INSERT INTO `select_options` VALUES ('8', 'teacher', 'Ms. Oanh Nguyen', 'Ms. Oanh Nguyen', '1', 'Ms. Oanh Nguyen', 'N', null, null);
INSERT INTO `select_options` VALUES ('9', 'teacher', 'Ms. Lan Anh', 'Ms. Lan Anh', '2', 'Ms. Lan Anh', 'N', null, null);
INSERT INTO `select_options` VALUES ('10', 'teacher', 'Ms. Thu Tran', 'Ms. Thu Tran', '3', 'Ms. Thu Tran', 'N', null, null);
INSERT INTO `select_options` VALUES ('11', 'teacher', 'Ms. Mai Phuong', 'Ms. Mai Phuong', '4', 'Ms. Mai Phuong', 'N', null, null);
INSERT INTO `select_options` VALUES ('12', 'teacher', 'Mr. Tuan Anh', 'Mr. Tuan Anh', '5', 'Mr. Tuan Anh', 'N', null, null);
INSERT INTO `select_options` VALUES ('13', 'teacher', 'Mr. Join', 'Mr. Join', '6', 'Mr. Join', 'N', null, null);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `del_flag` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'N' COMMENT 'N',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
