-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 05:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id_activity` varchar(11) NOT NULL,
  `keterlambatan` int(11) NOT NULL,
  `ijintidakhadir` int(11) NOT NULL,
  `ijinsakit` int(11) NOT NULL,
  `alpa` int(11) NOT NULL,
  `kepatutan` int(11) NOT NULL,
  `ketuntasan` int(11) NOT NULL,
  `inisiatif` int(11) NOT NULL,
  `karya` int(11) NOT NULL,
  `kerjatim` int(11) NOT NULL,
  `komunikasi` int(11) NOT NULL,
  `keteladanan` int(11) NOT NULL,
  `etoskerja` int(11) NOT NULL,
  `kompetitif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id_activity`, `keterlambatan`, `ijintidakhadir`, `ijinsakit`, `alpa`, `kepatutan`, `ketuntasan`, `inisiatif`, `karya`, `kerjatim`, `komunikasi`, `keteladanan`, `etoskerja`, `kompetitif`) VALUES
('sd01', 3, 1, 1, 4, 4, 2, 3, 4, 3, 1, 3, 2, 4),
('sd02', 3, 4, 1, 2, 1, 1, 2, 1, 1, 2, 3, 4, 1),
('sd03', 2, 2, 2, 1, 1, 2, 4, 2, 1, 4, 3, 3, 2),
('sd04', 2, 2, 4, 4, 3, 3, 3, 2, 4, 4, 3, 3, 2),
('sd05', 3, 4, 1, 4, 4, 2, 2, 1, 1, 1, 4, 3, 1),
('sd06', 4, 2, 3, 1, 2, 4, 3, 2, 3, 2, 3, 1, 3),
('sd07', 4, 4, 2, 3, 1, 3, 4, 4, 2, 2, 1, 1, 3),
('sd08', 3, 2, 4, 4, 3, 2, 2, 2, 4, 1, 2, 3, 4),
('sd09', 3, 3, 2, 4, 1, 1, 3, 1, 4, 3, 3, 2, 2),
('sd10', 3, 4, 3, 1, 1, 4, 2, 4, 1, 2, 3, 4, 2),
('sd11', 3, 1, 2, 1, 3, 1, 4, 1, 1, 2, 4, 3, 1),
('sd12', 1, 1, 2, 1, 1, 4, 4, 2, 3, 3, 1, 1, 3),
('sd13', 3, 2, 3, 3, 1, 2, 2, 3, 1, 2, 1, 1, 1),
('sd14', 4, 2, 3, 4, 4, 3, 2, 3, 1, 1, 1, 4, 1),
('sd15', 3, 3, 3, 3, 1, 4, 3, 1, 4, 2, 2, 1, 3),
('sd16', 2, 1, 2, 3, 2, 1, 4, 3, 2, 3, 3, 2, 1),
('sd17', 3, 4, 3, 2, 2, 2, 4, 4, 4, 2, 4, 3, 3),
('sd18', 2, 2, 2, 4, 1, 3, 3, 3, 1, 1, 1, 2, 2),
('sd19', 1, 1, 2, 4, 2, 4, 4, 2, 2, 4, 1, 3, 3),
('sd20', 3, 4, 4, 2, 1, 4, 2, 4, 2, 1, 4, 2, 2),
('sd21', 4, 4, 4, 3, 4, 3, 2, 1, 2, 3, 3, 2, 1),
('sd22', 4, 1, 1, 2, 2, 2, 1, 2, 3, 4, 4, 4, 3),
('sd23', 4, 1, 2, 4, 2, 2, 4, 3, 2, 3, 1, 4, 4),
('sd24', 4, 4, 3, 3, 1, 1, 3, 1, 3, 1, 1, 2, 2),
('sd25', 1, 3, 4, 3, 4, 1, 1, 4, 1, 4, 1, 1, 4),
('sd26', 2, 4, 3, 4, 4, 4, 2, 1, 1, 4, 4, 2, 3),
('sd27', 3, 4, 1, 4, 4, 4, 1, 4, 2, 3, 1, 3, 1),
('sd28', 4, 1, 3, 1, 4, 2, 4, 4, 3, 3, 2, 4, 4),
('sd29', 2, 2, 3, 4, 4, 3, 4, 2, 2, 2, 3, 2, 2),
('sd30', 4, 4, 1, 2, 4, 4, 2, 1, 2, 1, 4, 2, 2),
('sd31', 1, 3, 2, 2, 2, 3, 4, 3, 2, 1, 2, 1, 3),
('sd32', 1, 4, 4, 1, 2, 4, 3, 2, 1, 2, 4, 4, 3),
('sd33', 4, 1, 3, 1, 4, 4, 3, 1, 1, 3, 4, 4, 4),
('sd34', 3, 1, 4, 1, 3, 4, 3, 3, 2, 3, 3, 1, 1),
('sd35', 2, 3, 1, 3, 4, 4, 3, 2, 1, 4, 4, 2, 4),
('sd36', 4, 4, 2, 2, 1, 2, 2, 2, 1, 2, 3, 4, 2),
('sd37', 2, 1, 2, 4, 2, 3, 1, 3, 2, 3, 4, 3, 4),
('sd38', 3, 3, 3, 4, 4, 1, 3, 1, 1, 3, 2, 3, 3),
('sd39', 1, 3, 1, 2, 3, 1, 1, 3, 4, 1, 2, 2, 3),
('sd40', 4, 1, 2, 2, 2, 2, 2, 3, 4, 4, 4, 3, 2),
('sd41', 1, 2, 1, 1, 2, 2, 3, 1, 1, 3, 1, 3, 1),
('sd42', 3, 2, 2, 2, 1, 2, 3, 1, 2, 3, 4, 4, 3),
('sd43', 2, 4, 4, 4, 3, 4, 4, 2, 3, 1, 3, 1, 2),
('sd44', 3, 2, 4, 1, 1, 3, 1, 2, 1, 4, 2, 4, 2),
('sd45', 2, 3, 3, 4, 2, 1, 1, 4, 2, 3, 4, 2, 1),
('sd46', 1, 1, 4, 1, 4, 4, 2, 1, 3, 2, 4, 2, 3),
('sd47', 3, 1, 3, 1, 1, 2, 2, 3, 3, 3, 1, 1, 1),
('sd48', 4, 1, 2, 4, 1, 3, 1, 2, 1, 3, 4, 4, 4),
('sd49', 1, 1, 3, 1, 1, 2, 4, 3, 2, 4, 4, 4, 2),
('sd50', 1, 1, 1, 1, 3, 2, 4, 1, 3, 1, 1, 4, 2),
('sd51', 1, 1, 4, 2, 1, 1, 3, 3, 2, 2, 3, 4, 2),
('sd52', 3, 3, 1, 3, 3, 1, 3, 3, 4, 1, 3, 2, 1),
('sd53', 1, 2, 1, 3, 2, 2, 1, 1, 2, 1, 2, 3, 1),
('sd54', 1, 4, 2, 4, 1, 2, 3, 1, 3, 3, 3, 1, 1),
('sd55', 3, 1, 3, 3, 3, 3, 1, 2, 1, 2, 4, 3, 1),
('sd56', 2, 1, 4, 2, 4, 2, 4, 3, 2, 4, 1, 2, 4),
('sd57', 1, 4, 3, 1, 3, 2, 3, 2, 1, 4, 2, 3, 2),
('sd58', 3, 2, 4, 1, 3, 3, 1, 4, 3, 3, 3, 1, 2),
('sd59', 2, 3, 2, 4, 3, 2, 3, 3, 3, 4, 1, 4, 4),
('sd60', 2, 3, 2, 4, 2, 1, 1, 3, 4, 1, 1, 3, 4),
('sd61', 1, 4, 4, 4, 1, 2, 1, 3, 4, 2, 1, 2, 1),
('sd62', 3, 1, 3, 1, 2, 2, 1, 4, 4, 4, 4, 1, 3),
('sd63', 3, 3, 3, 3, 2, 3, 3, 1, 2, 3, 2, 1, 4),
('sd64', 1, 4, 1, 1, 1, 4, 1, 4, 3, 1, 3, 1, 3),
('sd65', 2, 4, 3, 2, 2, 1, 4, 2, 4, 2, 4, 4, 3),
('sd66', 1, 2, 3, 2, 2, 3, 1, 1, 1, 4, 2, 3, 3),
('sd67', 3, 1, 2, 4, 4, 4, 4, 1, 1, 2, 3, 2, 3),
('sd68', 1, 4, 2, 2, 1, 4, 1, 3, 2, 2, 2, 4, 3),
('sd69', 3, 2, 4, 1, 2, 1, 4, 1, 4, 3, 2, 2, 3),
('sd70', 3, 1, 2, 2, 2, 2, 2, 3, 4, 1, 3, 3, 2),
('sd71', 3, 4, 3, 2, 1, 1, 4, 2, 1, 2, 3, 2, 2),
('sd72', 3, 2, 4, 4, 1, 1, 3, 1, 4, 4, 3, 2, 1),
('sd73', 2, 4, 1, 1, 3, 4, 3, 3, 1, 4, 3, 3, 2),
('sd74', 4, 2, 3, 4, 4, 2, 1, 4, 2, 4, 1, 1, 1),
('sd75', 3, 4, 3, 4, 2, 3, 1, 3, 4, 4, 3, 4, 2),
('sd76', 3, 2, 1, 1, 1, 2, 4, 1, 1, 4, 1, 4, 3),
('sd77', 4, 1, 1, 2, 3, 3, 2, 2, 2, 2, 3, 2, 1),
('sd78', 4, 1, 2, 4, 2, 1, 4, 1, 2, 3, 1, 4, 4),
('sd79', 1, 3, 1, 1, 3, 2, 3, 3, 1, 4, 1, 3, 2),
('sd80', 1, 2, 2, 4, 4, 2, 4, 4, 3, 4, 4, 1, 1),
('sd81', 3, 4, 1, 2, 4, 4, 4, 1, 1, 4, 2, 3, 1),
('sd82', 2, 1, 1, 3, 3, 4, 1, 2, 1, 3, 1, 1, 4),
('sd83', 4, 3, 1, 2, 3, 3, 2, 4, 4, 1, 1, 2, 2),
('sd84', 3, 4, 3, 2, 2, 2, 2, 4, 1, 3, 4, 3, 4),
('sd85', 3, 4, 3, 4, 4, 2, 3, 1, 1, 3, 4, 1, 1),
('sd86', 2, 3, 1, 1, 4, 3, 1, 2, 1, 4, 2, 1, 4),
('sd87', 4, 2, 1, 3, 3, 2, 4, 3, 4, 3, 4, 4, 2),
('sd88', 3, 1, 2, 3, 4, 1, 1, 1, 4, 2, 3, 4, 3),
('sd89', 4, 3, 1, 1, 3, 1, 4, 2, 3, 1, 1, 1, 4),
('sd90', 4, 2, 2, 2, 3, 2, 4, 4, 2, 4, 3, 2, 1),
('sd91', 2, 2, 2, 1, 4, 4, 3, 4, 1, 3, 2, 3, 4),
('sd92', 4, 4, 3, 1, 3, 3, 3, 3, 3, 2, 3, 2, 1),
('sd93', 2, 2, 3, 1, 3, 3, 2, 3, 2, 1, 2, 1, 4),
('sd94', 1, 2, 3, 1, 4, 1, 3, 4, 4, 2, 1, 1, 3),
('sd95', 1, 2, 3, 2, 3, 3, 4, 2, 3, 1, 3, 2, 4),
('sd96', 1, 2, 1, 3, 3, 4, 3, 2, 4, 2, 4, 1, 1),
('sd97', 1, 4, 4, 4, 3, 2, 1, 1, 4, 2, 1, 2, 4),
('sd98', 1, 1, 1, 1, 3, 3, 2, 3, 1, 3, 2, 2, 4),
('sd99', 1, 1, 3, 2, 2, 1, 4, 1, 2, 1, 4, 4, 1),
('sd100', 2, 2, 1, 2, 1, 4, 3, 4, 3, 1, 3, 4, 4),
('sd101', 2, 4, 4, 2, 4, 1, 4, 1, 3, 3, 3, 2, 3),
('sd102', 2, 1, 4, 3, 3, 3, 1, 1, 2, 2, 4, 3, 4),
('sd103', 2, 1, 1, 4, 1, 1, 4, 2, 4, 2, 1, 4, 4),
('sd104', 1, 2, 2, 1, 3, 3, 4, 4, 2, 2, 3, 1, 4),
('sd105', 2, 4, 4, 4, 3, 4, 3, 2, 1, 1, 4, 4, 3),
('sd106', 1, 2, 1, 2, 2, 1, 3, 4, 3, 1, 2, 3, 2),
('sd107', 4, 1, 4, 3, 2, 2, 2, 2, 1, 3, 1, 2, 1),
('sd108', 1, 3, 1, 2, 2, 3, 2, 3, 3, 4, 2, 1, 4),
('sd109', 2, 3, 2, 4, 1, 1, 3, 4, 4, 2, 4, 2, 4),
('sd110', 2, 3, 2, 1, 2, 4, 2, 2, 2, 2, 4, 2, 3),
('sd111', 1, 3, 1, 3, 3, 2, 4, 4, 3, 3, 2, 2, 1),
('sd112', 1, 3, 2, 3, 1, 2, 2, 4, 1, 4, 3, 4, 2),
('sd113', 3, 2, 1, 4, 2, 1, 3, 1, 4, 3, 4, 2, 2),
('sd114', 1, 1, 1, 2, 2, 2, 4, 3, 2, 2, 4, 4, 4),
('sd115', 4, 2, 3, 3, 3, 4, 4, 1, 2, 3, 4, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `id_certification` int(11) NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `nama_sertifikasi` varchar(255) NOT NULL,
  `foto_sertifikat` varchar(100) NOT NULL,
  `nilai_sertifikat` varchar(100) NOT NULL,
  `tanggal_sertifikat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`id_certification`, `id_user`, `nama_sertifikasi`, `foto_sertifikat`, `nilai_sertifikat`, `tanggal_sertifikat`) VALUES
(1, 'sd92', 'SDFGFD', '660626661_001.pdf', '75', '2022-12-01'),
(2, 'sd92', 'FDGDFG', '533980162_001.pdf', '75', '2022-12-12'),
(3, 'sd92', 'dsfsdf', '376724685_001.pdf', '100', '2022-12-07'),
(4, 'sd92', 'fgcbcb', '1176105850_001.pdf', '100', '2022-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`) VALUES
('sd01', 'ikhsangunadi', 'ansal123', 'gukar'),
('sd02', 'noorjehhan', 'ansal123', 'gukar'),
('sd03', 'sriyudiyanti', 'ansal123', 'gukar'),
('sd04', 'andreassetiyono', 'ansal123', 'gukar'),
('sd05', 'henihidayah', 'ansal123', 'gukar'),
('sd06', 'achmadefendi', 'ansal123', 'gukar'),
('sd07', 'amiruddinnahdliyan', 'ansal123', 'gukar'),
('sd08', 'herlinatri', 'ansal123', 'gukar'),
('sd09', 'mochamadichsan', 'ansal123', 'gukar'),
('sd10', 'diahanita', 'ansal123', 'gukar'),
('sd100', 'muhamadihwan', 'ansal123', 'gukar'),
('sd101', 'ainunhurrotaini', 'ansal123', 'gukar'),
('sd102', 'aisyahani', 'ansal123', 'gukar'),
('sd103', 'zulaihah', 'ansal123', 'gukar'),
('sd104', 'rimarahmayanti', 'ansal123', 'gukar'),
('sd105', 'sukmaabdul', 'ansal123', 'gukar'),
('sd106', 'muhammadabid', 'ansal123', 'gukar'),
('sd107', 'iqbalmubhij', 'ansal123', 'gukar'),
('sd108', 'muhammadwildan', 'ansal123', 'gukar'),
('sd109', 'muhammadyunus', 'ansal123', 'gukar'),
('sd11', 'muhammadfirmansyah', 'ansal123', 'gukar'),
('sd110', 'muhammadmisbah', 'ansal123', 'gukar'),
('sd111', 'nanoromadlon', 'ansal123', 'gukar'),
('sd112', 'haqqimuizzudin', 'ansal123', 'gukar'),
('sd113', 'mochammadmushoddakhul', 'ansal123', 'gukar'),
('sd114', 'rizalmurtadlo', 'ansal123', 'gukar'),
('sd115', 'nurulakhyar', 'ansal123', 'gukar'),
('sd12', 'ikasuudia', 'ansal123', 'gukar'),
('sd13', 'hadisusanto', 'ansal123', 'gukar'),
('sd14', 'ghoniyurrohman', 'ansal123', 'gukar'),
('sd15', 'kikirezki', 'ansal123', 'gukar'),
('sd16', 'bintisaniatul', 'ansal123', 'gukar'),
('sd17', 'mutaahirotulhidayati', 'ansal123', 'gukar'),
('sd18', 'risaswahyudi', 'ansal123', 'gukar'),
('sd19', 'srisubakti', 'ansal123', 'gukar'),
('sd20', 'lailatulmunawaroh', 'ansal123', 'gukar'),
('sd21', 'masruhan', 'ansal123', 'gukar'),
('sd22', 'ikawijayanti', 'ansal123', 'gukar'),
('sd23', 'daviesyudisno', 'ansal123', 'gukar'),
('sd24', 'elverarosana', 'ansal123', 'gukar'),
('sd25', 'imarotulmuhibbah', 'ansal123', 'gukar'),
('sd26', 'arifnur', 'ansal123', 'gukar'),
('sd27', 'uciksriwahyuni', 'ansal123', 'gukar'),
('sd28', 'dannypermata', 'ansal123', 'gukar'),
('sd29', 'aningmasyrufatin', 'ansal123', 'gukar'),
('sd30', 'nurrizky', 'ansal123', 'gukar'),
('sd31', 'miftakhuljannah', 'ansal123', 'gukar'),
('sd32', 'paramitapuri', 'ansal123', 'gukar'),
('sd33', 'sutrisno', 'ansal123', 'gukar'),
('sd34', 'anisamilia', 'ansal123', 'gukar'),
('sd35', 'romadhoniar', 'ansal1234', 'gukar'),
('sd36', 'jaronah', 'ansal123', 'gukar'),
('sd37', 'nihayatulhasanah', 'ansal123', 'gukar'),
('sd38', 'yusroni', 'ansal123', 'gukar'),
('sd39', 'desiratnasari', 'ansal123', 'gukar'),
('sd40', 'destiariani', 'ansal123', 'gukar'),
('sd41', 'kusnia', 'ansal123', 'gukar'),
('sd42', 'retnosugiarti', 'ansal123', 'gukar'),
('sd43', 'kholidhafatmawati', 'ansal123', 'gukar'),
('sd44', 'puriwiranti', 'ansal123', 'gukar'),
('sd45', 'denadaefrilia', 'ansal123', 'gukar'),
('sd46', 'mohamadnurahman', 'ansal123', 'gukar'),
('sd47', 'gitanoviria', 'ansal123', 'gukar'),
('sd48', 'irmawahyu', 'ansal123', 'gukar'),
('sd49', 'primasuci', 'ansal123', 'gukar'),
('sd50', 'ainurrifqi', 'ansal123', 'gukar'),
('sd51', 'ellyssulis', 'ansal123', 'gukar'),
('sd52', 'daraeges', 'ansal123', 'gukar'),
('sd53', 'muhammadazhar', 'ansal123', 'gukar'),
('sd54', 'miftakuljannah', 'ansal123', 'gukar'),
('sd55', 'inamutmainnah', 'ansal123', 'gukar'),
('sd56', 'dinieko', 'ansal123', 'gukar'),
('sd57', 'ernaferdianti', 'ansal123', 'gukar'),
('sd58', 'ariiswahudi', 'ansal123', 'gukar'),
('sd59', 'yahyafirmansah', 'ansal123', 'gukar'),
('sd60', 'indahlestari', 'ansal123', 'gukar'),
('sd61', 'olgaputriana', 'ansal123', 'gukar'),
('sd62', 'trierda', 'ansal123', 'gukar'),
('sd63', 'suwaibatulaslamiyah', 'ansal123', 'gukar'),
('sd64', 'nurulasri', 'ansal123', 'gukar'),
('sd65', 'sonyalitabintang', 'ansal123', 'gukar'),
('sd66', 'ikapuspitasari', 'ansal123', 'gukar'),
('sd67', 'rikhadwi', 'ansal123', 'gukar'),
('sd68', 'milatunnafisah', 'ansal123', 'gukar'),
('sd69', 'selvidwi', 'ansal123', 'gukar'),
('sd70', 'rizkialbardi', 'ansal123', 'gukar'),
('sd71', 'yuanramadhanty', 'ansal123', 'gukar'),
('sd72', 'mashuri', 'ansal123', 'gukar'),
('sd73', 'sugianto', 'ansal123', 'gukar'),
('sd74', 'abdulkhodir', 'ansal123', 'gukar'),
('sd75', 'mustangin', 'ansal123', 'gukar'),
('sd76', 'arsadisapto', 'ansal123', 'gukar'),
('sd77', 'iswanto', 'ansal123', 'gukar'),
('sd78', 'dedyirwanda', 'ansal123', 'gukar'),
('sd79', 'rizkyrisdianto', 'ansal123', 'gukar'),
('sd80', 'maydiaquliatul', 'ansal123', 'gukar'),
('sd81', 'saifulanwar', 'ansal123', 'gukar'),
('sd82', 'kusnularifin', 'ansal123', 'gukar'),
('sd83', 'indahpurnawati', 'ansal123', 'gukar'),
('sd84', 'sujiatisulistyowati', 'ansal123', 'gukar'),
('sd85', 'sodikadi', 'ansal123', 'gukar'),
('sd86', 'destidwi', 'ansal123', 'gukar'),
('sd87', 'edysubiantoro', 'ansal123', 'gukar'),
('sd88', 'herisetiawan', 'ansal123', 'gukar'),
('sd89', 'rusbiati', 'ansal123', 'gukar'),
('sd90', 'anitaandriani', 'ansal123', 'gukar'),
('sd91', 'lindawidayati', 'ansal123', 'gukar'),
('sd92', 'ichwanadi', 'ansal123', 'gukar'),
('sd93', 'achmadrodjaini', 'ansal123', 'gukar'),
('sd94', 'novanur', 'ansal123', 'gukar'),
('sd95', 'mukid', 'ansal123', 'gukar'),
('sd96', 'yanuarramadhan', 'ansal123', 'gukar'),
('sd97', 'azkiyatulmaulidah', 'ansal123', 'gukar'),
('sd98', 'irawati', 'ansal123', 'gukar'),
('sd99', 'bayuputra', 'ansal123', 'gukar');

-- --------------------------------------------------------

--
-- Table structure for table `signature`
--

CREATE TABLE `signature` (
  `id_esign` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `sign_name` varchar(255) NOT NULL,
  `sign_req` varchar(255) NOT NULL,
  `sign_date` datetime NOT NULL,
  `signature` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `qrcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `study`
--

CREATE TABLE `study` (
  `id_study` varchar(11) NOT NULL,
  `ijasahsd` text NOT NULL,
  `ijasahsmp` text NOT NULL,
  `ijasahsma` text NOT NULL,
  `ijasahs1` text NOT NULL,
  `ijasahs2` text NOT NULL,
  `ijasahs3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study`
--

INSERT INTO `study` (`id_study`, `ijasahsd`, `ijasahsmp`, `ijasahsma`, `ijasahs1`, `ijasahs2`, `ijasahs3`) VALUES
('sd01', '-', '-', '-', '', '', ''),
('sd02', '-', '-', '-', '', '', ''),
('sd03', '-', '-', '-', '', '', ''),
('sd04', '-', '-', '-', '', '', ''),
('sd05', '-', '-', '-', '', '', ''),
('sd06', '-', '-', '-', '', '', ''),
('sd07', '-', '-', '-', '', '', ''),
('sd08', '-', '-', '-', '', '', ''),
('sd09', '-', '-', '-', '', '', ''),
('sd10', '-', '-', '-', '', '', ''),
('sd100', '-', '-', '-', '', '', ''),
('sd101', '-', '-', '-', '', '', ''),
('sd102', '-', '-', '-', '', '', ''),
('sd103', '-', '-', '-', '', '', ''),
('sd104', '-', '-', '-', '', '', ''),
('sd105', '-', '-', '-', '', '', ''),
('sd106', '-', '-', '-', '', '', ''),
('sd107', '-', '-', '-', '', '', ''),
('sd108', '-', '-', '-', '', '', ''),
('sd109', '-', '-', '-', '', '', ''),
('sd11', '-', '-', '-', '', '', ''),
('sd110', '-', '-', '-', '', '', ''),
('sd111', '-', '-', '-', '', '', ''),
('sd112', '-', '-', '-', '', '', ''),
('sd113', '-', '-', '-', '', '', ''),
('sd114', '-', '-', '-', '', '', ''),
('sd115', '-', '-', '-', '', '', ''),
('sd12', '-', '-', '-', '', '', ''),
('sd13', '-', '-', '-', '', '', ''),
('sd14', '-', '-', '-', '', '', ''),
('sd15', '-', '-', '-', '', '', ''),
('sd16', '-', '-', '-', '', '', ''),
('sd17', '-', '-', '-', '', '', ''),
('sd18', '-', '-', '-', '', '', ''),
('sd19', '-', '-', '-', '', '', ''),
('sd20', '-', '-', '-', '', '', ''),
('sd21', '-', '-', '-', '', '', ''),
('sd22', '-', '-', '-', '', '', ''),
('sd23', '-', '-', '-', '', '', ''),
('sd24', '-', '-', '-', '', '', ''),
('sd25', '-', '-', '-', '', '', ''),
('sd26', '-', '-', '-', '', '', ''),
('sd27', '-', '-', '-', '', '', ''),
('sd28', '-', '-', '-', '', '', ''),
('sd29', '-', '-', '-', '', '', ''),
('sd30', '-', '-', '-', '', '', ''),
('sd31', '-', '-', '-', '', '', ''),
('sd32', '-', '-', '-', '', '', ''),
('sd33', '-', '-', '-', '', '', ''),
('sd34', '-', '-', '-', '', '', ''),
('sd35', '-', '-', '-', '', '', ''),
('sd36', '-', '-', '-', '', '', ''),
('sd37', '-', '-', '-', '', '', ''),
('sd38', '-', '-', '-', '', '', ''),
('sd39', '-', '-', '-', '', '', ''),
('sd40', '-', '-', '-', '', '', ''),
('sd41', '-', '-', '-', '', '', ''),
('sd42', '-', '-', '-', '', '', ''),
('sd43', '-', '-', '-', '', '', ''),
('sd44', '-', '-', '-', '', '', ''),
('sd45', '-', '-', '-', '', '', ''),
('sd46', '-', '-', '-', '', '', ''),
('sd47', '-', '-', '-', '', '', ''),
('sd48', '-', '-', '-', '', '', ''),
('sd49', '-', '-', '-', '', '', ''),
('sd50', '-', '-', '-', '', '', ''),
('sd51', '-', '-', '-', '', '', ''),
('sd52', '-', '-', '-', '', '', ''),
('sd53', '-', '-', '-', '', '', ''),
('sd54', '-', '-', '-', '', '', ''),
('sd55', '-', '-', '-', '', '', ''),
('sd56', '-', '-', '-', '', '', ''),
('sd57', '-', '-', '-', '', '', ''),
('sd58', '-', '-', '-', '', '', ''),
('sd59', '-', '-', '-', '', '', ''),
('sd60', '-', '-', '-', '', '', ''),
('sd61', '-', '-', '-', '', '', ''),
('sd62', '-', '-', '-', '', '', ''),
('sd63', '-', '-', '-', '', '', ''),
('sd64', '-', '-', '-', '', '', ''),
('sd65', '-', '-', '-', '', '', ''),
('sd66', '-', '-', '-', '', '', ''),
('sd67', '-', '-', '-', '', '', ''),
('sd68', '-', '-', '-', '', '', ''),
('sd69', '-', '-', '-', '', '', ''),
('sd70', '-', '-', '-', '', '', ''),
('sd71', '-', '-', '-', '', '', ''),
('sd72', '-', '-', '-', '', '', ''),
('sd73', '-', '-', '-', '', '', ''),
('sd74', '-', '-', '-', '', '', ''),
('sd75', '-', '-', '-', '', '', ''),
('sd76', '-', '-', '-', '', '', ''),
('sd77', '-', '-', '-', '', '', ''),
('sd78', '-', '-', '-', '', '', ''),
('sd79', '-', '-', '-', '', '', ''),
('sd80', '-', '-', '-', '', '', ''),
('sd81', '-', '-', '-', '', '', ''),
('sd82', '-', '-', '-', '', '', ''),
('sd83', '-', '-', '-', '', '', ''),
('sd84', '-', '-', '-', '', '', ''),
('sd85', '-', '-', '-', '', '', ''),
('sd86', '-', '-', '-', '', '', ''),
('sd87', '-', '-', '-', '', '', ''),
('sd88', '-', '-', '-', '', '', ''),
('sd89', '-', '-', '-', '', '', ''),
('sd90', '-', '-', '-', '', '', ''),
('sd91', '-', '-', '-', '', '', ''),
('sd92', '-', '-', '-', '5a76d3e04548088ba7f21cb3715a1779', '', ''),
('sd93', '-', '-', '-', '', '', ''),
('sd94', '-', '-', '-', '', '', ''),
('sd95', '-', '-', '-', '', '', ''),
('sd96', '-', '-', '-', '', '', ''),
('sd97', '-', '-', '-', '', '', ''),
('sd98', '-', '-', '-', '', '', ''),
('sd99', '-', '-', '-', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jeniskelamin` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `whatsapp` text NOT NULL,
  `email` varchar(115) NOT NULL,
  `gukar_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jeniskelamin`, `alamat`, `whatsapp`, `email`, `gukar_foto`) VALUES
('sd01', 'Ikhsan Gunadi', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd02', 'Noor Jehhan', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd03', 'Hj. Sri  Yudiyanti', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd04', 'Andreas Setiyono', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd05', 'Heni Hidayah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd06', 'Achmad Efendi', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd07', 'Amiruddin Nahdliyan', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd08', 'Herlina Tri Pambudiati', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd09', 'Mochamad Ichsan Wibowo', '', '0000-00-00', '', '-', '0', '', ''),
('sd10', 'Diah Anita Ludfiana', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd100', 'Muhamad Ihwan', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd101', 'Ainun Hurrotaini', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd102', 'Aisyah Ani Rosita', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd103', 'Zulaihah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd104', 'Rima Rahmayanti', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd105', 'Sukma Abdul Rozy', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd106', 'Muhammad Abid Abdillah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd107', 'Iqbal Mubhij ', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd108', 'Muhammad Wildan Makhasin', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd109', 'Muhammad Yunus', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd11', 'Muhammad Firmansyah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd110', 'Muhammad Misbah Afif', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd111', 'Nano Romadlon Auliya Akbar', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd112', 'Haqqi Muizzudin', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd113', 'Mochammad Mushoddakhul Umam', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd114', 'Moch. Rizal Murtadlo', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd115', 'Nurul Akhyar', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd12', 'Ika Su?udia', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd13', 'Hadi Susanto', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd14', 'Ghoniyur Rohman', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd15', 'Kiki Rezki Harefa', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd16', 'Binti Saniatul M', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd17', 'Mutaahirotul Hidayati', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd18', 'Risas Wahyudi', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd19', 'Sri Subakti', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd20', 'Lailatul Munawaroh', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd21', 'Masruhan', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd22', 'Ika Wijayanti', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd23', 'Davies Yudisno', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd24', 'Elvera Rosana E.', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd25', 'Imarotul Muhibbah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd26', 'Arif Nur Rahman', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd27', 'Ucik Sriwahyuni', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd28', 'Mokh. Danny Permata Utomo', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd29', 'Aning Masyrufatin Furoida', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd30', 'Nur Rizky Marsa Romadhona', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd31', 'Miftakhul Jannah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd32', 'Paramita Puri Anggraini', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd33', 'Sutrisno', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd34', 'Anis Amilia', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd35', 'Romadhoniar Fitri Aini', '-', '2022-08-10', 'Perempuan', '-', '0', '', ''),
('sd36', 'Jaronah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd37', 'Nihayatul Hasanah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd38', 'Moch. Yusroni', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd39', 'Desi Ratnasari', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd40', 'Desti Ariani Mutiara', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd41', 'Kusnia', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd42', 'Retno Sugiarti', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd43', 'Kholidha Fatmawati', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd44', 'Puri Wiranti', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd45', 'Denada Efrilia', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd46', 'Mohamad Nurahman', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd47', 'Gita Noviria', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd48', 'Irma Wahyu Putri Yoditya', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd49', 'Prima Suci Ibar Wati Ningrum', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd50', 'Ainur Rifqi', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd51', 'Ellys Sulis Setyawati', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd52', 'Dara Eges Nuryana', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd53', 'Muhammad Azhar Hidayat', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd54', 'Miftakul Jannah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd55', 'Ina Mutmainnah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd56', 'Dini Eko Wulandari', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd57', 'Erna Ferdianti', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd58', 'Ari Iswahudi', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd59', 'Yahya Firmansah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd60', 'Indah Lestari', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd61', 'Olga Putriana Wati ', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd62', 'Tri Erda Ermaningrum', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd63', 'Suwaibatul Aslamiyah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd64', 'Nurul Asri Fitriyah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd65', 'Sonyalita Bintang Rivanda', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd66', 'Ika Puspitasari', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd67', 'Rikha Dwi Rachmawati', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd68', 'Milatun Nafisah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd69', 'Selvi Dwi Wahyuni', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd70', 'Rizki Albardi', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd71', 'Yuan Ramadhanty Putri', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd72', 'Mashuri', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd73', 'Sugianto', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd74', 'Abdul Khodir Zaelani', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd75', 'Mustangin', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd76', 'Arsadi Sapto Kasusro', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd77', 'Iswanto', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd78', 'Dedy Irwanda', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd79', 'Rizky Risdianto', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd80', 'Maydia Quliatul Afifah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd81', 'Moh. Saiful Anwar', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd82', 'Kusnul Arifin', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd83', 'Indah Purnawati', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd84', 'Sujiati Sulistyowati', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd85', 'Sodik Adi Utomo', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd86', 'Desti Dwi Cahyo', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd87', 'Edy Subiantoro', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd88', 'Heri Setiawan', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd89', 'Rusbiati', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd90', 'Anita Andriani', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd91', 'Linda Widayati', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd92', 'Ichwan Adi Prasetyo', 'Malang', '1991-08-22', 'L', 'JL. Joyo Pranoto', '083100107000', 'ichwan@sekolahanaksaleh.sch.id', '56a2b4a5056f859ae251c871ea4d8c6a-Ichwan Adi Prasetyo'),
('sd93', 'Achmad Rodjaini', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd94', 'Nova Nur Khasanah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd95', 'M. Mukid', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd96', 'Moh. Yanuar Ramadhan', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd97', 'Azkiyatul Maulidah Nabawiyyah', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd98', 'Irawati', '-', '0000-00-00', '-', '-', '0', '', ''),
('sd99', 'Bayu Putra', '-', '0000-00-00', '-', '-', '0', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`id_certification`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `signature`
--
ALTER TABLE `signature`
  ADD PRIMARY KEY (`id_esign`);

--
-- Indexes for table `study`
--
ALTER TABLE `study`
  ADD PRIMARY KEY (`id_study`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certification`
--
ALTER TABLE `certification`
  MODIFY `id_certification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `signature`
--
ALTER TABLE `signature`
  MODIFY `id_esign` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
