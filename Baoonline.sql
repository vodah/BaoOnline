-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2018 at 12:15 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.2.4-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Baoonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `bai_dang`
--

CREATE TABLE `bai_dang` (
  `id` int(10) UNSIGNED NOT NULL,
  `danhmuc` varchar(20) NOT NULL,
  `TieuDe` varchar(255) NOT NULL,
  `MoTa` varchar(255) NOT NULL,
  `NoiDung` longtext NOT NULL,
  `Anh` varchar(255) DEFAULT NULL,
  `NguoiDang` varchar(255) NOT NULL,
  `NoiBat` tinyint(1) DEFAULT NULL,
  `LuotXem` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bai_dang`
--

INSERT INTO `bai_dang` (`id`, `danhmuc`, `TieuDe`, `MoTa`, `NoiDung`, `Anh`, `NguoiDang`, `NoiBat`, `LuotXem`, `created_at`, `updated_at`, `slug`) VALUES
(2, 'Chính Trị', 'sdevq', 'avsa hfuahf9phasf9uh aushf9ua shf9uahsfu9hasfuhasu9fhuahfuashfuahsufhdafha u9hf9uasghf9ah9ashc ahsc[9ha89v hca89hva98[ghv98agv89agf', '<p>avv</p>', 'uploads/1523737833_4444346_36484ec2bae04d1036415c8642adc0e8.JPG', 'avda', 1, 0, '2018-04-14 13:30:33', '2018-04-14 13:30:33', 'sdevq-5ad26070ed422');

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(10) UNSIGNED NOT NULL,
  `baidang_id` int(11) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `BinhLuan` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenDanhMuc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `DanhMucCha` varchar(20) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `TenDanhMuc`, `created_at`, `updated_at`, `DanhMucCha`, `slug`) VALUES
(1, 'Xã Hội', NULL, '2018-04-12 11:03:29', '', 'xa-hoi'),
(2, 'Thể Thao', NULL, '2018-04-12 11:03:46', '', 'the-thao'),
(4, 'Chính Trị', '2018-04-11 12:56:07', '2018-04-12 11:03:50', '', 'chinh-tri'),
(5, 'Bóng Đá', '2018-04-11 13:00:51', '2018-04-12 11:05:07', 'Thể Thao', 'bong-da'),
(6, 'Sức Mạnh Số', '2018-04-11 13:03:17', '2018-04-12 10:50:58', 'Xã Hội', 'suc-manh-so'),
(11, 'Văn Hóa', '2018-04-12 10:37:48', '2018-04-12 10:50:36', '', 'van-hoa');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_05_162824_create_danh_mucs_table', 1),
(4, '2018_04_05_162920_create_bai_dangs_table', 1),
(5, '2018_04_06_174804_create_binh_luans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hà Đào', 'admin@abc.com', '$2y$10$bS10/u2twjODiyb1/OZPuO1qlvDJl10iZoNssldCBLJn/USGiWJrq', 'kNFPH7Z6KK3TwOEgJb9ERSFfWdclEebiu3EVT7Wzj4dwW9sbDLZ8xaeq6bwi', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bai_dang`
--
ALTER TABLE `bai_dang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bai_dang`
--
ALTER TABLE `bai_dang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
