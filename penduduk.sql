-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 04:41 PM
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
-- Database: `penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `nm_kepala` varchar(50) NOT NULL,
  `nm_sekertaris` varchar(50) NOT NULL,
  `NIP_k` varchar(20) NOT NULL,
  `NIP_s` varchar(20) NOT NULL,
  `id` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`nm_kepala`, `nm_sekertaris`, `NIP_k`, `NIP_s`, `id`) VALUES
('adfas', 'jojo', '2341245', '123214124', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dusun`
--

CREATE TABLE `dusun` (
  `nm_dusun` varchar(50) NOT NULL,
  `kd_dusun` int(3) NOT NULL,
  `k_dusun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dusun`
--

INSERT INTO `dusun` (`nm_dusun`, `kd_dusun`, `k_dusun`) VALUES
('afas', 4, 'sasa'),
('jura', 5, 'juki'),
('sappu', 6, 'atur');

-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `nama_b` varchar(50) NOT NULL,
  `nama_m` varchar(50) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`nama_b`, `nama_m`, `no_kk`, `nama_ayah`, `nik`, `dusun`, `kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status`, `rt`, `rw`) VALUES
('sera', 'asdfasf', '112341', 'asdf', '125123533', 'jura', 'Laki-Laki', 'asdg', '2020-01-21', 'asdf', '', '', 'Kawin', '2', '2'),
('ujang', 'reta', '125512', 'asdfa', '5551515', 'sappu', 'Perempuan', 'afs', '2020-01-20', 'adf', 'asd', 'asdfasdf', 'Kawin', '2', '2'),
('kari', 'ssaf', '131322', 'giras', '1234611', 'afas', 'Laki-Laki', 'maju', '2020-01-06', 'islam', '', '', 'Belum Kawin', '2', '2'),
('agung', 'sdfa', '1616616', 'giras', '46616161', 'afas', 'Perempuan', 'asdfsdf', '2020-01-29', 'dafca', 'adsf', 'asdf', 'Kawin', '2', '2'),
('sadfgsd', 'asdg', '231412612', '14weqfqqwet', '12345121254234', 'afas', 'Laki-Laki', 'qetqwe', '2020-01-21', 'qwert', 'sadf', 'asdfgasdg', 'Belum Kawin', '2', '2'),
('asdf', 'asdf', 'a1246612', 'asdf', '12345123', 'afas', 'Laki-Laki', 'asdf', '2020-01-08', 'adsf', 'aaa', '', 'Kawin', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `lahir`
--

CREATE TABLE `lahir` (
  `nama` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kd_dusun` varchar(50) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `nama_b` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `nok_kk` varchar(20) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `nama_m` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lahir`
--

INSERT INTO `lahir` (`nama`, `nik`, `kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `pekerjaan`, `kd_dusun`, `tahun`, `nama_b`, `status`, `nok_kk`, `rt`, `rw`, `nama_m`) VALUES
('duji', '123123', 'Perempuan', 'rtas', '2020-01-08', 'islam', '', '', 'tinambung', '2020', 'fahran', 'BELUM KAWIN', '123123', '1', '1', 'dujis'),
('idah', '1234512461', 'Laki-Laki', 'wqerqw', '2020-01-02', 'qwer', 'qwer', 'qrq', 'tes', '2020', 'ffa', 'Belum Kawin', '25412412', '2', '2', 'aser'),
('serraa', '1234513641236', 'Laki-Laki', 'adfqwg', '2020-01-24', 'wasdfg', 'dswaf', 'asdf', 'tes', '2020', 'ujang', 'Belum Kawin', '345436532', '2', '2', 'asri'),
('asdfsadf', '12453456344344', 'Laki-Laki', 'asda', '1900-02-04', 'islam', 'qwe', 'qwe', 'luaor', '1900', 'asda', 'Belum Kawin', '433524', '2', '2', 'as'),
('kurni', '12512351252135125', 'Perempuan', 'gh3hb', '2019-12-29', 'islam', '', '', 'jura', '2019', 'ffa', 'Belum Kawin', '25412412', '2', '2', 'aser'),
('ergsag', '134512', 'Perempuan', 'asdga', '2020-01-26', '1asdf', 'adsf', 'adf', 'jura', '2020', 'asep', 'Belum Kawin', '123461', '2', '2', 'ijah'),
('asdf', '234124', 'Perempuan', 'sdf', '2020-02-01', 'df', 'sdfs', 'sdf', 'tes', '2020', 'sfd', 'Belum Kawin', '1234', '2', '2', 'sdf'),
('fikogaijksfg', '2341252512', 'Laki-Laki', 'asdfasdf', '2020-01-30', 'sdf', '', '', 'jura', '2020', 'asdgas', 'Belum Kawin', '342342', '2', '2', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `mati`
--

CREATE TABLE `mati` (
  `nama` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `hari_bulan` varchar(6) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `pukul` varchar(5) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `agama` varchar(29) NOT NULL,
  `kelamin` varchar(15) NOT NULL,
  `dusun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mati`
--

INSERT INTO `mati` (`nama`, `nik`, `tanggal_lahir`, `hari_bulan`, `tahun`, `pukul`, `rt`, `rw`, `agama`, `kelamin`, `dusun`) VALUES
('giras', '1111222', '2020-01-29', '01-14-', '2020', '21:00', '2', '2', 'sdf', 'Perempuan', 'sappu');

-- --------------------------------------------------------

--
-- Table structure for table `no_surat`
--

CREATE TABLE `no_surat` (
  `no` int(5) NOT NULL,
  `no_mati` int(5) NOT NULL,
  `no_keluar` int(5) NOT NULL,
  `no_lahir` int(5) NOT NULL,
  `no_ktp` int(5) NOT NULL,
  `no_kk` int(5) NOT NULL,
  `no_lainya` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_surat`
--

INSERT INTO `no_surat` (`no`, `no_mati`, `no_keluar`, `no_lahir`, `no_ktp`, `no_kk`, `no_lainya`) VALUES
(1, 55, 15, 17, 38, 10, 19);

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `nama` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kd_dusun` varchar(50) NOT NULL,
  `nok_kk` int(20) NOT NULL,
  `nama_b` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nama`, `nik`, `kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `pekerjaan`, `kd_dusun`, `nok_kk`, `nama_b`, `status`, `tahun`, `rt`, `rw`) VALUES
('sertarsd', '1231233', 'Perempuan', 'asdfsdf', '2020-01-29', 'dafca', 'adsf', 'asdf', 'afas', 131322, 'giras', 'Kawin', '', '2', '2'),
('sadfgsd', '12345121254234', 'Laki-Laki', 'qetqwe', '2020-01-21', 'qwert', 'sadf', '', 'afas', 231412612, 'sadfgsd', 'Belum Kawin', '', '2', '2'),
('asdf', '12345123', 'Laki-Laki', 'asdf', '2020-01-08', 'adsf', '', '', 'afas', 0, 'asdf', 'Kawin', '', '2', '2'),
('kari', '1234611', 'Laki-Laki', 'maju', '2020-01-06', 'islam', '', '', 'afas', 131322, 'giras', 'Belum Kawin', '', '2', '2'),
('sera', '125123533', 'Laki-Laki', 'asdg', '2020-01-21', 'asdf', '', '', 'jura', 112341, '', 'Kawin', '', '2', '2'),
('ergsag', '134512', 'Perempuan', 'asdga', '2020-01-26', '1asdf', 'adsf', 'adf', 'afas', 123461, 'arus', 'Belum Kawin', '2020', '0', '0'),
('kita', '145613451', 'Laki-Laki', 'asdf', '2020-01-01', 'as', 'asdf', 'asdf', 'sappu', 125512, 'ujang', 'Belum Kawin', '', '2', '2'),
('asdfasf', '15125', 'Laki-Laki', 'sdgasdg', '2020-02-01', 'islam', 'asasg', 'asdgas', 'afas', 123461, 'arus', 'Kawiin', '', '0', '0'),
('ujang', '5551515', 'Perempuan', 'afs', '2020-01-20', 'adf', 'asd', 'asd', 'sappu', 125512, 'ujang', 'Kawin', '', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(2, 'sekretaris', '21232f297a57a5a743894a0e4a801fc3', 'Sekretaris'),
(3, 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indexes for table `lahir`
--
ALTER TABLE `lahir`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12341235;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
