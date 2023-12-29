-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 02:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `file_type` varchar(100) DEFAULT NULL,
  `file_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id`, `name`, `file_name`, `file_type`, `file_path`) VALUES
(4, 'SK domisili', 'LEMBAR-VALIDASI.pdf', 'application/pdf', './uploads/LEMBAR-VALIDASI.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `fasilitas` varchar(100) DEFAULT NULL,
  `jml_fasilitas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `fasilitas`, `jml_fasilitas`) VALUES
(1, 'Kasur', '10 buah'),
(2, 'Kipas Angin', '3 buah'),
(3, 'Lemari Pakaian', '2 buah'),
(4, 'Springbed', '1 buah'),
(5, 'Bantal', '20 buah'),
(6, 'Kompor Masak', '3 buah'),
(7, 'Dispenser', '2 buah'),
(8, 'Kursi Roda', '1 buah'),
(9, 'Stroller Bayi', '1 buah'),
(10, 'Televisi LED', '1 buah'),
(11, 'Komputer', '1 buah'),
(12, 'Lemari ATK', '1 buah'),
(13, 'Motor Dinas (Honda Beat)', '1 buah');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `profile` text NOT NULL,
  `s_kelurahan` varchar(225) NOT NULL,
  `s_lpm` varchar(225) NOT NULL,
  `s_linmas` varchar(225) NOT NULL,
  `s_pemuda` varchar(225) NOT NULL,
  `k_rtrw` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `profile`, `s_kelurahan`, `s_lpm`, `s_linmas`, `s_pemuda`, `k_rtrw`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aspernatur natus rerum dolore. Animi qui, eaque delectus, aperiam illo hic est repellendus pariatur modi iste nemo eius! Asperiores, deleniti ut. Consequatur excepturi optio, harum laborum culpa sint quo veniam perspiciatis in sapiente deleniti inventore nesciunt commodi. Aspernatur error id dignissimos laborum sunt. Ipsa perferendis quis placeat dolorem! Id, eveniet beatae. Porro eos debitis fuga nemo mollitia ratione maiores rerum voluptate sapiente quos, aliquid nesciunt laboriosam accusamus laborum. Vero, aperiam totam. Voluptas, impedit dolor fugiat reprehenderit quod aliquam labore unde illum?\n<br><br>\n       Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel fugiat animi nobis, quod inventore repudiandae odit iure ut porro officia ipsam, voluptates repellat adipisci aperiam, dignissimos nostrum dolorem ratione autem.\n Excepturi, possimus, veritatis tempora est omnis id totam in laboriosam maxime accusamus repellat incidunt, laborum similique odit itaque! Nesciunt, saepe aut inventore non ullam repudiandae rem. Officia commodi laborum omnis.', 'struktur_2.JPG', 'IMG_20231228_131837.jpg', 'Screenshot_from_2020-09-12_23-55-35.png', 'girl_silhouette_lonely_164516_3840x2160.jpg', 'magic_ball_library_columns_castle_63093_1920x1080.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `iventaris`
--

CREATE TABLE `iventaris` (
  `id_kamar` int(11) NOT NULL,
  `kamar` varchar(100) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `iventaris`
--

INSERT INTO `iventaris` (`id_kamar`, `kamar`, `status`) VALUES
(9, 'Kamar-1', '2'),
(13, 'Kamar-2', '1'),
(14, 'Kamar-3', '1'),
(15, 'Kamar-4', '1'),
(16, 'Kamar-5', '1'),
(26, 'Kamar-6', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `no_bpjs` varchar(100) NOT NULL,
  `poli_tujuan` varchar(100) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id`, `nama`, `jk`, `alamat`, `tgl_masuk`, `no_bpjs`, `poli_tujuan`, `tgl_keluar`, `keterangan`) VALUES
(1, 'saddat', 'L', 'majene', '2023-12-15', '123456789', 'tumor', '2023-12-16', 'pulang');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `nip`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `foto`, `no_hp`, `jabatan`, `pendidikan`) VALUES
(3, 'Fauzi Ihsan', '111', 'Muara Bungkal', '2016-10-10', 'Siak', 'IMG-20201007-WA0007.jpg', '08', 'Mahasiswa', 'S6'),
(4, 'Alex', '789', 'Pku', '2016-10-10', 'Tampan', 'P_20200914_105232_HDR.jpg', '080', 'Kaur Pemerintahan', 'S10');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tmpt_lhr` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `no_hp`, `tmpt_lhr`, `tgl_lhr`, `pekerjaan`, `alamat`, `rt`, `rw`) VALUES
('10987654321', 'Alif', '081952215980', '', '0000-00-00', '', '', 0, 0),
('116511', 'Rifki Ilmi', '0882443818', '', '0000-00-00', '', '', 0, 0),
('1221345678910', 'Rifaldi', '081923458791', '', '0000-00-00', '', '', 0, 0),
('123456789', 'Anton', '081952215980', '', '0000-00-00', '', '', 0, 0),
('1234567890', 'saddad', '62 852-4347-4135', '', '0000-00-00', '', '', 0, 0),
('1234567891000', 'Alif', '081952215980', 'jl.perintis', '2000-10-10', 'PNS', 'jl.perintis', 3, 2),
('1234567891010101', 'saldin', '0897632', '', '0000-00-00', '', '', 0, 0),
('12354', 'ratna', '+62 852-4347-4135', '', '0000-00-00', '', '', 0, 0),
('1262332', 'Ikus', '08646757', '', '0000-00-00', '', '', 0, 0),
('1547', 'Inggih Permono', '0987655456', 'Ujung Kulon', '1987-10-10', 'IUVDGVH', 'Jl. Inttah', 6, 6),
('192618', 'Hengki Wibana', '0972655112', 'Durian Jatuh', '1998-10-10', 'Copet', 'Jl. enten', 1, 12),
('197646', 'Suntel', '0846563783', '', '0000-00-00', '', '', 0, 0),
('7404251804000002', 'mursidin', '081952215980', '', '0000-00-00', '', '', 0, 0),
('7891234567', 'Rizal Mulk', '081952215980', '', '0000-00-00', '', '', 0, 0),
('987654321', 'Arifin', '1234567', '', '0000-00-00', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `id` varchar(100) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `jenis_surat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(225) NOT NULL,
  `surat_rujukan` varchar(255) NOT NULL,
  `tujuan_rs` varchar(100) NOT NULL,
  `rencana_masuk` date DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_surat`
--

INSERT INTO `pengajuan_surat` (`id`, `NIK`, `jenis_surat`, `tanggal`, `file`, `surat_rujukan`, `tujuan_rs`, `rencana_masuk`, `status`) VALUES
('1221345678910', '1221345678910', 'RSP-K1', '2023-12-28', 'RSP-K1658d08610d1d0099.jpg', 'RSP-K1658d08610d1d00991.jpg', 'RS Masyita', '2023-12-29', '4');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `nama_surat_keluar` varchar(100) NOT NULL,
  `tanggal_surat_keluar` date NOT NULL,
  `keterangan_surat_keluar` varchar(100) NOT NULL,
  `file_surat_keluar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `surat_keterangan`
--

CREATE TABLE `surat_keterangan` (
  `id_surat_keterangan` int(11) NOT NULL,
  `nama_surat_keterangan` varchar(100) NOT NULL,
  `tanggal_surat_keterangan` date NOT NULL,
  `keterangan_surat_keterangan` varchar(100) NOT NULL,
  `file_surat_keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin123', '$2y$10$DHRQhdFFyY9Euxj7iyuVxuux2f6CqiYND/XeqmukMO2ci6vCh/1zW', 'administrator'),
(5, 'pegawai12', '$2y$10$D1NIsBtME/NuuAEeP5sKF.lTfddHvhegvoyBHOk5owAtRL707mU72', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iventaris`
--
ALTER TABLE `iventaris`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indexes for table `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  ADD PRIMARY KEY (`id_surat_keterangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iventaris`
--
ALTER TABLE `iventaris`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  MODIFY `id_surat_keterangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
