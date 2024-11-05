-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 05, 2024 at 03:53 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `idkhachang` int NOT NULL,
  `listsanpham` int NOT NULL COMMENT 'Chứa list danh sách được tích trong giỏ hàng nhấn mua, và đơn sản phẩm được chọn bên ngoài',
  `ghichu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietbill`
--

CREATE TABLE `chitietbill` (
  `id` int NOT NULL,
  `idkhachang` int NOT NULL,
  `listsanpham` int NOT NULL COMMENT 'Sản phẩm được gửi từ bill qua',
  `idbill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int NOT NULL,
  `users_id` int NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `SDT` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `countclick` int NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `iddanhmuc` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL,
  `type` int NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `countclick` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `action` int NOT NULL DEFAULT '0',
  `ban` int NOT NULL DEFAULT '0',
  `premium` int NOT NULL DEFAULT '0',
  `ngaythamgia` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `point` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `name`, `username`, `password`, `email`, `phone`, `action`, `ban`, `premium`, `ngaythamgia`, `point`) VALUES
(1, 'doquochuy', 'huydz', 'huyde', 'huydqph53310@gmail.com', '0123456789', 0, 0, 0, '2024-10-26 00:46:33', 0),
(2, 'doquochuy', 'huydz', 'huydz', '123', '0123456789', 0, 0, 0, '2024-10-26 00:46:33', 0),
(3, 'doquochuy', 'huydz', 'huyde', 'huydqph53310@gmail.com', '0123456789', 0, 0, 0, '2024-10-26 00:46:33', 0),
(4, 'doquochuy', 'Admin', '123', 'huy02112004@gmail.com', '0865720862', 0, 0, 0, '2024-10-26 00:46:33', 0),
(5, 'Bảo Hiểm', 'Nguyen Quoc Anh', '123', 'huy02112004@gmail.com', '0865720862', 0, 0, 0, '2024-10-26 00:46:33', 0),
(6, 'Đỗ Quốc Huy', 'Admin', '123', 'huy02112004@gmail.com', '0865720862', 0, 0, 0, '2024-10-26 00:46:33', 0),
(7, 'Đỗ Quốc Huy', 'Admin1', '12345', 'Admin.runsytem.mod@huydev.id.vn', '0865720862', 0, 0, 0, '2024-10-26 00:46:33', 0),
(8, 'Đỗ Quốc Huy', 'Admin1', '123456', '1.a@gmail.com', '0865720862', 0, 0, 0, '2024-10-26 00:46:33', 0),
(9, 'Đỗ Quốc Huy', 'Đỗ Quốc Huy', '123123', 'huy02112004@gmail.com', '0865720862', 0, 0, 0, '2024-10-26 00:46:33', 0),
(10, 'doquochuy', 'Nguyen Quoc Anh', '123', 'huy02112004@gmail.com', '0865720862', 0, 0, 0, '2024-10-26 00:46:33', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkhachang` (`idkhachang`);

--
-- Indexes for table `chitietbill`
--
ALTER TABLE `chitietbill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkhachang` (`idkhachang`),
  ADD KEY `idbill` (`idbill`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddanhmuc` (`iddanhmuc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD KEY `client` (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietbill`
--
ALTER TABLE `chitietbill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`idkhachang`) REFERENCES `users` (`users_id`);

--
-- Constraints for table `chitietbill`
--
ALTER TABLE `chitietbill`
  ADD CONSTRAINT `chitietbill_ibfk_1` FOREIGN KEY (`idkhachang`) REFERENCES `users` (`users_id`),
  ADD CONSTRAINT `chitietbill_ibfk_2` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`);

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
