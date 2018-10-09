-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 11:06 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pass` text NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nik`, `nama`, `pass`, `level`) VALUES
('1001', 'Super Admin', '21232f297a57a5a743894a0e4a801fc3', 1),
('1002', 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `nik` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`nik`, `nama`, `pass`) VALUES
('2001', 'rikdal', '9af275639ffda08985ce26cdcb153cf9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notel`
--

CREATE TABLE `tbl_notel` (
  `id_notel` int(11) NOT NULL,
  `direktorat` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `no_handphone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notel`
--

INSERT INTO `tbl_notel` (`id_notel`, `direktorat`, `nama`, `no_telepon`, `no_handphone`) VALUES
(1, 'SPBU', '34.40311 Banjaran - Kosim Koswara', '5944082', '08112194447'),
(2, 'SPBU', '34.43205 Cianjur - Abdul Rojak', '263272359', '08112194306'),
(3, 'SPBU', '34.45307 Ciburaleng - Rucipto', '7793031', '08112194449'),
(4, 'SPBU', '34.40310 Cibiru - Pampam Sopandi', '7810950', '08112194250'),
(5, 'SPBU', '34.40314 Cicalengka - Rona Ari', '7948374', '08112194314'),
(6, 'SPBU', '34.45323 Ciherang - Obar', '261210709', '08112194307'),
(7, 'SPBU', '34.40312 Cikancung - Dendi Sopian', '7949139', '08112194243'),
(8, 'SPBU', '1', '1', '1'),
(9, 'SPBU', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sk`
--

CREATE TABLE `tbl_sk` (
  `id_sk` int(11) NOT NULL,
  `nomor_sk` varchar(50) NOT NULL,
  `jenis_sk` varchar(30) NOT NULL,
  `nama_sk` varchar(100) NOT NULL,
  `tgl_terbit_sk` date NOT NULL,
  `file_url` varchar(250) NOT NULL,
  `status` enum('Baru','Diperbarui') NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sk`
--

INSERT INTO `tbl_sk` (`id_sk`, `nomor_sk`, `jenis_sk`, `nama_sk`, `tgl_terbit_sk`, `file_url`, `status`, `tgl_input`) VALUES
(1, 'No. 06/SK-DIVISI SDM/SDM/III/2015 ', 'PERATURAN', 'FASILITAS PDAM DAN LISTRIK KARYAWAN', '2015-03-13', 'SK-FASILITAS_PDAM_DAN_LISTRIK_KARYAWAN.pdf', 'Baru', '2018-10-01'),
(2, 'No. 01/SK-PTM/SDM/IV/2017', 'PERATURAN', 'FASILITAS PEMILIK KENDARAAN', '2017-04-03', 'SK-FASILITAS_PEMILIK_KENDARAAN.pdf', 'Baru', '2018-10-01'),
(3, 'No. 06/SK-SDM/SDM/VIII/2016', 'PERATURAN', 'KETENTUAN LEMBUR KARYAWAN AL-MA\'SOEM GROUP', '2016-08-31', 'SK-KETENTUAN_LEMBUR_KARYAWAN.pdf', 'Baru', '2018-10-01'),
(4, 'No. 02/SK-SDM/SDM/XI/2012', 'PERATURAN', 'PERUBAHAN PESANGON KARYAWAN', '2012-11-19', 'SK-PERUBAHAN_PESANGON_KARYAWAN.pdf', 'Baru', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbl_notel`
--
ALTER TABLE `tbl_notel`
  ADD PRIMARY KEY (`id_notel`);

--
-- Indexes for table `tbl_sk`
--
ALTER TABLE `tbl_sk`
  ADD PRIMARY KEY (`id_sk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_notel`
--
ALTER TABLE `tbl_notel`
  MODIFY `id_notel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_sk`
--
ALTER TABLE `tbl_sk`
  MODIFY `id_sk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
