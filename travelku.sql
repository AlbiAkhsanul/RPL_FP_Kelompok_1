-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2024 at 09:15 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `travelku`
--

-- --------------------------------------------------------

--
-- Table structure for table `metode_transaksi`
--

CREATE TABLE `metode_transaksi` (
    `ID_METODE` int NOT NULL,
    `NAMA_METODE` varchar(20) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

--
-- Dumping data for table `metode_transaksi`
--

INSERT INTO
    `metode_transaksi` (`ID_METODE`, `NAMA_METODE`)
VALUES (1, 'OVO'),
    (2, 'Dana'),
    (3, 'Gopay'),
    (4, 'BNI'),
    (5, 'BCA'),
    (6, 'BRI'),
    (7, 'Band Mandiri');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
    `ID_MOBIL` int NOT NULL,
    `JENIS_MOBIL` varchar(10) DEFAULT NULL,
    `NOPOL` varchar(15) DEFAULT NULL,
    `MERK` varchar(15) DEFAULT NULL,
    `TAHUN` int DEFAULT NULL,
    `FOTO_MOBIL` varchar(100) NOT NULL,
    `KAPASITAS_PENUMPANG` smallint DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO
    `mobil` (
        `ID_MOBIL`,
        `JENIS_MOBIL`,
        `NOPOL`,
        `MERK`,
        `TAHUN`,
        `FOTO_MOBIL`,
        `KAPASITAS_PENUMPANG`
    )
VALUES (
        2,
        'MPV',
        'sjhdgjahs',
        'Toyota',
        1234,
        'kucing2024-06-1673396286.jpeg',
        12
    );

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_rute`
--

CREATE TABLE `pesanan_rute` (
    `ID_PESANAN_RUTE` int NOT NULL,
    `ID_RUTE` int DEFAULT NULL,
    `ID_SUPIR` int DEFAULT NULL,
    `ID_MOBIL` int DEFAULT NULL,
    `TANGGAL_PESANAN_RUTE` date DEFAULT NULL,
    `TANGGAL_PERJALANAN` date DEFAULT NULL,
    `JUMLAH_PENUMPANG` int DEFAULT NULL,
    `WAKTU_PENJEMPUTAN` time NOT NULL,
    `WAKTU_PENURUNAN` time NOT NULL,
    `STATUS_PESANAN_RUTE` tinyint(1) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_user`
--

CREATE TABLE `pesanan_user` (
    `ID_PESANAN_USER` int NOT NULL,
    `ID_PESANAN_RUTE` int DEFAULT NULL,
    `ID_METODE` int DEFAULT NULL,
    `ID_RUTE` int DEFAULT NULL,
    `ID_USER` int DEFAULT NULL,
    `TANGGAL_PESANAN_USER` date DEFAULT NULL,
    `TANGGAL_PERJALANAN` date DEFAULT NULL,
    `TANGGAL_TRANSAKSI` date DEFAULT NULL,
    `TOTAL_HARGA` bigint DEFAULT NULL,
    `STATUS_TRANSAKSI` tinyint(1) DEFAULT NULL,
    `ALAMAT_PENJEMPUTAN` varchar(50) DEFAULT NULL,
    `ALAMAT_PENURUNAN` varchar(50) DEFAULT NULL,
    `STATUS_PESANAN_USER` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
    `ID_RUTE` int NOT NULL,
    `NAMA_RUTE` varchar(20) DEFAULT NULL,
    `ASAL` varchar(20) DEFAULT NULL,
    `TUJUAN` varchar(20) DEFAULT NULL,
    `HARGA` int NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rute`
--

INSERT INTO
    `rute` (
        `ID_RUTE`,
        `NAMA_RUTE`,
        `ASAL`,
        `TUJUAN`,
        `HARGA`
    )
VALUES (
        1,
        'Surabaya-Malang',
        'Surabaya ',
        'Malang ',
        140000
    ),
    (
        2,
        'Malang-Surabaya',
        'Malang',
        'Surabaya',
        140000
    ),
    (
        3,
        'Surabaya-Jombang',
        'Surabaya',
        'Jombang',
        110000
    ),
    (
        4,
        'Jombang-Surabaya',
        'Jombang',
        'Surabaya',
        110000
    );

-- --------------------------------------------------------

--
-- Table structure for table `supir`
--

CREATE TABLE `supir` (
    `ID_SUPIR` int NOT NULL,
    `NAMA` varchar(50) DEFAULT NULL,
    `NO_TELP` varchar(15) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
    `ID_USER` int NOT NULL,
    `NAMA` varchar(50) DEFAULT NULL,
    `NO_TELP` varchar(15) DEFAULT NULL,
    `EMAIL_USER` varchar(50) DEFAULT NULL,
    `PASSWORD` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
    `IS_ADMIN` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO
    `user` (
        `ID_USER`,
        `NAMA`,
        `NO_TELP`,
        `EMAIL_USER`,
        `PASSWORD`,
        `IS_ADMIN`
    )
VALUES (
        2,
        'Admin Rill',
        '12345',
        'admin@gmail.com',
        '$2y$10$un3k5ikAkF/g5PKYOXKmjux6WVhEpvKzR9k8RipL635Ze2BCPeI1q',
        1
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `metode_transaksi`
--
ALTER TABLE `metode_transaksi` ADD PRIMARY KEY (`ID_METODE`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil` ADD PRIMARY KEY (`ID_MOBIL`);

--
-- Indexes for table `pesanan_rute`
--
ALTER TABLE `pesanan_rute`
ADD PRIMARY KEY (`ID_PESANAN_RUTE`),
ADD KEY `FK_PESANAN_RUTE_MEMILIKI_KENDARAAN` (`ID_MOBIL`),
ADD KEY `FK_PESANAN_RUTE_MEMILIKI_RUTE` (`ID_RUTE`),
ADD KEY `FK_PESANAN_RUTE_MEMILIKI_SUPIR` (`ID_SUPIR`);

--
-- Indexes for table `pesanan_user`
--
ALTER TABLE `pesanan_user`
ADD PRIMARY KEY (`ID_PESANAN_USER`),
ADD KEY `FK_PESANAN_RUTE_MEMILIKI_PESANAN_USER` (`ID_PESANAN_RUTE`),
ADD KEY `FK_PESANAN_USER_MEMILIH_MEOTDE_TRANSAKSI` (`ID_METODE`),
ADD KEY `FK_PESANAN_USER_MEMILIKI_RUTE` (`ID_RUTE`),
ADD KEY `FK_USER_MEMBUAT_PESANAN` (`ID_USER`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute` ADD PRIMARY KEY (`ID_RUTE`);

--
-- Indexes for table `supir`
--
ALTER TABLE `supir` ADD PRIMARY KEY (`ID_SUPIR`);

--
-- Indexes for table `user`
--
ALTER TABLE `user` ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `metode_transaksi`
--
ALTER TABLE `metode_transaksi`
MODIFY `ID_METODE` int NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 8;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
MODIFY `ID_MOBIL` int NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT for table `pesanan_rute`
--
ALTER TABLE `pesanan_rute`
MODIFY `ID_PESANAN_RUTE` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan_user`
--
ALTER TABLE `pesanan_user`
MODIFY `ID_PESANAN_USER` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
MODIFY `ID_RUTE` int NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 5;

--
-- AUTO_INCREMENT for table `supir`
--
ALTER TABLE `supir` MODIFY `ID_SUPIR` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `ID_USER` int NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan_rute`
--
ALTER TABLE `pesanan_rute`
ADD CONSTRAINT `FK_PESANAN_RUTE_MEMILIKI_KENDARAAN` FOREIGN KEY (`ID_MOBIL`) REFERENCES `mobil` (`ID_MOBIL`) ON DELETE RESTRICT ON UPDATE RESTRICT,
ADD CONSTRAINT `FK_PESANAN_RUTE_MEMILIKI_RUTE` FOREIGN KEY (`ID_RUTE`) REFERENCES `rute` (`ID_RUTE`) ON DELETE RESTRICT ON UPDATE RESTRICT,
ADD CONSTRAINT `FK_PESANAN_RUTE_MEMILIKI_SUPIR` FOREIGN KEY (`ID_SUPIR`) REFERENCES `supir` (`ID_SUPIR`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `pesanan_user`
--
ALTER TABLE `pesanan_user`
ADD CONSTRAINT `FK_PESANAN_RUTE_MEMILIKI_PESANAN_USER` FOREIGN KEY (`ID_PESANAN_RUTE`) REFERENCES `pesanan_rute` (`ID_PESANAN_RUTE`) ON DELETE RESTRICT ON UPDATE RESTRICT,
ADD CONSTRAINT `FK_PESANAN_USER_MEMILIH_MEOTDE_TRANSAKSI` FOREIGN KEY (`ID_METODE`) REFERENCES `metode_transaksi` (`ID_METODE`) ON DELETE RESTRICT ON UPDATE RESTRICT,
ADD CONSTRAINT `FK_PESANAN_USER_MEMILIKI_RUTE` FOREIGN KEY (`ID_RUTE`) REFERENCES `rute` (`ID_RUTE`) ON DELETE RESTRICT ON UPDATE RESTRICT,
ADD CONSTRAINT `FK_USER_MEMBUAT_PESANAN` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`) ON DELETE RESTRICT ON UPDATE RESTRICT;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;