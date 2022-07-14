-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2022 at 04:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `berobat`
--

CREATE TABLE `berobat` (
  `id_berobat` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama_pasien_berobat` varchar(100) NOT NULL,
  `s` text NOT NULL,
  `o` text NOT NULL,
  `a` text NOT NULL,
  `p` text NOT NULL,
  `tgl_berobat` date NOT NULL,
  `jenis_pembayaran` text NOT NULL,
  `jenis_poli` varchar(100) NOT NULL,
  `diagnosa` text DEFAULT NULL,
  `jenis_obat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berobat`
--

INSERT INTO `berobat` (`id_berobat`, `nik`, `nama_pasien_berobat`, `s`, `o`, `a`, `p`, `tgl_berobat`, `jenis_pembayaran`, `jenis_poli`, `diagnosa`, `jenis_obat`) VALUES
(1, 3175050607991001, 'Muhammad Telaga', 'test', 'test', 'test', 'test', '2022-07-11', '1', 'gigi', '', ''),
(2, 3175050607991001, 'Muhammad Telaga', 'test', 'test', 'test', 'test', '2022-07-12', '1', 'testing', '', ''),
(3, 3175050607991001, 'Muhammad Telaga', 'test', 'test', 'test', 'test', '2022-07-12', '1', 'testing', '', ''),
(4, 3175050607991001, 'm', 'sda', 'ada', 'dfad', 'asfadf', '2022-07-12', 'BPJS', 'testing', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `no_kk` bigint(20) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `umur_pasien` int(11) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl_lahir_pasien` date NOT NULL,
  `gender` text NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `no_bpjs` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_kk`, `nik`, `nama_pasien`, `umur_pasien`, `tempat_lahir`, `tgl_lahir_pasien`, `gender`, `tinggi_badan`, `berat_badan`, `no_bpjs`) VALUES
(1, 123, 123, 'Telaga Testing', 23, 'Jakarta', '1999-07-06', '1', 163, 75, 0),
(2, 123, 123, 'Telaga Testing', 23, 'Jakarta', '2022-07-12', '1', 12, 12, 0),
(3, 123, 123, 'Telaga Testing', 23, 'Jakarta', '2022-07-12', '1', 13, 123, 123),
(4, 1234567889, 3175050607991001, 'roy', 123, 'jak', '2022-07-12', '1', 13, 123, 4234),
(5, 123, 13213, 'dfdsfd', 1223, 'asdsad', '2000-09-08', '1', 123, 123, 452),
(6, 123124, 214321, 'm', 213, 'aa', '2000-08-09', '1', 213, 132, 3890),
(7, 123, 3175050607991001, 'm', 123, 'Jakarta', '2022-07-12', 'Laki-laki', 7, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`id_berobat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berobat`
--
ALTER TABLE `berobat`
  MODIFY `id_berobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
