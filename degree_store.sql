-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2021 pada 15.25
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `degree_store`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL,
  `no_tlpn` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `no_tlpn`, `email`) VALUES
(1, 'Pandu', 'mpandudc', '970af30e481057c48f87e101b61e6994', '08988408517', 'mpandudc@gmail,com'),
(2, 'Abyan', 'abyan', '827ccb0eea8a706c4c34a16891f84e7b', '08988408517', 'koreanjett@gmail.com'),
(7, 'Alvaro', 'Alvaro', '827ccb0eea8a706c4c34a16891f84e7b', '08988408517', 'varo@gmail.com'),
(8, 'Satya', 'Satya', '827ccb0eea8a706c4c34a16891f84e7b', '08988408517', 'urmom@urdad.com'),
(9, 'Imam', 'imam', '827ccb0eea8a706c4c34a16891f84e7b', '08988408517', 'medan@anak.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `tgl_terbit` date NOT NULL,
  `penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id_article`, `title`, `content`, `tgl_terbit`, `penerbit`) VALUES
(20, 'The Best Mouse In the World', '<p>SteelSeries has the top and most awarded mice in gaming with both wired and wireless gaming mouse options. All SteelSeries gaming mice include TrueMove sensors which are designed specifically for each gaming mouse with ideal tracking precision. Keeping the most intense gamers and their budget in mind, SteelSeries mice are built to last at cheap affordable market prices, with hyper durable materials and good switches that maintain consistency over millions and millions of clicks.</p>', '2021-04-26', 'Admin'),
(21, 'Best Keyboard since 2019', '<p>The SteelSeries fleet of mechanical gaming keyboards include RGB aluminum frame keyboards with customizable LED lighting to match any gamer style. The rainbow colored keycaps with full size numpad or TLK options set within the aircraft grade aluminum frame make SteelSeries mechanical gaming keyboards stunningly aesthetic and durable.</p>', '2021-04-27', 'Admin'),
(22, 'Best Gaming Headset for your Ears', '<p>The SteelSeries legacy brand is known worldwide for the award-winning sound, comfortable earphone design, and durable quality of the best gaming headsets money can buy. The SteelSeries Arctis multi-platform gaming headsets are designed in both wired and wireless styles, compatible with PC and Mac, and perfect for popular console gaming systems like Xbox, PlayStation, Nintendo Switch, mobile devices, and more.</p>', '2021-04-28', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE `beli` (
  `id_beli` int(5) NOT NULL,
  `tgl_pencatatan` datetime NOT NULL,
  `id_customer` int(5) NOT NULL,
  `id_gear` int(5) NOT NULL,
  `tgl_beli` date NOT NULL,
  `tgl_garansi` date NOT NULL,
  `hrga_beli` double NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `total_hrg` double NOT NULL,
  `status_garansi` varchar(15) NOT NULL,
  `status_pembelian` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beli`
--

INSERT INTO `beli` (`id_beli`, `tgl_pencatatan`, `id_customer`, `id_gear`, `tgl_beli`, `tgl_garansi`, `hrga_beli`, `tgl_pengembalian`, `total_hrg`, `status_garansi`, `status_pembelian`) VALUES
(10, '2018-12-26 10:28:19', 22, 29, '2018-12-26', '2018-12-29', 320000, '2018-12-29', 960000, '1', '1'),
(11, '2021-05-25 08:18:17', 27, 28, '2021-05-25', '2021-05-28', 12312, '0000-00-00', 0, '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(5) NOT NULL,
  `nama_customer` varchar(45) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `no_tlpn` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pesan` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `gender`, `no_tlpn`, `alamat`, `email`, `pesan`) VALUES
(30, 'MUHAMMAD PANDU DWI CAHYO', 'Laki-Laki', '085268945123', 'Jalan Veteran', 'mpandudc@student.ub.ac.id', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_beli`
--

CREATE TABLE `detail_beli` (
  `id_beli` int(5) NOT NULL,
  `id_gear` int(5) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `hrga_beli` double NOT NULL,
  `status_garansi` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_beli`
--

INSERT INTO `detail_beli` (`id_beli`, `id_gear`, `tgl_pengembalian`, `hrga_beli`, `status_garansi`) VALUES
(10, 10, '2021-05-19', 320000, '1'),
(11, 28, '0000-00-00', 12312, '0'),
(13, 27, '0000-00-00', 12312, '0'),
(14, 25, '0000-00-00', 12312, '0'),
(15, 26, '0000-00-00', 12312, '0'),
(16, 30, '0000-00-00', 12312, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gear`
--

CREATE TABLE `gear` (
  `id_gear` int(5) NOT NULL,
  `id_jenis` int(5) NOT NULL,
  `nama_gear` varchar(50) NOT NULL,
  `thn_gear` date NOT NULL,
  `kd_gear` varchar(25) NOT NULL,
  `hrg_beli` double NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tgl_input` date NOT NULL,
  `status_gear` enum('1','0') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gear`
--

INSERT INTO `gear` (`id_gear`, `id_jenis`, `nama_gear`, `thn_gear`, `kd_gear`, `hrg_beli`, `gambar`, `tgl_input`, `status_gear`) VALUES
(34, 17, 'Steelseries Rival 600', '2019-04-04', 'RV5415', 790000, 'gambar4.png', '0000-00-00', '1'),
(35, 17, 'Steelseries APEX PRO', '2021-01-03', 'APX457', 3500000, 'gambar3.png', '0000-00-00', '1'),
(36, 17, 'Steelseries Rival 5', '2020-01-01', 'RV1357', 820000, 'gambartime.png', '0000-00-00', '1'),
(37, 16, 'Steelseries Arctis 3 White', '2019-03-04', 'AC567', 1000000, 'gambar1.png', '2021-05-25', '1'),
(38, 16, 'Steelseries Arctis 7 Black', '2021-02-05', 'ARC114', 2500000, 'gambar5.png', '2021-04-26', '1'),
(30, 17, 'Steelseries APEX 5', '2020-12-19', 'APX667', 1900000, 'gambar6.png', '2021-05-26', '1'),
(31, 15, 'Steelseries Sensei 310', '2018-09-04', 'SS765', 450000, 'gambar7.png', '2021-02-12', '1'),
(32, 17, 'Steelseries APEX 3 ', '2019-12-01', 'APX664', 700000, 'gambar8.png', '2021-04-01', '1'),
(33, 16, 'Steelseries Arctis 7P', '2021-03-01', 'ARC2210', 4000000, 'gambar9.png', '2021-04-01', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(5) NOT NULL,
  `nama_jenis` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(17, 'Keyboard'),
(16, 'Headset'),
(15, 'Mouse');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(5) NOT NULL,
  `tgl_pencatatan` datetime NOT NULL,
  `id_customer` int(5) NOT NULL,
  `id_gear` int(5) NOT NULL,
  `tgl_beli` date NOT NULL,
  `tgl_garansi` date NOT NULL,
  `total_hrg` double NOT NULL,
  `status_pembelian` enum('1','0') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indeks untuk tabel `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `detail_beli`
--
ALTER TABLE `detail_beli`
  ADD PRIMARY KEY (`id_beli`),
  ADD UNIQUE KEY `id_mobil` (`id_gear`),
  ADD KEY `id_sewa` (`id_beli`);

--
-- Indeks untuk tabel `gear`
--
ALTER TABLE `gear`
  ADD PRIMARY KEY (`id_gear`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `beli`
--
ALTER TABLE `beli`
  MODIFY `id_beli` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `detail_beli`
--
ALTER TABLE `detail_beli`
  MODIFY `id_beli` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `gear`
--
ALTER TABLE `gear`
  MODIFY `id_gear` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_beli` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
