-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 11:43 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simonev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminID` varchar(100) NOT NULL,
  `NIM` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Hp` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `LevelID` enum('1') NOT NULL DEFAULT '1',
  `NA` enum('N','A') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`AdminID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `NIM`, `Nama`, `Hp`, `Email`, `Username`, `Password`, `LevelID`, `NA`) VALUES
('7d7cb30b-7e35-41b5-a480-3417f148d74a', '14205118', 'Winda Aulia', '085363044558', 'winda@gmail.com', 'admin', 'admin', '1', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `download`
--


-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `JabatanID` varchar(100) NOT NULL,
  `OrmawaID` varchar(100) NOT NULL,
  `NamaJabatan` varchar(100) NOT NULL,
  `Warna` enum('danger','primary','warning','info','pink','inverse','success','purple') NOT NULL DEFAULT 'danger',
  `Urutan` varchar(100) NOT NULL,
  PRIMARY KEY (`JabatanID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`JabatanID`, `OrmawaID`, `NamaJabatan`, `Warna`, `Urutan`) VALUES
('203d6668-a2a3-6886-1c29-e5f00e8168da', 'ecedcd87-1ac7-ca44-63b7-c2bad10fa465', 'Devisi Acara', 'danger', 'success'),
('31f7d7ab-3b1e-44b1-d0d7-5d9ad11cbb12', '8a5399f7-cc67-dd7b-d021-79d406f53849', 'Devisi Humas', 'success', 'info'),
('5290de0f-566c-2b1c-7878-8a76cef69440', 'ecedcd87-1ac7-ca44-63b7-c2bad10fa465', 'Bendahara', 'danger', 'info'),
('6289fc27-72a7-a677-85c6-f1a21291e754', 'ecedcd87-1ac7-ca44-63b7-c2bad10fa465', 'Devisi Humas', 'danger', 'success'),
('6e6b09fd-ab37-ef16-fada-fd1fe4e12606', '721ace61-05a5-5731-e161-8fd013814a94', 'Ketua', 'info', ''),
('6ef90f92-32f5-3bd6-feab-c52486091987', '8a5399f7-cc67-dd7b-d021-79d406f53849', 'Ketua', 'danger', 'success'),
('8e882cda-c93b-5929-b6e9-abe13a05ba4e', '721ace61-05a5-5731-e161-8fd013814a94', 'Koordinasi Humas', 'warning', 'purple'),
('a2f45088-8bf1-5643-3b8f-b56b3c8edf0d', '721ace61-05a5-5731-e161-8fd013814a94', 'Wakil Ketua', 'danger', '2'),
('d2200c0f-bb8d-c0a5-e619-f04947db1346', '721ace61-05a5-5731-e161-8fd013814a94', 'Koordinasi Kesehatan', 'info', 'info'),
('e374c2a6-c731-1931-6233-b24aa2d57411', 'ecedcd87-1ac7-ca44-63b7-c2bad10fa465', 'Ketua', 'danger', '2'),
('f4fe90a7-2ee5-8c4e-ec80-cbd78b5920c6', '8a5399f7-cc67-dd7b-d021-79d406f53849', 'Bendahara', 'success', 'pink'),
('f5588dca-8c97-4412-91d5-6a3d63db4ab4', '8a5399f7-cc67-dd7b-d021-79d406f53849', 'Devisi Acara', 'success', 'pink');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `KomentarID` varchar(100) NOT NULL,
  `ProkerID` varchar(100) NOT NULL,
  `Komentar` varchar(500) NOT NULL,
  `PimpinanID` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`KomentarID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`KomentarID`, `ProkerID`, `Komentar`, `PimpinanID`, `Date`) VALUES
('039e3c18-d664-97e2-eb6b-c16f83349dd4', '1f860633-2d4d-d35f-daf5-ae858742fd2c', 'Ibuk Setuju...ok\r\n', 'Pembina Organisasi Mahasiswa IAIN Batusangkar', '2018-01-18'),
('0e5b7398-679b-fdf3-c696-5eae9e9a2502', '6ab5fe89-9002-3710-43e2-0746b9a111e4', 'Lengkapi data men\r\n', 'Pembina Organisasi Mahasiswa IAIN Batusangkar', '2010-01-10'),
('157a0369-34f0-4f25-f82e-52aeb16a358d', '0ef1b22b-aa0d-759e-da64-d1a3e2195b17', 'Selamat Berjuang', 'Pembina Organisasi Mahasiswa IAIN Batusangkar', '2018-01-18'),
('163f2431-4729-916e-e678-c27eab2c7fd3', '1f860633-2d4d-d35f-daf5-ae858742fd2c', 'kurangi panitia', 'Pembina Organisasi Mahasiswa IAIN Batusangkar', '2010-01-10'),
('acd7f807-a873-d978-c115-899605ca37c9', '1f860633-2d4d-d35f-daf5-ae858742fd2c', 'ibuk juga setuju\r\n', 'Pembina Organisasi Mahasiswa IAIN Batusangkar', '2018-01-18'),
('d87a1a06-6fc2-ad3b-e2aa-52b2dc7ff0be', '6b260fea-5406-02e3-b701-f322cdf00d74', 'kurangi anggaran', 'Pembina Organisasi Mahasiswa IAIN Batusangkar', '2018-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `MahasiswaID` varchar(100) NOT NULL,
  `OrmawaID` varchar(100) NOT NULL,
  `NIM` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Fakultas` enum('FEBI','FTIK','FSH','FUAD') NOT NULL,
  `JabatanID` varchar(100) NOT NULL,
  `TahunAngkatan` varchar(100) NOT NULL,
  `TahunPeriode` varchar(100) NOT NULL,
  `Jabat` varchar(100) NOT NULL,
  `NA` enum('N','A') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`MahasiswaID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`MahasiswaID`, `OrmawaID`, `NIM`, `Nama`, `Fakultas`, `JabatanID`, `TahunAngkatan`, `TahunPeriode`, `Jabat`, `NA`) VALUES
('133b2e30-40dd-042f-e8da-cddb8af92afd', '8a5399f7-cc67-dd7b-d021-79d406f53849 ', '14205001', 'ami', 'FEBI', '6ef90f92-32f5-3bd6-feab-c52486091987', '2016', '2018', 'Humas', 'A'),
('471bb1e6-d1cf-d906-5761-4c0a33c7c0c0', 'ecedcd87-1ac7-ca44-63b7-c2bad10fa465 ', '14205100', 'mita', 'FTIK', '5290de0f-566c-2b1c-7878-8a76cef69440', '2016', '2017', '', 'A'),
('99f9f0da-8e1a-71c1-ba83-4358f5e77e29', 'ecedcd87-1ac7-ca44-63b7-c2bad10fa465 ', '15205117', 'wahyu', 'FEBI', 'e374c2a6-c731-1931-6233-b24aa2d57411', '2017', '2018', '', 'A'),
('c1a892b5-502b-ea4f-4f63-8d38851479e2', '721ace61-05a5-5731-e161-8fd013814a94 ', '090897878', 'Vito', 'FEBI', 'a2f45088-8bf1-5643-3b8f-b56b3c8edf0d', '2013', '2014', 'Ketua', 'A'),
('d4f7cd7b-e8bd-1f76-8271-9a0bfce754c9', '721ace61-05a5-5731-e161-8fd013814a94 ', '65766', 'Boy', 'FSH', '6e6b09fd-ab37-ef16-fada-fd1fe4e12606', '2012', '2015', 'Bendahara', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `ormawa`
--

CREATE TABLE IF NOT EXISTS `ormawa` (
  `OrmawaID` varchar(100) NOT NULL,
  `PimpinanID` varchar(100) NOT NULL,
  `NamaOrmawa` varchar(100) NOT NULL,
  `PenanggungJawab` varchar(100) NOT NULL,
  `Pembimbing` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `NA` enum('N','A') NOT NULL DEFAULT 'A',
  `LevelID` enum('2') DEFAULT '2',
  `Foto` varchar(100) NOT NULL,
  PRIMARY KEY (`OrmawaID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ormawa`
--

INSERT INTO `ormawa` (`OrmawaID`, `PimpinanID`, `NamaOrmawa`, `PenanggungJawab`, `Pembimbing`, `Username`, `Password`, `NA`, `LevelID`, `Foto`) VALUES
('721ace61-05a5-5731-e161-8fd013814a94', '27356a67-bf38-0a03-4c04-40f8e91e87e3', 'UKM Al-Jauhar', 'Efendi', 'Ayu', 'kaligrafi', 'k', 'A', '2', '2018-02-19-yang dipakai.jpg'),
('8a5399f7-cc67-dd7b-d021-79d406f53849', 'a7753cc1-75f6-2408-ae28-db17c1d6121d', 'UKM Seni', 'Iroi', 'Ulva', 'seni', 's', 'A', '2', '2018-01-18-stain.jpg'),
('ecedcd87-1ac7-ca44-63b7-c2bad10fa465', '885a54f2-b25f-f16f-61fd-0bac6a1dcdd1 ', 'Kopma', 'anggi', '', 'kopma', 'k', 'A', '2', '2018-02-20-kopma.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan`
--

CREATE TABLE IF NOT EXISTS `pimpinan` (
  `PimpinanID` varchar(100) NOT NULL,
  `NIPY` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `NA` enum('N','A') NOT NULL DEFAULT 'A',
  `LevelID` enum('3') NOT NULL DEFAULT '3',
  PRIMARY KEY (`PimpinanID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pimpinan`
--

INSERT INTO `pimpinan` (`PimpinanID`, `NIPY`, `Nama`, `Username`, `Password`, `NA`, `LevelID`) VALUES
('27356a67-bf38-0a03-4c04-40f8e91e87e3 ', '7777465657686', 'aulia', 'aulia', 'a', 'A', '3'),
('885a54f2-b25f-f16f-61fd-0bac6a1dcdd1 ', '264530890081262 ', 'rahmi', 'rahmi', 'r', 'A', '3'),
('a7753cc1-75f6-2408-ae28-db17c1d6121d ', '0976573456776r7 ', 'Ulva', 'ulva', 'u', 'A', '3');

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE IF NOT EXISTS `proker` (
  `ProkerID` varchar(100) NOT NULL,
  `OrmawaID` varchar(100) NOT NULL,
  `TanggalBuat` date NOT NULL,
  `ProgramKerja` text NOT NULL,
  `TanggalPelaksanaan` date NOT NULL,
  `Anggaran` varchar(100) NOT NULL,
  `PenanggungJawab` varchar(100) NOT NULL,
  `dokumen` varchar(100) NOT NULL,
  `lpj` varchar(30) NOT NULL,
  `up` enum('NO','OK') NOT NULL DEFAULT 'NO',
  `NA` enum('N','A','M') NOT NULL DEFAULT 'M',
  PRIMARY KEY (`ProkerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`ProkerID`, `OrmawaID`, `TanggalBuat`, `ProgramKerja`, `TanggalPelaksanaan`, `Anggaran`, `PenanggungJawab`, `dokumen`, `lpj`, `up`, `NA`) VALUES
('01c5890f-babf-853a-23c6-1e0bf10d3651', 'ecedcd87-1ac7-ca44-63b7-c2bad10fa465', '2018-02-20', 'bazar', '2018-03-13', '3000000', 'dani', '', '', 'NO', 'A'),
('5b0a6f5b-3304-e464-34bc-8bb6a9dc854a', '721ace61-05a5-5731-e161-8fd013814a94', '2018-02-13', 'mubes', '2018-01-03', '90000', 'aIya', 'print1.docx', 'print1.docx', 'OK', 'A'),
('6ab5fe89-9002-3710-43e2-0746b9a111e4', '8a5399f7-cc67-dd7b-d021-79d406f53849', '2018-02-07', 'Tari', '2018-02-07', '2000000', 'sisi', '258.pdf', '20120109_CONTOHUML.pdf', 'OK', 'A'),
('6b260fea-5406-02e3-b701-f322cdf00d74', '8a5399f7-cc67-dd7b-d021-79d406f53849', '2018-02-19', 'Lomba Band', '2018-02-20', '200000', 'ari', '', '', 'NO', 'M'),
('86cf3bb2-7ac3-94fc-2d47-dec19994ed7f', 'ecedcd87-1ac7-ca44-63b7-c2bad10fa465', '2018-02-20', 'RAKER', '2018-02-14', '1000000', 'Haris', 'Batusangsakaryu.docx', 'monev.docx', 'OK', 'A'),
('d25bf6e8-80d1-5847-ddc3-39d0b7d1778e', 'ecedcd87-1ac7-ca44-63b7-c2bad10fa465', '2018-02-20', 'Pameran', '2018-02-27', '2000000', 'widia', '258.pdf', '', 'NO', 'A'),
('ee178041-3627-fb51-8040-7a89c810fa1b', '721ace61-05a5-5731-e161-8fd013814a94', '2018-02-04', 'lomba kaligrafi', '2018-02-16', '7677', 'kiki', '', '', 'NO', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tahunperiode`
--

CREATE TABLE IF NOT EXISTS `tahunperiode` (
  `TahunPeriodeID` varchar(100) NOT NULL,
  `Tahun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahunperiode`
--

