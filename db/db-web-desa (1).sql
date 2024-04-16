-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 16, 2024 at 06:23 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

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
(6, 'Vicky Irwanto', '7604033004010001', 'vickyir300401@gmail.com', 1, 'Wonomulyo', '2001-04-30', 'islam', 'Jln Pringgodani No.15 Mancasan Kidul, Depok, Sleman, Yogyakarta', 'vickyir', '$2y$10$ttw/5ilXobtFQ7AgYFMz7uouihm1orsFcMeh665tNtr4s4NrsQxz2', 1),
(7, 'Dinda Adibah Putri', '7604034000001011', 'vickyirwanto2001@gmail.com', 1, 'Wonomulyo', '2013-12-23', 'islam', 'Sumberjo', 'dinda', '$2y$10$Es6RAmMIqQnyvFye7sppIuQUe4vS28CSPUzm1nbYbC2hwlFqA1yru', 1),
(8, 'Sindy Pramudita', '7604034402090001', 'vickyirwanto2001@gmail.com', 0, 'Wonomulyo', '2001-04-30', 'konghucu', 'Jln Pringgodani No.15 Mancasan Kidul, Depok, Sleman, Yogyakarta', 'sindy', '$2y$10$.gPJFVni8mww2hzoROFu6exDuTdkh03sZCzoNYwKhC0oBtV7Cf4Hi', 1);

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

--
-- Dumping data for table `birth_baby_identities`
--

INSERT INTO `birth_baby_identities` (`id`, `mother_name`, `mother_nik`, `father_name`, `father_nik`, `baby_name`, `birth_place`, `birth_date`, `baby_religion`, `baby_gender`, `child_order`) VALUES
(1, 'Sindy Pramudita', '760403300401001', 'Vicky Irwanto', '760403300401001', 'Zahra', 'Wonomulyo', '2024-04-13', 'islam', 2, 1);

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
(1, 'Katra.tech', 'sleman', 'Information Technology', 'Titan');

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

--
-- Dumping data for table `died_person_identities`
--

INSERT INTO `died_person_identities` (`id`, `nik`, `name`, `birth_place`, `birth_date`, `religion`, `gender`, `died_last_loc`, `last_age`, `died_date`, `died_cause`) VALUES
(1, '232837281827182', 'Sahroni', 'Jakarta', '2024-04-15', 'islam', 1, 'Jakarta', 40, '2024-04-13', 'Sakit');

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

--
-- Dumping data for table `event_identities`
--

INSERT INTO `event_identities` (`id`, `event_name`, `event_location`, `event_duration`, `event_date`, `event_start`, `event_end`) VALUES
(1, 'Party Guys', 'Club Malam', 2, '2024-04-16', '06:00:00', '22:18:00'),
(2, 'Party Guys', 'Club Malam', 2, '2024-04-19', '21:00:00', '22:00:00');

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
  `reason_reject` text,
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
(18, 6, 'kematian', '2024-04-15 00:00:00', 4, '970fbbdea9720bdfe802336c275faf94.png', '6554c95592966e91d80930f0268c8b2e.jpeg', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(19, 6, 'kelahiran', '2024-04-15 00:00:00', 4, NULL, 'bd66c7fd060d5ac5eeb43ae60cfe3eac.jpeg', '5e60e04db6862f9eec6b30cf36ff06fc.jpeg', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(20, 6, 'usaha', '2024-04-15 00:00:00', 3, '0e7fa0de6cb9c8f637fb44b11e64d8ce.png', NULL, NULL, '4dbeeca9e7a04543ef1368ecc797ba2f.jpeg', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(21, 6, 'kepindahan', '2024-04-15 00:00:00', 4, '168de09bb30dc8d3ef47661f941b978d.png', '8fb343842d9d3fe8c3e4c80665578d83.jpeg', NULL, NULL, 'dc4229f17e7bd9a271910381deff6565.jpeg', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(22, 6, 'kedatangan', '2024-04-15 00:00:00', 4, '0a3ffc85b9d82c8032b5524d75e32cff.png', '24b6df4af7cfb2eb02b814fb53592dba.jpeg', NULL, NULL, '8bca82d44b4ed725cbb99633554f8816.jpeg', NULL, NULL, NULL, NULL, NULL, 2, NULL),
(23, 6, 'kurang-mampu', '2024-04-15 00:00:00', 3, 'badb00fb4fd5ea9aa9631abc2b4329ec.png', '1052442b96344a5a97585371ce5f8ceb.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(24, 6, 'pengantar-nikah', '2024-04-15 00:00:00', 4, '43d072dbbffd35b6a30f8357a28d7aaf.png', '9931c00e5e09fdbb98e111402b93ac42.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(25, 6, 'izin-kegiatan', '2024-04-15 00:00:00', 3, '5f42477a5dbc4ff7ada7aa24375f812a.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(26, 6, 'pengantar-nikah', '2024-04-15 00:00:00', 4, 'fa70d1d1b84975408f824a5c3ebf1595.png', '17cb55526f3ce46268dba7e98ec4a20c.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(27, 8, 'izin-kegiatan', '2024-04-15 00:00:00', 3, '768cb1a2fde8542e194e9a922a90e02b.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL);

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

--
-- Dumping data for table `move_identities`
--

INSERT INTO `move_identities` (`id`, `home_address`, `destination_address`, `reason_leave`) VALUES
(1, 'Kebumen', 'Sugihwaras', 'Pendidikan'),
(2, 'Sumberjo', 'Kebumen', 'Bekerja');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `letter_requests`
--
ALTER TABLE `letter_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
