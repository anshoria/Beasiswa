-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 08 Agu 2023 pada 15.33
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `nohp` int(11) NOT NULL,
  `semester` set('1','2','3','4','5','6','7','8') NOT NULL,
  `ipk` varchar(100) NOT NULL,
  `pilihan` set('Beasiswa Akademik','Beasiswa Non Akademik','Beasiswa Bidikmisi','Beasiswa Muhammadiyah') NOT NULL,
  `berkas` blob NOT NULL,
  `status` set('Belum di verifikasi','Verifikasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `email`, `nohp`, `semester`, `ipk`, `pilihan`, `berkas`, `status`) VALUES
(14, 'Fakhri Nasution', 'djarumteam@gmail.com', 2147483647, '8', '3', 'Beasiswa Muhammadiyah', 0x62656173697377612e6a7067, 'Belum di verifikasi'),
(15, 'Mohammed salah', 'djarumteam@gmail.com', 2147483647, '3', '4', 'Beasiswa Akademik', 0x4a57442d30345f66722e69612e30322d74756761732d7072616b74696b2d64656d6f6e7374726173695f765f6d61725f323032325f612e706466, 'Belum di verifikasi'),
(16, 'Windah Basudara', 'windah@gmail.com', 2147483647, '6', '3', 'Beasiswa Bidikmisi', 0x6b7572616e67206d616d70752e706e67, 'Belum di verifikasi'),
(17, 'Mumtazul Fuadi Nasution', 'djarumteam@gmail.com', 2147483647, '8', '3', 'Beasiswa Muhammadiyah', 0x64366638662d30345f66722e69612e30322d74756761732d7072616b74696b2d64656d6f6e7374726173695f76332d6573726f6e2e706466, 'Verifikasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
