-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 01:53 PM
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
('kiyare', '081823568123', 'S2', 'E-bisnis', 'd001', 2, 'Tetap', 'Lektor'),
('durti', '085250204022', 'S2', 'SPK dan Basis Data', 'd004', 0, 'Tetap', 'Asisten Ahli'),
('tira', '08511515111', 'S1', 'Animasi dan Multimedia', 'd006', 0, 'Tidak Tetap', 'Asisten Ahli'),
('udin', '01856815812', 'S1', 'E-bisnis', 'd002', 0, 'Tidak Tetap', 'Asisten Ahli');

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
('tiya', 'd002', '081512351253', '3.0', 'TI'),
('ruki ss', 'd001', '08198991206', '2', 'SK'),
('rustam', 'd003', '081238451223', '1.0', 'SI');

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
('d002', 'kiyare', 'durti', 'asd', '1'),
('d001', 'kiyare', 'durti', 'a', '0');

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
('2', 'Sesuai dengan jumlah bimbingan', '0');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
