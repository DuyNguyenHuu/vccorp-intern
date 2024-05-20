-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2024 lúc 05:06 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanly`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `ID` varchar(11) NOT NULL,
  `ACCOUNT` text NOT NULL,
  `PASSWORD` text NOT NULL,
  `NAME` text DEFAULT NULL,
  `ADDRESS` text DEFAULT NULL,
  `CONTACT` text DEFAULT NULL,
  `ROLE` bit(1) NOT NULL,
  `STATUS` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`ID`, `ACCOUNT`, `PASSWORD`, `NAME`, `ADDRESS`, `CONTACT`, `ROLE`, `STATUS`) VALUES
('CHUNGNH', 'chung@gmail.com', 'Duyyl220302', 'Nguyễn Hữu Chung', 'Yên Lạc, Vĩnh Phúc', '0826321476', b'0', b'0'),
('DOANNH', 'doan@gmail.com', 'Duyyl220302', 'Nguyễn Hữu Đoàn', 'Vĩnh Phúc', '0977163046', b'0', b'0'),
('DUYNH', 'duy@gmail.com', 'Duyyl220302', 'Nguyễn Hữu Duy', 'Yên Đồng, Yên Lạc, Vĩnh Phúc', '0985963473', b'1', b'0'),
('THANGNH', 'thang@gmail.com', 'Duyyl220302', 'Nguyễn Hữu Thắng', 'Yên Đồng, Yên Lạc', '0987531222', b'0', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `MACT` varchar(11) NOT NULL,
  `TENCT` text NOT NULL,
  `THONGTIN` text DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`MACT`, `TENCT`, `THONGTIN`, `updated_at`, `created_at`) VALUES
('A', 'Công ty A', NULL, NULL, NULL),
('B', 'Công ty B', NULL, NULL, NULL),
('C', 'Công ty C', NULL, NULL, NULL),
('D', 'Công ty D', NULL, NULL, NULL),
('E', 'Công ty E', 'TNHH', '2024-05-18', '2024-05-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `MAKH` varchar(11) NOT NULL,
  `TENKH` text NOT NULL,
  `DIACHI` text NOT NULL,
  `SODIENTHOAI` text NOT NULL,
  `EMAIL` text NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`MAKH`, `TENKH`, `DIACHI`, `SODIENTHOAI`, `EMAIL`, `updated_at`, `created_at`) VALUES
('ANTV', 'Trần Viết An', 'Bắc Ninh', '0453646313', 'antv@gmail.com', NULL, NULL),
('BACHPX', 'Phạm Xuân Bách', 'Hà Nội', '0542352753', 'bachpx@gmail.com', NULL, NULL),
('CHIENNV', 'Nguyễn Văn Chiến', 'Vĩnh Phúc', '0683968323', 'chiennv@gmail.com', NULL, NULL),
('DIEPVTB', 'Vũ Thị Bích Diệp', 'Bắc Ninh', '0963548732', 'diepvtb@gmail.com', NULL, NULL),
('DNH', 'Nguyễn Hữu Duy', 'Yên Lạc, Vĩnh Phúc', '0985963473', 'duyyl12a1@gmail.com', '2024-05-18', '2024-05-18'),
('DUNGLT', 'Lê Thế Dũng', 'Bắc Ninh', '0978736345', 'dunglt@gmail.com', NULL, NULL),
('DUONGNT', 'Nguyễn Tùng Dương', 'Hải Dương', '0243534756', 'duongnt@gmail.com', NULL, NULL),
('KHANHPG', 'Phạm Gia Khánh', 'Tuyên Quang', '0784674235', 'khanhpg@gmail.com', NULL, NULL),
('LOCND', 'Nguyễn Đức Lộc', 'Hà Nội', '0986395683', 'locnd@gmail.com', NULL, NULL),
('MAINTP', 'Nguyễn Thị Phương Mai', 'Hải Dương', '0632453643', 'maintp@gmail.com', NULL, NULL),
('NAMTX', 'Trần Xuân Nam', 'Vĩnh Phúc', '0983452345', 'namtx@gmail.com', NULL, NULL),
('NGHIANM', 'Nguyễn Minh Nghĩa', 'Hòa Bình', '0956784367', 'nghianm@gmail.com', NULL, NULL),
('THANHMT', 'Mai Tiến Thành', 'Hải Dương', '0745635602', 'thanhmt@gmail.com', NULL, NULL),
('TRUNGLQ', 'Lại Quốc Trung', 'Quảng Ninh', '0639574351', 'trunglq@gmail.com', NULL, NULL),
('VIETNH', 'Nguyễn Hữu Việt', 'Hải Phòng', '0527547234', 'vietnh@gmail.com', NULL, NULL),
('VNM', 'Nguyễn Minh Vũ', 'Vĩnh Tường, Vĩnh Phúc', '0985963473', 'vu@gmail.com', '2024-05-18', '2024-05-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `MADH` int(11) NOT NULL,
  `MAKH` varchar(11) NOT NULL,
  `MASP` varchar(11) NOT NULL,
  `NGAYMUA` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`MADH`, `MAKH`, `MASP`, `NGAYMUA`, `updated_at`, `created_at`) VALUES
(1, 'BACHPX', 'CBR150R', '2022-12-07', NULL, NULL),
(2, 'DUNGLT', 'WAVERSX', '2024-04-17', NULL, NULL),
(3, 'BACHPX', 'CBR150R', '2024-03-09', NULL, NULL),
(4, 'DUNGLT', 'WAVERSX', '2024-02-19', NULL, NULL),
(5, 'LOCND', 'SH350i', '2024-01-30', NULL, NULL),
(6, 'NGHIANM', 'CLUB125', '2024-01-02', NULL, NULL),
(7, 'CHIENNV', 'Vario 160', '2023-12-23', NULL, NULL),
(8, 'NGHIANM', 'SH160i', '2023-12-04', NULL, NULL),
(9, 'NAMTX', 'LEAD125', '2023-11-24', NULL, NULL),
(10, 'NAMTX', 'Vario 160', '2024-04-10', NULL, NULL),
(11, 'MAINTP', 'SH160i', '2024-04-12', NULL, NULL),
(12, 'KHANHPG', 'SH350i', '2024-03-22', NULL, NULL),
(13, 'DUNGLT', 'SH125', '2023-09-23', NULL, NULL),
(14, 'CHIENNV', 'SH125', '2023-07-24', NULL, NULL),
(15, 'DIEPVTB', 'SH125', '2019-12-27', NULL, NULL),
(16, 'VIETNH', 'ALPHA110', '2024-01-01', NULL, NULL),
(17, 'DIEPVTB', 'LEAD125', '2024-05-18', '2024-05-18', '2024-05-18'),
(18, 'DNH', 'SH160i', '2024-05-18', '2024-05-18', '2024-05-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `MASP` varchar(11) NOT NULL,
  `TENSP` text NOT NULL,
  `GIASP` int(11) NOT NULL,
  `THONGTINSP` text DEFAULT NULL,
  `SOLUONG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`MASP`, `TENSP`, `GIASP`, `THONGTINSP`, `SOLUONG`) VALUES
('ALPHA110', 'Wave Alpha 110', 18000000, '', 2),
('BLADE2023', 'Blade 2023', 19000000, '', 46),
('CBR150R', 'Honda CBR150R', 72300000, '', 23),
('CLUB125', 'Super Club 125', 86000000, '', 43),
('LEAD125', 'Honda Lead 125', 40000000, '', 17),
('SH125', 'Sh mode ', 57132000, '', 99),
('SH160i', 'Honda SH160i', 74000000, '', 5),
('SH350i', 'Honda SH350i', 150990000, '', 5),
('Vario 160', 'Vario 160', 51990000, '', 23),
('WAVERSX', 'Wave RSX', 22000000, '', 56),
('X2024', 'Winner X 2024', 46000000, '', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `MANV` varchar(11) NOT NULL,
  `TENNV` text NOT NULL,
  `DIACHI` text NOT NULL,
  `SODIENTHOAI` text NOT NULL,
  `EMAIL` text NOT NULL,
  `PASSWORD` text NOT NULL,
  `NGUOIQL` text NOT NULL,
  `MACT` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`MANV`, `TENNV`, `DIACHI`, `SODIENTHOAI`, `EMAIL`, `PASSWORD`, `NGUOIQL`, `MACT`) VALUES
('ANHKT', 'Kim Tuấn Anh', 'Kim Ngọc, Yên Lạc, Vĩnh Phúc', '0986254965', 'anhkt@gmail.com', '1', 'doan@gmail.com', 'A'),
('ANHLT', 'Lê Tuấn ANh', 'Yên Phương, Yên Lạc, Vĩnh Phúc', '0785658853', 'anhlt@gmail.com', '1', 'doan@gmail.com', 'B'),
('ANHNT', 'Nguyễn Tuấn Anh', 'Đại Tự, Yên Lạc, Vĩnh Phúc', '0987563356', 'anhnt@gmail.com', '1', 'doan@gmail.com', 'C'),
('ANTT', 'Nguyễn Thị Thái An', 'Yên Lạc, Vĩnh Phúc', '0985963473', 'an@gmail.com', '1', 'thang@gmail.com', 'D'),
('DUNGTT', 'Trần Thế Dũng', 'Nguyệt Đức, Yên Lạc, Vĩnh Phúc', '0456258963', 'dungtt@gmail.com', '1', 'chung@gmail.com', 'A'),
('DUONGNH', 'Nguyễn Hữu Dương', 'Yên Lạc', '0985963473', 'duong@gmail.com', '1234', 'thang@gmail.com', 'B'),
('DUYNH', 'Nguyễn Hữu Duy', 'Yên Lạc, Vĩnh Phúc', '0985963473', 'duy@gmail.com', '1', 'thang@gmail.com', 'C'),
('HIEUNK', 'Nguyễn Khắc Hiếu', 'Yên Đồng, Yên Lạc, Vĩnh Phúc', '0563478523', 'hieunk@gmail.com', '1', 'chung@gmail.com', 'D'),
('HUYND', 'Nguyễn Đình Huy', 'Đại Tự, Yên Lạc, Vĩnh Phúc', '0856982245', 'huynd@gmail.com', '1', 'chung@gmail.com', 'A'),
('KHANHPD', 'Phạm Duy Khánh', 'Tam Hồng, Yên Lạc, Vĩnh Phúc', '0856942567', 'khanhpd@gmail.com', '1', 'chung@gmail.com', 'B'),
('KIMTTM', 'Trần Thị Mã Kim', 'Nguyệt Đức, Yên Lạc, Vĩnh ', '0986523146', 'kimttm@gmail.com', '1', 'doan@gmail.com', 'C'),
('NAMTH', 'Trần Hải Nam', 'Tề Lỗ, Yên Lạc, Vĩnh Phúc', '0563147896', 'namth@gmail.com', '1', 'chung@gmail.com', 'D'),
('QUYNH', 'Nguyễn Huy Quý', 'Bình Xuyên, Vĩnh Phúc', '0785698523', 'quynh@gmail.com', '1', 'doan@gmail.com', 'A'),
('TANND', 'Nguyễn Duy Tân', 'Bình Xuyên, Vĩnh Phúc', '0453256985', 'tannd@gmail.com', '1', 'chung@gmail.com', 'B'),
('THULTX', 'Lê Thị Xuân Thu', 'Đại Tự, Yên Lạc, Vĩnh Phúc', '0469258753', 'thultx@gmail.com', '1', 'chung@gmail.com', 'C'),
('TNT', 'Nguyễn Thị Tăng', 'Yên Đồng', '0985963473', 'tang@gmail.com', '1', 'thang@gmail.com', 'D'),
('TRANGDTT', 'Đậu Thị Thu Trang', 'Yên Lạc, Vĩnh Phúc', '0856325632', 'trangdtt@gmail.com', '1', 'doan@gmail.com', 'A'),
('TUYENNV', 'Nguyễn Văn Tuyển', 'Bình Xuyên, Vĩnh Phúc', '0458963593', 'tuyennv@gmail.com', '1', 'chung@gmail.com', 'B');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`MACT`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`MAKH`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`MADH`),
  ADD KEY `MASP` (`MASP`),
  ADD KEY `MAKH` (`MAKH`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`MASP`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`MANV`),
  ADD KEY `MACT` (`MACT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `MADH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `MAKH` FOREIGN KEY (`MAKH`) REFERENCES `customer` (`MAKH`),
  ADD CONSTRAINT `MASP` FOREIGN KEY (`MASP`) REFERENCES `product` (`MASP`);

--
-- Các ràng buộc cho bảng `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `MACT` FOREIGN KEY (`MACT`) REFERENCES `company` (`MACT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
