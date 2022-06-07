-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 02:49 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnus_bio`
--

CREATE TABLE `alumnus_bio` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `batch` year(4) NOT NULL,
  `course_id` int(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `connected_to` text NOT NULL,
  `avatar` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0= Unverified, 1= Verified',
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumnus_bio`
--

INSERT INTO `alumnus_bio` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `batch`, `course_id`, `email`, `connected_to`, `avatar`, `status`, `date_created`) VALUES
(0, 'Kumar', 'CS', 'Natesh', 'Male', 0000, 16, 'nkbbsul98@gmail.com', 'Mern Developer', '1639414980_Snapchat-2007320232.jpg', 1, '2021-12-13'),
(3, 'Natesh', '_', 'Kumar', 'Male', 2018, 3, 'nkbbsul98@gmail.com', 'Softwae', '1633968000_WhatsApp Image 2021-10-10 at 7.28.30 PM.jpeg', 1, '2021-10-11'),
(5, 'Bheel', 'CS', 'Nandlal', 'Male', 0000, 3, 'bbsul98@gmail.com', 'Graphic Designer', '1638480540_Snapchat-1592946168.jpg', 1, '2021-12-03'),
(6, 'Ali', 'CS', 'Sajjad', 'Male', 0000, 3, 'example@gmail.com', 'Data Scientist', '1638480720_IMG-20210711-WA0039.jpg', 0, '2021-12-03'),
(8, 'Kumar', 'CS', 'Natesh', 'Male', 0000, 3, 'bbl98@gmail.com', 'Web Developer', '1638481200_IMG-20210202-WA0046.jpg', 1, '2021-12-03'),
(9, 'Kumar', '', 'Natesh', 'Male', 0000, 12, 'bbhsul98@gmail.com', 'Software Developer', '1639164900_IMG-20210202-WA0057.jpg', 0, '2021-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `batch4`
--

CREATE TABLE `batch4` (
  `it_batch4_id` int(11) NOT NULL,
  `it_batch4_name` varchar(255) NOT NULL,
  `it_batch4_reg` varchar(255) NOT NULL,
  `it_batch4_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bba_batch`
--

CREATE TABLE `bba_batch` (
  `bba_batch_id` int(11) NOT NULL,
  `bba_batch_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bba_batch`
--

INSERT INTO `bba_batch` (`bba_batch_id`, `bba_batch_name`) VALUES
(1, 'Batch 1'),
(2, 'Batch 2'),
(3, 'Batch 3'),
(4, 'Batch 4'),
(5, 'Batch 5'),
(6, 'Batch 6'),
(7, 'Batch 7'),
(8, 'Batch 8'),
(9, 'Batch 9'),
(10, 'Batch 10'),
(11, 'Batch 11'),
(12, 'Batch 12');

-- --------------------------------------------------------

--
-- Table structure for table `bba_batch1`
--

CREATE TABLE `bba_batch1` (
  `bba_batch1_id` int(11) NOT NULL,
  `bba_batch1_name` varchar(255) NOT NULL,
  `bba_batch1_reg` varchar(255) NOT NULL,
  `bba_batch1_desgination` varchar(255) NOT NULL,
  `bba_batch1_contact_no` int(11) NOT NULL,
  `bba_batch1_email` varchar(255) NOT NULL,
  `bba_batch1_cnic` int(13) NOT NULL,
  `bba_batch1_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bba_batch1`
--

INSERT INTO `bba_batch1` (`bba_batch1_id`, `bba_batch1_name`, `bba_batch1_reg`, `bba_batch1_desgination`, `bba_batch1_contact_no`, `bba_batch1_email`, `bba_batch1_cnic`, `bba_batch1_cgpa`) VALUES
(1, 'Chaman', '87989', 'Study 2 Year', 0, '', 0, ''),
(2, 'Zahid Balouch', '87989', 'Finance', 2147483647, 'example@gmail.com', 2147483647, '3.9');

-- --------------------------------------------------------

--
-- Table structure for table `bba_batch2`
--

CREATE TABLE `bba_batch2` (
  `bba_batch2_id` int(11) NOT NULL,
  `bba_batch2_name` varchar(255) NOT NULL,
  `bba_batch2_reg` varchar(255) NOT NULL,
  `bba_batch2_desgination` varchar(255) NOT NULL,
  `bba_batch2_contact_no` int(11) NOT NULL,
  `bba_batch2_email` varchar(255) NOT NULL,
  `bba_batch2_cnic` int(13) NOT NULL,
  `bba_batch2_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bba_batch3`
--

CREATE TABLE `bba_batch3` (
  `bba_batch3_id` int(11) NOT NULL,
  `bba_batch3_name` varchar(255) NOT NULL,
  `bba_batch3_reg` varchar(255) NOT NULL,
  `bba_batch3_desgination` varchar(255) NOT NULL,
  `bba_batch3_contact_no` int(11) NOT NULL,
  `bba_batch3_email` varchar(255) NOT NULL,
  `bba_batch3_cnic` int(13) NOT NULL,
  `bba_batch3_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bba_batch3`
--

INSERT INTO `bba_batch3` (`bba_batch3_id`, `bba_batch3_name`, `bba_batch3_reg`, `bba_batch3_desgination`, `bba_batch3_contact_no`, `bba_batch3_email`, `bba_batch3_cnic`, `bba_batch3_cgpa`) VALUES
(1, 'Nabeel', 'BSCS604', 'Data Scientist', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `bba_batch4`
--

CREATE TABLE `bba_batch4` (
  `bba_batch4_id` int(11) NOT NULL,
  `bba_batch4_name` varchar(255) NOT NULL,
  `bba_batch4_reg` varchar(255) NOT NULL,
  `bba_batch4_desgination` varchar(255) NOT NULL,
  `bba_batch4_contact_no` int(11) NOT NULL,
  `bba_batch4_email` varchar(255) NOT NULL,
  `bba_batch4_cnic` int(13) NOT NULL,
  `bba_batch4_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bba_batch4`
--

INSERT INTO `bba_batch4` (`bba_batch4_id`, `bba_batch4_name`, `bba_batch4_reg`, `bba_batch4_desgination`, `bba_batch4_contact_no`, `bba_batch4_email`, `bba_batch4_cnic`, `bba_batch4_cgpa`) VALUES
(1, 'Ghansham', '8765', 'Study', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `bba_batch5`
--

CREATE TABLE `bba_batch5` (
  `bba_batch5_id` int(11) NOT NULL,
  `bba_batch5_name` varchar(255) NOT NULL,
  `bba_batch5_reg` varchar(255) NOT NULL,
  `bba_batch5_desgination` varchar(255) NOT NULL,
  `bba_batch5_contact_no` int(11) NOT NULL,
  `bba_batch5_email` varchar(255) NOT NULL,
  `bba_batch5_cnic` int(13) NOT NULL,
  `bba_batch5_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bba_batch6`
--

CREATE TABLE `bba_batch6` (
  `bba_batch6_id` int(11) NOT NULL,
  `bba_batch6_name` varchar(255) NOT NULL,
  `bba_batch6_reg` varchar(255) NOT NULL,
  `bba_batch6_desgination` varchar(255) NOT NULL,
  `bba_batch6_contact_no` int(11) NOT NULL,
  `bba_batch6_email` varchar(255) NOT NULL,
  `bba_batch6_cnic` int(13) NOT NULL,
  `bba_batch6_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bba_batch7`
--

CREATE TABLE `bba_batch7` (
  `bba_batch7_id` int(11) NOT NULL,
  `bba_batch7_name` varchar(255) NOT NULL,
  `bba_batch7_reg` varchar(255) NOT NULL,
  `bba_batch7_desgination` varchar(255) NOT NULL,
  `bba_batch7_contact_no` int(11) NOT NULL,
  `bba_batch7_email` varchar(255) NOT NULL,
  `bba_batch7_cnic` int(13) NOT NULL,
  `bba_batch7_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bba_batch8`
--

CREATE TABLE `bba_batch8` (
  `bba_batch8_id` int(11) NOT NULL,
  `bba_batch8_name` varchar(255) NOT NULL,
  `bba_batch8_reg` varchar(255) NOT NULL,
  `bba_batch8_desgination` varchar(255) NOT NULL,
  `bba_batch8_contact_no` int(11) NOT NULL,
  `bba_batch8_email` varchar(255) NOT NULL,
  `bba_batch8_cnic` int(13) NOT NULL,
  `bba_batch8_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bba_batch9`
--

CREATE TABLE `bba_batch9` (
  `bba_batch9_id` int(11) NOT NULL,
  `bba_batch9_name` varchar(255) NOT NULL,
  `bba_batch9_reg` varchar(255) NOT NULL,
  `bba_batch9_desgination` varchar(255) NOT NULL,
  `bba_batch9_contact_no` int(11) NOT NULL,
  `bba_batch9_email` varchar(255) NOT NULL,
  `bba_batch9_cnic` int(13) NOT NULL,
  `bba_batch9_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bba_batch10`
--

CREATE TABLE `bba_batch10` (
  `bba_batch10_id` int(11) NOT NULL,
  `bba_batch10_name` varchar(255) NOT NULL,
  `bba_batch10_reg` varchar(255) NOT NULL,
  `bba_batch10_desgination` varchar(255) NOT NULL,
  `bba_batch10_contact_no` int(11) NOT NULL,
  `bba_batch10_email` varchar(255) NOT NULL,
  `bba_batch10_cnic` int(13) NOT NULL,
  `bba_batch10_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bba_batch11`
--

CREATE TABLE `bba_batch11` (
  `bba_batch11_id` int(11) NOT NULL,
  `bba_batch11_name` varchar(255) NOT NULL,
  `bba_batch11_reg` varchar(255) NOT NULL,
  `bba_batch11_desgination` varchar(255) NOT NULL,
  `bba_batch11_contact_no` int(11) NOT NULL,
  `bba_batch11_email` varchar(255) NOT NULL,
  `bba_batch11_cnic` int(13) NOT NULL,
  `bba_batch11_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bba_batch12`
--

CREATE TABLE `bba_batch12` (
  `bba_batch12_id` int(11) NOT NULL,
  `bba_batch12_name` varchar(255) NOT NULL,
  `bba_batch12_reg` varchar(255) NOT NULL,
  `bba_batch12_desgination` varchar(255) NOT NULL,
  `bba_batch12_contact_no` int(11) NOT NULL,
  `bba_batch12_email` varchar(255) NOT NULL,
  `bba_batch12_cnic` int(13) NOT NULL,
  `bba_batch12_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(30) NOT NULL,
  `company` varchar(250) NOT NULL,
  `location` text NOT NULL,
  `job_title` text NOT NULL,
  `description` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `company`, `location`, `job_title`, `description`, `user_id`, `date_created`) VALUES
(1, 'IT Company', 'Home-Based', 'Web Developer', '&lt;p style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. In tellus integer feugiat scelerisque varius morbi enim. Orci eu lobortis elementum nibh tellus molestie nunc. Vulputate ut pharetra sit amet aliquam id diam maecenas ultricies. Lacus sed viverra tellus in hac habitasse platea dictumst vestibulum. Eleifend donec pretium vulputate sapien nec. Enim praesent elementum facilisis leo vel fringilla est ullamcorper. Quam adipiscing vitae proin sagittis nisl rhoncus. Sed viverra ipsum nunc aliquet bibendum. Enim ut sem viverra aliquet eget sit amet tellus. Integer feugiat scelerisque varius morbi enim nunc faucibus.&lt;/p&gt;&lt;p style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Viverra justo nec ultrices dui. Leo vel orci porta non pulvinar neque laoreet. Id semper risus in hendrerit gravida rutrum quisque non tellus. Sit amet consectetur adipiscing elit ut. Id neque aliquam vestibulum morbi blandit cursus risus. Tristique senectus et netus et malesuada. Amet aliquam id diam maecenas ultricies mi eget mauris. Morbi tristique senectus et netus et malesuada. Diam phasellus vestibulum lorem sed risus. Tempor orci dapibus ultrices in. Mi sit amet mauris commodo quis imperdiet. Quisque sagittis purus sit amet volutpat. Vehicula ipsum a arcu cursus. Ornare quam viverra orci sagittis eu volutpat odio facilisis. Id volutpat lacus laoreet non curabitur. Cursus euismod quis viverra nibh cras pulvinar mattis nunc. Id aliquet lectus proin nibh nisl condimentum id venenatis. Eget nulla facilisi etiam dignissim diam quis enim lobortis. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit amet.&lt;/p&gt;', 3, '2020-10-15 14:14:27'),
(2, 'Sample Company', 'Sample location', 'IT Specialist', '&lt;p style=&quot;margin-top: 1.5em; margin-bottom: 1.5em; margin-right: unset; margin-left: unset; color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif; font-size: 16px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. In tellus integer feugiat scelerisque varius morbi enim. Orci eu lobortis elementum nibh tellus molestie nunc. Vulputate ut pharetra sit amet aliquam id diam maecenas ultricies. Lacus sed viverra tellus in hac habitasse platea dictumst vestibulum. Eleifend donec pretium vulputate sapien nec. Enim praesent elementum facilisis leo vel fringilla est ullamcorper. Quam adipiscing vitae proin sagittis nisl rhoncus. Sed viverra ipsum nunc aliquet bibendum. Enim ut sem viverra aliquet eget sit amet tellus. Integer feugiat scelerisque varius morbi enim nunc faucibus.&lt;/p&gt;&lt;p style=&quot;margin-top: 1.5em; margin-bottom: 1.5em; margin-right: unset; margin-left: unset; color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif; font-size: 16px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Viverra justo nec ultrices dui. Leo vel orci porta non pulvinar neque laoreet. Id semper risus in hendrerit gravida rutrum quisque non tellus. Sit amet consectetur adipiscing elit ut. Id neque aliquam vestibulum morbi blandit cursus risus. Tristique senectus et netus et malesuada. Amet aliquam id diam maecenas ultricies mi eget mauris. Morbi tristique senectus et netus et malesuada. Diam phasellus vestibulum lorem sed risus. Tempor orci dapibus ultrices in. Mi sit amet mauris commodo quis imperdiet. Quisque sagittis purus sit amet volutpat. Vehicula ipsum a arcu cursus. Ornare quam viverra orci sagittis eu volutpat odio facilisis. Id volutpat lacus laoreet non curabitur. Cursus euismod quis viverra nibh cras pulvinar mattis nunc. Id aliquet lectus proin nibh nisl condimentum id venenatis. Eget nulla facilisi etiam dignissim diam quis enim lobortis. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit amet.&lt;/p&gt;', 1, '2020-10-15 15:05:37'),
(4, 'Computer Tech', 'Karachi', 'Software Engineer', '', 1, '2021-10-05 10:22:56'),
(5, 'Computer Tech', 'Lahore', 'Data Scientist', 'Near Allama Iqbal Tower&amp;nbsp; Metro Mall G-67', 1, '2021-12-13 18:04:54'),
(6, 'Spark', 'Rawalpindi', 'Web Developer', 'Near Sultan Road Al_Hashim Mall Street 34 G-578', 1, '2021-12-13 18:08:56'),
(7, 'System Limited', 'Karachi', 'Graphic Designer', 'Near Al-Latif Mall Jamshed road street45', 1, '2021-12-13 18:13:12'),
(8, 'Afinity', 'Islamabad', 'Computer Operator', '&lt;b&gt;Bin Hashmi&amp;nbsp; Restaurant&amp;nbsp; Islamabad&amp;nbsp; E056&lt;/b&gt;', 1, '2021-12-13 18:17:26'),
(9, 'Computer Tech', 'Multan', 'WordPress Developer', 'Al-Bahraini Town Near Shames Complex Street 4356&amp;nbsp;', 1, '2021-12-13 22:13:39'),
(10, 'Afinity', 'Karachi', 'Data Scientist ', '&lt;span class=&quot;w8qArf&quot; style=&quot;font-weight: bolder; color: rgb(32, 33, 36); font-family: arial, sans-serif;&quot;&gt;&lt;a class=&quot;fl&quot; href=&quot;https://www.google.com/search?sxsrf=AOaemvJKz9s0b5N-1TxGUDv21h_cPUp_3w:1640082594630&amp;amp;q=mohammad+ali+jinnah+university+address&amp;amp;ludocid=2118075607668269953&amp;amp;sa=X&amp;amp;ved=2ahUKEwiW0NHj1_T0AhVQZcAKHXN4B1UQ6BN6BAhKEAI&quot; data-ved=&quot;2ahUKEwiW0NHj1_T0AhVQZcAKHXN4B1UQ6BN6BAhKEAI&quot; style=&quot;text-decoration-line: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1); outline: 0px; color: rgb(32, 33, 36) !important;&quot;&gt;Address&lt;/a&gt;:&amp;nbsp;&lt;/span&gt;&lt;span class=&quot;LrzXr&quot; style=&quot;color: rgb(32, 33, 36); font-family: arial, sans-serif;&quot;&gt;Stop Main، Lal Kothi (house), 22-E، Block-6 Block 6 PECHS, Karachi, Karachi City, Sindh 75400&lt;/span&gt;', 1, '2021-12-21 15:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `commerce_batch`
--

CREATE TABLE `commerce_batch` (
  `commerce_id` int(11) NOT NULL,
  `commerce_batch_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commerce_batch1`
--

CREATE TABLE `commerce_batch1` (
  `commerce_batch1_id` int(11) NOT NULL,
  `commerce_batch1_name` varchar(255) NOT NULL,
  `commerce_batch1_reg` varchar(255) NOT NULL,
  `commerce_batch1_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commerce_batch1`
--

INSERT INTO `commerce_batch1` (`commerce_batch1_id`, `commerce_batch1_name`, `commerce_batch1_reg`, `commerce_batch1_desgination`) VALUES
(1, 'Majid', '8934', 'Final_Year Student');

-- --------------------------------------------------------

--
-- Table structure for table `commerce_batch2`
--

CREATE TABLE `commerce_batch2` (
  `commerce_batch2_id` int(11) NOT NULL,
  `commerce_batch2_name` varchar(255) NOT NULL,
  `commerce_batch2_reg` varchar(255) NOT NULL,
  `commerce_batch2_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commerce_batch3`
--

CREATE TABLE `commerce_batch3` (
  `commerce_batch3_id` int(11) NOT NULL,
  `commerce_batch3_name` varchar(255) NOT NULL,
  `commerce_batch3_reg` varchar(255) NOT NULL,
  `commerce_batch3_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commerce_batch4`
--

CREATE TABLE `commerce_batch4` (
  `commerce_batch4_id` int(11) NOT NULL,
  `commerce_batch4_name` varchar(255) NOT NULL,
  `commerce_batch4_reg` varchar(255) NOT NULL,
  `commerce_batch4_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commerce_batch5`
--

CREATE TABLE `commerce_batch5` (
  `commerce_batch5_id` int(11) NOT NULL,
  `commerce_batch5_name` varchar(255) NOT NULL,
  `commerce_batch5_reg` varchar(255) NOT NULL,
  `commerce_batch5_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commerce_batch6`
--

CREATE TABLE `commerce_batch6` (
  `commerce_batch6_id` int(11) NOT NULL,
  `commerce_batch6_name` varchar(255) NOT NULL,
  `commerce_batch6_reg` varchar(255) NOT NULL,
  `commerce_batch6_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commerce_batch7`
--

CREATE TABLE `commerce_batch7` (
  `commerce_batch7_id` int(11) NOT NULL,
  `commerce_batch7_name` varchar(255) NOT NULL,
  `commerce_batch7_reg` varchar(255) NOT NULL,
  `commerce_batch7_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commerce_batch8`
--

CREATE TABLE `commerce_batch8` (
  `commerce_batch8_id` int(11) NOT NULL,
  `commerce_batch8_name` varchar(255) NOT NULL,
  `commerce_batch8_reg` varchar(255) NOT NULL,
  `commerce_batch8_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commerce_batch9`
--

CREATE TABLE `commerce_batch9` (
  `commerce_batch9_id` int(11) NOT NULL,
  `commerce_batch9_name` varchar(255) NOT NULL,
  `commerce_batch9_reg` varchar(255) NOT NULL,
  `commerce_batch9_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commerce_batch10`
--

CREATE TABLE `commerce_batch10` (
  `commerce_batch10_id` int(11) NOT NULL,
  `commerce_batch10_name` varchar(255) NOT NULL,
  `commerce_batch10_reg` varchar(255) NOT NULL,
  `commerce_batch10_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commerce_batch11`
--

CREATE TABLE `commerce_batch11` (
  `commerce_batch11_id` int(11) NOT NULL,
  `commerce_batch11_name` varchar(255) NOT NULL,
  `commerce_batch11_reg` varchar(255) NOT NULL,
  `commerce_batch11_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commerce_batch12`
--

CREATE TABLE `commerce_batch12` (
  `commerce_batch12_id` int(11) NOT NULL,
  `commerce_batch12_name` int(11) NOT NULL,
  `commerce_batch12_reg` int(11) NOT NULL,
  `commerce_batch12_desgination` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(30) NOT NULL,
  `course` text NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`, `about`) VALUES
(16, 'Computer Science', ''),
(17, 'BS Information Technology', '');

-- --------------------------------------------------------

--
-- Table structure for table `cs_batch`
--

CREATE TABLE `cs_batch` (
  `cs_id` int(11) NOT NULL,
  `cs_batch_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_batch`
--

INSERT INTO `cs_batch` (`cs_id`, `cs_batch_name`) VALUES
(1, 'Batch 1'),
(2, 'Batch 2'),
(3, 'Batch 3'),
(4, 'Batch 4'),
(5, 'Batch 5'),
(6, 'Batch 6'),
(7, 'Batch 7'),
(8, 'Batch 8'),
(9, 'Batch 9'),
(10, 'Batch 10'),
(11, 'Batch 11'),
(12, 'Batch 12');

-- --------------------------------------------------------

--
-- Table structure for table `cs_batch1`
--

CREATE TABLE `cs_batch1` (
  `cs_batch1_id` int(11) NOT NULL,
  `cs_batch1_name` varchar(255) NOT NULL,
  `cs_batch1_reg` varchar(255) NOT NULL,
  `cs_batch1_desgination` varchar(255) NOT NULL,
  `cs_batch1_contact_no` varchar(11) NOT NULL,
  `cs_batch1_email` varchar(255) NOT NULL,
  `cs_batch1_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_batch1`
--

INSERT INTO `cs_batch1` (`cs_batch1_id`, `cs_batch1_name`, `cs_batch1_reg`, `cs_batch1_desgination`, `cs_batch1_contact_no`, `cs_batch1_email`, `cs_batch1_cgpa`) VALUES
(1, 'Neetesh Kumar', '160/BSIT/3rd Batch', 'PHP Developer', '03123456789', 'neetesh@gmail.com', '3.4'),
(2, 'Aneel Kumar', '102/BSIT/3rd Batch', 'React Native', '03129876543', 'aneel@gmail.com', '3.9');

-- --------------------------------------------------------

--
-- Table structure for table `cs_batch2`
--

CREATE TABLE `cs_batch2` (
  `cs_batch2_id` int(11) NOT NULL,
  `cs_batch2_name` varchar(255) NOT NULL,
  `cs_batch2_reg` varchar(255) NOT NULL,
  `cs_batch2_desgination` varchar(255) NOT NULL,
  `cs_batch2_contact_no` int(11) NOT NULL,
  `cs_batch2_email` varchar(255) NOT NULL,
  `cs_batch2_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_batch2`
--

INSERT INTO `cs_batch2` (`cs_batch2_id`, `cs_batch2_name`, `cs_batch2_reg`, `cs_batch2_desgination`, `cs_batch2_contact_no`, `cs_batch2_email`, `cs_batch2_cgpa`) VALUES
(2, 'Ali', 'BSCS781', 'Web Developer', 2147483647, 'ali@gmail.com', '3.8');

-- --------------------------------------------------------

--
-- Table structure for table `cs_batch3`
--

CREATE TABLE `cs_batch3` (
  `cs_batch3_id` int(11) NOT NULL,
  `cs_batch3_name` varchar(255) NOT NULL,
  `cs_batch3_reg` varchar(255) NOT NULL,
  `cs_batch3_desgination` varchar(255) NOT NULL,
  `cs_batch3_contact_no` int(11) NOT NULL,
  `cs_batch3_email` varchar(255) NOT NULL,
  `cs_batch3_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_batch3`
--

INSERT INTO `cs_batch3` (`cs_batch3_id`, `cs_batch3_name`, `cs_batch3_reg`, `cs_batch3_desgination`, `cs_batch3_contact_no`, `cs_batch3_email`, `cs_batch3_cgpa`) VALUES
(1, 'Junaid', '9824', 'Web Developer', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cs_batch4`
--

CREATE TABLE `cs_batch4` (
  `cs_batch4_id` int(11) NOT NULL,
  `cs_batch4_name` varchar(255) NOT NULL,
  `cs_batch4_reg` varchar(255) NOT NULL,
  `cs_batch4_desgination` varchar(255) NOT NULL,
  `cs_batch4_contact_no` int(11) NOT NULL,
  `cs_batch4_email` varchar(255) NOT NULL,
  `cs_batch4_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_batch5`
--

CREATE TABLE `cs_batch5` (
  `cs_batch5_id` int(11) NOT NULL,
  `cs_batch5_name` varchar(255) NOT NULL,
  `cs_batch5_reg` varchar(255) NOT NULL,
  `cs_batch5_desgination` varchar(255) NOT NULL,
  `cs_batch5_contact_no` int(255) NOT NULL,
  `cs_batch5_email` varchar(255) NOT NULL,
  `cs_batch5_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_batch5`
--

INSERT INTO `cs_batch5` (`cs_batch5_id`, `cs_batch5_name`, `cs_batch5_reg`, `cs_batch5_desgination`, `cs_batch5_contact_no`, `cs_batch5_email`, `cs_batch5_cgpa`) VALUES
(1, 'Shakeel', '4576', 'Software Engineer', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cs_batch6`
--

CREATE TABLE `cs_batch6` (
  `cs_batch6_id` int(11) NOT NULL,
  `cs_batch6_name` varchar(255) NOT NULL,
  `cs_batch6_reg` varchar(255) NOT NULL,
  `cs_batch6_desgination` varchar(255) NOT NULL,
  `cs_batch6_contact_no` int(11) NOT NULL,
  `cs_batch6_email` varchar(255) NOT NULL,
  `cs_batch6_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_batch7`
--

CREATE TABLE `cs_batch7` (
  `cs_batch7_id` int(11) NOT NULL,
  `cs_batch7_name` varchar(255) NOT NULL,
  `cs_batch7_reg` varchar(255) NOT NULL,
  `cs_batch7_desgination` varchar(255) NOT NULL,
  `cs_batch7_contact_no` int(11) NOT NULL,
  `cs_batch7_email` varchar(255) NOT NULL,
  `cs_batch7_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_batch8`
--

CREATE TABLE `cs_batch8` (
  `cs_batch8_id` int(11) NOT NULL,
  `cs_batch8_name` varchar(255) NOT NULL,
  `cs_batch8_reg` varchar(255) NOT NULL,
  `cs_batch8_desgination` varchar(255) NOT NULL,
  `cs_batch8_contact_no` int(11) NOT NULL,
  `cs_batch8_email` varchar(255) NOT NULL,
  `cs_batch8_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_batch9`
--

CREATE TABLE `cs_batch9` (
  `cs_batch9_id` int(11) NOT NULL,
  `cs_batch9_name` varchar(255) NOT NULL,
  `cs_batch9_reg` varchar(255) NOT NULL,
  `cs_batch9_desgination` varchar(255) NOT NULL,
  `cs_batch9_contact_no` int(11) NOT NULL,
  `cs_batch9_email` varchar(255) NOT NULL,
  `cs_batch9_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_batch10`
--

CREATE TABLE `cs_batch10` (
  `cs_batch10_id` int(11) NOT NULL,
  `cs_batch10_name` varchar(255) NOT NULL,
  `cs_batch10_reg` varchar(255) NOT NULL,
  `cs_batch10_desgination` varchar(255) NOT NULL,
  `cs_batch10_contact_no` int(11) NOT NULL,
  `cs_batch10_email` varchar(255) NOT NULL,
  `cs_batch10_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cs_batch11`
--

CREATE TABLE `cs_batch11` (
  `cs_batch11_id` int(11) NOT NULL,
  `cs_batch11_name` varchar(255) NOT NULL,
  `cs_batch11_reg` varchar(255) NOT NULL,
  `cs_batch11_desgination` varchar(255) NOT NULL,
  `cs_batch11_contact_no` int(11) NOT NULL,
  `cs_batch11_email` varchar(255) NOT NULL,
  `cs_batch11_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_batch11`
--

INSERT INTO `cs_batch11` (`cs_batch11_id`, `cs_batch11_name`, `cs_batch11_reg`, `cs_batch11_desgination`, `cs_batch11_contact_no`, `cs_batch11_email`, `cs_batch11_cgpa`) VALUES
(1, 'Natesh', '912BSCS', 'Developer', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cs_batch12`
--

CREATE TABLE `cs_batch12` (
  `cs_batch12_id` int(11) NOT NULL,
  `cs_batch12_name` varchar(255) NOT NULL,
  `cs_batch12_reg` varchar(255) NOT NULL,
  `cs_batch12_desgination` varchar(255) NOT NULL,
  `cs_batch12_contact_no` int(11) NOT NULL,
  `cs_batch12_email` varchar(255) NOT NULL,
  `cs_batch12_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `department_name`) VALUES
(11, 'BBA');

-- --------------------------------------------------------

--
-- Table structure for table `education_batch`
--

CREATE TABLE `education_batch` (
  `education_id` int(11) NOT NULL,
  `education_batch_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education_batch`
--

INSERT INTO `education_batch` (`education_id`, `education_batch_name`) VALUES
(1, 'Batch 1');

-- --------------------------------------------------------

--
-- Table structure for table `education_batch1`
--

CREATE TABLE `education_batch1` (
  `education_batch1_id` int(11) NOT NULL,
  `education_batch1_name` varchar(255) NOT NULL,
  `education_batch1_reg` varchar(255) NOT NULL,
  `education_batch1_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education_batch2`
--

CREATE TABLE `education_batch2` (
  `education_batch2_id` int(11) NOT NULL,
  `education_batch2_name` varchar(255) NOT NULL,
  `education_batch2_reg` varchar(255) NOT NULL,
  `education_batch2_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education_batch3`
--

CREATE TABLE `education_batch3` (
  `education_batch3_id` int(11) NOT NULL,
  `education_batch3_name` varchar(255) NOT NULL,
  `education_batch3_reg` varchar(255) NOT NULL,
  `education_batch3_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education_batch4`
--

CREATE TABLE `education_batch4` (
  `education_batch4_id` int(11) NOT NULL,
  `education_batch4_name` varchar(255) NOT NULL,
  `education_batch4_reg` varchar(255) NOT NULL,
  `education_batch4_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education_batch5`
--

CREATE TABLE `education_batch5` (
  `education_batch5_id` int(11) NOT NULL,
  `education_batch5_name` varchar(255) NOT NULL,
  `education_batch5_reg` varchar(255) NOT NULL,
  `education_batch5_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education_batch6`
--

CREATE TABLE `education_batch6` (
  `education_batch6_id` int(11) NOT NULL,
  `education_batch6_name` varchar(255) NOT NULL,
  `education_batch6_reg` varchar(255) NOT NULL,
  `education_batch6_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education_batch7`
--

CREATE TABLE `education_batch7` (
  `education_batch7_id` int(11) NOT NULL,
  `education_batch7_name` varchar(255) NOT NULL,
  `education_batch7_reg` varchar(255) NOT NULL,
  `education_batch7_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education_batch8`
--

CREATE TABLE `education_batch8` (
  `education_batch8_id` int(11) NOT NULL,
  `education_batch8_name` varchar(255) NOT NULL,
  `education_batch8_reg` varchar(255) NOT NULL,
  `education_batch8_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education_batch9`
--

CREATE TABLE `education_batch9` (
  `education_batch9_id` int(11) NOT NULL,
  `education_batch9_name` varchar(255) NOT NULL,
  `education_batch9_reg` varchar(255) NOT NULL,
  `education_batch9_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education_batch10`
--

CREATE TABLE `education_batch10` (
  `education_batch10_id` int(11) NOT NULL,
  `education_batch10_name` varchar(255) NOT NULL,
  `education_batch10_reg` varchar(255) NOT NULL,
  `education_batch10_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education_batch11`
--

CREATE TABLE `education_batch11` (
  `education_batch11_id` int(11) NOT NULL,
  `education_batch11_name` varchar(255) NOT NULL,
  `education_batch11_reg` varchar(255) NOT NULL,
  `education_batch11_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education_batch12`
--

CREATE TABLE `education_batch12` (
  `education_batch12_id` int(11) NOT NULL,
  `education_batch12_name` int(255) NOT NULL,
  `education_batch12_reg` int(255) NOT NULL,
  `education_batch12_idesgination` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `english_batch`
--

CREATE TABLE `english_batch` (
  `english_id` int(11) NOT NULL,
  `english_batch_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `english_batch`
--

INSERT INTO `english_batch` (`english_id`, `english_batch_name`) VALUES
(9, 'Batch 1'),
(10, 'Batch 2'),
(11, 'Batch 3'),
(12, 'Batch 4'),
(13, 'Batch 4'),
(14, 'Batch 5'),
(15, 'Batch 6'),
(16, 'Batch 7'),
(17, 'Batch 8'),
(18, 'Batch 9'),
(19, 'Batch 10'),
(20, 'Batch 11'),
(21, 'Batch 12');

-- --------------------------------------------------------

--
-- Table structure for table `english_batch1`
--

CREATE TABLE `english_batch1` (
  `english_batch1_id` int(11) NOT NULL,
  `english_batch1_name` varchar(255) NOT NULL,
  `english_batch1_reg` varchar(255) NOT NULL,
  `english_batch1_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `english_batch1`
--

INSERT INTO `english_batch1` (`english_batch1_id`, `english_batch1_name`, `english_batch1_reg`, `english_batch1_desgination`) VALUES
(1, 'Neeraj  Kumar', '6789', 'Lecturer'),
(2, 'Neeraj  Kumar', '6789', 'Lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `english_batch2`
--

CREATE TABLE `english_batch2` (
  `english_batch2_id` int(11) NOT NULL,
  `english_batch2_name` varchar(255) NOT NULL,
  `english_batch2_reg` varchar(255) NOT NULL,
  `english_batch2_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `english_batch3`
--

CREATE TABLE `english_batch3` (
  `english_batch3_id` int(11) NOT NULL,
  `english_batch3_name` varchar(255) NOT NULL,
  `english_batch3_reg` varchar(255) NOT NULL,
  `english_batch3_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `english_batch4`
--

CREATE TABLE `english_batch4` (
  `english_batch4_id` int(11) NOT NULL,
  `english_batch4_name` varchar(255) NOT NULL,
  `english_batch4_reg` varchar(255) NOT NULL,
  `english_batch4_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `english_batch5`
--

CREATE TABLE `english_batch5` (
  `english_batch5_id` int(11) NOT NULL,
  `english_batch5_name` varchar(255) NOT NULL,
  `english_batch5_reg` varchar(255) NOT NULL,
  `english_batch5_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `english_batch6`
--

CREATE TABLE `english_batch6` (
  `english_batch6_id` int(11) NOT NULL,
  `english_batch6_name` varchar(255) NOT NULL,
  `english_batch6_reg` varchar(255) NOT NULL,
  `english_batch6_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `english_batch7`
--

CREATE TABLE `english_batch7` (
  `english_batch7_id` int(11) NOT NULL,
  `english_batch7_name` varchar(255) NOT NULL,
  `english_batch7_reg` varchar(255) NOT NULL,
  `english_batch7_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `english_batch8`
--

CREATE TABLE `english_batch8` (
  `english_batch8_id` int(11) NOT NULL,
  `english_batch8_name` varchar(255) NOT NULL,
  `english_batch8_reg` varchar(255) NOT NULL,
  `english_batch8_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `english_batch9`
--

CREATE TABLE `english_batch9` (
  `english_batch9_id` int(11) NOT NULL,
  `english_batch9_name` varchar(255) NOT NULL,
  `english_batch9_reg` varchar(255) NOT NULL,
  `english_batch9_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `english_batch10`
--

CREATE TABLE `english_batch10` (
  `english_batch10_id` int(11) NOT NULL,
  `english_batch10_name` varchar(255) NOT NULL,
  `english_batch10_reg` varchar(255) NOT NULL,
  `english_batch10_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `english_batch11`
--

CREATE TABLE `english_batch11` (
  `english_batch11_id` int(11) NOT NULL,
  `english_batch11_name` varchar(255) NOT NULL,
  `english_batch11_reg` varchar(255) NOT NULL,
  `english_batch11_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `english_batch12`
--

CREATE TABLE `english_batch12` (
  `english_batch12_id` int(11) NOT NULL,
  `english_batch12_name` varchar(255) NOT NULL,
  `english_batch12_reg` varchar(255) NOT NULL,
  `english_batch12_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(30) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `schedule` datetime NOT NULL,
  `banner` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `content`, `schedule`, `banner`, `date_created`) VALUES
(1, 'Blockchain', '&lt;p style=&quot;margin-bottom: 15px; color: rgb(0, 0, 0); font-family: &quot; open=&quot;&quot; sans&quot;,=&quot;&quot; arial,=&quot;&quot; sans-serif;=&quot;&quot; padding:=&quot;&quot; 0px;=&quot;&quot; text-align:=&quot;&quot; justify;&quot;=&quot;&quot;&gt;&lt;span style=&quot;border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 600; font-stretch: inherit; line-height: inherit; font-family: &quot; ibm=&quot;&quot; plex=&quot;&quot; sans&quot;,=&quot;&quot; &quot;helvetica=&quot;&quot; neue&quot;,=&quot;&quot; arial,=&quot;&quot; sans-serif;=&quot;&quot; font-size:=&quot;&quot; 20px;=&quot;&quot; margin:=&quot;&quot; 0px;=&quot;&quot; padding:=&quot;&quot; vertical-align:=&quot;&quot; baseline;=&quot;&quot; color:=&quot;&quot; rgb(22,=&quot;&quot; 22,=&quot;&quot; 22);&quot;=&quot;&quot;&gt;Blockchain defined:&lt;/span&gt;&lt;span style=&quot;color: rgb(22, 22, 22); font-family: &quot; ibm=&quot;&quot; plex=&quot;&quot; sans&quot;,=&quot;&quot; &quot;helvetica=&quot;&quot; neue&quot;,=&quot;&quot; arial,=&quot;&quot; sans-serif;=&quot;&quot; font-size:=&quot;&quot; 20px;&quot;=&quot;&quot;&gt;&amp;nbsp;Blockchain&amp;nbsp;is a shared, immutable ledger that facilitates the process of recording transactions and tracking assets in a business network.&amp;nbsp;&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', '2021-11-03 10:00:00', '1638479700_source-Hoyes1.jpg', '2020-10-16 09:51:55'),
(2, 'Cyber Security', '&lt;p class=&quot;wDYxhc&quot; data-md=&quot;61&quot; lang=&quot;en-PK&quot; style=&quot;clear: none; padding-top: 0px; border-radius: 8px; padding-left: 0px; padding-right: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;LGOjhe&quot; data-attrid=&quot;wa:/description&quot; aria-level=&quot;3&quot; role=&quot;heading&quot; data-hveid=&quot;CCEQAA&quot; style=&quot;overflow: hidden; padding-bottom: 20px;&quot;&gt;Cyber security is the&amp;nbsp;application of technologies, processes and controls to protect systems, networks, programs,&lt;b style=&quot;overflow: hidden; padding-bottom: 20px;&quot;&gt; devices and &lt;/b&gt;&lt;span style=&quot;overflow: hidden; padding-bottom: 20px;&quot;&gt;data from cyber attacks&lt;/span&gt;. It aims to reduce the risk of cyber attacks and protect against the unauthorized exploitation of systems, networks and technologies.&lt;br style=&quot;overflow: hidden; padding-bottom: 20px;&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;span class=&quot;hgKElc&quot; style=&quot;padding: 0px 8px 0px 0px;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p class=&quot;g&quot; style=&quot;font-family: arial, sans-serif; line-height: 1.58; width: 600px; margin-bottom: 0px; clear: both; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; color: rgb(32, 33, 36);&quot;&gt;&lt;/p&gt;&lt;p data-hveid=&quot;CCMQAA&quot; data-ved=&quot;2ahUKEwjogIPdg8b0AhXQSvEDHQb_AukQFSgAegQIIxAA&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '2021-12-13 04:00:00', '1638479580_download.jpg', '2021-12-03 02:13:31'),
(3, 'Pharmabotics in AI', '&lt;span style=&quot;font-size:16px;color: rgb(46, 46, 46); font-family: NexusSerif, Georgia, &amp;quot;Times New Roman&amp;quot;, Times, STIXGeneral, &amp;quot;Cambria Math&amp;quot;, &amp;quot;Lucida Sans Unicode&amp;quot;, &amp;quot;Microsoft Sans Serif&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Arial Unicode MS&amp;quot;, serif;&quot;&gt;Access to big data analyzed by supercomputers using advanced mathematical algorithms (i.e., deep machine learning) has allowed for enhancement of cognitive output (i.e., visual imaging interpretation) to previously unseen levels and promises to fundamentally change the practice of medicine.&lt;/span&gt;', '2021-11-23 02:00:00', '1638479880_medicalrobots7_resize_md.jpg', '2021-12-03 02:18:05'),
(4, 'Pharmabiotics Future  In AI', 'sfgfsgdufhuhetuierterjoyio', '2021-12-06 22:15:00', '', '2021-12-13 22:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `event_commits`
--

CREATE TABLE `event_commits` (
  `id` int(30) NOT NULL,
  `event_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_commits`
--

INSERT INTO `event_commits` (`id`, `event_id`, `user_id`) VALUES
(1, 1, 3),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

CREATE TABLE `forum_comments` (
  `id` int(30) NOT NULL,
  `topic_id` int(30) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_comments`
--

INSERT INTO `forum_comments` (`id`, `topic_id`, `comment`, `user_id`, `date_created`) VALUES
(1, 3, 'Sample updated Comment', 3, '2020-10-15 15:46:03'),
(3, 3, 'Sample', 1, '2020-10-16 08:48:02'),
(5, 0, '', 1, '2020-10-16 09:49:34'),
(6, 1, 'Right', 1, '2021-12-21 15:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `forum_topics`
--

CREATE TABLE `forum_topics` (
  `id` int(30) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_topics`
--

INSERT INTO `forum_topics` (`id`, `title`, `description`, `user_id`, `date_created`) VALUES
(2, 'Sample Topic 2', '&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;&lt;/span&gt;', 3, '2020-10-15 15:20:51'),
(3, 'Sample Topic 3', '&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Vivamus gravida nunc orci. Proin ut tristique odio. Nulla suscipit ipsum arcu, a luctus lorem vulputate et. Maecenas magna lorem, tempor id ultrices id, vehicula eu diam. Aliquam erat volutpat. Praesent in sem tincidunt, mattis odio nec, ultrices justo. Vivamus sit amet sapien ornare tortor porttitor congue vel et lorem. In interdum eget metus ut sagittis. In accumsan nec purus vel ornare. Quisque non scelerisque libero, et aliquam risus. Mauris tincidunt ullamcorper efficitur. Nullam venenatis in massa et elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In mollis, tortor sed pellentesque ultrices, sem sem interdum lectus, a laoreet nulla lacus at risus. Ut placerat orci at enim fermentum, eget pretium ante pharetra. Nam id nunc congue augue feugiat egestas.&lt;/span&gt;', 3, '2020-10-15 15:22:30'),
(6, 'Artificial Intelligents', '&lt;h2 class=&quot;title&quot; style=&quot;box-sizing: inherit; background-repeat: no-repeat; padding: 0px; margin-bottom: 7px; font-family: Montserrat, sans-serif; font-size: 15px; line-height: 1.222; font-weight: bold; letter-spacing: 0.44px; text-transform: uppercase; color: rgb(235, 56, 166); background-color: rgb(249, 250, 255);&quot;&gt;WHAT IS ARTIFICIAL INTELLIGENCE?&lt;/h2&gt;&lt;p class=&quot;description&quot; style=&quot;box-sizing: inherit; background-repeat: no-repeat; padding: 0px; margin-bottom: 0px; font-family: Montserrat, sans-serif; font-size: 16px; line-height: 1.38; color: rgb(58, 59, 65); border: 0px; background-color: rgb(249, 250, 255);&quot;&gt;Artificial intelligence (AI) is a wide-ranging branch of computer science .&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', 1, '2021-12-03 02:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(30) NOT NULL,
  `about` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `about`, `created`) VALUES
(7, 'Exhibition', '2021-10-05 10:16:00'),
(8, 'Entry Test', '2021-10-05 10:17:00'),
(9, 'IoT Seminar', '2021-10-05 10:17:32'),
(10, 'Teacher Day', '2021-10-05 10:18:04'),
(12, 'Faculty', '2021-10-05 10:19:04'),
(13, 'Finalyear', '2021-11-11 12:30:50'),
(14, 'Admin', '2021-12-13 18:01:12'),
(15, 'Administration', '2021-12-13 18:03:47'),
(16, 'Database', '2021-12-13 18:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `it_batch`
--

CREATE TABLE `it_batch` (
  `it_batch_id` int(11) NOT NULL,
  `batch_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `it_batch`
--

INSERT INTO `it_batch` (`it_batch_id`, `batch_name`) VALUES
(1, 'Batch 1'),
(2, 'Batch 2'),
(3, 'Batch 3'),
(4, 'Batch 4');

-- --------------------------------------------------------

--
-- Table structure for table `it_batch1`
--

CREATE TABLE `it_batch1` (
  `it_batch1_id` int(11) NOT NULL,
  `it_batch1_name` varchar(255) NOT NULL,
  `it_batch1_reg` varchar(255) NOT NULL,
  `it_batch1_desgination` varchar(255) NOT NULL,
  `it_batch1_contact_no` int(11) NOT NULL,
  `it_batch1_email` varchar(255) NOT NULL,
  `it_batch1_cnic` int(13) NOT NULL,
  `it_batch1_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `it_batch2`
--

CREATE TABLE `it_batch2` (
  `it_batch2_id` int(11) NOT NULL,
  `it_batch2_name` varchar(255) NOT NULL,
  `it_batch2_reg` varchar(255) NOT NULL,
  `it_batch2_desgination` varchar(255) NOT NULL,
  `it_batch2_contact_no` int(11) NOT NULL,
  `it_batch2_email` varchar(255) NOT NULL,
  `it_batch2_cnic` int(13) NOT NULL,
  `it_batch2_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `it_batch2`
--

INSERT INTO `it_batch2` (`it_batch2_id`, `it_batch2_name`, `it_batch2_reg`, `it_batch2_desgination`, `it_batch2_contact_no`, `it_batch2_email`, `it_batch2_cnic`, `it_batch2_cgpa`) VALUES
(1, 'Aneel Kumar', '102/BSIT/3rd Batch', 'React Native ', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `it_batch3`
--

CREATE TABLE `it_batch3` (
  `it_batch3_id` int(11) NOT NULL,
  `it_batch3_name` varchar(255) NOT NULL,
  `it_batch3_reg` varchar(255) NOT NULL,
  `it_batch3_desgination` varchar(255) NOT NULL,
  `it_batch3_contact_no` int(11) NOT NULL,
  `it_batch3_email` varchar(255) NOT NULL,
  `it_batch3_cnic` int(13) NOT NULL,
  `it_batch3_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `it_batch3`
--

INSERT INTO `it_batch3` (`it_batch3_id`, `it_batch3_name`, `it_batch3_reg`, `it_batch3_desgination`, `it_batch3_contact_no`, `it_batch3_email`, `it_batch3_cnic`, `it_batch3_cgpa`) VALUES
(1, 'Zahid Ali', '201', 'PHP Developer', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `it_batch4`
--

CREATE TABLE `it_batch4` (
  `it_batch4_id` int(11) NOT NULL,
  `it_batch4_name` varchar(255) NOT NULL,
  `it_batch4_reg` varchar(255) NOT NULL,
  `it_batch4_desgination` varchar(255) NOT NULL,
  `it_batch4_contact_no` int(11) NOT NULL,
  `it_batch4_email` varchar(255) NOT NULL,
  `it_batch4_cnic` int(13) NOT NULL,
  `it_batch4_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `it_batch5`
--

CREATE TABLE `it_batch5` (
  `it_batch5_id` int(11) NOT NULL,
  `it_batch5_name` varchar(255) NOT NULL,
  `it_batch5_reg` varchar(255) NOT NULL,
  `it_batch5_desgination` varchar(255) NOT NULL,
  `it_batch5_contact_no` int(11) NOT NULL,
  `it_batch5_email` varchar(255) NOT NULL,
  `it_batch5_cnic` int(13) NOT NULL,
  `it_batch5_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `it_batch6`
--

CREATE TABLE `it_batch6` (
  `it_batch6_id` int(11) NOT NULL,
  `it_batch6_name` varchar(255) NOT NULL,
  `it_batch6_reg` varchar(255) NOT NULL,
  `it_batch6_desgination` varchar(255) NOT NULL,
  `it_batch6_contact_no` int(11) NOT NULL,
  `it_batch6_email` varchar(255) NOT NULL,
  `it_batch6_cnic` int(13) NOT NULL,
  `it_batch6_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `it_batch7`
--

CREATE TABLE `it_batch7` (
  `it_batch7_id` int(11) NOT NULL,
  `it_batch7_name` varchar(255) NOT NULL,
  `it_batch7_reg` varchar(255) NOT NULL,
  `it_batch7_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `it_batch8`
--

CREATE TABLE `it_batch8` (
  `it_batch8_id` int(11) NOT NULL,
  `it_batch8_name` varchar(255) NOT NULL,
  `it_batch8_reg` varchar(255) NOT NULL,
  `it_batch8_desgination` varchar(255) NOT NULL,
  `it_batch8_contact_no` int(11) NOT NULL,
  `it_batch8_email` varchar(255) NOT NULL,
  `it_batch8_cnic` int(13) NOT NULL,
  `it_batch8_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `it_batch9`
--

CREATE TABLE `it_batch9` (
  `it_batch9_id` int(11) NOT NULL,
  `it_batch9_name` varchar(255) NOT NULL,
  `it_batch9_reg` varchar(255) NOT NULL,
  `it_batch9_desgination` varchar(255) NOT NULL,
  `it_batch9_contact_no` int(11) NOT NULL,
  `it_batch9_email` varchar(255) NOT NULL,
  `it_batch9_cnic` int(13) NOT NULL,
  `it_batch9_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `it_batch10`
--

CREATE TABLE `it_batch10` (
  `it_batch10_id` int(11) NOT NULL,
  `it_batch10_name` varchar(255) NOT NULL,
  `it_batch10_reg` varchar(255) NOT NULL,
  `it_batch10_desgination` varchar(255) NOT NULL,
  `it_batch10_contact_no` int(11) NOT NULL,
  `it_batch10_email` varchar(255) NOT NULL,
  `it_batch10_cnic` int(13) NOT NULL,
  `it_batch10_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `it_batch11`
--

CREATE TABLE `it_batch11` (
  `it_batch11_id` int(11) NOT NULL,
  `it_batch11_name` varchar(255) NOT NULL,
  `it_batch11_reg` varchar(255) NOT NULL,
  `it_batch11_desgination` varchar(255) NOT NULL,
  `it_batch11_contact_no` int(11) NOT NULL,
  `it_batch11_email` varchar(255) NOT NULL,
  `it_batch11_cnic` int(13) NOT NULL,
  `it_batch11_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `it_batch12`
--

CREATE TABLE `it_batch12` (
  `it_batch12_id` int(11) NOT NULL,
  `it_batch12_name` varchar(255) NOT NULL,
  `it_batch12_reg` varchar(255) NOT NULL,
  `it_batch12_desgination` varchar(255) NOT NULL,
  `it_batch12_contact_no` int(11) NOT NULL,
  `it_batch12_email` varchar(255) NOT NULL,
  `it_batch12_cnic` int(13) NOT NULL,
  `it_batch12_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_batch`
--

CREATE TABLE `pharmacy_batch` (
  `pharmacy_id` int(11) NOT NULL,
  `pharmacy_batch_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacy_batch`
--

INSERT INTO `pharmacy_batch` (`pharmacy_id`, `pharmacy_batch_name`) VALUES
(12, 'Batch 6'),
(14, 'Batch 7'),
(17, 'Batch 9'),
(18, 'Batch 10'),
(19, 'Batch 1');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_batch1`
--

CREATE TABLE `pharmacy_batch1` (
  `pharmacy_batch1_id` int(11) NOT NULL,
  `pharmacy_batch1_name` varchar(255) NOT NULL,
  `pharmacy_batch1_reg` varchar(255) NOT NULL,
  `pharmacy_batch1_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacy_batch1`
--

INSERT INTO `pharmacy_batch1` (`pharmacy_batch1_id`, `pharmacy_batch1_name`, `pharmacy_batch1_reg`, `pharmacy_batch1_desgination`) VALUES
(1, 'Rohn', '784322', 'Third Year Student');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_batch2`
--

CREATE TABLE `pharmacy_batch2` (
  `pharmacy_batch2_id` int(11) NOT NULL,
  `pharmacy_batch2_name` varchar(255) NOT NULL,
  `pharmacy_batch2_reg` varchar(255) NOT NULL,
  `pharmacy_batch2_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_batch3`
--

CREATE TABLE `pharmacy_batch3` (
  `pharmacy_batch3_id` int(11) NOT NULL,
  `pharmacy_batch3_name` varchar(255) NOT NULL,
  `pharmacy_batch3_reg` varchar(255) NOT NULL,
  `pharmacy_batch3_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_batch4`
--

CREATE TABLE `pharmacy_batch4` (
  `pharmacy_batch4_id` int(11) NOT NULL,
  `pharmacy_batch4_name` varchar(255) NOT NULL,
  `pharmacy_batch4_re` varchar(255) NOT NULL,
  `pharmacy_batch4_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_batch5`
--

CREATE TABLE `pharmacy_batch5` (
  `pharmacy_batch5_id` int(11) NOT NULL,
  `pharmacy_batch5_name` varchar(255) NOT NULL,
  `pharmacy_batch5_reg` varchar(255) NOT NULL,
  `pharmacy_batch5_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_batch6`
--

CREATE TABLE `pharmacy_batch6` (
  `pharmacy_batch6_id` int(11) NOT NULL,
  `pharmacy_batch6_name` varchar(255) NOT NULL,
  `pharmacy_batch6_reg` varchar(255) NOT NULL,
  `pharmacy_batch6_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_batch7`
--

CREATE TABLE `pharmacy_batch7` (
  `pharmacy_batch7_id` int(11) NOT NULL,
  `pharmacy_batch7_name` varchar(255) NOT NULL,
  `pharmacy_batch7_reg` varchar(255) NOT NULL,
  `pharmacy_batch7_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_batch8`
--

CREATE TABLE `pharmacy_batch8` (
  `pharmacy_batch8_id` int(11) NOT NULL,
  `pharmacy_batch8_name` varchar(255) NOT NULL,
  `pharmacy_batch8_reg` varchar(255) NOT NULL,
  `pharmacy_batch8_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_batch9`
--

CREATE TABLE `pharmacy_batch9` (
  `pharmacy_batch9_id` int(11) NOT NULL,
  `pharmacy_batch9_name` varchar(255) NOT NULL,
  `pharmacy_batch9_reg` varchar(255) NOT NULL,
  `pharmacy_batch9_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_batch10`
--

CREATE TABLE `pharmacy_batch10` (
  `pharmacy_batch10_id` int(11) NOT NULL,
  `pharmacy_batch10_name` varchar(255) NOT NULL,
  `pharmacy_batch10_reg` varchar(255) NOT NULL,
  `pharmacy_batch10_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_batch11`
--

CREATE TABLE `pharmacy_batch11` (
  `pharmacy_batch11_id` int(11) NOT NULL,
  `pharmacy_batch11_name` varchar(255) NOT NULL,
  `pharmacy_batch11_reg` varchar(255) NOT NULL,
  `pharmacy_batch11_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_batch12`
--

CREATE TABLE `pharmacy_batch12` (
  `pharmacy_batch12_id` int(11) NOT NULL,
  `pharmacy_batch12_name` varchar(255) NOT NULL,
  `pharmacy_batch12_reg` varchar(255) NOT NULL,
  `pharmacy_batch12_desgination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'Alumni Management System', 'bbsul98@gmail.com', '0300778909775', '1639205280_f2.jpg', '&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(77, 81, 86); font-family: arial, sans-serif; text-align: left;&quot;&gt;Benazir Bhutto Shaheed University: Lyari Karachi is a Public Degree Awarding Institution located at Lyari town, Karachi, Pakistan. It was established in 2010. Special English efficiency, Computer literacy and Short Courses will be organized&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 3 COMMENT '1=Admin,2=Alumni officer, 3= alumnus',
  `auto_generated_pass` text NOT NULL,
  `alumnus_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`, `auto_generated_pass`, `alumnus_id`) VALUES
(1, 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 1, '', 0),
(6, 'Bheel Nandlal', 'bbsul98@gmail.com', '1a95b5b1547a6bfd23edb90610f84857', 3, '', 5),
(7, 'Kumar Natesh', 'nkbbsul98@gmail.com', '25f9e794323b453885f5181f1b624d0b', 3, '', 0),
(8, 'Kumar Natesh', 'nk98@gmail.com', '25f9e794323b453885f5181f1b624d0b', 3, '', 8),
(9, 'Bheel Nandlal', 'nand98@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 3, '', 9),
(10, 'Bheel Nandlal', 'bbsul1298@gmail.com', '2d8bd50746c5c0aaf35e728f44d15378', 3, '', 10),
(11, 'Bheel Nandlal', 'nandbheel1298@gmail.com', '2d8bd50746c5c0aaf35e728f44d15378', 3, '', 11),
(12, 'Bheel Nandlal', 'dbheel1298@gmail.com', '2d8bd50746c5c0aaf35e728f44d15378', 3, '', 12),
(13, 'Bheel Nandlal', 'example@sample.comm', 'e300d533b71eb00cf7f173b7c69e1677', 3, '', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnus_bio`
--
ALTER TABLE `alumnus_bio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch4`
--
ALTER TABLE `batch4`
  ADD PRIMARY KEY (`it_batch4_id`);

--
-- Indexes for table `bba_batch`
--
ALTER TABLE `bba_batch`
  ADD PRIMARY KEY (`bba_batch_id`);

--
-- Indexes for table `bba_batch1`
--
ALTER TABLE `bba_batch1`
  ADD PRIMARY KEY (`bba_batch1_id`);

--
-- Indexes for table `bba_batch2`
--
ALTER TABLE `bba_batch2`
  ADD PRIMARY KEY (`bba_batch2_id`);

--
-- Indexes for table `bba_batch3`
--
ALTER TABLE `bba_batch3`
  ADD PRIMARY KEY (`bba_batch3_id`);

--
-- Indexes for table `bba_batch4`
--
ALTER TABLE `bba_batch4`
  ADD PRIMARY KEY (`bba_batch4_id`);

--
-- Indexes for table `bba_batch5`
--
ALTER TABLE `bba_batch5`
  ADD PRIMARY KEY (`bba_batch5_id`);

--
-- Indexes for table `bba_batch6`
--
ALTER TABLE `bba_batch6`
  ADD PRIMARY KEY (`bba_batch6_id`);

--
-- Indexes for table `bba_batch7`
--
ALTER TABLE `bba_batch7`
  ADD PRIMARY KEY (`bba_batch7_id`);

--
-- Indexes for table `bba_batch8`
--
ALTER TABLE `bba_batch8`
  ADD PRIMARY KEY (`bba_batch8_id`);

--
-- Indexes for table `bba_batch9`
--
ALTER TABLE `bba_batch9`
  ADD PRIMARY KEY (`bba_batch9_id`);

--
-- Indexes for table `bba_batch10`
--
ALTER TABLE `bba_batch10`
  ADD PRIMARY KEY (`bba_batch10_id`);

--
-- Indexes for table `bba_batch11`
--
ALTER TABLE `bba_batch11`
  ADD PRIMARY KEY (`bba_batch11_id`);

--
-- Indexes for table `bba_batch12`
--
ALTER TABLE `bba_batch12`
  ADD PRIMARY KEY (`bba_batch12_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commerce_batch`
--
ALTER TABLE `commerce_batch`
  ADD PRIMARY KEY (`commerce_id`);

--
-- Indexes for table `commerce_batch1`
--
ALTER TABLE `commerce_batch1`
  ADD PRIMARY KEY (`commerce_batch1_id`);

--
-- Indexes for table `commerce_batch2`
--
ALTER TABLE `commerce_batch2`
  ADD PRIMARY KEY (`commerce_batch2_id`);

--
-- Indexes for table `commerce_batch3`
--
ALTER TABLE `commerce_batch3`
  ADD PRIMARY KEY (`commerce_batch3_id`);

--
-- Indexes for table `commerce_batch4`
--
ALTER TABLE `commerce_batch4`
  ADD PRIMARY KEY (`commerce_batch4_id`);

--
-- Indexes for table `commerce_batch5`
--
ALTER TABLE `commerce_batch5`
  ADD PRIMARY KEY (`commerce_batch5_id`);

--
-- Indexes for table `commerce_batch6`
--
ALTER TABLE `commerce_batch6`
  ADD PRIMARY KEY (`commerce_batch6_id`);

--
-- Indexes for table `commerce_batch7`
--
ALTER TABLE `commerce_batch7`
  ADD PRIMARY KEY (`commerce_batch7_id`);

--
-- Indexes for table `commerce_batch8`
--
ALTER TABLE `commerce_batch8`
  ADD PRIMARY KEY (`commerce_batch8_id`);

--
-- Indexes for table `commerce_batch9`
--
ALTER TABLE `commerce_batch9`
  ADD PRIMARY KEY (`commerce_batch9_id`);

--
-- Indexes for table `commerce_batch10`
--
ALTER TABLE `commerce_batch10`
  ADD PRIMARY KEY (`commerce_batch10_id`);

--
-- Indexes for table `commerce_batch11`
--
ALTER TABLE `commerce_batch11`
  ADD PRIMARY KEY (`commerce_batch11_id`);

--
-- Indexes for table `commerce_batch12`
--
ALTER TABLE `commerce_batch12`
  ADD PRIMARY KEY (`commerce_batch12_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs_batch`
--
ALTER TABLE `cs_batch`
  ADD PRIMARY KEY (`cs_id`);

--
-- Indexes for table `cs_batch1`
--
ALTER TABLE `cs_batch1`
  ADD PRIMARY KEY (`cs_batch1_id`);

--
-- Indexes for table `cs_batch2`
--
ALTER TABLE `cs_batch2`
  ADD PRIMARY KEY (`cs_batch2_id`);

--
-- Indexes for table `cs_batch3`
--
ALTER TABLE `cs_batch3`
  ADD PRIMARY KEY (`cs_batch3_id`);

--
-- Indexes for table `cs_batch4`
--
ALTER TABLE `cs_batch4`
  ADD PRIMARY KEY (`cs_batch4_id`);

--
-- Indexes for table `cs_batch5`
--
ALTER TABLE `cs_batch5`
  ADD PRIMARY KEY (`cs_batch5_id`);

--
-- Indexes for table `cs_batch6`
--
ALTER TABLE `cs_batch6`
  ADD PRIMARY KEY (`cs_batch6_id`);

--
-- Indexes for table `cs_batch7`
--
ALTER TABLE `cs_batch7`
  ADD PRIMARY KEY (`cs_batch7_id`);

--
-- Indexes for table `cs_batch8`
--
ALTER TABLE `cs_batch8`
  ADD PRIMARY KEY (`cs_batch8_id`);

--
-- Indexes for table `cs_batch9`
--
ALTER TABLE `cs_batch9`
  ADD PRIMARY KEY (`cs_batch9_id`);

--
-- Indexes for table `cs_batch10`
--
ALTER TABLE `cs_batch10`
  ADD PRIMARY KEY (`cs_batch10_id`);

--
-- Indexes for table `cs_batch11`
--
ALTER TABLE `cs_batch11`
  ADD PRIMARY KEY (`cs_batch11_id`);

--
-- Indexes for table `cs_batch12`
--
ALTER TABLE `cs_batch12`
  ADD PRIMARY KEY (`cs_batch12_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `education_batch`
--
ALTER TABLE `education_batch`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `education_batch1`
--
ALTER TABLE `education_batch1`
  ADD PRIMARY KEY (`education_batch1_id`);

--
-- Indexes for table `education_batch2`
--
ALTER TABLE `education_batch2`
  ADD PRIMARY KEY (`education_batch2_id`);

--
-- Indexes for table `education_batch3`
--
ALTER TABLE `education_batch3`
  ADD PRIMARY KEY (`education_batch3_id`);

--
-- Indexes for table `education_batch4`
--
ALTER TABLE `education_batch4`
  ADD PRIMARY KEY (`education_batch4_id`);

--
-- Indexes for table `education_batch5`
--
ALTER TABLE `education_batch5`
  ADD PRIMARY KEY (`education_batch5_id`);

--
-- Indexes for table `education_batch6`
--
ALTER TABLE `education_batch6`
  ADD PRIMARY KEY (`education_batch6_id`);

--
-- Indexes for table `education_batch7`
--
ALTER TABLE `education_batch7`
  ADD PRIMARY KEY (`education_batch7_id`);

--
-- Indexes for table `education_batch8`
--
ALTER TABLE `education_batch8`
  ADD PRIMARY KEY (`education_batch8_id`);

--
-- Indexes for table `education_batch9`
--
ALTER TABLE `education_batch9`
  ADD PRIMARY KEY (`education_batch9_id`);

--
-- Indexes for table `education_batch10`
--
ALTER TABLE `education_batch10`
  ADD PRIMARY KEY (`education_batch10_id`);

--
-- Indexes for table `education_batch11`
--
ALTER TABLE `education_batch11`
  ADD PRIMARY KEY (`education_batch11_id`);

--
-- Indexes for table `education_batch12`
--
ALTER TABLE `education_batch12`
  ADD PRIMARY KEY (`education_batch12_id`);

--
-- Indexes for table `english_batch`
--
ALTER TABLE `english_batch`
  ADD PRIMARY KEY (`english_id`);

--
-- Indexes for table `english_batch1`
--
ALTER TABLE `english_batch1`
  ADD PRIMARY KEY (`english_batch1_id`);

--
-- Indexes for table `english_batch2`
--
ALTER TABLE `english_batch2`
  ADD PRIMARY KEY (`english_batch2_id`);

--
-- Indexes for table `english_batch3`
--
ALTER TABLE `english_batch3`
  ADD PRIMARY KEY (`english_batch3_id`);

--
-- Indexes for table `english_batch4`
--
ALTER TABLE `english_batch4`
  ADD PRIMARY KEY (`english_batch4_id`);

--
-- Indexes for table `english_batch5`
--
ALTER TABLE `english_batch5`
  ADD PRIMARY KEY (`english_batch5_id`);

--
-- Indexes for table `english_batch6`
--
ALTER TABLE `english_batch6`
  ADD PRIMARY KEY (`english_batch6_id`);

--
-- Indexes for table `english_batch7`
--
ALTER TABLE `english_batch7`
  ADD PRIMARY KEY (`english_batch7_id`);

--
-- Indexes for table `english_batch8`
--
ALTER TABLE `english_batch8`
  ADD PRIMARY KEY (`english_batch8_id`);

--
-- Indexes for table `english_batch9`
--
ALTER TABLE `english_batch9`
  ADD PRIMARY KEY (`english_batch9_id`);

--
-- Indexes for table `english_batch10`
--
ALTER TABLE `english_batch10`
  ADD PRIMARY KEY (`english_batch10_id`);

--
-- Indexes for table `english_batch11`
--
ALTER TABLE `english_batch11`
  ADD PRIMARY KEY (`english_batch11_id`);

--
-- Indexes for table `english_batch12`
--
ALTER TABLE `english_batch12`
  ADD PRIMARY KEY (`english_batch12_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_commits`
--
ALTER TABLE `event_commits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it_batch`
--
ALTER TABLE `it_batch`
  ADD PRIMARY KEY (`it_batch_id`);

--
-- Indexes for table `it_batch1`
--
ALTER TABLE `it_batch1`
  ADD PRIMARY KEY (`it_batch1_id`);

--
-- Indexes for table `it_batch2`
--
ALTER TABLE `it_batch2`
  ADD PRIMARY KEY (`it_batch2_id`);

--
-- Indexes for table `it_batch3`
--
ALTER TABLE `it_batch3`
  ADD PRIMARY KEY (`it_batch3_id`);

--
-- Indexes for table `it_batch4`
--
ALTER TABLE `it_batch4`
  ADD PRIMARY KEY (`it_batch4_id`);

--
-- Indexes for table `it_batch5`
--
ALTER TABLE `it_batch5`
  ADD PRIMARY KEY (`it_batch5_id`);

--
-- Indexes for table `it_batch6`
--
ALTER TABLE `it_batch6`
  ADD PRIMARY KEY (`it_batch6_id`);

--
-- Indexes for table `it_batch7`
--
ALTER TABLE `it_batch7`
  ADD PRIMARY KEY (`it_batch7_id`);

--
-- Indexes for table `it_batch8`
--
ALTER TABLE `it_batch8`
  ADD PRIMARY KEY (`it_batch8_id`);

--
-- Indexes for table `it_batch9`
--
ALTER TABLE `it_batch9`
  ADD PRIMARY KEY (`it_batch9_id`);

--
-- Indexes for table `it_batch10`
--
ALTER TABLE `it_batch10`
  ADD PRIMARY KEY (`it_batch10_id`);

--
-- Indexes for table `it_batch11`
--
ALTER TABLE `it_batch11`
  ADD PRIMARY KEY (`it_batch11_id`);

--
-- Indexes for table `it_batch12`
--
ALTER TABLE `it_batch12`
  ADD PRIMARY KEY (`it_batch12_id`);

--
-- Indexes for table `pharmacy_batch`
--
ALTER TABLE `pharmacy_batch`
  ADD PRIMARY KEY (`pharmacy_id`);

--
-- Indexes for table `pharmacy_batch1`
--
ALTER TABLE `pharmacy_batch1`
  ADD PRIMARY KEY (`pharmacy_batch1_id`);

--
-- Indexes for table `pharmacy_batch2`
--
ALTER TABLE `pharmacy_batch2`
  ADD PRIMARY KEY (`pharmacy_batch2_id`);

--
-- Indexes for table `pharmacy_batch3`
--
ALTER TABLE `pharmacy_batch3`
  ADD PRIMARY KEY (`pharmacy_batch3_id`);

--
-- Indexes for table `pharmacy_batch4`
--
ALTER TABLE `pharmacy_batch4`
  ADD PRIMARY KEY (`pharmacy_batch4_id`);

--
-- Indexes for table `pharmacy_batch5`
--
ALTER TABLE `pharmacy_batch5`
  ADD PRIMARY KEY (`pharmacy_batch5_id`);

--
-- Indexes for table `pharmacy_batch6`
--
ALTER TABLE `pharmacy_batch6`
  ADD PRIMARY KEY (`pharmacy_batch6_id`);

--
-- Indexes for table `pharmacy_batch7`
--
ALTER TABLE `pharmacy_batch7`
  ADD PRIMARY KEY (`pharmacy_batch7_id`);

--
-- Indexes for table `pharmacy_batch8`
--
ALTER TABLE `pharmacy_batch8`
  ADD PRIMARY KEY (`pharmacy_batch8_id`);

--
-- Indexes for table `pharmacy_batch9`
--
ALTER TABLE `pharmacy_batch9`
  ADD PRIMARY KEY (`pharmacy_batch9_id`);

--
-- Indexes for table `pharmacy_batch10`
--
ALTER TABLE `pharmacy_batch10`
  ADD PRIMARY KEY (`pharmacy_batch10_id`);

--
-- Indexes for table `pharmacy_batch11`
--
ALTER TABLE `pharmacy_batch11`
  ADD PRIMARY KEY (`pharmacy_batch11_id`);

--
-- Indexes for table `pharmacy_batch12`
--
ALTER TABLE `pharmacy_batch12`
  ADD PRIMARY KEY (`pharmacy_batch12_id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch4`
--
ALTER TABLE `batch4`
  MODIFY `it_batch4_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bba_batch1`
--
ALTER TABLE `bba_batch1`
  MODIFY `bba_batch1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bba_batch2`
--
ALTER TABLE `bba_batch2`
  MODIFY `bba_batch2_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bba_batch3`
--
ALTER TABLE `bba_batch3`
  MODIFY `bba_batch3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bba_batch4`
--
ALTER TABLE `bba_batch4`
  MODIFY `bba_batch4_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bba_batch5`
--
ALTER TABLE `bba_batch5`
  MODIFY `bba_batch5_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bba_batch6`
--
ALTER TABLE `bba_batch6`
  MODIFY `bba_batch6_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bba_batch7`
--
ALTER TABLE `bba_batch7`
  MODIFY `bba_batch7_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bba_batch8`
--
ALTER TABLE `bba_batch8`
  MODIFY `bba_batch8_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bba_batch9`
--
ALTER TABLE `bba_batch9`
  MODIFY `bba_batch9_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bba_batch10`
--
ALTER TABLE `bba_batch10`
  MODIFY `bba_batch10_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bba_batch11`
--
ALTER TABLE `bba_batch11`
  MODIFY `bba_batch11_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bba_batch12`
--
ALTER TABLE `bba_batch12`
  MODIFY `bba_batch12_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `commerce_batch`
--
ALTER TABLE `commerce_batch`
  MODIFY `commerce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `commerce_batch1`
--
ALTER TABLE `commerce_batch1`
  MODIFY `commerce_batch1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commerce_batch2`
--
ALTER TABLE `commerce_batch2`
  MODIFY `commerce_batch2_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commerce_batch3`
--
ALTER TABLE `commerce_batch3`
  MODIFY `commerce_batch3_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commerce_batch4`
--
ALTER TABLE `commerce_batch4`
  MODIFY `commerce_batch4_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commerce_batch5`
--
ALTER TABLE `commerce_batch5`
  MODIFY `commerce_batch5_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commerce_batch6`
--
ALTER TABLE `commerce_batch6`
  MODIFY `commerce_batch6_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commerce_batch7`
--
ALTER TABLE `commerce_batch7`
  MODIFY `commerce_batch7_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commerce_batch8`
--
ALTER TABLE `commerce_batch8`
  MODIFY `commerce_batch8_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commerce_batch9`
--
ALTER TABLE `commerce_batch9`
  MODIFY `commerce_batch9_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commerce_batch10`
--
ALTER TABLE `commerce_batch10`
  MODIFY `commerce_batch10_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commerce_batch11`
--
ALTER TABLE `commerce_batch11`
  MODIFY `commerce_batch11_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commerce_batch12`
--
ALTER TABLE `commerce_batch12`
  MODIFY `commerce_batch12_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cs_batch`
--
ALTER TABLE `cs_batch`
  MODIFY `cs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cs_batch1`
--
ALTER TABLE `cs_batch1`
  MODIFY `cs_batch1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cs_batch2`
--
ALTER TABLE `cs_batch2`
  MODIFY `cs_batch2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cs_batch3`
--
ALTER TABLE `cs_batch3`
  MODIFY `cs_batch3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cs_batch4`
--
ALTER TABLE `cs_batch4`
  MODIFY `cs_batch4_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cs_batch5`
--
ALTER TABLE `cs_batch5`
  MODIFY `cs_batch5_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cs_batch6`
--
ALTER TABLE `cs_batch6`
  MODIFY `cs_batch6_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cs_batch7`
--
ALTER TABLE `cs_batch7`
  MODIFY `cs_batch7_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cs_batch8`
--
ALTER TABLE `cs_batch8`
  MODIFY `cs_batch8_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cs_batch9`
--
ALTER TABLE `cs_batch9`
  MODIFY `cs_batch9_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cs_batch10`
--
ALTER TABLE `cs_batch10`
  MODIFY `cs_batch10_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cs_batch11`
--
ALTER TABLE `cs_batch11`
  MODIFY `cs_batch11_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cs_batch12`
--
ALTER TABLE `cs_batch12`
  MODIFY `cs_batch12_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `education_batch`
--
ALTER TABLE `education_batch`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education_batch1`
--
ALTER TABLE `education_batch1`
  MODIFY `education_batch1_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_batch2`
--
ALTER TABLE `education_batch2`
  MODIFY `education_batch2_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_batch3`
--
ALTER TABLE `education_batch3`
  MODIFY `education_batch3_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_batch4`
--
ALTER TABLE `education_batch4`
  MODIFY `education_batch4_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_batch5`
--
ALTER TABLE `education_batch5`
  MODIFY `education_batch5_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_batch6`
--
ALTER TABLE `education_batch6`
  MODIFY `education_batch6_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_batch7`
--
ALTER TABLE `education_batch7`
  MODIFY `education_batch7_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_batch8`
--
ALTER TABLE `education_batch8`
  MODIFY `education_batch8_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_batch9`
--
ALTER TABLE `education_batch9`
  MODIFY `education_batch9_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_batch10`
--
ALTER TABLE `education_batch10`
  MODIFY `education_batch10_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_batch11`
--
ALTER TABLE `education_batch11`
  MODIFY `education_batch11_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_batch12`
--
ALTER TABLE `education_batch12`
  MODIFY `education_batch12_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `english_batch`
--
ALTER TABLE `english_batch`
  MODIFY `english_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `english_batch1`
--
ALTER TABLE `english_batch1`
  MODIFY `english_batch1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `english_batch2`
--
ALTER TABLE `english_batch2`
  MODIFY `english_batch2_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `english_batch3`
--
ALTER TABLE `english_batch3`
  MODIFY `english_batch3_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `english_batch4`
--
ALTER TABLE `english_batch4`
  MODIFY `english_batch4_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `english_batch5`
--
ALTER TABLE `english_batch5`
  MODIFY `english_batch5_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `english_batch6`
--
ALTER TABLE `english_batch6`
  MODIFY `english_batch6_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `english_batch7`
--
ALTER TABLE `english_batch7`
  MODIFY `english_batch7_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `english_batch8`
--
ALTER TABLE `english_batch8`
  MODIFY `english_batch8_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `english_batch9`
--
ALTER TABLE `english_batch9`
  MODIFY `english_batch9_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `english_batch10`
--
ALTER TABLE `english_batch10`
  MODIFY `english_batch10_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `english_batch11`
--
ALTER TABLE `english_batch11`
  MODIFY `english_batch11_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `english_batch12`
--
ALTER TABLE `english_batch12`
  MODIFY `english_batch12_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_commits`
--
ALTER TABLE `event_commits`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forum_comments`
--
ALTER TABLE `forum_comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `forum_topics`
--
ALTER TABLE `forum_topics`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `it_batch`
--
ALTER TABLE `it_batch`
  MODIFY `it_batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `it_batch1`
--
ALTER TABLE `it_batch1`
  MODIFY `it_batch1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `it_batch2`
--
ALTER TABLE `it_batch2`
  MODIFY `it_batch2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `it_batch3`
--
ALTER TABLE `it_batch3`
  MODIFY `it_batch3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `it_batch4`
--
ALTER TABLE `it_batch4`
  MODIFY `it_batch4_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `it_batch5`
--
ALTER TABLE `it_batch5`
  MODIFY `it_batch5_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `it_batch6`
--
ALTER TABLE `it_batch6`
  MODIFY `it_batch6_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `it_batch7`
--
ALTER TABLE `it_batch7`
  MODIFY `it_batch7_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `it_batch8`
--
ALTER TABLE `it_batch8`
  MODIFY `it_batch8_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `it_batch9`
--
ALTER TABLE `it_batch9`
  MODIFY `it_batch9_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `it_batch10`
--
ALTER TABLE `it_batch10`
  MODIFY `it_batch10_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `it_batch11`
--
ALTER TABLE `it_batch11`
  MODIFY `it_batch11_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `it_batch12`
--
ALTER TABLE `it_batch12`
  MODIFY `it_batch12_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacy_batch`
--
ALTER TABLE `pharmacy_batch`
  MODIFY `pharmacy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pharmacy_batch1`
--
ALTER TABLE `pharmacy_batch1`
  MODIFY `pharmacy_batch1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pharmacy_batch2`
--
ALTER TABLE `pharmacy_batch2`
  MODIFY `pharmacy_batch2_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacy_batch3`
--
ALTER TABLE `pharmacy_batch3`
  MODIFY `pharmacy_batch3_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacy_batch4`
--
ALTER TABLE `pharmacy_batch4`
  MODIFY `pharmacy_batch4_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacy_batch5`
--
ALTER TABLE `pharmacy_batch5`
  MODIFY `pharmacy_batch5_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacy_batch6`
--
ALTER TABLE `pharmacy_batch6`
  MODIFY `pharmacy_batch6_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacy_batch7`
--
ALTER TABLE `pharmacy_batch7`
  MODIFY `pharmacy_batch7_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacy_batch8`
--
ALTER TABLE `pharmacy_batch8`
  MODIFY `pharmacy_batch8_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacy_batch9`
--
ALTER TABLE `pharmacy_batch9`
  MODIFY `pharmacy_batch9_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacy_batch10`
--
ALTER TABLE `pharmacy_batch10`
  MODIFY `pharmacy_batch10_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacy_batch11`
--
ALTER TABLE `pharmacy_batch11`
  MODIFY `pharmacy_batch11_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacy_batch12`
--
ALTER TABLE `pharmacy_batch12`
  MODIFY `pharmacy_batch12_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
