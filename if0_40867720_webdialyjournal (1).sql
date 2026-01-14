-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql309.infinityfree.com
-- Waktu pembuatan: 14 Jan 2026 pada 11.33
-- Versi server: 11.4.9-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_40867720_webdialyjournal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Perputakaan Kampus', 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'after_rain.jpg', '2025-12-14 08:25:45', 'admin'),
(2, 'Ruang Kelas', 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.\r\n', 'muka_serius_skill_misterius.jpg', '2025-12-10 22:02:38', 'admin'),
(3, 'Kelompok Belajar', 'This is a longer card with supporting text below as a natural', 'kebanyakan_tugas.jpg', '2025-12-10 22:05:47', 'admin'),
(4, 'Auditorium', 'lead-in to additional content. This content is a little bit', 'pov_fixEoror.jpg', '2025-12-10 22:07:21', 'admin'),
(22, 'Taman', 'lead-in to additional content. This content is a little bit', 'ryan-parker-LSYSeTfEe4k-unsplash.jpg', '2025-12-10 22:08:39', 'admin'),
(28, 'Ruang Lab', 'This is a longer card with supporting text below as a natural', 'ryan-parker-LSYSeTfEe4k-unsplash.jpg', '2025-12-10 22:09:34', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `deskripsi`, `gambar`, `tanggal`) VALUES
(1, 'Rumah Noah', 'Rumah Noah dalam film The Notebook, film horror tahun 2000an awal dengan ending yang sangat happy', '20260112123927.jpeg', '2026-01-12 12:39:27'),
(2, 'me and myself', 'Welcome to Fight Club. The first rule of Fight Club is: you do not talk about Fight Club. The second rule of Fight Club is: you DO NOT talk about Fight Club! Third rule of Fight Club: if someone yells â€œstop!â€, goes limp, or taps out, the fight is over. Fourth rule: only two guys to a fight. Fifth rule: one fight at a time, fellas. Sixth rule: the fights are bare knuckle. No shirt, no shoes, no weapons. Seventh rule: fights will go on as long as they have to. And the eighth and final rule: if this is your first time at Fight Club, you have to fight.\r\n', '20260112122635.jpeg', '2026-01-12 12:26:35'),
(3, 'Lahan Sawit', 'Foto lahan sawit diasa yang difoto dari atas menggunakan drone', '20260111234041.jpeg', '2026-01-11 23:40:41'),
(4, 'Foto Pak Prabowo', 'Kunjungan Presiden ke 8 kita ke berbagai Sekolah', '20260111234847.jpeg', '2026-01-11 23:48:47'),
(5, 'Makan Bergizi Gratis', 'Makan Bergizi Gratis program nasional pemerintah Indonesia yang diluncurkan oleh Presiden Prabowo Subianto untuk memberikan makanan bergizi secara gratis kepada anak sekolah, balita, ibu hamil, dan ibu menyusui guna meningkatkan kesehatan, menekan angka stunting, dan memperkuat SDM. Program strategis ini bertujuan memenuhi kebutuhan gizi kelompok rentan sejak dini sebagai persiapan Indonesia Emas 2045. ', '20260111235414.jpeg', '2026-01-11 23:54:14'),
(6, 'Rumah Sepongebob', 'Rumah SpongeBob SquarePants adalah sebuah nanas oranye besar yang berfungsi sebagai tempat tinggalnya di kota fiksi Bikini Bottom. Rumah ini adalah salah satu ikon paling dikenal dari serial kartun tersebut. ', '20260111235929.jpeg', '2026-01-11 23:59:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '20260112122433.jpeg'),
(2, 'danny', '21232f297a57a5a743894a0e4a801fc3', '20260112122456.jpg'),
(3, 'bradpitt', 'c465ba6053a3a5b413e077489f178e19', '20260112122410.jpeg'),
(4, 'wakil_admin', '31f2c1affe0dce60ed3411b4cf64c538', '20260112122349.jpeg'),
(6, 'pria_solo', '9862ae43a27a95effbcbf3698e46e5c6', '20260112122335.jpeg'),
(7, 'admin_luar', '4b23fcda12592e1f96e806f2cb510190', '20260112122227.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_article_username` (`username`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_username` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
