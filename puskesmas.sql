-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2022 pada 00.43
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
  `hasil_lab` varchar(255) NOT NULL,
  `rujukan` varchar(100) DEFAULT NULL,
  `jenis_obat` text DEFAULT NULL,
  `pembayaran` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berobat`
--

INSERT INTO `berobat` (`id_berobat`, `nik`, `nama_pasien_berobat`, `s`, `o`, `a`, `p`, `tgl_berobat`, `jenis_pembayaran`, `jenis_poli`, `diagnosa`, `hasil_lab`, `rujukan`, `jenis_obat`, `pembayaran`) VALUES
(6, 111123123123, 'Hendri Tri Putri', '-', '-', '-', '-', '2022-07-05', 'Umum', 'KLinik Umum', '-1', 'Ini_hanya_contoh.pdf', '-2', '-3', 0),
(7, 222123123123, 'Pasien Dua', '-', '-', '-', '-', '2022-07-22', 'BPJS', 'KLinik Umum', '-1', 'Ini_hanya_contoh1.pdf', '-2', '-3', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `no_kk` bigint(20) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `umur_pasien` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` int(200) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl_lahir_pasien` date NOT NULL,
  `gender` text NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `no_bpjs` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_kk`, `nik`, `username`, `password`, `nama_pasien`, `umur_pasien`, `alamat`, `no_hp`, `tempat_lahir`, `tgl_lahir_pasien`, `gender`, `tinggi_badan`, `berat_badan`, `no_bpjs`) VALUES
(8, 111321321321, 111123123123, 'trihendri', 'intan', 'Hendri Tri Putri', 23, 'Pahoman', 81369933, 'Lampung', '1999-06-01', 'Laki-laki', 162, 78, 0),
(9, 222321321321, 222123123123, 'pasiendua', '123', 'Pasien Dua', 23, 'Pahoman', 81369933, 'Lampung', '2022-07-22', 'Laki-laki', 162, 78, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'poligigi', 'admingigi', 'gigi'),
(3, 'klinikumum', 'adminumum', 'umum'),
(4, 'klinikkia', 'adminkia', 'kia'),
(5, 'klinikgizi', 'admingizi', 'gizi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`id_berobat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berobat`
--
ALTER TABLE `berobat`
  MODIFY `id_berobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
