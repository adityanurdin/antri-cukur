-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 06:56 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `antricukur`
--
CREATE DATABASE IF NOT EXISTS `antricukur` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `antricukur`;

-- --------------------------------------------------------

--
-- Table structure for table `barbershop_list`
--

CREATE TABLE IF NOT EXISTS `barbershop_list` (
  `id_barbershop` int(11) NOT NULL AUTO_INCREMENT,
  `id_wilayah` int(11) NOT NULL,
  `nama_barbershop` varchar(25) NOT NULL,
  `alamat_barbershop` varchar(25) NOT NULL,
  `rate_barbershop` enum('1','2','3','4','5') NOT NULL,
  `detail_barbershop` varchar(25) NOT NULL,
  `status_barbershop` enum('buka','tutup') NOT NULL,
  `photo` int(11) NOT NULL,
  PRIMARY KEY (`id_barbershop`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `barbershop_list`
--

INSERT INTO `barbershop_list` (`id_barbershop`, `id_wilayah`, `nama_barbershop`, `alamat_barbershop`, `rate_barbershop`, `detail_barbershop`, `status_barbershop`, `photo`) VALUES
(1, 1, 'Jakarta Barbershop', 'jalan, jalan', '3', '', 'buka', 123);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `level` varchar(30) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(160) NOT NULL,
  `alamat` varchar(400) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` enum('on','off') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wilayah_barbershop`
--

CREATE TABLE IF NOT EXISTS `wilayah_barbershop` (
  `id_wilayah` int(11) NOT NULL AUTO_INCREMENT,
  `id_barbershop` int(11) NOT NULL,
  `nama_wilayah` varchar(25) NOT NULL,
  PRIMARY KEY (`id_wilayah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wilayah_barbershop`
--

INSERT INTO `wilayah_barbershop` (`id_wilayah`, `id_barbershop`, `nama_wilayah`) VALUES
(1, 1, 'JAKARTA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
