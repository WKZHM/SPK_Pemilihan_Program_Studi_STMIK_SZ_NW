-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2023 at 09:08 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspek`
--

CREATE TABLE `aspek` (
  `id_target` int(11) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `persentase` float NOT NULL,
  `cf` float NOT NULL,
  `sf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aspek`
--

INSERT INTO `aspek` (`id_target`, `prodi`, `persentase`, `cf`, `sf`) VALUES
(1, 'Teknik Informatika (TI)', 60, 60, 40),
(2, 'Sistem Informasi (SI)', 40, 60, 40);

-- --------------------------------------------------------

--
-- Table structure for table `bobot_gap`
--

CREATE TABLE `bobot_gap` (
  `selisih` int(11) NOT NULL,
  `bobot_gap` float NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_gap`
--

INSERT INTO `bobot_gap` (`selisih`, `bobot_gap`, `ket`) VALUES
(-5, 0, 'Kurang 5 Tingkat'),
(-4, 1, 'Kurang 4 tingkat'),
(-3, 2, 'Kurang 3 tingkat'),
(-2, 3, 'Kurang 2 tingkat'),
(-1, 4, 'Kurang 1 tingkat'),
(0, 5, 'Tidak ada selisih'),
(1, 4.5, 'Lebih 1 tingkat'),
(2, 3.5, 'Lebih 2 tingkat'),
(3, 2.5, 'Lebih 3 tingkat'),
(4, 1.5, 'Lebih 4 tingkat'),
(5, 0.5, 'Lebih 5 tingkat');

-- --------------------------------------------------------

--
-- Table structure for table `bobot_jurusan`
--

CREATE TABLE `bobot_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `bobot_j` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_jurusan`
--

INSERT INTO `bobot_jurusan` (`id_jurusan`, `jurusan`, `bobot_j`) VALUES
(1, 'IPA', 4),
(2, 'IPS', 3),
(3, 'Bahasa', 3),
(4, 'Teknik Komputer & Jaringan (TKJ)', 5),
(5, 'Otomotif', 4),
(6, 'Pembangunan', 3),
(7, 'Listrik ', 3),
(8, 'Mesin', 4),
(9, 'Administrasi Perkantoran', 3),
(10, 'Akuntansi', 3),
(11, 'Multimedia', 5),
(12, 'Agama', 2),
(13, 'Kuliner', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bobot_nilai`
--

CREATE TABLE `bobot_nilai` (
  `id_nu` int(11) NOT NULL,
  `nilai_ujian` varchar(30) NOT NULL,
  `bobot_nu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_nilai`
--

INSERT INTO `bobot_nilai` (`id_nu`, `nilai_ujian`, `bobot_nu`) VALUES
(1, '<60', 1),
(2, '61 - 70', 2),
(3, '71 - 80', 3),
(4, '81 - 90', 4),
(6, '91 - 100', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cmb`
--

CREATE TABLE `cmb` (
  `id_cmb` int(11) NOT NULL,
  `no_ujian` int(11) NOT NULL,
  `nama_cmb` varchar(50) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmb`
--

INSERT INTO `cmb` (`id_cmb`, `no_ujian`, `nama_cmb`, `tgl_lahir`, `jk`, `alamat`, `id_jurusan`) VALUES
(1, 202301, 'Ruswanti Mulyana', '09/14/2002', 'P', 'Sikur', 3),
(2, 202302, 'Wardatul Ummi', '11/11/2002', 'P', 'Sukamandi', 4),
(3, 202303, 'Zaenul Alqusairi', '06/20/2000', 'L', 'Sepit', 1),
(4, 202304, 'Novia Ardani', '11/12/2001', 'P', 'Jenggik', 10);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `id_target` int(11) NOT NULL,
  `kriteria` varchar(100) NOT NULL,
  `target` int(11) NOT NULL,
  `tipe` set('cf','sf') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `id_target`, `kriteria`, `target`, `tipe`) VALUES
(1, 1, '[C1] - TPA (Tes Potensial Akademik)', 4, 'cf'),
(2, 1, '[C2] - Bahasa Inggris', 3, 'sf'),
(3, 1, '[C3] - Hardware & Software ', 5, 'cf'),
(4, 1, '[C4] - Pemrograman Dasar', 4, 'cf'),
(5, 1, '[C5] - Jurusan Semasa SMA/SMK', 3, 'sf'),
(6, 2, '[C6] - TPA (Tes Potensial Akademik) ', 4, 'cf'),
(7, 2, '[C7] - Bahasa Inggris ', 4, 'sf'),
(8, 2, '[C8] - Hardware & Software ', 4, 'cf'),
(9, 2, '[C9] - Pemrograman Dasar ', 5, 'cf'),
(10, 2, '[C10] - Jurusan Semasa SMA/SMK ', 3, 'sf');

-- --------------------------------------------------------

--
-- Table structure for table `sempel`
--

CREATE TABLE `sempel` (
  `id_sampel` int(11) NOT NULL,
  `id_cmb` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sempel`
--

INSERT INTO `sempel` (`id_sampel`, `id_cmb`, `id_kriteria`, `value`) VALUES
(1, 1, 1, 4),
(2, 1, 2, 3),
(3, 1, 3, 4),
(4, 1, 4, 3),
(5, 1, 5, 3),
(6, 1, 6, 4),
(7, 1, 7, 3),
(8, 1, 8, 4),
(9, 1, 9, 3),
(10, 1, 10, 3),
(11, 2, 1, 3),
(12, 2, 2, 3),
(13, 2, 3, 5),
(14, 2, 4, 2),
(15, 2, 5, 5),
(16, 2, 6, 3),
(17, 2, 7, 3),
(18, 2, 8, 5),
(19, 2, 9, 2),
(20, 2, 10, 5),
(21, 3, 1, 3),
(22, 3, 2, 3),
(23, 3, 3, 4),
(24, 3, 4, 4),
(25, 3, 5, 4),
(26, 3, 6, 3),
(27, 3, 7, 3),
(28, 3, 8, 4),
(29, 3, 9, 4),
(30, 3, 10, 4),
(31, 4, 1, 4),
(32, 4, 2, 4),
(33, 4, 3, 3),
(34, 4, 4, 3),
(35, 4, 5, 3),
(36, 4, 6, 4),
(37, 4, 7, 4),
(38, 4, 8, 3),
(39, 4, 9, 3),
(40, 4, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aspek`
--
ALTER TABLE `aspek`
  ADD PRIMARY KEY (`id_target`);

--
-- Indexes for table `bobot_gap`
--
ALTER TABLE `bobot_gap`
  ADD PRIMARY KEY (`selisih`);

--
-- Indexes for table `bobot_jurusan`
--
ALTER TABLE `bobot_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `bobot_nilai`
--
ALTER TABLE `bobot_nilai`
  ADD PRIMARY KEY (`id_nu`);

--
-- Indexes for table `cmb`
--
ALTER TABLE `cmb`
  ADD PRIMARY KEY (`id_cmb`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `id_target` (`id_target`);

--
-- Indexes for table `sempel`
--
ALTER TABLE `sempel`
  ADD PRIMARY KEY (`id_sampel`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aspek`
--
ALTER TABLE `aspek`
  MODIFY `id_target` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bobot_jurusan`
--
ALTER TABLE `bobot_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bobot_nilai`
--
ALTER TABLE `bobot_nilai`
  MODIFY `id_nu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cmb`
--
ALTER TABLE `cmb`
  MODIFY `id_cmb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sempel`
--
ALTER TABLE `sempel`
  MODIFY `id_sampel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cmb`
--
ALTER TABLE `cmb`
  ADD CONSTRAINT `cmb_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `bobot_jurusan` (`id_jurusan`);

--
-- Constraints for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD CONSTRAINT `kriteria_ibfk_1` FOREIGN KEY (`id_target`) REFERENCES `aspek` (`id_target`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
