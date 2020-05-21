-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 21, 2020 lúc 06:07 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `jobs`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acounts`
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
-- Đang đổ dữ liệu cho bảng `acounts`
--

INSERT INTO `acounts` (`id`, `code`, `password`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CP1999', '$2y$10$v5oejrM95OBuSiWRJj67ZO.VJuyl.ZYaOaeysLhMUlbUibTZDcHeC', 1, '2020-05-14 00:39:41', '2020-05-14 00:39:41', NULL),
(3, 'CP1997', '$2y$10$w1xxkuVWD9tjrUiWrQCfs.s47R/MjPaOlqxmMhz0BiNfpDquhcMeG', 1, '2020-05-14 00:39:41', '2020-05-14 00:39:41', NULL),
(4, 'B1704774', '$2y$10$o1MRBkNF5QXJvSvacsQEg.ZgXj6GJWPMH4w7Zur9mP/4HYSGW5mQ6', 0, '2020-05-17 00:54:40', '2020-05-17 00:54:40', NULL),
(5, 'B1704812', '$2y$10$uP2L3SMIGoOWKfNLYnzxGOAUeu2SHeoNOJW4WdbAglvAQ4eejsKQW', 0, '2020-05-17 00:54:40', '2020-05-17 00:54:40', NULL),
(6, 'admin', '$2y$10$gBdzrDd1FvT4nfo0Hjup.u/SSeywPAXfrn1IF5FIa2NH7PCee7ulq', 2, '2020-05-17 00:56:12', '2020-05-17 00:56:12', NULL),
(7, 'CP1998', '$2y$10$0gAEoRcU/dHNw2XxT94WTez0riTIzGbu093tF7Q/P2H6A2BhgmlzG', 1, '2020-05-17 10:14:54', '2020-05-17 10:15:29', NULL),
(8, 'B1705775', '$2y$10$uMco4kzdKq6YNVBpoB6adOXmBei9eHm5U4694P691Gn.Tw5zDdXfm', 0, '2020-05-17 17:09:40', '2020-05-17 17:09:40', NULL),
(13, 'CP1995', '$2y$10$QE/XmvUy.RS/C3Dgauz9tuqSMyPDViAWiTSr6QU0Giup6e7Xf.tfS', 1, '2020-05-20 02:02:05', '2020-05-20 02:02:05', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `business`
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
-- Đang đổ dữ liệu cho bảng `business`
--

INSERT INTO `business` (`id`, `code`, `name`, `address`, `decription`, `mail`, `phone`, `website`, `facebook`, `twitter`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CP1999', 'Huy Developer', 'Cần Thơ', NULL, 'google@gmail.com', '0702940957', 'google.com', 'google', 'google', 's8Ptd_3cj5d_6F3Wt_job_logo_5.jpg', '2020-05-15 12:25:26', '2020-05-17 20:59:58', NULL),
(3, 'CP1998', 'HuyKaiSoul', 'Tiền Giang', NULL, 'huy@gmail.com', '0520255222', 'huy1999z.com.vn', 'huy Kaisoul', 'huy Kaisoul', 'k6MBL_2kXL1_job_logo_4.jpg', '2020-05-17 10:18:09', '2020-05-18 04:50:09', NULL),
(4, 'CP1995', 'Tu developer', 'An Giang', 'tu tu', 'tu@gmail.com', '0842845', 'tu.com', 'tu', 'tu', '5BOsO_job_logo_3.jpg', '2020-05-20 09:03:22', '2020-05-20 02:06:32', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `code_SV` varchar(255) NOT NULL,
  `code_BS` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `code_SV`, `code_BS`, `content`) VALUES
(1, 'B1704812', 'CP1999', 'công ty ăn cứt'),
(2, 'B1704812', 'CP1999', 'Công ty  dễ thương'),
(4, 'B1704812', 'CP1999', 'công ty ăn cỏ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `languages`
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
-- Đang đổ dữ liệu cho bảng `languages`
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
(177, 'C', NULL, 'CP1998', '2020-05-18 04:39:59', '2020-05-18 04:39:59', NULL),
(178, 'C#', NULL, 'CP1998', '2020-05-18 04:39:59', '2020-05-18 04:39:59', NULL),
(179, 'Java', NULL, 'CP1998', '2020-05-18 04:40:00', '2020-05-18 04:40:00', NULL),
(180, 'Html', NULL, 'CP1998', '2020-05-18 04:40:00', '2020-05-18 04:40:00', NULL),
(181, 'Css', NULL, 'CP1998', '2020-05-18 04:40:00', '2020-05-18 04:40:00', NULL),
(182, 'Python', NULL, 'CP1998', '2020-05-18 04:40:00', '2020-05-18 04:40:00', NULL),
(183, 'PHP', NULL, 'CP1998', '2020-05-18 04:40:00', '2020-05-18 04:40:00', NULL),
(184, 'Javascript', NULL, 'CP1998', '2020-05-18 04:40:00', '2020-05-20 06:06:42', NULL),
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
(247, 'Python', NULL, 'CP1995', '2020-05-20 02:06:32', '2020-05-20 02:06:32', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `PostID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `likes`
--

INSERT INTO `likes` (`id`, `code`, `PostID`) VALUES
(13, 'B1704774', 9),
(14, 'B1704812', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2020_05_12_051028_acounts_table', 1),
(22, '2020_05_12_122231_posts', 1),
(23, '2020_05_12_232146_business', 1),
(24, '2020_05_15_124700_language', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `code`, `member`, `title`, `pdecription`, `type`, `min_salary`, `max_salary`, `deadline`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'CP1999', 60, 'TMT developer', 'hahahah', 0, 1500, 8000, '2020-05-31 10:55:00', '2020-05-18 04:36:12', '2020-05-18 04:36:12', NULL),
(6, 'CP1999', 60, 'Huy Developer', 'naratomo', 0, 1500, 8000, '2020-05-31 07:22:00', '2020-05-18 04:37:11', '2020-05-18 04:37:11', NULL),
(7, 'CP1998', 30, 'Tu developer', 'hhhhh', 0, 1000, 4000, '2020-05-31 07:22:00', '2020-05-18 04:50:52', '2020-05-18 04:50:52', NULL),
(8, 'CP1998', 20, 'Quân developer', 'naratomo', 0, 1000, 8000, '2020-05-31 08:33:00', '2020-05-18 04:53:23', '2020-05-18 04:53:23', NULL),
(9, 'CP1998', 40, 'Lyon.Thon', 'Ken', 1, 1000, 9000, '2020-05-31 14:23:00', '2020-05-18 04:55:35', '2020-05-18 04:55:35', NULL),
(10, 'CP1999', 60, 'TMT Lyon.Thon', 'hahahahaahahahaaha', 1, 1500, 7000, '2020-05-30 22:55:00', '2020-05-20 01:24:38', '2020-05-20 01:24:38', NULL),
(11, 'CP1999', 30, 'Tuyen dung lap trinh', 'làm việc nhàn rỗi', 0, 1000, 4000, '2020-05-30 19:22:00', '2020-05-20 01:33:51', '2020-05-20 01:33:51', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`id`, `code`, `name`) VALUES
(1, 'B1704812', 'Huỳnh Nhựt Huy'),
(2, 'B1704774', 'Tăng Minh Thông');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trendings`
--

CREATE TABLE `trendings` (
  `keyname` varchar(255) NOT NULL,
  `count` int(11) DEFAULT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `trendings`
--

INSERT INTO `trendings` (`keyname`, `count`, `image`) VALUES
('C', 9, 'C_logo.png'),
('C#', NULL, 'C_Sharp_logo.png'),
('C++', 1, 'C_plust_logo.png'),
('Css', 1, 'css_logo.png'),
('Html', NULL, 'html_logo.png'),
('Java', 3, 'java_logo.png'),
('Javascript', 6, 'javascript_logo.png'),
('Php', 1, 'php_logo.png'),
('Python', 2, 'python_logo.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `acounts`
--
ALTER TABLE `acounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `acounts_code_unique` (`code`);

--
-- Chỉ mục cho bảng `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trendings`
--
ALTER TABLE `trendings`
  ADD PRIMARY KEY (`keyname`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `acounts`
--
ALTER TABLE `acounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `business`
--
ALTER TABLE `business`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT cho bảng `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
