-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2020 at 02:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `acounts`
--

CREATE TABLE `acounts` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `code` varchar(255) NOT NULL COMMENT 'mã sinh viên',
  `password` varchar(255) NOT NULL COMMENT 'mật khẩu',
  `type` int(11) NOT NULL COMMENT 'loại tài khoản',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Thông tin bảng tài khoản';

--
-- Dumping data for table `acounts`
--

INSERT INTO `acounts` (`id`, `code`, `password`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CP1999', '$2y$10$v5oejrM95OBuSiWRJj67ZO.VJuyl.ZYaOaeysLhMUlbUibTZDcHeC', 1, '2020-05-14 00:39:41', '2020-05-14 00:39:41', NULL),
(3, 'CP1997', '$2y$10$w1xxkuVWD9tjrUiWrQCfs.s47R/MjPaOlqxmMhz0BiNfpDquhcMeG', 1, '2020-05-14 00:39:41', '2020-05-14 00:39:41', NULL),
(4, 'B1704774', '$2y$10$o1MRBkNF5QXJvSvacsQEg.ZgXj6GJWPMH4w7Zur9mP/4HYSGW5mQ6', 0, '2020-05-17 00:54:40', '2020-05-17 00:54:40', NULL),
(6, 'admin', '$2y$10$gBdzrDd1FvT4nfo0Hjup.u/SSeywPAXfrn1IF5FIa2NH7PCee7ulq', 2, '2020-05-17 00:56:12', '2020-05-17 00:56:12', NULL),
(7, 'CP1998', '$2y$10$0gAEoRcU/dHNw2XxT94WTez0riTIzGbu093tF7Q/P2H6A2BhgmlzG', 1, '2020-05-17 10:14:54', '2020-05-17 10:15:29', NULL),
(13, 'CP1995', '$2y$10$QE/XmvUy.RS/C3Dgauz9tuqSMyPDViAWiTSr6QU0Giup6e7Xf.tfS', 1, '2020-05-20 02:02:05', '2020-05-20 02:02:05', NULL),
(14, 'B1705775', '$2y$10$d/nn0d5hv0/6zdC9aZ4uX.OyjzcvZHM71ZJPtTZYCrF1Sp/lZYiSi', 0, '2020-05-26 01:59:42', '2020-05-26 01:59:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `analyst`
--

CREATE TABLE `analyst` (
  `code` varchar(255) NOT NULL,
  `applyst` int(11) NOT NULL,
  `success` int(11) NOT NULL,
  `percent` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `analyst`
--

INSERT INTO `analyst` (`code`, `applyst`, `success`, `percent`) VALUES
('CP1995', 0, 0, 0),
('CP1998', 0, 0, 0),
('CP1999', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `applys`
--

CREATE TABLE `applys` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `code_SV` varchar(255) NOT NULL,
  `PostID` int(11) NOT NULL,
  `content_AP` longtext NOT NULL,
  `CV` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applys`
--

INSERT INTO `applys` (`id`, `code`, `code_SV`, `PostID`, `content_AP`, `CV`) VALUES
(12, 'CP1998', 'B1704812', 9, 'hú hú  ', '20200525100138.docx'),
(14, 'CP1999', 'B1704774', 10, 'cho em xin vào công ty với ạ a', '20200527014322.txt'),
(15, 'CP1999', 'B1705775', 10, 'em là mông ', '20200527015019.txt'),
(16, 'CP1999', 'B1704812', 10, 'xin viec ', '20200527031653.txt'),
(17, 'CP1999', 'B1705775', 6, 'cho em xin tuyển dụng ', '20200528011419.docx'),
(18, 'CP1998', 'B1704774', 7, 'abcxyz .', '20200528030744.docx'),
(21, 'CP1998', 'B1705775', 13, 'xin việc ad ơi ', '20200727100728.txt'),
(22, 'CP1998', 'B1705775', 9, 'xin việc ad ', '20200727101138.txt'),
(23, 'CP1999', 'B1702772', 9, 'sdasdasdasd', 'sdasdasdas'),
(24, 'CP1998', 'B1704774', 10, '20', '21'),
(25, 'CP1998', 'B1706776', 10, '232', '3232');

--
-- Triggers `applys`
--
DELIMITER $$
CREATE TRIGGER `INSERT_ANA` AFTER INSERT ON `applys` FOR EACH ROW BEGIN
UPDATE `analyst` SET `analyst`.`applyst` = `analyst`.`applyst` + '1'
WHERE `code` = `code`;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `code` varchar(255) DEFAULT NULL COMMENT 'mã công ty',
  `name` varchar(255) NOT NULL COMMENT 'tên công ty',
  `address` varchar(255) DEFAULT NULL COMMENT 'vị trí',
  `decription` varchar(255) DEFAULT NULL COMMENT 'mô tả',
  `mail` varchar(255) NOT NULL COMMENT 'mail cong ty',
  `phone` varchar(255) DEFAULT NULL COMMENT 'dien thoai',
  `website` varchar(255) DEFAULT NULL COMMENT 'web doanh nghiệp',
  `facebook` varchar(255) DEFAULT NULL COMMENT 'facebook doanh nghiệp',
  `twitter` varchar(255) DEFAULT NULL COMMENT 'twitter doanh nghiệp',
  `image` mediumtext DEFAULT NULL COMMENT 'ảnh doanh nghiệp',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `code`, `name`, `address`, `decription`, `mail`, `phone`, `website`, `facebook`, `twitter`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CP1999', 'Huy Developer', 'Cần Thơ', NULL, 'huynhnhuthuytm@gmail.com', '07029409571', 'google.com', 'google', 'google', 's8Ptd_3cj5d_6F3Wt_job_logo_5.jpg', '2020-05-15 12:25:26', '2020-07-27 11:10:57', NULL),
(3, 'CP1998', 'HuyKaiSoul', 'Tiền Giang', 'công ty tốt', 'thonglinh66@gmail.com', '05202552221', 'huy1999z.com.vn', 'huy Kaisoul', 'huy Kaisoul', 'k6MBL_2kXL1_job_logo_4.jpg', '2020-05-17 10:18:09', '2020-07-27 11:10:58', NULL),
(4, 'CP1995', 'Tu developer', 'An Giang', 'tu tu', 'tu@gmail.com', '08428451', 'tu.com', 'tu', 'tu', '5BOsO_job_logo_3.jpg', '2020-05-20 09:03:22', '2020-07-27 11:10:58', NULL);

--
-- Triggers `business`
--
DELIMITER $$
CREATE TRIGGER `insertCP` BEFORE INSERT ON `business` FOR EACH ROW BEGIN
INSERT INTO `analyst` (`code`) VALUES (new.code);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `code_SV` varchar(255) NOT NULL,
  `code_BS` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `code_SV`, `code_BS`, `content`) VALUES
(1, 'B1704812', 'CP1999', 'công ty ăn cứt'),
(2, 'B1704812', 'CP1999', 'Công ty  dễ thương'),
(4, 'B1704812', 'CP1999', 'công ty ăn cỏ');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `jobsAt` varchar(255) NOT NULL,
  `decript` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `mail`, `jobsAt`, `decript`) VALUES
(3, 'Tăng Minh Thông', 'thongb1704774@student.ctu.edu', 'Đại học Cần Thơ', 'xin nick ad ơi'),
(5, 'Tăng Minh Thông', 'puma@gmail.com', 'gj', 'jgj'),
(6, 'Tăng Minh Thông', 'thongb1704774@student.ctu.edu', 'Nam cần Thơ', 'em muốn xin tài');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `name_l` varchar(255) NOT NULL COMMENT 'tên ngôn ngữ',
  `PostID` varchar(255) DEFAULT NULL COMMENT 'ID bài Post chứa Lang',
  `code` varchar(255) DEFAULT NULL COMMENT 'ID CP chứa Lang',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name_l`, `PostID`, `code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(162, 'C', '5', NULL, '2020-05-18 04:36:12', '2020-05-18 04:36:12', NULL),
(163, 'C#', '5', NULL, '2020-05-18 04:36:12', '2020-05-18 04:36:12', NULL),
(164, 'Java', '5', NULL, '2020-05-18 04:36:12', '2020-05-18 04:36:12', NULL),
(165, 'Html', '5', NULL, '2020-05-18 04:36:12', '2020-05-18 04:36:12', NULL),
(166, 'Css', '5', NULL, '2020-05-18 04:36:12', '2020-05-18 04:36:12', NULL),
(167, 'Python', '5', NULL, '2020-05-18 04:36:12', '2020-05-18 04:36:12', NULL),
(168, 'PHP', '5', NULL, '2020-05-18 04:36:13', '2020-05-18 04:36:13', NULL),
(169, 'Javascript', '5', NULL, '2020-05-18 04:36:13', '2020-05-20 06:06:42', NULL),
(170, 'C', '6', NULL, '2020-05-18 04:37:13', '2020-05-18 04:37:13', NULL),
(171, 'C#', '6', NULL, '2020-05-18 04:37:13', '2020-05-18 04:37:13', NULL),
(172, 'Java', '6', NULL, '2020-05-18 04:37:13', '2020-05-18 04:37:13', NULL),
(173, 'Html', '6', NULL, '2020-05-18 04:37:13', '2020-05-18 04:37:13', NULL),
(174, 'Css', '6', NULL, '2020-05-18 04:37:13', '2020-05-18 04:37:13', NULL),
(175, 'Python', '6', NULL, '2020-05-18 04:37:13', '2020-05-18 04:37:13', NULL),
(176, 'PHP', '6', NULL, '2020-05-18 04:37:13', '2020-05-18 04:37:13', NULL),
(185, 'C', '7', NULL, '2020-05-18 04:50:52', '2020-05-18 04:50:52', NULL),
(186, 'C#', '7', NULL, '2020-05-18 04:50:52', '2020-05-18 04:50:52', NULL),
(187, 'Java', '7', NULL, '2020-05-18 04:50:52', '2020-05-18 04:50:52', NULL),
(188, 'Html', '7', NULL, '2020-05-18 04:50:52', '2020-05-18 04:50:52', NULL),
(189, 'Css', '7', NULL, '2020-05-18 04:50:52', '2020-05-18 04:50:52', NULL),
(190, 'Python', '7', NULL, '2020-05-18 04:50:52', '2020-05-18 04:50:52', NULL),
(191, 'PHP', '7', NULL, '2020-05-18 04:50:52', '2020-05-18 04:50:52', NULL),
(192, 'C', '8', NULL, '2020-05-18 04:53:23', '2020-05-18 04:53:23', NULL),
(193, 'C#', '8', NULL, '2020-05-18 04:53:23', '2020-05-18 04:53:23', NULL),
(194, 'Java', '8', NULL, '2020-05-18 04:53:23', '2020-05-18 04:53:23', NULL),
(195, 'Html', '8', NULL, '2020-05-18 04:53:23', '2020-05-18 04:53:23', NULL),
(196, 'Css', '8', NULL, '2020-05-18 04:53:23', '2020-05-18 04:53:23', NULL),
(197, 'Python', '8', NULL, '2020-05-18 04:53:23', '2020-05-18 04:53:23', NULL),
(198, 'PHP', '8', NULL, '2020-05-18 04:53:23', '2020-05-18 04:53:23', NULL),
(199, 'Javascript', '8', NULL, '2020-05-18 04:53:23', '2020-05-20 06:06:42', NULL),
(200, 'C', '9', NULL, '2020-05-18 04:55:35', '2020-05-18 04:55:35', NULL),
(201, 'C#', '9', NULL, '2020-05-18 04:55:35', '2020-05-18 04:55:35', NULL),
(202, 'Java', '9', NULL, '2020-05-18 04:55:35', '2020-05-18 04:55:35', NULL),
(203, 'Html', '9', NULL, '2020-05-18 04:55:35', '2020-05-18 04:55:35', NULL),
(204, 'Css', '9', NULL, '2020-05-18 04:55:35', '2020-05-18 04:55:35', NULL),
(205, 'Python', '9', NULL, '2020-05-18 04:55:35', '2020-05-18 04:55:35', NULL),
(206, 'C', '10', NULL, '2020-05-20 01:24:38', '2020-05-20 01:24:38', NULL),
(207, 'C#', '10', NULL, '2020-05-20 01:24:38', '2020-05-20 01:24:38', NULL),
(208, 'Java', '10', NULL, '2020-05-20 01:24:38', '2020-05-20 01:24:38', NULL),
(209, 'Html', '10', NULL, '2020-05-20 01:24:38', '2020-05-20 01:24:38', NULL),
(210, 'Css', '10', NULL, '2020-05-20 01:24:38', '2020-05-20 01:24:38', NULL),
(211, 'Python', '10', NULL, '2020-05-20 01:24:38', '2020-05-20 01:24:38', NULL),
(212, 'PHP', '10', NULL, '2020-05-20 01:24:38', '2020-05-20 01:24:38', NULL),
(213, 'Javascript', '10', NULL, '2020-05-20 01:24:38', '2020-05-20 01:24:38', NULL),
(222, 'C', NULL, 'CP1999', '2020-05-20 01:32:14', '2020-05-20 01:32:14', NULL),
(223, 'C#', NULL, 'CP1999', '2020-05-20 01:32:14', '2020-05-20 01:32:14', NULL),
(224, 'Java', NULL, 'CP1999', '2020-05-20 01:32:14', '2020-05-20 01:32:14', NULL),
(225, 'Html', NULL, 'CP1999', '2020-05-20 01:32:14', '2020-05-20 01:32:14', NULL),
(226, 'Css', NULL, 'CP1999', '2020-05-20 01:32:14', '2020-05-20 01:32:14', NULL),
(227, 'Python', NULL, 'CP1999', '2020-05-20 01:32:14', '2020-05-20 01:32:14', NULL),
(228, 'PHP', NULL, 'CP1999', '2020-05-20 01:32:14', '2020-05-20 01:32:14', NULL),
(229, 'Javascript', NULL, 'CP1999', '2020-05-20 01:32:14', '2020-05-20 01:32:14', NULL),
(230, 'C', '11', NULL, '2020-05-20 01:33:51', '2020-05-20 01:33:51', NULL),
(231, 'C#', '11', NULL, '2020-05-20 01:33:51', '2020-05-20 01:33:51', NULL),
(232, 'Java', '11', NULL, '2020-05-20 01:33:51', '2020-05-20 01:33:51', NULL),
(233, 'Html', '11', NULL, '2020-05-20 01:33:51', '2020-05-20 01:33:51', NULL),
(234, 'Css', '11', NULL, '2020-05-20 01:33:51', '2020-05-20 01:33:51', NULL),
(235, 'Python', '11', NULL, '2020-05-20 01:33:51', '2020-05-20 01:33:51', NULL),
(242, 'C', NULL, 'CP1995', '2020-05-20 02:06:31', '2020-05-20 02:06:31', NULL),
(243, 'C#', NULL, 'CP1995', '2020-05-20 02:06:32', '2020-05-20 02:06:32', NULL),
(244, 'Java', NULL, 'CP1995', '2020-05-20 02:06:32', '2020-05-20 02:06:32', NULL),
(245, 'Html', NULL, 'CP1995', '2020-05-20 02:06:32', '2020-05-20 02:06:32', NULL),
(246, 'Css', NULL, 'CP1995', '2020-05-20 02:06:32', '2020-05-20 02:06:32', NULL),
(247, 'Python', NULL, 'CP1995', '2020-05-20 02:06:32', '2020-05-20 02:06:32', NULL),
(264, 'C', NULL, 'CP1998', '2020-05-26 18:58:23', '2020-05-26 18:58:23', NULL),
(265, 'C#', NULL, 'CP1998', '2020-05-26 18:58:23', '2020-05-26 18:58:23', NULL),
(266, 'Java', NULL, 'CP1998', '2020-05-26 18:58:23', '2020-05-26 18:58:23', NULL),
(267, 'Html', NULL, 'CP1998', '2020-05-26 18:58:23', '2020-05-26 18:58:23', NULL),
(268, 'Css', NULL, 'CP1998', '2020-05-26 18:58:23', '2020-05-26 18:58:23', NULL),
(269, 'Python', NULL, 'CP1998', '2020-05-26 18:58:24', '2020-05-26 18:58:24', NULL),
(270, 'PHP', NULL, 'CP1998', '2020-05-26 18:58:24', '2020-05-26 18:58:24', NULL),
(271, 'Javscript', NULL, 'CP1998', '2020-05-26 18:58:24', '2020-05-26 18:58:24', NULL),
(272, 'C', '12', NULL, '2020-05-26 18:59:37', '2020-05-26 18:59:37', NULL),
(273, 'C#', '12', NULL, '2020-05-26 18:59:37', '2020-05-26 18:59:37', NULL),
(274, 'Java', '12', NULL, '2020-05-26 18:59:37', '2020-05-26 18:59:37', NULL),
(275, 'Html', '12', NULL, '2020-05-26 18:59:37', '2020-05-26 18:59:37', NULL),
(276, 'Css', '12', NULL, '2020-05-26 18:59:38', '2020-05-26 18:59:38', NULL),
(277, 'Python', '12', NULL, '2020-05-26 18:59:38', '2020-05-26 18:59:38', NULL),
(278, 'PHP', '12', NULL, '2020-05-26 18:59:38', '2020-05-26 18:59:38', NULL),
(279, 'Javscript', '12', NULL, '2020-05-26 18:59:38', '2020-05-26 18:59:38', NULL),
(280, 'C', '13', NULL, '2020-05-26 19:05:11', '2020-05-26 19:05:11', NULL),
(281, 'C#', '13', NULL, '2020-05-26 19:05:11', '2020-05-26 19:05:11', NULL),
(282, 'Java', '13', NULL, '2020-05-26 19:05:11', '2020-05-26 19:05:11', NULL),
(283, 'Html', '13', NULL, '2020-05-26 19:05:11', '2020-05-26 19:05:11', NULL),
(284, 'Css', '13', NULL, '2020-05-26 19:05:11', '2020-05-26 19:05:11', NULL),
(285, 'Python', '13', NULL, '2020-05-26 19:05:12', '2020-05-26 19:05:12', NULL),
(286, 'C', '14', NULL, '2020-07-15 22:18:17', '2020-07-15 22:18:17', NULL),
(287, 'C#', '14', NULL, '2020-07-15 22:18:17', '2020-07-15 22:18:17', NULL),
(288, 'Java', '14', NULL, '2020-07-15 22:18:17', '2020-07-15 22:18:17', NULL),
(289, 'Html', '14', NULL, '2020-07-15 22:18:17', '2020-07-15 22:18:17', NULL),
(290, 'Css', '14', NULL, '2020-07-15 22:18:17', '2020-07-15 22:18:17', NULL),
(291, 'Python', '14', NULL, '2020-07-15 22:18:17', '2020-07-15 22:18:17', NULL),
(292, 'PHP', '14', NULL, '2020-07-15 22:18:17', '2020-07-15 22:18:17', NULL),
(293, 'Javscript', '14', NULL, '2020-07-15 22:18:17', '2020-07-15 22:18:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `PostID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `code`, `PostID`) VALUES
(13, 'B1704774', 9),
(14, 'B1704812', 9),
(19, 'B1704812', 11),
(20, 'B1705775', 14);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2020_05_12_051028_acounts_table', 1),
(22, '2020_05_12_122231_posts', 1),
(23, '2020_05_12_232146_business', 1),
(24, '2020_05_15_124700_language', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `code` varchar(255) NOT NULL,
  `member` int(11) NOT NULL COMMENT 'Số lượng tuyển dụng',
  `title` varchar(255) NOT NULL COMMENT 'Tiêu đề',
  `pdecription` varchar(255) NOT NULL COMMENT 'Mô tả',
  `type` int(11) NOT NULL COMMENT 'loai',
  `min_salary` int(11) NOT NULL COMMENT 'lương thấp nhất',
  `max_salary` int(11) NOT NULL COMMENT 'lương cao nhất',
  `deadline` timestamp NULL DEFAULT NULL COMMENT 'Hạn chót',
  `success` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `code`, `member`, `title`, `pdecription`, `type`, `min_salary`, `max_salary`, `deadline`, `success`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'CP1999', 60, 'Huy Developer', 'naratomo', 0, 1500, 8000, '2020-08-30 07:22:00', 2, '2020-05-18 04:37:11', '2020-07-27 12:00:24', NULL),
(7, 'CP1998', 30, 'Tu developer', 'hhhhh', 0, 1000, 4000, '2020-08-30 07:22:00', 2, '2020-05-18 04:50:52', '2020-07-27 11:51:31', NULL),
(8, 'CP1998', 20, 'Quân developer', 'naratomo', 0, 1000, 8000, '2020-08-30 07:22:00', 3, '2020-05-18 04:53:23', '2020-07-27 11:51:31', NULL),
(9, 'CP1998', 40, 'Lyon.Thon', 'Ken', 1, 1000, 9000, '2020-08-30 07:22:00', 5, '2020-05-18 04:55:35', '2020-07-27 11:51:31', NULL),
(10, 'CP1999', 60, 'TMT Lyon.Thon', 'hahahahaahahahaaha', 1, 1500, 7000, '2020-08-30 07:22:00', 2, '2020-05-20 01:24:38', '2020-07-27 09:43:46', NULL),
(12, 'CP1998', 45, 'Tuyển dung lập trình viên ( có đào tạo)', 'Việc Tốt với lương tốt', 1, 3000, 5000, '2020-08-30 07:22:00', 3, '2020-05-26 18:59:37', '2020-07-27 11:51:33', NULL),
(13, 'CP1998', 30, 'Tuyen dung lap trinh javascript', 'công việc nhẹ', 1, 3000, 7000, '2020-08-30 07:22:00', 2, '2020-05-26 19:05:11', '2020-07-27 11:51:34', NULL),
(14, 'CP1998', 30, 'Huy Developer tuyển dụng', 'việc nhẹ', 1, 1000, 4000, '2020-08-30 07:22:00', 1, '2020-07-15 22:18:16', '2020-07-27 11:51:34', NULL);

--
-- Triggers `posts`
--
DELIMITER $$
CREATE TRIGGER `success` AFTER UPDATE ON `posts` FOR EACH ROW BEGIN
UPDATE `analyst` SET `success` = success + NEW.success WHERE `code` = `code`;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail_SV` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `code`, `name`, `mail_SV`) VALUES
(1, 'B1704812', 'Huỳnh Nhựt Huy', 'huyb1704812@student.ctu.edu.vn'),
(2, 'B1704774', 'Tăng Minh Thông', 'thongb1704774@student.ctu.edu.vn'),
(3, 'B1705775', 'Tấn Văng Mông', 'mongb1705775@student.ctu.edu.vn');

-- --------------------------------------------------------

--
-- Table structure for table `trendings`
--

CREATE TABLE `trendings` (
  `keyname` varchar(255) NOT NULL,
  `count` int(11) DEFAULT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trendings`
--

INSERT INTO `trendings` (`keyname`, `count`, `image`) VALUES
('C', 12, 'C_logo.png'),
('C#', 14, 'C_Sharp_logo.png'),
('C++', 2, 'C_plust_logo.png'),
('Css', 1, 'css_logo.png'),
('Html', NULL, 'html_logo.png'),
('Java', 4, 'java_logo.png'),
('Javascript', 6, 'javascript_logo.png'),
('Php', 1, 'php_logo.png'),
('Python', 2, 'python_logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acounts`
--
ALTER TABLE `acounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `acounts_code_unique` (`code`);

--
-- Indexes for table `analyst`
--
ALTER TABLE `analyst`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `applys`
--
ALTER TABLE `applys`
  ADD PRIMARY KEY (`id`,`code`),
  ADD KEY `AAA` (`code`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`,`code`),
  ADD KEY `BBBBB` (`code`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trendings`
--
ALTER TABLE `trendings`
  ADD PRIMARY KEY (`keyname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acounts`
--
ALTER TABLE `acounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `applys`
--
ALTER TABLE `applys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=294;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applys`
--
ALTER TABLE `applys`
  ADD CONSTRAINT `AAA` FOREIGN KEY (`code`) REFERENCES `analyst` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `BBBBB` FOREIGN KEY (`code`) REFERENCES `analyst` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
