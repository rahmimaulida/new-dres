-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 12, 2018 at 01:17 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_dres`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_approve`
-- 

CREATE TABLE `tbl_approve` (
  `no_ticket` int(11) NOT NULL,
  `li_name` varchar(128) collate latin1_general_ci NOT NULL,
  `li_date` datetime NOT NULL,
  `eng_name` varchar(128) collate latin1_general_ci NOT NULL,
  `eng_com` text collate latin1_general_ci NOT NULL,
  `eng_date` datetime NOT NULL,
  `eng_status` varchar(12) collate latin1_general_ci NOT NULL,
  `mgr_name` varchar(128) collate latin1_general_ci NOT NULL,
  `mgr_com` text collate latin1_general_ci NOT NULL,
  `mgr_date` datetime default NULL,
  `mgr_status` varchar(12) collate latin1_general_ci NOT NULL,
  `spv` varchar(100) collate latin1_general_ci NOT NULL,
  `spv_com` text collate latin1_general_ci NOT NULL,
  `spv_date` datetime default NULL,
  `spv_status` varchar(25) collate latin1_general_ci NOT NULL,
  `finance_mgr` varchar(100) collate latin1_general_ci NOT NULL,
  `finance_mgrCom` text collate latin1_general_ci NOT NULL,
  `finance_mgrDate` datetime NOT NULL,
  `finance_mgrStatus` varchar(25) collate latin1_general_ci NOT NULL,
  `sap_admin` varchar(100) collate latin1_general_ci NOT NULL,
  `gambar` varchar(200) collate latin1_general_ci NOT NULL,
  `BackFrom` varchar(255) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`li_date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `tbl_approve`
-- 

INSERT INTO `tbl_approve` (`no_ticket`, `li_name`, `li_date`, `eng_name`, `eng_com`, `eng_date`, `eng_status`, `mgr_name`, `mgr_com`, `mgr_date`, `mgr_status`, `spv`, `spv_com`, `spv_date`, `spv_status`, `finance_mgr`, `finance_mgrCom`, `finance_mgrDate`, `finance_mgrStatus`, `sap_admin`, `gambar`, `BackFrom`) VALUES 
(1, 'Rahmi', '2018-09-06 08:48:05', 'Putra Halim', 'ghthtrhrthretgtttttttttttttttt', '2018-09-07 03:45:00', 'Approved', 'Rahmi', '-', '2018-09-07 04:05:43', 'Approved', 'adiel', 'tyhhgnghgnn', '2018-09-07 04:03:02', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '', NULL),
(2, 'Rahmi', '2018-09-06 08:48:18', 'Putra Halim', '-', '2018-09-07 05:06:17', 'Approved', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '', NULL),
(3, 'Rahmi', '2018-09-06 08:48:30', 'Putra Halim', '-', '2018-09-07 04:28:26', 'Approved', 'Rahmi', '-', '2018-09-07 05:07:36', 'Approved', 'adiel', '-', '2018-09-07 04:56:27', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '', NULL),
(4, 'Rahmi', '2018-09-06 08:48:42', '', '', '0000-00-00 00:00:00', 'reject', '', '', NULL, '', '', '', '0000-00-00 00:00:00', 'reject', '', '', '0000-00-00 00:00:00', '', '', '', 'CS&Q Manager'),
(5, 'Rahmi', '2018-09-06 08:48:55', 'Putra Halim', '-', '2018-09-07 04:15:48', 'Approved', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '', NULL),
(6, 'Rahmi', '2018-09-06 08:49:37', 'Putra Halim', '-', '2018-09-07 04:15:41', 'Approved', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '', NULL),
(7, 'Rahmi', '2018-09-06 08:49:52', 'Putra Halim', '-', '2018-09-07 04:15:00', 'Approved', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '', NULL),
(8, 'Rahmi', '2018-09-06 08:50:07', 'Putra Halim', '-', '2018-09-07 04:14:34', 'Approved', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '', NULL),
(9, 'Rahmi', '2018-09-06 08:50:19', 'Putra Halim', '-', '2018-09-07 04:06:58', 'Approved', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '', NULL),
(15, 'Rahmi', '2018-09-06 09:20:12', 'Putra Halim', 'wefwefwerwfrwrwf', '2018-09-06 09:23:07', 'Approved', 'Rahmi', '-', '2018-09-06 10:12:06', 'Approved', 'adiel', 'efffewfwefwewerewr', '2018-09-06 09:23:23', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536200356.png', NULL),
(13, 'Rahmi', '2018-09-06 09:17:01', 'Putra Halim', 'gtggggtgtgtgt', '2018-09-06 11:05:55', 'Approved', 'Rahmi', '-', '2018-09-07 04:05:08', 'Approved', 'adiel', 'rgegerererergeggergreg', '2018-09-06 11:06:35', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '', NULL),
(12, 'Rahmi', '2018-09-06 08:55:08', 'Putra Halim', 'gggfdgfdgfdggg', '2018-09-06 11:05:41', 'Approved', '', '', NULL, '', '', '', '0000-00-00 00:00:00', 'Reject', '', '', '0000-00-00 00:00:00', '', '', '', NULL),
(11, 'Rahmi', '2018-09-06 08:54:54', 'Putra Halim', 'fggfdfdfdgfdgfggfdgdfg', '2018-09-06 11:05:32', 'Approved', 'Rahmi', '-', '2018-09-07 04:05:15', 'Approved', 'adiel', 'gggfgfgffgfgfgfgfgfg', '2018-09-06 11:06:19', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '', NULL),
(10, 'Rahmi', '2018-09-06 08:54:43', 'Putra Halim', 'erewrweewrwerewrwerwer', '2018-09-06 09:00:16', 'Approved', 'Rahmi', '-', '2018-09-07 04:05:41', 'Approved', 'adiel', 'njjjmjjdnjcnjcnjchbxdchn', '2018-09-07 04:03:20', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '', NULL),
(16, 'Rahmi', '2018-09-06 10:19:42', 'Putra Halim', 'fvgfbgbgbtgbtgbgb', '2018-09-06 10:20:23', 'Approved', 'Rahmi', '-', '2018-09-06 10:34:02', 'Approved', 'adiel', 'gbgbtbtgbtgbgbgt', '2018-09-06 10:20:41', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536203972.png', NULL),
(17, 'Rahmi', '2018-09-06 11:01:59', 'Putra Halim', 'wdwwdddsdsdsd', '2018-09-06 11:02:20', 'Approved', 'Rahmi', '-', '2018-09-06 11:04:48', 'Approved', 'adiel', 'dwdwdwdsdsdsdsdsd', '2018-09-06 11:02:40', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536206517.png', NULL),
(18, 'Rahmi', '2018-09-06 02:51:07', 'Putra Halim', 'fdgfdgfdggdg', '2018-09-06 02:51:55', 'Approved', 'Rahmi', '-', '2018-09-07 04:04:46', 'Approved', 'adiel', 'gregegergegergergreg', '2018-09-06 02:52:12', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536220256.png', NULL),
(19, 'habib', '2018-09-07 10:52:19', '', '', '0000-00-00 00:00:00', 'reject', '', 'dadwadwadawdawd', NULL, '', '', '', '0000-00-00 00:00:00', 'reject', '', '', '0000-00-00 00:00:00', '', '', '1536292337.png', NULL),
(20, 'habib', '2018-09-07 11:15:28', 'Putra Halim', '-', '2018-09-07 03:33:38', 'Approved', '', '', NULL, '', 'adiel', '-', '2018-09-07 04:34:58', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536293726.png', NULL),
(21, 'habib', '2018-09-07 01:02:10', 'Putra Halim', '-', '2018-09-07 03:43:48', 'Approved', '', '', NULL, '', 'adiel', '-', '2018-09-07 04:35:35', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536300128.png', NULL),
(22, 'habib', '2018-09-07 01:10:46', '', '', '0000-00-00 00:00:00', 'reject', '', 'dawdwadawdadawdawaw', NULL, '', '', '', '0000-00-00 00:00:00', 'reject', '', '', '0000-00-00 00:00:00', '', '', '1536300644.png', 'CS&Q Manager'),
(23, 'habib', '2018-09-07 01:11:46', 'Putra Halim', '-', '2018-09-07 04:06:49', 'Approved', 'Rahmi', '-', '2018-09-07 04:22:05', 'Approved', 'adiel', '-', '2018-09-07 04:21:08', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536300703.png', NULL),
(24, 'habib', '2018-09-07 03:11:28', 'Putra Halim', '-', '2018-09-07 03:48:42', 'Approved', '', '', NULL, '', 'adiel', '-', '2018-09-07 04:37:47', 'Approved', '', '', '0000-00-00 00:00:00', '', '', '1536307886.png', NULL),
(25, 'habib', '2018-09-07 04:29:48', 'Putra Halim', '-', '2018-09-07 05:03:49', 'Approved', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536312576.png', NULL),
(26, 'habib', '2018-09-07 05:04:41', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536314679.png', NULL),
(27, 'habib', '2018-09-10 11:18:26', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536553103.png', NULL),
(28, 'habib', '2018-09-10 11:37:10', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536554227.png', NULL),
(29, 'habib', '2018-09-10 11:37:28', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536554246.png', NULL),
(30, 'habib', '2018-09-10 01:14:50', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536560087.png', NULL),
(31, 'habib', '2018-09-10 01:29:38', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536560252.png', NULL),
(32, 'habib', '2018-09-10 01:46:47', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536560252.png', NULL),
(33, 'habib', '2018-09-10 01:47:06', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536562024.png', NULL),
(34, 'habib', '2018-09-10 01:53:09', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536562387.png', NULL),
(35, 'habib', '2018-09-10 02:04:28', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536563066.png', NULL),
(36, 'habib', '2018-09-10 03:42:47', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536568790.png', NULL),
(37, 'habib', '2018-09-10 04:35:59', '', '', '0000-00-00 00:00:00', '', '', '', NULL, '', '', '', NULL, '', '', '', '0000-00-00 00:00:00', '', '', '1536572157.png', NULL);
