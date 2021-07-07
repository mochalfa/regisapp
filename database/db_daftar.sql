-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2019 at 11:16 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_daftar`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
  `nisn` varchar(10) NOT NULL,
  `filefoto` varchar(100) NOT NULL,
  `namapeserta` varchar(30) NOT NULL,
  `jkel` varchar(15) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `asalsmp` varchar(30) NOT NULL,
  `namaayah` varchar(30) NOT NULL,
  `pekerjaanayah` varchar(30) NOT NULL,
  `namaibu` varchar(30) NOT NULL,
  `pekerjaanibu` varchar(30) NOT NULL,
  `namawali` varchar(30) NOT NULL,
  `pekerjaanwali` varchar(30) NOT NULL,
  `penghasilan` varchar(20) NOT NULL,
  `nilaiun` varchar(5) NOT NULL,
  PRIMARY KEY (`nisn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
