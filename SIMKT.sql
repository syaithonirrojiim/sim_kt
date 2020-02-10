-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 07:49 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_kt`
--
CREATE DATABASE IF NOT EXISTS `sim_kt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sim_kt`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `nama`, `username`, `password`, `hp`, `level`) VALUES
('02019111', 'Lutfi Jayadi', '02019111', '698d51a19d8a121ce581499d7b701668', '088889823', 2),
('02019222', 'Gita Indah Permatasari', '02019222', '4cb6903c6f8b22d7f191aff3e137dbef', '08774826637', 2),
('123', 'yayatu', '123', '4409eae53c2e26a65cfc24b3a2359eb9', '08957666876555', 1),
('201210370311337', 'Muammar Zaid', '201210370311337', 'cd6e5f8cae72a13cb149fa907abeeb19', '088981147912', 1),
('r_rijal', 'Ahmad Samsu Rijal', 'r_rijal', '25e8281c69ae6a68e92139c790f1956d', '08349288878', 1);

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `nim` varchar(20) NOT NULL,
  `id_kt` varchar(20) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`nim`, `id_kt`, `status`) VALUES
('200112131314', '1', 0),
('201210370311333', '1', 1),
('201210370311337', '2', 1),
('201210370311349', '2', 0),
('201219379311337', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_mhs`
--

CREATE TABLE `data_mhs` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mhs`
--

INSERT INTO `data_mhs` (`nim`, `nama`) VALUES
('201210370311328', 'M Hasan Al-Banned'),
('201210370311333', 'M. Rahmat H.'),
('201210370311334', 'Altaviano Akbar Henis'),
('201210370311337', 'Muammad Zaid Damaini'),
('201210370311345', 'Adi Gober'),
('201210370311356', 'Faizul Ulya'),
('201510370311301', 'Dana');

-- --------------------------------------------------------

--
-- Table structure for table `info_kt`
--

CREATE TABLE `info_kt` (
  `id_info_kt` int(10) NOT NULL,
  `kuliah` varchar(100) NOT NULL,
  `waktu` date NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_kt`
--

INSERT INTO `info_kt` (`id_info_kt`, `kuliah`, `waktu`, `tempat`, `status`) VALUES
(1, 'Cloud Computing', '2019-07-31', 'AULA DOME LT III', 0),
(2, 'Pelatihan Oracle', '2019-07-17', 'AULA GKB III', 0),
(3, 'Pelatihan Adobe Photoshop', '2019-07-16', 'AULA GKB III', 1),
(5, 'Workshop Robotika', '2019-07-11', 'AULA DOME', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `nidn` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`nidn`, `nama`, `username`, `password`, `hp`, `alamat`) VALUES
('l_yanuar', 'yanuar dwi', 'l_yanuar', '94fced7d9e42731aea466c6fd447d73a', '089998372887', 'Malang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `data_mhs`
--
ALTER TABLE `data_mhs`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `info_kt`
--
ALTER TABLE `info_kt`
  ADD PRIMARY KEY (`id_info_kt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_kt`
--
ALTER TABLE `info_kt`
  MODIFY `id_info_kt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
