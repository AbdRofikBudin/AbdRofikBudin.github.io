-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 03:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-web-desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_operators`
--

CREATE TABLE `admin_operators` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_operators`
--

INSERT INTO `admin_operators` (`id`, `admin_name`, `email`, `username`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '$2y$10$LC3rxw43cBgv027NPXTTseirCFDh4HDrg6IZOcaAdAbVXu4DiAVYa');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) DEFAULT NULL,
  `nik` varchar(18) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `religion` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `verif_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `applicant_name`, `nik`, `email`, `gender`, `place_of_birth`, `date_of_birth`, `religion`, `address`, `username`, `password`, `verif_status`) VALUES
(9, 'Fatahillah Al Bantani', '3603404012020003', 'titan.bagus.br@gmail.com', 1, 'Cirebon', '1998-02-02', 'islam', 'Srandakan, RT 06/RW 89, Kaliangkrik, Jembarombo, Sleman', 'fatah', '$2y$10$71WSh4sDZX.HXFzH9c5u9.bDKmfKCWhBvma6K8HRHQxt2zOkw3AKq', 1);

-- --------------------------------------------------------

--
-- Table structure for table `birth_baby_identities`
--

CREATE TABLE `birth_baby_identities` (
  `id` int(11) NOT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `mother_nik` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `father_nik` varchar(255) DEFAULT NULL,
  `baby_name` varchar(255) DEFAULT NULL,
  `birth_place` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `baby_religion` varchar(255) DEFAULT NULL,
  `baby_gender` tinyint(1) DEFAULT NULL,
  `child_order` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `business_identities`
--

CREATE TABLE `business_identities` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `business_address` text NOT NULL,
  `business_category` varchar(255) NOT NULL,
  `owner_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `business_identities`
--

INSERT INTO `business_identities` (`id`, `business_name`, `business_address`, `business_category`, `owner_name`) VALUES
(1, 'Timah Jawa Imperium', 'Lafeu, Kontomando, Morowali', 'Pertambangan', 'Luhut Pandjaitan');

-- --------------------------------------------------------

--
-- Table structure for table `died_person_identities`
--

CREATE TABLE `died_person_identities` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `birth_place` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `died_last_loc` varchar(255) DEFAULT NULL,
  `last_age` int(3) DEFAULT NULL,
  `died_date` date DEFAULT NULL,
  `died_cause` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event_identities`
--

CREATE TABLE `event_identities` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_location` text NOT NULL,
  `event_duration` tinyint(4) NOT NULL,
  `event_date` date NOT NULL,
  `event_start` time NOT NULL,
  `event_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `letter_requests`
--

CREATE TABLE `letter_requests` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  `request_type` varchar(255) NOT NULL,
  `request_date` datetime DEFAULT NULL,
  `request_status` int(11) DEFAULT NULL COMMENT '1 diajukan, 2 diproses, 3 revisi, 4 selesai',
  `att_ktp` varchar(255) DEFAULT NULL,
  `att_kk` varchar(255) DEFAULT NULL,
  `att_ket_bidan` varchar(255) DEFAULT NULL,
  `att_business_doc` varchar(255) DEFAULT NULL,
  `att_ket_pindah` varchar(255) DEFAULT NULL,
  `reason_reject` text DEFAULT NULL,
  `died_person_id` int(11) DEFAULT NULL,
  `birth_baby_id` int(11) DEFAULT NULL,
  `business_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `move_id` int(11) DEFAULT NULL,
  `others_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `letter_requests`
--

INSERT INTO `letter_requests` (`id`, `applicant_id`, `request_type`, `request_date`, `request_status`, `att_ktp`, `att_kk`, `att_ket_bidan`, `att_business_doc`, `att_ket_pindah`, `reason_reject`, `died_person_id`, `birth_baby_id`, `business_id`, `event_id`, `move_id`, `others_id`) VALUES
(28, 9, 'usaha', '2024-04-16 00:00:00', 3, 'b0abe4143bcd69674105a32c49b32f91.png', NULL, NULL, '7aba0eb9b983c11510c41fb04c74cc0b.jpg', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `move_identities`
--

CREATE TABLE `move_identities` (
  `id` int(11) NOT NULL,
  `home_address` text NOT NULL,
  `destination_address` text NOT NULL,
  `reason_leave` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `m_letter_types`
--

CREATE TABLE `m_letter_types` (
  `id` int(11) NOT NULL,
  `letter_req_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_letter_types`
--

INSERT INTO `m_letter_types` (`id`, `letter_req_name`) VALUES
(1, 'perpindahan');

-- --------------------------------------------------------

--
-- Table structure for table `others_identities`
--

CREATE TABLE `others_identities` (
  `id` int(11) NOT NULL,
  `jobs` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `others_identities`
--

INSERT INTO `others_identities` (`id`, `jobs`, `type`, `description`) VALUES
(1, 'Swasta', 2, 'Untuk kesehatan'),
(2, 'Programmer', 1, 'pengantar-nikah'),
(3, 'Programmer', 1, 'pengantar-nikah');

-- --------------------------------------------------------

--
-- Table structure for table `submission_letter`
--

CREATE TABLE `submission_letter` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `letter_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `wa` varchar(255) NOT NULL,
  `submission_date` date NOT NULL,
  `full_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_operators`
--
ALTER TABLE `admin_operators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birth_baby_identities`
--
ALTER TABLE `birth_baby_identities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_identities`
--
ALTER TABLE `business_identities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `died_person_identities`
--
ALTER TABLE `died_person_identities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_identities`
--
ALTER TABLE `event_identities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `letter_requests`
--
ALTER TABLE `letter_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `letter_requests_ibfk_1` (`applicant_id`),
  ADD KEY `letter_requests_ibfk_10` (`died_person_id`),
  ADD KEY `letter_requests_ibfk_5` (`business_id`),
  ADD KEY `letter_requests_ibfk_6` (`event_id`),
  ADD KEY `letter_requests_ibfk_7` (`move_id`),
  ADD KEY `letter_requests_ibfk_8` (`others_id`),
  ADD KEY `letter_requests_ibfk_9` (`birth_baby_id`);

--
-- Indexes for table `move_identities`
--
ALTER TABLE `move_identities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_letter_types`
--
ALTER TABLE `m_letter_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others_identities`
--
ALTER TABLE `others_identities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submission_letter`
--
ALTER TABLE `submission_letter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`),
  ADD KEY `letter_id` (`letter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_operators`
--
ALTER TABLE `admin_operators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `letter_requests`
--
ALTER TABLE `letter_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `m_letter_types`
--
ALTER TABLE `m_letter_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `submission_letter`
--
ALTER TABLE `submission_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `letter_requests`
--
ALTER TABLE `letter_requests`
  ADD CONSTRAINT `letter_requests_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `letter_requests_ibfk_10` FOREIGN KEY (`died_person_id`) REFERENCES `died_person_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `letter_requests_ibfk_5` FOREIGN KEY (`business_id`) REFERENCES `business_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `letter_requests_ibfk_6` FOREIGN KEY (`event_id`) REFERENCES `event_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `letter_requests_ibfk_7` FOREIGN KEY (`move_id`) REFERENCES `move_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `letter_requests_ibfk_8` FOREIGN KEY (`others_id`) REFERENCES `others_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `letter_requests_ibfk_9` FOREIGN KEY (`birth_baby_id`) REFERENCES `birth_baby_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `submission_letter`
--
ALTER TABLE `submission_letter`
  ADD CONSTRAINT `submission_letter_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `submission_letter_ibfk_2` FOREIGN KEY (`letter_id`) REFERENCES `letter_requests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
