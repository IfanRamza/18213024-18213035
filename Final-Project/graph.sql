-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2015 at 02:10 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `graph`
--

-- --------------------------------------------------------

--
-- Table structure for table `ipk`
--

CREATE TABLE IF NOT EXISTS `ipk` (
  `No` int(3) NOT NULL DEFAULT '0',
  `Nama` varchar(100) DEFAULT NULL,
  `NIM` int(8) DEFAULT NULL,
  `Fakultas` varchar(8) DEFAULT NULL,
  `Jurusan` varchar(50) DEFAULT NULL,
  `IPK` float DEFAULT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipk`
--

INSERT INTO `ipk` (`No`, `Nama`, `NIM`, `Fakultas`, `Jurusan`, `IPK`) VALUES
(0, 'Hulali', 18818818, 'SBM', 'Kewirausahaan', 3.6),
(1, 'Ifan Ramadhan Zaki', 18213035, 'STEI', 'STI', 3),
(2, 'Mario Yudhiprawira', 18213024, 'STEI', 'STI', 3),
(3, 'Yusuf Luthfi', 18213031, 'STEI', 'STI', 4),
(4, 'Angga Fauzan', 10101010, 'FSRD', 'DKV', 3),
(5, 'Tora', 10010007, 'FTI', 'Teknik Kimia', 3.33),
(6, 'Jaka', 10010010, 'SAPPK', 'Planologi', 2.49),
(7, 'Babu', 11111111, 'FTTM', 'Tambang', 2.22),
(8, 'Tulalit', 19920394, 'FITB', 'Geologi', 3.7),
(9, 'Tulalit2', 18218218, 'FTSL', 'Sipil', 2.8),
(10, 'Tulalit3', 19219212, 'FTMD', 'Mesin', 3.4),
(11, 'Tulalit4', 10000001, 'SITH', 'Kehutanan', 3.07),
(12, 'Tulalit5', 10000002, 'FITB', 'Oseanografi', 3.22),
(13, 'Tulalit6', 10000003, 'FTTM', 'Tambang', 3.1),
(14, 'Tulalit7', 10000004, 'SAPPK', 'Arsitektur', 2.22),
(15, 'Tulalit8', 10000005, 'SF', 'FKK', 3.24),
(16, 'Tulalit9', 10000006, 'SF', 'STF', 3),
(17, 'Tulalit8', 10000007, 'FMIPA', 'Matematika', 3.4),
(18, 'Tulalit9', 10000008, 'FMIPA', 'Astronomi', 2.87);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
