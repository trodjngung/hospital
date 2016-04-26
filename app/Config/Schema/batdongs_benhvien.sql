-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2016 at 05:16 AM
-- Server version: 5.5.48-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `batdongs_benhvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `Model`
--

CREATE TABLE IF NOT EXISTS `Model` (
  `id` int(11) NOT NULL,
  `name` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `body` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `ma_benhnhan`, `hoten`, `gioitinh`, `ngaysinh`, `diachi`, `phone`, `bacsy`, `kythuat`, `danhmuc`, `lydo`, `trangthai`, `ketluan`, `created`, `modified`) VALUES
(1, 'A09387398', 'Bạch Đằng Hùng', 'nam', '1990-03-15', 'Hanoi, Vietnam', 948482588, 'Nguyễn Văn A', 'Nguyễn Văn A', 'Soi trĩ,Siêu âm bụng,Siêu âm tim,Siêu âm thai,Siêu âm chân,Quang Ngực Thẳng', 'Cảm thấy đau bụng thường xuyên, chóng mặt, buồn nôn.', 'chưa khám', '', '2016-04-17 18:11:55', '2016-04-26 07:08:35'),
(2, 'A98333932', 'Nguyễn Hữu Chí', 'nam', '1990-03-08', 'Mỹ Đức - Hà Nội', 902458900, 'Nguyễn Văn A', 'Nguyễn Văn A', 'Soi trĩ,Siêu âm bụng', 'Tối qua mất ngủ', 'đã khám, đang chờ kết luận', '', '2016-04-17 18:33:56', '2016-04-22 14:05:53'),
(5, '1001', 'Đậu Văn cần', 'nu', '1985-07-12', 'kim liên/nam đàn/nghệ an', 123456789, 'Trương Thị Z', 'Nguyễn Văn A', 'Soi trĩ,Siêu âm bụng', 'bị dẫm phải đinh', 'đã có kết luận', 'uống thuốc vài ngày là khỏi', '2016-04-19 06:39:51', '2016-04-22 14:06:24'),
(7, '', 'Nguyễn Đức Huân', 'nam', '1989-12-12', 'Hà Nội', 2147483647, 'Nguyễn Văn A', 'Trương Thị Z', 'Soi trĩ,Siêu âm bụng,Siêu âm tim,Siêu âm thai,Siêu âm chân', 'Hôi chân', 'chưa khám', '', '2016-04-22 13:10:19', '2016-04-22 14:04:47');

-- --------------------------------------------------------

--
-- Table structure for table `select_options`
--

CREATE TABLE IF NOT EXISTS `select_options` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `select_options`
--

INSERT INTO `select_options` (`id`, `column_name`, `select_code`, `display_name`, `display_order`, `memo`, `del_flag`, `created`, `modified`) VALUES
(2, 'class', '1A', '1A', 1, 'Class 1A', 'N', NULL, NULL),
(3, 'class', '1B', '1B', 2, 'Class 1B', 'N', NULL, NULL),
(4, 'class', '1C', '1C', 3, 'Class 1C', 'N', NULL, NULL),
(5, 'class', '2A', '2A', 4, 'Class 2A', 'N', NULL, NULL),
(6, 'class', '2B', '2B', 5, 'Class 2B', 'N', NULL, NULL),
(7, 'class', '2C', '2C', 6, 'Class 2C', 'N', NULL, NULL),
(8, 'teacher', 'Ms. Oanh Nguyen', 'Ms. Oanh Nguyen', 1, 'Ms. Oanh Nguyen', 'N', NULL, NULL),
(9, 'teacher', 'Ms. Lan Anh', 'Ms. Lan Anh', 2, 'Ms. Lan Anh', 'N', NULL, NULL),
(10, 'teacher', 'Ms. Thu Tran', 'Ms. Thu Tran', 3, 'Ms. Thu Tran', 'N', NULL, NULL),
(11, 'teacher', 'Ms. Mai Phuong', 'Ms. Mai Phuong', 4, 'Ms. Mai Phuong', 'N', NULL, NULL),
(12, 'teacher', 'Mr. Tuan Anh', 'Mr. Tuan Anh', 5, 'Mr. Tuan Anh', 'N', NULL, NULL),
(13, 'teacher', 'Mr. Join', 'Mr. Join', 6, 'Mr. Join', 'N', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `del_flag` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'N' COMMENT 'N',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `del_flag`, `created`, `modified`) VALUES
(1, 'admin', '$2a$10$e3bT9vgMN.eaf7x4xWFy7OJJFYlO8fGTR4TvdEI1dc/NbmpzdRf.K', 'admin', 'N', '2016-04-18 02:40:29', '2016-04-18 02:40:29'),
(2, 'chinguyen', '$2a$10$dyL3WypCafCuS7Ny3wccquUBJZNXyqa5r9kTuMEMWW3zHvtvQyosW', 'admin', 'N', '2016-04-22 16:25:12', '2016-04-22 16:25:12'),
(3, 'Channguyen', '$2a$10$gpt844cRfkgjbJAN7WYobOebY4Qxdpso5mh2MY0FfHk.rnICQR9Hq', 'author', 'N', '2016-04-22 16:28:23', '2016-04-22 16:28:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
