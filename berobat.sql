-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2022 pada 18.30
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.13

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
-- Struktur dari tabel `berobat`
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
  `jenis_obat` text DEFAULT NULL,
  `pembayaran` int(40) DEFAULT NULL,
  `aksi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berobat`
--

INSERT INTO `berobat` (`id_berobat`, `nik`, `nama_pasien_berobat`, `s`, `o`, `a`, `p`, `tgl_berobat`, `jenis_pembayaran`, `jenis_poli`, `diagnosa`, `jenis_obat`, `pembayaran`, `aksi`) VALUES
(6, 111123123123, 'Hendri Tri Putri', '-', '-', '-', '-', '2022-07-05', 'Umum', 'KLinik Umum', '-', '-', 0, ''),
(7, 222123123123, 'Pasien Dua', '-', '-', '-', '-', '2022-07-22', 'BPJS', 'KLinik Umum', '-', '-', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`id_berobat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berobat`
--
ALTER TABLE `berobat`
  MODIFY `id_berobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
