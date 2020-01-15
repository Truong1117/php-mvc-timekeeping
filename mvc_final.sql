-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2020 lúc 03:38 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mvc_final`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chamcong`
--

CREATE TABLE `chamcong` (
  `id` int(11) NOT NULL,
  `Ngay_CC` date NOT NULL,
  `MaNV` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Time_log` time NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chamcong`
--

INSERT INTO `chamcong` (`id`, `Ngay_CC`, `MaNV`, `Time_log`, `Status`) VALUES
(1, '2020-01-08', 'NV02', '21:43:32', 1),
(2, '2020-01-09', 'NV02', '22:51:21', 1),
(3, '2020-01-07', 'NV02', '09:06:35', 1),
(4, '2019-02-10', 'NV02', '09:23:57', 1),
(5, '2020-01-11', 'NV02', '10:06:17', 1),
(6, '2020-01-12', 'NV02', '16:39:27', 1),
(8, '2020-01-06', 'NV02', '09:20:05', 1),
(9, '2020-01-01', 'NV02', '09:20:53', 1),
(13, '2020-01-05', 'NV02', '11:56:41', 1),
(14, '2020-01-02', 'NV02', '15:49:40', 1),
(15, '2020-01-04', 'NV02', '15:51:39', 1),
(20, '2020-01-13', 'NV02', '22:42:32', 1),
(22, '2020-01-14', 'NV03', '08:49:48', 1),
(26, '2019-03-08', 'NV01', '21:43:32', 1),
(27, '2019-04-08', 'NV01', '21:43:32', 1),
(28, '2019-05-08', 'NV01', '21:43:32', 1),
(29, '2019-06-08', 'NV01', '21:43:32', 1),
(30, '2019-07-08', 'NV01', '21:43:32', 1),
(31, '2019-08-08', 'NV01', '21:43:32', 1),
(32, '2019-09-08', 'NV01', '21:43:32', 1),
(33, '2019-10-08', 'NV01', '21:43:32', 1),
(34, '2019-11-08', 'NV01', '21:43:32', 1),
(35, '2019-12-08', 'NV01', '21:43:32', 1),
(37, '2020-01-15', 'NV02', '11:21:43', 1),
(39, '2020-01-15', 'NV01', '11:29:04', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `id` int(11) NOT NULL,
  `MaCV` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenCV` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`id`, `MaCV`, `TenCV`) VALUES
(1, 'CV01', 'Boss'),
(2, 'CV02', 'Trưởng phòng'),
(3, 'CV03', 'Phó phòng'),
(4, 'CV04', 'Trưởng khoa'),
(5, 'CV05', 'Phó khoa'),
(7, 'CV06', 'Nhân viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhansu`
--

CREATE TABLE `nhansu` (
  `id` int(11) NOT NULL,
  `MaNV` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `TenNV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Matkhau_DN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Ngaysinh` date NOT NULL,
  `Quequan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Gioitinh` tinyint(1) NOT NULL,
  `Dantoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `MaPB` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `MaCV` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Mucluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhansu`
--

INSERT INTO `nhansu` (`id`, `MaNV`, `TenNV`, `Matkhau_DN`, `Ngaysinh`, `Quequan`, `Gioitinh`, `Dantoc`, `SDT`, `MaPB`, `MaCV`, `Mucluong`) VALUES
(1, 'admin', 'Đồng Văn Trường', '', '1997-11-17', 'Hội An', 1, 'Kinh', 33333, 'Geo', 'CV01', 0),
(2, 'NV02', 'Đồng Văn Hậu', '', '1997-07-11', 'Hội An', 1, 'Kinh', 33333, 'Geo', 'CV01', 0),
(4, 'NV01', 'Đồng Văn Giáp', '', '1997-07-11', 'Quảng Nam', 0, 'Thái', 932119281, 'Lang', 'CV05', 77777777),
(5, 'NV03', 'Đồng Văn Văn', '', '2023-01-11', 'Hội An', 0, 'Kinh', 123456789, 'Lang', 'CV02', 444444444);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `id` int(11) NOT NULL,
  `MaPB` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `TenPB` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`id`, `MaPB`, `TenPB`, `SDT`) VALUES
(16, 'Geo', 'Địa lý', 33333),
(17, 'His', 'Lịch sử', 444444),
(18, 'Phys', 'Vật lý', 1111111),
(20, 'Lang', 'Ngoại ngữ', 11111111),
(21, 'Chem', 'Hóa học', 2222222),
(22, 'Bio', 'Sinh học', 3333333),
(23, 'Gym', 'Thể dục', 4444444),
(24, 'Phil', 'Ngữ văn', 5555555);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongke`
--

CREATE TABLE `thongke` (
  `id` int(11) NOT NULL,
  `MaTK` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ThangTK` int(2) NOT NULL,
  `NamTK` year(4) NOT NULL,
  `Tong_NV` int(11) NOT NULL,
  `Tong_KCC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongke`
--

INSERT INTO `thongke` (`id`, `MaTK`, `ThangTK`, `NamTK`, `Tong_NV`, `Tong_KCC`) VALUES
(38, '', 2, 2019, 3, 81),
(39, '', 1, 2020, 3, 48),
(40, '', 1, 2019, 3, 90),
(41, '', 3, 2019, 3, 90),
(42, '', 4, 2019, 3, 87),
(43, '', 5, 2019, 3, 90),
(44, '', 6, 2019, 3, 87),
(45, '', 7, 2019, 3, 90),
(46, '', 8, 2019, 3, 90),
(47, '', 9, 2019, 3, 87),
(48, '', 10, 2019, 3, 90),
(49, '', 11, 2019, 3, 87),
(50, '', 12, 2019, 3, 90);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'NV02', 'c4ca4238a0b923820dcc509a6f75849b', 2),
(4, 'NV01', 'c4ca4238a0b923820dcc509a6f75849b', 2),
(5, 'NV03', 'c4ca4238a0b923820dcc509a6f75849b', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chamcong`
--
ALTER TABLE `chamcong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaCV` (`MaCV`);

--
-- Chỉ mục cho bảng `nhansu`
--
ALTER TABLE `nhansu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaNV` (`MaNV`),
  ADD KEY `MaPB` (`MaPB`),
  ADD KEY `MaCV` (`MaCV`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaPB` (`MaPB`);

--
-- Chỉ mục cho bảng `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chamcong`
--
ALTER TABLE `chamcong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `nhansu`
--
ALTER TABLE `nhansu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `phongban`
--
ALTER TABLE `phongban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `thongke`
--
ALTER TABLE `thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chamcong`
--
ALTER TABLE `chamcong`
  ADD CONSTRAINT `chamcong_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhansu` (`MaNV`);

--
-- Các ràng buộc cho bảng `nhansu`
--
ALTER TABLE `nhansu`
  ADD CONSTRAINT `nhansu_ibfk_1` FOREIGN KEY (`MaCV`) REFERENCES `chucvu` (`MaCV`),
  ADD CONSTRAINT `nhansu_ibfk_2` FOREIGN KEY (`MaPB`) REFERENCES `phongban` (`MaPB`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id`) REFERENCES `nhansu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
