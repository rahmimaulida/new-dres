-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2018 at 03:34 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dres`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_reject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `gambar`, `tgl`, `id_reject`) VALUES
(1, '1536135319.png', '2018-09-05 08:15:19', 0),
(2, '1536135468.png', '2018-09-05 08:17:48', 0),
(3, '1536135468.png', '2018-09-05 08:17:49', 0),
(4, '1536135591.png', '2018-09-05 08:19:51', 0),
(5, '1536136325.png', '2018-09-05 08:32:05', 0),
(6, '1536139879.png', '2018-09-05 09:31:19', 0),
(7, '1536196873.png', '2018-09-06 01:21:13', 0),
(8, '1536197562.png', '2018-09-06 01:32:42', 0),
(9, '1536200210.png', '2018-09-06 02:16:50', 0),
(10, '1536200356.png', '2018-09-06 02:19:16', 0),
(11, '1536203972.png', '2018-09-06 03:19:32', 0),
(12, '1536206517.png', '2018-09-06 04:01:57', 0),
(13, '1536220241.png', '2018-09-06 07:50:41', 0),
(14, '1536220247.png', '2018-09-06 07:50:47', 0),
(15, '1536220252.png', '2018-09-06 07:50:52', 0),
(16, '1536220253.png', '2018-09-06 07:50:53', 0),
(17, '1536220253.png', '2018-09-06 07:50:53', 0),
(18, '1536220254.png', '2018-09-06 07:50:54', 0),
(19, '1536220254.png', '2018-09-06 07:50:54', 0),
(20, '1536220255.png', '2018-09-06 07:50:55', 0),
(21, '1536220256.png', '2018-09-06 07:50:56', 0),
(22, '1536291985.png', '2018-09-07 03:46:25', 0),
(23, '1536292337.png', '2018-09-07 03:52:17', 0),
(24, '1536292725.png', '2018-09-07 03:58:45', 0),
(25, '1536292779.png', '2018-09-07 03:59:39', 0),
(26, '1536292974.png', '2018-09-07 04:02:54', 0),
(27, '1536293726.png', '2018-09-07 04:15:26', 0),
(28, '1536300128.png', '2018-09-07 06:02:08', 0),
(29, '1536300644.png', '2018-09-07 06:10:44', 0),
(30, '1536300703.png', '2018-09-07 06:11:43', 0),
(31, '1536307886.png', '2018-09-07 08:11:26', 0),
(32, '1536312576.png', '2018-09-07 09:29:36', 0),
(33, '1536314679.png', '2018-09-07 10:04:39', 0),
(34, '1536314733.png', '2018-09-07 10:05:33', 0),
(35, '1536553103.png', '2018-09-10 04:18:23', 0),
(36, '1536554223.png', '2018-09-10 04:37:03', 0),
(37, '1536554225.png', '2018-09-10 04:37:05', 0),
(38, '1536554227.png', '2018-09-10 04:37:07', 0),
(39, '1536554246.png', '2018-09-10 04:37:26', 0),
(40, '1536560087.png', '2018-09-10 06:14:47', 0),
(41, '1536560252.png', '2018-09-10 06:17:32', 0),
(42, '1536562024.png', '2018-09-10 06:47:04', 0),
(43, '1536562387.png', '2018-09-10 06:53:07', 0),
(44, '1536563066.png', '2018-09-10 07:04:26', 0),
(45, '1536563246.png', '2018-09-10 07:07:26', 0),
(46, '1536563260.png', '2018-09-10 07:07:40', 0),
(47, '1536563352.png', '2018-09-10 07:09:12', 0),
(48, '1536564845.png', '2018-09-10 07:34:05', 0),
(49, '1536564858.png', '2018-09-10 07:34:18', 0),
(50, '1536564910.png', '2018-09-10 07:35:10', 0),
(51, '1536568573.png', '2018-09-10 08:36:13', 0),
(52, '1536568607.png', '2018-09-10 08:36:47', 0),
(53, '1536568730.png', '2018-09-10 08:38:50', 0),
(54, '1536568790.png', '2018-09-10 08:39:50', 0),
(55, '1536571884.png', '2018-09-10 09:31:24', 0),
(56, '1536572157.png', '2018-09-10 09:35:57', 0),
(57, '1536720942.png', '2018-09-12 02:55:42', 0),
(58, '1536721030.png', '2018-09-12 02:57:10', 0),
(59, '1536721034.png', '2018-09-12 02:57:14', 0),
(60, '1536721125.png', '2018-09-12 02:58:45', 0),
(61, '1536721282.png', '2018-09-12 03:01:22', 0),
(62, '1536721285.png', '2018-09-12 03:01:25', 0),
(63, '1536728479.png', '2018-09-12 05:01:19', 0),
(64, '1536728483.png', '2018-09-12 05:01:23', 0),
(65, '1536728487.png', '2018-09-12 05:01:27', 0),
(66, '1536728495.png', '2018-09-12 05:01:35', 0),
(67, '1536728605.png', '2018-09-12 05:03:25', 0),
(68, '1536728607.png', '2018-09-12 05:03:27', 0),
(69, '1536728610.png', '2018-09-12 05:03:30', 0),
(70, '1536728617.png', '2018-09-12 05:03:37', 0),
(71, '1536728621.png', '2018-09-12 05:03:41', 0),
(72, '1536728630.png', '2018-09-12 05:03:50', 0),
(73, '1536729121.png', '2018-09-12 05:12:01', 0),
(74, '1536729125.png', '2018-09-12 05:12:05', 0),
(75, '1536729133.png', '2018-09-12 05:12:13', 0),
(76, '1536736043.png', '2018-09-12 07:07:23', 0),
(77, '1536736264.png', '2018-09-12 07:11:04', 0),
(78, '1536736365.png', '2018-09-12 07:12:45', 0),
(79, '1536736365.png', '2018-09-12 07:12:45', 0),
(80, '1536736367.png', '2018-09-12 07:12:47', 0),
(81, '1536736367.png', '2018-09-12 07:12:47', 0),
(82, '1536736367.png', '2018-09-12 07:12:47', 0),
(83, '1536736368.png', '2018-09-12 07:12:48', 0),
(84, '1536736368.png', '2018-09-12 07:12:48', 0),
(85, '1536736368.png', '2018-09-12 07:12:48', 0),
(86, '1536736368.png', '2018-09-12 07:12:48', 0),
(87, '1536736368.png', '2018-09-12 07:12:48', 0),
(88, '1536736368.png', '2018-09-12 07:12:48', 0),
(89, '1536736369.png', '2018-09-12 07:12:49', 0),
(90, '1536736369.png', '2018-09-12 07:12:49', 0),
(91, '1536736369.png', '2018-09-12 07:12:49', 0),
(92, '1536736369.png', '2018-09-12 07:12:49', 0),
(93, '1536736369.png', '2018-09-12 07:12:49', 0),
(94, '1536736369.png', '2018-09-12 07:12:49', 0),
(95, '1536736370.png', '2018-09-12 07:12:50', 0),
(96, '1536736370.png', '2018-09-12 07:12:50', 0),
(97, '1536736370.png', '2018-09-12 07:12:50', 0),
(98, '1536736370.png', '2018-09-12 07:12:50', 0),
(99, '1536736370.png', '2018-09-12 07:12:50', 0),
(100, '1536736370.png', '2018-09-12 07:12:50', 0),
(101, '1536736370.png', '2018-09-12 07:12:51', 0),
(102, '1536736371.png', '2018-09-12 07:12:51', 0),
(103, '1536736371.png', '2018-09-12 07:12:51', 0),
(104, '1536736371.png', '2018-09-12 07:12:51', 0),
(105, '1536736371.png', '2018-09-12 07:12:51', 0),
(106, '1536736371.png', '2018-09-12 07:12:51', 0),
(107, '1536736371.png', '2018-09-12 07:12:51', 0),
(108, '1536736372.png', '2018-09-12 07:12:52', 0),
(109, '1536736372.png', '2018-09-12 07:12:52', 0),
(110, '1536736372.png', '2018-09-12 07:12:52', 0),
(111, '1536736372.png', '2018-09-12 07:12:52', 0),
(112, '1536736372.png', '2018-09-12 07:12:52', 0),
(113, '1536736372.png', '2018-09-12 07:12:52', 0),
(114, '1536736373.png', '2018-09-12 07:12:53', 0),
(115, '1536736373.png', '2018-09-12 07:12:53', 0),
(116, '1536736373.png', '2018-09-12 07:12:53', 0),
(117, '1536736373.png', '2018-09-12 07:12:53', 0),
(118, '1536736373.png', '2018-09-12 07:12:53', 0),
(119, '1536736373.png', '2018-09-12 07:12:53', 0),
(120, '1536736374.png', '2018-09-12 07:12:54', 0),
(121, '1536736374.png', '2018-09-12 07:12:54', 0),
(122, '1536736374.png', '2018-09-12 07:12:54', 0),
(123, '1536736374.png', '2018-09-12 07:12:54', 0),
(124, '1536736374.png', '2018-09-12 07:12:54', 0),
(125, '1536736374.png', '2018-09-12 07:12:54', 0),
(126, '1536736375.png', '2018-09-12 07:12:55', 0),
(127, '1536736375.png', '2018-09-12 07:12:55', 0),
(128, '1536736379.png', '2018-09-12 07:12:59', 0),
(129, '1536736388.png', '2018-09-12 07:13:08', 0),
(130, '1536736523.png', '2018-09-12 07:15:23', 0),
(131, '1536736626.png', '2018-09-12 07:17:06', 0),
(132, '1536736989.png', '2018-09-12 07:23:09', 0),
(133, '1536737240.png', '2018-09-12 07:27:20', 0),
(134, '1536737247.png', '2018-09-12 07:27:27', 0),
(135, '1536737261.png', '2018-09-12 07:27:41', 0),
(136, '1536737280.png', '2018-09-12 07:28:00', 0),
(137, '1536737284.png', '2018-09-12 07:28:04', 0),
(138, '1536737386.png', '2018-09-12 07:29:46', 0),
(139, '1536737390.png', '2018-09-12 07:29:50', 0),
(140, '1536737396.png', '2018-09-12 07:29:56', 0),
(141, '1536737396.png', '2018-09-12 07:29:56', 0),
(142, '1536737482.png', '2018-09-12 07:31:22', 0),
(143, '1536737482.png', '2018-09-12 07:31:22', 0),
(144, '1536737803.png', '2018-09-12 07:36:43', 0),
(145, '1536737804.png', '2018-09-12 07:36:44', 0),
(146, '1536737804.png', '2018-09-12 07:36:44', 0),
(147, '1536737804.png', '2018-09-12 07:36:44', 0),
(148, '1536737804.png', '2018-09-12 07:36:44', 0),
(149, '1536737811.png', '2018-09-12 07:36:51', 0),
(150, '1536737812.png', '2018-09-12 07:36:52', 0),
(151, '1536737814.png', '2018-09-12 07:36:54', 0),
(152, '1536738548.png', '2018-09-12 07:49:08', 0),
(153, '1536738562.png', '2018-09-12 07:49:22', 0),
(154, '1536738563.png', '2018-09-12 07:49:23', 0),
(155, '1536738565.png', '2018-09-12 07:49:25', 0),
(156, '1536738567.png', '2018-09-12 07:49:27', 0),
(157, '1536738707.png', '2018-09-12 07:51:47', 0),
(158, '1536738710.png', '2018-09-12 07:51:50', 0),
(159, '1536738795.png', '2018-09-12 07:53:15', 0),
(160, '1536738796.png', '2018-09-12 07:53:16', 0),
(161, '1536738799.png', '2018-09-12 07:53:19', 0),
(162, '1536738858.png', '2018-09-12 07:54:18', 0),
(163, '1536738956.png', '2018-09-12 07:55:56', 0),
(164, '1536738958.png', '2018-09-12 07:55:58', 0),
(165, '1536739022.png', '2018-09-12 07:57:02', 0),
(166, '1536739070.png', '2018-09-12 07:57:50', 0),
(167, '1536739071.png', '2018-09-12 07:57:51', 0),
(168, '1536739176.png', '2018-09-12 07:59:36', 0),
(169, '1536739316.png', '2018-09-12 08:01:56', 0),
(170, '1536739479.png', '2018-09-12 08:04:39', 1),
(171, '1536739513.png', '2018-09-12 08:05:13', 1),
(172, '1536739645.png', '2018-09-12 08:07:25', 5),
(173, '1536739714.png', '2018-09-12 08:08:34', 4),
(174, '1536739781.png', '2018-09-12 08:09:41', 2),
(175, '1536807876.png', '2018-09-13 03:04:36', 1),
(176, '1536808090.png', '2018-09-13 03:08:10', 1),
(177, '1536808097.png', '2018-09-13 03:08:17', 2),
(178, '1536813218.png', '2018-09-13 04:33:38', 1),
(179, '1536813395.png', '2018-09-13 04:36:35', 1),
(180, '1536813455.png', '2018-09-13 04:37:35', 6),
(181, '1536819457.png', '2018-09-13 06:17:37', 1),
(182, '1536819459.png', '2018-09-13 06:17:39', 2),
(183, '1536819461.png', '2018-09-13 06:17:41', 3),
(184, '1536819463.png', '2018-09-13 06:17:43', 4),
(185, '1536819464.png', '2018-09-13 06:17:44', 5),
(186, '1536819465.png', '2018-09-13 06:17:45', 6),
(187, '1536826538.png', '2018-09-13 08:15:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id_shift` int(11) NOT NULL,
  `shift` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id_shift`, `shift`) VALUES
(0, 'Morning'),
(1, 'Afternoon'),
(2, 'Night');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_action`
--

CREATE TABLE `tbl_action` (
  `id_action` int(11) NOT NULL,
  `sector` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `date` date NOT NULL,
  `part_no` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `issue` text COLLATE latin1_general_ci NOT NULL,
  `action` text COLLATE latin1_general_ci NOT NULL,
  `when` date NOT NULL,
  `status` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `pic` varchar(128) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_action`
--

INSERT INTO `tbl_action` (`id_action`, `sector`, `date`, `part_no`, `issue`, `action`, `when`, `status`, `pic`) VALUES
(2, 'DRIVE', '2018-08-03', '12', 'testsa', 'tes', '2018-08-04', 'Aging', 'Jessyca'),
(3, 'AUTO', '2018-08-13', '123', 'eww', 'wew', '2018-08-13', 'Open', 'dicky'),
(4, 'PCBA', '2018-08-21', '321', 'Something', 'ok', '2018-08-21', 'Open', 'adiel'),
(5, 'DRIVE', '2018-08-21', '456', 'mdsfsk', 'ndjknsdfk', '2018-08-21', 'Open', 'Rahmi'),
(6, 'PCBA', '2018-08-21', '555', 'jjdbsj', 'jbjcbjzbc', '2018-08-21', 'Open', 'adiel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_approve`
--

CREATE TABLE `tbl_approve` (
  `no_ticket` int(11) NOT NULL,
  `li_name` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `li_date` datetime NOT NULL,
  `eng_name` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `eng_com` text COLLATE latin1_general_ci NOT NULL,
  `eng_date` datetime NOT NULL,
  `eng_status` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `mgr_name` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `mgr_com` text COLLATE latin1_general_ci NOT NULL,
  `mgr_date` datetime DEFAULT NULL,
  `mgr_status` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `spv` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `spv_com` text COLLATE latin1_general_ci NOT NULL,
  `spv_date` datetime DEFAULT NULL,
  `spv_status` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `finance_mgr` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `finance_mgrCom` text COLLATE latin1_general_ci NOT NULL,
  `finance_mgrDate` datetime NOT NULL,
  `finance_mgrStatus` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `sap_admin` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `BackFrom` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_approve`
--

INSERT INTO `tbl_approve` (`no_ticket`, `li_name`, `li_date`, `eng_name`, `eng_com`, `eng_date`, `eng_status`, `mgr_name`, `mgr_com`, `mgr_date`, `mgr_status`, `spv`, `spv_com`, `spv_date`, `spv_status`, `finance_mgr`, `finance_mgrCom`, `finance_mgrDate`, `finance_mgrStatus`, `sap_admin`, `gambar`, `BackFrom`) VALUES
(1, 'Rahmi', '2018-09-06 08:48:05', 'Putra Halim', 'ghthtrhrthretgtttttttttttttttt', '2018-09-07 03:45:00', 'Approved', 'Rahmi', '-', '2018-09-07 04:05:43', 'Approved', 'adiel', 'tyhhgnghgnn', '2018-09-07 04:03:02', 'Approved', 'roman', 'jdfnsjnjsnjnsjsf', '2018-09-13 10:40:56', 'Approved', '', '', ''),
(2, 'Rahmi', '2018-09-06 08:48:18', 'Putra Halim', '-', '2018-09-07 05:06:17', 'Approved', 'Rahmi', '-', '2018-09-13 09:47:17', 'Approved', 'adiel', '-', '2018-09-13 09:07:32', 'Approved', 'roman', '-', '2018-09-13 09:51:29', 'Approved', '', '', ''),
(3, 'Rahmi', '2018-09-06 08:48:30', 'Putra Halim', '-', '2018-09-07 04:28:26', 'Approved', 'Rahmi', '-', '2018-09-07 05:07:36', 'Approved', 'adiel', '-', '2018-09-07 04:56:27', 'Approved', 'roman', '-', '2018-09-13 10:34:24', 'Approved', '', '', ''),
(4, 'Rahmi', '2018-09-06 08:48:42', '', '', '0000-00-00 00:00:00', 'reject', '', 'qwdasfaddfdfdfdsfsdfsdf', NULL, '', '', '', '0000-00-00 00:00:00', 'reject', '', '', '0000-00-00 00:00:00', '', '', '', 'CS&Q Manager'),
(5, 'Rahmi', '2018-09-06 08:48:55', 'Putra Halim', '-', '2018-09-07 04:15:48', 'Approved', '', '', '0000-00-00 00:00:00', '', 'adiel', 'rtgtrhthghrghrghrth', '2018-09-13 10:26:37', 'Reject', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(6, 'Rahmi', '2018-09-06 08:49:37', 'Putra Halim', '-', '2018-09-07 04:15:41', 'Approved', 'Rahmi', '-', '2018-09-13 09:47:25', 'Approved', 'adiel', '-', '2018-09-13 09:11:01', 'Approved', 'roman', '-', '2018-09-13 10:34:47', 'Approved', '', '', ''),
(7, 'Rahmi', '2018-09-06 08:49:52', '', '', '0000-00-00 00:00:00', 'reject', '', 'reject nya ke bagian enginner', NULL, '', '', '', '0000-00-00 00:00:00', 'reject', '', '', '0000-00-00 00:00:00', '', '', '', 'CS&Q Manager'),
(8, 'Rahmi', '2018-09-06 08:50:07', 'Putra Halim', '-', '2018-09-07 04:14:34', 'Approved', 'Rahmi', '-', '2018-09-13 10:32:32', 'Approved', 'adiel', '-', '2018-09-13 09:12:30', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(9, 'Rahmi', '2018-09-06 08:50:19', 'Putra Halim', '-', '2018-09-07 04:06:58', 'Approved', 'Rahmi', '-', '2018-09-13 10:33:18', 'Approved', 'adiel', '-', '2018-09-13 09:31:57', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(15, 'Rahmi', '2018-09-06 09:20:12', 'Putra Halim', 'wefwefwerwfrwrwf', '2018-09-06 09:23:07', 'Approved', 'Rahmi', '-', '2018-09-06 10:12:06', 'Approved', 'adiel', 'efffewfwefwewerewr', '2018-09-06 09:23:23', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536200356.png', ''),
(13, 'Rahmi', '2018-09-06 09:17:01', 'Putra Halim', 'gtggggtgtgtgt', '2018-09-06 11:05:55', 'Approved', 'Rahmi', '-', '2018-09-07 04:05:08', 'Approved', 'adiel', 'rgegerererergeggergreg', '2018-09-06 11:06:35', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(12, 'Rahmi', '2018-09-06 08:55:08', 'Putra Halim', 'gggfdgfdgfdggg', '2018-09-06 11:05:41', 'Approved', 'Rahmi', '-', '2018-09-13 02:03:36', 'Approved', 'adiel', 'sdsdsadsdsdsdsdvdssdvsddsvdsvvdsv', '2018-09-13 10:30:55', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '', 'CS&Q Manager'),
(11, 'Rahmi', '2018-09-06 08:54:54', 'Putra Halim', 'fggfdfdfdgfdgfggfdgdfg', '2018-09-06 11:05:32', 'Approved', 'Rahmi', '-', '2018-09-07 04:05:15', 'Approved', 'adiel', 'gggfgfgffgfgfgfgfgfg', '2018-09-06 11:06:19', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(10, 'Rahmi', '2018-09-06 08:54:43', 'Putra Halim', 'erewrweewrwerewrwerwer', '2018-09-06 09:00:16', 'Approved', 'Rahmi', '-', '2018-09-07 04:05:41', 'Approved', 'adiel', 'njjjmjjdnjcnjcnjchbxdchn', '2018-09-07 04:03:20', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(16, 'Rahmi', '2018-09-06 10:19:42', 'Putra Halim', 'fvgfbgbgbtgbtgbgb', '2018-09-06 10:20:23', 'Approved', 'Rahmi', '-', '2018-09-06 10:34:02', 'Approved', 'adiel', 'gbgbtbtgbtgbgbgt', '2018-09-06 10:20:41', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536203972.png', ''),
(17, 'Rahmi', '2018-09-06 11:01:59', 'Putra Halim', 'wdwwdddsdsdsd', '2018-09-06 11:02:20', 'Approved', 'Rahmi', '-', '2018-09-06 11:04:48', 'Approved', 'adiel', 'dwdwdwdsdsdsdsdsd', '2018-09-06 11:02:40', 'Approved', 'roman', 'ergergrgregergergergergerg', '2018-09-13 09:04:31', 'Approved', '', '1536206517.png', ''),
(18, 'Rahmi', '2018-09-06 02:51:07', 'Putra Halim', 'fdgfdgfdggdg', '2018-09-06 02:51:55', 'Approved', 'Rahmi', '-', '2018-09-07 04:04:46', 'Approved', 'adiel', 'gregegergegergergreg', '2018-09-06 02:52:12', 'Approved', 'roman', 'regregregegeggregreger', '2018-09-13 09:04:16', 'Approved', '', '1536220256.png', ''),
(19, 'habib', '2018-09-07 10:52:19', 'Putra Halim', '-', '2018-09-07 03:32:51', 'Approved', 'Rahmi', '-', '2018-09-13 14:08:39', 'Approved', 'adiel', '-', '2018-09-07 04:39:43', 'Approved', 'roman', '-', '2018-09-13 02:10:55', 'Approved', '', '1536292337.png', ''),
(20, 'habib', '2018-09-07 11:15:28', 'Putra Halim', '-', '2018-09-07 03:33:38', 'Approved', '', '', NULL, '', 'adiel', '-', '2018-09-07 04:34:58', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536293726.png', ''),
(21, 'habib', '2018-09-07 01:02:10', 'Putra Halim', '-', '2018-09-07 03:43:48', 'Approved', '', '', NULL, '', 'adiel', '-', '2018-09-07 04:35:35', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536300128.png', ''),
(22, 'habib', '2018-09-07 01:10:46', 'Putra Halim', 'hghhhythtyyttythtyhhththtyhyt', '2018-09-07 03:44:34', 'Approved', '', '', NULL, '', 'adiel', '-', '2018-09-07 04:16:46', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536300644.png', ''),
(23, 'habib', '2018-09-07 01:11:46', 'Putra Halim', '-', '2018-09-07 04:06:49', 'Approved', 'Rahmi', '-', '2018-09-07 04:22:05', 'Approved', 'adiel', '-', '2018-09-07 04:21:08', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536300703.png', ''),
(24, 'habib', '2018-09-07 03:11:28', 'Putra Halim', '-', '2018-09-07 03:48:42', 'Approved', '', '', NULL, '', 'adiel', '-', '2018-09-07 04:37:47', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536307886.png', ''),
(25, 'habib', '2018-09-07 04:29:48', 'Putra Halim', '-', '2018-09-07 05:03:49', 'Approved', '', '', NULL, '', 'roman', '-', '2018-09-13 08:25:10', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536312576.png', ''),
(26, 'habib', '2018-09-07 05:04:41', 'Putra Halim', 'jkbjhaBXJbjbsdbashbabfhad', '2018-09-12 07:58:39', 'Approved', '', '', NULL, '', 'adiel', 'dsfsddsfdsfsdsdfsdf', '2018-09-13 10:31:03', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536314679.png', ''),
(27, 'habib', '2018-09-10 11:18:26', 'Putra Halim', '-', '2018-09-13 09:46:34', 'Approved', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536553103.png', ''),
(28, 'habib', '2018-09-10 11:37:10', 'Putra Halim', 'sdfsdfsdfsdfdfdssdf', '2018-09-13 09:38:47', 'Approved', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536554227.png', ''),
(29, 'habib', '2018-09-10 11:37:28', 'Putra Halim', '-', '2018-09-13 01:41:24', 'Approved', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536554246.png', ''),
(30, 'habib', '2018-09-10 01:14:50', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536560087.png', ''),
(31, 'habib', '2018-09-10 01:29:38', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536560252.png', ''),
(32, 'habib', '2018-09-10 01:46:47', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536560252.png', ''),
(33, 'habib', '2018-09-10 01:47:06', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536562024.png', ''),
(34, 'habib', '2018-09-10 01:53:09', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536562387.png', ''),
(35, 'habib', '2018-09-10 02:04:28', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536563066.png', ''),
(36, 'habib', '2018-09-10 03:42:47', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536568790.png', ''),
(37, 'habib', '2018-09-10 04:35:59', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536572157.png', ''),
(38, 'habib', '2018-09-13 01:17:47', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '1536819465.png', ''),
(39, 'habib', '2018-09-14 08:32:36', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536826538.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deflist`
--

CREATE TABLE `tbl_deflist` (
  `id_defcode` int(11) NOT NULL,
  `defcode` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_deflist`
--

INSERT INTO `tbl_deflist` (`id_defcode`, `defcode`) VALUES
(11111, 'addafadaddaf'),
(11112, 'dfafafasf'),
(11113, 'aafafadf'),
(11114, 'ajdhjasndjasndjsa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delegate`
--

CREATE TABLE `tbl_delegate` (
  `id_delegate` bigint(20) NOT NULL,
  `alternate_name` varchar(100) NOT NULL,
  `reason` text NOT NULL,
  `kapan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delegateFrom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_delegate`
--

INSERT INTO `tbl_delegate` (`id_delegate`, `alternate_name`, `reason`, `kapan`, `delegateFrom`) VALUES
(1, 'gfdsdg', 'gfgghgf', '2018-09-03 22:34:19', 'Rahmi'),
(2, 'gfdsdg', 'gfgghgf', '2018-09-03 22:34:20', 'Rahmi'),
(3, 'Rahmi Maulida', 'sdasdsd', '2018-09-03 22:34:59', 'Rahmi'),
(4, 'Rahmi Maulida', 'ddede', '2018-09-06 01:59:26', 'Rahmi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `id` int(11) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`id`, `department`) VALUES
(2, 'Digital Transformation'),
(3, 'Production');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id_history` int(11) NOT NULL,
  `no_ticket` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `information` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `code_info` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_history`
--

INSERT INTO `tbl_history` (`id_history`, `no_ticket`, `information`, `date`, `code_info`) VALUES
(1, '1', 'Ticket 1 Success Added By habib At 2018-08-03 10:58:50', '2018-08-02 20:58:50', 'Add'),
(2, '1', 'Ticket No.1 Has Approved By yahoo at 2018-08-03 11:50:49', '2018-08-02 21:50:49', 'Approved'),
(3, '1', 'Ticket No.1 Has Update Comments By yahoo at 2018-08-03 02:34:36', '2018-08-02 12:34:36', 'Update Comment'),
(4, '1', 'yahoo Has Change Value Material 59641 From 12 To 14 At 2018-08-03 02:43:45', '2018-08-02 12:43:45', 'Update'),
(5, '1', 'Rahmi Has Change Value Material 59641 From 14 To 15 At 2018-08-03 03:27:03', '2018-08-02 13:27:03', 'Update'),
(6, '1', 'Ticket No.1 Has Approved By Rahmi at 2018-08-03 03:40:32', '2018-08-02 13:40:32', 'Approved'),
(7, '1', 'Ticket No.1 Has Update Comments By Rahmi at 2018-08-03 03:44:25', '2018-08-02 13:44:25', 'Update Comment'),
(8, '1', 'Ticket No.1 Has Update Status From Reject To Approved By Rahmi at 2018-08-03 04:09:23', '2018-08-02 14:09:23', 'Update Status'),
(9, '2', 'Ticket 2 Success Added By Rahmi At 2018-08-09 06:06:15', '2018-08-08 16:06:15', 'Add'),
(10, '3', 'Ticket 3 Success Added By Rahmi At 2018-08-09 06:20:23', '2018-08-08 16:20:23', 'Add'),
(11, '4', 'Ticket No.4 Success Added By habib At 2018-08-09 06:25:45', '2018-08-08 16:25:45', 'Add'),
(12, '4', 'Ticket No.4 Has Approved By Rahmi at 2018-08-09 06:36:15', '2018-08-08 16:36:15', 'Approved'),
(13, '', 'Ticket No. Has Approved By Rahmi at 2018-08-09 06:43:59', '2018-08-08 16:43:59', 'Approved'),
(14, '', 'Ticket No. Has Approved By Rahmi at 2018-08-09 06:47:34', '2018-08-08 16:47:34', 'Approved'),
(15, '', 'Ticket No. Has Approved By Rahmi at 2018-08-09 06:51:18', '2018-08-08 16:51:18', 'Approved'),
(16, '3', 'Ticket No.3 Has Approved By Rahmi at 2018-08-09 08:27:29', '2018-08-08 18:27:29', 'Approved'),
(17, '2', 'Ticket No.2 Has Rejected By Rahmi at 2018-08-09 08:32:37', '2018-08-08 18:32:37', 'Reject'),
(18, '2', 'Ticket No.2 Has Approved By Putra Halim at 2018-08-09 11:31:27', '2018-08-08 21:31:27', 'Approved'),
(19, '1', 'Ticket No.1 Has Update Comments By Rahmi at 2018-08-13 09:42:40', '2018-08-12 19:42:40', 'Update Comment'),
(20, '1', 'Ticket No.1 Has Update Comments By Rahmi at 2018-08-13 09:42:54', '2018-08-12 19:42:54', 'Update Comment'),
(21, '5', 'Ticket No.5 Has Approved By Rahmi at 2018-08-13 07:31:07', '2018-08-12 17:31:07', 'Approved'),
(22, '5', 'Ticket No.5 Has Approved By Rahmi at 2018-08-14 05:05:10', '2018-08-13 15:05:10', 'Approved'),
(23, '5', 'Ticket No.5 Has Approved By Rahmi at 2018-08-14 05:09:13', '2018-08-13 15:09:13', 'Approved'),
(24, '5', 'Ticket No.5 Has Approved By Rahmi at 2018-08-14 05:11:00', '2018-08-13 15:11:00', 'Approved'),
(25, '4', 'Ticket No.4 Has Update Comments By Rahmi at 2018-08-14 05:28:29', '2018-08-13 15:28:29', 'Update Comment'),
(26, '6', 'Ticket 6 Success Added By Rahmi At 2018-08-14 05:38:21', '2018-08-13 15:38:21', 'Add'),
(27, '6', 'Ticket No.6 Has Approved By Rahmi at 2018-08-14 05:38:42', '2018-08-13 15:38:42', 'Approved'),
(28, '5', 'Material 6554 Has Been Deleted By Rahmi At 2018-08-14 05:39:25', '2018-08-13 15:39:25', 'Delete'),
(29, '7', 'Ticket 7 Success Added By Rahmi At 2018-08-14 05:48:47', '2018-08-13 15:48:47', 'Add'),
(30, '7', 'Ticket No.7 Has Rejected By Rahmi at 2018-08-14 05:51:00', '2018-08-13 15:51:00', 'Reject'),
(31, '8', 'Ticket 8 Success Added By Rahmi At 2018-08-15 03:52:15', '2018-08-14 13:52:15', 'Add'),
(32, '9', 'Ticket No.9 Success Added By habib At 2018-08-21 07:56:22', '2018-08-20 17:56:22', 'Add'),
(33, '10', 'Ticket No.10 Success Added By habib At 2018-08-21 10:41:33', '2018-08-20 20:41:33', 'Add'),
(34, '10', 'Ticket 10 Success Added By Rahmi At 2018-08-21 12:00:01', '2018-08-20 22:00:01', 'Add'),
(35, '10', 'Ticket 10 Success Added By Rahmi At 2018-08-23 04:29:45', '2018-08-22 14:29:45', 'Add'),
(36, '9', 'Ticket No.9 Has Approved By Rahmi at 2018-08-23 04:30:05', '2018-08-22 14:30:05', 'Approved'),
(37, '6', 'Ticket No.6 Has Update Comments By Rahmi at 2018-08-23 05:04:09', '2018-08-22 15:04:09', 'Update Comment'),
(38, '9', 'Ticket No.9 Has Update Comments By Rahmi at 2018-08-23 05:07:59', '2018-08-22 15:07:59', 'Update Comment'),
(39, '3', 'Ticket No.3 Has Update Comments By Rahmi at 2018-08-23 05:20:54', '2018-08-22 15:20:54', 'Update Comment'),
(40, '3', 'Ticket No.3 Has Approved By Putra Halim at 2018-08-23 05:22:19', '2018-08-22 15:22:19', 'Approved'),
(41, '10', 'Ticket 10 Success Added By Rahmi At 2018-08-23 05:36:11', '2018-08-22 15:36:11', 'Add'),
(42, '10', 'Ticket No.10 Success Added By habib At 2018-08-23 05:39:19', '2018-08-22 15:39:19', 'Add'),
(43, '10', 'Ticket No.10 Has Rejected By Putra Halim at 2018-08-23 05:42:37', '2018-08-22 15:42:37', 'Reject'),
(44, '10', 'Ticket No.10 Has Rejected By Rahmi at 2018-08-23 05:43:58', '2018-08-22 15:43:58', 'Reject'),
(45, '10', 'Ticket No.10 Success Added By habib At 2018-08-23 05:46:54', '2018-08-22 15:46:54', 'Add'),
(46, '10', 'Ticket No.10 Success Added By habib At 2018-08-23 05:49:24', '2018-08-22 15:49:24', 'Add'),
(47, '10', 'Ticket 10 Success Added By Rahmi At 2018-08-23 05:52:33', '2018-08-22 15:52:33', 'Add'),
(48, '10', 'Material W90424083 Has Been Deleted By Rahmi At 2018-08-23 05:54:29', '2018-08-22 15:54:29', 'Delete'),
(49, '10', 'Material 707546 Has Been Deleted By Rahmi At 2018-08-23 05:54:40', '2018-08-22 15:54:40', 'Delete'),
(50, '10', 'Ticket 10 Success Added By Rahmi At 2018-08-23 06:00:27', '2018-08-22 16:00:27', 'Add'),
(51, '10', 'Ticket 10 Success Added By Rahmi At 2018-08-23 06:07:01', '2018-08-22 16:07:01', 'Add'),
(52, '10', 'Ticket 10 Success Added By Rahmi At 2018-08-23 06:09:24', '2018-08-22 16:09:24', 'Add'),
(53, '10', 'Ticket No.10 Success Added By google At 2018-08-23 06:15:48', '2018-08-22 16:15:48', 'Add'),
(54, '10', 'Ticket 10 Success Added By Rahmi At 2018-08-23 06:17:22', '2018-08-22 16:17:22', 'Add'),
(55, '10', 'Material 6554 Has Been Deleted By Rahmi At 2018-08-23 08:03:19', '2018-08-22 18:03:19', 'Delete'),
(56, '10', 'Material W90424083 Has Been Deleted By Rahmi At 2018-08-23 08:03:26', '2018-08-22 18:03:26', 'Delete'),
(57, '10', 'Material W80424541 Has Been Deleted By Rahmi At 2018-08-23 08:03:32', '2018-08-22 18:03:32', 'Delete'),
(58, '10', 'Material W90424083 Has Been Deleted By Rahmi At 2018-08-23 08:03:37', '2018-08-22 18:03:37', 'Delete'),
(59, '10', 'Material 59641 Has Been Deleted By Rahmi At 2018-08-23 08:03:42', '2018-08-22 18:03:42', 'Delete'),
(60, '10', 'Material W90424083 Has Been Deleted By Rahmi At 2018-08-23 08:03:48', '2018-08-22 18:03:48', 'Delete'),
(61, '10', 'Material W80424541 Has Been Deleted By Rahmi At 2018-08-23 08:03:52', '2018-08-22 18:03:52', 'Delete'),
(62, '10', 'Material 707546 Has Been Deleted By Rahmi At 2018-08-23 08:03:55', '2018-08-22 18:03:55', 'Delete'),
(63, '10', 'Material 6554 Has Been Deleted By Rahmi At 2018-08-23 08:04:02', '2018-08-22 18:04:02', 'Delete'),
(64, '10', 'Material W90424083 Has Been Deleted By Rahmi At 2018-08-23 08:04:30', '2018-08-22 18:04:30', 'Delete'),
(65, '10', 'Material W90424083 Has Been Deleted By Rahmi At 2018-08-23 08:04:35', '2018-08-22 18:04:35', 'Delete'),
(66, '10', 'Material W90424083 Has Been Deleted By Rahmi At 2018-08-23 08:04:39', '2018-08-22 18:04:39', 'Delete'),
(67, '10', 'Material W90424083 Has Been Deleted By Rahmi At 2018-08-23 08:04:44', '2018-08-22 18:04:44', 'Delete'),
(68, '10', 'Material 6554 Has Been Deleted By Rahmi At 2018-08-23 08:04:49', '2018-08-22 18:04:49', 'Delete'),
(69, '10', 'Material 59641 Has Been Deleted By Rahmi At 2018-08-23 08:04:55', '2018-08-22 18:04:55', 'Delete'),
(70, '10', 'Material W80424541 Has Been Deleted By Rahmi At 2018-08-23 08:05:04', '2018-08-22 18:05:04', 'Delete'),
(71, '10', 'Material W90424083 Has Been Deleted By Rahmi At 2018-08-23 08:05:09', '2018-08-22 18:05:09', 'Delete'),
(72, '10', 'Material 6554 Has Been Deleted By Rahmi At 2018-08-23 08:05:13', '2018-08-22 18:05:13', 'Delete'),
(73, '10', 'Material W80424541 Has Been Deleted By Rahmi At 2018-08-23 08:05:17', '2018-08-22 18:05:17', 'Delete'),
(74, '10', 'Material 59641 Has Been Deleted By Rahmi At 2018-08-23 08:05:21', '2018-08-22 18:05:21', 'Delete'),
(75, '10', 'Material W80424541 Has Been Deleted By Rahmi At 2018-08-23 08:05:26', '2018-08-22 18:05:26', 'Delete'),
(76, '10', 'Ticket No.10 Has Update Status From Reject To Approved By Rahmi at 2018-08-23 08:06:26', '2018-08-22 18:06:26', 'Update Status'),
(77, '10', 'Ticket No.10 Success Added By habib At 2018-08-23 08:08:49', '2018-08-22 18:08:49', 'Add'),
(78, '10', 'Ticket No.10 Has Update Comments By Rahmi at 2018-08-23 08:10:08', '2018-08-22 18:10:08', 'Update Comment'),
(79, '10', 'Ticket 10 Success Added By Rahmi At 2018-08-28 05:54:23', '2018-08-27 15:54:23', 'Add'),
(80, '10', 'Material W90424083 Has Been Deleted By Rahmi At 2018-08-28 09:03:32', '2018-08-27 19:03:32', 'Delete'),
(81, '10', 'Material 6554 Has Been Deleted By Rahmi At 2018-08-28 09:03:37', '2018-08-27 19:03:37', 'Delete'),
(82, '10', 'Ticket No.10 Success Added By habib At 2018-08-28 11:27:37', '2018-08-27 21:27:37', 'Add'),
(83, '10', 'Ticket 10 Success Added By Rahmi At 2018-08-29 04:38:26', '2018-08-28 14:38:26', 'Add'),
(84, '10', 'Ticket No.10 Has Update Comments By Rahmi at 2018-08-29 04:38:48', '2018-08-28 14:38:48', 'Update Comment'),
(85, '10', 'Ticket No.10 Success Added By habib At 2018-08-29 04:46:41', '2018-08-28 14:46:41', 'Add'),
(86, '10', 'Ticket No.10 Has Approved By yahoo at 2018-08-29 04:47:45', '2018-08-28 14:47:45', 'Approved'),
(87, '10', 'Ticket No.10 Has Approved By Rahmi at 2018-08-29 04:48:39', '2018-08-28 14:48:39', 'Approved'),
(88, '10', 'Ticket 10 Success Added By Rahmi At 2018-08-29 05:19:52', '2018-08-28 15:19:52', 'Add'),
(89, '10', 'Ticket 10 Success Added By Rahmi At 2018-08-29 09:56:16', '2018-08-28 19:56:16', 'Add'),
(90, '10', 'Ticket No.10 Has Update Comments By Rahmi at 2018-08-29 09:56:34', '2018-08-28 19:56:34', 'Update Comment'),
(91, '10', 'Ticket 10 Success Added By Rahmi At 2018-08-29 10:45:43', '2018-08-28 20:45:43', 'Add'),
(92, '2', 'Ticket No.2 Has Approved By Rahmi at 2018-08-29 10:58:01', '2018-08-28 20:58:01', 'Approved'),
(93, '1', 'Ticket 1 Success Added By Rahmi At 2018-08-29 11:13:18', '2018-08-28 21:13:18', 'Add'),
(94, '1', 'Ticket 1 Success Added By Rahmi At 2018-08-29 11:21:54', '2018-08-28 21:21:54', 'Add'),
(95, '2', 'Ticket 2 Success Added By Putra Halim At 2018-08-29 11:27:31', '2018-08-28 21:27:31', 'Add'),
(96, '3', 'Ticket No.3 Success Added By habib At 2018-08-29 11:32:16', '2018-08-28 21:32:16', 'Add'),
(97, '2', 'Ticket No.2 Has Rejected By Rahmi at 2018-08-29 11:34:26', '2018-08-28 21:34:26', 'Reject'),
(98, '2', 'Ticket No.2 Has Rejected By Putra Halim at 2018-08-29 11:37:23', '2018-08-28 21:37:23', 'Reject'),
(99, '1', 'Ticket No.1 Has Approved By Putra Halim at 2018-08-29 11:37:48', '2018-08-28 21:37:48', 'Approved'),
(100, '1', 'Ticket No.1 Has Approved By Rahmi at 2018-08-29 11:40:28', '2018-08-28 21:40:28', 'Approved'),
(101, '4', 'Ticket 4 Success Added By Rahmi At 2018-08-30 03:15:46', '2018-08-29 13:15:46', 'Add'),
(102, '5', 'Ticket 5 Success Added By Rahmi At 2018-08-30 03:18:31', '2018-08-29 13:18:31', 'Add'),
(103, '5', 'Ticket No.5 Has Approved By roman at 2018-08-30 05:03:29', '2018-08-29 15:03:29', 'Approved'),
(104, '2', 'Ticket No.2 Has Approved By roman at 2018-08-30 05:08:59', '2018-08-29 15:08:59', 'Approved'),
(105, '1', 'Ticket 1 Success Added By Rahmi At 2018-08-30 05:14:51', '2018-08-29 15:14:51', 'Add'),
(106, '1', 'Ticket No.1 Has Approved By Putra Halim at 2018-08-30 05:15:55', '2018-08-29 15:15:55', 'Approved'),
(107, '1', 'Ticket No.1 Has Update Comments By roman at 2018-08-30 05:17:26', '2018-08-29 15:17:26', 'Update Comment'),
(108, '1', 'Ticket No.1 Has Approved By Rahmi at 2018-08-30 05:17:58', '2018-08-29 15:17:58', 'Approved'),
(109, '2', 'Ticket 2 Success Added By Rahmi At 2018-08-30 05:23:57', '2018-08-29 15:23:57', 'Add'),
(110, '2', 'Ticket No.2 Has Approved By Putra Halim at 2018-08-30 05:29:52', '2018-08-29 15:29:52', 'Approved'),
(111, '3', 'Ticket 3 Success Added By Rahmi At 2018-08-30 11:51:19', '2018-08-30 04:51:19', 'Add'),
(112, '4', 'Ticket 4 Success Added By Susetyo At 2018-08-30 12:07:59', '2018-08-30 05:07:59', 'Add'),
(113, '5', 'Ticket No.5 Success Added By LIauto At 2018-08-30 12:15:54', '2018-08-30 05:15:54', 'Add'),
(114, '6', 'Ticket No.6 Success Added By LIauto At 2018-08-30 12:18:17', '2018-08-30 05:18:17', 'Add'),
(115, '5', 'Ticket No.5 Has Approved By Fajar at 2018-08-30 12:21:15', '2018-08-30 05:21:15', 'Approved'),
(116, '5', 'Ticket No.5 Has Update Comments By Fajar at 2018-08-30 12:23:29', '2018-08-30 05:23:29', 'Update Comment'),
(117, '6', 'Ticket No.6 Has Approved By Fajar at 2018-08-30 12:23:37', '2018-08-30 05:23:37', 'Approved'),
(118, '5', 'Ticket No.5 Has Update Comments By adiel at 2018-08-30 12:26:44', '2018-08-30 05:26:44', 'Update Comment'),
(119, '6', 'Ticket No.6 Has Update Comments By adiel at 2018-08-30 12:26:50', '2018-08-30 05:26:50', 'Update Comment'),
(120, '6', 'Ticket No.6 Has Update Comments By adiel at 2018-08-30 12:27:04', '2018-08-30 05:27:04', 'Update Comment'),
(121, '6', 'Ticket No.6 Has Update Comments By adiel at 2018-08-30 12:27:10', '2018-08-30 05:27:10', 'Update Comment'),
(122, '5', 'Ticket No.5 Has Rejected By Susetyo at 2018-08-30 12:31:22', '2018-08-30 05:31:22', 'Reject'),
(123, '5', 'Ticket No.5 Has Update Comments By Susetyo at 2018-08-30 12:33:05', '2018-08-30 05:33:05', 'Update Comment'),
(124, '5', 'Ticket No.5 Has Update Comments By adiel at 2018-08-30 12:35:50', '2018-08-30 05:35:50', 'Update Comment'),
(125, '5', 'Ticket No.5 Has Update Comments By adiel at 2018-08-30 12:36:16', '2018-08-30 05:36:16', 'Update Comment'),
(126, '6', 'Ticket No.6 Has Update Comments By adiel at 2018-08-30 12:37:03', '2018-08-30 05:37:03', 'Update Comment'),
(127, '4', 'Ticket No.4 Has Approved By Fajar at 2018-08-30 12:37:52', '2018-08-30 05:37:52', 'Approved'),
(128, '5', 'Material 000000000000706795 Has Been Deleted By Fajar At 2018-08-30 12:38:51', '2018-08-30 05:38:51', 'Delete'),
(129, '5', 'Ticket No.5 Has Update Status From Reject To Approved By Fajar at 2018-08-30 12:39:11', '2018-08-30 05:39:11', 'Update Status'),
(130, '6', 'Material 000000000000244807 Has Been Deleted By Fajar At 2018-08-30 12:39:39', '2018-08-30 05:39:39', 'Delete'),
(131, '6', 'Ticket No.6 Has Update Status From Reject To Approved By Fajar at 2018-08-30 12:41:08', '2018-08-30 05:41:08', 'Update Status'),
(132, '4', 'Ticket No.4 Has Update Comments By adiel at 2018-08-30 12:41:39', '2018-08-30 05:41:39', 'Update Comment'),
(133, '5', 'Ticket No.5 Has Update Comments By adiel at 2018-08-30 12:41:48', '2018-08-30 05:41:48', 'Update Comment'),
(134, '5', 'Ticket No.5 Has Update Comments By adiel at 2018-08-30 12:41:52', '2018-08-30 05:41:52', 'Update Comment'),
(135, '6', 'Ticket No.6 Has Update Comments By adiel at 2018-08-30 12:41:59', '2018-08-30 05:41:59', 'Update Comment'),
(136, '6', 'Ticket No.6 Has Update Comments By adiel at 2018-08-30 12:42:04', '2018-08-30 05:42:04', 'Update Comment'),
(137, '4', 'Ticket No.4 Has Approved By Susetyo at 2018-08-30 12:43:10', '2018-08-30 05:43:10', 'Approved'),
(138, '6', 'Ticket No.6 Has Approved By Susetyo at 2018-08-30 12:43:14', '2018-08-30 05:43:14', 'Approved'),
(139, '3', 'Ticket No.3 Has Approved By Putra Halim at 2018-08-31 10:50:05', '2018-08-31 03:50:05', 'Approved'),
(140, '2', 'Ticket No.2 Has Update Comments By roman at 2018-09-04 05:50:16', '2018-09-03 22:50:16', 'Update Comment'),
(141, '2', 'Ticket No.2 Has Rejected By Rahmi at 2018-09-04 09:12:27', '2018-09-04 02:12:27', 'Reject'),
(142, '6', 'Rahmi Has Change Value Material 000000000000667890 From 0 To 2 At 2018-09-04 09:19:16', '2018-09-04 02:19:16', 'Update'),
(143, '7', 'Ticket 7 Success Added By Rahmi At 2018-09-05 10:09:04', '2018-09-05 03:09:04', 'Add'),
(144, '8', 'Ticket 8 Success Added By Rahmi At 2018-09-05 10:32:28', '2018-09-05 03:32:28', 'Add'),
(145, '9', 'Ticket 9 Success Added By Rahmi At 2018-09-05 10:50:24', '2018-09-05 03:50:24', 'Add'),
(146, '10', 'Ticket 10 Success Added By Rahmi At 2018-09-05 11:31:21', '2018-09-05 04:31:21', 'Add'),
(147, '10', 'Ticket 10 Success Added By Rahmi At 2018-09-06 03:21:15', '2018-09-05 20:21:15', 'Add'),
(148, '10', 'Ticket 10 Success Added By Rahmi At 2018-09-06 03:32:44', '2018-09-05 20:32:44', 'Add'),
(149, '10', 'Ticket 10 Success Added By Rahmi At 2018-09-06 03:43:31', '2018-09-05 20:43:31', 'Add'),
(150, '1', 'Ticket 1 Success Added By Rahmi At 2018-09-06 03:44:56', '2018-09-05 20:44:56', 'Add'),
(151, '1', 'Ticket 1 Success Added By Rahmi At 2018-09-06 08:48:05', '2018-09-06 01:48:05', 'Add'),
(152, '2', 'Ticket 2 Success Added By Rahmi At 2018-09-06 08:48:18', '2018-09-06 01:48:18', 'Add'),
(153, '3', 'Ticket 3 Success Added By Rahmi At 2018-09-06 08:48:30', '2018-09-06 01:48:30', 'Add'),
(154, '4', 'Ticket 4 Success Added By Rahmi At 2018-09-06 08:48:42', '2018-09-06 01:48:42', 'Add'),
(155, '5', 'Ticket 5 Success Added By Rahmi At 2018-09-06 08:48:55', '2018-09-06 01:48:55', 'Add'),
(156, '6', 'Ticket 6 Success Added By Rahmi At 2018-09-06 08:49:37', '2018-09-06 01:49:37', 'Add'),
(157, '7', 'Ticket 7 Success Added By Rahmi At 2018-09-06 08:49:52', '2018-09-06 01:49:52', 'Add'),
(158, '8', 'Ticket 8 Success Added By Rahmi At 2018-09-06 08:50:07', '2018-09-06 01:50:07', 'Add'),
(159, '9', 'Ticket 9 Success Added By Rahmi At 2018-09-06 08:50:19', '2018-09-06 01:50:19', 'Add'),
(160, '10', 'Ticket 10 Success Added By Rahmi At 2018-09-06 08:50:42', '2018-09-06 01:50:42', 'Add'),
(161, '10', 'Ticket 10 Success Added By Rahmi At 2018-09-06 08:50:55', '2018-09-06 01:50:55', 'Add'),
(162, '10', 'Ticket 10 Success Added By Rahmi At 2018-09-06 08:51:40', '2018-09-06 01:51:40', 'Add'),
(163, '10', 'Ticket 10 Success Added By Rahmi At 2018-09-06 08:52:54', '2018-09-06 01:52:54', 'Add'),
(164, '11', 'Ticket 11 Success Added By Rahmi At 2018-09-06 08:53:08', '2018-09-06 01:53:08', 'Add'),
(165, '12', 'Ticket 12 Success Added By Rahmi At 2018-09-06 08:53:40', '2018-09-06 01:53:40', 'Add'),
(166, '10', 'Ticket 10 Success Added By Rahmi At 2018-09-06 08:54:43', '2018-09-06 01:54:43', 'Add'),
(167, '11', 'Ticket 11 Success Added By Rahmi At 2018-09-06 08:54:54', '2018-09-06 01:54:54', 'Add'),
(168, '12', 'Ticket 12 Success Added By Rahmi At 2018-09-06 08:55:08', '2018-09-06 01:55:08', 'Add'),
(169, '10', 'Ticket No.10 Has Approved By Putra Halim at 2018-09-06 09:00:16', '2018-09-06 02:00:16', 'Approved'),
(170, '10', 'Ticket No.10 Has Update Comments By adiel at 2018-09-06 09:01:58', '2018-09-06 02:01:58', 'Update Comment'),
(171, '13', 'Ticket 13 Success Added By Rahmi At 2018-09-06 09:17:01', '2018-09-06 02:17:01', 'Add'),
(172, '15', 'Ticket 15 Success Added By Rahmi At 2018-09-06 09:20:12', '2018-09-06 02:20:12', 'Add'),
(173, '15', 'Ticket No.15 Has Approved By Putra Halim at 2018-09-06 09:23:07', '2018-09-06 02:23:07', 'Approved'),
(174, '15', 'Ticket No.15 Has Update Comments By adiel at 2018-09-06 09:23:23', '2018-09-06 02:23:23', 'Update Comment'),
(175, '10', 'Ticket No.10 Has Rejected By Rahmi at 2018-09-06 09:44:31', '2018-09-06 02:44:31', 'Reject'),
(176, '15', 'Ticket No.15 Has Approved By Rahmi at 2018-09-06 10:12:06', '2018-09-06 03:12:06', 'Approved'),
(177, '16', 'Ticket 16 Success Added By Rahmi At 2018-09-06 10:19:42', '2018-09-06 03:19:42', 'Add'),
(178, '16', 'Ticket No.16 Has Approved By Putra Halim at 2018-09-06 10:20:23', '2018-09-06 03:20:23', 'Approved'),
(179, '16', 'Ticket No.16 Has Update Comments By adiel at 2018-09-06 10:20:41', '2018-09-06 03:20:41', 'Update Comment'),
(180, '16', 'Ticket No.16 Has Approved By Rahmi at 2018-09-06 10:34:02', '2018-09-06 03:34:02', 'Approved'),
(181, '17', 'Ticket 17 Success Added By Rahmi At 2018-09-06 11:01:59', '2018-09-06 04:01:59', 'Add'),
(182, '17', 'Ticket No.17 Has Approved By Putra Halim at 2018-09-06 11:02:20', '2018-09-06 04:02:20', 'Approved'),
(183, '17', 'Ticket No.17 Has Update Comments By adiel at 2018-09-06 11:02:40', '2018-09-06 04:02:40', 'Update Comment'),
(184, '17', 'Ticket No.17 Has Approved By Rahmi at 2018-09-06 11:04:48', '2018-09-06 04:04:48', 'Approved'),
(185, '11', 'Ticket No.11 Has Approved By Putra Halim at 2018-09-06 11:05:32', '2018-09-06 04:05:32', 'Approved'),
(186, '12', 'Ticket No.12 Has Approved By Putra Halim at 2018-09-06 11:05:41', '2018-09-06 04:05:41', 'Approved'),
(187, '13', 'Ticket No.13 Has Approved By Putra Halim at 2018-09-06 11:05:55', '2018-09-06 04:05:55', 'Approved'),
(188, '11', 'Ticket No.11 Has Update Comments By adiel at 2018-09-06 11:06:19', '2018-09-06 04:06:19', 'Update Comment'),
(189, '13', 'Ticket No.13 Has Update Comments By adiel at 2018-09-06 11:06:35', '2018-09-06 04:06:35', 'Update Comment'),
(190, '18', 'Ticket 18 Success Added By Rahmi At 2018-09-06 02:51:07', '2018-09-05 19:51:07', 'Add'),
(191, '18', 'Ticket No.18 Has Approved By Putra Halim at 2018-09-06 02:51:55', '2018-09-05 19:51:55', 'Approved'),
(192, '18', 'Ticket No.18 Has Update Comments By adiel at 2018-09-06 02:52:12', '2018-09-05 19:52:12', 'Update Comment'),
(193, '19', 'Ticket 19 Success Added By habib At 2018-09-07 10:52:19', '2018-09-07 03:52:19', 'Add'),
(194, '20', 'Ticket 20 Success Added By habib At 2018-09-07 11:15:28', '2018-09-07 04:15:28', 'Add'),
(195, '21', 'Ticket 21 Success Added By habib At 2018-09-07 01:02:10', '2018-09-06 18:02:10', 'Add'),
(196, '22', 'Ticket 22 Success Added By habib At 2018-09-07 01:10:46', '2018-09-06 18:10:46', 'Add'),
(197, '23', 'Ticket 23 Success Added By habib At 2018-09-07 01:11:46', '2018-09-06 18:11:46', 'Add'),
(198, '24', 'Ticket 24 Success Added By habib At 2018-09-07 03:11:28', '2018-09-06 20:11:28', 'Add'),
(199, '10', 'Putra Halim Propose to Delete Material 000000000000708892 At 2018-09-07 03:29:30', '2018-09-06 20:29:30', 'Delete'),
(200, '19', 'Ticket No.19 Has Approved By Putra Halim at 2018-09-07 03:32:51', '2018-09-06 20:32:51', 'Approved'),
(201, '20', 'Ticket No.20 Has Approved By Putra Halim at 2018-09-07 03:33:38', '2018-09-06 20:33:38', 'Approved'),
(202, '21', 'Ticket No.21 Has Approved By Putra Halim at 2018-09-07 03:43:48', '2018-09-06 20:43:48', 'Approved'),
(203, '22', 'Ticket No.22 Has Approved By Putra Halim at 2018-09-07 03:44:34', '2018-09-06 20:44:34', 'Approved'),
(204, '1', 'Ticket No.1 Has Approved By Putra Halim at 2018-09-07 03:45:00', '2018-09-06 20:45:00', 'Approved'),
(205, '24', 'Ticket No.24 Has Approved By Putra Halim at 2018-09-07 03:48:42', '2018-09-06 20:48:42', 'Approved'),
(206, '1', 'Ticket No.1 Has Update Comments By adiel at 2018-09-07 04:03:02', '2018-09-06 21:03:02', 'Update Comment'),
(207, '10', 'Ticket No.10 Has Update Comments By adiel at 2018-09-07 04:03:20', '2018-09-06 21:03:20', 'Update Comment'),
(208, '18', 'Ticket No.18 Has Approved By Rahmi at 2018-09-07 04:04:46', '2018-09-06 21:04:46', 'Approved'),
(209, '13', 'Ticket No.13 Has Approved By Rahmi at 2018-09-07 04:05:08', '2018-09-06 21:05:08', 'Approved'),
(210, '11', 'Ticket No.11 Has Approved By Rahmi at 2018-09-07 04:05:15', '2018-09-06 21:05:15', 'Approved'),
(211, '10', 'Ticket No.10 Has Approved By Rahmi at 2018-09-07 04:05:41', '2018-09-06 21:05:41', 'Approved'),
(212, '1', 'Ticket No.1 Has Approved By Rahmi at 2018-09-07 04:05:43', '2018-09-06 21:05:43', 'Approved'),
(213, '23', 'Ticket No.23 Has Approved By Putra Halim at 2018-09-07 04:06:49', '2018-09-06 21:06:49', 'Approved'),
(214, '9', 'Ticket No.9 Has Approved By Putra Halim at 2018-09-07 04:06:58', '2018-09-06 21:06:58', 'Approved'),
(215, '8', 'Ticket No.8 Has Approved By Putra Halim at 2018-09-07 04:14:34', '2018-09-06 21:14:34', 'Approved'),
(216, '7', 'Ticket No.7 Has Approved By Putra Halim at 2018-09-07 04:15:00', '2018-09-06 21:15:00', 'Approved'),
(217, '6', 'Ticket No.6 Has Approved By Putra Halim at 2018-09-07 04:15:41', '2018-09-06 21:15:41', 'Approved'),
(218, '5', 'Ticket No.5 Has Approved By Putra Halim at 2018-09-07 04:15:48', '2018-09-06 21:15:48', 'Approved'),
(219, '22', 'Ticket No.22 Has Update Comments By adiel at 2018-09-07 04:16:46', '2018-09-06 21:16:46', 'Update Comment'),
(220, '23', 'Ticket No.23 Has Approved By adiel at 2018-09-07 04:21:08', '2018-09-06 21:21:08', 'Approved'),
(221, '23', 'Ticket No.23 Has Approved By Rahmi at 2018-09-07 04:22:05', '2018-09-06 21:22:05', 'Approved'),
(222, '4', 'Ticket No.4 Has Approved By Putra Halim at 2018-09-07 04:25:55', '2018-09-06 21:25:55', 'Approved'),
(223, '3', 'Ticket No.3 Has Approved By Putra Halim at 2018-09-07 04:28:26', '2018-09-06 21:28:26', 'Approved'),
(224, '25', 'Ticket 25 Success Added By habib At 2018-09-07 04:29:48', '2018-09-06 21:29:48', 'Add'),
(225, '20', 'Ticket No.20 Has Approved By adiel at 2018-09-07 04:34:58', '2018-09-06 21:34:58', 'Approved'),
(226, '21', 'Ticket No.21 Has Approved By adiel at 2018-09-07 04:35:35', '2018-09-06 21:35:35', 'Approved'),
(227, '24', 'Ticket No.24 Has Approved By adiel at 2018-09-07 04:37:47', '2018-09-06 21:37:47', 'Approved'),
(228, '19', 'Ticket No.19 Has Approved By adiel at 2018-09-07 04:39:43', '2018-09-06 21:39:43', 'Approved'),
(229, '12', 'Ticket No.12 Has Approved By adiel at 2018-09-07 04:39:59', '2018-09-06 21:39:59', 'Approved'),
(230, '', 'Ticket No. Has Approved By adiel at 2018-09-07 04:42:15', '2018-09-06 21:42:15', 'Approved'),
(231, '3', 'Ticket No.3 Has Approved By adiel at 2018-09-07 04:56:27', '2018-09-06 21:56:27', 'Approved'),
(232, '4', 'Ticket No.4 Has Approved By adiel at 2018-09-07 04:56:39', '2018-09-06 21:56:39', 'Approved'),
(233, '25', 'Ticket No.25 Has Approved By Putra Halim at 2018-09-07 05:03:49', '2018-09-06 22:03:49', 'Approved'),
(234, '26', 'Ticket 26 Success Added By habib At 2018-09-07 05:04:41', '2018-09-06 22:04:41', 'Add'),
(235, '2', 'Ticket No.2 Has Approved By Putra Halim at 2018-09-07 05:06:17', '2018-09-06 22:06:17', 'Approved'),
(236, '3', 'Ticket No.3 Has Approved By Rahmi at 2018-09-07 05:07:36', '2018-09-06 22:07:36', 'Approved'),
(237, '27', 'Ticket 27 Success Added By habib At 2018-09-10 11:18:26', '2018-09-10 04:18:26', 'Add'),
(238, '28', 'Ticket 28 Success Added By habib At 2018-09-10 11:37:10', '2018-09-10 04:37:10', 'Add'),
(239, '29', 'Ticket 29 Success Added By habib At 2018-09-10 11:37:28', '2018-09-10 04:37:28', 'Add'),
(240, '30', 'Ticket 30 Success Added By habib At 2018-09-10 01:14:50', '2018-09-09 18:14:50', 'Add'),
(241, '31', 'Ticket 31 Success Added By habib At 2018-09-10 01:29:38', '2018-09-09 18:29:38', 'Add'),
(242, '32', 'Ticket 32 Success Added By habib At 2018-09-10 01:46:47', '2018-09-09 18:46:47', 'Add'),
(243, '33', 'Ticket 33 Success Added By habib At 2018-09-10 01:47:06', '2018-09-09 18:47:06', 'Add'),
(244, '34', 'Ticket 34 Success Added By habib At 2018-09-10 01:53:09', '2018-09-09 18:53:09', 'Add'),
(245, '35', 'Ticket 35 Success Added By habib At 2018-09-10 02:04:28', '2018-09-09 19:04:28', 'Add'),
(246, '36', 'Ticket 36 Success Added By habib At 2018-09-10 03:42:47', '2018-09-09 20:42:47', 'Add'),
(247, '37', 'Ticket 37 Success Added By habib At 2018-09-10 04:35:59', '2018-09-09 21:35:59', 'Add'),
(248, '4', 'Ticket No.4 Has Rejected By Rahmi at 2018-09-12 12:19:25', '2018-09-12 05:19:25', 'Reject'),
(249, '12', 'Ticket No.12 Has Rejected By Rahmi at 2018-09-12 03:56:16', '2018-09-11 20:56:16', 'Reject'),
(250, '26', 'Ticket No.26 Has Approved By Putra Halim at 2018-09-12 07:58:39', '2018-09-12 00:58:39', 'Approved'),
(251, '25', 'Ticket No.25 Has Approved By roman at 2018-09-13 08:25:10', '2018-09-13 01:25:10', 'Approved'),
(252, '18', 'Ticket No.18 Has Approved By roman at 2018-09-13 09:04:16', '2018-09-13 02:04:16', 'Approved'),
(253, '17', 'Ticket No.17 Has Approved By roman at 2018-09-13 09:04:31', '2018-09-13 02:04:31', 'Approved'),
(254, '2', 'Ticket No.2 Has Approved By adiel at 2018-09-13 09:07:32', '2018-09-13 02:07:32', 'Approved'),
(255, '6', 'Ticket No.6 Has Approved By adiel at 2018-09-13 09:11:01', '2018-09-13 02:11:01', 'Approved'),
(256, '8', 'Ticket No.8 Has Approved By adiel at 2018-09-13 09:12:30', '2018-09-13 02:12:30', 'Approved'),
(257, '9', 'Ticket No.9 Has Approved By adiel at 2018-09-13 09:31:57', '2018-09-13 02:31:57', 'Approved'),
(258, '28', 'Ticket No.28 Has Approved By Putra Halim at 2018-09-13 09:38:47', '2018-09-13 02:38:47', 'Approved'),
(259, '27', 'Ticket No.27 Has Approved By Putra Halim at 2018-09-13 09:46:34', '2018-09-13 02:46:34', 'Approved'),
(260, '2', 'Ticket No.2 Has Approved By Rahmi at 2018-09-13 09:47:17', '2018-09-13 02:47:17', 'Approved'),
(261, '6', 'Ticket No.6 Has Approved By Rahmi at 2018-09-13 09:47:25', '2018-09-13 02:47:25', 'Approved'),
(262, '2', 'Ticket No.2 Has Approved By roman at 2018-09-13 09:51:29', '2018-09-13 02:51:29', 'Approved'),
(263, '5', 'Ticket No.5 Has Rejected By adiel at 2018-09-13 10:21:18', '2018-09-13 03:21:18', 'Reject'),
(264, '5', 'Ticket No.5 Has Rejected By adiel at 2018-09-13 10:21:56', '2018-09-13 03:21:56', 'Reject'),
(265, '5', 'Ticket No.5 Has Rejected By adiel at 2018-09-13 10:25:22', '2018-09-13 03:25:22', 'Reject'),
(266, '5', 'Ticket No.5 Has Rejected By adiel at 2018-09-13 10:26:37', '2018-09-13 03:26:37', 'Reject'),
(267, '7', 'Ticket No.7 Has Rejected By adiel at 2018-09-13 10:28:37', '2018-09-13 03:28:37', 'Reject'),
(268, '12', 'Ticket No.12 Has Approved By adiel at 2018-09-13 10:30:55', '2018-09-13 03:30:55', 'Approved'),
(269, '26', 'Ticket No.26 Has Approved By adiel at 2018-09-13 10:31:03', '2018-09-13 03:31:03', 'Approved'),
(270, '8', 'Ticket No.8 Has Approved By Rahmi at 2018-09-13 10:32:32', '2018-09-13 03:32:32', 'Approved'),
(271, '9', 'Ticket No.9 Has Approved By Rahmi at 2018-09-13 10:33:18', '2018-09-13 03:33:18', 'Approved'),
(272, '5', 'Ticket No.5 Has Approved By Rahmi at 2018-09-13 10:33:29', '2018-09-13 03:33:29', 'Approved'),
(273, '3', 'Ticket No.3 Has Approved By roman at 2018-09-13 10:34:24', '2018-09-13 03:34:24', 'Approved'),
(274, '6', 'Ticket No.6 Has Approved By roman at 2018-09-13 10:34:47', '2018-09-13 03:34:47', 'Approved'),
(275, '1', 'Ticket No.1 Has Approved By roman at 2018-09-13 10:40:56', '2018-09-13 03:40:56', 'Approved'),
(276, '5', 'Ticket No.5 Has Rejected By roman at 2018-09-13 10:41:10', '2018-09-13 03:41:10', 'Reject'),
(277, '38', 'Ticket 38 Success Added By habib At 2018-09-13 01:17:47', '2018-09-12 18:17:47', 'Add'),
(278, '38', 'Ticket No.38 Has Approved By Putra Halim at 2018-09-13 01:22:45', '2018-09-12 18:22:45', 'Approved'),
(279, '4', 'Putra Halim Propose to Delete Material 000000000000059641 At 2018-09-13 01:36:23', '2018-09-12 18:36:23', 'Delete'),
(280, '4', 'Request to Delete Material 000000000000059641 Has Been Rejected By Rahmi At 2018-09-13 01:36:56', '2018-09-12 18:36:56', 'Delete'),
(281, '4', 'Putra Halim Propose to Delete Material 000000000000059641 At 2018-09-13 01:37:47', '2018-09-12 18:37:47', 'Delete'),
(282, '4', 'Material  Has Been Deleted By Rahmi At 2018-09-13 01:39:43', '2018-09-12 18:39:43', 'Delete'),
(283, '7', 'Ticket No.7 Has Approved By Putra Halim at 2018-09-13 01:41:19', '2018-09-12 18:41:19', 'Approved'),
(284, '29', 'Ticket No.29 Has Approved By Putra Halim at 2018-09-13 01:41:24', '2018-09-12 18:41:24', 'Approved'),
(285, '38', 'Ticket No.38 Has Rejected By adiel at 2018-09-13 01:45:19', '2018-09-12 18:45:19', 'Reject'),
(286, '7', 'Ticket No.7 Has Approved By adiel at 2018-09-13 01:49:57', '2018-09-12 18:49:57', 'Approved'),
(287, '5', 'Ticket No.5 Has Approved By Rahmi at 2018-09-13 01:53:19', '2018-09-12 18:53:19', 'Approved'),
(288, '7', 'Ticket No.7 Has Rejected By Rahmi at 2018-09-13 01:53:41', '2018-09-12 18:53:41', 'Reject'),
(289, '12', 'Ticket No.12 Has Approved By Rahmi at 2018-09-13 02:03:36', '2018-09-12 19:03:36', 'Approved'),
(290, '19', 'Ticket No.19 Has Approved By Rahmi at 2018-09-13 02:08:39', '2018-09-12 19:08:39', 'Approved'),
(291, '19', 'Ticket No.19 Has Approved By roman at 2018-09-13 02:10:55', '2018-09-12 19:10:55', 'Approved'),
(292, '5', 'Ticket No.5 Has Rejected By roman at 2018-09-13 02:11:18', '2018-09-12 19:11:18', 'Reject'),
(293, '39', 'Ticket 39 Success Added By habib At 2018-09-14 08:32:36', '2018-09-14 01:32:36', 'Add');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masterdata`
--

CREATE TABLE `tbl_masterdata` (
  `id_data` int(11) NOT NULL,
  `plant` varchar(6) COLLATE latin1_general_ci NOT NULL,
  `sector` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `line` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_masterdata`
--

INSERT INTO `tbl_masterdata` (`id_data`, `plant`, `sector`, `line`) VALUES
(2, 'PEL', 'AUTO', 'PEL F3 PLC'),
(3, 'PEL', 'AUTO', 'PEL F3 LEC'),
(4, 'PEL', 'AUTO', 'PEL F3 SAFETY'),
(5, 'PEL', 'AUTO', 'PEL KANPAI MEDIUM'),
(6, 'PEL', 'AUTO', 'PEL F3 MOBIYA'),
(7, 'PEL', 'AUTO', 'Brick40'),
(8, 'PEL', 'AUTO', 'Catch Up'),
(9, 'PEL', 'AUTO', 'Jiaolong'),
(10, 'PEL', 'AUTO', 'KANPAI-BIG'),
(11, 'PEL', 'AUTO', 'M238'),
(12, 'PEL', 'AUTO', 'M580'),
(13, 'PEL', 'AUTO', 'Mirano I/O'),
(14, 'PEL', 'AUTO', 'Mobiya'),
(15, 'PEL', 'DRIVE', 'ATS22'),
(16, 'PEL', 'DRIVE', 'ATS48'),
(18, 'PEL', 'AUTO', 'OPAL HIP'),
(20, 'PEL', 'AUTO', 'PEL KANPAI BIGs'),
(21, 'PEL', 'AUTO', 'PEL KANPAI BIGs'),
(23, 'PEL', 'AUTO', 'PEL KANPAI BIGs'),
(24, 'BLP', 'AUTO', 'PEL KANPAI BIG'),
(25, 'BLP', 'AUTO', 'PEL KANPAI BIG'),
(26, 'PEL', 'PCBA', 'PEL KANPAI BIG'),
(27, 'PEL', 'DRIVE', 'PEL F3 PLC'),
(28, 'PEL', 'DRIVE', 'PEL F3 PLC'),
(29, 'PEL', 'AUTO', 'PEL KANPAI BIGs'),
(36, 'PEL', 'IDMST', 'ujyyj'),
(31, 'PEL', 'DRIVE', 'PEL KANPAI BIG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material`
--

CREATE TABLE `tbl_material` (
  `id_material` bigint(11) NOT NULL,
  `material_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `material_description` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `product_family` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `price` double NOT NULL,
  `uom` varchar(25) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_material`
--

INSERT INTO `tbl_material` (`id_material`, `material_name`, `material_description`, `product_family`, `price`, `uom`) VALUES
(1, '000000000000006554', 'KUSTBEUTEL 80 X 120 X 0,05', 'MOMENTUM', 0, 'PC'),
(2, '000000000000059641', '8 TEMPERATURE SENSOR MODULE MET148-2', 'Fusion', 0, 'PC'),
(3, '000000000000059660', 'REMOTE MODULE CORD L0,6M CCA770', 'Fusion', 0, 'PC'),
(4, '000000000000059661', 'REMOTE MODULE CORD L2M CCA772', 'Fusion', 0, 'PC'),
(5, '000000000000059662', 'REMOTE MODULE CORD L4M CCA774', 'Fusion', 0, 'PC'),
(6, '000000000000244807', 'Bolt spring', 'MOMENTUM', 0.605604, 'PC'),
(7, '000000000000279111', 'PACKUNGSCHILD 127 X 37,5', 'MOMENTUM', 0, 'PC'),
(8, '000000000000445678', 'PCB. ALIM 24V Statique', 'PCBA SOLO', 0, 'PNL'),
(9, '000000000000667890', 'PCB. RADIO 24V Statique', 'PCBA SOLO', 0, 'PNL'),
(10, '000000000000700840', 'FOAM INSERT  350X100X25', 'MOMENTUM', 0, 'PC'),
(11, '000000000000703187', 'STOPPER', 'MOMENTUM', 0.136073, 'PC'),
(12, '000000000000703264', 'CODE-PIN FUER CONN MSTB', 'MOMENTUM', 0, 'PC'),
(13, '000000000000703583', 'DECKEL (GRAU)', 'MOMENTUM', 0.379337, 'PC'),
(14, '000000000000706795', 'ADAPT. TIO GND SPRING', 'MOMENTUM', 0.459768, 'PC'),
(15, '000000000000706801', 'I/O COVER', 'MOMENTUM', 0.58976, 'PC'),
(16, '000000000000706803', 'CARRIER', 'MOMENTUM', 0, 'PC'),
(17, '000000000000707115', 'BOLT-UL', 'MOMENTUM', 0.074367, 'PC'),
(18, '000000000000707181', 'TRANSFORMER UEBTR17', 'PCBA MOMENTUM', 8.4115, 'PC'),
(19, '000000000000707542', 'SHA 170ADI35000', 'MOMENTUM', 0, 'PC'),
(20, '000000000000707546', 'CARRIER ASSY ATIO', 'MOMENTUM', 1.785119, 'PC'),
(21, '000000000000707552', 'SHA 170ADO35000', 'MOMENTUM', 0, 'PC'),
(22, '000000000000707562', 'SHA 170ADM35010', 'MOMENTUM', 0, 'PC'),
(23, '000000000000707598', 'SHA 170ADI34000', 'MOMENTUM', 0, 'PC'),
(24, '000000000000707600', 'SHA 170ADO34000', 'MOMENTUM', 0, 'PC'),
(25, '000000000000707602', '170 ADM 390 30', 'MOMENTUM', 0, 'PC');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notif`
--

CREATE TABLE `tbl_notif` (
  `id_notif` int(11) NOT NULL,
  `PIC` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `link` varchar(160) COLLATE latin1_general_ci NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `position` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `sector` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_notif`
--

INSERT INTO `tbl_notif` (`id_notif`, `PIC`, `link`, `date`, `status`, `position`, `sector`) VALUES
(1, '', 'product_reject.php', '2018-09-10 01:14:50', '0', '', ''),
(2, '', 'product_reject.php', '2018-09-10 01:46:47', '0', '', 'DRIVE'),
(3, '', 'product_reject.php', '2018-09-10 01:47:06', '0', 'Line Inspector', 'DRIVE'),
(4, '', 'product_reject.php', '2018-09-10 01:53:09', '0', 'CS&Q Engineer', 'DRIVE'),
(5, '', 'product_reject.php', '2018-09-10 02:04:28', '0', 'CS&Q Engineer', 'DRIVE'),
(6, 'Putra Halim', 'product_reject.php', '2018-09-10 03:42:47', '0', 'CS&Q Engineer', 'DRIVE'),
(7, 'Putra Halim', 'product_reject.php', '2018-09-10 04:35:59', '0', 'CS&Q Engineer', 'DRIVE'),
(8, 'Putra Halim', 'product_reject.php', '2018-09-13 01:17:47', '0', 'CS&Q Engineer', 'DRIVE'),
(9, 'Putra Halim', 'product_reject.php', '2018-09-14 08:32:36', '0', 'CS&Q Engineer', 'DRIVE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_reject`
--

CREATE TABLE `tbl_prod_reject` (
  `no_ticket` int(11) DEFAULT NULL,
  `id_reject` int(11) NOT NULL,
  `material_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `material_description` varchar(75) COLLATE latin1_general_ci NOT NULL,
  `uom` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `plant` varchar(6) COLLATE latin1_general_ci NOT NULL,
  `sector` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `line` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `issue` text COLLATE latin1_general_ci NOT NULL,
  `amount` double NOT NULL,
  `action` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `pic` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `insertedBy` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `insertDate` datetime NOT NULL,
  `shift` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `statusdel` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_prod_reject`
--

INSERT INTO `tbl_prod_reject` (`no_ticket`, `id_reject`, `material_name`, `material_description`, `uom`, `qty`, `plant`, `sector`, `line`, `issue`, `amount`, `action`, `status`, `pic`, `insertedBy`, `insertDate`, `shift`, `gambar`, `statusdel`) VALUES
(1, 1, '000000000000006554', 'KUSTBEUTEL 80 X 120 X 0,05', '', 12, 'PEL', 'DRIVE', 'ATS22', 'fdfe', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 08:48:05', 0, '', 0),
(2, 2, '000000000000006554', 'KUSTBEUTEL 80 X 120 X 0,05', '', 2, 'PEL', 'DRIVE', 'ATS22', 'dfdsfsdf', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 08:48:18', 0, '', 0),
(3, 3, '000000000000059661', 'REMOTE MODULE CORD L2M CCA772', '', 3, 'PEL', 'DRIVE', 'ATS22', 'ffg', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 08:48:30', 0, '', 0),
(5, 5, '000000000000059641', '8 TEMPERATURE SENSOR MODULE MET148-2', '', 34, 'PEL', 'DRIVE', 'ATS22', 'dfdgfgfgf', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 08:48:55', 0, '', 0),
(6, 6, '000000000000006554', 'KUSTBEUTEL 80 X 120 X 0,05', '', 3, 'PEL', 'DRIVE', 'ATS22', 'dgfg', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 08:49:37', 0, '', 0),
(6, 7, '000000000000708049', 'TRANSFORMER UEBTR19', '', 2, 'PEL', 'DRIVE', 'ATS22', 'r', 2.810652, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 08:49:37', 0, '', 0),
(7, 8, '000000000000006554', 'KUSTBEUTEL 80 X 120 X 0,05', '', 90, 'PEL', 'DRIVE', 'ATS22', 'tt', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 08:49:52', 0, '', 0),
(8, 9, '000000000000059660', 'REMOTE MODULE CORD L0,6M CCA770', '', 3, 'PEL', 'DRIVE', 'ATS22', 'erer', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 08:50:07', 0, '', 0),
(9, 10, '000000000000059662', 'REMOTE MODULE CORD L4M CCA774', '', 3, 'PEL', 'DRIVE', 'ATS22', 'fdfd', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 08:50:19', 0, '', 0),
(11, 18, '000000000000059662', 'REMOTE MODULE CORD L4M CCA774', '', 2, 'PEL', 'DRIVE', 'ATS22', 'ggtgt', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 08:54:54', 0, '', 0),
(12, 19, '000000000000708055', 'CONNECTOR SHROUD', '', 45, 'PEL', 'DRIVE', 'ATS22', 'trrtt', 30.63564, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 08:55:08', 0, '', 0),
(10, 17, '000000000000708892', 'SHA MISC PACKAGE  170 ADI 350 00', '', 5, 'PEL', 'DRIVE', 'ATS22', 'grrg', 5.736315, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 08:54:43', 0, '', 0),
(13, 20, '000000000000059661', 'REMOTE MODULE CORD L2M CCA772', '', 5, 'PEL', 'DRIVE', 'ATS22', 'trgrgtr', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 09:17:01', 0, '', 0),
(14, 21, '000000000000059660', 'REMOTE MODULE CORD L0,6M CCA770', '', 34, 'PEL', 'DRIVE', 'ATS22', 'rferre', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 09:19:19', 0, '', 0),
(15, 22, '000000000000059660', 'REMOTE MODULE CORD L0,6M CCA770', '', 34, 'PEL', 'DRIVE', 'ATS22', 'rferre', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 09:20:12', 0, '', 0),
(16, 23, '000000000000708055', 'CONNECTOR SHROUD', '', 23, 'PEL', 'DRIVE', 'ATS22', 'fdfdfdg', 15.658216, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 10:19:42', 0, '', 0),
(17, 24, '000000000000059661', 'REMOTE MODULE CORD L2M CCA772', '', 90, 'PEL', 'DRIVE', 'ATS22', 'SS', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 11:01:59', 0, '', 0),
(18, 25, '000000000000006554', 'KUSTBEUTEL 80 X 120 X 0,05', '', 90, 'PEL', 'DRIVE', 'ATS22', 'Coba', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'Rahmi', '2018-09-06 02:51:07', 0, '', 0),
(19, 26, '000000000000006554', 'KUSTBEUTEL 80 X 120 X 0,05', '', 5, 'PEL', 'DRIVE', 'ATS22', 'ththt', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-07 10:52:19', 0, '', 0),
(20, 27, '000000000000059661', 'REMOTE MODULE CORD L2M CCA772', '', 5, 'PEL', 'DRIVE', 'ATS22', 'hjju', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-07 11:15:28', 0, '', 0),
(21, 28, '000000000000059660', 'REMOTE MODULE CORD L0,6M CCA770', '', 23, 'PEL', 'DRIVE', 'ATS22', 'fsfsfsf', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-07 01:02:10', 0, '', 0),
(22, 29, '000000000000244807', 'Bolt spring', '', 45, 'PEL', 'DRIVE', 'ATS22', 'htrhyhyt', 27.25218, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-07 01:10:46', 0, '', 0),
(23, 30, '000000000000006554', 'KUSTBEUTEL 80 X 120 X 0,05', '', 5, 'PEL', 'DRIVE', 'ATS22', 'thtryt', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-07 01:11:46', 0, '', 0),
(24, 31, '000000000000006554', 'KUSTBEUTEL 80 X 120 X 0,05', '', 5, 'PEL', 'DRIVE', 'ATS22', '5ynhhntr', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-07 03:11:28', 0, '', 0),
(24, 32, '000000000000059660', 'REMOTE MODULE CORD L0,6M CCA770', '', 5, 'PEL', 'DRIVE', 'ATS22', 'hhh', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-07 03:11:28', 0, '', 0),
(25, 33, '000000000000059660', 'REMOTE MODULE CORD L0,6M CCA770', '', 2, 'PEL', 'DRIVE', 'ATS22', 'dssdsdsdf', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-07 04:29:48', 0, '', 0),
(26, 34, '000000000000059641', '8 TEMPERATURE SENSOR MODULE MET148-2', '', 34, 'PEL', 'DRIVE', 'ATS22', 'dfsfsd', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-07 05:04:41', 0, '', 0),
(27, 35, '000000000000059641', '8 TEMPERATURE SENSOR MODULE MET148-2', '', 1, 'PEL', 'DRIVE', 'ATS22', 'fdgdfgfd', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 11:18:26', 0, '', 0),
(28, 36, '000000000000059641', '8 TEMPERATURE SENSOR MODULE MET148-2', '', 35, 'PEL', 'DRIVE', 'ATS22', 'thythh', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 11:37:10', 0, '', 0),
(28, 37, '000000000000244807', 'Bolt spring', '', 35, 'PEL', 'DRIVE', 'ATS22', 'thythh', 21.19614, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 11:37:10', 0, '', 0),
(29, 38, '000000000000059660', 'REMOTE MODULE CORD L0,6M CCA770', '', 2, 'PEL', 'DRIVE', 'ATS22', 'ewerwrr', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 11:37:28', 0, '', 0),
(30, 39, '000000000000059641', '8 TEMPERATURE SENSOR MODULE MET148-2', '', 1, 'PEL', 'DRIVE', 'ATS22', 's', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 01:14:50', 0, '', 0),
(31, 40, '000000000000059662', 'REMOTE MODULE CORD L4M CCA774', '', 2, 'PEL', 'DRIVE', 'ATS22', 'fdfgfdgd', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 01:29:38', 0, '', 0),
(32, 41, '000000000000059662', 'REMOTE MODULE CORD L4M CCA774', '', 2, 'PEL', 'DRIVE', 'PEL F3 PLC', 'ddgt', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 01:46:47', 0, '', 0),
(32, 42, '000000000000707115', 'BOLT-UL', '', 2, 'PEL', 'DRIVE', 'ATS22', 'ewrewrwer', 0.148734, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 01:46:47', 0, '', 0),
(33, 43, '000000000000059661', 'REMOTE MODULE CORD L2M CCA772', '', 2, 'PEL', 'DRIVE', 'ATS22', 'vsvs', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 01:47:06', 0, '', 0),
(34, 44, '000000000000059641', '8 TEMPERATURE SENSOR MODULE MET148-2', '', 5, 'PEL', 'DRIVE', 'ATS22', 'hhh', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 01:53:09', 0, '', 0),
(34, 45, '000000000000059662', 'REMOTE MODULE CORD L4M CCA774', '', 2, 'PEL', 'DRIVE', 'ATS22', 'hggjg', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 01:53:09', 0, '', 0),
(35, 46, '000000000000059660', 'REMOTE MODULE CORD L0,6M CCA770', '', 2, 'PEL', 'DRIVE', 'ATS22', 'Coba', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 02:04:28', 0, '', 0),
(36, 47, '000000000000059641', '8 TEMPERATURE SENSOR MODULE MET148-2', '', 90, 'PEL', 'DRIVE', 'ATS22', 'Coba', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 03:42:47', 0, '', 0),
(36, 48, '000000000000706803', 'CARRIER', '', 900, 'PEL', 'DRIVE', 'ATS22', 'Coba', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 03:42:47', 0, '', 0),
(36, 49, '000000000000059661', 'REMOTE MODULE CORD L2M CCA772', '', 92, 'PEL', 'DRIVE', 'ATS22', 'Coba', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 03:42:47', 0, '', 0),
(37, 50, '000000000000059641', '8 TEMPERATURE SENSOR MODULE MET148-2', '', 2, 'PEL', 'DRIVE', 'ATS22', 'Coba', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-10 04:35:59', 0, '', 0),
(38, 51, '000000000000445678', 'PCB. ALIM 24V Statique', '', 90, 'PEL', 'DRIVE', 'ATS22', 'Coba', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-13 01:17:47', 0, '', 0),
(38, 52, '000000000000059662', 'REMOTE MODULE CORD L4M CCA774', '', 2, 'PEL', 'DRIVE', 'ATS22', 'caad', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-13 01:17:47', 0, '', 0),
(38, 53, '000000000000059641', '8 TEMPERATURE SENSOR MODULE MET148-2', '', 4, 'PEL', 'DRIVE', 'PEL F3 PLC', '11112', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-13 01:17:47', 0, '', 0),
(38, 54, '000000000000059661', 'REMOTE MODULE CORD L2M CCA772', '', 90, 'PEL', 'DRIVE', 'PEL F3 PLC', '11113', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-13 01:17:47', 0, '', 0),
(38, 55, '000000000000059660', 'REMOTE MODULE CORD L0,6M CCA770', '', 2, 'PEL', 'DRIVE', 'ATS48', '11113', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-13 01:17:47', 0, '', 0),
(38, 56, '000000000000707181', 'TRANSFORMER UEBTR17', '', 90, 'PEL', 'DRIVE', 'ATS22', '11111', 757.035, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-13 01:17:47', 0, '', 0),
(39, 57, '000000000000059641', '8 TEMPERATURE SENSOR MODULE MET148-2', '', 6, 'PEL', 'DRIVE', 'ATS22', '11111', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-14 08:32:36', 0, '', 0),
(39, 58, '000000000000059662', 'REMOTE MODULE CORD L4M CCA774', '', 2, 'PEL', 'DRIVE', 'ATS22', '11113', 0, 'OPEN', 'Not Yet Approved', 'Putra Halim', 'habib', '2018-09-14 08:32:36', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `position` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`position`, `level`) VALUES
('Line Inspector', 'Operator'),
('CS&Q Engineer', 'Super User'),
('CS&Q Manager', 'Administrator'),
('Support Function', 'User'),
('Plant Director', 'User'),
('CS&Q Cluster Leader', 'User'),
('VP', 'User'),
('Guest', 'Visitor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sector`
--

CREATE TABLE `tbl_sector` (
  `id` int(11) NOT NULL,
  `sector` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sector`
--

INSERT INTO `tbl_sector` (`id`, `sector`) VALUES
(2, 'PCBA'),
(3, 'IDMST'),
(4, 'IDVSD'),
(5, 'IDHMI'),
(6, 'AUTO');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_threshold`
--

CREATE TABLE `tbl_threshold` (
  `id_threshold` int(11) NOT NULL,
  `threshold` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_threshold`
--

INSERT INTO `tbl_threshold` (`id_threshold`, `threshold`) VALUES
(1, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thresholdqty`
--

CREATE TABLE `tbl_thresholdqty` (
  `id` int(11) NOT NULL,
  `thresholdQty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_thresholdqty`
--

INSERT INTO `tbl_thresholdqty` (`id`, `thresholdQty`) VALUES
(1, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` varchar(10) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `level` varchar(15) NOT NULL,
  `position` varchar(100) NOT NULL,
  `plant` varchar(6) NOT NULL,
  `department` varchar(50) NOT NULL,
  `sector` varchar(30) NOT NULL,
  `line` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `level`, `position`, `plant`, `department`, `sector`, `line`) VALUES
('SESA010101', 'admin@example.com', '202cb962ac59075b964b07152d234b70', 'Rahmi', '082392912842', 'Administrator', 'CS&Q Manager', 'PEL', '', 'DRIVE', 'ATS48'),
('SESA012345', 'adiel@gmail.com', '202cb962ac59075b964b07152d234b70', 'adiel', '08293741237', 'User', 'Supervisor (Support Function)', 'PEL', '', 'DRIVE', 'PEL KANPAI BIG'),
('sesa147147', 'habib@gmail.com', '202cb962ac59075b964b07152d234b70', 'habib', '081232452169', 'Operator', 'Line Inspector', 'PEL', '', 'DRIVE', 'PEL KANPAI BIG'),
('sesa012934', 'dicky@gmail.com', '202cb962ac59075b964b07152d234b70', 'dicky', '082995213492', 'User', 'CS&Q Cluster Leader', 'BLP', '', 'AUTO', 'KANPAI-BIG'),
('SESA036521', 'google@gmail.com', '202cb962ac59075b964b07152d234b70', 'google', '082155332255', 'Operator', 'Line Inspector', 'PEL', '', 'AUTO', 'PEL F3 MOBIYA'),
('sesa123321', 'jeje@gmail.com', '202cb962ac59075b964b07152d234b70', 'Jessyca', '082938192840', 'User', 'VP', 'PEL', '', 'DRIVE', 'PEL F3 PLC'),
('sesa123456', 'putra_halimz@gmail.com', '202cb962ac59075b964b07152d234b70', 'Putra Halim', '082385778799', 'Super User', 'CS&Q Engineer', 'PEL', '', 'DRIVE', 'PEL KANPAI BIG'),
('SESA789789', 'sulis@gmail.com', '202cb962ac59075b964b07152d234b70', 'sulis', '082917242812', 'User', 'Plant Director', 'BLP', '', 'AUTO', 'PEL F3 SAFETY'),
('SESA101010', 'yahoo@gmail.com', '202cb962ac59075b964b07152d234b70', 'yahoo', '082319285232', 'Super User', 'CS&Q Engineer', 'PEL', '', 'DRIVE', 'PEL KANPAI BIG'),
('sesa323232', 'a@gmail.com', '202cb962ac59075b964b07152d234b70', 'Fajar', '081275790252', 'Super User', 'CS&Q Engineer', 'PEL', '', 'AUTO', 'PEL F3 SAFETY'),
('sesa121212', 'agussetiyandi47@gmail.com', '202cb962ac59075b964b07152d234b70', 'Rahmi Maulida', '81275790252', 'Administrator', 'CS&Q Manager', 'PEL', 'Digital Transformation', 'DRIVE', 'ATS48'),
('sesa010106', 'roman@gmail.com', '202cb962ac59075b964b07152d234b70', 'roman', '0895456562333', 'Finance', 'Finance Manager (Support Function) ', 'PEL', 'Finance', 'DRIVE', 'PEL F3 PLC'),
('SESA210856', 'susetyo.andono1@schneider-electric.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Susetyo', '0811692212', 'Administrator', 'CS&Q Manager', 'PEL', 'Finance', 'AUTO', 'Jiaolong'),
('sesa010105', 'knsndjsndjsnd@gmail.com', '202cb962ac59075b964b07152d234b70', 'mia', '6262226262262', 'User', 'Plant Director', 'PEL', 'Production', 'DRIVE', 'PEL F3 PLC'),
('sesa010103', 'fgfggfdgfd', '202cb962ac59075b964b07152d234b70', 'gfdsdg', '551511', 'Administrator', 'CS&Q Manager', 'PEL', 'Production', 'DRIVE', 'PEL KANPAI BIG'),
('sesa010165', 'agussetiyandi47@gmail.com', '202cb962ac59075b964b07152d234b70', 'Rahmi Maulida', '81275790252', 'Administrator', 'CS&Q Manager', 'PEL', 'Production', 'IDHMI', 'PEL KANPAI BIG'),
('sesa010198', 'agussetiyandi47@gmail.com', '202cb962ac59075b964b07152d234b70', 'Rahmi Maulida', '81275790252', 'Administrator', 'CS&Q Manager', 'PEL', 'Production', 'AUTO', 'PEL F3 LEC'),
('sesa096565', 'agussetiyandi47@gmail.com', '202cb962ac59075b964b07152d234b70', 'Rahmi Maulida', '081275790252', 'Administrator', 'CS&Q Manager', 'PEL', 'Production', 'AUTO,IDHMI,IDMST,IDVSD,PCBA,', 'Catch Up');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id_shift`);

--
-- Indexes for table `tbl_action`
--
ALTER TABLE `tbl_action`
  ADD PRIMARY KEY (`id_action`);

--
-- Indexes for table `tbl_approve`
--
ALTER TABLE `tbl_approve`
  ADD PRIMARY KEY (`li_date`);

--
-- Indexes for table `tbl_deflist`
--
ALTER TABLE `tbl_deflist`
  ADD PRIMARY KEY (`id_defcode`);

--
-- Indexes for table `tbl_delegate`
--
ALTER TABLE `tbl_delegate`
  ADD PRIMARY KEY (`id_delegate`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `tbl_masterdata`
--
ALTER TABLE `tbl_masterdata`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `tbl_material`
--
ALTER TABLE `tbl_material`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prod_reject`
--
ALTER TABLE `tbl_prod_reject`
  ADD PRIMARY KEY (`id_reject`);

--
-- Indexes for table `tbl_sector`
--
ALTER TABLE `tbl_sector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_threshold`
--
ALTER TABLE `tbl_threshold`
  ADD PRIMARY KEY (`id_threshold`);

--
-- Indexes for table `tbl_thresholdqty`
--
ALTER TABLE `tbl_thresholdqty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;
--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id_shift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_action`
--
ALTER TABLE `tbl_action`
  MODIFY `id_action` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_deflist`
--
ALTER TABLE `tbl_deflist`
  MODIFY `id_defcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11115;
--
-- AUTO_INCREMENT for table `tbl_delegate`
--
ALTER TABLE `tbl_delegate`
  MODIFY `id_delegate` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=294;
--
-- AUTO_INCREMENT for table `tbl_masterdata`
--
ALTER TABLE `tbl_masterdata`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_material`
--
ALTER TABLE `tbl_material`
  MODIFY `id_material` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_prod_reject`
--
ALTER TABLE `tbl_prod_reject`
  MODIFY `id_reject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `tbl_sector`
--
ALTER TABLE `tbl_sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_threshold`
--
ALTER TABLE `tbl_threshold`
  MODIFY `id_threshold` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_thresholdqty`
--
ALTER TABLE `tbl_thresholdqty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
