-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2026 at 02:32 PM
-- Server version: 10.6.24-MariaDB-log
-- PHP Version: 8.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ensawirm_arknight`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link_ref` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `gambar`, `link_ref`) VALUES
(1, 'cacat', 'Analisis mendalam terhadap potensi Arts Ring dan *skill* upgrade dari Pimpinan Rhodes Island.', 'amiya.jpg', 'https://arknights.fandom.com/wiki/Amiya'),
(2, 'Rilis Event: Texas the Omertosa Limited', 'Panduan lengkap *pull* dan sinergi *skill* Operator Vanguard Limited terbaru.', 'TexasAlter.jpg', 'https://arknights.fandom.com/wiki/Texas_the_Omertosa'),
(3, 'Guide: Optimalisasi Supply Stage (LMD)', 'Rekomendasi rute dan formasi untuk memaksimalkan perolehan Lungmen Dolar.', 'saria.jpg', 'http://127.0.0.1:5500/index.html#');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `gambar`, `deskripsi`, `tanggal`) VALUES
(1, 'Amiya', 'amiya.jpg', '6* Caster / Rhodes Island Leader', '2026-01-14 13:54:28'),
(2, 'Kaltsit', 'kalsit.jpg', '6* Medic / Monst3r Summoner', '2026-01-14 13:57:00'),
(3, 'Texas', 'TexasAlter.jpg', '6* Specialis / Exsekutor', '2026-01-14 13:58:02'),
(4, 'Exusiai', 'exsuis.jpg', '6* Sniper / Penguin Logistics', '2026-01-14 13:59:28'),
(5, 'SilverAsh', 'silverash.jpg', '6* Guard / Kjerag Warlord', '2026-01-14 13:59:57'),
(6, 'Lappland', 'lapland.jpg', '5* Guard / Siracusa Wolf', '2026-01-14 14:00:27'),
(7, 'Saria', 'saria.jpg', '6* Defender / Rhine Lab', '2026-01-14 14:00:46'),
(8, 'Mudrock', 'mudrok.jpg', '6* Defender / Former Reunion', '2026-01-14 14:01:00'),
(9, 'Specter', 'specte.jpg', '5* Guard / Abyssal Hunter', '2026-01-14 14:01:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'img/profil rafi.jpg'),
(2, 'april', '37d153a06c79e99e4de5889dbe2e7c57', 'img/rapi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
