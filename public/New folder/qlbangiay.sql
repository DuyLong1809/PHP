-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2021 lúc 03:38 AM
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
(27, 38, 25, 1, 1250000),
(28, 38, 26, 1, 1525000),
(29, 39, 26, 1, 1525000),
(30, 39, 28, 1, 1000000),
(35, 42, 23, 2, 1580000),
(41, 48, 23, 5, 1580000),
(52, 55, 23, 9, 1580000),
(53, 55, 24, 8, 1250000),
(55, 57, 26, 3, 1525000);

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
(38, 'Lê Huy Dậu', 386131716, 'lehuydau2312@gmail.com', '12 ngõ 2 Phạm Văn Đồng - Mai Dịch - Cầu Giấy - Hà Nội', 'Thank you!', 2775000, 1634700352),
(39, 'Cù Ngọc Đăng', 222222222, 'cungocdang@gmail.com', 'Phú Thọ', 'a', 2525000, 1634717263),
(42, 'Bùi Quang Bình', 202020202, 'buiquangbinh@gmail.com', 'Thái Bình', 'a', 3160000, 1634717951),
(48, 'Huy Toan Dien', 145232114, 'huyproty@gmail.com', 'Ninh Bình', 'a', 7900000, 1634718383),
(55, 'Lê Huy Dậu', 386131716, 'lehuydau2312@gmail.com', '12 ngõ 2 Phạm Văn Đồng - Mai Dịch - Cầu Giấy - Hà Nội', 'Size 40 ', 24220000, 1634744529),
(57, 'Cù Ngọc Đăng', 222222222, 'cungocdang@gmail.com', 'Ha Hoa - Phu Tho', 'Size 43', 4575000, 1634748455);

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
(1, 'LHD___2312', 'LH', 'Lê Huy Dậu', 'Hải Dương', 386131716, 'lehuydau2312@gmail.com'),
(2, 'cungocdang', 'dang', 'Cù Ngọc Đăng', 'Phú Thọ', 222222222, 'Cungocdang@gmail.com'),
(16, 'lehuydan', 'dan123', 'Lê Huy Đàn', 'Hải Dương', 2121212121, 'danbao@gmail.com'),
(18, 'SonTungMtp', 'Mtp', 'Sơn Tùng MTP', 'Sontung', 123456789, 'Sontungmtp@gmail.com'),
(19, 'buiquangbinh', 'binhbun', 'Bùi Quang Bình', 'Thái Bình', 33333333, 'Binhbun@gmail.com'),
(20, 'huydauhd123', 'Dauzack123', 'Lê Huy Dậu', 'Hải Dương', 38613171, 'lehuydau2312@gmail.com');

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
(7, 'Nike3', 'Nike Air Jordan 1 Mid SE Union Black Toe Rep 1:1', 1, 'Đẹp', 1, 'jd3.jpg', '', '', '', 1580000),
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
(41, 'Adiddas Yz', 'YZ', 1, 'Đẹp', 1415, 'yz.jpg', '', '', '', 7814650);

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
(1, 'admin', 'admin', 'Lê Huy Dậu', 'lehuydau2312@gmail.com', '0386131716'),
(2, 'huydau', '2312', 'LE HUY DAU', 'lehuydau2312@gmail.com', '0386131716'),
(4, 'cungocdang', '1', 'Cù Ngọc Đăng', 'cungocdang@gmail.com', '0202022222'),
(5, 'buiquangbinh', 'binhbun', 'Bùi Quang Bình', 'binhbun@gmail.com', '02222222'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `loaipk`
--
ALTER TABLE `loaipk`
  MODIFY `loai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `quanlyhoadon`
--
ALTER TABLE `quanlyhoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `quanlykhachhang`
--
ALTER TABLE `quanlykhachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `quanlyphukien`
--
ALTER TABLE `quanlyphukien`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `quanlysanpham`
--
ALTER TABLE `quanlysanpham`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
