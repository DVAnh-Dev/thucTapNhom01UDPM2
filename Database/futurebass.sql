-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 08, 2020 lúc 06:48 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `futurebass`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `account` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `money` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `addresss` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `job` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `study` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `learned` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `background` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `addressjob` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`ID`, `username`, `password`, `account`, `money`, `fullname`, `addresss`, `job`, `study`, `learned`, `avatar`, `background`, `addressjob`) VALUES
(777, 'mar777', '777', 'Marco ', '7900000', 'Mar', 'Tokyo', 'Deginer', '', '', 'Astronust.jpg', 'background4.jpg', 'Dzus Records'),
(20112000, 'manh20112000', '123456', 'E S S K E E T I T', '12000000', 'Đinh Văn Mạnh', 'Hà Nội', 'Producer', 'HACTECH', 'THPT Mỹ Đức C', 'male.jpg', 'cyberpunk.jpg', 'Dzus Records'),
(31122000, 'quynh31122005', '1', 'Quin', '10079000', 'Đinh Thị Như Quỳnh', 'Hà Nội', 'Admin', 'THPT Mỹ Đức C', 'THCS Hùng Tiến', 'female.jpg', 'background2.jpg', 'S i m p l e L o v e');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31122002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
