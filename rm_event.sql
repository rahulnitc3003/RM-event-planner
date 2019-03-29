-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2019 at 07:11 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rm_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
('1', 'odio'),
('10', 'unde'),
('100', 'fuga'),
('11', 'et'),
('12', 'architecto'),
('13', 'ea'),
('14', 'temporibus'),
('15', 'voluptatibus'),
('16', 'sequi'),
('17', 'dolores'),
('18', 'facere'),
('19', 'sed'),
('2', 'dolorum'),
('20', 'sunt'),
('21', 'pariatur'),
('22', 'provident'),
('23', 'occaecati'),
('24', 'aperiam'),
('25', 'voluptates'),
('26', 'modi'),
('27', 'aliquid'),
('28', 'omnis'),
('29', 'qui'),
('3', 'illo'),
('30', 'et'),
('31', 'qui'),
('32', 'mollitia'),
('33', 'aspernatur'),
('34', 'non'),
('35', 'commodi'),
('36', 'cupiditate'),
('37', 'itaque'),
('38', 'perspiciatis'),
('39', 'commodi'),
('4', 'doloremque'),
('40', 'ut'),
('41', 'odit'),
('42', 'id'),
('43', 'ut'),
('44', 'dolorum'),
('45', 'eius'),
('46', 'consequatur'),
('47', 'rerum'),
('48', 'aut'),
('49', 'molestias'),
('5', 'unde'),
('50', 'numquam'),
('51', 'repellendus'),
('52', 'modi'),
('53', 'ipsum'),
('54', 'commodi'),
('55', 'qui'),
('56', 'error'),
('57', 'sit'),
('58', 'consectetur'),
('59', 'neque'),
('6', 'laboriosam'),
('60', 'aut'),
('61', 'et'),
('62', 'sed'),
('63', 'sit'),
('64', 'ipsam'),
('65', 'accusamus'),
('66', 'quidem'),
('67', 'quia'),
('68', 'corporis'),
('69', 'mollitia'),
('7', 'cupiditate'),
('70', 'quia'),
('71', 'quia'),
('72', 'ducimus'),
('73', 'et'),
('74', 'occaecati'),
('75', 'delectus'),
('76', 'qui'),
('77', 'esse'),
('78', 'dolorum'),
('79', 'aperiam'),
('8', 'illo'),
('80', 'modi'),
('81', 'quo'),
('82', 'voluptas'),
('83', 'itaque'),
('84', 'nulla'),
('85', 'dolor'),
('86', 'odio'),
('87', 'hic'),
('88', 'consequatur'),
('89', 'tenetur'),
('9', 'sint'),
('90', 'doloribus'),
('91', 'quam'),
('92', 'quo'),
('93', 'sint'),
('94', 'est'),
('95', 'sit'),
('96', 'aut'),
('97', 'qui'),
('98', 'velit'),
('99', 'cumque');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `village` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_date` date NOT NULL,
  `tent_service` tinyint(1) NOT NULL,
  `caterine_service` tinyint(1) NOT NULL,
  `dj_service` tinyint(1) NOT NULL,
  `confirm` tinyint(1) NOT NULL DEFAULT '0',
  `tent_service_price` int(11) NOT NULL DEFAULT '0',
  `caterine_service_price` int(11) NOT NULL DEFAULT '0',
  `dj_service_price` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `name`, `village`, `district`, `address`, `booking_date`, `tent_service`, `caterine_service`, `dj_service`, `confirm`, `tent_service_price`, `caterine_service_price`, `dj_service_price`) VALUES
(1, 1, 'rahul kumar', 'v1', 'd1', 'a1', '2019-01-01', 0, 0, 1, 0, 0, 0, 0),
(2, 1, 'bipin pandit', 'v2', 'd2', 'a2', '2019-01-01', 1, 1, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `dist_id` int(11) NOT NULL,
  `dist_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`dist_id`, `dist_name`) VALUES
(1, 'madhubani'),
(2, 'darbhanga');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `password` int(11) NOT NULL,
  `verification_code` int(11) DEFAULT NULL,
  `otp_generate_time` datetime NOT NULL,
  `code_active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `mobile`, `password`, `verification_code`, `otp_generate_time`, `code_active`) VALUES
(1, 'rahul@gmail.com', 9988776655, 123, 812, '2019-01-07 02:18:00', 0),
(13, 'rjrahulabc232@gmail.com', 9061543942, 0, 617, '2019-01-07 02:55:41', 0),
(15, 'shaileshkumar@teknotrait.com', 9061543940, 12345, 955, '2019-01-07 03:08:01', 0),
(22, 'developer@gmail.com', 9061543941, 999, 734, '2019-01-07 03:08:01', 0),
(23, 'newmail@gmail.com', 9988766644, 54321, NULL, '0000-00-00 00:00:00', 0),
(25, '', 9987766532, 321, NULL, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE `village` (
  `village_id` int(11) NOT NULL,
  `dist_id` int(11) NOT NULL,
  `village_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`village_id`, `dist_id`, `village_name`) VALUES
(1, 1, 'parbatta'),
(2, 1, 'Silliguri'),
(3, 2, 'Ramaghargh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `booking_ibfk_1` (`user_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`dist_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`village_id`),
  ADD KEY `dist_id` (`dist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `dist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `village`
--
ALTER TABLE `village`
  MODIFY `village_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `village`
--
ALTER TABLE `village`
  ADD CONSTRAINT `village_ibfk_1` FOREIGN KEY (`dist_id`) REFERENCES `district` (`dist_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
