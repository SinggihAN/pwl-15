-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2014 at 02:04 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db-pwl-15`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailorder`
--

CREATE TABLE IF NOT EXISTS `detailorder` (
  `idProduk` char(5) NOT NULL,
  `idOrder` int(11) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProduk`,`idOrder`),
  KEY `fk_Produk_has_Order_Order1_idx` (`idOrder`),
  KEY `fk_Produk_has_Order_Produk1_idx` (`idProduk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detailorder`
--

INSERT INTO `detailorder` (`idProduk`, `idOrder`, `ukuran`, `jumlah`) VALUES
('DR001', 2, 'M', 1),
('DR001', 11, '', 1),
('DR002', 9, '', 2),
('PL001', 15, 'L', 2),
('PN001', 2, 'L', 1),
('PN001', 10, '', 2),
('PN001', 14, 'M', 2),
('SP001', 1, 'L', 1),
('SP001', 13, '', 1),
('SS001', 12, '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `jeniskelamin`
--

CREATE TABLE IF NOT EXISTS `jeniskelamin` (
  `idJenisKelamin` int(11) NOT NULL AUTO_INCREMENT,
  `jenisKelamin` varchar(15) NOT NULL,
  PRIMARY KEY (`idJenisKelamin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jeniskelamin`
--

INSERT INTO `jeniskelamin` (`idJenisKelamin`, `jenisKelamin`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idKategori` int(11) NOT NULL AUTO_INCREMENT,
  `idJenisKelamin` int(11) NOT NULL,
  `namaKategori` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idKategori`,`idJenisKelamin`),
  KEY `fk_kategori_jeniskelamin1_idx` (`idJenisKelamin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idKategori`, `idJenisKelamin`, `namaKategori`) VALUES
(1, 1, 'Baju Tanggung'),
(2, 1, 'Celana Pendek'),
(3, 2, 'Dress'),
(4, 2, 'Celana Pendek'),
(11, 1, 'Baju Lengan Panjang'),
(12, 1, 'Celana Panjang'),
(13, 1, 'Polo'),
(14, 1, 'Batik');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `idKonfirmasi` int(11) NOT NULL AUTO_INCREMENT,
  `idOrder` int(11) NOT NULL,
  `bank` varchar(45) DEFAULT NULL,
  `noRekening` varchar(45) DEFAULT NULL,
  `atasNama` varchar(75) DEFAULT NULL,
  `tglTransfer` datetime DEFAULT NULL,
  `jmlTransfer` int(11) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`idKonfirmasi`,`idOrder`),
  KEY `fk_Konfirmasi_Order1_idx` (`idOrder`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `idOrder` int(11) NOT NULL AUTO_INCREMENT,
  `idPelanggan` int(11) NOT NULL,
  `tglOrder` datetime DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `totalBarang` int(11) DEFAULT NULL,
  `totalHarga` int(11) DEFAULT NULL,
  PRIMARY KEY (`idOrder`,`idPelanggan`),
  KEY `fk_Order_Pelanggan1_idx` (`idPelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`idOrder`, `idPelanggan`, `tglOrder`, `status`, `totalBarang`, `totalHarga`) VALUES
(1, 1, '2014-12-14 11:42:16', 'Selesai', 2, 390000),
(2, 2, '2014-12-16 14:26:41', 'Dibatalkan', 2, 400000),
(9, 13, '2014-12-18 00:00:00', 'Sedang Diproses', 2, 300000),
(10, 14, '2014-12-18 00:00:00', 'Sedang Dikirim', 2, 400000),
(11, 15, '2014-12-18 06:15:27', 'Sedang Diproses', 1, 200000),
(12, 16, '2014-12-18 13:27:00', 'Sedang Dikirim', 3, 600000),
(13, 17, '2014-12-18 17:14:37', 'Sedang Dikirim', 1, 200000),
(14, 18, '2014-12-18 17:19:44', 'Dibatalkan', 2, 400000),
(15, 19, '2014-12-19 03:05:50', 'Selesai', 2, 400000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `idPelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `namaPelanggan` varchar(75) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kodePos` varchar(10) DEFAULT NULL,
  `telepon` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idPelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idPelanggan`, `namaPelanggan`, `alamat`, `kodePos`, `telepon`) VALUES
(1, 'Robert Baratheon', 'Jl. Kings Landing No 1 Seven Kingdom', '55555', '0846434535435'),
(2, 'Ceycilia Lannister ', 'Jl. Kings Landing No 2 Castle Rock', '66666', '08565465356'),
(8, 'John Doe', 'sdasdsd', '57361', '34657567568'),
(9, 'John Doe', '555dfgfdg', '57361', '34657567568'),
(11, 'ddd', 'ddd', '4444', '555'),
(12, 'ppp', 'ppp', '000', '000'),
(13, 'Arya', 'Winterfell', '56743', '08123456'),
(14, 'Annabelle', 'Jl Valar Morghulis', '55875', '0865534275'),
(15, 'Surti', 'Di hatimu', '56845', '08574454745'),
(16, 'Qwerty', 'asgfdghh', '545345346', '1232435'),
(17, 'John Champion', 'Jim Beglin', '576879', '086457434534'),
(18, 'Megan Fox', 'Jl. Hollywood No 123', '65743', '08111111'),
(19, 'Lorem Ipsum', 'Dolor', '', '12345612345');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE IF NOT EXISTS `perusahaan` (
  `idPerusahaan` int(11) NOT NULL AUTO_INCREMENT,
  `namaPerusahaan` varchar(255) NOT NULL,
  `alamatPerusahaan` varchar(255) NOT NULL,
  `telpPerusahaan` varchar(50) NOT NULL,
  `emailPerusahaan` varchar(75) NOT NULL,
  `namaBank` varchar(75) NOT NULL,
  `noRek` varchar(25) NOT NULL,
  `atasNama` varchar(75) NOT NULL,
  `tentang` text NOT NULL,
  PRIMARY KEY (`idPerusahaan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`idPerusahaan`, `namaPerusahaan`, `alamatPerusahaan`, `telpPerusahaan`, `emailPerusahaan`, `namaBank`, `noRek`, `atasNama`, `tentang`) VALUES
(1, 'Limabelas', 'Jl. Cendrawasih No 15 Yogyakarta', '0276 15151515', 'contact@limabelas.com', 'BCA', '1515151515151515', 'Administrator Limabelas', 'Limabelas merupakan sebuah perusahaan yang bergerak di bidang industri pakaian.');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `idProduk` char(5) NOT NULL,
  `idKategori` int(11) NOT NULL,
  `namaProduk` varchar(250) DEFAULT NULL,
  `ukuran` varchar(10) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  PRIMARY KEY (`idProduk`,`idKategori`),
  KEY `fk_produk_kategori1_idx` (`idKategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idProduk`, `idKategori`, `namaProduk`, `ukuran`, `harga`, `stok`, `gambar`, `deskripsi`) VALUES
('BT001', 14, 'Batik', 'S M L XL', 12345, 9, 'Durrima.jpg', 'Bahan Cotton. Warna Biru Dongker'),
('DR001', 3, 'VALLETA', 'S M L XL', 150000, 20, 'DR001.jpg', 'Bahan Cotton. Warna Rainbow'),
('DR002', 3, 'DRESS BLACK', 'S M L XL', 190000, 20, 'DR002.jpg', 'Bahan Cotton. Warna Hitam'),
('DR003', 3, 'Pink Wings', 'S M L XL', 150000, 20, 'pink wings.jpg', 'Bahan Cotton. Warna Merah Muda'),
('LP001', 12, 'VOLGA CREAM', 'S M L XL X', 270000, 15, 'Volga cream.jpg', 'Bahan Cotton. Warna Krem'),
('PL001', 1, 'Grillwich', 'S M L XL X', 150000, 9, 'Grillwich.jpg', 'Bahan Cotton. Warna Biru Dongker'),
('PN001', 4, 'BORNEST', 'S M L XL', 250000, 15, 'PN001.jpg', 'Bahan Cotton. Warna Biru Dongker'),
('SP001', 2, 'DHRONED', 'S M L XL X', 200000, 18, 'SP001.jpg', 'Bahan Cotton. Warna Cokelat Muda'),
('SS001', 1, 'VOLKS', 'S M L XL X', 190000, 13, 'ss001.jpg', 'Bahan Cotton. Warna Hijau Tua'),
('SS002', 1, 'Arakita', 'S M L XL X', 170000, 20, 'Arakita.jpg', 'Bahan Cotton. Warna Biru Kotak');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `idSlide` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`idSlide`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`idSlide`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'CREATE YOUR OWN SHIRT DESIGN', 'Create your own design here Create your own design here Create your own design here Create your own design here.\r\nCreate your own design here Create your own design here Create your own design here Create your own design here Create your own design here', 'pic1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `namaUser` varchar(75) DEFAULT NULL,
  `password` varchar(75) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `alamatUser` varchar(250) DEFAULT NULL,
  `telpUser` varchar(25) DEFAULT NULL,
  `lastlog` datetime DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `namaUser`, `password`, `email`, `alamatUser`, `telpUser`, `lastlog`) VALUES
(1, 'admin', 'Administrator', '21232f297a57a5a743894a0e4a801fc3', 'admin@limabelas.com', 'Jl. Cendrawasih No 15 Yogyakarta', '1515151515', '2014-12-18 18:24:14'),
(2, 'john_snow', 'John Snow', '21232f297a57a5a743894a0e4a801fc3', 'john_snow@limabelas.com', 'Jl. Stark No 78 Winterfell', '08573423543', '2014-12-19 11:27:16');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailorder`
--
ALTER TABLE `detailorder`
  ADD CONSTRAINT `detailorder_ibfk_1` FOREIGN KEY (`idProduk`) REFERENCES `produk` (`idProduk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailorder_ibfk_2` FOREIGN KEY (`idOrder`) REFERENCES `order` (`idOrder`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `fk_kategori_jeniskelamin1` FOREIGN KEY (`idJenisKelamin`) REFERENCES `jeniskelamin` (`idJenisKelamin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `konfirmasi_ibfk_1` FOREIGN KEY (`idOrder`) REFERENCES `order` (`idOrder`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_kategori1` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`idKategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
