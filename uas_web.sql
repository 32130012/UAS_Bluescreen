-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2014 at 02:15 AM
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
  `sinopsis` varchar(1000) NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `bahasa`, `tahun`, `stok`, `status`, `sinopsis`, `gambar`) VALUES
(1, '12menit', 'Oka Aurora', 'Indonesia', '2013', 5, 1, 'Elaine, sang pemain biola, yakin bahwa musik adalah segala-galanya. Namun, ayahnya menentang, menganggapnya sia-sia. \r\n\r\nTara, berusaha menguasai nada-nada snare drum meski memiliki keterbatasan pendengaran. Tetapi, luka masa lalunya terus menghantui.Lahang, di tengah deritanya, berusaha memenuhi janji pada sang ayah. Namun, dilema membuatnya ragu melangkah. \r\n\r\nRene bermimpi membawa mereka, tim marching band yang dilatihnya, menjadi juara.  Meskipun mereka hanya datang dari sebuah kota di pelos', 'gambar/buku/12menit.PNG'),
(2, 'Doraemon Petualangan', 'Fujiko', 'Indonesia', '2002', 5, 2, 'nobita kembali menginginkan sesuatu yang aneh. namun, kali ini dia menginginkan untuk berkeliling dunia dengan sizuka. didorong dengan paksaan yang kuat akhirnya pun doraemon memenuhi keinginann nobita. akhirnya, mereka pun berpetualang dengan kereta api ekspress milik doraemon.', 'gambar/buku/doraemon.PNG'),
(3, 'Fireflies', 'Aletheia Agatha', 'Indonesia', '2013', 5, 1, '"Aku ingin minta maaf.\r\nkarena telah membuatmu khawakir. \r\nKamu harus percaya kalau aku telah berusaha \r\nmelakukan apa pun untuk bersamamu, \r\ntapi aku tidak bisa.\r\nKarena itu berjanjilah, kamu tetap akan menjadi\r\nseperti yang dulu aku kenal.\r\n\r\nTersenyum dan tertawa senantiasa..,\r\nsebab aku tidak pernah meninggalkanmu.\r\nDulu, sekarang, dan kapan pun juga,\r\nkuminka kamu tidak menyesali\r\nhari-hari yang kita lewati bersama.\r\nDan inilah gang terakhir kalinya kuucapkan padamu..\r\nAku mencintaimu dengan sepenuh hati."', 'gambar/buku/fireflies.PNG'),
(4, 'Inazuma Eleven', 'Yabuno Tenya', 'Jepang', '2012', 5, 2, 'Ini merupakan sejumput situasi putus asa Jepang karena permainan FFI (Football Frontier International) VS Qatar.\r\n	Dan Korea yang berkemampuan No.1 sudah menunggu di final... Apakah ini klimaks kualifikasi Asia.', 'gambar/buku/inazuma.PNG'),
(5, 'Dawn Aria', 'Akaishi Michiyo', 'Inggris', '2012', 5, 2, 'Akibat bencana gempa dahsyat yang melanda wilayah Tokyo, Aria yang tak punya rumah lagi akhirnya tinggal di rumah keluarga Nishimikado. Sementara itu, Natsuo makin diombang-ambingkan oleh perasaan sayangnya pada Aria.', 'gambar/buku/dawn_aria.PNG'),
(6, 'Jasmine (Cinta yang Menyembuhkan)', 'Riawani Elyta', 'Indonesia', '2013', 5, 1, '"Kisah yang fantastis, mempercepat laju adrenalin! Diksi cintanya terasa segar, kisah para hacker Dean dan Ioran disajikan penuh petualangan. Tidak akan bosan dan kecewa membacanya.” \r\n\r\n	Tidak mudah menggabungkan tema yang cukup rumit dengan romansa. Tetapi Lyta dengan kecermatan dan ketekunannya telah  berhasil melewatinya.', 'gambar/buku/jasmine.PNG'),
(7, 'Kuroko''s Basketball', 'Fujimaki Tadatoshi', 'Indonesia', '2014', 5, 2, 'Kekalahan telak melawan Touou menyisihkan Seirin dari ajang I.H. Tapi mereka tak patah semangat untuk mengejar target selanjutnya: Winter Cup!', 'gambar/buku/kuroko.PNG'),
(8, 'Snow In The Heart', 'Veronica Faradilla', 'Indonesia', '2013', 5, 1, 'Aku tidak banyak berbicang dengan teman-teman sekelas, meskipun kemungkinan aku tidak akan bertemu mereka lagi. Termasuk kamu, Kaori ya, ini hari perpisahan kelas kita Kulihat kamu sibuk berpelukan dengan Nao, Manoko, dan reiko. Kita semua memang harus berpisah, bukan?\r\n\r\nSebenarnya, Kaori, ada satu keinginanku yang tidak mungkin terpenuhi, yakni memberikan kancing kedua seragamku padamu. Aku iri melihat siswa-siswa yang lain memberikan kancing milik mereka kepada gadis yang disukai. Tapi aku tak bisa. Aku takut kamu tolak, Kaori. Aku hanya mencoba menegakkan tubuhku. Meski aku tahu cintaku bertepuk sebelah tangan, tetapi masa depanku masih panjang. Aku harus belajar mati-matian untuk masuk Todai. Ujian masuk Todai tentunya sangat berat.\r\n\r\n"Sayonara, Kaori, Daisuki da!" ujarku. Semoga angin yang berembus sudi menyampaikan pesan ini kepadamu. Semoga kamu tidak membenciku.', 'gambar/buku/snow.PNG'),
(9, 'Detective Conan', 'Elex', 'Indonesia', '2001', 5, 2, 'Siapa tak kenal conan? Detektif cilik jelmaan shinici kudo yang tubuhnya menciut karena racun dari kawanan berjubah hitam. \r\n	Kali ini, dalam penyamarannya sebagai anak sd , dia masih bisaa membagi waktu antara memecahkan kasus dan bermain dengan kelompok detektif ciliknya. Kali ini conan beraksi dalam kasus pendek yang cukup menegangkan.', 'gambar/buku/conan.PNG'),
(10, 'Basara', 'Tamura Yumi', 'Indonesia', '2012', 5, 2, 'Sarasa akhirnya mengejar Asagi yang dipanggil ke istana sebagai Raja Biru. Gadis itu berniat memastikan keinginan hati Asagi. \r\nShuri yang menyadarinya mengejar Sarasa ke istana! Namun, yang dilihat sesampainya di istana adalah Asagi dan Sarasa saling menghunus pedang!?\r\n', 'gambar/buku/basara.PNG'),
(11, 'Notasi', 'Morra Q', 'Indonesia', '2013', 5, 1, 'Rasanya, sudah lama sekali sejak aku dan dia melihat pelangi dilangit utara Pogung. \r\n	Namun, kembali ke kota ini, seperti menyeruakkan semua ingatan tentangnya; tentang janji yang terucap seiring jemari kami bertautan. \r\n\r\n	Segera setelah semuanya berakhir, aku pasti akan menghubungimu lagi.\r\n\r\nItulah yang dikataknnya sebelum dia pergi. Dan aku mendekap erat-erat kata-kata itu, menanti dalam harap. Namunm, yang datang padaku hanyalah surat-surat tanpa alamat darinya. \r\nKini, ditempat yang sama, aku mengurai kembali kenangan-kenangan itu..', 'gambar/buku/notasi.PNG'),
(13, 'Amore Cinta yang tak Terlupakan', 'Rini Zabirudin', 'Indonesia', '2013', 5, 1, 'Cinta pertama tidak pernah mati. Mungkin itulah kalimat yang cocok untuk melukiskan keadaan Mel saat ini. Meskipun telah ada seorang pria dengan predikat nyaris sempurna di sisinya, jauh di dalam hatinya nama Elang tetap terukir.\r\n\r\nSetelah bertahun-tahun hidup selibat, Elang tidak berharap lagi untuk bisa menemukan sebentuk cinta. Dia bahkan sudah berhenti mencarinya! Elang sadar sepenuhnya bahwa hidup yang dia jalani sekarang bukanlah jenis hidup yang bisa melibatkan cinta.\r\n\r\nKetika takdir mempertemukan mereka, mampukah Mel dan Elang mengumpulkan kembali serpihan-serpihan hati yang dulu pernah mereka patahkan? Ataukah mereka harus menyerah saat nyawa menjadi taruhan masa depan mereka?', 'gambar/buku/amore.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `konten` varchar(50) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `konten`) VALUES
(1, 'Home'),
(2, 'Profile'),
(3, 'Books'),
(4, 'Gallery'),
(5, 'Services'),
(6, 'About Us');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `password`, `tempat`, `tanggal`, `bulan`, `tahun`, `alamat`, `email`, `file`) VALUES
(24, 'fedrico', '$2y$10$HaloHaloHaloHaloHalo2uLkZPx67C1XXwJeQXkSDVgME.N8sXlOK', 'Jakarta', 22, 2, 1995, 'Tangerang', 'fedricoblaze@gmail.com', ''),
(38, 'test', '$2y$10$HaloHaloHaloHaloHalo2uGHoclvkg37P.xCOraVOU6ZHaW.s/e.i', 'test', 2, 2, 2001, 'test', 'test', 'foto/IMG_2021.JPG'),
(39, 'coba', 'dasd', 'asdasd', 1, 1, 1945, 'asdasd', 'asdasd', 'foto/IMG_1910.JPG');

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
