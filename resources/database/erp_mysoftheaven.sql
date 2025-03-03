-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2020 at 12:19 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erp_mysoft_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `att_2020_01`
--

CREATE TABLE IF NOT EXISTS `att_2020_01` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `device_id` int(11) NOT NULL,
  `proxi_id` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('f3df294249d10b8dbefcaa5aaf4102c4', '192.168.20.87', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 1578213596, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:8:"HRPERVEZ";s:9:"logged_in";b:1;}'),
('e62b8aa96f0790c3b1732240063fab24', '192.168.20.131', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 1578213977, ''),
('8f8778c976fe03e9d6e0b89d1ccd1425', '192.168.20.118', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0', 1578213463, ''),
('b341a978a84951c8d2d1329a260e57e6', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1; rv:57.0) Gecko/20100101 Firefox/57.0', 1578213906, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:6:"Mizan1";s:9:"logged_in";b:1;}'),
('97a143ee88a79520c80571fd86d3a021', '192.168.20.87', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 1578207311, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:8:"HRPERVEZ";s:9:"logged_in";b:1;}'),
('6052f926f7982dd8a681f073f6ea7dae', '192.168.20.87', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 1578206564, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:8:"HRPERVEZ";s:9:"logged_in";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `company_infos`
--

CREATE TABLE IF NOT EXISTS `company_infos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name_english` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `company_name_bangla` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `company_add_english` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `company_add_bangla` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `company_phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company_logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company_signature` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company_infos`
--

INSERT INTO `company_infos` (`id`, `company_name_english`, `company_name_bangla`, `company_add_english`, `company_add_bangla`, `company_phone`, `company_logo`, `company_signature`) VALUES
(1, 'Bando Fashions Ltd. ', 'ব্যান্ডো ফ্যাশনস লিমিটেড', 'Bade Kalameshar, K.B. Bazar, Gazipur', 'বাদে কলমেশ্বর, কে.বি. বাজার, গাজীপুর', '02-9291211-3', 'e4006-companylogo.png', 'decf3-gmsignature.png');

-- --------------------------------------------------------

--
-- Table structure for table `dash_board_date`
--

CREATE TABLE IF NOT EXISTS `dash_board_date` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dash_board_date`
--

INSERT INTO `dash_board_date` (`id`, `date`) VALUES
(1, '2019-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_en` varchar(50) NOT NULL,
  `name_bn` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name_en`, `name_bn`) VALUES
(1, 'Dhaka', ''),
(2, 'Naogaon', ''),
(3, 'Mymensingh', ''),
(4, 'Kishoreganj', ''),
(5, 'Gopalganj', ''),
(6, 'Nilphamari', ''),
(7, 'Chandpur', ''),
(8, 'Sherpur', ''),
(9, 'Narayanganj', ''),
(10, 'Brahman Baria', ''),
(11, 'Panchagar', ''),
(12, 'None', ''),
(13, 'Narshingdi', ''),
(14, 'Jamalpur', ''),
(15, 'Gazipur', ''),
(16, 'Barguna', ''),
(17, 'Sunamganj', ''),
(18, 'Shariatpur', ''),
(19, 'Kurigram', ''),
(20, 'Natore', ''),
(21, 'Bogra', ''),
(22, 'Tangail', ''),
(23, 'Faridpur', ''),
(24, 'Lakshmipur', ''),
(25, 'Jhalakathi', ''),
(26, 'Habiganj', ''),
(27, 'Sylhet', ''),
(28, 'Chittagong', ''),
(29, 'Rajshahi', ''),
(30, 'Bhola', ''),
(31, 'Noakhali', ''),
(32, 'Bagerhat', ''),
(33, 'Narail', ''),
(34, 'Barisal', ''),
(35, 'Pabna', ''),
(36, 'Khulna', ''),
(37, 'Satkhira', ''),
(38, 'Rangpur', ''),
(39, 'Gaibandha', ''),
(40, 'Patuakhali', ''),
(41, 'Jhenaidah', ''),
(42, 'Netrakona', ''),
(43, 'Magura', ''),
(44, 'Thakurgaon', ''),
(45, 'Sirajganj', ''),
(46, 'Dinajpur', ''),
(47, 'Kushtia', ''),
(48, 'Comilla', ''),
(49, 'Lalmonirhat', ''),
(50, 'Madaripur', ''),
(51, 'Feni', ''),
(52, 'Moulvibazar', ''),
(53, 'Pirojpur', ''),
(54, 'Jessore', ''),
(55, 'Chapai Nawabganj', ''),
(56, 'Jaipurhat', ''),
(57, 'Munshiganj', ''),
(58, 'Meherpur', ''),
(59, 'Rajbari', ''),
(60, 'Chuadanga', ''),
(61, 'Khagrachari', ''),
(62, 'Manikganj', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_number` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('All','Unit') NOT NULL COMMENT '0=Memeber,  1=Admin,  2=User,  3=Report',
  `unit_name` int(11) NOT NULL,
  `status` enum('Enable','Disable') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_number` (`id_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `id_number`, `password`, `level`, `unit_name`, `status`) VALUES
(1, 'kamrul', '123', 'All', 0, 'Enable'),
(2, 'manageradmin', 'milton#1988', 'Unit', 1, 'Enable'),
(3, 'HRPERVEZ', 'HRPERVEZ', 'Unit', 1, 'Enable'),
(4, 'Mizan1', 'mizaN1', 'Unit', 1, 'Enable'),
(6, 'BFL', 'bfl', 'Unit', 1, 'Enable'),
(7, 'HRNAZMUL', 'HRNAZMUL', 'Unit', 1, 'Enable'),
(8, 'HRMANAGER', 'HRMANAGER', 'Unit', 1, 'Enable'),
(9, 'GGM', 'GGM', 'Unit', 1, 'Enable'),
(10, 'GMADMIN', 'gmadmin', 'Unit', 1, 'Enable'),
(11, 'CGBFL', 'CGBFL', 'Unit', 1, 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `member_acl_level`
--

CREATE TABLE IF NOT EXISTS `member_acl_level` (
  `username_id` int(10) NOT NULL,
  `acl_id` int(10) NOT NULL,
  `priority` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_acl_level`
--

INSERT INTO `member_acl_level` (`username_id`, `acl_id`, `priority`) VALUES
(1, 1, 1),
(1, 2, 2),
(2, 1, 11),
(2, 11, 12),
(2, 4, 0),
(2, 9, 1),
(2, 3, 2),
(2, 13, 3),
(2, 6, 4),
(2, 5, 5),
(2, 12, 6),
(2, 7, 7),
(2, 8, 8),
(2, 2, 9),
(2, 14, 10),
(9, 6, 1),
(3, 1, 2),
(9, 1, 0),
(8, 5, 2),
(8, 6, 1),
(3, 6, 0),
(3, 5, 1),
(4, 4, 2),
(4, 9, 3),
(4, 1, 4),
(4, 3, 5),
(4, 13, 6),
(4, 6, 7),
(4, 5, 8),
(4, 12, 9),
(4, 7, 10),
(4, 8, 11),
(4, 2, 12),
(6, 10, 1),
(6, 4, 2),
(6, 9, 3),
(6, 1, 4),
(6, 3, 5),
(6, 13, 6),
(6, 6, 7),
(6, 5, 8),
(6, 12, 9),
(6, 7, 10),
(6, 8, 11),
(6, 2, 12),
(10, 12, 7),
(10, 5, 6),
(7, 1, 0),
(10, 6, 5),
(10, 13, 4),
(7, 6, 1),
(7, 5, 2),
(10, 3, 3),
(10, 1, 2),
(10, 9, 1),
(8, 1, 0),
(10, 4, 0),
(9, 5, 2),
(4, 14, 0),
(4, 11, 1),
(6, 14, 0),
(10, 7, 8),
(10, 8, 9),
(10, 2, 10),
(10, 14, 11),
(10, 11, 12),
(11, 10, 0),
(11, 4, 1),
(11, 9, 2),
(11, 1, 3),
(11, 3, 4),
(11, 13, 5),
(11, 6, 6),
(11, 5, 7),
(11, 12, 8),
(11, 7, 9),
(11, 8, 10),
(11, 2, 11),
(11, 14, 12);

-- --------------------------------------------------------

--
-- Table structure for table `member_acl_list`
--

CREATE TABLE IF NOT EXISTS `member_acl_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `acl_name` varchar(100) NOT NULL,
  `last_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `member_acl_list`
--

INSERT INTO `member_acl_list` (`id`, `acl_name`, `last_update`) VALUES
(1, 'Employee Information', '2012-05-29 15:09:05'),
(2, 'Setup ', '2012-05-05 15:29:17'),
(3, 'Entry System', '2012-05-05 15:29:34'),
(4, 'Attendance Process', '2012-05-05 05:00:00'),
(5, 'HRM Reports', '2012-05-05 00:00:00'),
(6, 'HRM Others Report', '2012-05-16 00:00:00'),
(7, 'Salary Process', '2012-05-05 00:00:00'),
(8, 'Salary Report', '2012-05-05 00:00:00'),
(9, 'Database Backup', '2012-05-05 00:00:00'),
(10, 'Administrator', '2012-05-05 00:00:00'),
(11, 'User Manage', '2012-05-05 00:00:00'),
(12, 'Manual Entry', '2014-07-04 16:44:25'),
(13, 'EOT Modify', '2014-07-08 10:45:22'),
(14, 'Super Admin', '2015-01-19 12:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `pr_advance_loan`
--

CREATE TABLE IF NOT EXISTS `pr_advance_loan` (
  `loan_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(100) NOT NULL,
  `loan_amt` double(10,2) NOT NULL,
  `pay_amt` double(10,2) NOT NULL,
  `loan_date` date NOT NULL,
  `loan_status` int(2) NOT NULL COMMENT '1=open 2=close',
  PRIMARY KEY (`loan_id`),
  KEY `emp_id` (`emp_id`),
  KEY `loan_date` (`loan_date`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pr_advance_loan`
--

INSERT INTO `pr_advance_loan` (`loan_id`, `emp_id`, `loan_amt`, `pay_amt`, `loan_date`, `loan_status`) VALUES
(1, '19010111', 4000.00, 4000.00, '2019-08-31', 2),
(2, '19010112', 4412.00, 4412.00, '2019-08-01', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pr_advance_loan_pay_history`
--

CREATE TABLE IF NOT EXISTS `pr_advance_loan_pay_history` (
  `pay_id` int(10) NOT NULL AUTO_INCREMENT,
  `loan_id` int(10) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `pay_amount` double(10,2) NOT NULL,
  `pay_month` date NOT NULL,
  PRIMARY KEY (`pay_id`),
  KEY `emp_id` (`emp_id`),
  KEY `pay_month` (`pay_month`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pr_advance_loan_pay_history`
--

INSERT INTO `pr_advance_loan_pay_history` (`pay_id`, `loan_id`, `emp_id`, `pay_amount`, `pay_month`) VALUES
(1, 1, '19010111', 4000.00, '2019-08-01'),
(2, 2, '19010112', 4412.00, '2019-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `pr_allowance_bills`
--

CREATE TABLE IF NOT EXISTS `pr_allowance_bills` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `emp_category` varchar(20) NOT NULL,
  `first_tiffin_allo_min` int(5) NOT NULL,
  `second_tiffin_allo_min` int(5) NOT NULL,
  `night_allo_min` int(5) NOT NULL,
  `tiffin_allo_amount` double(10,2) NOT NULL,
  `night_allo_amount` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_attn_bonus`
--

CREATE TABLE IF NOT EXISTS `pr_attn_bonus` (
  `ab_id` int(10) NOT NULL AUTO_INCREMENT,
  `ab_rule_name` varchar(50) NOT NULL,
  `ab_rule` int(10) NOT NULL,
  PRIMARY KEY (`ab_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `pr_attn_bonus`
--

INSERT INTO `pr_attn_bonus` (`ab_id`, `ab_rule_name`, `ab_rule`) VALUES
(1, 'Operator', 400),
(2, 'No', 0),
(4, 'Asst. Sew M/C Op.', 200),
(5, 'Cutting ', 400),
(6, 'Cleaner', 200),
(7, 'Ironman', 400),
(8, 'Line Ironman', 400),
(9, 'Loader', 400),
(10, 'Quality', 400),
(11, 'Asst. Quality', 200),
(12, 'Finishing', 400),
(13, 'Input Man', 400),
(14, 'Asst. Input Man', 200),
(15, 'Asst. Finishing', 200);

-- --------------------------------------------------------

--
-- Table structure for table `pr_attn_file_upload`
--

CREATE TABLE IF NOT EXISTS `pr_attn_file_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `upload_date` date NOT NULL,
  `status` enum('No','Yes') NOT NULL,
  `last_process_time` datetime NOT NULL,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_attn_summary_level`
--

CREATE TABLE IF NOT EXISTS `pr_attn_summary_level` (
  `group_id` int(11) NOT NULL,
  `desig_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_attn_summary_list`
--

CREATE TABLE IF NOT EXISTS `pr_attn_summary_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `attn_group` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_bonus`
--

CREATE TABLE IF NOT EXISTS `pr_bonus` (
  `bn_id` int(10) NOT NULL,
  `bn_festival` varchar(50) NOT NULL,
  `bn_perfor` varchar(50) NOT NULL,
  `bn_other` varchar(50) NOT NULL,
  PRIMARY KEY (`bn_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_bonus_rules`
--

CREATE TABLE IF NOT EXISTS `pr_bonus_rules` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `emp_type` enum('Staff','Worker') NOT NULL,
  `bonus_first_month` int(4) NOT NULL,
  `bonus_second_month` int(11) NOT NULL,
  `bonus_amount` enum('Basic','Gross') NOT NULL,
  `bonus_amount_fraction` double(10,2) NOT NULL,
  `bonus_percent` double(10,2) NOT NULL,
  `effective_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `pr_bonus_rules`
--

INSERT INTO `pr_bonus_rules` (`id`, `unit_id`, `emp_type`, `bonus_first_month`, `bonus_second_month`, `bonus_amount`, `bonus_amount_fraction`, `bonus_percent`, `effective_date`) VALUES
(2, 2, 'Staff', 12, 500, 'Gross', 1.00, 50.00, '2014-07-28'),
(4, 2, 'Worker', 12, 500, 'Basic', 1.00, 50.00, '2014-07-28'),
(39, 1, 'Worker', 1, 3, 'Basic', 1.00, 4.00, '2019-08-01'),
(40, 1, 'Worker', 3, 6, 'Basic', 1.00, 40.00, '2019-08-01'),
(41, 1, 'Worker', 6, 99999, 'Basic', 1.00, 50.00, '2019-08-01'),
(42, 1, 'Staff', 1, 3, 'Gross', 0.60, 30.00, '2019-08-01'),
(43, 1, 'Staff', 3, 6, 'Gross', 0.60, 40.00, '2019-08-01'),
(44, 1, 'Staff', 6, 99999, 'Gross', 0.60, 50.00, '2019-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `pr_budget`
--

CREATE TABLE IF NOT EXISTS `pr_budget` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `line_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `budget_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `pr_budget`
--

INSERT INTO `pr_budget` (`id`, `line_name`, `designation`, `total`, `budget_date`) VALUES
(1, 'Admin', 'QC', 1, '0000-00-00'),
(2, 'Sewing # 1', 'Jr. Operator', 2, '0000-00-00'),
(3, 'Office', 'Sr. QC', 2, '0000-00-00'),
(4, 'Sewing # 1', 'Jr. Operator', 25, '0000-00-00'),
(5, 'Sewing # 2', 'Operator', 15, '0000-00-00'),
(9, 'Sewing # 2', 'Jr HP', 12, '0000-00-00'),
(8, 'Sewing # 1', 'HP', 10, '0000-00-00'),
(10, 'Sewing # 2', 'HP', 10, '0000-00-00'),
(11, 'Sewing # 3', 'Jr HP', 12, '0000-00-00'),
(12, 'Sewing # 2', 'QI', 10, '0000-00-00'),
(13, 'Sewing # 1', 'QI', 14, '0000-00-00'),
(14, 'Sewing # 2', 'Sr QI', 10, '0000-00-00'),
(15, 'Sewing # 1', 'Jr QI', 14, '0000-00-00'),
(16, 'Sewing # 4', 'Jr QI', 14, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pr_deduct`
--

CREATE TABLE IF NOT EXISTS `pr_deduct` (
  `deduct_id` int(10) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `tax_deduct` int(10) NOT NULL,
  `others_deduct` int(10) NOT NULL,
  `deduct_month` date NOT NULL,
  PRIMARY KEY (`deduct_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_dept`
--

CREATE TABLE IF NOT EXISTS `pr_dept` (
  `dept_id` int(10) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(100) NOT NULL,
  `dept_bangla` varchar(100) CHARACTER SET utf8 NOT NULL,
  `unit_id` int(11) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pr_dept`
--

INSERT INTO `pr_dept` (`dept_id`, `dept_name`, `dept_bangla`, `unit_id`) VALUES
(1, 'Store', 'স্টোর', 1),
(2, 'Maintenance', 'রক্ষণাবেক্ষণ', 1),
(3, 'Management', 'ব্যবস্থাপনা', 1),
(4, 'None', '', 1),
(5, 'Production', 'উৎপাদন', 1),
(6, 'Quality', 'কোয়ালিটি', 1),
(7, 'Admin  4th Class', 'এডমিন ৪র্থ শ্রেণী', 1),
(8, 'Production-1', 'উৎপাদন -১', 1),
(9, 'Production-2', 'উৎপাদন - ২', 1),
(10, 'Production-3', 'উৎপাদন -৩', 1),
(11, 'Cleaning', 'ক্লিনিং', 1),
(12, 'Cutting', 'কাটিং', 1),
(13, 'Sample', 'সাম্পল', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pr_designation`
--

CREATE TABLE IF NOT EXISTS `pr_designation` (
  `desig_id` int(10) NOT NULL AUTO_INCREMENT,
  `desig_name` varchar(150) NOT NULL,
  `desig_bangla` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `unit_id` int(11) NOT NULL,
  PRIMARY KEY (`desig_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=122 ;

--
-- Dumping data for table `pr_designation`
--

INSERT INTO `pr_designation` (`desig_id`, `desig_name`, `desig_bangla`, `unit_id`) VALUES
(1, 'Deputy Manager ( Store )', 'উপ - পরিচালক ( স্টোর )', 1),
(2, 'Store Officer', 'স্টোর অফিসার', 1),
(3, 'Asst. Store Officer', 'সহকারী স্টোর অফিসার', 1),
(4, 'Needle Issue Man', 'নিডেল ইস্যু ম্যান', 1),
(5, 'Manager (Store)', 'ম্যানেজার (স্টোর)', 1),
(6, 'Store Executive', 'স্টোর এক্সিকিউটিভ', 1),
(7, 'Purches Officer', 'ক্রয় অফিসার', 1),
(8, 'Manager (Maintenance)', 'ম্যানেজার (রক্ষণাবেক্ষণ)', 1),
(9, 'Boiler Operator', 'বয়লার অপারেটর', 1),
(10, 'Mechanic Incharge', 'মেকানিক ইনচার্জ', 1),
(11, 'Electrician', 'ইলেকট্রিশিয়ান', 1),
(12, 'Electrical Engineer', 'তড়িৎ প্রকৌশলী', 1),
(13, 'Mechanic', 'মেকানিক', 1),
(14, 'Asst. Engineer', 'সহকারী প্রকৌশলী', 1),
(15, 'Jr. Electrician', 'জুনিয়র ইলেক্ট্রিসিয়ান', 1),
(16, 'Head Of Production', 'উৎপাদন প্রধান', 1),
(17, 'General Manager', 'মহাব্যবস্থাপক', 1),
(18, 'G M ( Quality)', 'জি এম (কোয়ালিটি)', 1),
(19, 'General Manager (Group)', 'মহাব্যবস্থাপক (গ্রুপ)', 1),
(20, 'Office Asst.', 'অফিস সহকারী', 1),
(21, 'Accounts Officer', 'হিসাব কর্মকর্তা', 1),
(22, 'Driver', 'চালক', 1),
(23, 'Medical Asst.', 'মেডিকেল সহকারী', 1),
(24, 'Admin Officer', 'প্রশাসনিক কর্মকর্তা', 1),
(25, 'Asst. Manager ( HR & Compliance)', 'সহকারী ম্যানেজার (এইচআর এবং সম্মতি)', 1),
(26, 'Asst. Admin Officer', 'সহকারী এডমিন অফিসার', 1),
(27, 'Sr. H R Officer', 'সিনিয়ার এইচ আর অফিসার', 1),
(28, 'Asst. Manager( Administration)', 'সহকারী ম্যানেজার(এডমিন)', 1),
(29, 'Officer ( Compliance & Safety)', 'অফিসার (কমপ্লায়েন্স এবং সেইফটি)', 1),
(30, 'Asst. Driver', 'সহকারী ড্রাইভার', 1),
(31, 'Doctor', 'ডাক্তার', 1),
(32, 'C F D S Monitor', 'সি এফ ডি এস মনিটর', 1),
(33, 'System Administrator', 'সিস্টেম এডমিনিট্টটর', 1),
(34, 'H. R. Officer', 'এইচ এর অফিসার', 1),
(35, 'Welfare Officer', 'ওয়েলফেয়ার অফিসার ', 1),
(36, 'Cleaner In-charge', 'কিলিনার ইনর্চজ', 1),
(37, 'Carpenter', 'কারটপেন্টার', 1),
(38, 'Canteen Man', 'ক্যান্টিন ম্যান', 1),
(39, 'Plumber', 'পিলামবার', 1),
(40, 'Pattern Master', 'প্যার্টান মাষ্টার', 1),
(41, 'Sample Man', 'স্যাম্পল ম্যান', 1),
(42, 'Training Center Incharge', 'ট্রেনিং সেন্টার ইনর্চাজ', 1),
(43, 'C A D Incharge', 'ক্যাড ইনর্চাজ', 1),
(44, 'Lab Technician', 'ল্যাব টেকনিসিয়ান', 1),
(45, 'Sample Incharge', 'স্যাম্পল ইনচার্জ', 1),
(46, 'Cutter Man', 'কাটার ম্যান', 1),
(47, 'Asst. Cad', 'সহকারী ক্যাড', 1),
(48, 'Sample Q. C', 'স্যাম্পল কি. সি.', 1),
(49, 'Supervisor', 'সুপারভাইজার', 1),
(50, 'Asst. Supervisor', 'সহকারী সুপারভাইজার', 1),
(51, 'Reporter', 'রিপোটার', 1),
(52, 'Production Manager', 'প্রোডাকশন ম্যানেজার', 1),
(53, 'I E Officer', 'আই ই অফিসার', 1),
(54, 'Asst. Ie Officer', 'সহকারী আই ই অফিসার', 1),
(55, 'Marker Man', 'মার্কার ম্যান', 1),
(56, 'Cutting Incharge', 'কাটিং ইনচার্জ', 1),
(57, 'Sr.  Manager', 'সিনিয়র ম্যানেজার', 1),
(58, 'Dice Master', 'ডাইস মাস্টার', 1),
(59, 'Auditor', 'অডিটর', 1),
(60, 'Quality Controller', 'কোয়ালিটি কন্ট্রোলার', 1),
(61, 'Finishing Supervisor', 'ফিনিশিং সুপারভাইজার', 1),
(62, 'Finishing Incharge', 'ফিনিশিং ইনচার্জ', 1),
(63, 'Metal Detector Man', 'মেটাল ডিডেক্টর ম্যান', 1),
(64, 'Quality Incharge', 'কোয়ালিটি ইনচার্জ', 1),
(65, 'A. G. M ( Quality)', 'এ. জি. এম. ( কোয়ালিটি )', 1),
(66, 'Asst. D Q A', 'সহকারী ডি কিউ এ', 1),
(67, 'Auditor Incharge', 'অডিটর ইনচার্জ', 1),
(68, 'Quality Manager', 'কোয়ালিটি ম্যানেজার', 1),
(69, 'Fusing Incharge', 'ফিউজিং ইনচার্জ', 1),
(70, 'None', '', 1),
(71, 'Sweeper', 'সুইপার', 1),
(72, 'Loader', 'লোডার', 1),
(73, 'Office Peon', 'সহকারী অফিস', 1),
(74, 'Cooker', 'কুকার', 1),
(75, 'Input Man', 'ইনপুট ম্যান', 1),
(76, 'Scissor Man', 'সিজার ম্যান', 1),
(77, 'Jr.Scissor Man', 'জুনি: সিজার ম্যান', 1),
(78, 'Gr. Numbering Man', 'সাধা:নাম্বারিং ম্যান', 1),
(79, 'Jr.Input Man', 'জুনি: ইনপুট ম্যান', 1),
(80, 'Asst. Cutting .', 'কাটিং সহকারী', 1),
(81, 'Gr.Scissor Man', 'সাধা: সিজার ম্যান', 1),
(82, 'Jr. Numbering Man', 'জুুনি: নাম্বারিং ম্যান', 1),
(83, 'Asst. Numbering Man', 'সহ: নাম্বারিং ম্যান', 1),
(84, 'Gr. Bundling Man', 'সাধা: বান্ডিলিং ম্যান', 1),
(85, 'Gr.Input Man', 'সাধা: ইনপুট ম্যান', 1),
(86, 'Asst. Bundling Man', 'সহকারী বান্ডিলিং ম্যান', 1),
(87, 'Sr. Sew. M/c. Op.', 'সি: সুইং মেশিং অপারেটর', 1),
(88, 'Sew. M/c. Op.', 'সুইং মেশিং অপারেটর', 1),
(89, 'Asst. Sew. M/c. Op.', 'সহ: সুইং মেশিং অপারেটর', 1),
(90, 'Gr. Sew. M/c. Op.', 'সাধ: সুইং মেশিন অপারেটর', 1),
(91, 'Jr. Sew. M/c. Op.', 'জুনি: সুইং মেশিং অপারেটর', 1),
(92, 'Line Ironman', 'লাইন আইরনম্যান', 1),
(93, 'Asst. Input Man', 'সহ: ইনপুট ম্যান', 1),
(94, 'Gr. Fusing Machine Operator', 'সাধা: ফিউজিং মে: অপারেটর', 1),
(95, 'Jr. Fusing Machine Operator', 'জুনি: ফিউজিং মে: অপারেটর', 1),
(97, 'Packing Man', 'প্যাকিং ম্যান', 1),
(98, 'Ironman', 'আইরনম্যান', 1),
(99, 'Asst. Finishing', 'ফিনিশিং সহকারী', 1),
(100, 'Folder Man', 'ফোল্ডার ম্যান', 1),
(101, 'Spot Remover Man', 'স্পট রিমোভার ম্যান', 1),
(102, 'Pollyman', 'পলিম্যান', 1),
(103, 'Jr. Folder Man', 'জুনি: ফোল্ডার ম্যান', 1),
(104, 'Jr. Packing Man', 'জুনি: প্যাকিং ম্যান', 1),
(105, 'Gr. Sukker Machine Operator', 'সাধা: সাকার মে: অপারেটর', 1),
(106, 'Quality  Inspector', 'কোয়ালিটি ইন্সপেক্টর', 1),
(107, 'Gr. Quality Inspector', 'সাধা: কোয়ালিটি ইন্সপেক্টর', 1),
(108, 'Asst. Quality Inspector', 'সহ: কোয়ালিটি ইন্সপেক্টর', 1),
(109, 'Jr. Quality Inspector', 'জুনি: কোয়ালিটি ইন্সপেক্টর', 1),
(110, 'Asst. Fusing', 'ফিউজিং সহকারী', 1),
(111, 'Cleaner', 'ক্লিনার', 1),
(112, 'Child Caretaker', 'শিশু পরিচর্যাকারী', 1),
(113, 'Jr. Admin Officer', 'জুনঃ এডমন অফসার', 1),
(114, 'Q.M.S. ( Auditor )', 'কিউ. এম. এস. ( অডিটর )', 1),
(115, 'Jr. Polyman', 'জুনিয়র পলিম্যান', 1),
(116, 'Lab Assistant ', 'ল্যাব সহকারী', 1),
(117, 'Jr. Ironman', 'জুনিয়র আয়রনম্যান', 1),
(118, 'Sr. Sample Man', 'সিনিয়র স্যাম্পল ম্যান', 1),
(119, 'Sr. Cutter Man', ' সিনিয়র কাটার ম্যান', 1),
(120, 'Sr. Sample Q.C.', 'সিনিয়র স্যাম্পল কি. সি.', 1),
(121, 'Officer (Safety)', 'অফিসার (সেইফটি)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pr_due_amt`
--

CREATE TABLE IF NOT EXISTS `pr_due_amt` (
  `due_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(100) NOT NULL,
  `due_amt` double(10,2) NOT NULL,
  `pay_amt` double(10,2) NOT NULL,
  `due_date` date NOT NULL,
  `due_status` int(2) NOT NULL COMMENT '1=open 2=close',
  PRIMARY KEY (`due_id`),
  KEY `emp_id` (`emp_id`),
  KEY `due_date` (`due_date`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_due_pay_history`
--

CREATE TABLE IF NOT EXISTS `pr_due_pay_history` (
  `pay_id` int(10) NOT NULL AUTO_INCREMENT,
  `due_id` int(10) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `pay_amount` double(10,2) NOT NULL,
  `pay_month` date NOT NULL,
  PRIMARY KEY (`pay_id`),
  KEY `emp_id` (`emp_id`),
  KEY `pay_month` (`pay_month`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_earn_2019`
--

CREATE TABLE IF NOT EXISTS `pr_earn_2019` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `emp_id` varchar(200) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `line_id` int(11) NOT NULL,
  `desig_id` int(11) NOT NULL,
  `gross_sal` int(11) NOT NULL,
  `basic_sal` int(11) NOT NULL,
  `P` int(11) NOT NULL,
  `A` int(11) NOT NULL,
  `W` int(11) NOT NULL,
  `H` int(11) NOT NULL,
  `L` int(11) NOT NULL,
  `el` int(11) NOT NULL,
  `cl` int(11) NOT NULL,
  `sl` int(11) NOT NULL,
  `ml` int(11) NOT NULL,
  `ttl_wk_days` int(11) NOT NULL,
  `pay_days` int(11) NOT NULL,
  `pay_days_com` int(11) NOT NULL,
  `earn_leave` double(10,2) NOT NULL,
  `earn_leave_com` double(10,2) NOT NULL,
  `net_pay` float NOT NULL,
  `net_pay_com` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_earn_leave_block`
--

CREATE TABLE IF NOT EXISTS `pr_earn_leave_block` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `block_year` date NOT NULL,
  `status` enum('Block','Unblock') NOT NULL,
  `username` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_earn_leave_paid`
--

CREATE TABLE IF NOT EXISTS `pr_earn_leave_paid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `emp_id` varchar(200) NOT NULL,
  `paid_leave` varchar(100) NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_earn_setup`
--

CREATE TABLE IF NOT EXISTS `pr_earn_setup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attribute` varchar(200) NOT NULL,
  `value` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pr_earn_setup`
--

INSERT INTO `pr_earn_setup` (`id`, `attribute`, `value`) VALUES
(1, 'earn status', 'PAWHL'),
(2, 'earn leave count', '18'),
(3, 'earn salary', 'basic_sal');

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_add`
--

CREATE TABLE IF NOT EXISTS `pr_emp_add` (
  `emp_id` varchar(100) NOT NULL,
  `emp_pre_add` varchar(200) CHARACTER SET utf8 NOT NULL,
  `emp_par_add` varchar(200) CHARACTER SET utf8 NOT NULL,
  `emp_par_dis` varchar(50) CHARACTER SET utf8 NOT NULL,
  `emp_pre_add_ban` varchar(200) CHARACTER SET utf8 NOT NULL,
  `emp_par_add_ban` varchar(200) CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf32 NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_attn_bonus`
--

CREATE TABLE IF NOT EXISTS `pr_emp_attn_bonus` (
  `abe_id` int(10) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `abe_amout` int(10) NOT NULL,
  `abe_month` date NOT NULL,
  PRIMARY KEY (`abe_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_blood_groups`
--

CREATE TABLE IF NOT EXISTS `pr_emp_blood_groups` (
  `blood_id` int(2) NOT NULL,
  `blood_name` varchar(20) NOT NULL,
  PRIMARY KEY (`blood_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_emp_blood_groups`
--

INSERT INTO `pr_emp_blood_groups` (`blood_id`, `blood_name`) VALUES
(0, 'None'),
(1, 'A+'),
(2, 'A-'),
(3, 'B+'),
(4, 'B-'),
(5, 'AB+'),
(6, 'AB-'),
(7, 'O+'),
(8, 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_com_info`
--

CREATE TABLE IF NOT EXISTS `pr_emp_com_info` (
  `emp_id` varchar(100) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `floor_id` int(10) NOT NULL,
  `emp_dept_id` int(10) NOT NULL,
  `emp_sec_id` int(10) NOT NULL,
  `wk_type_id` int(10) NOT NULL,
  `work_process_id` int(10) NOT NULL,
  `emp_line_id` int(10) NOT NULL,
  `emp_desi_id` int(10) NOT NULL,
  `emp_operation_id` int(10) NOT NULL,
  `emp_position_id` int(10) NOT NULL,
  `emp_sts_id` int(10) NOT NULL,
  `emp_sal_gra_id` int(10) NOT NULL,
  `emp_cat_id` int(10) NOT NULL,
  `emp_shift` int(10) NOT NULL,
  `weekend` int(10) NOT NULL,
  `gross_sal` int(100) NOT NULL,
  `com_gross_sal` int(11) NOT NULL,
  `ot_entitle` int(10) NOT NULL COMMENT '0=Yes,1=No',
  `ot_show_in` int(10) NOT NULL,
  `transport` int(2) NOT NULL COMMENT '0=Yes,1=No',
  `lunch` int(2) NOT NULL COMMENT '0=Yes,1=No',
  `att_bonus` int(10) NOT NULL,
  `salary_draw` int(2) NOT NULL COMMENT '1=cash 2=bank',
  `salary_type` int(2) NOT NULL,
  `emp_join_date` date NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_edu`
--

CREATE TABLE IF NOT EXISTS `pr_emp_edu` (
  `emp_id` varchar(100) NOT NULL,
  `emp_degree` varchar(100) NOT NULL,
  `emp_pass_yr` varchar(50) NOT NULL,
  `emp_ins` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_job_desc`
--

CREATE TABLE IF NOT EXISTS `pr_emp_job_desc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_desig_id` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `pr_emp_job_desc`
--

INSERT INTO `pr_emp_job_desc` (`id`, `emp_desig_id`, `description`) VALUES
(1, 46, '<p>\r\n	০১ . কাটিংম্যানের নিদের্শ অনুযায়ী লে দেয়া ।<br />\r\n	০২ . কাপড়ের কাটপিছ বেচে গেলে তা সুন্দর গুছানো৤</p>\r\n<p>\r\n	০৩. মার্কার করা হয়ে গেলে যদি গাম টেপ লাগে তা লাগিয়ে দেয়া৤</p>\r\n<p>\r\n	০৪. কাটিং করা হয়ে গেলে রেসিউ অনুযায়ী বান্ডিল করা৤</p>\r\n<p>\r\n	০৫. কারখানার সকল নিয়ম কানুন মেনে চলা এবং অপ্রয়োজনীয় কথা না বলা৤</p>\r\n<p>\r\n	০৬. কর্তৃপক্ষের দেয়া অন্যান্য নির্দেশ সমূহ পালন করা ও পিপিই ব্যবহার করা৤</p>\r\n'),
(2, 21, '<p>\r\n	০১. সুপারভাইজার /লাইন চিফ এর নির্দেশ অনুযায়ী মেশিন পরিচালনা করা৤</p>\r\n<p>\r\n	০২. নিজের মেশিন দৈনিক পরিষ্কার করা৤</p>\r\n<p>\r\n	০৩. কাজে কোনরুপ বিঘ্ন ঘটলে সুপারভাইজার/লইনচিফ এর পরার্মশ মত কাজ করা৤</p>\r\n<p>\r\n	০৪. মেশিনে সমস্যা দেখা দিলে তাৎক্ষনিক মেকানিক্স এর দ্বারা মেরামত কারা ৤</p>\r\n<p>\r\n	০৫. কারখানার সকল নিয়ম কানুন মেনে চলা এবং অপ্রয়োজনীয় কথা না বলা ৤</p>\r\n<p>\r\n	০৬. কতৃপক্ষর দেয়া অনান্য নির্দেশ সমূহ পালন করা এবং পিপিই ব্যবহার করা ৤</p>\r\n'),
(3, 25, '<p>\r\n	০১. স্যম্পল কোয়ালিটি অনুযায়ী গার্মেন্টসকে আইরন করা ৤</p>\r\n<p>\r\n	০২. কতৃপক্ষের দেয়া অন্যান্য&nbsp; নির্দেশ সমূহ পালন করা এবং পিপিই ব্যবহার করা ৤</p>\r\n'),
(4, 12, '<p>\r\n	০১. মেজারমেন্ট সিট অনুযয়ী প্রতিটি গার্মেন্টসকে মেজারমেন্ট করা ৤</p>\r\n<p>\r\n	০২. প্রতিাট গার্মেন্ট পরীক্ষা করতঃ কোয়ালিটি গার্মেন্টস নিরূপন করা৤</p>\r\n<p>\r\n	০৩. নিডিল মার্ক , নিডিল হোল, কিরিচ মার্কা ও অন্যান্য সমস্যা নিরূপন করা৤</p>\r\n<p>\r\n	০৫. প্রতিটি নন কনফারমিটি গার্মেন্টসকে নির্ণেয় করা ৤</p>\r\n<p>\r\n	০৫. ষ্টাইল অনুযায়ী প্রতিটি&nbsp; এক্সেসরিজ সংযুক্ত রয়েছে কিনা নিরুপন করা৤</p>\r\n<p>\r\n	০৬. র্কতৃপক্ষের দেয়া অন্যান্য নির্দেশ সমূহ পালন করা এবং পিপিই ব্যবহার করা৤</p>\r\n'),
(5, 23, '<p>\r\n	০১. লট নম্বর অনুযয়ী অপারেটরকে কাটিং গার্মেন্টস সরবরাহ করা৤</p>\r\n<p>\r\n	০২. কাটিং গার্মেন্টস এর বিভিন্ন অংশের নম্বর মিলিয়ে শটিং করা ৤</p>\r\n<p>\r\n	০৩. সেলাইকৃত বিভিন্ন অংশ সমূহ একত্রে মিলানো৤</p>\r\n<p>\r\n	০৪. সেলাইকৃত গার্মেন্টস এর সুতা কাটা৤</p>\r\n<p>\r\n	০৫. কাটিং সেকশন হইতে কাটিং গার্মেন্টস সমূহ সুইং সেকশনে আনা৤</p>\r\n<p>\r\n	০৬. কারখানার সকল নিয়ম কানুন মেনে চলা এবং অপ্রয়োজনে কথা না বলা৤</p>\r\n<p>\r\n	০৭. কর্তৃপক্ষের দেয়া অন্যান্য নির্দেশ সমূহ পালন করা ও পিপিই ব্যবহার করা৤</p>\r\n'),
(6, 26, '<p>\r\n	০১. ফোল্ডিংম্যানদের প্যাটার্ন অনুযায়ী ফোল্ডিং করা৤</p>\r\n<p>\r\n	০২. আয়রন সেকশন থেকে আসা আয়রন করা বডি চেক করা৤</p>\r\n<p>\r\n	০৩. কারখানার সকল নিয়ম কানুন মেনে চলা৤</p>\r\n<p>\r\n	০৪. অপ্রয়োজনে কথা না বলা৤</p>\r\n<p>\r\n	০৫. কর্তৃপক্ষের দেয়া অন্যান্য নির্দেশ সমূহ পালন করা ও পিপিই ব্যবহার করা৤</p>\r\n'),
(7, 28, '<p>\r\n	০১. তৈরি গার্মেন্টস সমূহের সুতা ঝেড়ে প্রস্তুত করা৤</p>\r\n<p>\r\n	০২. আয়রন করার জন্য কালার ও সাইজ অনুযায়ী পৃথক পৃথক বান্ডিল করতঃ আয়রন টেবিলে পৌছে দেয়া৤</p>\r\n<p>\r\n	০৩. আয়রনকৃত গার্মেন্টস সমূহ ফোল্ডিং টেবিলে পৌছে দেয়া৤</p>\r\n<p>\r\n	০৪. পলিব্যাগে গার্মেন্টেস সমূহ প্রবেশ করতঃ পলি ব্যাগের মুখ বন্ধ করে দেয়া৤</p>\r\n<p>\r\n	০৫. ফোল্ডিংকৃত গার্মেন্টস সমূহ ঝুড়ির মাধ্যমে প্যাকিং ম্যানের নিকট পৌছে দেয়া৤</p>\r\n<p>\r\n	০৬. কারখানার সকল নিয়মকানুন মেনে চলা এবং অপ্রয়োজনে কথা না বলা৤</p>\r\n<p>\r\n	০৭. কর্তৃপক্ষের দেয়া অন্যান্য নির্দেশ সমূহ পালন করা ও পিপিই ব্যবহার করা৤</p>\r\n'),
(8, 105, '<p>\r\n	০১. রেশিও, কালার আনুযায়ী তৈরীকৃত গার্মেন্টসকে পৃথককরণ।</p>\r\n<p>\r\n	০২. বিলিষ্টারকৃত গার্মেন্টকে রেশিও কার্টন এ প্যাকিং করা।</p>\r\n<p>\r\n	০৩.কার্টন নাম্বারিং করা।</p>\r\n<p>\r\n	0৪ কতৃপক্ষের দেয়া অন্যান্য নির্দেশ সমূহ পালন করা ও পিপিই ব্যাবহার করা।</p>\r\n'),
(9, 28, '<p>\r\n	০১. তৈরীকৃত গার্মেন্টস সমূহের সুতা ঝেড়ে প্রস্তুত করা।</p>\r\n<p>\r\n	০২. আইরন করার জন্য কালার ও সাইজ অনুযায়ী পৃথক পৃথক বান্ডিল করতঃ আয়রন টেবিলে পৌছেঁ দেয়া ।</p>\r\n<p>\r\n	০৩. আয়রনকৃত গার্মেন্টস সমূহ ফোল্ডিং টেবিলে পৌছেঁ &zwj; &zwj;দেয়া।</p>\r\n<p>\r\n	০৪.পলিব্যাগ গার্মেন্ট সমুহ প্রবেশ করতঃ পলি ব্যাগে মুখ বন্ধ করে দেয়া।</p>\r\n<p>\r\n	০৫.ফোল্ডিংকৃত গার্মেন্টস সমুহ ঝুড়ির মাধ্যমে প্যাকিং ম্যানের কাছে পৌছে দেয়া ।</p>\r\n<p>\r\n	০৬.কারখানার সকল নিয়ম কানুন মেনে চলা এবং অপ্রয়োজনীয় কথা না বলা ।</p>\r\n<p>\r\n	০৭.. কতৃপক্ষের দেয়া অন্যান্য নির্দেশ সমুহ পালন করা ও পিপিই ব্যবহার করা।</p>\r\n<p>\r\n	&nbsp;</p>\r\n'),
(10, 55, '<p>\r\n	১. সাইজ অনুযায়ী পলি করা।</p>\r\n<p>\r\n	২.মাথায় স্কর্ফ ও মুখোশ পরে কাজ করা ।</p>\r\n<p>\r\n	০৩.কারখানায় সকল নিয়ম কানুন মেনে চলা এবং অপ্রয়োজনীয় কথা না বলা ।</p>\r\n<p>\r\n	০৪.কতৃপক্ষের দেয়া অন্যান্য নির্দেশ সমূহ পালন ও পিপিই ব্যবহার করা ।</p>\r\n<p>\r\n	&nbsp;</p>\r\n'),
(11, 18, '<p>\r\n	০১. সুপারভাইজার /লাইন চিফ এর নির্দেশ অনুযায়ী মেশিন পরিচালনা করা।</p>\r\n<p>\r\n	০২. নিজের মেশিন দৈনিক পরিষ্কার করা।</p>\r\n<p>\r\n	০৩. কাজে কোনরুপ বিঘ্ন ঘটলে সুপারভাইজার/লইনচিফ এর পরার্মশ মত কাজ করা।</p>\r\n<p>\r\n	০৪. মেশিনে সমস্যা দেখা দিলে তাৎক্ষনিক মেকানিক্স এর দ্বারা মেরামত কারা ।</p>\r\n<p>\r\n	০৫. কারখানার সকল নিয়ম কানুন মেনে চলা এবং অপ্রয়োজনীয় কথা না বলা ।</p>\r\n<p>\r\n	০৬. কতৃপক্ষর দেয়া অনান্য নির্দেশ সমূহ পালন করা এবং পিপিই ব্যবহার করা ।</p>\r\n'),
(12, 44, '<p>\r\n	০১. সুপারভাইজার /লাইন চিফ এর নির্দেশ অনুযায়ী মেশিন পরিচালনা করা৤</p>\r\n<p>\r\n	০২. নিজের মেশিন দৈনিক পরিষ্কার করা৤</p>\r\n<p>\r\n	০৩. কাজে কোনরুপ বিঘ্ন ঘটলে সুপারভাইজার/লইনচিফ এর পরার্মশ মত কাজ করা৤</p>\r\n<p>\r\n	০৪. মেশিনে সমস্যা দেখা দিলে তাৎক্ষনিক মেকানিক্স এর দ্বারা মেরামত কারা ৤</p>\r\n<p>\r\n	০৫. কারখানার সকল নিয়ম কানুন মেনে চলা এবং অপ্রয়োজনীয় কথা না বলা ৤</p>\r\n<p>\r\n	০৬. কতৃপক্ষর দেয়া অনান্য নির্দেশ সমূহ পালন করা এবং পিপিই ব্যবহার করা ৤</p>\r\n'),
(13, 29, '<p>\r\n	০১. স্যম্পল কোয়ালিটি অনুযায়ী গার্মেন্টসকে আইরন করা ৤</p>\r\n<p>\r\n	০২. কতৃপক্ষের দেয়া অন্যান্য&nbsp; নির্দেশ সমূহ পালন করা এবং পিপিই ব্যবহার করা ৤</p>\r\n'),
(14, 20, '<p>\r\n	০১. স্যম্পল কোয়ালিটি অনুযায়ী গার্মেন্টসকে আইরন করা ৤</p>\r\n<p>\r\n	০২. কতৃপক্ষের দেয়া অন্যান্য&nbsp; নির্দেশ সমূহ পালন করা এবং পিপিই ব্যবহার করা ৤</p>\r\n'),
(15, 27, '<p>\r\n	০১. ফোল্ডিংম্যানদের প্যাটার্ন অনুযায়ী ফোল্ডিং করা৤</p>\r\n<p>\r\n	০২. আয়রন সেকশন থেকে আসা আয়রন করা বডি চেক করা৤</p>\r\n<p>\r\n	০৩. কারখানার সকল নিয়ম কানুন মেনে চলা৤</p>\r\n<p>\r\n	০৪. অপ্রয়োজনে কথা না বলা৤</p>\r\n<p>\r\n	০৫. কর্তৃপক্ষের দেয়া অন্যান্য নির্দেশ সমূহ পালন করা ও পিপিই ব্যবহার করা৤</p>\r\n'),
(16, 19, '<p>\r\n	১.সুপারভাইজর/ লাইনচিফ এর নির্দেশ অনুযায়ী মেশিন পরিচালনা করা।</p>\r\n<p>\r\n	২.নিজের মেশিন দৈনিক পরিস্কার করা।</p>\r\n<p>\r\n	৩. কাজে কোন রুপ বিঘ্ন ঘটলে সুপারভাইজর/লাইনচিফের পরামর্শমত কাজ করা।</p>\r\n<p>\r\n	৪.মেশিনে সমস্যা দেখা দিলে তাৎক্ষনিক মেকানিক্স দ্বারা মেরামত করা।</p>\r\n<p>\r\n	৫. কারখানার দেয়া অন্যান্য সকল নিয়ম কানুন মেনে চলা।</p>\r\n<p>\r\n	৬. কতৃপক্ষের দেয়া নির্দেশ সমুহ পালন করা এবং পিপিই ব্যাবহার করা।</p>\r\n'),
(17, 32, '<p>\r\n	১. ক্লিনারগন সব সময় আলাদা পোশাক বা ব্যাজ ধারন করে কাজ করতে হবে ৤</p>\r\n<p>\r\n	২.ক্লিনারগন যার যার নির্দিষ্ট ফ্লোর এবং সিড়ি সব সময় পরিস্কার পরিচ্ছন্ন রাখতে হবে৤</p>\r\n<p>\r\n	৩.ফ্লোর ঝাড়ু দেয়ার সময়া মাস্ক ব্যাবহার করতে হবে৤</p>\r\n<p>\r\n	৪. টয়লেট পরিস্কার করার সময় ডিটারজেন্ট জাতীয় পদার্থ( ফিনা্ইল/হারপিক/ব্লিচিং পাউডার ইত্যাদি ) ব্যাবহার করতে হবে যাতে করে প্রতিটি টয়লে পরিস্কার পরিচ্ছন্ন দুর্গন্ধ মুক্তা থাকে৤</p>\r\n<p>\r\n	৫.টয়লেট সব সময় শুকনা অবস্তায় রাখতে হবে৤</p>\r\n<p>\r\n	৬.টয়লেটের মধ্যে সব সময় সাবান এর্ং তোয়ালে রাখতে হবে৤</p>\r\n<p>\r\n	৭.টয়লেটের সামনে সব সময় আলাদা সেন্ডেল এবং ম্যাট রাখতে হবে৤</p>\r\n<p>\r\n	৮. যে সব টয়লেটে মধ্যে টা্&zwnj;ইলস বসানো আছে , সেখানে পা পিছলে না যায়,সে জন্য টয়লেটে রাবার ম্যাট অথবা&nbsp; কিছুক্ষন পর পর শুকনো করে মুছতে হবে৤</p>\r\n<p>\r\n	৯.টয়লেট রক্ষিত ঝুড়ি বা ড্রামের মধ্যে পলিথিন রেখে তার মধ্যে টয়লের ময়লা ফেলতে হবে৤</p>\r\n<p>\r\n	১০. ঝাড়ু দেয়ার সাথে সাথে ইলেকট্রিক প্যানেলের বোর্ডের সামনে রাবার ম্যাট রাখতে হবে৤</p>\r\n<p>\r\n	১১. প্রতি সপ্তাহে অগ্নি নির্বাপক ও যন্ত্র হুজ পাইপ পরিস্কার করতে হবে৤</p>\r\n<p>\r\n	১২. প্রতি সপ্তাহে দেয়াল ও ছাদ পরিস্কার করতে হবে৤</p>\r\n<p>\r\n	১৩.টয়লেটের ভিতরে কোন ময়লা রাখা যাবে না৤</p>\r\n<p>\r\n	১৪. দৈনিক পরিস্কার পরিচ্ছন্ন রেজিষ্টার লিখতে হবে এবং সাক্ষর করতে হবে৤</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_left_history`
--

CREATE TABLE IF NOT EXISTS `pr_emp_left_history` (
  `left_id` int(10) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `left_date` date NOT NULL,
  PRIMARY KEY (`left_id`),
  KEY `emp_id` (`emp_id`),
  KEY `date` (`left_date`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=582 ;

--
-- Dumping data for table `pr_emp_left_history`
--

INSERT INTO `pr_emp_left_history` (`left_id`, `unit_id`, `emp_id`, `left_date`) VALUES
(1, 1, '16000156', '2019-02-14'),
(2, 1, '13010723', '2019-03-31'),
(3, 1, '13010723', '2019-03-31'),
(4, 1, '13010723', '2019-03-31'),
(5, 1, '19060110', '2019-03-13'),
(6, 1, '11000329', '2019-03-11'),
(7, 1, '11000584', '2019-03-10'),
(8, 1, '11000660', '2019-03-10'),
(9, 1, '11000673', '2019-03-10'),
(10, 1, '13010172', '2019-03-10'),
(11, 1, '13010711', '2019-03-10'),
(12, 1, '13010715', '2019-03-13'),
(13, 1, '13010757', '2019-03-11'),
(14, 1, '13030575', '2019-03-10'),
(15, 1, '13030593', '2019-03-10'),
(16, 1, '14010556', '2019-03-10'),
(17, 1, '14030457', '2019-03-10'),
(18, 1, '19050229', '2019-03-10'),
(19, 1, '19050231', '2019-03-10'),
(20, 1, '15090623', '2019-03-10'),
(21, 1, '12010388', '2019-03-11'),
(22, 1, '12010402', '2019-03-10'),
(23, 1, '12020298', '2019-03-12'),
(24, 1, '12030016', '2019-03-10'),
(25, 1, '12030331', '2019-03-10'),
(26, 1, '12040378', '2019-03-10'),
(27, 1, '12050015', '2019-03-10'),
(28, 1, '12050346', '2019-03-10'),
(29, 1, '12060361', '2019-03-10'),
(30, 1, '12060375', '2019-03-10'),
(31, 1, '12070348', '2019-03-10'),
(32, 1, '12070394', '2019-03-10'),
(33, 1, '12080422', '2019-03-10'),
(34, 1, '12090354', '2019-03-10'),
(35, 1, '12090360', '2019-03-10'),
(36, 1, '12090364', '2019-03-17'),
(37, 1, '12100417', '2019-03-10'),
(38, 1, '12110383', '2019-03-11'),
(39, 1, '12110450', '2019-03-10'),
(40, 1, '12130258', '2019-03-11'),
(41, 1, '12130324', '2019-03-10'),
(42, 1, '12160254', '2019-03-11'),
(43, 1, '12170211', '2019-03-10'),
(44, 1, '12180248', '2019-03-12'),
(45, 1, '12070355', '2019-04-30'),
(46, 1, '19040031', '2019-04-16'),
(47, 1, '11000612', '2019-04-10'),
(48, 1, '13020621', '2019-04-09'),
(49, 1, '13030559', '2019-04-10'),
(50, 1, '13030611', '2019-04-06'),
(51, 1, '12010407', '2019-04-09'),
(52, 1, '12020331', '2019-04-15'),
(53, 1, '12020378', '2019-04-10'),
(54, 1, '12020386', '2019-04-23'),
(55, 1, '12020387', '2019-04-23'),
(56, 1, '12030374', '2019-04-09'),
(57, 1, '12030378', '2019-04-09'),
(58, 1, '12060412', '2019-05-15'),
(59, 1, '12070425', '2019-04-15'),
(60, 1, '12080404', '2019-05-09'),
(61, 1, '12080406', '2019-04-10'),
(62, 1, '12090374', '2019-04-10'),
(63, 1, '12100415', '2019-05-09'),
(64, 1, '12100421', '2019-04-09'),
(65, 1, '12100531', '2019-04-11'),
(66, 1, '12110440', '2019-04-09'),
(67, 1, '12120407', '2019-04-10'),
(68, 1, '12120416', '2019-04-10'),
(69, 1, '12120435', '2019-04-10'),
(70, 1, '12130328', '2019-04-06'),
(71, 1, '12150282', '2019-04-01'),
(72, 1, '12150306', '2019-04-15'),
(73, 1, '12160305', '2019-04-16'),
(74, 1, '12170278', '2019-04-09'),
(75, 1, '12170296', '2019-04-30'),
(76, 1, '12180302', '2019-04-09'),
(77, 1, '14010560', '2019-04-10'),
(78, 1, '15020648', '2019-04-10'),
(79, 1, '14030461', '2019-04-15'),
(80, 1, '14030468', '2019-04-15'),
(81, 1, '15010778', '2019-04-09'),
(82, 1, '15030417', '2019-04-20'),
(83, 1, '15030462', '2019-04-09'),
(84, 1, '15090609', '2019-04-10'),
(85, 1, '12060479', '2019-04-22'),
(86, 1, '12030359', '2019-03-19'),
(87, 1, '12080434', '2019-03-18'),
(88, 1, '12120443', '2019-03-24'),
(89, 1, '12160274', '2019-03-18'),
(90, 1, '18010057', '2019-03-23'),
(91, 1, '14010544', '2019-03-30'),
(92, 1, '14030265', '2019-03-27'),
(93, 1, '14010532', '2019-04-23'),
(94, 1, '14010601', '2019-04-23'),
(95, 1, '12080445', '2019-04-24'),
(96, 1, '14020549', '2019-04-23'),
(97, 1, '11000697', '2019-05-11'),
(98, 1, '13010778', '2019-05-13'),
(99, 1, '13010779', '2019-05-15'),
(100, 1, '13020774', '2019-05-11'),
(101, 1, '13030586', '2019-05-11'),
(102, 1, '12010412', '2019-05-11'),
(103, 1, '12070383', '2019-05-11'),
(104, 1, '12080451', '2019-05-07'),
(105, 1, '12090337', '2019-05-11'),
(106, 1, '12090370', '2019-05-11'),
(107, 1, '12110401', '2019-05-11'),
(108, 1, '12120394', '2019-05-11'),
(109, 1, '12120446', '2019-05-12'),
(110, 1, '12120451', '2019-05-11'),
(111, 1, '12120458', '2019-05-11'),
(112, 1, '12130236', '2019-05-11'),
(113, 1, '12150298', '2019-05-12'),
(114, 1, '14010557', '2019-05-11'),
(115, 1, '14030434', '2019-05-11'),
(116, 1, '14030477', '2019-05-18'),
(117, 1, '15010779', '2019-05-11'),
(118, 1, '15020653', '2019-05-19'),
(119, 1, '15090590', '2019-05-14'),
(120, 1, '14030408', '2019-05-23'),
(121, 1, '14030460', '2019-05-12'),
(122, 1, '12050342', '2019-06-01'),
(123, 1, '12010391', '2019-06-12'),
(124, 1, '12020145', '2019-06-12'),
(125, 1, '12020349', '2019-06-12'),
(126, 1, '12020370', '2019-06-12'),
(127, 1, '12020384', '2019-06-12'),
(128, 1, '12030369', '2019-06-12'),
(129, 1, '12040401', '2019-06-12'),
(130, 1, '12030391', '2019-06-12'),
(131, 1, '12050342', '2019-06-12'),
(132, 1, '12050362', '2019-06-12'),
(133, 1, '12060357', '2019-06-12'),
(134, 1, '12060401', '2019-06-12'),
(135, 1, '12060408', '2019-06-12'),
(136, 1, '12060418', '2019-06-12'),
(137, 1, '13010773', '2019-06-12'),
(138, 1, '14010480', '2019-06-12'),
(139, 1, '14010561', '2019-06-12'),
(140, 1, '15010645', '2019-06-12'),
(141, 1, '15010750', '2019-06-12'),
(142, 1, '19020380', '2019-06-12'),
(200, 1, '11000695', '2019-06-18'),
(144, 1, '12030393', '2019-06-12'),
(145, 1, '12060393', '2019-06-12'),
(146, 1, '11000667', '2019-06-12'),
(147, 1, '12140366', '2019-06-12'),
(148, 1, '12140406', '2019-06-12'),
(149, 1, '12140417', '2019-06-12'),
(150, 1, '12150308', '2019-06-12'),
(151, 1, '12160295', '2019-06-12'),
(152, 1, '12170283', '2019-06-12'),
(153, 1, '12170294', '2019-06-12'),
(154, 1, '12170300', '2019-06-12'),
(155, 1, '13030454', '2019-06-12'),
(156, 1, '13030525', '2019-06-12'),
(157, 1, '13030574', '2019-06-12'),
(158, 1, '14030320', '2019-06-12'),
(159, 1, '14030462', '2019-06-12'),
(160, 1, '14030463', '2019-06-12'),
(161, 1, '15030311', '2019-06-12'),
(162, 1, '15030331', '2019-06-12'),
(163, 1, '16010109', '2019-06-12'),
(164, 1, '12070170', '2019-06-12'),
(165, 1, '12070252', '2019-06-12'),
(166, 1, '12070400', '2019-06-12'),
(167, 1, '12070420', '2019-06-12'),
(168, 1, '12090371', '2019-06-12'),
(169, 1, '12110418', '2019-06-12'),
(170, 1, '12110456', '2019-06-12'),
(171, 1, '12110462', '2019-06-12'),
(172, 1, '12110471', '2019-06-12'),
(173, 1, '12120410', '2019-06-12'),
(174, 1, '13020716', '2019-06-12'),
(175, 1, '13020733', '2019-06-12'),
(176, 1, '13020764', '2019-06-12'),
(177, 1, '15020466', '2019-06-12'),
(178, 1, '15020625', '2019-06-12'),
(179, 1, '15020650', '2019-06-12'),
(180, 1, '19010123', '2019-06-12'),
(181, 1, '11000708', '2019-06-12'),
(182, 1, '14020609', '2019-04-24'),
(183, 1, '14030451', '2019-06-12'),
(184, 1, '14030472', '2019-06-12'),
(185, 1, '13020800', '2019-06-15'),
(186, 1, '15030450', '2019-06-12'),
(187, 1, '12010326', '2019-06-12'),
(188, 1, '12050166', '2019-02-24'),
(189, 1, '12090334', '2019-06-15'),
(190, 1, '12090346', '2019-06-12'),
(191, 1, '12100276', '2019-06-20'),
(192, 1, '12100426', '2019-06-13'),
(193, 1, '12100427', '2019-06-13'),
(194, 1, '12120426', '2019-06-22'),
(195, 1, '12120436', '2019-02-23'),
(196, 1, '12120456', '2019-04-23'),
(197, 1, '12130257', '2019-04-09'),
(198, 1, '12140068', '2019-04-09'),
(199, 1, '12180291', '2019-03-31'),
(201, 1, '11000696', '2019-06-18'),
(202, 1, '14010547', '2019-06-18'),
(203, 1, '14010567', '2019-07-09'),
(204, 1, '15020656', '2019-06-17'),
(205, 1, '19070036', '2019-07-10'),
(206, 1, '13010591', '2019-07-10'),
(207, 1, '13020839', '2019-03-23'),
(208, 1, '13020845', '2019-07-10'),
(209, 1, '13030128', '2019-04-01'),
(210, 1, '13030580', '2019-05-01'),
(211, 1, '13030583', '2019-07-10'),
(212, 1, '13030595', '2019-06-18'),
(213, 1, '13030620', '2019-06-16'),
(214, 1, '13030626', '2019-06-18'),
(215, 1, '15090626', '2019-07-10'),
(216, 1, '15030456', '2019-07-10'),
(217, 1, '12020394', '2019-06-22'),
(218, 1, '12030380', '2019-06-19'),
(219, 1, '12030382', '2019-06-22'),
(220, 1, '12030394', '2019-06-18'),
(221, 1, '12040389', '2019-07-01'),
(222, 1, '12040430', '2019-07-10'),
(223, 1, '12040457', '2019-07-10'),
(224, 1, '12050338', '2019-06-22'),
(225, 1, '12060350', '2019-07-10'),
(226, 1, '12060425', '2019-07-20'),
(227, 1, '12070359', '2019-07-10'),
(228, 1, '12080442', '2019-07-10'),
(229, 1, '12080443', '2019-07-10'),
(230, 1, '12090365', '2019-06-16'),
(231, 1, '12090403', '2019-08-08'),
(232, 1, '12120452', '2019-06-25'),
(233, 1, '12120462', '2019-08-04'),
(234, 1, '12120467', '2019-07-10'),
(235, 1, '12120471', '2019-07-07'),
(236, 1, '12130301', '2019-06-18'),
(237, 1, '12140349', '2019-07-10'),
(238, 1, '12140438', '2019-07-10'),
(239, 1, '12140459', '2019-07-16'),
(240, 1, '12150279', '2019-07-10'),
(241, 1, '12170180', '2019-07-10'),
(242, 1, '12070416', '2019-06-18'),
(243, 1, '12140448', '2019-06-15'),
(244, 1, '12160303', '2019-04-23'),
(245, 1, '12160304', '2019-07-09'),
(246, 1, '12020397', '2019-08-04'),
(247, 1, '11000458', '2019-09-24'),
(248, 1, '11000649', '2019-09-24'),
(249, 1, '11000689', '2019-09-24'),
(250, 1, '12130315', '2019-08-24'),
(251, 1, '12150257', '2019-08-24'),
(252, 1, '13030632', '2019-08-24'),
(253, 1, '14030385', '2019-08-24'),
(254, 1, '15030411', '2019-08-24'),
(444, 1, '16010049', '2019-06-30'),
(256, 1, '12010374', '2019-08-24'),
(257, 1, '12020355', '2019-08-24'),
(258, 1, '12030278', '2019-08-24'),
(259, 1, '12030362', '2019-08-24'),
(260, 1, '12040455', '2019-08-24'),
(261, 1, '12050330', '2019-08-24'),
(262, 1, '12050349', '2019-08-24'),
(263, 1, '12050361', '2019-08-24'),
(264, 1, '12060404', '2019-08-24'),
(265, 1, '12060413', '2019-08-24'),
(266, 1, '13010756', '2019-08-24'),
(267, 1, '13010782', '2019-08-24'),
(268, 1, '14010184', '2019-08-24'),
(269, 1, '15010756', '2019-08-24'),
(270, 1, '15010775', '2019-08-24'),
(271, 1, '15010777', '2019-08-24'),
(272, 1, '19020386', '2019-08-24'),
(273, 1, '12070352', '2019-08-24'),
(274, 1, '12070397', '2019-08-24'),
(275, 1, '12080416', '2019-08-24'),
(276, 1, '12110448', '2019-08-24'),
(277, 1, '12110469', '2019-08-24'),
(278, 1, '12120445', '2019-08-24'),
(279, 1, '12120457', '2019-08-24'),
(280, 1, '12120460', '2019-08-24'),
(281, 1, '14020610', '2019-08-24'),
(282, 1, '15020584', '2019-08-24'),
(283, 1, '12070413', '2019-09-11'),
(284, 1, '12070430', '2019-09-11'),
(285, 1, '12080446', '2019-09-11'),
(286, 1, '12090386', '2019-09-11'),
(287, 1, '12090398', '2019-09-11'),
(288, 1, '12100378', '2019-09-11'),
(289, 1, '12100383', '2019-09-11'),
(290, 1, '12100435', '2019-09-11'),
(291, 1, '12110376', '2019-09-11'),
(292, 1, '12110388', '2019-09-11'),
(293, 1, '12110393', '2019-09-11'),
(294, 1, '12110429', '2019-09-11'),
(295, 1, '12110435', '2019-09-11'),
(296, 1, '12110452', '2019-09-14'),
(297, 1, '12110463', '2019-09-11'),
(298, 1, '12110465', '2019-09-11'),
(299, 1, '12110472', '2019-09-11'),
(300, 1, '12120423', '2019-09-11'),
(301, 1, '12120441', '2019-09-11'),
(302, 1, '12120455', '2019-09-11'),
(303, 1, '12120469', '2019-09-11'),
(304, 1, '13020779', '2019-09-11'),
(305, 1, '13020816', '2019-09-11'),
(306, 1, '13020834', '2019-09-11'),
(307, 1, '14020579', '2019-09-11'),
(308, 1, '15020593', '2019-09-11'),
(309, 1, '15020613', '2019-09-11'),
(310, 1, '15020661', '2019-09-11'),
(311, 1, '15020662', '2019-09-11'),
(312, 1, '19010114', '2019-09-11'),
(313, 1, '12070436', '2019-09-14'),
(314, 1, '11000659', '2019-09-11'),
(315, 1, '11000672', '2019-09-11'),
(316, 1, '11000679', '2019-09-11'),
(317, 1, '11000716', '2019-09-11'),
(318, 1, '12130311', '2019-09-11'),
(319, 1, '12140196', '2019-09-11'),
(320, 1, '12140361', '2019-09-11'),
(321, 1, '12140414', '2019-09-11'),
(322, 1, '12150240', '2019-09-11'),
(323, 1, '12160309', '2019-09-11'),
(324, 1, '12170213', '2019-09-11'),
(325, 1, '12170252', '2019-09-11'),
(326, 1, '12170256', '2019-09-11'),
(327, 1, '12170288', '2019-09-11'),
(328, 1, '12180139', '2019-09-11'),
(329, 1, '13030236', '2019-09-11'),
(330, 1, '13030256', '2019-09-11'),
(331, 1, '13030304', '2019-09-01'),
(332, 1, '14030441', '2019-09-11'),
(333, 1, '14030469', '2019-09-11'),
(334, 1, '15030448', '2019-09-11'),
(335, 1, '15100554', '2019-09-11'),
(445, 1, '16010115', '2019-06-30'),
(337, 1, '18010038', '2019-09-11'),
(338, 1, '19060117', '2019-09-11'),
(339, 1, '12020347', '2019-09-11'),
(340, 1, '12020379', '2019-09-11'),
(341, 1, '12020395', '2019-09-11'),
(342, 1, '12030205', '2019-09-11'),
(343, 1, '12030383', '2019-09-11'),
(344, 1, '12040383', '2019-09-11'),
(345, 1, '12040407', '2019-09-11'),
(346, 1, '12040432', '2019-09-11'),
(347, 1, '12050019', '2019-09-11'),
(348, 1, '12050237', '2019-09-11'),
(349, 1, '12050352', '2019-09-11'),
(350, 1, '12060327', '2019-09-11'),
(351, 1, '12060370', '2019-09-11'),
(352, 1, '12060409', '2019-09-11'),
(353, 1, '12060411', '2019-09-11'),
(354, 1, '13010661', '2019-09-11'),
(355, 1, '13010745', '2019-09-11'),
(356, 1, '14010387', '2019-09-11'),
(357, 1, '14010531', '2019-09-11'),
(358, 1, '11000711', '2019-09-11'),
(359, 1, '12140451', '2019-09-11'),
(360, 1, '12170245', '2019-09-11'),
(361, 1, '12180250', '2019-09-11'),
(362, 1, '13030568', '2019-09-11'),
(363, 1, '12020375', '2019-09-11'),
(364, 1, '12040441', '2019-09-11'),
(365, 1, '14010589', '2019-09-11'),
(366, 1, '15020342', '2019-08-29'),
(367, 1, '13010323', '2019-09-18'),
(368, 1, '15030387', '2019-08-19'),
(369, 1, '14030433', '2019-09-14'),
(370, 1, '12130275', '2019-09-15'),
(371, 1, '12090389', '2019-09-16'),
(372, 1, '12090392', '2019-09-15'),
(373, 1, '12090409', '2019-09-18'),
(374, 1, '15020670', '2019-09-23'),
(375, 1, '12130306', '2019-09-23'),
(376, 1, '13030598', '2019-09-18'),
(377, 1, '12110475', '2019-09-29'),
(378, 1, '13020856', '2019-10-01'),
(379, 1, '12100438', '2019-10-01'),
(380, 1, '12160161', '2019-09-23'),
(381, 1, '19010129', '2019-09-23'),
(382, 1, '19060106', '2019-09-23'),
(383, 1, '13010741', '2019-09-30'),
(384, 1, '12140454', '2019-09-30'),
(385, 1, '12050355', '2019-10-01'),
(386, 1, '15020673', '2019-10-02'),
(387, 1, '19060106', '2019-09-23'),
(388, 1, '13010796', '2019-10-08'),
(389, 1, '12040463', '2019-10-09'),
(390, 1, '12010418', '2019-10-10'),
(391, 1, '19010122', '2019-10-10'),
(392, 1, '14020584', '2019-10-12'),
(393, 1, '13020715', '2019-10-14'),
(394, 1, '13020739', '2019-10-14'),
(395, 1, '13020847', '2019-10-15'),
(396, 1, '15020649', '2019-10-14'),
(397, 1, '12070393', '2019-10-14'),
(398, 1, '12070419', '2019-10-14'),
(439, 1, '12010416', '2019-10-22'),
(400, 1, '12080385', '2019-10-14'),
(401, 1, '12080441', '2019-10-14'),
(402, 1, '12080460', '2019-10-14'),
(403, 1, '12100306', '2019-10-14'),
(404, 1, '12110331', '2019-10-14'),
(405, 1, '14010521', '2019-10-14'),
(406, 1, '14010542', '2019-10-14'),
(407, 1, '15010747', '2019-10-16'),
(408, 1, '15010748', '2019-10-14'),
(409, 1, '12010353', '2019-10-14'),
(410, 1, '12010406', '2019-10-14'),
(411, 1, '12030370', '2019-10-14'),
(412, 1, '12060417', '2019-10-14'),
(413, 1, '12100437', '2019-10-15'),
(414, 1, '11000499', '2019-10-14'),
(415, 1, '11000676', '2019-10-14'),
(416, 1, '15090606', '2019-10-14'),
(417, 1, '16000148', '2019-10-14'),
(418, 1, '14030406', '2019-10-14'),
(419, 1, '13030613', '2019-10-14'),
(420, 1, '15030452', '2019-10-14'),
(421, 1, '12130332', '2019-10-14'),
(422, 1, '12150317', '2019-10-14'),
(423, 1, '12160257', '2019-10-14'),
(424, 1, '12160297', '2019-10-14'),
(425, 1, '12180246', '2019-10-14'),
(426, 1, '12180300', '2019-10-14'),
(427, 1, '12180309', '2019-10-14'),
(428, 1, '12080455', '2019-10-16'),
(429, 1, '14010422', '2019-10-16'),
(430, 1, '15030472', '2019-10-16'),
(431, 1, '12010359', '2019-10-15'),
(432, 1, '14020621', '2019-10-20'),
(433, 1, '12090415', '2019-10-20'),
(434, 1, '12100352', '2019-10-14'),
(435, 1, '11000671', '2019-10-20'),
(436, 1, '13010775', '2019-10-20'),
(438, 1, '13020759', '2019-10-22'),
(440, 1, '11000537', '2019-10-21'),
(441, 1, '12080465', '2019-11-27'),
(493, 1, '12030392', '2019-10-26'),
(443, 1, '12040474', '2019-11-28'),
(446, 1, '14020629', '2019-10-29'),
(447, 1, '13030552', '2019-10-29'),
(448, 1, '13030650', '2019-10-29'),
(449, 1, '15010806', '2019-10-29'),
(450, 1, '13020875', '2019-10-30'),
(451, 1, '12120495', '2019-10-28'),
(452, 1, '12100448', '2019-10-30'),
(453, 1, '12150059', '2019-09-23'),
(454, 1, '13020727', '2019-10-02'),
(455, 1, '12060317', '2019-10-24'),
(456, 1, '13030521', '2019-10-29'),
(457, 1, '15010617', '2019-10-29'),
(458, 1, '13020798', '2019-10-16'),
(459, 1, '12070424', '2019-10-28'),
(460, 1, '12070446', '2019-11-02'),
(461, 1, '11000734', '2019-11-11'),
(462, 1, '13010801', '2019-11-14'),
(463, 1, '15010803', '2019-11-14'),
(464, 1, '19050064', '2019-11-14'),
(465, 1, '19050227', '2019-11-17'),
(466, 1, '12020401', '2019-11-14'),
(467, 1, '12030398', '2019-11-14'),
(468, 1, '12060430', '2019-11-14'),
(469, 1, '14010553', '2019-11-14'),
(470, 1, '12110460', '2019-11-14'),
(471, 1, '12080450', '2019-11-14'),
(472, 1, '12090421', '2019-11-18'),
(473, 1, '12110473', '2019-11-14'),
(474, 1, '12110490', '2019-11-14'),
(475, 1, '12120450', '2019-11-14'),
(476, 1, '12120480', '2019-11-14'),
(477, 1, '11000309', '2019-11-14'),
(478, 1, '15090603', '2019-11-14'),
(479, 1, '15090630', '2019-11-14'),
(480, 1, '13030120', '2019-11-14'),
(481, 1, '13030628', '2019-11-14'),
(482, 1, '12130310', '2019-11-14'),
(483, 1, '12130331', '2019-11-14'),
(484, 1, '12150118', '2019-11-14'),
(485, 1, '12150300', '2019-11-14'),
(486, 1, '12150313', '2019-11-14'),
(487, 1, '12160314', '2019-11-14'),
(488, 1, '12170273', '2019-11-14'),
(489, 1, '12170301', '2019-11-14'),
(490, 1, '12180255', '2019-11-16'),
(491, 1, '12180279', '2019-11-16'),
(492, 1, '12180311', '2019-11-14'),
(494, 1, '12060429', '2019-11-17'),
(495, 1, '15010450', '2019-11-16'),
(496, 1, '11000597', '2019-11-17'),
(497, 1, '13030645', '2019-11-17'),
(498, 1, '12140467', '2019-11-17'),
(499, 1, '12130340', '2019-11-18'),
(500, 1, '12100288', '2019-11-23'),
(501, 1, '11000385', '2019-11-26'),
(502, 1, '12180304', '2019-11-28'),
(503, 1, '12110492', '2019-12-05'),
(504, 1, '12110493', '2019-12-05'),
(507, 1, '12180268', '2019-12-01'),
(506, 1, '11000742', '2019-12-05'),
(508, 1, '14010264', '2019-12-10'),
(509, 1, '14010548', '2019-12-12'),
(510, 1, '14010598', '2019-12-10'),
(511, 1, '14010616', '2019-12-12'),
(512, 1, '13010746', '2019-12-10'),
(513, 1, '13010802', '2019-12-10'),
(514, 1, '15010801', '2019-12-10'),
(515, 1, '12020332', '2019-12-10'),
(516, 1, '12020376', '2019-12-10'),
(517, 1, '12020393', '2019-12-11'),
(518, 1, '12040472', '2019-12-09'),
(519, 1, '12040475', '2019-12-11'),
(520, 1, '12050321', '2019-12-10'),
(578, 1, '14010624', '2019-12-28'),
(522, 1, '12060363', '2019-12-10'),
(523, 1, '12060365', '2019-12-10'),
(524, 1, '12060400', '2019-12-10'),
(525, 1, '12060428', '2019-12-10'),
(526, 1, '12060433', '2019-12-11'),
(527, 1, '12060435', '2019-12-12'),
(528, 1, '19060115', '2019-12-10'),
(529, 1, '11000712', '2019-12-10'),
(530, 1, '11000714', '2019-12-10'),
(531, 1, '15100561', '2019-12-10'),
(532, 1, '14030491', '2019-12-10'),
(533, 1, '15030408', '2019-12-10'),
(534, 1, '15030463', '2019-12-10'),
(535, 1, '13030589', '2019-12-07'),
(536, 1, '15030471', '2019-12-11'),
(537, 1, '12130282', '2019-12-10'),
(538, 1, '12130305', '2019-12-10'),
(539, 1, '12130320', '2019-12-11'),
(540, 1, '12130342', '2019-12-11'),
(541, 1, '12140424', '2019-12-04'),
(542, 1, '12150108', '2019-12-10'),
(543, 1, '12160308', '2019-12-08'),
(544, 1, '12170250', '2019-12-10'),
(545, 1, '12170306', '2019-12-10'),
(546, 1, '12180273', '2019-12-10'),
(547, 1, '19020391', '2019-12-10'),
(548, 1, '15020644', '2019-12-10'),
(549, 1, '15020684', '2019-12-10'),
(550, 1, '13020681', '2019-12-10'),
(551, 1, '13020861', '2019-12-10'),
(552, 1, '13020865', '2019-12-10'),
(553, 1, '13020869', '2019-12-10'),
(554, 1, '13020872', '2019-12-10'),
(555, 1, '15020666', '2019-12-10'),
(556, 1, '12070377', '2019-12-10'),
(557, 1, '12080304', '2019-12-10'),
(558, 1, '12090017', '2019-12-10'),
(559, 1, '12080461', '2019-12-11'),
(560, 1, '12090412', '2019-12-10'),
(561, 1, '12090422', '2019-12-10'),
(562, 1, '12100379', '2019-12-10'),
(570, 1, '19050184', '2019-12-12'),
(564, 1, '12100444', '2019-12-02'),
(565, 1, '12100447', '2019-12-10'),
(566, 1, '12120427', '2019-12-10'),
(567, 1, '12120472', '2019-12-10'),
(568, 1, '12120478', '2019-12-10'),
(569, 1, '12120492', '2019-12-10'),
(571, 1, '12050320', '2019-12-14'),
(572, 1, '12040470', '2019-12-18'),
(573, 1, '13030506', '2019-12-17'),
(574, 1, '15030376', '2019-12-15'),
(575, 1, '12130292', '2019-12-11'),
(576, 1, '12180288', '2019-12-15'),
(577, 1, '12070422', '2019-12-17'),
(579, 1, '19050248', '2019-12-26'),
(580, 1, '13020651', '2019-12-18'),
(581, 1, '12080468', '2019-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_nid_wk_typ`
--

CREATE TABLE IF NOT EXISTS `pr_emp_nid_wk_typ` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wk_type` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `pr_emp_nid_wk_typ`
--

INSERT INTO `pr_emp_nid_wk_typ` (`id`, `wk_type`) VALUES
(0, 'none'),
(1, 'সেলাই মেশিন চালানো'),
(2, 'সেলাই এ সাহায্য করা'),
(3, 'আয়রন করা'),
(4, 'ফিনিঃ এ সাহায্য করা'),
(5, 'কাটিং করা'),
(6, 'কাটিং এ সাহায্য করা'),
(7, 'কোয়ালিাট ইন্সপেক্টর'),
(8, 'সহকারী অপারেটর'),
(9, 'Assistant Oparetor'),
(10, 'মেশিন রক্ষনাবেক্ষণ করা'),
(11, 'সহকারী কাটার'),
(12, 'ক্লিনার'),
(13, 'সহকারী অপারেটর'),
(14, 'কোয়ালিটি ইন্সপেক্টর'),
(15, 'কোয়ালিটি ইন্সপেক্টর'),
(16, 'ফোল্ডার করা'),
(17, 'অপারেটর'),
(18, 'লোডার'),
(19, 'অপারেটর'),
(20, 'আইরনম্যান'),
(21, 'তদারকি করা'),
(22, 'অপারেটর'),
(23, 'প্যাকিং করা'),
(24, 'আইরনম্যান'),
(25, 'অপারেটর'),
(26, 'অপারেটর'),
(27, 'নিরাপত্তা'),
(28, 'মান পরীক্ষক'),
(29, 'অপারেটর'),
(30, ''),
(31, 'অপারেটর'),
(32, 'আইরন ম্যান'),
(33, 'অপারেটর'),
(34, 'অপারেটর'),
(35, 'অপারেটর'),
(36, 'মান পর্যবেক্ষক'),
(37, 'মান নিরীক্ষক'),
(38, 'অপারেটর'),
(39, 'আইরনম্যান'),
(40, 'Ironman'),
(41, 'সহকারী অপারেটর'),
(42, 'সুপারভাইজর'),
(43, 'সুপারভাইজর'),
(44, 'অপারেটর'),
(45, 'লাইন আইরনম্যান'),
(46, 'Helper'),
(47, 'মালামাল বহন করা'),
(48, 'নিডেল বিতরণকারী'),
(49, 'ফিউজিং মেশিন চালানো'),
(50, ' সিজারিং করা'),
(51, 'দাগ দূরীকরণ'),
(52, 'ল্যাব  কাজে সহায়তা করা');

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_operation`
--

CREATE TABLE IF NOT EXISTS `pr_emp_operation` (
  `ope_id` int(10) NOT NULL AUTO_INCREMENT,
  `ope_name` varchar(100) NOT NULL,
  `unit_id` int(11) NOT NULL,
  PRIMARY KEY (`ope_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `pr_emp_operation`
--

INSERT INTO `pr_emp_operation` (`ope_id`, `ope_name`, `unit_id`) VALUES
(0, 'None', 1),
(2, '50kg', 1),
(3, '45kg', 1),
(5, '47kg', 1),
(6, '48kg', 1),
(7, '49kg', 1),
(8, '52kg', 1),
(9, '51kg', 1),
(10, '53kg', 1),
(11, '54Kg', 1),
(12, '55Kg', 1),
(13, '56Kg', 1),
(14, '57Kg', 1),
(15, '58Kg', 1),
(16, '46Kg', 1),
(17, '59Kg', 1),
(18, '60Kg', 1),
(19, '61Kg', 1),
(20, '62Kg', 1),
(21, '63kg', 1),
(22, '64Kg', 1),
(23, '65kg', 1),
(24, '66kg', 1),
(25, '67kg', 1),
(26, '68kg', 1),
(27, '69kg', 1),
(28, '70kg', 1),
(29, '71kg', 1),
(30, '72kg', 1),
(31, '73kg', 1),
(32, '74kg', 1),
(33, '75kg', 1),
(34, '76kg', 1),
(35, '77kg', 1),
(36, '78kg', 1),
(37, '79kg', 1),
(38, '80kg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_per_info`
--

CREATE TABLE IF NOT EXISTS `pr_emp_per_info` (
  `emp_id` varchar(100) NOT NULL,
  `emp_full_name` varchar(200) NOT NULL,
  `bangla_nam` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `identificatiion_marks` varchar(200) NOT NULL,
  `national_brn_id` varchar(150) NOT NULL,
  `emp_fname` varchar(200) CHARACTER SET utf8 NOT NULL,
  `emp_fname_bn` varchar(200) CHARACTER SET utf8 NOT NULL,
  `emp_mname` varchar(200) CHARACTER SET utf8 NOT NULL,
  `emp_mname_bn` varchar(200) CHARACTER SET utf8 NOT NULL,
  `spouse_name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `no_child` int(2) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_religion` varchar(50) NOT NULL,
  `emp_sex` varchar(10) NOT NULL,
  `emp_marital_status` int(10) NOT NULL,
  `emp_blood` varchar(10) NOT NULL,
  `bank_ac_no` varchar(30) NOT NULL,
  `img_source` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_position`
--

CREATE TABLE IF NOT EXISTS `pr_emp_position` (
  `posi_id` int(10) NOT NULL AUTO_INCREMENT,
  `posi_name` varchar(100) NOT NULL,
  `unit_id` int(11) NOT NULL,
  PRIMARY KEY (`posi_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pr_emp_position`
--

INSERT INTO `pr_emp_position` (`posi_id`, `posi_name`, `unit_id`) VALUES
(0, 'None', 1),
(2, '5''1''''', 1),
(3, '5''2"', 1),
(4, '5''3"', 1),
(5, '5''4"', 1),
(6, '5''5"', 1),
(7, '5''6"', 1),
(8, '5''7"', 1),
(1, '5''', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_release`
--

CREATE TABLE IF NOT EXISTS `pr_emp_release` (
  `rel_id` int(10) NOT NULL,
  `rel_emp_id` varchar(100) NOT NULL,
  `rel_date` date NOT NULL,
  `rel_cause` varchar(200) NOT NULL,
  PRIMARY KEY (`rel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_resign_history`
--

CREATE TABLE IF NOT EXISTS `pr_emp_resign_history` (
  `resign_id` int(10) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `resign_date` date NOT NULL,
  `resign_reason` text NOT NULL,
  PRIMARY KEY (`resign_id`),
  KEY `emp_id` (`emp_id`),
  KEY `date` (`resign_date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_sex`
--

CREATE TABLE IF NOT EXISTS `pr_emp_sex` (
  `sex_id` int(2) NOT NULL,
  `sex_name` varchar(20) NOT NULL,
  `sex_nam_bng` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`sex_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_emp_sex`
--

INSERT INTO `pr_emp_sex` (`sex_id`, `sex_name`, `sex_nam_bng`) VALUES
(1, 'Male', 'পুরুষ'),
(2, 'Female', 'মহিলা');

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_shift`
--

CREATE TABLE IF NOT EXISTS `pr_emp_shift` (
  `shift_id` int(10) NOT NULL AUTO_INCREMENT,
  `shift_name` varchar(50) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `shift_duty` varchar(10) NOT NULL,
  PRIMARY KEY (`shift_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `pr_emp_shift`
--

INSERT INTO `pr_emp_shift` (`shift_id`, `shift_name`, `unit_id`, `shift_duty`) VALUES
(1, 'Stuff', 1, '1'),
(2, 'Worker', 1, '2'),
(19, 'Cleaner', 1, '19');

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_shift_log`
--

CREATE TABLE IF NOT EXISTS `pr_emp_shift_log` (
  `shift_log_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(50) NOT NULL,
  `shift_id` int(10) NOT NULL,
  `shift_duty` int(10) NOT NULL,
  `shift_log_date` date NOT NULL,
  `in_time` time NOT NULL,
  `out_time` time NOT NULL,
  `ot_hour` double(10,1) NOT NULL,
  `extra_ot_hour` double(10,1) NOT NULL,
  `ot_hour_actual` double(10,1) NOT NULL,
  `extra_ot_hour_actual` double(10,1) NOT NULL,
  `deduct_hour` double(10,1) NOT NULL,
  `deduction_hour` int(5) NOT NULL,
  `tot_hour` int(10) NOT NULL,
  `late_status` int(10) NOT NULL,
  `tiffin_allo` int(11) NOT NULL,
  `night_allo` int(11) NOT NULL,
  `night_allo_2nd` int(10) NOT NULL,
  `holiday_allowance` int(11) NOT NULL,
  `holiday_allowanc` int(10) NOT NULL,
  `weekly_allo` int(11) NOT NULL,
  `modify` int(3) NOT NULL DEFAULT '0' COMMENT '0->N, 1->Y ',
  `present_status` varchar(10) NOT NULL,
  `tot_sts` int(10) NOT NULL,
  `tot_sts_2` int(10) NOT NULL,
  `tot_sts_3` int(10) NOT NULL,
  `tot_sts_4` int(10) NOT NULL,
  PRIMARY KEY (`shift_log_id`),
  KEY `emp_id` (`emp_id`),
  KEY `shift_log_date` (`shift_log_date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_shift_process`
--

CREATE TABLE IF NOT EXISTS `pr_emp_shift_process` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `system_process_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `pr_emp_shift_process`
--

INSERT INTO `pr_emp_shift_process` (`id`, `date`, `system_process_time`) VALUES
(1, '2019-03-09', '2019-03-09 10:30:59'),
(2, '2019-02-28', '2019-02-28 10:30:59'),
(68, '2019-03-10', '2019-03-11 05:15:51'),
(69, '2019-03-01', '2019-03-11 05:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_shift_schedule`
--

CREATE TABLE IF NOT EXISTS `pr_emp_shift_schedule` (
  `shift_id` int(10) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `sh_type` varchar(50) NOT NULL,
  `in_start` time NOT NULL,
  `in_time` time NOT NULL,
  `late_start` time NOT NULL,
  `in_end` time NOT NULL,
  `out_start` time NOT NULL,
  `out_end` time NOT NULL,
  `ot_start` time NOT NULL,
  `ot_minute_to_one_hour` int(55) NOT NULL,
  `one_hour_ot_out_time` time NOT NULL,
  `two_hour_ot_out_time` time NOT NULL,
  PRIMARY KEY (`shift_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `pr_emp_shift_schedule`
--

INSERT INTO `pr_emp_shift_schedule` (`shift_id`, `unit_id`, `sh_type`, `in_start`, `in_time`, `late_start`, `in_end`, `out_start`, `out_end`, `ot_start`, `ot_minute_to_one_hour`, `one_hour_ot_out_time`, `two_hour_ot_out_time`) VALUES
(1, 1, 'Stuff', '07:00:00', '08:00:00', '08:05:00', '12:00:00', '13:00:00', '06:00:00', '17:00:00', 45, '18:00:00', '19:00:00'),
(3, 1, 'Ramadan_Gen', '06:30:00', '07:00:00', '07:05:00', '11:00:00', '12:00:00', '06:00:00', '15:30:00', 45, '16:30:00', '17:30:00'),
(2, 1, 'Worker', '07:10:00', '08:00:00', '08:05:00', '12:00:00', '13:00:00', '06:00:00', '17:00:00', 45, '18:00:00', '19:00:00'),
(4, 1, 'Ramadan_Wrk', '06:30:00', '07:00:00', '07:05:00', '11:00:00', '12:00:00', '06:00:00', '15:30:00', 55, '16:30:00', '17:30:00'),
(19, 1, 'Cleaning', '06:50:00', '07:30:00', '07:35:00', '11:00:00', '13:00:00', '05:00:00', '16:30:00', 45, '17:30:00', '18:30:00'),
(20, 1, 'Ramadan_cleaner', '06:00:00', '06:30:00', '06:35:00', '10:30:00', '11:00:00', '06:00:00', '15:00:00', 55, '16:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_skill`
--

CREATE TABLE IF NOT EXISTS `pr_emp_skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(100) NOT NULL,
  `emp_skill` varchar(100) CHARACTER SET utf8 NOT NULL,
  `emp_yr_skill` varchar(100) CHARACTER SET utf8 NOT NULL,
  `emp_com_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_status`
--

CREATE TABLE IF NOT EXISTS `pr_emp_status` (
  `stat_id` int(10) NOT NULL AUTO_INCREMENT,
  `stat_type` varchar(50) NOT NULL,
  `stat_des` varchar(100) NOT NULL,
  PRIMARY KEY (`stat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pr_emp_status`
--

INSERT INTO `pr_emp_status` (`stat_id`, `stat_type`, `stat_des`) VALUES
(1, 'Regular', 'Regular employee'),
(2, 'New', 'New Employee'),
(3, 'Left', 'Left employee'),
(4, 'Resign', 'Resign employee'),
(6, 'Promoted', 'Promoted Employee');

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_stop_salary`
--

CREATE TABLE IF NOT EXISTS `pr_emp_stop_salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `salary_month` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `pr_emp_stop_salary`
--

INSERT INTO `pr_emp_stop_salary` (`id`, `unit_id`, `emp_id`, `salary_month`) VALUES
(1, 1, 14020541, '2019-10-01'),
(2, 1, 14030403, '2019-10-01'),
(3, 1, 13020854, '2019-10-01'),
(4, 1, 15010799, '2019-10-01'),
(5, 1, 15020543, '2019-10-01'),
(6, 1, 15020603, '2019-10-01'),
(7, 1, 12030379, '2019-10-01'),
(8, 1, 12040311, '2019-10-01'),
(9, 1, 12040427, '2019-10-01'),
(10, 1, 12070051, '2019-10-01'),
(11, 1, 12070418, '2019-10-01'),
(12, 1, 12070434, '2019-10-01'),
(13, 1, 12090384, '2019-10-01'),
(14, 1, 12100433, '2019-10-01'),
(15, 1, 12120133, '2019-10-01'),
(16, 1, 12120363, '2019-10-01'),
(17, 1, 12120400, '2019-10-01'),
(18, 1, 12120405, '2019-10-01'),
(19, 1, 12120442, '2019-10-01'),
(20, 1, 12120449, '2019-10-01'),
(21, 1, 12130294, '2019-10-01'),
(22, 1, 12180215, '2019-10-01'),
(23, 1, 13020727, '2019-10-01'),
(24, 1, 12060317, '2019-10-01'),
(25, 1, 13030521, '2019-10-01'),
(26, 1, 15010617, '2019-10-01'),
(27, 1, 13020798, '2019-10-01'),
(28, 1, 12010324, '2019-10-01'),
(29, 1, 13020746, '2019-10-01'),
(30, 1, 11000664, '2019-11-02'),
(31, 1, 11000707, '2019-11-02'),
(32, 1, 14010401, '2019-11-02'),
(33, 1, 15020682, '2019-11-02'),
(34, 1, 14020305, '2019-11-02'),
(35, 1, 14030479, '2019-11-02'),
(36, 1, 13010689, '2019-11-02'),
(37, 1, 13020746, '2019-11-02'),
(38, 1, 15020665, '2019-11-01'),
(39, 1, 12140419, '2019-11-01'),
(40, 1, 12090418, '2019-11-01'),
(41, 1, 12010324, '2019-11-01'),
(42, 1, 12110294, '2019-11-01'),
(43, 1, 14010103, '2019-12-01'),
(44, 1, 14010477, '2019-12-01'),
(45, 1, 14010332, '2019-12-01'),
(46, 1, 14020604, '2019-12-01'),
(47, 1, 14030400, '2019-12-01'),
(48, 1, 15020672, '2019-12-01'),
(49, 1, 15030436, '2019-12-01'),
(50, 1, 12010254, '2019-12-01'),
(51, 1, 12120447, '2019-12-01'),
(52, 1, 12120496, '2019-12-01'),
(53, 1, 12090235, '2019-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_sts`
--

CREATE TABLE IF NOT EXISTS `pr_emp_sts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_sts` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pr_emp_sts`
--

INSERT INTO `pr_emp_sts` (`id`, `emp_sts`) VALUES
(1, 'stuff'),
(2, 'worker');

-- --------------------------------------------------------

--
-- Table structure for table `pr_emp_weekend`
--

CREATE TABLE IF NOT EXISTS `pr_emp_weekend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pr_emp_weekend`
--

INSERT INTO `pr_emp_weekend` (`id`, `day`) VALUES
(0, 'None'),
(1, 'Sat'),
(2, 'Sun'),
(3, 'Mon'),
(4, 'Tue'),
(5, 'Wed'),
(6, 'Thu'),
(7, 'Fri');

-- --------------------------------------------------------

--
-- Table structure for table `pr_extra_ot`
--

CREATE TABLE IF NOT EXISTS `pr_extra_ot` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(100) NOT NULL,
  `ot_date` date NOT NULL,
  `ot_hour` int(10) NOT NULL,
  `morning_in_time` time NOT NULL,
  `morning_out_time` time NOT NULL,
  `afternoon_in_time` time NOT NULL,
  `afternoon_out_time` time NOT NULL,
  `night_in_time` time NOT NULL,
  `night_out_time` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `emp_id` (`emp_id`),
  KEY `ot_date` (`ot_date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_festival_bonus_sheet`
--

CREATE TABLE IF NOT EXISTS `pr_festival_bonus_sheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `desig_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `line_id` int(11) NOT NULL,
  `emp_status` int(11) NOT NULL,
  `emp_sex` int(11) NOT NULL,
  `basic_sal` int(11) NOT NULL,
  `house_r` int(11) NOT NULL,
  `medical_a` int(11) NOT NULL,
  `food_allow` int(11) NOT NULL,
  `trans_allow` int(11) NOT NULL,
  `gross_sal` int(11) NOT NULL,
  `service_length` int(11) NOT NULL,
  `bonus_rule_id` int(11) NOT NULL,
  `bonus_amount` int(20) NOT NULL,
  `bonus_percent` int(10) NOT NULL,
  `effective_month` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_floor`
--

CREATE TABLE IF NOT EXISTS `pr_floor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `floor_name` varchar(100) NOT NULL,
  `unit_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `pr_floor`
--

INSERT INTO `pr_floor` (`id`, `floor_name`, `unit_id`) VALUES
(1, 'Unit-1', 1),
(2, 'Unit-2', 1),
(3, 'Unit-3', 1),
(99, 'none', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pr_grade`
--

CREATE TABLE IF NOT EXISTS `pr_grade` (
  `gr_id` int(10) NOT NULL AUTO_INCREMENT,
  `gr_name` varchar(50) NOT NULL,
  `gr_name_bn` varchar(100) CHARACTER SET utf8 NOT NULL,
  `gr_str_basic` int(10) NOT NULL,
  `gr_end_basic` int(10) NOT NULL,
  `gr_incr1` int(10) NOT NULL,
  `gr_1st_phase` int(10) NOT NULL,
  `gr_incr2` int(10) NOT NULL,
  `gr_2nd_phase` int(10) NOT NULL,
  PRIMARY KEY (`gr_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pr_grade`
--

INSERT INTO `pr_grade` (`gr_id`, `gr_name`, `gr_name_bn`, `gr_str_basic`, `gr_end_basic`, `gr_incr1`, `gr_1st_phase`, `gr_incr2`, `gr_2nd_phase`) VALUES
(1, 'None', 'নাই', 0, 0, 0, 0, 0, 0),
(2, 'Grade -4', 'গ্রেড-৪', 0, 0, 0, 0, 0, 0),
(3, 'Grade -5', 'গ্রেড-৫', 0, 0, 0, 0, 0, 0),
(4, 'Grade -6', 'গ্রেড-৬', 0, 0, 0, 0, 0, 0),
(5, 'Grade -7', 'গ্রেড-৭', 0, 0, 0, 0, 0, 0),
(6, 'Grade -3', 'গ্রেড-৩', 0, 0, 0, 0, 0, 0),
(7, 'Grade-2', 'গ্রেড - ২', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pr_holiday`
--

CREATE TABLE IF NOT EXISTS `pr_holiday` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `holiday_date` date NOT NULL,
  `replace_val` int(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `start_date` (`holiday_date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_holiday_allowance_level`
--

CREATE TABLE IF NOT EXISTS `pr_holiday_allowance_level` (
  `rules_id` int(11) NOT NULL,
  `desig_id` int(11) NOT NULL,
  `priority` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_holiday_allowance_level`
--

INSERT INTO `pr_holiday_allowance_level` (`rules_id`, `desig_id`, `priority`) VALUES
(1, 43, 0),
(1, 33, 0),
(1, 17, 0),
(1, 19, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pr_holiday_allowance_rules`
--

CREATE TABLE IF NOT EXISTS `pr_holiday_allowance_rules` (
  `rules_id` int(11) NOT NULL AUTO_INCREMENT,
  `rules_name` varchar(100) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `allowance_amount` double(5,2) NOT NULL,
  PRIMARY KEY (`rules_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pr_holiday_allowance_rules`
--

INSERT INTO `pr_holiday_allowance_rules` (`rules_id`, `rules_name`, `unit_id`, `allowance_amount`) VALUES
(1, 'A', 1, 100.00),
(4, 'A', 2, 200.00),
(5, 'A', 3, 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `pr_id_proxi`
--

CREATE TABLE IF NOT EXISTS `pr_id_proxi` (
  `emp_id` varchar(100) NOT NULL,
  `proxi_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_incre_prom_pun`
--

CREATE TABLE IF NOT EXISTS `pr_incre_prom_pun` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `prev_emp_id` varchar(20) NOT NULL,
  `prev_dept` varchar(30) NOT NULL,
  `prev_section` varchar(30) NOT NULL,
  `prev_line` varchar(30) NOT NULL,
  `prev_desig` varchar(30) NOT NULL,
  `prev_grade` varchar(3) NOT NULL,
  `prev_salary` int(10) NOT NULL,
  `prev_com_salary` int(11) NOT NULL,
  `new_emp_id` varchar(20) NOT NULL,
  `new_dept` varchar(30) NOT NULL,
  `new_section` varchar(30) NOT NULL,
  `new_line` varchar(30) NOT NULL,
  `new_desig` varchar(30) NOT NULL,
  `new_grade` varchar(3) NOT NULL,
  `new_salary` int(10) NOT NULL,
  `new_com_salary` int(11) NOT NULL,
  `effective_month` date NOT NULL,
  `ref_id` varchar(20) NOT NULL,
  `status` int(1) NOT NULL COMMENT '1=incre,2=prom,3=pun',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_leave`
--

CREATE TABLE IF NOT EXISTS `pr_leave` (
  `lv_id` int(10) NOT NULL AUTO_INCREMENT,
  `lv_name` varchar(50) NOT NULL,
  `status_id` int(2) NOT NULL,
  `lv_sl` int(10) NOT NULL,
  `lv_cl` int(10) NOT NULL,
  `lv_ml` int(10) NOT NULL,
  `lv_pl` int(10) NOT NULL,
  PRIMARY KEY (`lv_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pr_leave`
--

INSERT INTO `pr_leave` (`lv_id`, `lv_name`, `status_id`, `lv_sl`, `lv_cl`, `lv_ml`, `lv_pl`) VALUES
(1, 'Reguler', 1, 14, 10, 112, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pr_leave_earn`
--

CREATE TABLE IF NOT EXISTS `pr_leave_earn` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(20) NOT NULL,
  `old_earn_balance` double(10,2) NOT NULL,
  `current_earn_balance` double(10,2) NOT NULL,
  `last_update` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_leave_earn_max`
--

CREATE TABLE IF NOT EXISTS `pr_leave_earn_max` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `max_earn` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_leave_trans`
--

CREATE TABLE IF NOT EXISTS `pr_leave_trans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(100) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `leave_type` varchar(10) NOT NULL,
  `leave_start` date NOT NULL,
  `leave_end` date NOT NULL,
  `leave_descrip` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_line_num`
--

CREATE TABLE IF NOT EXISTS `pr_line_num` (
  `line_id` int(10) NOT NULL AUTO_INCREMENT,
  `line_name` varchar(50) NOT NULL,
  `line_bangla` varchar(100) CHARACTER SET utf8 NOT NULL,
  `strength` int(100) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `indexing` int(11) NOT NULL,
  PRIMARY KEY (`line_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `pr_line_num`
--

INSERT INTO `pr_line_num` (`line_id`, `line_name`, `line_bangla`, `strength`, `unit_id`, `indexing`) VALUES
(99, 'None', 'নাই', 0, 1, 15),
(2, 'Line-02', 'লাইন-০২', 55, 1, 2),
(1, 'Line-01', 'লাইন-০১', 55, 1, 1),
(3, 'Line-03', 'লাইন-০৩', 55, 1, 3),
(4, 'Line-04', 'লাইন-০৪', 55, 1, 4),
(5, 'Line-05', 'লাইন-০৫', 55, 1, 5),
(8, 'Line-08', 'লাইন-০৮', 55, 1, 8),
(6, 'Line-06', 'লাইন-০৬', 55, 1, 6),
(9, 'Line-09', 'লাইন-০৯', 55, 1, 9),
(10, 'Line-10', 'লাইন-১০', 55, 1, 10),
(12, 'Line-12', 'লাইন-১২', 55, 1, 12),
(13, 'Line-13', 'লাইন-১৩', 55, 1, 13),
(11, 'Line-11', 'লাইন-১১', 55, 1, 11),
(7, 'Line-07', 'লাইন-০৭', 55, 1, 7),
(14, 'Line-14', 'লাইন-১৪', 55, 1, 14),
(15, 'Line-15', 'লাইন-১৫', 55, 1, 15),
(16, 'Line-16', 'লাইন-১৬', 55, 1, 16),
(17, 'Line-17', 'লাইন-১৭', 55, 1, 17),
(18, 'Line-18', 'লাইন-১৮', 55, 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `pr_logout_emp`
--

CREATE TABLE IF NOT EXISTS `pr_logout_emp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_time` time NOT NULL,
  `secoend_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_marrital_status`
--

CREATE TABLE IF NOT EXISTS `pr_marrital_status` (
  `marrital_status_id` int(2) NOT NULL,
  `marrital_status_name` varchar(20) NOT NULL,
  PRIMARY KEY (`marrital_status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_marrital_status`
--

INSERT INTO `pr_marrital_status` (`marrital_status_id`, `marrital_status_name`) VALUES
(1, 'Unmarried'),
(2, 'Married');

-- --------------------------------------------------------

--
-- Table structure for table `pr_night_allowance_level`
--

CREATE TABLE IF NOT EXISTS `pr_night_allowance_level` (
  `rules_id` int(11) NOT NULL,
  `desig_id` int(11) NOT NULL,
  `priority` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_night_allowance_level`
--

INSERT INTO `pr_night_allowance_level` (`rules_id`, `desig_id`, `priority`) VALUES
(4, 108, 0),
(4, 99, 0),
(4, 83, 0),
(4, 93, 0),
(4, 89, 0),
(4, 80, 0),
(4, 86, 0),
(4, 110, 0),
(4, 50, 0),
(4, 59, 0),
(4, 38, 0),
(4, 112, 0),
(4, 111, 0),
(4, 36, 0),
(4, 74, 0),
(4, 58, 0),
(4, 100, 0),
(4, 84, 0),
(4, 94, 0),
(4, 78, 0),
(4, 107, 0),
(4, 90, 0),
(4, 105, 0),
(4, 85, 0),
(4, 81, 0),
(4, 75, 0),
(4, 98, 0),
(4, 103, 0),
(4, 95, 0),
(4, 82, 0),
(4, 104, 0),
(4, 109, 0),
(4, 91, 0),
(4, 79, 0),
(4, 77, 0),
(4, 92, 0),
(4, 72, 0),
(4, 55, 0),
(4, 97, 0),
(4, 40, 0),
(4, 39, 0),
(4, 102, 0),
(4, 106, 0),
(4, 76, 0),
(4, 88, 0),
(4, 101, 0),
(4, 87, 0),
(4, 71, 0),
(14, 65, 0),
(14, 21, 0),
(14, 24, 0),
(14, 26, 0),
(14, 47, 0),
(14, 80, 0),
(14, 66, 0),
(14, 30, 0),
(14, 14, 0),
(14, 54, 0),
(14, 25, 0),
(14, 28, 0),
(14, 3, 0),
(14, 67, 0),
(14, 9, 0),
(14, 43, 0),
(14, 32, 0),
(14, 46, 0),
(14, 56, 0),
(14, 1, 0),
(14, 31, 0),
(14, 12, 0),
(14, 11, 0),
(14, 62, 0),
(14, 61, 0),
(14, 69, 0),
(14, 18, 0),
(14, 19, 0),
(14, 34, 0),
(14, 16, 0),
(14, 53, 0),
(14, 113, 0),
(14, 15, 0),
(14, 44, 0),
(14, 8, 0),
(14, 5, 0),
(14, 13, 0),
(14, 10, 0),
(14, 23, 0),
(14, 63, 0),
(14, 4, 0),
(14, 73, 0),
(14, 29, 0),
(14, 52, 0),
(14, 7, 0),
(14, 60, 0),
(14, 68, 0),
(14, 51, 0),
(14, 45, 0),
(14, 41, 0),
(14, 48, 0),
(14, 57, 0),
(14, 27, 0),
(14, 6, 0),
(14, 2, 0),
(14, 33, 0),
(14, 42, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pr_night_allowance_rules`
--

CREATE TABLE IF NOT EXISTS `pr_night_allowance_rules` (
  `rules_id` int(11) NOT NULL AUTO_INCREMENT,
  `rules_name` varchar(100) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `night_time` time NOT NULL,
  `night_time_2nd` time NOT NULL,
  `night_allowance` int(11) NOT NULL,
  `night_allowance_2nd` int(10) NOT NULL,
  PRIMARY KEY (`rules_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `pr_night_allowance_rules`
--

INSERT INTO `pr_night_allowance_rules` (`rules_id`, `rules_name`, `unit_id`, `night_time`, `night_time_2nd`, `night_allowance`, `night_allowance_2nd`) VALUES
(1, 'A', 3, '23:50:00', '02:00:00', 100, 200),
(2, 'B', 3, '23:50:00', '01:00:00', 75, 150),
(3, 'C', 3, '23:50:00', '00:00:00', 50, 0),
(4, 'A', 1, '23:00:00', '23:59:00', 20, 40),
(8, 'A', 2, '00:02:00', '00:00:00', 100, 0),
(9, 'D', 3, '23:50:00', '00:00:00', 30, 0),
(10, 'B', 2, '00:02:00', '00:00:00', 75, 0),
(11, 'C', 2, '00:02:00', '00:00:00', 50, 0),
(12, 'D', 2, '00:02:00', '00:00:00', 30, 0),
(13, 'E', 2, '00:02:00', '00:00:00', 30, 0),
(14, 'B', 1, '23:00:00', '23:59:00', 25, 50);

-- --------------------------------------------------------

--
-- Table structure for table `pr_night_rules`
--

CREATE TABLE IF NOT EXISTS `pr_night_rules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `deduct_hour` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pr_night_rules`
--

INSERT INTO `pr_night_rules` (`id`, `unit_id`, `deduct_hour`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pr_ot`
--

CREATE TABLE IF NOT EXISTS `pr_ot` (
  `ot_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(100) NOT NULL,
  `ot_hr_mar` int(10) NOT NULL,
  `ot_hr_nonmar` int(10) NOT NULL,
  `ot_amt_mar` int(10) NOT NULL,
  `ot_amt_nonmar` int(10) NOT NULL,
  `ot_month` date NOT NULL,
  PRIMARY KEY (`ot_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_ot_show_or_not`
--

CREATE TABLE IF NOT EXISTS `pr_ot_show_or_not` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salary_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pr_ot_show_or_not`
--

INSERT INTO `pr_ot_show_or_not` (`id`, `salary_name`) VALUES
(1, 'none'),
(2, 'com');

-- --------------------------------------------------------

--
-- Table structure for table `pr_payment`
--

CREATE TABLE IF NOT EXISTS `pr_payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(100) NOT NULL,
  `payment_amount` int(11) NOT NULL,
  `payment_month` date NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_pay_scale_sheet`
--

CREATE TABLE IF NOT EXISTS `pr_pay_scale_sheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `floor_id` int(10) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `desig_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `line_id` int(11) NOT NULL,
  `emp_status` int(11) NOT NULL,
  `emp_sex` int(11) NOT NULL,
  `stop_salary` int(11) NOT NULL,
  `salary_draw` int(10) NOT NULL,
  `basic_sal` int(11) NOT NULL,
  `house_r` int(11) NOT NULL,
  `medical_a` int(11) NOT NULL,
  `food_allow` int(11) NOT NULL,
  `trans_allow` int(11) NOT NULL,
  `gross_sal` int(11) NOT NULL,
  `total_days` int(11) NOT NULL,
  `num_of_workday` int(11) NOT NULL,
  `att_days` int(11) NOT NULL,
  `absent_days` int(11) NOT NULL,
  `before_after_absent` int(11) NOT NULL,
  `c_l` int(11) NOT NULL,
  `s_l` int(11) NOT NULL,
  `e_l` int(11) NOT NULL,
  `m_l` int(11) NOT NULL,
  `wp` int(11) NOT NULL,
  `total_leave` int(11) NOT NULL,
  `total_pay_leave` int(11) NOT NULL,
  `holiday` int(11) NOT NULL,
  `weekend` int(11) NOT NULL,
  `total_holiday` int(11) NOT NULL,
  `pay_days` int(11) NOT NULL,
  `abs_deduction` int(11) NOT NULL,
  `abs_deduct_cnonc_mix` int(11) NOT NULL,
  `late_count` int(11) NOT NULL,
  `late_deduct` int(11) NOT NULL,
  `deduct_hour` int(11) NOT NULL,
  `modify_hour` int(10) NOT NULL,
  `deduct_amount` double(10,2) NOT NULL,
  `adv_deduct` int(11) NOT NULL,
  `due_pay_add` int(100) NOT NULL,
  `others_deduct` int(11) NOT NULL,
  `tax_deduct` double(10,2) NOT NULL,
  `stamp` int(11) NOT NULL,
  `total_deduct` int(11) NOT NULL,
  `total_deduction_cnonc_mix` int(11) NOT NULL,
  `att_bonus` int(11) NOT NULL,
  `weekend_alo_count` int(11) NOT NULL,
  `weekend_allowance_rate` int(11) NOT NULL,
  `weekend_allowance` int(11) NOT NULL,
  `holiday_alo_count` int(11) NOT NULL,
  `holiday_allowance` int(11) NOT NULL,
  `holiday_allowance_rate` double(10,2) NOT NULL,
  `night_alo_count` int(11) NOT NULL,
  `night_allowance` double(10,2) NOT NULL,
  `night_allowance_rate` int(11) NOT NULL,
  `night_alo_count_2nd` int(10) NOT NULL,
  `night_allowance_2nd` int(10) NOT NULL,
  `night_allowance_rate_2nd` int(10) NOT NULL,
  `total_allaw_2nd` int(10) NOT NULL,
  `gtotal_allaw` int(10) NOT NULL,
  `total_allaw` int(11) NOT NULL,
  `ot_hour` double(10,1) NOT NULL,
  `w_h_ot` int(10) NOT NULL,
  `ot_amount` int(11) NOT NULL,
  `w_h_ot_amt` int(10) NOT NULL,
  `ot_rate` double(10,2) NOT NULL,
  `eot_hour` double(10,1) NOT NULL,
  `eot_amount` int(11) NOT NULL,
  `eot_hr_for_sa` int(11) NOT NULL,
  `eot_amt_for_sa` int(11) NOT NULL,
  `festival_bonus` int(11) NOT NULL,
  `net_pay` int(11) NOT NULL,
  `net_pay_cnonc_mix` int(11) NOT NULL,
  `salary_month` date NOT NULL,
  `collect_eot_hour` int(11) NOT NULL,
  `modify_eot_hour` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_pay_scale_sheet_com`
--

CREATE TABLE IF NOT EXISTS `pr_pay_scale_sheet_com` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `floor_id` int(10) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `desig_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `line_id` int(11) NOT NULL,
  `emp_status` int(11) NOT NULL,
  `emp_sex` int(11) NOT NULL,
  `stop_salary` int(11) NOT NULL,
  `salary_draw` int(10) NOT NULL,
  `basic_sal` int(11) NOT NULL,
  `house_r` int(11) NOT NULL,
  `medical_a` int(11) NOT NULL,
  `food_allow` int(11) NOT NULL,
  `trans_allow` int(11) NOT NULL,
  `gross_sal` int(11) NOT NULL,
  `total_days` int(11) NOT NULL,
  `num_of_workday` int(11) NOT NULL,
  `att_days` int(11) NOT NULL,
  `absent_days` int(11) NOT NULL,
  `before_after_absent` int(11) NOT NULL,
  `c_l` int(11) NOT NULL,
  `s_l` int(11) NOT NULL,
  `e_l` int(11) NOT NULL,
  `m_l` int(11) NOT NULL,
  `wp` int(11) NOT NULL,
  `total_leave` int(11) NOT NULL,
  `total_pay_leave` int(11) NOT NULL,
  `holiday` int(11) NOT NULL,
  `weekend` int(11) NOT NULL,
  `total_holiday` int(11) NOT NULL,
  `pay_days` int(11) NOT NULL,
  `abs_deduction` int(11) NOT NULL,
  `abs_deduct_cnonc_mix` int(100) NOT NULL,
  `late_count` int(11) NOT NULL,
  `late_deduct` int(11) NOT NULL,
  `deduct_hour` int(11) NOT NULL,
  `modify_hour` int(10) NOT NULL,
  `deduct_amount` double(10,2) NOT NULL,
  `adv_deduct` int(11) NOT NULL,
  `due_pay_add` int(100) NOT NULL,
  `others_deduct` int(11) NOT NULL,
  `tax_deduct` double(10,2) NOT NULL,
  `stamp` int(11) NOT NULL,
  `total_deduct` int(11) NOT NULL,
  `att_bonus` int(11) NOT NULL,
  `holiday_alo_count` int(11) NOT NULL,
  `holiday_allowance` int(11) NOT NULL,
  `holiday_allowance_rate` double(10,2) NOT NULL,
  `night_alo_count` int(11) NOT NULL,
  `night_allowance` double(10,2) NOT NULL,
  `night_allowance_rate` int(11) NOT NULL,
  ` 	night_alo_count_2nd` int(10) NOT NULL,
  `night_allowance_2nd` int(10) NOT NULL,
  `night_allowance_rate_2nd` int(10) NOT NULL,
  `total_allaw_2nd` int(10) NOT NULL,
  `gtotal_allaw` int(10) NOT NULL,
  `total_allaw` int(11) NOT NULL,
  `ot_hour` double(10,1) NOT NULL,
  `w_h_ot` int(10) NOT NULL,
  `ot_amount` int(11) NOT NULL,
  `w_h_ot_amt` int(10) NOT NULL,
  `ot_rate` double(10,2) NOT NULL,
  `collect_eot_hour` int(11) NOT NULL,
  `modify_eot_hour` int(11) NOT NULL,
  `eot_hour` double(10,1) NOT NULL,
  `eot_amount` int(11) NOT NULL,
  `festival_bonus` int(11) NOT NULL,
  `net_pay` int(11) NOT NULL,
  `net_pay_cnonc_mix` int(100) NOT NULL,
  `salary_month` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_pay_scale_sheet_old`
--

CREATE TABLE IF NOT EXISTS `pr_pay_scale_sheet_old` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `desig_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `line_id` int(11) NOT NULL,
  `emp_status` int(11) NOT NULL,
  `emp_sex` int(11) NOT NULL,
  `stop_salary` int(11) NOT NULL,
  `basic_sal` int(11) NOT NULL,
  `house_r` int(11) NOT NULL,
  `medical_a` int(11) NOT NULL,
  `food_allow` int(11) NOT NULL,
  `trans_allow` int(11) NOT NULL,
  `gross_sal` int(11) NOT NULL,
  `total_days` int(11) NOT NULL,
  `num_of_workday` int(11) NOT NULL,
  `att_days` int(11) NOT NULL,
  `absent_days` int(11) NOT NULL,
  `before_after_absent` int(11) NOT NULL,
  `c_l` int(11) NOT NULL,
  `s_l` int(11) NOT NULL,
  `e_l` int(11) NOT NULL,
  `m_l` int(11) NOT NULL,
  `wp` int(11) NOT NULL,
  `total_leave` int(11) NOT NULL,
  `total_pay_leave` int(11) NOT NULL,
  `holiday` int(11) NOT NULL,
  `weekend` int(11) NOT NULL,
  `total_holiday` int(11) NOT NULL,
  `pay_days` int(11) NOT NULL,
  `abs_deduction` int(11) NOT NULL,
  `late_count` int(11) NOT NULL,
  `late_deduct` int(11) NOT NULL,
  `deduct_hour` int(11) NOT NULL,
  `deduct_amount` double(10,2) NOT NULL,
  `adv_deduct` int(11) NOT NULL,
  `others_deduct` int(11) NOT NULL,
  `tax_deduct` double(10,2) NOT NULL,
  `stamp` int(11) NOT NULL,
  `total_deduct` int(11) NOT NULL,
  `att_bonus` int(11) NOT NULL,
  `weekend_alo_count` int(11) NOT NULL,
  `weekend_allowance_rate` int(11) NOT NULL,
  `weekend_allowance` int(11) NOT NULL,
  `holiday_alo_count` int(11) NOT NULL,
  `holiday_allowance` int(11) NOT NULL,
  `holiday_allowance_rate` double(10,2) NOT NULL,
  `night_alo_count` int(11) NOT NULL,
  `night_allowance` double(10,2) NOT NULL,
  `night_allowance_rate` int(11) NOT NULL,
  `total_allaw` int(11) NOT NULL,
  `ot_hour` int(11) NOT NULL,
  `ot_amount` int(11) NOT NULL,
  `ot_rate` double(10,2) NOT NULL,
  `eot_hour` int(11) NOT NULL,
  `eot_amount` int(11) NOT NULL,
  `festival_bonus` int(11) NOT NULL,
  `net_pay` int(11) NOT NULL,
  `salary_month` date NOT NULL,
  `collect_eot_hour` int(11) NOT NULL,
  `modify_eot_hour` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_pf_bank_interests`
--

CREATE TABLE IF NOT EXISTS `pr_pf_bank_interests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month` date NOT NULL,
  `bank_interest_rate` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_provident_fund_rules`
--

CREATE TABLE IF NOT EXISTS `pr_provident_fund_rules` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `pf_start_month` int(2) NOT NULL,
  `pf_end_month` int(10) NOT NULL,
  `pf_percentage` varchar(20) NOT NULL,
  `pf_deduct_percentage` varchar(20) NOT NULL,
  `salay_type` enum('Basic','Gross') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_religions`
--

CREATE TABLE IF NOT EXISTS `pr_religions` (
  `religion_id` int(2) NOT NULL AUTO_INCREMENT,
  `religion_name` varchar(20) NOT NULL,
  PRIMARY KEY (`religion_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pr_religions`
--

INSERT INTO `pr_religions` (`religion_id`, `religion_name`) VALUES
(1, 'MUSLIM'),
(2, 'HINDU'),
(3, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `pr_salary_block`
--

CREATE TABLE IF NOT EXISTS `pr_salary_block` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `block_month` date NOT NULL,
  `status` enum('Block','Unblock') NOT NULL,
  `username` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_salary_festival_block`
--

CREATE TABLE IF NOT EXISTS `pr_salary_festival_block` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `block_month` date NOT NULL,
  `status` enum('Block','Unblock') NOT NULL,
  `username` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_salary_withdraw`
--

CREATE TABLE IF NOT EXISTS `pr_salary_withdraw` (
  `sal_withdraw_id` int(2) NOT NULL,
  `sal_withdraw_name` varchar(20) NOT NULL,
  PRIMARY KEY (`sal_withdraw_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_salary_withdraw`
--

INSERT INTO `pr_salary_withdraw` (`sal_withdraw_id`, `sal_withdraw_name`) VALUES
(1, 'Cash'),
(2, 'Bank');

-- --------------------------------------------------------

--
-- Table structure for table `pr_salry_types`
--

CREATE TABLE IF NOT EXISTS `pr_salry_types` (
  `sal_type_id` int(2) NOT NULL,
  `sal_type_name` varchar(20) NOT NULL,
  PRIMARY KEY (`sal_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_salry_types`
--

INSERT INTO `pr_salry_types` (`sal_type_id`, `sal_type_name`) VALUES
(1, 'Fixed'),
(2, 'Production');

-- --------------------------------------------------------

--
-- Table structure for table `pr_section`
--

CREATE TABLE IF NOT EXISTS `pr_section` (
  `sec_id` int(10) NOT NULL AUTO_INCREMENT,
  `sec_name` varchar(50) NOT NULL,
  `sec_bangla` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `strength` int(100) NOT NULL,
  `str_staff` int(100) NOT NULL,
  `sec_index` int(10) NOT NULL,
  `absent_report_index` int(10) NOT NULL,
  `unit_id` int(11) NOT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `pr_section`
--

INSERT INTO `pr_section` (`sec_id`, `sec_name`, `sec_bangla`, `strength`, `str_staff`, `sec_index`, `absent_report_index`, `unit_id`) VALUES
(1, 'Store', 'স্টোর', 0, 11, 24, 5, 1),
(2, 'Maintenance', 'রক্ষণাবেক্ষণ', 0, 18, 19, 7, 1),
(3, 'Production', 'উৎপাদন', 0, 1, 21, 3, 1),
(4, 'Management', 'ব্যবস্থাপনা', 0, 3, 20, 1, 1),
(5, 'Administration', 'প্রশাসন', 0, 23, 16, 2, 1),
(6, 'Sample', 'স্যাম্পল', 0, 10, 25, 6, 1),
(7, 'PRODUCTION-01', 'উৎপাদন -১', 0, 19, 22, 8, 1),
(8, 'PRODUCTION-02', 'উৎপাদন -২', 0, 19, 23, 9, 1),
(9, 'Industrial Engineering', 'শিল্প প্রকৌশল', 0, 9, 18, 4, 1),
(10, 'PRODUCTION-3', 'উৎপাদন -৩', 0, 19, 24, 10, 1),
(11, 'Cutting', 'কাটিং', 129, 129, 2, 11, 1),
(12, 'Finishing-1', 'ফিনিশিং -১', 111, 4, 4, 17, 1),
(13, 'Finishing-2', 'ফিনিশিং -২', 111, 4, 10, 18, 1),
(14, 'Finishing-3', 'ফিনিশিং -৩', 111, 4, 13, 19, 1),
(15, 'Quality-1(Sewing)', 'কোয়ালিটি -১ ( সুইং )', 35, 12, 5, 23, 1),
(16, 'Quality-2(Sewing)', 'কোয়ালিটি -২ ( সুইং )', 35, 11, 11, 24, 1),
(17, 'Quality-3(Sewing)', 'কোয়ালিটি -৩ ( সুইং )', 35, 11, 14, 25, 1),
(18, 'Fusing', 'ফিউজিং', 0, 26, 8, 16, 1),
(19, 'None', '', 0, 0, 26, 0, 1),
(20, 'Admin  4th Class', 'এডমিন ৪র্থ শ্রেণী', 35, 35, 15, 14, 1),
(21, 'Make-1', 'মেক -১', 150, 0, 3, 20, 1),
(22, 'Make-2', 'মেক -২', 150, 0, 9, 21, 1),
(23, 'Make-3', 'মেক -৩', 150, 0, 12, 22, 1),
(24, 'Sewing', 'সুইং', 0, 0, 1, 26, 1),
(25, 'Quality(Cutting)', 'কোয়ালিটি ( কাটিং )', 14, 14, 6, 12, 1),
(26, 'Quality(Store)', 'কোয়ালিটি ( স্টোর)', 7, 7, 7, 13, 1),
(27, 'Cleaning', 'ক্লিনিং', 35, 35, 17, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pr_setup`
--

CREATE TABLE IF NOT EXISTS `pr_setup` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `attributes` varchar(20) NOT NULL,
  `value` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pr_setup`
--

INSERT INTO `pr_setup` (`id`, `attributes`, `value`) VALUES
(1, 'deduct_status', 'No'),
(2, 'eot_leisure', '9'),
(3, 'late_count', '3'),
(4, 'earn_leave_month', '12'),
(5, 'weekend', 'Fri'),
(6, 'pf_status', 'No'),
(7, 'workoff_eot_lunch_de', '14:00:00'),
(8, 'probation_period', '3'),
(9, 'continuous_absent', '20'),
(10, 'hour_or_minute', 'minute');

-- --------------------------------------------------------

--
-- Table structure for table `pr_tiffin_allowance_level`
--

CREATE TABLE IF NOT EXISTS `pr_tiffin_allowance_level` (
  `rules_id` int(11) NOT NULL,
  `desig_id` int(11) NOT NULL,
  `priority` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_tiffin_allowance_rules`
--

CREATE TABLE IF NOT EXISTS `pr_tiffin_allowance_rules` (
  `rules_id` int(11) NOT NULL AUTO_INCREMENT,
  `rules_name` varchar(100) NOT NULL,
  `tiffin_allowance` double(5,2) NOT NULL,
  `tiffin_time` time NOT NULL,
  PRIMARY KEY (`rules_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_tiffin_bill`
--

CREATE TABLE IF NOT EXISTS `pr_tiffin_bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tiffin_bill_name` varchar(30) NOT NULL,
  `tiffin_time` time NOT NULL,
  `amount` double(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pr_tiffin_bill`
--

INSERT INTO `pr_tiffin_bill` (`id`, `tiffin_bill_name`, `tiffin_time`, `amount`) VALUES
(1, 'All', '22:00:00', 12.00);

-- --------------------------------------------------------

--
-- Table structure for table `pr_units`
--

CREATE TABLE IF NOT EXISTS `pr_units` (
  `unit_id` int(10) NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unit_name_bangla` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `unit_add` varchar(500) CHARACTER SET utf8 NOT NULL,
  `unit_add_bangla` varchar(500) CHARACTER SET utf8 NOT NULL,
  `logo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `unit_signature` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`unit_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pr_units`
--

INSERT INTO `pr_units` (`unit_id`, `unit_name`, `unit_name_bangla`, `unit_add`, `unit_add_bangla`, `logo`, `unit_signature`) VALUES
(1, 'Bando Fashions Ltd. ', 'ব্যান্ডো ফ্যাশনস লিমিটেড', 'Bade Kalameshar, K.B. Bazar, Gazipur', 'বাদে কলমেশ্বর, কে.বি. বাজার, গাজীপুর', 'e4006-companylogo.png', 'decf3-gmsignature.png');

-- --------------------------------------------------------

--
-- Table structure for table `pr_weekend_allowance_level`
--

CREATE TABLE IF NOT EXISTS `pr_weekend_allowance_level` (
  `rules_id` int(11) NOT NULL,
  `desig_id` int(11) NOT NULL,
  `priority` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_weekend_allowance_level`
--

INSERT INTO `pr_weekend_allowance_level` (`rules_id`, `desig_id`, `priority`) VALUES
(3, 65, 0),
(3, 25, 0),
(3, 28, 0),
(3, 43, 0),
(3, 56, 0),
(3, 1, 0),
(3, 12, 0),
(3, 18, 0),
(3, 8, 0),
(3, 5, 0),
(3, 52, 0),
(3, 68, 0),
(3, 33, 0),
(7, 21, 0),
(7, 24, 0),
(7, 26, 0),
(7, 47, 0),
(7, 66, 0),
(7, 14, 0),
(7, 54, 0),
(7, 9, 0),
(7, 32, 0),
(7, 36, 0),
(7, 46, 0),
(7, 56, 0),
(7, 11, 0),
(7, 62, 0),
(7, 69, 0),
(7, 34, 0),
(7, 53, 0),
(7, 113, 0),
(7, 15, 0),
(7, 44, 0),
(7, 13, 0),
(7, 10, 0),
(7, 23, 0),
(7, 4, 0),
(7, 29, 0),
(7, 40, 0),
(7, 7, 0),
(7, 60, 0),
(7, 41, 0),
(7, 48, 0),
(7, 27, 0),
(7, 6, 0),
(7, 49, 0),
(7, 42, 0),
(7, 35, 0),
(8, 38, 0),
(8, 37, 0),
(8, 111, 0),
(8, 36, 0),
(8, 72, 0),
(8, 71, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pr_weekend_allowance_rules`
--

CREATE TABLE IF NOT EXISTS `pr_weekend_allowance_rules` (
  `rules_id` int(11) NOT NULL AUTO_INCREMENT,
  `rules_name` varchar(100) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `allowance_amount` double(5,2) NOT NULL,
  PRIMARY KEY (`rules_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pr_weekend_allowance_rules`
--

INSERT INTO `pr_weekend_allowance_rules` (`rules_id`, `rules_name`, `unit_id`, `allowance_amount`) VALUES
(1, 'B', 2, 200.00),
(3, 'A', 1, 100.00),
(6, 'A', 3, 100.00),
(7, 'B', 1, 50.00),
(8, 'C', 1, 40.00);

-- --------------------------------------------------------

--
-- Table structure for table `pr_work_off`
--

CREATE TABLE IF NOT EXISTS `pr_work_off` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `work_off_date` date NOT NULL,
  `replace_val` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `work_off_date` (`work_off_date`),
  KEY `emp_id` (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_work_process`
--

CREATE TABLE IF NOT EXISTS `pr_work_process` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `process` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `pr_work_process`
--

INSERT INTO `pr_work_process` (`id`, `process`) VALUES
(1, 'none'),
(6, 'কাফ মেক এন্ড টপ স্টিচ'),
(7, 'কাফ টপ স্টিচ'),
(8, 'কলার মেক'),
(9, 'কলার টপ স্টিচ'),
(10, 'কাফ মেক'),
(11, 'মেইন লেবেল এটাচ'),
(12, 'আপার ফ্রন্ট প্ল্যাকেট'),
(13, 'লোয়ার ফ্রন্ট প্ল্যাকেট'),
(14, 'ব্যাক ইয়ক এটাচ'),
(15, 'বাটন হোল'),
(16, 'বাটন এটাচ'),
(17, 'পকেট এটাচ'),
(18, 'স্লিভ পাইপিং এটাচ'),
(19, 'স্লিভ প্লাকেট এটাচ'),
(20, 'সোল্ডার জয়েন্ট'),
(21, 'সোল্ডার টপ স্টিচ'),
(22, 'কলার এটাচ'),
(23, 'কলার টপ স্টিচ'),
(24, 'স্লিভ  এটাচ'),
(25, 'আরমহোল টপ স্টিচ'),
(26, 'সাইড সিয়েম'),
(27, 'কাফ এটাচ'),
(28, 'বটম হেম'),
(29, 'ফ্রন্ট জয়েন্ট'),
(30, 'পকেট রোলিং'),
(31, 'স্লিভ  এটাচ + আর্মহোল টপসিম'),
(32, 'আপার ফ্রন্ট + লোয়ার ফ্রন্ট প্ল্যাকেট'),
(33, 'কেয়ার লেভেল+ মেইন লেভেল+বাটনহোল'),
(34, 'কেয়ার লেভেল+ মেইন লেভেল'),
(35, 'ব্যাক ইয়ক আয়রণ'),
(36, 'পকেট ও প্ল্যাকেট জয়েন্ট + ফ্লাভ জয়েন্ট'),
(37, 'পকেট জয়েন্ট + প্ল্যাকেট জয়েন্ট'),
(38, 'স্লিভ প্লাকেট এটাচ + স্লিভ পাইপিং এটাচ '),
(39, 'পকেট এটাচ + স্লিভ প্লাকেট এটাচ'),
(40, 'গ্যাম্বল জয়েন্ট'),
(41, 'পকেট আয়রণ'),
(42, 'প্যাকেট আয়রণ'),
(43, 'পকেট + প্যাকেট আয়রণ'),
(44, 'ব্যাকপার্ট আয়রণ'),
(45, 'ফ্রন্টপার্ট আয়রণ'),
(46, 'আরমহোল ফিউজিং'),
(47, 'পকেট রোলিং'),
(49, 'বাটন পকেট রোলিং'),
(50, 'ওভারলক'),
(51, 'কাফ রুলিং'),
(52, 'কাফ হোল'),
(53, 'কাফ বাটন এস্টাচ'),
(54, 'কলার ব্যান্ডজয়েন্ট'),
(55, 'ব্যান্ড টপস্টিচ'),
(56, 'বটম কাটিং'),
(57, 'কলার পয়েন্ট হোল'),
(58, 'কলার ব্যান্ড রোলিং'),
(59, 'কলার ফরমিং'),
(60, 'কাফ ফরমিং'),
(61, 'নেক হোল'),
(62, 'বক্র প্ল্যাকেট ফিউজিং'),
(63, 'কাফ লাইনিং আয়রণ'),
(64, 'স্লিভ প্ল্যাকেট আয়রণ'),
(65, 'কাফ লাইনিং টাস আফ'),
(66, 'কলার লাইনিং আয়রণ'),
(67, 'ব্যান্ড জয়েন্ট'),
(68, 'আয়রণ '),
(69, 'হেলপার'),
(70, 'ল্যাব কাজে  সহায়তা করা');

-- --------------------------------------------------------

--
-- Table structure for table `pr_yes_no`
--

CREATE TABLE IF NOT EXISTS `pr_yes_no` (
  `id` int(2) NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_yes_no`
--

INSERT INTO `pr_yes_no` (`id`, `name`) VALUES
(0, 'Yes'),
(1, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `setup_auto_date`
--

CREATE TABLE IF NOT EXISTS `setup_auto_date` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setup_auto_date`
--

INSERT INTO `setup_auto_date` (`id`, `date`) VALUES
(0, '2019-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `staff_ot_list_emp`
--

CREATE TABLE IF NOT EXISTS `staff_ot_list_emp` (
  `emp_id` int(100) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
