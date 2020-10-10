-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 أغسطس 2018 الساعة 07:28
-- إصدار الخادم: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- بنية الجدول `student`
--

CREATE TABLE `student` (
  `id` bigint(20) NOT NULL,
  `Name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `university` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Level` int(11) NOT NULL,
  `Major` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `GPA_System` int(11) NOT NULL,
  `GPA` double NOT NULL,
  `Semester` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `HoursNum` int(11) NOT NULL,
  `MonthNum` int(11) NOT NULL,
  `SupervisorName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SupervisorPhone` varchar(10) NOT NULL,
  `SupervisorEmail` varchar(30) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `student`
--

INSERT INTO `student` (`id`, `Name`, `Phone`, `Email`, `university`, `Level`, `Major`, `GPA_System`, `GPA`, `Semester`, `StartDate`, `EndDate`, `HoursNum`, `MonthNum`, `SupervisorName`, `SupervisorPhone`, `SupervisorEmail`, `Status`) VALUES
(1091623580, '   منال', '0595922833', 'manalalmutyiri@gmail.com', 'Pnu', 6, 'Is', 0, 4, 'الفصل الصيفي', '2018-07-10', '2018-07-31', 120, 1, 'Ala', '0555444235', 'ala@gmail.com', 'N'),
(9874563210, 'اروى', '0512345678', 'hvb@jj.com', 'Saud', 6, 'Is', 0, 5, 'الفصل الصيفي', '2018-07-07', '2018-06-24', 205, 2, 'Norah', '078542', 'hvb@jj.com', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
