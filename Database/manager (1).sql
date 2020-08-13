-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 08, 2020 lúc 06:49 AM
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
-- Cơ sở dữ liệu: `manager`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `ID_login` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`ID_login`, `email`, `password`) VALUES
(20, 'admin@gmail.com', '123456'),
(33, 'Dmanh1628@gmail.com', '4'),
(34, 'manhdinh949@gmail.com', '12'),
(35, 'manh@gmail.com', '6'),
(36, 'jglyrics2000@gmail.com', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanhang`
--

CREATE TABLE `nhanhang` (
  `ID_sp` int(11) NOT NULL,
  `sanpham` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanhang`
--

INSERT INTO `nhanhang` (`ID_sp`, `sanpham`) VALUES
(2, 'Serum');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quequan`
--

CREATE TABLE `quequan` (
  `ID_Add` int(11) NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `quequan`
--

INSERT INTO `quequan` (`ID_Add`, `address`) VALUES
(25, 'Long Xuyên'),
(27, 'Berlin'),
(29, 'Thanh Hóa'),
(30, 'Cà Mau');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gender` varchar(6) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `nativeland` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `interests` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `register`
--

INSERT INTO `register` (`ID`, `fullname`, `email`, `phone`, `password`, `gender`, `nativeland`, `interests`) VALUES
(24, 'Admin', 'admin@gmail.com', 332389323, '123456', 'female', 'Hà Nội', 'Football'),
(39, 'Mạnh', 'manh@gmail.com', 332389323, '123456', 'female', 'Hà Nội', 'FootballGameMusic'),
(40, 'Đinh Văn Mạnh', 'jglyrics2000@gmail.com', 123456, '123456', 'female', 'Long An', 'FootballGameMusicDrawTravel');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `name` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `category` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `money` int(11) NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `picture` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`name`, `code`, `category`, `money`, `description`, `picture`) VALUES
('Serum', 'L2', 'choice category', 2000000, 'Object1.gif', 'Object1.gif'),
('Picture', 'P06', 'DAW', 700000, 'Đây là một bức ảnh ! ', 'lak.gif');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID_login`);

--
-- Chỉ mục cho bảng `nhanhang`
--
ALTER TABLE `nhanhang`
  ADD PRIMARY KEY (`ID_sp`);

--
-- Chỉ mục cho bảng `quequan`
--
ALTER TABLE `quequan`
  ADD PRIMARY KEY (`ID_Add`);

--
-- Chỉ mục cho bảng `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `ID_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `nhanhang`
--
ALTER TABLE `nhanhang`
  MODIFY `ID_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `quequan`
--
ALTER TABLE `quequan`
  MODIFY `ID_Add` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
