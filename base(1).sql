-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 03:02 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `nama` varchar(50) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `s` varchar(2) NOT NULL,
  `komp` varchar(50) NOT NULL,
  `id` varchar(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `status` varchar(50) NOT NULL,
  `jabatan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`nama`, `telp`, `s`, `komp`, `id`, `jumlah`, `status`, `jabatan`) VALUES
('kiyare', '081823568123', 'S2', 'E-bisnis', 'd001', 8, 'Tetap', 'Lektor'),
('durti', '085250204022', 'S2', 'SPK dan Basis Data', 'd004', 9, 'Tetap', 'Asisten Ahli'),
('tira', '08511515111', 'S1', 'Animasi dan Multimedia', 'd006', 2, 'Tidak Tetap', 'Asisten Ahli'),
('asasf', '3125 ', 'S1', 'SPK dan Basis Data', '23561', 1, 'Tetap', 'Asisten Ahli');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `nama` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL,
  `persen` float NOT NULL,
  `id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`nama`, `status`, `persen`, `id`) VALUES
('Kompetensi', 'max', 35, '1'),
('Jumlah Bimbingan', 'min', 20, '2'),
('Jabatan akademik', 'max', 15, '3'),
('Pendidikan', 'max', 20, '4'),
('Status', 'max', 10, '5');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama` varchar(50) NOT NULL,
  `id` varchar(10) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `ip` varchar(5) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama`, `id`, `telp`, `ip`, `jurusan`) VALUES
('tiya', 'd002', '081512351253', '2016', 'TI'),
('rustam', 'd003', '081238451223', '2016', 'TI'),
('ruki', 'd001', '0812845182', '2014', 'TI'),
('dsaasgd', '1235', '125123', '221', 'TI');

-- --------------------------------------------------------

--
-- Table structure for table `no_surat`
--

CREATE TABLE `no_surat` (
  `nmr` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_surat`
--

INSERT INTO `no_surat` (`nmr`) VALUES
(76);

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `id` varchar(10) NOT NULL,
  `pemb1` varchar(10) NOT NULL,
  `pemb2` varchar(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`id`, `pemb1`, `pemb2`, `judul`, `status`) VALUES
('1235', 'd001', '23561', 'asdf', '1'),
('d001', 'd001', 'd004', 'asf', '1'),
('d002', 'd006', 'd001', 'asf', '1'),
('d003', 'd004', 'd001', 'afs', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sub_krit`
--

CREATE TABLE `sub_krit` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `value` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_krit`
--

INSERT INTO `sub_krit` (`id`, `nama`, `value`) VALUES
('3', 'Asisten Ahli', '0.25'),
('3', 'Lektor', '0.5'),
('3', 'Lektor Kepala', '0.75'),
('3', 'Profesor', '1'),
('4', 'S1', '1'),
('4', 'S2', '2'),
('4', 'S3', '3'),
('5', 'Tetap', '1'),
('5', 'Tidak Tetap', '0.5'),
('1', 'SPK dan Basis Data', '1'),
('1', 'Jaringan Komputer', '1'),
('1', 'E-bisnis', '1'),
('1', 'Algoritma dan Pemrograman ', '1'),
('1', 'Sistem informasi', '1'),
('1', 'Animasi dan Multimedia', '1'),
('2', 'Sesuai dengan jumlah bimbingan', '0'),
('C1', 'tes1', '1'),
('C1', 'tes', '1'),
('C1', 'asf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
