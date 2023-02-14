-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 06, 2022 lúc 04:37 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbangiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int(11) NOT NULL,
  `hoadon_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `hoadon_id`, `sp_id`, `soluong`, `gia`) VALUES
(56, 58, 23, 1, 1580000),
(57, 59, 25, 1, 1250000),
(58, 60, 25, 1, 1250000),
(59, 61, 41, 1, 7814650);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaipk`
--

CREATE TABLE `loaipk` (
  `loai_id` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaipk`
--

INSERT INTO `loaipk` (`loai_id`, `tenloai`) VALUES
(1, 'Dây giày'),
(2, 'Lót giày'),
(3, 'Lót giày'),
(4, 'Tất');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlyhoadon`
--

CREATE TABLE `quanlyhoadon` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `sdt` int(11) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `thoigian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quanlyhoadon`
--

INSERT INTO `quanlyhoadon` (`id`, `tenkh`, `sdt`, `gmail`, `diachi`, `ghichu`, `tongtien`, `thoigian`) VALUES
(58, 'Đinh Duy Long', 369276410, 'dlong5782@gmail.com', 'Hà Nội', 'AASASDSADSDS', 1580000, 1638155846),
(59, 'Đỗ Minh Hoàn', 369276410, 'dlong5782@gmail.com', 'Hà Nội', 'aaaaaaaaaaaaa', 1250000, 1638155904),
(60, 'Long', 78513165, 'dlong5782@gmail.com', 'Hà Nội', 'ahihi', 1250000, 1640220144),
(61, 'hiuhiu', 7867875, 'tỵy', 'ưqwqdasd', 'huhu', 7814650, 1640220359);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlykhachhang`
--

CREATE TABLE `quanlykhachhang` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `sdt` int(11) NOT NULL,
  `gmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quanlykhachhang`
--

INSERT INTO `quanlykhachhang` (`id`, `taikhoan`, `matkhau`, `hoten`, `diachi`, `sdt`, `gmail`) VALUES
(22, 'Long', '123', 'Đinh Duy Long', 'Hà Nội', 2147483647, 'dlong5782@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlyphukien`
--

CREATE TABLE `quanlyphukien` (
  `pk_id` int(11) NOT NULL,
  `mapk` varchar(50) NOT NULL,
  `tenpk` varchar(50) NOT NULL,
  `hinhanhpk` varchar(255) NOT NULL,
  `mota` varchar(500) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `loai_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quanlyphukien`
--

INSERT INTO `quanlyphukien` (`pk_id`, `mapk`, `tenpk`, `hinhanhpk`, `mota`, `gia`, `soluong`, `loai_id`) VALUES
(2, 'day1', 'Dây giày kem xốp đầu đỏ', 'daygiaykemxopdaudo.jpg', 'Màu trắng', 30000, 10, 1),
(3, 'day2', 'Dây giày xanh lá nhạt', 'daygiayxanhlanhat.jpg', 'Màu xanh', 30000, 10, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlysanpham`
--

CREATE TABLE `quanlysanpham` (
  `sp_id` int(11) NOT NULL,
  `masp` varchar(50) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `th_id` int(11) NOT NULL,
  `mota` varchar(500) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `hinh1` varchar(255) NOT NULL,
  `hinh2` varchar(255) NOT NULL,
  `hinh3` varchar(255) NOT NULL,
  `gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quanlysanpham`
--

INSERT INTO `quanlysanpham` (`sp_id`, `masp`, `tensp`, `th_id`, `mota`, `soluong`, `hinhanh`, `hinh1`, `hinh2`, `hinh3`, `gia`) VALUES
(19, 'Nike8', 'Nike Air More Uptempo GS Dark Stucco', 1, 'Đẹp', 3, 'Uptempo.jpg', '', '', '', 1200000),
(21, 'Nike7', 'Air Jordan 1 x Dior Low Cổ Cao hàng Like Auth', 1, 'Màu xanh', 10, 'jd4.jpg', '', '', '', 2100000),
(22, 'Nike 2', 'Giày Nike Air Force 1– AF1 All White Trắng Rep 1:1', 1, 'Đẹp', 10, 'giay-nike-air-force.jpg', '', '', '', 1340000),
(23, 'Nike 1', 'Nike Air Jordan 1 Retro High OG University Rep 1:1', 9, 'Màu xanh', 100, 'jd2.jpg', '', '', '', 1580000),
(24, 'Nike JD10', 'Air Jordan 1 Mid White Obsidian Rep 1:1', 9, 'Đẹp', 100, 'Air Jordan 1 Mid White Obsidian.jpg', '', '', '', 1250000),
(25, 'Nike JD11', 'Giày Jordan 7 Màu 1 Nike Air Jordan 1 Mid SE Multi', 9, 'Đẹp', 100, 'Giày Jordan 7 Màu 1 Nike Air Jordan 1 Mid SE Multi Color.jpg', '', '', '', 1250000),
(26, 'Nike JD12', 'Giày Nike Air Jordan 1 Chicago Off White Pk God', 9, 'Đẹp', 100, 'Giày Nike Air Jordan 1 Chicago Off White Pk God.jpg', '', '', '', 1525000),
(27, 'Nike JD13', 'Giày Nike Air Jordan 1 Digital Pink Rep 1:1', 9, 'Đẹp', 100, 'Giày Nike Air Jordan 1 Digital Pink.jpg', '', '', '', 1500000),
(28, 'Nike Air1', 'Air Force 1 Low Just Do It Rep 1:1', 1, 'Đẹp', 100, 'Air Force 1 Low Just Do It.jpg', '', '', '', 1000000),
(29, 'Nike JD14', 'Air Jordan 4 Retro Pure Money 2017', 1, 'Đẹp', 100, 'Air Jordan 4 Retro Pure Money.jpg', '', '', '', 1340000),
(30, 'Nike Max1', 'Air Max 270 White Rep 1:1', 1, 'Đẹp', 100, 'Air Max 270 White Rep.jpg', '', '', '', 1300000),
(31, 'Nike M2K', 'Giày Nike M2K Tekno White Grey Rep 1:1', 1, 'Đẹp', 100, 'Giày Nike M2K Tekno White Grey Rep.jpg', '', '', '', 910000),
(33, 'Adiddas Pro', 'Adiddas Prophere All Full Triple Rep 1:1', 2, 'Đẹp', 100, 'pro1.jpg', 'pro1.jpg', 'pro2.jpg', 'pro3.jpg', 1050000),
(34, 'Adiddas Ultra', 'Adiddas Ultra Boost 20 Rep 1:1', 2, 'Đẹp', 100, 'ultra.jpg', 'ultra1.jpg', 'ultra2.jpg', 'ultra3.jpg', 1250000),
(40, 'NiKe1', 'Nike Air Jordan 1 Retro High OG University Rep 1:1', 1, 'Đẹp', 1000, 'Air Jordan 1 Mid White Obsidian.jpg', '', '', '', 1000000),
(41, 'Adiddas Yz', 'YZ', 1, 'Đẹp', 1415, 'yz.jpg', '', '', '', 7814650),
(42, 'NiKe', 'zxczczxczx', 1, 'Đẹp', 7788, 'Air Force 1 Low Just Do It.jpg', '', '', '', 1000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `th_id` int(5) NOT NULL,
  `tenthuonghieu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`th_id`, `tenthuonghieu`) VALUES
(1, 'Nike'),
(2, 'Addidas'),
(3, 'Supreme'),
(4, 'Puma'),
(5, 'Balenciaga'),
(6, 'Converse'),
(7, 'Vans'),
(8, 'New'),
(9, 'Sale');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `email`, `sdt`) VALUES
(6, 'Long', '123', 'Duy Long Đinh', 'dlong5782@gmail.com', '0369276410');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoadon_id` (`hoadon_id`),
  ADD KEY `sp_id` (`sp_id`);

--
-- Chỉ mục cho bảng `loaipk`
--
ALTER TABLE `loaipk`
  ADD PRIMARY KEY (`loai_id`);

--
-- Chỉ mục cho bảng `quanlyhoadon`
--
ALTER TABLE `quanlyhoadon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quanlykhachhang`
--
ALTER TABLE `quanlykhachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quanlyphukien`
--
ALTER TABLE `quanlyphukien`
  ADD PRIMARY KEY (`pk_id`),
  ADD KEY `loai_id` (`loai_id`);

--
-- Chỉ mục cho bảng `quanlysanpham`
--
ALTER TABLE `quanlysanpham`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `th_id` (`th_id`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`th_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `loaipk`
--
ALTER TABLE `loaipk`
  MODIFY `loai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `quanlyhoadon`
--
ALTER TABLE `quanlyhoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `quanlykhachhang`
--
ALTER TABLE `quanlykhachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `quanlyphukien`
--
ALTER TABLE `quanlyphukien`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `quanlysanpham`
--
ALTER TABLE `quanlysanpham`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `th_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`hoadon_id`) REFERENCES `quanlyhoadon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`sp_id`) REFERENCES `quanlysanpham` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `quanlyphukien`
--
ALTER TABLE `quanlyphukien`
  ADD CONSTRAINT `quanlyphukien_ibfk_1` FOREIGN KEY (`loai_id`) REFERENCES `loaipk` (`loai_id`);

--
-- Các ràng buộc cho bảng `quanlysanpham`
--
ALTER TABLE `quanlysanpham`
  ADD CONSTRAINT `quanlysanpham_ibfk_1` FOREIGN KEY (`th_id`) REFERENCES `thuonghieu` (`th_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
