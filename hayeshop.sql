-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 08:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hayeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `level` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama`, `email`, `level`) VALUES
(3, 'admin', 'admin', 'admin', 'admin@admin.com', 'A'),
(4, 'karina', 'karina', 'Karina  aespa', 'karina@gmail.com', 'V'),
(7, 'jeje', 'jeje', 'jeje', 'jee@gmail.com', 'V');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biaya_kirim`
--

CREATE TABLE `tbl_biaya_kirim` (
  `id_biaya_kirim` int(10) NOT NULL,
  `kota` int(10) NOT NULL,
  `biaya` int(20) NOT NULL,
  `kurir` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_biaya_kirim`
--

INSERT INTO `tbl_biaya_kirim` (`id_biaya_kirim`, `kota`, `biaya`, `kurir`) VALUES
(2, 4, 200, 4),
(4, 3, 500, 3),
(7, 6, 50000, 4),
(8, 4, 3000, 2),
(9, 4, 9000, 3),
(10, 4, 2000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id_detail_order` int(11) NOT NULL,
  `id_order` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id_detail_order`, `id_order`, `id_produk`, `jumlah`, `harga`) VALUES
(44, 11, 24, 1, 200000),
(45, 11, 20, 1, 296),
(46, 11, 25, 1, 456000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Album'),
(2, 'Lightstick'),
(6, 'Photocard'),
(7, 'Season'),
(8, 'beyondlive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kota`
--

CREATE TABLE `tbl_kota` (
  `id_kota` int(3) NOT NULL,
  `nama_kota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kota`
--

INSERT INTO `tbl_kota` (`id_kota`, `nama_kota`) VALUES
(3, 'Semarang'),
(4, 'Yogyakarta'),
(5, 'Surabaya'),
(6, 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurir`
--

CREATE TABLE `tbl_kurir` (
  `id_kurir` int(3) NOT NULL,
  `nama_kurir` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kurir`
--

INSERT INTO `tbl_kurir` (`id_kurir`, `nama_kurir`) VALUES
(2, 'J&T'),
(3, 'JnE'),
(4, 'SiCepat'),
(5, 'Pos');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `username`, `password`, `nama`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`, `id_kota`, `email`, `no_hp`) VALUES
(11, 'xiaojun', 'xiaojun', 'xiaojun', 'Condong catur', 'Condong Catur', 'Depok', 'Sleman', 'Yogyakarta', '9987', 4, 'xiaojun@gmail.com', '09876'),
(16, 'jeno', 'jeno', 'jeno', 'Jalan Kampus', 'Condong Catur', 'Depok', 'Sleman', 'Yogyakarta', '8897', 4, 'jeno@gmail.com', '08578966790'),
(17, 'ten', 'ten', 'ten', 'Jalan Kampus', 'Condong Catur', 'Depok', 'Sleman', 'Yogyakarta', '8897', 6, 'ten@gmail.com', '0911817165'),
(18, 'dejun', 'dejun', 'dejun', 'Jalan Unit', 'Unit', 'Blere', 'Barat', 'Jawa Barat', '7765', 6, 'dejun@gmail.com', '08976');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(5) NOT NULL,
  `status_order` char(1) NOT NULL,
  `id_produk` int(3) DEFAULT NULL,
  `jumlah` varchar(100) NOT NULL,
  `harga` int(20) NOT NULL,
  `id_session` varchar(100) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembelian`
--

CREATE TABLE `tbl_pembelian` (
  `id_order` int(5) NOT NULL,
  `id_member` int(20) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `status_order` varchar(20) NOT NULL,
  `biaya_kirim` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pembelian`
--

INSERT INTO `tbl_pembelian` (`id_order`, `id_member`, `tanggal_beli`, `status_order`, `biaya_kirim`) VALUES
(11, 18, '2021-01-15', 'S', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(10) NOT NULL,
  `id_vendor` varchar(10) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `id_vendor`, `id_kategori`, `nama_produk`, `deskripsi`, `harga`, `gambar`) VALUES
(20, '1', 1, 'TWICE - EYES WIDE OPEN', 'TWICE - EYES WIDE OPEN', 304000, 'album-twice.png'),
(21, '1', 1, 'SNSD - SEASON GREETING', 'GIRLS GENERATION - SEASON GREETING 2021', 456000, 'season-snsd2.jpg'),
(22, '1', 1, 'IZ*ONE  - One-reeler', '- Out Box : 220 x 160mm  - Cover Postcard : Random 1 out of 12  - Photobook  - CD  - Movie Tickets  - Circle Reel Photo  - Film Photo : Random 1 out of 12  - Photocard : Random 2 out of 24  - AR Photocard : Random 1 out of 12  ? IZ* Movie Series      - IZ Movie Photo : Random 1 out of 12      - IZ Movie Sign Sticker : Random 1 out of 12      - IZ Movie Poster(Folded)  - Poster : 1st Press Only / Random 1 out of 15  - Special Photocard Set(Sign Printing) : Pre Order Only / SET Only  ? Polaroid Photocard is only included in 240EA first-press albums.', 234000, 'album-izone.jpg'),
(23, '1', 1, 'NCT 2020 -  RESONANCE PT.2', 'NCT 2020 - THE 2ND ALBUM RESONANCE PT.2', 456000, 'album-nct2.jpg'),
(24, '1', 6, 'JENO PC', 'jeno pc', 200000, 'pc-jeno.jpg'),
(25, '1', 1, 'Fromis_9 - My Little Society', 'Fromis_9 Mini Album Vol. 3 - My Little Society * CD + Booklet (72 P) + Random Minicard + Random Photocard (2 P)  * Deco Sticker : First press only.  * Order now and get free poster.', 456000, 'album-fromis2.jpg'),
(26, '2', 8, 'Beyond Live NCT 127', '??? 127 ?????? ???? ???????? (?????? ??? ??????): - BROCHURE - PHOTOCARD', 560000, 'nct27.jpg'),
(27, '2', 8, 'Beyond LIVE NCT DREAM', 'Beyond LIVE BROCHURE NCT DREAM [Beyond the Dream Show] Size : 225 * 297 (mm)  Material : Paper  -Brochure 1ea (72p)  -Photo Card 1ea (Random)', 675000, 'beyond-nct.jpg'),
(29, '2', 1, 'NCT 127', 'NCT 127 - NEO ONE', 234000, 'neozone.jpg'),
(30, '1', 1, 'SEVENTEEN 2nd Japan Single', 'LIMITED A VERSION (CD+random pc+36P pb)', 225000, 'AKR20200516029700005_01_i_P4_20200516121408584.jpg'),
(31, '1', 6, 'MINGYU PC', 'MINGYU PHOTOCARD', 345000, 'EcVCh8gXgAwftC1.jpg'),
(32, '2', 6, 'WONWOO PC', 'WONWOO PHOTOCARD', 487000, 'EfG5d3KUcAE1OlS.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor`
--

CREATE TABLE `tbl_vendor` (
  `id_vendor` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nama_store` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `norek` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vendor`
--

INSERT INTO `tbl_vendor` (`id_vendor`, `nama`, `nama_store`, `alamat`, `bank`, `nohp`, `norek`, `email`, `username`, `password`) VALUES
('1', 'karina', 'daehan minguk', 'Semarang', 'Mandiri', '08576543217', '', 'karina@gmail.com', 'karina', 'karina'),
('2', 'jeje', 'jee store', 'Jakarta', 'BRI', '085742876554', '', 'jee@gmail.com', 'jeje', 'jeje');

-- --------------------------------------------------------

--
-- Table structure for table `tb_review`
--

CREATE TABLE `tb_review` (
  `id_review` varchar(10) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `id_merek` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `review` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_review`
--

INSERT INTO `tb_review` (`id_review`, `id_kategori`, `id_merek`, `nama`, `username`, `review`) VALUES
('1', 2, 1, 'mark', 'markeu', 'product bagus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_biaya_kirim`
--
ALTER TABLE `tbl_biaya_kirim`
  ADD PRIMARY KEY (`id_biaya_kirim`);

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id_detail_order`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `tbl_kurir`
--
ALTER TABLE `tbl_kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- Indexes for table `tb_review`
--
ALTER TABLE `tb_review`
  ADD PRIMARY KEY (`id_review`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_biaya_kirim`
--
ALTER TABLE `tbl_biaya_kirim`
  MODIFY `id_biaya_kirim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id_detail_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  MODIFY `id_kota` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_kurir`
--
ALTER TABLE `tbl_kurir`
  MODIFY `id_kurir` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  MODIFY `id_order` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
