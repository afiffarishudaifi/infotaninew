-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jan 2020 pada 15.23
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infotani`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `ID_DESA` int(11) NOT NULL,
  `NAMA_DESA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`ID_DESA`, `NAMA_DESA`) VALUES
(1, 'Sumber Jaya'),
(2, 'Sumber Sejahtera Muk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `ID_KECAMATAN` int(11) NOT NULL,
  `ID_DESA` int(11) DEFAULT NULL,
  `NAMA_KECAMATAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`ID_KECAMATAN`, `ID_DESA`, `NAMA_KECAMATAN`) VALUES
(1, 1, 'Sumber Makmur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komoditas`
--

CREATE TABLE `komoditas` (
  `ID_KOMODITAS` int(11) NOT NULL,
  `NAMA_KOMODITAS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komoditas`
--

INSERT INTO `komoditas` (`ID_KOMODITAS`, `NAMA_KOMODITAS`) VALUES
(1, 'Padi'),
(2, 'Jagung');

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan_jagung`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `laporan_jagung` (
`KTP` varchar(16)
,`NAMA_PETANI` varchar(30)
,`TGL_PANEN` date
,`NAMA_DESA` varchar(20)
,`NAMA_KECAMATAN` varchar(20)
,`HASIL` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan_padi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `laporan_padi` (
`KTP` varchar(16)
,`NAMA_PETANI` varchar(30)
,`TGL_PANEN` date
,`NAMA_DESA` varchar(20)
,`NAMA_KECAMATAN` varchar(20)
,`HASIL` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan_panen`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `laporan_panen` (
`KTP` varchar(16)
,`NAMA_PETANI` varchar(30)
,`TGL_PANEN` date
,`NAMA_DESA` varchar(20)
,`NAMA_KECAMATAN` varchar(20)
,`HASIL` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan_panen_user`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `laporan_panen_user` (
`ID_USER` int(11)
,`KTP` varchar(16)
,`NAMA_PETANI` varchar(30)
,`TGL_PANEN` date
,`NAMA_DESA` varchar(20)
,`NAMA_KOMODITAS` varchar(20)
,`NAMA_KECAMATAN` varchar(20)
,`HASIL` int(11)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `ID_LEVEL` int(11) NOT NULL,
  `NAMA_LEVEL` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`ID_LEVEL`, `NAMA_LEVEL`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Pengusaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `panen`
--

CREATE TABLE `panen` (
  `ID_PANEN` int(11) NOT NULL,
  `KTP` varchar(16) NOT NULL,
  `KOMODITAS` int(11) NOT NULL,
  `TGL_PANEN` date NOT NULL,
  `HASIL` int(11) NOT NULL,
  `HARGA` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `panen`
--

INSERT INTO `panen` (`ID_PANEN`, `KTP`, `KOMODITAS`, `TGL_PANEN`, `HASIL`, `HARGA`) VALUES
(3, '12133213', 1, '2019-12-27', 90, 10000),
(7, '1111', 1, '2020-01-09', 90, 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `ID_PESAN` int(11) NOT NULL,
  `ID_PERUSAHAAN` int(11) NOT NULL,
  `KTP` varchar(16) NOT NULL,
  `TANGGAL` date NOT NULL,
  `JUMLAH_PESAN` int(11) NOT NULL,
  `TOTAL_BIAYA` bigint(20) NOT NULL,
  `ID_PESAN_STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`ID_PESAN`, `ID_PERUSAHAAN`, `KTP`, `TANGGAL`, `JUMLAH_PESAN`, `TOTAL_BIAYA`, `ID_PESAN_STATUS`) VALUES
(1, 7, '34234', '2020-01-10', 90, 12000, 2),
(7, 7, '12133213', '2020-01-11', 5, 50000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `ID_PERUSAHAAN` int(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `SIUP` varchar(18) NOT NULL,
  `LOGO` varchar(18) NOT NULL,
  `NAMA_PERUSAHAAN` varchar(30) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `ALAMAT_PERUSAHAAN` varchar(40) NOT NULL,
  `NO_TELP_PERUSAHAAN` varchar(16) NOT NULL,
  `NAMA_MANAGER` varchar(20) NOT NULL,
  `ID_LEVEL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`ID_PERUSAHAAN`, `USERNAME`, `PASSWORD`, `SIUP`, `LOGO`, `NAMA_PERUSAHAAN`, `EMAIL`, `ALAMAT_PERUSAHAAN`, `NO_TELP_PERUSAHAAN`, `NAMA_MANAGER`, `ID_LEVEL`) VALUES
(3, 'afif', 'b56776aa98086825550ff0c3fe260907', '', '', 'afif jaya', 'afiffaris5@gmail.com', 'jember', '0834243', 'afif', 3),
(4, 'rafif', 'b92b52df66da4409b241dfbc244cd054', '', '09012020135040.jpg', 'rafif jaya', 'rafif@gmail.com', 'Jember', '8374323', 'Filiatno', 3),
(7, 'rizal', '150fb021c56c33f82eef99253eb36ee1', '09012020140937.jpg', '09012020145035.jpg', 'riz', 'rizal@gmail.com', 'Ponorogo', '8374323', 'Filiatno', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `ID_PESAN_STATUS` int(11) NOT NULL,
  `STATUS_PESAN` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`ID_PESAN_STATUS`, `STATUS_PESAN`) VALUES
(1, 'Belum Konfirmasi'),
(2, 'Sudah Konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petani`
--

CREATE TABLE `petani` (
  `KTP` varchar(16) NOT NULL,
  `ID_KECAMATAN` int(11) DEFAULT NULL,
  `ID_KOMODITAS` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_STATUS` int(11) NOT NULL,
  `NAMA_PETANI` varchar(30) DEFAULT NULL,
  `ALAMAT_PETANI` varchar(30) DEFAULT NULL,
  `LUAS_SAWAH` float DEFAULT NULL,
  `ALAMAT_SAWAH` varchar(30) DEFAULT NULL,
  `TANAM` date DEFAULT NULL,
  `PANEN` date DEFAULT NULL,
  `NO_HP` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petani`
--

INSERT INTO `petani` (`KTP`, `ID_KECAMATAN`, `ID_KOMODITAS`, `ID_USER`, `ID_STATUS`, `NAMA_PETANI`, `ALAMAT_PETANI`, `LUAS_SAWAH`, `ALAMAT_SAWAH`, `TANAM`, `PANEN`, `NO_HP`) VALUES
('111', 1, 1, 18, 2, 'sari', 'jember', 90, 'Jember', '2020-01-10', '2020-01-18', '934234'),
('1111', 1, 2, 19, 2, 'Rangga', 'jember', 90, 'Jember', '2020-01-08', '2020-01-10', '934234'),
('12133213', 1, 1, 15, 1, 'Akmal', 'Madiun', 90, 'Jember', '2019-12-27', '2019-12-27', '093747324'),
('34234', 1, 1, 12, 2, 'Anisa', 'jember', 90, 'Jember', '2020-01-09', '2020-01-24', '934234'),
('777', 1, 1, 17, 2, 'rafif', 'jember', 90, 'Jember', '2020-01-11', '2020-01-13', '934234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `ID_STATUS` int(11) NOT NULL,
  `STATUS` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`ID_STATUS`, `STATUS`) VALUES
(1, 'Panen'),
(2, 'Belum Panen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `ID_LEVEL` int(11) DEFAULT NULL,
  `USERNAME` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `FOTO_USER` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_USER`, `ID_LEVEL`, `USERNAME`, `PASSWORD`, `FOTO_USER`) VALUES
(4, 1, 'faris', '7d77e825b80cff62a72e680c1c81424f', '16122019040238.jpg'),
(12, 2, 'anisa', '40cc8f68f52757aff1ad39a006bfbf11', '20122019022402.jpg'),
(13, 2, 'akbar', '4f033a0a2bf2fe0b68800a3079545cd1', '20122019050258.jpg'),
(14, 1, 'akmali', '27774d42f344fdbb52fec4b822eb673b', '20122019122312.jpg'),
(15, 2, 'akmal', '272874d450b7f8381b1174133ac62b40', '21122019023157.jpg'),
(16, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL),
(17, 2, 'malla', 'ad84c15856970db1174778eb8aef174d', '08012020051800.jpg'),
(18, 2, 'sari', 'a87bcf310c4fdf2a80f2f3d97f1f9424', '08012020074003.jpg'),
(19, 2, 'rangga', '863c2a4b6bff5e22294081e376fc1f51', '08012020074433.jpg');

-- --------------------------------------------------------

--
-- Struktur untuk view `laporan_jagung`
--
DROP TABLE IF EXISTS `laporan_jagung`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_jagung`  AS  select `petani`.`KTP` AS `KTP`,`petani`.`NAMA_PETANI` AS `NAMA_PETANI`,`panen`.`TGL_PANEN` AS `TGL_PANEN`,`desa`.`NAMA_DESA` AS `NAMA_DESA`,`kecamatan`.`NAMA_KECAMATAN` AS `NAMA_KECAMATAN`,sum(`panen`.`HASIL`) AS `HASIL` from (((`panen` join `kecamatan`) join `desa`) join `petani`) where ((`desa`.`ID_DESA` = `kecamatan`.`ID_DESA`) and (`kecamatan`.`ID_KECAMATAN` = `petani`.`ID_KECAMATAN`) and (`petani`.`KTP` = `panen`.`KTP`) and (`panen`.`KOMODITAS` = 2)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `laporan_padi`
--
DROP TABLE IF EXISTS `laporan_padi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_padi`  AS  select `petani`.`KTP` AS `KTP`,`petani`.`NAMA_PETANI` AS `NAMA_PETANI`,`panen`.`TGL_PANEN` AS `TGL_PANEN`,`desa`.`NAMA_DESA` AS `NAMA_DESA`,`kecamatan`.`NAMA_KECAMATAN` AS `NAMA_KECAMATAN`,sum(`panen`.`HASIL`) AS `HASIL` from (((`panen` join `kecamatan`) join `desa`) join `petani`) where ((`desa`.`ID_DESA` = `kecamatan`.`ID_DESA`) and (`kecamatan`.`ID_KECAMATAN` = `petani`.`ID_KECAMATAN`) and (`petani`.`KTP` = `panen`.`KTP`) and (`panen`.`KOMODITAS` = 1)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `laporan_panen`
--
DROP TABLE IF EXISTS `laporan_panen`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_panen`  AS  select `petani`.`KTP` AS `KTP`,`petani`.`NAMA_PETANI` AS `NAMA_PETANI`,`panen`.`TGL_PANEN` AS `TGL_PANEN`,`desa`.`NAMA_DESA` AS `NAMA_DESA`,`kecamatan`.`NAMA_KECAMATAN` AS `NAMA_KECAMATAN`,sum(`panen`.`HASIL`) AS `HASIL` from (((`petani` join `panen`) join `desa`) join `kecamatan`) where ((`desa`.`ID_DESA` = `kecamatan`.`ID_DESA`) and (`kecamatan`.`ID_KECAMATAN` = `petani`.`ID_KECAMATAN`) and (`petani`.`KTP` = `panen`.`KTP`)) group by `petani`.`KTP` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `laporan_panen_user`
--
DROP TABLE IF EXISTS `laporan_panen_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_panen_user`  AS  select `petani`.`ID_USER` AS `ID_USER`,`petani`.`KTP` AS `KTP`,`petani`.`NAMA_PETANI` AS `NAMA_PETANI`,`panen`.`TGL_PANEN` AS `TGL_PANEN`,`desa`.`NAMA_DESA` AS `NAMA_DESA`,`komoditas`.`NAMA_KOMODITAS` AS `NAMA_KOMODITAS`,`kecamatan`.`NAMA_KECAMATAN` AS `NAMA_KECAMATAN`,`panen`.`HASIL` AS `HASIL` from ((((`petani` join `komoditas`) join `panen`) join `desa`) join `kecamatan`) where ((`komoditas`.`ID_KOMODITAS` = `petani`.`ID_KOMODITAS`) and (`kecamatan`.`ID_KECAMATAN` = `petani`.`ID_KECAMATAN`) and (`desa`.`ID_DESA` = `kecamatan`.`ID_DESA`) and (`petani`.`KTP` = `panen`.`KTP`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`ID_DESA`),
  ADD UNIQUE KEY `ID_DESA` (`ID_DESA`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`ID_KECAMATAN`),
  ADD UNIQUE KEY `ID_KECAMATAN` (`ID_KECAMATAN`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_DESA`);

--
-- Indexes for table `komoditas`
--
ALTER TABLE `komoditas`
  ADD PRIMARY KEY (`ID_KOMODITAS`),
  ADD UNIQUE KEY `ID_KOMODITAS` (`ID_KOMODITAS`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`ID_LEVEL`),
  ADD UNIQUE KEY `INDEX_1` (`ID_LEVEL`);

--
-- Indexes for table `panen`
--
ALTER TABLE `panen`
  ADD PRIMARY KEY (`ID_PANEN`),
  ADD KEY `KTP` (`KTP`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`ID_PESAN`),
  ADD KEY `ID_PERUSAHAAN` (`ID_PERUSAHAAN`),
  ADD KEY `KTP` (`KTP`),
  ADD KEY `ID_PESAN_STATUS` (`ID_PESAN_STATUS`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`ID_PERUSAHAAN`),
  ADD KEY `ID_LEVEL` (`ID_LEVEL`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`ID_PESAN_STATUS`);

--
-- Indexes for table `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`KTP`),
  ADD UNIQUE KEY `KTP` (`KTP`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_KECAMATAN`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_KOMODITAS`),
  ADD KEY `ID_USER` (`ID_USER`),
  ADD KEY `ID_STATUS` (`ID_STATUS`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID_STATUS`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD UNIQUE KEY `ID_USER` (`ID_USER`),
  ADD KEY `FK_RELATIONSHIP_8` (`ID_LEVEL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `ID_DESA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `ID_KECAMATAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komoditas`
--
ALTER TABLE `komoditas`
  MODIFY `ID_KOMODITAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `ID_LEVEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `panen`
--
ALTER TABLE `panen`
  MODIFY `ID_PANEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `ID_PESAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `ID_PERUSAHAAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `ID_PESAN_STATUS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `ID_STATUS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_DESA`) REFERENCES `desa` (`ID_DESA`);

--
-- Ketidakleluasaan untuk tabel `panen`
--
ALTER TABLE `panen`
  ADD CONSTRAINT `panen_ibfk_1` FOREIGN KEY (`KTP`) REFERENCES `petani` (`KTP`);

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`ID_PERUSAHAAN`) REFERENCES `perusahaan` (`ID_PERUSAHAAN`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`KTP`) REFERENCES `petani` (`KTP`),
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`ID_PESAN_STATUS`) REFERENCES `pesan` (`ID_PESAN_STATUS`);

--
-- Ketidakleluasaan untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `perusahaan_ibfk_1` FOREIGN KEY (`ID_LEVEL`) REFERENCES `level` (`ID_LEVEL`);

--
-- Ketidakleluasaan untuk tabel `petani`
--
ALTER TABLE `petani`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_KECAMATAN`) REFERENCES `kecamatan` (`ID_KECAMATAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_KOMODITAS`) REFERENCES `komoditas` (`ID_KOMODITAS`),
  ADD CONSTRAINT `petani_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `petani_ibfk_2` FOREIGN KEY (`ID_STATUS`) REFERENCES `status` (`ID_STATUS`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`ID_LEVEL`) REFERENCES `level` (`ID_LEVEL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
