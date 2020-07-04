-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th7 04, 2020 lúc 11:43 AM
-- Phiên bản máy phục vụ: 10.3.23-MariaDB-cll-lve
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `congnvme_quanlyhanghoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaCTHD` int(11) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `MaHH` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaCTHD`, `MaHD`, `MaHH`, `SoLuong`) VALUES
(3, 3, 3, 1),
(4, 4, 4, 1),
(5, 5, 5, 1),
(6, 6, 6, 1),
(7, 7, 7, 1),
(8, 8, 8, 1),
(9, 9, 9, 1),
(10, 10, 10, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MaHH` int(10) NOT NULL,
  `TenHH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DonGia` double NOT NULL,
  `Hinh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaLoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`MaHH`, `TenHH`, `DonGia`, `Hinh`, `MaLoai`) VALUES
(3, 'Bàn gỗ', 200000, '', 9),
(4, 'Áo sơ mi', 150000, 'https://media3.scdn.vn/img2/2018/9_22/VAQbWP_simg_de2fe0_500x500_maxb.jpg', 6),
(5, 'Bánh snack Oishi', 5000, 'https://vn-test-11.slatic.net/p/mdc/8b4336497fc48933bd39f902eac51898.jpg_720x720q80.jpg_.webp', 4),
(6, 'Thẻ cào Viettel 200000', 200000, 'https://cf.shopee.vn/file/a6a24f245ad6fc5bd88446b890fd755a', 8),
(7, 'Dây điện', 10000, 'https://kythuatchetao.com/wp-content/uploads/2015/01/day-dong.jpg', 7),
(8, 'Đắc nhân tâm', 150000, 'https://product.hstatic.net/1000327597/product/dac-nhan-tam-biamem2019-76k-bia1_b014feb4f5cc44a5a53d', 5),
(9, 'Màn hình viewsonic', 2000000, 'https://www.anphatpc.com.vn/media/product/22048_vx2476_smhd_front_h.jpg', 10),
(10, 'Bút Thiên long', 2000, 'https://product.hstatic.net/1000230347/product/but_bi_thien_long_tl-08__28__large.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `NgayLapHD` timestamp NOT NULL DEFAULT current_timestamp(),
  `TenKH` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TongTien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `NgayLapHD`, `TenKH`, `TongTien`) VALUES
(1, '2020-06-30 17:00:00', '1', 2000000),
(2, '2020-07-14 17:00:00', '2', 222000),
(3, '2020-07-04 17:00:00', '3', 100000),
(4, '2020-07-07 17:00:00', '4', 200000),
(5, '2020-07-01 17:00:00', '5', 500000),
(6, '2020-07-02 17:00:00', '6', 6000000),
(7, '2020-07-06 17:00:00', '7', 70000),
(8, '2020-07-04 17:00:00', '8', 900000),
(9, '2020-06-30 17:00:00', '10', 300000),
(10, '2020-07-08 17:00:00', '9', 800000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(10) NOT NULL,
  `HoTen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienThoai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `HoTen`, `DienThoai`, `Email`) VALUES
(1, 'Ngụy Thế Dương', '1234566789', 'duongnt.cnthongtin@gmail.com'),
(2, 'Võ Tuấn Hào', '1156810518', 'haovt.cnthongtin@gmail.com'),
(3, 'Huỳnh Đức Cường', '1561891651', 'cuonghd.cnthongtin@gmail.com'),
(4, 'Hồ Thị Kim Hà', '0561994889', 'hotkh.cnthongtin@gmail.com'),
(5, 'Lý Mỹ Như', '0599490491', 'nhulm.cnthongtin@gmail.com'),
(6, 'Nguyễn Văn Công', '0515605650', 'congnv.cnthongtin@gmail.com'),
(7, 'Phùng Tiến Đạt', '4511616089', 'datpt.cnthongtin@gmail.com'),
(8, 'Võ Minh Quốc Việt', '0215489498', 'vietvm.cnthongtin@gmail.com'),
(9, 'Phạm Thị Thanh Thản', '0216519818', 'thaopttt.cnthongtin@gmail.com'),
(10, 'Mai Trọng Vinh', '0215848484', 'vinhmt.cnthongtin@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `MaLoai` int(10) NOT NULL,
  `TenLoai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`MaLoai`, `TenLoai`, `MoTa`) VALUES
(1, 'Thực phẩm', 'Đồ ăn'),
(2, 'Văn phòng phẩm', 'Tập viết./,...'),
(3, 'Nước uống', 'Các loại nước'),
(4, 'Đồ ăn vặt', 'Các loại đồ ăn vặt'),
(5, 'Sách', 'Các loại sách'),
(6, 'Quần áo', 'Các loại quần áo'),
(7, 'Đồ điện ', 'Dây điện'),
(8, 'Thẻ cào', 'Các loại thẻ cào'),
(9, 'Nội thất', 'Bàn ghế'),
(10, 'Thiết bị điện tử', 'Mạch , màn hình ,...');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaCTHD`),
  ADD KEY `fk_MaHD` (`MaHD`),
  ADD KEY `fk_MaHH` (`MaHH`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MaHH`),
  ADD KEY `fk_MaLoai` (`MaLoai`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `fk_hoadon` (`TenKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`MaLoai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaCTHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `MaHH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `MaLoai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `fk_MaHD` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `fk_MaHH` FOREIGN KEY (`MaHH`) REFERENCES `hanghoa` (`MaHH`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `fk_MaLoai` FOREIGN KEY (`MaLoai`) REFERENCES `loai` (`MaLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
