-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2022 pada 16.02
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ternak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`nama`, `email`, `komen`) VALUES
('Icikiwir', 'makansiang@gmail.com', 'Pukuli Wibu'),
('Raihan', 'RaihanPersiden2024@gmail.com', 'Lebih Di Benahi lagi!!'),
('Ganjar Pranowo', 'GovernorofCentralJava@idn.id', 'Dukung Saya Jadi Presiden'),
('Bapak', 'BapakGanteng@gmail.id', 'Artikelnya tolong di perbanyak lagi ya!!!'),
('', '', 'Diperbagus lagi'),
('Ibu', 'ibucantik112@gmail.com', 'Tulisanya sangat mudah sekali untuk dibaca'),
('Ibu', 'ibucantik112@gmail.com', 'Tulisanya sangat mudah sekali untuk dibaca'),
('Slark', 'SlarkShadowBlade@gmail.com', 'semoga website ini bisa berkembang'),
('Dilan RAWR', 'Dilan1998@milea.com', 'Bilang Aja Ke Tukang potongnya \"Potong Cepmek\" btw websitenya bagus banget '),
('joko', 'joko@gmail.com', 'bagusi lagi ya!!!!'),
('', '', 'bagusnih');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
