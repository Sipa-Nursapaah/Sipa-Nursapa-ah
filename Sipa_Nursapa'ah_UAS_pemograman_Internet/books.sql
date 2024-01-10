-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2024 pada 07.04
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nama_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `author` varchar(50) NOT NULL,
  `published_year` int(4) NOT NULL,
  `isbn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `published_year`, `isbn`) VALUES
(1, 'Revolusi Digital: Memahami dan Mengoptimalkan Teknologi Informasi dan Komunikas', 'Sipa Nursapaah', 2020, 'C2183207004'),
(2, 'Navigasi Digital: Panduan Praktis Mengenai Teknologi Informasi dan Komunikasi da', 'Sipa Nursapaah', 2022, 'C2183207004'),
(3, 'Membangun Dasar-Dasar IT: Pengantar Komprehensif untuk Pemahaman Teknologi Infor', 'Sipa Nursapaah', 2023, 'C2183207004'),
(4, 'Inovasi TIK: Membuka Potensi Tanpa Batas dalam Dunia Teknologi Informasi dan Kom', 'Sipa Nursapaah', 2023, 'C2183207004'),
(5, 'Kemanusiaan dalam Kode: Etika dan Tantangan Teknologi Informasi dan Komunikasi', 'Sipa Nursapaah', 2024, 'C2183207004');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
