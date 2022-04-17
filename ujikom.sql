-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2022 pada 11.05
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hotel`
--

CREATE TABLE `tbl_hotel` (
  `id_hotel` int(11) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `keterangan_satu` longtext NOT NULL,
  `keterangan_dua` longtext NOT NULL,
  `keterangan_tiga` longtext NOT NULL,
  `keterangan_empat` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`id_hotel`, `nama_fasilitas`, `keterangan_satu`, `keterangan_dua`, `keterangan_tiga`, `keterangan_empat`) VALUES
(1, 'Kolam Renang', 'Luas 10 Meter', 'Dalam 1-2 Meter', '5 Macam Kolam Renang', 'Kolam Renang untuk Anak-Anak'),
(2, 'Taman', 'Taman yang Luas', 'Bermacam-macam pepohonan', 'Jauh dari polusi udara', 'cocok untuk tempat foto'),
(3, 'Tempat Makan', 'Makanan dibuat oleh Chef', 'Kualitas makanan terjamin', 'sudah mematuhi protokol', 'pelayanan khusus bagi vip');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kamar`
--

CREATE TABLE `tbl_kamar` (
  `id_kamar` int(11) NOT NULL,
  `tipe_kamar` varchar(20) NOT NULL,
  `fasilitas_satu` longtext NOT NULL,
  `fasilitas_dua` longtext NOT NULL,
  `fasilitas_tiga` longtext NOT NULL,
  `fasilitas_empat` longtext NOT NULL,
  `fasilitas_lima` longtext NOT NULL,
  `fasilitas_enam` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id_kamar`, `tipe_kamar`, `fasilitas_satu`, `fasilitas_dua`, `fasilitas_tiga`, `fasilitas_empat`, `fasilitas_lima`, `fasilitas_enam`) VALUES
(1, 'Superior', 'Kamar Berukuran Luas 35 m2', 'Kamar Mandi Shower', 'Coffee Maker', 'AC', 'LED TV 32 inch', ''),
(2, 'Deluxe', 'Kamar berukuran luas 45 m2', 'Kamar Mandi shower dan Bath tub', 'Coffee Maker', 'Sofa', 'LED TV 40 Inch', 'AC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemesanan`
--

CREATE TABLE `tbl_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL,
  `no_handphone` varchar(13) NOT NULL,
  `tipe_kamar` enum('Superior','Deluxe') NOT NULL,
  `tgl_cekin` date NOT NULL,
  `tgl_cekout` date NOT NULL,
  `jumlah_kamar` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`id_pemesanan`, `nama_pemesan`, `email`, `no_handphone`, `tipe_kamar`, `tgl_cekin`, `tgl_cekout`, `jumlah_kamar`) VALUES
(1, 'Sanggi Sanjaya', 'sanggi.sanjaya18@gmail.com', '089508686546', 'Deluxe', '2022-04-09', '2022-04-10', '1'),
(2, 'Rindi', 'rindiantika0556@gmail.com', '081928371912', 'Superior', '2022-04-12', '2022-04-13', '1'),
(3, 'Alpin', 'alpinramadhan@gmail.com', '087637381927', 'Superior', '2022-04-13', '2022-04-15', '3'),
(4, 'Alpan', 'alpan_pratama@gmail.com', '08127391172', 'Deluxe', '2022-04-29', '2022-04-30', '3'),
(5, 'Ani', 'ani_blackpink@yahoo.com', '08216473921', 'Deluxe', '2022-03-01', '2022-03-02', '2'),
(16, 'iban dobek', 'saidinaibandobek@gmail.com', '0867137391', 'Deluxe', '2022-04-29', '2022-04-30', '1'),
(17, 'imam', 'imamssadja@gmail.com', '05062003', 'Deluxe', '2022-04-14', '2022-04-15', '1'),
(18, 'iqbal', 'ibsal@gmail.com', '08170000000', 'Superior', '2022-04-13', '2022-04-14', '2'),
(21, 'ragil', 'ragil445@gmail.com', '08763718191', 'Superior', '2022-04-08', '2022-04-09', '2'),
(22, 'Hekto', 'hektopram11@gmail.com', '076382193711', 'Deluxe', '2022-04-27', '2022-04-28', '3'),
(23, 'Lisa', 'lalisablackpink@gmail.com', '+1(802)672-91', 'Deluxe', '2022-04-21', '2022-04-23', '1'),
(24, 'pahrudin', 'sajadgans@gmail.com', '08972918271', 'Superior', '2022-02-02', '2022-02-03', '1'),
(25, 'Noni Novita', 'noninovitasari@gmail.com', '087828191838', 'Deluxe', '2022-03-05', '2022-03-06', '2'),
(26, 'Denis', 'dada_danis@gmail.com', '0987654321', 'Superior', '2022-05-14', '2022-05-15', '3'),
(27, 'imam army', 'yusuf@gmail.com', '081212111222', 'Deluxe', '2022-04-21', '2022-04-22', '2'),
(28, 'lexuz', 'lexuss@gmail.com', '086516161712', 'Deluxe', '2022-06-22', '2022-06-23', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', 'admin', '1'),
(2, 'Resepsionis', 'resepsionis', 'resepsionis', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indeks untuk tabel `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
