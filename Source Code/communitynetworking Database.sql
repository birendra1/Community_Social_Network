-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 06:17 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `communitynetworking`
--

-- --------------------------------------------------------

--
-- Table structure for table `useracc`
--

CREATE TABLE `useracc` (
  `registerid` bigint(10) NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `useracc`
--

INSERT INTO `useracc` (`registerid`, `name`, `email`, `branch`, `phone`, `password`, `gender`, `dob`, `usertype`, `status`) VALUES
(1705102000, 'birendra behera', 'fgtre@gmail.com', 'MCA', 7412586587, 'Napoleon@1234', 'Male', '1980-11-6', 'Student', 1),
(1705106001, 'lkjhg', 'lkjhg@gmail.com', 'MCA', 7537894561, 'Ajay@12345', 'Male', '1977-08-11', 'Student', 1),
(1705106003, 'Prakash singh', 'sparky268@gmail.com', 'MCA', 8249530072, '1705106003', 'Male', '1996-10-4', 'Student', 1),
(1705106011, 'Abhilash tripathy', 'abhilash@gmail.com', 'MCA', 8908742563, 'Napoleon@1234', 'Male', '1996-08-8', 'Student', 0),
(1705106019, 'Samir kumar panda', 'pandasamir553@gmail.com', 'MCA', 9658486575, 'Samir@321', 'Male', '1996-10-22', 'Student', 1),
(1705106020, 'Birendra Behera', 'bkb0997@gmail.com', 'MCA', 9861603040, '1705106020', 'Male', '1995-05-28', 'Admin', 1),
(1705106028, 'tapassss', 'fgtre@gmail.com', 'MCA', 8905102569, 'Napo@1234', 'Male', '1972-07-5', 'Student', 1),
(7102586548, 'tapassss', 'ghyt@gmail.com', 'MCA', 7894561230, 'Napoleon@2019', 'Male', '1979-05-11', 'Student', 0),
(7668755788, 'bvnbn', 'sk@gdh.com', 'MCA', 8888888888, 'asdfghjklo', 'Male', '1968-03-3', 'Student', 0),
(7894561230, 'oiuyt', 'fgtre@gmail.com', 'MCA', 7894561230, 'Napoleon@7894', 'Male', '2007-10-13', 'Student', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useracc`
--
ALTER TABLE `useracc`
  ADD UNIQUE KEY `registerid` (`registerid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
