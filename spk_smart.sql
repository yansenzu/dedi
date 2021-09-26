-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 05:38 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_smart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `id_pelamar` varchar(10) NOT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `usia` varchar(100) DEFAULT NULL,
  `pengalaman` varchar(100) DEFAULT NULL,
  `sertifikat_keahlian` varchar(100) DEFAULT NULL,
  `test_tulis` varchar(100) DEFAULT NULL,
  `wawancara` varchar(100) DEFAULT NULL,
  `kesehatan` varchar(100) DEFAULT NULL,
  `jumlah` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `id_pelamar`, `pendidikan`, `usia`, `pengalaman`, `sertifikat_keahlian`, `test_tulis`, `wawancara`, `kesehatan`, `jumlah`) VALUES
(1, '3', '85', '0', '85', '100', '0', '80', '80', '0.69690721649484'),
(2, '4', '85', '100', '50', '100', '70', '80', '80', '0.78969072164948'),
(3, '5', '40', '80', '20', '100', '30', '80', '80', '0.5701030927835'),
(4, '6', '70', '100', '85', '100', '90', '80', '80', '0.86546391752577');

-- --------------------------------------------------------

--
-- Table structure for table `job_list`
--

CREATE TABLE `job_list` (
  `id_job` int(11) NOT NULL,
  `title` text NOT NULL,
  `konten` text NOT NULL,
  `slug` text,
  `kategori` varchar(50) NOT NULL,
  `kualifikasi` varchar(250) NOT NULL,
  `tingkat_pekerjaan` varchar(250) NOT NULL,
  `date_post` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_list`
--

INSERT INTO `job_list` (`id_job`, `title`, `konten`, `slug`, `kategori`, `kualifikasi`, `tingkat_pekerjaan`, `date_post`) VALUES
(1, 'Sales Eksekutif', '<p>CV. Motorindo Perkasa</p>\r\n\r\n<p>Pekanbaru</p>\r\n\r\n<p>Membutuhkan Sumber Daya Manusia yang memenuhi syarat berikut :</p>\r\n\r\n<ul>\r\n	<li>Pendidikan Minimal D3 Seluruh Jurusan</li>\r\n	<li>Bersedia penempatan dan mobile di area Pekanbaru dan sekitar Riau</li>\r\n	<li>Memiliki relasi serta network yang luas</li>\r\n	<li>Memiliki kemampuan leadership yang baik</li>\r\n	<li>Mampu berkomunikasi dengan baik, supel dan ramah dengan Customer.</li>\r\n	<li>Sanggup untuk mencapai target yang telah ditetapkan oleh perusahaan</li>\r\n</ul>\r\n', '', 'Marketing', 'Sertifikat Professional, Pendidikan, Pengalaman', 'Sales', '2021-08-03'),
(3, 'Staff Accounting', '<p>CV. Motorindo Perkasa</p>\r\n\r\n<p>Pekanbaru</p>\r\n\r\n<p><strong>Kriteria :</strong></p>\r\n\r\n<ul>\r\n	<li>Pendidikan Minimal D3 Jurusan Akuntansi</li>\r\n	<li>Memiliki pengalaman Minimal 2 Tahun&nbsp;</li>\r\n	<li>Memiliki kemampuan leadership yang baik</li>\r\n	<li>Mampu berkomunikasi dengan baik, supel dan ramah</li>\r\n</ul>\r\n', '', 'Finance', 'Sertifikat Professional, D3 Akunting, Pengalaman', 'Akuntan', '2021-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kode_kriteria` varchar(5) NOT NULL,
  `kriteria` varchar(20) NOT NULL,
  `bobot` varchar(20) NOT NULL,
  `normalisasi` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kode_kriteria`, `kriteria`, `bobot`, `normalisasi`) VALUES
(1, 'C1', 'Pendidikan', '90', '0.18556701030928'),
(2, 'C2', 'Usia', '60', '0.12371134020619'),
(3, 'C3', 'Pengalaman Kerja', '80', '0.16494845360825'),
(4, 'C4', 'Sertifikat Keahlian', '50', '0.10309278350515'),
(5, 'C5', 'Test Tertulis', '75', '0.15463917525773'),
(6, 'C6', 'Test Wawancara', '75', '0.15463917525773'),
(11, 'C7', 'Test Kesehatan', '55', '0.11340206185567');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id_pelamar` int(11) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tmp_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `pengalaman` int(5) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `sertifikat_keahlian` varchar(250) DEFAULT NULL,
  `ijazah` varchar(255) DEFAULT NULL,
  `surat_kesehatan` varchar(255) DEFAULT NULL,
  `id_job` varchar(10) DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `test_tulis` varchar(20) DEFAULT NULL,
  `wawancara` varchar(20) DEFAULT NULL,
  `kesehatan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id_pelamar`, `nik`, `password`, `nama`, `email`, `alamat`, `tmp_lahir`, `tgl_lahir`, `umur`, `hp`, `pendidikan`, `pengalaman`, `cv`, `foto`, `sertifikat_keahlian`, `ijazah`, `surat_kesehatan`, `id_job`, `kategori`, `test_tulis`, `wawancara`, `kesehatan`) VALUES
(4, '1210110475', '123456', 'Dedi Kurnia', 'zaidediputra@gmail.com', 'Pekanbaru', 'Pekanbaru', '1993-11-18', 26, '', 'S1', 2, 'CV.pdf', 'd2.jpg', 'Sertifikat Keahlian.pdf', 'Ijazah1.pdf', 'Surat Kesehatan.pdf', '1', 'Marketing', '70', '80', '80'),
(5, '13121415', '123456', 'Kurnia Zai', 'dedi.kurnia@student.pelitaindonesia.ac.id', 'Pekanbaru', 'Pekanbaru', '1998-02-18', 22, '', 'SMA', 1, 'CV.pdf', 'd3.jpg', 'Sertifikat Keahlian.pdf', 'Ijazah1.pdf', 'Surat Kesehatan.pdf', '1', 'Marketing', '30', '80', '80'),
(6, '14121315', '123456', 'Tasya Aurora', 'aurora@gmail.com', 'Pekanbaru', 'Pekanbaru', '0005-12-11', 26, '+6281362289279', 'D3', 4, 'CV.pdf', 'agent2.jpg', 'Sertifikat Keahlian.pdf', 'Ijazah1.pdf', 'Surat Kesehatan.pdf', '1', 'Marketing', '90', '75', '100');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `parameter` text NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `parameter`, `nilai`) VALUES
(1, '>S2', '100'),
(2, 'S1', '85'),
(3, 'D3', '70'),
(4, 'SMA', '40'),
(5, 'Kurang dari SMA', '0'),
(6, 'SD', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id_pengalaman` int(10) NOT NULL,
  `parameter` varchar(25) NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id_pengalaman`, `parameter`, `nilai`) VALUES
(1, '>5', '100'),
(2, '4', '85'),
(3, '3', '75'),
(4, '2', '50'),
(5, '1', '20'),
(6, 'Kurang dari 1 tahun', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(150) NOT NULL,
  `b` varchar(150) NOT NULL,
  `c` varchar(150) NOT NULL,
  `d` varchar(150) NOT NULL,
  `knc_jawaban` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `knc_jawaban`) VALUES
(1, 'Sinonim : Merdeka = ', 'Pesta', 'Luas', 'Belenggu', 'Bebas', 'd'),
(2, 'Sinonim : Taraf = ', 'Jejak', 'Cacat', 'Derajat', 'Hidup', 'c'),
(3, 'Antonim : Terbenam ><', 'Pasti', 'Tenggelam', 'Terkatung', 'sial', 'b'),
(4, 'Antonim : Preman >< ', 'Pengawal', 'Dinas', 'Mafia', 'Sendiri', 'b'),
(5, 'Deret Angka : 4 3 8 6 16 12', '47', '32', '48', '49', 'b'),
(6, 'Deret Angka : 192 192 96 32 ', '4', '6', '8', '10', 'c'),
(7, 'Jika Jakarta adalah kuda, surabaya adalah sapi, dan makasar adalah', 'Ayam', 'Kelelawar', 'Harimau', 'Gelatik', 'c'),
(8, 'Nilai siapakah yang lebih tinggi dari soal berikut di bawah: Nilai Bima lebih jelek dari nilai Ema. Nilai Dian lebih bagus dari nilai Ali. Nilai Bima lebih bagus dari nilai Citra. Nilai Adit sama besar seperti nilai Bima. Nilai Ema lebih kecil dari nilai Dian', 'Baju Budi', 'Baju Andi', 'Baju Charly', 'Baju Dani', 'a'),
(9, 'Bunga manakah yang paling indah dari soal berikut: Bunga Melati sama indahnya seperti bunga Mawar. Bunga Bakung tidak seindah bunga melati. Bunga Mawar tidak seindah bunga sakura. Bunga Melati lebih indah dari bunga Bakung', 'Mawar', 'Bakung', 'Melati', 'Sakura', 'd'),
(10, 'Semua pekerja harus mengenakan topi pengaman. Sementara pekerja mengenakan sarung tangan.', 'Sementara pekerja tidak mengenakan topi pengaman', 'Semua pekerja tidak mengenakan sarung tangan', 'Sementara pekerja mengenakan topi pengaman dan sarung tangan', 'Sementara pekerja tidak mengenakan topi pengaman dan mengenakan sarung tangan', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `usia`
--

CREATE TABLE `usia` (
  `id_usia` int(11) NOT NULL,
  `parameter` varchar(20) NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usia`
--

INSERT INTO `usia` (`id_usia`, `parameter`, `nilai`) VALUES
(1, 'Kurang dari 22', '0'),
(2, '22-25', '80'),
(3, '26-30', '100'),
(4, '31-35', '60'),
(5, 'Lebih dari 35', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`),
  ADD UNIQUE KEY `id_pelamar` (`id_pelamar`);

--
-- Indexes for table `job_list`
--
ALTER TABLE `job_list`
  ADD PRIMARY KEY (`id_job`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `usia`
--
ALTER TABLE `usia`
  ADD PRIMARY KEY (`id_usia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `job_list`
--
ALTER TABLE `job_list`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id_pengalaman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `usia`
--
ALTER TABLE `usia`
  MODIFY `id_usia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
