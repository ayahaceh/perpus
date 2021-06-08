-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 12:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biaya_denda`
--

CREATE TABLE `tbl_biaya_denda` (
  `id_biaya_denda` int(11) NOT NULL,
  `harga_denda` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL,
  `tgl_tetap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_biaya_denda`
--

INSERT INTO `tbl_biaya_denda` (`id_biaya_denda`, `harga_denda`, `stat`, `tgl_tetap`) VALUES
(1, '4000', 'Aktif', '2019-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `buku_id` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_rak` int(11) NOT NULL,
  `sampul` varchar(255) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `pengarang` varchar(255) DEFAULT NULL,
  `thn_buku` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `jml` int(11) DEFAULT NULL,
  `tgl_masuk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `buku_id`, `id_kategori`, `id_rak`, `sampul`, `isbn`, `lampiran`, `title`, `penerbit`, `pengarang`, `thn_buku`, `isi`, `jml`, `tgl_masuk`) VALUES
(1, 'BK001', 1, 1, 'buku_default.jpg', '2142352 235215413', 'default.pdf', 'Meneropong Gunung', 'Gunung Galunggung', 'Doni Marsela', '2020', 'Isi Buku', 10, '2020-12-12'),
(2, 'BK002', 2, 2, 'buku_default.jpg', '223521 4353451', 'default.pdf', 'Membuka Jendela', 'Gorong - gorong', 'Bodiandul', '2019', 'Isi bukunya indah sekali', 21, '2020-11-12'),
(3, 'BK003', 3, 3, 'buku_default.jpg', '2142352 235215413', 'default.pdf', 'Merpati Putih', 'Gunung Galunggung', 'Doni Marsela', '2020', 'Isi Buku', 10, '2020-12-12'),
(4, 'BK004', 4, 4, 'buku_default.jpg', '223521 4353451', 'default.pdf', 'Mengapa Bertanya', 'Gorong - gorong', 'Bodiandul', '2019', 'Isi bukunya indah sekali', 21, '2020-11-12'),
(5, 'BK005', 5, 5, 'buku_default.jpg', '2142352 235215413', 'default.pdf', 'Merpati Merah', 'Gunung Galunggung', 'Doni Marsela', '2020', 'Isi Buku', 10, '2020-12-12'),
(6, 'BK006', 6, 6, 'buku_default.jpg', '223521 4353451', 'default.pdf', 'Mencari Jejak', 'Gorong - gorong', 'Bodiandul', '2019', 'Isi bukunya indah sekali', 21, '2020-11-12'),
(7, 'BK007', 5, 2, 'buku_default.jpg', '2142352 235215413', 'default.pdf', 'Merak Jingga', 'Gunung Galunggung', 'Doni Marsela', '2020', 'Isi Buku', 10, '2020-12-12'),
(8, 'BK008', 2, 1, 'buku_default.jpg', '132-123-234-231', '0', 'CARA MUDAH BELAJAR PEMROGRAMAN C++', 'INFORMATIKA BANDUNG', 'BUDI RAHARJO ', '2012', '<table class=\"table table-bordered\" style=\"background-color: rgb(255, 255, 255); width: 653px; color: rgb(51, 51, 51);\"><tbody><tr><td style=\"padding: 8px; line-height: 1.42857; border-color: rgb(244, 244, 244);\">Tipe Buku</td><td style=\"padding: 8px; line-height: 1.42857; border-color: rgb(244, 244, 244);\">Kertas</td></tr><tr><td style=\"padding: 8px; line-height: 1.42857; border-color: rgb(244, 244, 244);\">Bahasa</td><td style=\"padding: 8px; line-height: 1.42857; border-color: rgb(244, 244, 244);\">Indonesia</td></tr></tbody></table>', 23, '2019-11-23 11:49:57'),
(9, 'BK009', 9, 6, 'buku_default.jpg', '9464 5623', '0', 'Filsawat Iwan', 'Hokkaydo', 'Domino', '2020', '<p>Lainnyaaaaaa</p>', 12, '2021-06-08 13:06:01'),
(10, 'BK010', 2, 3, 'buku_default.jpg', '223521 4353451', 'default.pdf', 'Menelusiri Gang Sempit', 'Gorong - gorong', 'Bodiandul', '2019', 'Isi bukunya indah sekali', 21, '2020-11-12'),
(11, 'BK011', 3, 5, 'buku_default.jpg', '2142352 235215413', 'default.pdf', 'Pembaca Budiman', 'Gunung Galunggung', 'Doni Marsela', '2020', 'Isi Buku', 10, '2020-12-12'),
(12, 'BK012', 3, 1, 'buku_default.jpg', '223521 4353451', 'default.pdf', 'Penulis Bingung', 'Gorong - gorong', 'Bodiandul', '2019', 'Isi bukunya indah sekali', 21, '2020-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_denda`
--

CREATE TABLE `tbl_denda` (
  `id_denda` int(11) NOT NULL,
  `pinjam_id` varchar(255) NOT NULL,
  `denda` varchar(255) NOT NULL,
  `lama_waktu` int(11) NOT NULL,
  `tgl_denda` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_denda`
--

INSERT INTO `tbl_denda` (`id_denda`, `pinjam_id`, `denda`, `lama_waktu`, `tgl_denda`) VALUES
(3, 'PJ001', '0', 0, '2020-05-20'),
(5, 'PJ009', '0', 0, '2020-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Pemrograman'),
(3, 'Kamus Bahasa Asing'),
(4, 'Agama'),
(7, 'Sejarah'),
(8, 'Sains Populer'),
(9, 'Filsafat'),
(10, 'Ensiklopedia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` int(11) NOT NULL,
  `anggota_id` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `jenkel` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_bergabung` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `anggota_id`, `user`, `pass`, `level`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenkel`, `alamat`, `telepon`, `email`, `tgl_bergabung`, `foto`) VALUES
(1, 'AG001', 'saadah', '123', 'Petugas', 'saadah', 'Cirebon', '1998-05-10', 'Perempuan', 'Jakarta', '083824569425', 'saadahbundel1100598@gmail.com', '2021-06-01', 'default.jpg'),
(2, 'AG002', 'adah', '123', 'Anggota', 'adah', 'Purwkarta', '1999-03-13', 'Perempuan', 'Bekasi', '089519150725', 'saadah1325@gmail.com', '2021-06-02', 'default.jpg'),
(4, 'AG003', 'abdullah', 'd93ec75bca4b7ef88df5a6c591654422', 'Anggota', 'abdullah', 'Cirebon', '2021-06-08', 'Laki-Laki', 'Jl. Singkil-Rimo Kampong Selok Aceh\r\nKecamatan Singkil', '08', 'razali.adam@gmail.com', '2021-06-08', 'default.jpg'),
(5, 'AG005', 'abubakar', 'ac43724f16e9241d990427ab7c8f4228', 'Anggota', 'Abu Bakar', 'Jakarta', '1998-05-10', 'Laki-Laki', 'Jl. Pedagangan 175', '0854', 'abdullah@ab.com', '2020-05-10', 'default.jpg'),
(6, 'AG006', 'usman', 'ac43724f16e9241d990427ab7c8f4228', 'Anggota', 'Usman', 'Jakarta', '1999-05-10', 'Laki-Laki', 'Jl. Pedagangan 175', '0854', 'abdullah@ab.com', '2020-05-10', 'default.jpg'),
(7, 'AG007', 'umar', 'ac43724f16e9241d990427ab7c8f4228', 'Anggota', 'Umar', 'Jakarta', '1999-05-10', 'Laki-Laki', 'Jl. Pedagangan 175', '0854', 'abdulladdh@ab.com', '2020-05-10', 'default.jpg'),
(8, 'AG007', 'fatimah', 'ac43724f16e9241d990427ab7c8f4228', 'Anggota', 'Fatimah', 'Jakarta', '1999-05-10', 'Perempuan', 'Jl. Pedagangan 175', '0854', 'abdullah@ab.com', '2020-05-10', 'default.jpg'),
(9, 'AG008', 'ummi', 'ac43724f16e9241d990427ab7c8f4228', 'Anggota', 'Ummi', 'Jakarta', '1999-05-10', 'Perempuan', 'Jl. Pedagangan 175', '0854', 'abdullah@ab.com', '2020-05-10', 'default.jpg'),
(10, 'AG009', 'wati', 'ac43724f16e9241d990427ab7c8f4228', 'Anggota', 'Wati', 'Jakarta', '1999-05-10', 'Perempuan', 'Jl. Pedagangan 175', '0854', 'abdullah@ab.com', '2020-05-10', 'default.jpg'),
(11, 'AG010', 'rukayyah', 'ac43724f16e9241d990427ab7c8f4228', 'Anggota', 'rukayyah', 'Jakarta', '1999-05-10', 'Perempuan', 'Jl. Pedagangan 175', '0854', 'abdullah@ab.com', '2020-05-10', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `pinjam_id` varchar(255) NOT NULL,
  `anggota_id` varchar(255) NOT NULL,
  `buku_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tgl_pinjam` varchar(255) NOT NULL,
  `lama_pinjam` int(11) NOT NULL,
  `tgl_balik` varchar(255) NOT NULL,
  `tgl_kembali` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pinjam`
--

INSERT INTO `tbl_pinjam` (`id_pinjam`, `pinjam_id`, `anggota_id`, `buku_id`, `status`, `tgl_pinjam`, `lama_pinjam`, `tgl_balik`, `tgl_kembali`) VALUES
(8, 'PJ001', 'AG002', 'BK008', 'Di Kembalikan', '2020-05-19', 1, '2020-05-20', '2020-05-20'),
(10, 'PJ009', 'AG002', 'BK008', 'Di Kembalikan', '2020-05-20', 1, '2020-05-21', '2020-05-20'),
(11, 'PJ0011', 'AG001', 'BK008', 'Dipinjam', '2021-01-01', 6, '2021-01-07', '0'),
(12, 'PJ0012', 'AG003', 'BK004', 'Dipinjam', '2021-02-01', 13, '2021-02-14', '0'),
(13, 'PJ0013', 'AG002', 'BK003', 'Dipinjam', '2021-06-08', 54, '2021-08-01', '0'),
(14, 'PJ0014', 'AG005', 'BK005', 'Dipinjam', '2021-06-08', 34, '2021-07-12', '0'),
(15, 'PJ0015', 'AG006', 'BK006', 'Dipinjam', '2021-03-09', 6, '2021-03-15', '0'),
(16, 'PJ0017', 'AG008', 'BK011', 'Dipinjam', '2020-03-19', 6, '2020-03-24', '0'),
(17, 'PJ0018', 'AG006', 'BK011', 'Dipinjam', '2020-04-11', 5, '2020-04-16', '0'),
(18, 'PJ0019', 'AG005', 'BK012', 'Dipinjam', '2020-03-19', 6, '2020-03-24', '0'),
(19, 'PJ0020', 'AG008', 'BK009', 'Dipinjam', '2020-04-11', 5, '2020-04-16', '0'),
(20, 'PJ0022', 'AG009', 'BK012', 'Dipinjam', '2020-03-19', 6, '2020-03-24', '0'),
(21, 'PJ0021', 'AG008', 'BK009', 'Dipinjam', '2020-04-11', 5, '2020-04-16', '0'),
(22, 'PJ0023', 'AG006', 'BK012', 'Dipinjam', '2020-03-19', 6, '2020-03-24', '0'),
(23, 'PJ0023', 'AG006', 'BK009', 'Dipinjam', '2020-04-11', 5, '2020-04-16', '0'),
(24, 'PJ0019', 'AG007', 'BK007', 'Dipinjam', '2020-06-19', 6, '2020-06-24', '0'),
(25, 'PJ0020', 'AG007', 'BK010', 'Dipinjam', '2020-05-11', 5, '2020-05-16', '0'),
(26, 'PJ0021', 'AG006', 'BK012', 'Dipinjam', '2020-03-19', 6, '2020-03-24', '0'),
(27, 'PJ0022', 'AG005', 'BK009', 'Dipinjam', '2020-04-11', 5, '2020-04-16', '0'),
(28, 'PJ0023', 'AG009', 'BK006', 'Dipinjam', '2020-06-19', 6, '2020-06-24', '0'),
(29, 'PJ0024', 'AG002', 'BK004', 'Dipinjam', '2020-066-11', 5, '2020-06-16', '0'),
(30, 'PJ0025', 'AG003', 'BK011', 'Dipinjam', '2020-03-19', 6, '2020-03-24', '0'),
(31, 'PJ0026', 'AG008', 'BK002', 'Dipinjam', '2020-04-11', 5, '2020-04-16', '0'),
(32, 'PJ0027', 'AG005', 'BK006', 'Dipinjam', '2020-06-19', 6, '2020-06-24', '0'),
(33, 'PJ0028', 'AG003', 'BK004', 'Dipinjam', '2020-066-11', 5, '2020-06-16', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rak`
--

CREATE TABLE `tbl_rak` (
  `id_rak` int(11) NOT NULL,
  `nama_rak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rak`
--

INSERT INTO `tbl_rak` (`id_rak`, `nama_rak`) VALUES
(1, 'Rak Buku 1'),
(2, 'Rak 002'),
(3, 'Rak 003'),
(4, 'Rak 004'),
(5, 'Rak 005'),
(6, 'Rak 006'),
(7, 'Rak 007');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ref_bulan`
--

CREATE TABLE `tbl_ref_bulan` (
  `nomor_bulan` varchar(2) NOT NULL,
  `nama_bulan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ref_bulan`
--

INSERT INTO `tbl_ref_bulan` (`nomor_bulan`, `nama_bulan`) VALUES
('01', 'Januari'),
('02', 'Februari'),
('03', 'Maret'),
('04', 'April'),
('05', 'Mei'),
('06', 'Juni'),
('07', 'Juli'),
('08', 'Agustus'),
('09', 'September'),
('10', 'Oktober'),
('11', 'November'),
('12', 'Desember');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_bulan`
-- (See below for the actual view)
--
CREATE TABLE `v_bulan` (
`bulan` varchar(2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_statistik_anggota`
-- (See below for the actual view)
--
CREATE TABLE `v_statistik_anggota` (
`anggota_id` varchar(255)
,`jumlah_meminjam` bigint(21)
,`nama` varchar(255)
,`tgl_bergabung` varchar(255)
,`email` varchar(255)
,`jenkel` varchar(255)
,`alamat` text
,`telepon` varchar(25)
,`foto` varchar(255)
,`user` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_statistik_buku`
-- (See below for the actual view)
--
CREATE TABLE `v_statistik_buku` (
`buku_id` varchar(255)
,`jumlah_dipinjam` bigint(21)
,`id_kategori` int(11)
,`title` varchar(255)
,`sampul` varchar(255)
,`penerbit` varchar(255)
,`pengarang` varchar(255)
,`thn_buku` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_statistik_bulan`
-- (See below for the actual view)
--
CREATE TABLE `v_statistik_bulan` (
`bulan` varchar(2)
,`jumlah_bulanan` bigint(21)
,`nama_bulan` varchar(15)
);

-- --------------------------------------------------------

--
-- Structure for view `v_bulan`
--
DROP TABLE IF EXISTS `v_bulan`;

CREATE VIEW `v_bulan`  AS SELECT substr(`tbl_pinjam`.`tgl_pinjam`,6,2) AS `bulan` FROM `tbl_pinjam` ;

-- --------------------------------------------------------

--
-- Structure for view `v_statistik_anggota`
--
DROP TABLE IF EXISTS `v_statistik_anggota`;

CREATE VIEW `v_statistik_anggota`  AS SELECT `tbl_pinjam`.`anggota_id` AS `anggota_id`, count(`tbl_pinjam`.`anggota_id`) AS `jumlah_meminjam`, `tbl_login`.`nama` AS `nama`, `tbl_login`.`tgl_bergabung` AS `tgl_bergabung`, `tbl_login`.`email` AS `email`, `tbl_login`.`jenkel` AS `jenkel`, `tbl_login`.`alamat` AS `alamat`, `tbl_login`.`telepon` AS `telepon`, `tbl_login`.`foto` AS `foto`, `tbl_login`.`user` AS `user` FROM (`tbl_pinjam` join `tbl_login` on(`tbl_pinjam`.`anggota_id` = `tbl_login`.`anggota_id`)) GROUP BY `tbl_pinjam`.`anggota_id` ORDER BY count(`tbl_pinjam`.`anggota_id`) DESC ;

-- --------------------------------------------------------

--
-- Structure for view `v_statistik_buku`
--
DROP TABLE IF EXISTS `v_statistik_buku`;

CREATE VIEW `v_statistik_buku`  AS SELECT `tbl_pinjam`.`buku_id` AS `buku_id`, count(`tbl_pinjam`.`buku_id`) AS `jumlah_dipinjam`, `tbl_buku`.`id_kategori` AS `id_kategori`, `tbl_buku`.`title` AS `title`, `tbl_buku`.`sampul` AS `sampul`, `tbl_buku`.`penerbit` AS `penerbit`, `tbl_buku`.`pengarang` AS `pengarang`, `tbl_buku`.`thn_buku` AS `thn_buku` FROM (`tbl_pinjam` join `tbl_buku` on(`tbl_pinjam`.`buku_id` = `tbl_buku`.`buku_id`)) GROUP BY `tbl_pinjam`.`buku_id` ORDER BY count(`tbl_pinjam`.`buku_id`) DESC ;

-- --------------------------------------------------------

--
-- Structure for view `v_statistik_bulan`
--
DROP TABLE IF EXISTS `v_statistik_bulan`;

CREATE VIEW `v_statistik_bulan`  AS SELECT `v_bulan`.`bulan` AS `bulan`, count(`v_bulan`.`bulan`) AS `jumlah_bulanan`, `tbl_ref_bulan`.`nama_bulan` AS `nama_bulan` FROM (`v_bulan` join `tbl_ref_bulan` on(`v_bulan`.`bulan` = `tbl_ref_bulan`.`nomor_bulan`)) GROUP BY `v_bulan`.`bulan` ORDER BY `v_bulan`.`bulan` ASC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_biaya_denda`
--
ALTER TABLE `tbl_biaya_denda`
  ADD PRIMARY KEY (`id_biaya_denda`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbl_denda`
--
ALTER TABLE `tbl_denda`
  ADD PRIMARY KEY (`id_denda`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `tbl_rak`
--
ALTER TABLE `tbl_rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indexes for table `tbl_ref_bulan`
--
ALTER TABLE `tbl_ref_bulan`
  ADD PRIMARY KEY (`nomor_bulan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_biaya_denda`
--
ALTER TABLE `tbl_biaya_denda`
  MODIFY `id_biaya_denda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_denda`
--
ALTER TABLE `tbl_denda`
  MODIFY `id_denda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_rak`
--
ALTER TABLE `tbl_rak`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
