-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2024 pada 05.48
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `tmp_lahir`, `tgl_lahir`, `alamat`, `create_at`, `update_at`) VALUES
(84736, 'Ahmad', 'Semarang', '2003-07-07', 'Jl. Perintis Kemerdekaan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6371930, 'Melati', 'Jambi', '2001-12-01', 'Jl. Kenanga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8483928, 'Jojo', 'Semarang', '2002-05-11', 'Jl. Perintis Kemerdekaan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9765409, 'Anisa', 'Semarang', '2001-02-15', 'Jl. Kencana Ungu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88283921, 'Nayla', 'Jakarta', '2002-04-12', 'Jl. Ahmad Yani', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tgl_terbit` date NOT NULL,
  `jmlh_halaman` int(100) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `kategori`, `pengarang`, `penerbit`, `tgl_terbit`, `jmlh_halaman`, `create_at`, `update_at`) VALUES
(2, 'Bumi', 'Novel', 'Tere liye', 'Gramedia Pustaka Utama', '2014-07-07', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Mariposa', 'Novel', 'Luluk', 'Coconut Books', '2018-05-07', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Sejarah Indonesia', 'Sejarah', 'Djakariah', 'Gramedia Pustaka Utama', '2012-03-30', 25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Hikayat Majapahit', 'Sejarah', 'Nino Oktorino', 'Penerbit Republika', '2008-12-01', 25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Sains Pedia', 'Sains dan Matematika', 'Patricia Daniels ', 'PT Gramedia Pustaka Utama', '2017-12-06', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Filsafat Ilmu', 'Filsafat', 'Amsal Bahtiar', 'PT Gramedia Pustaka Utama', '2007-03-15', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Teknologi Imersif', 'Teknologi', 'Suryantara', 'Penerbit Republika', '2012-10-09', 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Logika Matematika', 'Sains dan Matematika', 'Rizky Pradana', 'PT Gramedia Pustaka Utama', '2024-11-06', 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Hukum Humaniter', 'Hukum', 'Budi Pramono', ' Scopindo Media Pustaka', '2022-08-02', 235, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88283922;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
