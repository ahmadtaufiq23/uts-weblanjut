-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2019 pada 12.02
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `no_hp_lama` varchar(25) NOT NULL,
  `no_hp_baru` varchar(25) NOT NULL,
  `tgl_diubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `nim`, `no_hp_lama`, `no_hp_baru`, `tgl_diubah`) VALUES
(1, '161240000491', '085225117741', '085225117740', '2019-11-06 21:34:39'),
(2, '161240000492', '081356098764', '081356098761', '2019-11-06 21:35:21'),
(3, '161240000493', '081345726201', '081345726200', '2019-11-06 21:35:33'),
(4, '161240000494', '085225117742', '085225117741', '2019-11-10 23:15:21'),
(5, '161240000495', '089546321452', '089546321450', '2019-11-11 12:44:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat_lengkap` varchar(100) NOT NULL,
  `nomer_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id`, `nim`, `nama_mahasiswa`, `jenis_kelamin`, `alamat_lengkap`, `nomer_hp`) VALUES
(1, '161240000491', 'afiq', 'laki-laki', 'jogja', '085225117740'),
(2, '161240000492', 'putri', 'perempuan', 'surabaya', '081356098761'),
(3, '161240000493', 'bunga', 'perempuan', 'jakarta', '081345726200'),
(4, '161240000494', 'ahmad', 'laki-laki', 'surabaya', '085225117741'),
(5, '161240000495', 'arif', 'laki-laki', 'jogja', '089546321450');

--
-- Trigger `tbl_mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `uts` BEFORE UPDATE ON `tbl_mahasiswa` FOR EACH ROW insert into log
set nim = old.nim,
no_hp_lama = old.nomer_hp,
no_hp_baru = new.nomer_hp,
tgl_diubah = NOW()
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
