/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : batdongs_benhvien

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-04-29 16:47:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for patients
-- ----------------------------
DROP TABLE IF EXISTS `patients`;
CREATE TABLE `patients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ma_benhnhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` set('nu','nam') COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL COMMENT 'YYYY-MM-DD',
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `bacsy` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kythuat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `danhmuc` text COLLATE utf8_unicode_ci NOT NULL,
  `lydo` text COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ketluan` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of patients
-- ----------------------------
INSERT INTO `patients` VALUES ('1', 'A09387398', 'Bạch Đằng Hùng', 'nam', '1990-03-15', 'Hanoi, Vietnam', '948482588', 'Nguyễn Văn A', 'Nguyễn Văn A', '', 'Cảm thấy đau bụng thường xuyên, chóng mặt, buồn nôn.', 'chưa khám', '<p>Call my babe</p>\r\n', '2016-04-17 18:11:55', '2016-04-28 12:48:44');
INSERT INTO `patients` VALUES ('2', 'A98333932', 'Nguyễn Hữu Chí', 'nam', '1990-03-08', 'Mỹ Đức - Hà Nội', '902458900', 'Nguyễn Văn A', 'Nguyễn Văn A', 'Soi trĩ,Siêu âm bụng', 'Tối qua mất ngủ', 'đã khám, đang chờ kết luận', '<h3><img alt=\"\" src=\"http://img.saostar.vn/2016/01/06/185473/ngoc-trinh-kinh-doanh-thuong-hieu-thoi-trang-sang-trong-va-hop-mot.jpg\" style=\"height:300px; width:200px\" /></h3>\r\n', '2016-04-17 18:33:56', '2016-04-28 12:49:48');
INSERT INTO `patients` VALUES ('3', '1001', 'Đậu Văn cần', 'nu', '1985-07-12', 'kim liên/nam đàn/nghệ an', '123456789', 'Trương Thị Z', 'Nguyễn Văn A', 'Soi trĩ,Siêu âm bụng', 'bị dẫm phải đinh', 'đã có kết luận', 'uống thuốc vài ngày là khỏi', '2016-04-19 06:39:51', '2016-04-22 14:06:24');
INSERT INTO `patients` VALUES ('4', 'H132425', 'Nguyễn Đức Huân', 'nam', '1989-12-12', 'Hà Nội', '2147483647', 'Nguyễn Văn A', 'Trương Thị Z', 'Soi trĩ,Siêu âm bụng,Siêu âm tim,Siêu âm thai,Siêu âm chân', 'Hôi chân', 'chưa khám', '', '2016-04-22 13:10:19', '2016-04-22 14:04:47');
INSERT INTO `patients` VALUES ('5', '', 'Nguyen van A', 'nam', '2016-03-31', 'Hanoi', '987654343', 'Trương Thị Z', 'Nguyễn Văn A', 'Soi trĩ', '1111111111', 'Đã khám', '<p>21e21ee21e21e</p>\r\n', '2016-04-29 06:43:01', '2016-04-29 11:41:09');

-- ----------------------------
-- Table structure for patient_images
-- ----------------------------
DROP TABLE IF EXISTS `patient_images`;
CREATE TABLE `patient_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) unsigned NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of patient_images
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of select_options
-- ----------------------------
INSERT INTO `select_options` VALUES ('1', 'user_role', 'admin', 'Admin', '1', 'Admintrator', 'N', null, null);
INSERT INTO `select_options` VALUES ('2', 'user_role', 'bac_sy', 'Bác Sỹ', '2', 'Bác Sỹ', 'N', null, null);
INSERT INTO `select_options` VALUES ('3', 'user_role', 'ky_thuat_vien', 'Kỹ thuật viên', '3', 'Kỹ thuật viên', 'N', null, null);

-- ----------------------------
-- Table structure for templates
-- ----------------------------
DROP TABLE IF EXISTS `templates`;
CREATE TABLE `templates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `template_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `template_body` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `del_flag` set('N','Y') COLLATE utf8_unicode_ci DEFAULT 'N' COMMENT 'Delete flag',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of templates
-- ----------------------------
INSERT INTO `templates` VALUES ('1', 'Mẫu Nội Soi', '<h3><img alt=\"\" src=\"http://img.saostar.vn/2016/01/06/185473/ngoc-trinh-kinh-doanh-thuong-hieu-thoi-trang-sang-trong-va-hop-mot.jpg\" style=\"height:300px; width:200px\" /></h3>\r\n', 'N', '2016-04-28 06:34:01', '2016-04-28 10:29:36');
INSERT INTO `templates` VALUES ('2', 'Mẫu khám lâm sàn', '<ol>\r\n  <li>\r\n  <p><span style=\"font-size:14px\"><strong>T&ecirc;n bệnh nh&acirc;n:</strong>&nbsp;</span></p>\r\n  </li>\r\n <li>\r\n  <p><span style=\"font-size:14px\"><strong>Giới T&iacute;nh:&nbsp;<select name=\" gender\"><option selected=\"selected\" value=\"made\">Nam<', 'N', '2016-04-28 10:05:15', '2016-04-28 10:09:10');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '$2a$10$jH6UQzCjVJWybQ/JyIY14OdwHhs4U6.pQVydSIanq24M0ZikshuCC', 'admin', 'N', '2016-04-16 13:06:14', '2016-04-16 13:06:14');
INSERT INTO `users` VALUES ('2', 'hungnup', '$2a$10$wheQ/xLTyonVn4wvcxc4ve8y1ki8.mCsQZMCVor5TRutwTMIelpG2', 'admin', 'N', '2016-04-16 17:12:48', '2016-04-16 17:12:48');
INSERT INTO `users` VALUES ('3', 'hungb4by', '$2a$10$pytYirnukmk9zwEk.Zux4OpjA0/AhQqKllOfSH7EvVRhhiMvBFwh.', 'ky_thuat_vien', 'N', '2016-04-16 17:16:21', '2016-04-17 20:27:19');
