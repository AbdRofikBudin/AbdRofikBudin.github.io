-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 03:56 PM
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
(9, 'Fatahillah Al Bantani', '3603404012020003', 'titan.bagus.br@gmail.com', 1, 'Cirebon', '1998-02-02', 'islam', 'Srandakan, RT 06/RW 89, Kaliangkrik, Jembarombo, Sleman', 'fatah', '$2y$10$71WSh4sDZX.HXFzH9c5u9.bDKmfKCWhBvma6K8HRHQxt2zOkw3AKq', 1),
(10, 'Jauhasd', '2163512356132354', 'titan.bramantyo@students.amikom.ac.id', 1, 'Popuia', '2024-04-18', 'islam', 'Guina', 'haha', '$2y$10$4DPOlznHHu0EcpHid8jmKOcSJzrpdtbW56NpQ7CoawNj3pdlDC8Xq', 0),
(11, 'Baba', '1234123412341234', 'titan.bramantyo@students.amikom.ac.id', 1, 'Magelang', '2000-02-08', 'islam', 'Gunungpring', 'baba', '$2y$10$/v4GU9LpG5h9hbO22u8hsuaIhSDHb93/BYVJh8c.La5oakO515Gvy', 1),
(12, 'Bagus Kertasono', '3452615263547162', 'titan.bagus.br@gmail.com', 1, 'Surakarta', '1988-05-12', 'islam', 'Sukoharjo, Jawa Tengah', 'bagus', '$2y$10$DlZvOO4qYPU.vgCXNcgvkeeJA61b2fWSqktUvafKx8OzaykwGPbQm', 1);

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
(1, 'Rianti', '1234567891234567', 'Ramayana', '9876543217654321', 'Rama Rianti Budianto', 'Sleman', '2024-05-07', 'islam', 1, 2),
(2, 'Hidayatun', '1212121212222222', 'Gilbert', '12738123781273', 'Keisha Hidayatun', 'Sleman', '2024-05-07', 'islam', 2, 8);

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
(1, 'Timah Jawa Imperium', 'Lafeu, Kontomando, Morowali', 'Pertambangan', 'Luhut Pandjaitan'),
(2, 'PT. Katra Syirkah Abadi', 'Perumahan Kaliandra, Huntebinong, Morowali', 'Perdagangan Barang', 'Tiga Serangkai Makmur'),
(3, 'PT Katra Syirkah Abadi', 'Karanganyar, Margorejo, Tempel, Sleman', 'Industri Teknologi Informasi', 'Irfan Ramadhani');

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
(1, '36191283728463274', 'Almarhum', 'Lumajang', '1998-06-06', 'islam', 1, 'Sleman', 26, '2024-05-06', 'Sakit'),
(2, '1234567887654321', 'Almarhum Haih', 'Kaliulung', '1999-04-01', 'islam', 1, 'Magelang', 25, '2024-05-09', 'Sakit'),
(3, '9999999999999999', 'Hitman Jatmiko', 'Demak', '1976-10-02', 'islam', 1, 'Sleman', 48, '2024-05-08', 'Gugur Bertugas');

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
(1, 'Pesta Pernikahan', 'Balai Desa Baratan', 1, '2024-07-05', '08:00:00', '19:51:00'),
(2, 'Pesta', 'Rumah Baba', 1, '2024-05-23', '08:32:00', '12:32:00');

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
  `others_id` int(11) DEFAULT NULL,
  `noted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `letter_requests`
--

INSERT INTO `letter_requests` (`id`, `applicant_id`, `request_type`, `request_date`, `request_status`, `att_ktp`, `att_kk`, `att_ket_bidan`, `att_business_doc`, `att_ket_pindah`, `reason_reject`, `died_person_id`, `birth_baby_id`, `business_id`, `event_id`, `move_id`, `others_id`, `noted`) VALUES
(28, 9, 'usaha', '2024-04-16 00:00:00', 3, 'b0abe4143bcd69674105a32c49b32f91.png', NULL, NULL, '7aba0eb9b983c11510c41fb04c74cc0b.jpg', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, ''),
(29, 9, 'kematian', '2024-05-06 00:00:00', 4, '9fd64d5d105e12b995d682422cef3004.png', '687842c24ef8dab14c2ef4c456efb732.jpg', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, ''),
(30, 9, 'usaha', '2024-05-06 00:00:00', 4, 'f84e91125d2453df566e1f63af1a3152.png', NULL, NULL, 'c8725a34de984dc8f90506e0ffdd4a1d.jpg', NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, ''),
(31, 9, 'izin-kegiatan', '2024-05-06 00:00:00', 4, 'd669a3b6dfb3ecdb55fab007a995b56c.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, ''),
(32, 9, 'pengantar-nikah', '2024-05-06 00:00:00', 4, 'd0f311b3cd2da4041dc38a41d28769cb.png', '1cf17f09b45a766e1c101b0318483f2c.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, ''),
(33, 9, 'kurang-mampu', '2024-05-06 00:00:00', 4, 'b7d6c75fc58cb8fa78b2f859908815ab.png', '497235e7101aa9b03697be172b4573e2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, ''),
(34, 9, 'pengantar-nikah', '2024-05-07 00:00:00', 4, '7543138d40dc37e047db80dca55a995f.png', '916f4c9868c0114c3711c78466e689b6.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, ''),
(35, 9, 'pengantar-nikah', '2024-05-08 00:00:00', 4, 'e25045bc208cae103e505902a6d5d4a4.png', 'b9e37053b3facc8dae1344fba2170a2f.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, ''),
(36, 11, 'kematian', '2024-05-09 00:00:00', 4, '2acaac4471ad0378847e19ecd893af28.png', 'ebd1e423932b34d4ffcc710e07192ef2.jpg', NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, ''),
(37, 11, 'kelahiran', '2024-05-09 00:00:00', 4, NULL, 'cc0cb68745450b783233633bdde4f24a.jpg', '44ae2c0d7bf59ec12267dfacf04503e6.png', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, ''),
(38, 11, 'kepindahan', '2024-05-09 00:00:00', 4, '3a28a58960ffeabd06616e97145dc819.png', '22a7def0e259dbbf5c8cda9e3dc54b9c.jpg', NULL, NULL, 'ada41fa2907764ec76c5a97795e45dcb.jpg', NULL, NULL, NULL, NULL, NULL, 1, NULL, ''),
(39, 11, 'kedatangan', '2024-05-09 00:00:00', 4, '62a7b8bf509d79020c56e82065a615bd.png', '16a7cd92c65a80aeb84af8c9da67ce1b.jpg', NULL, NULL, '210b77e841d034e2b966a2801bf465cb.png', NULL, NULL, NULL, NULL, NULL, 2, NULL, ''),
(40, 11, 'usaha', '2024-05-09 00:00:00', 4, '842f77d247fa22c9fd4a323f80b4441e.png', NULL, NULL, '52946ad6d3df947d384b14164b89b568.png', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, ''),
(41, 11, 'kurang-mampu', '2024-05-09 00:00:00', 4, '7f2f70d3535697ae1bbe1bdeb788cd40.png', '4f08a61e8e6e2d36e9defb76adb5518d.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, ''),
(42, 11, 'pengantar-nikah', '2024-05-09 00:00:00', 4, 'd9fc3a4c6f49265533706d53f7428148.png', 'c79d3820c70653c1fe08f2e4e5e59002.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, ''),
(43, 11, 'izin-kegiatan', '2024-05-09 00:00:00', 4, 'aaebe1bae70b3a283aa9439a6a26bb25.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, ''),
(44, 11, 'kepindahan', '2024-05-09 00:00:00', 3, '53a1cf769da423861abd840d2f6fb467.jpg', '07528316af888d72153fd2aa946b05c0.png', NULL, NULL, '1fc5d55ee56cf4471a8f0600e1f019de.jpg', NULL, NULL, NULL, NULL, NULL, 3, NULL, 'Ngga mau aja. bye\r\n'),
(45, 11, 'kurang-mampu', '2024-05-09 00:00:00', 3, 'a10381e484beeb9d0588a89049d617ee.jpg', '6ec13efd5ec2068559f3b9a8531fb119.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 'tolong isikan data dengan benar'),
(46, 12, 'kematian', '2024-05-09 00:00:00', 4, '5bd1f1c87758ed318fc857544a9a8215.jpg', '2b365d594d42cdd4e97608f0c8470c4b.png', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, ''),
(47, 11, 'kelahiran', '2024-05-09 00:00:00', 4, NULL, 'e0937f95e39138e09b1ea242f4fe5c3a.png', 'bbe07719cddbc007a2c4e3dafe121d7b.png', NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, ''),
(48, 9, 'pengantar-nikah', '2024-05-09 00:00:00', 4, 'bb44c920d66b21b7db833e4be094c6eb.png', '129993b552fe75f07b52f087a43845b3.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, ''),
(49, 9, 'kurang-mampu', '2024-05-09 00:00:00', 3, 'fc88ef4750a301c58127c03f938f9ba5.png', '6277f670be5cacc1e45001b7c52fc744.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, 'Hey, anda itu orang kayaa!!!');

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
(1, 'Magelang', 'Sleman', 'Ikut Keluarga'),
(2, 'Magelang', 'Sleman', 'Pekerjaan'),
(3, 'Uruguay', 'Yogyakarta', 'Keamanan');

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
(3, 'Programmer', 1, 'pengantar-nikah'),
(4, 'Anggota Dewan', 1, 'pengantar-nikah'),
(5, 'Anggota Dewan', 2, 'Pendaftaran Bantuan'),
(6, 'Sabung Ayam', 1, 'pengantar-nikah'),
(7, 'Presiden', 1, 'pengantar-nikah'),
(8, 'Wirausaha', 2, 'Pendaftaran Bantuan'),
(9, 'Wirausaha', 1, 'pengantar-nikah'),
(10, 'Siapa tau', 2, 'Kamu'),
(11, 'Karyawan', 1, 'pengantar-nikah'),
(12, 'Pengangguran', 2, 'Coba-coba');

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
-- Dumping data for table `submission_letter`
--

INSERT INTO `submission_letter` (`id`, `applicant_id`, `letter_id`, `status`, `wa`, `submission_date`, `full_address`) VALUES
(1, 9, 33, 4, '085742434110', '2024-05-09', 'Jalan Raya'),
(2, 11, 36, 2, '0895234234345', '2024-05-09', 'Margorejo, Tempel'),
(3, 11, 37, 2, '08672421432123', '2024-05-09', 'Karanganyar'),
(4, 11, 38, 4, '0823248723742', '2024-05-09', 'Yogyakarta, Indonesia'),
(5, 11, 39, 2, '0821423423544', '2024-05-09', 'Gg. Guan'),
(6, 11, 40, 4, '0982132478342234', '2024-05-09', 'Alamat Kirim'),
(7, 11, 41, 4, '099329748324324', '2024-05-09', 'jasjsdasd'),
(8, 11, 42, 2, '4565466453452424', '2024-05-09', 'hhhjjjgj'),
(9, 11, 43, 4, '0023972873284', '2024-05-09', 'ygsadgsad'),
(10, 11, 47, 4, '09812232423324', '2024-05-09', 'Jalan Anu'),
(11, 9, 48, 4, '18327163712321', '2024-05-09', 'Anu Jalana'),
(12, 12, 46, 4, '123123124324123', '2024-05-09', 'Dadali');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `letter_requests`
--
ALTER TABLE `letter_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `m_letter_types`
--
ALTER TABLE `m_letter_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `submission_letter`
--
ALTER TABLE `submission_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
