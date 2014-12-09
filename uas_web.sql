-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2014 at 03:46 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uas_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `password`) VALUES
(1, 'daniel', '$2y$10$HaloHaloHaloHaloHalo2uti3G/pVdZlandAkrsdyxFJnWLI54Yua');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `bahasa` varchar(50) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `stok` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `bahasa`, `tahun`, `stok`, `status`) VALUES
(1, '12menit', 'Oka Aurora', 'Indonesia', '2013', 5, 1),
(2, 'Doraemon Petualangan', 'Fujiko', 'Indonesia', '2002', 5, 2),
(3, 'Fireflies', 'Aletheia Agatha', 'Indonesia', '2013', 5, 1),
(4, 'Inazuma Eleven', 'Yabuno Tenya', 'Jepang', '2012', 5, 2),
(5, 'Dawn Aria', 'Akaishi Michiyo', 'Inggris', '2012', 5, 2),
(6, 'Jasmine (Cinta yang Menyembuhkan)', 'Riawani Elyta', 'Indonesia', '2013', 5, 1),
(7, 'Kuroko''s Basketball', 'Fujimaki Tadatoshi', 'Indonesia', '2014', 5, 2),
(8, 'Snow In The Heart', 'Veronica Faradilla', 'Indonesia', '2013', 5, 1),
(9, 'Detective Conan', 'Elex', 'Indonesia', '2001', 5, 2),
(10, 'Basara', 'Tamura Yumi', 'Indonesia', '2012', 5, 2),
(11, 'Notasi', 'Morra Q', 'Indonesia', '2013', 5, 1),
(13, 'Amore Cinta yang tak Terlupakan', 'Rini Zabirudin', 'Indonesia', '2013', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `konten` varchar(50) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `konten`) VALUES
(1, 'daniel'),
(2, 'fedrico');

-- --------------------------------------------------------

--
-- Table structure for table `tr_pinjam_dtl`
--

CREATE TABLE IF NOT EXISTS `tr_pinjam_dtl` (
  `id_dtl` int(11) NOT NULL AUTO_INCREMENT,
  `id_hdr` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  PRIMARY KEY (`id_dtl`),
  UNIQUE KEY `id_hdr` (`id_hdr`,`id_buku`),
  KEY `id_buku` (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tr_pinjam_hdr`
--

CREATE TABLE IF NOT EXISTS `tr_pinjam_hdr` (
  `id_hdr` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pinjam` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  PRIMARY KEY (`id_hdr`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tr_pinjam_hdr`
--

INSERT INTO `tr_pinjam_hdr` (`id_hdr`, `tgl_pinjam`, `id_user`, `tgl_kembali`) VALUES
(1, '2014-12-08', 24, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `password`, `tempat`, `tanggal`, `bulan`, `tahun`, `alamat`, `email`, `file`) VALUES
(24, 'fedrico', '$2y$10$HaloHaloHaloHaloHalo2uLkZPx67C1XXwJeQXkSDVgME.N8sXlOK', 'Jakarta', 22, 2, 1995, 'Tangerang', 'fedricoblaze@gmail.com', ''),
(38, 'test', '$2y$10$HaloHaloHaloHaloHalo2uGHoclvkg37P.xCOraVOU6ZHaW.s/e.i', 'test', 2, 2, 2001, 'test', 'test', 'foto/IMG_2021.JPG'),
(39, 'coba', '$2y$10$HaloHaloHaloHaloHalo2uhVloJoyml2UpgiE7j0oxOWJJE/Tk1di', 'ciba', 10, 10, 1950, 'cibu', 'cibi', 'foto/IMG_2084.JPG'),
(40, 'daniel', '$2y$10$HaloHaloHaloHaloHalo2u5IrIC.bDUA/87gPWtU8iOVG4kmDJ1iG', 'qwsqw', 1, 1, 1945, 'qwsqw', 'wqs', 'foto/IMG_2185.JPG');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tr_pinjam_dtl`
--
ALTER TABLE `tr_pinjam_dtl`
  ADD CONSTRAINT `tr_pinjam_dtl_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `tr_pinjam_dtl_ibfk_2` FOREIGN KEY (`id_hdr`) REFERENCES `tr_pinjam_hdr` (`id_hdr`);

--
-- Constraints for table `tr_pinjam_hdr`
--
ALTER TABLE `tr_pinjam_hdr`
  ADD CONSTRAINT `tr_pinjam_hdr_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
