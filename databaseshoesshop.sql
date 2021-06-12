-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th6 12, 2021 lúc 10:46 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `databaseshoesshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `id_bill` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `id_staff` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_customer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `totalprice` double NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_bill`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `date`, `id_staff`, `id_customer`, `totalprice`, `status`) VALUES
('b1', '2020-11-02', 'NV01', '123456', 2280, 1),
('b2', '2020-11-04', 'NV03', '123456', 3040, 1),
('b3', '2020-11-27', 'NV04', '123456', 380, 1),
('b4', '2020-11-04', 'NV01', '123457', 1520, 1),
('b5', '2020-11-19', 'NV02', '123457', 760, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

DROP TABLE IF EXISTS `bill_detail`;
CREATE TABLE IF NOT EXISTS `bill_detail` (
  `id_billdetail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_bill` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_product` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `price` double NOT NULL,
  `discount` float NOT NULL,
  `total` double NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_billdetail`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id_billdetail`, `id_bill`, `id_product`, `number`, `price`, `discount`, `total`, `status`) VALUES
('bd2', 'b1', 'Pro2', 4, 380, 0, 1520, 1),
('bd3', 'b2', 'Pro3', 8, 380, 0, 3040, 1),
('bd4', 'b3', 'Pro4', 1, 380, 0, 380, 1),
('bd5', 'b4', 'Pro6', 2, 380, 0, 760, 1),
('bd6', 'b4', 'Pro5', 2, 380, 0, 760, 1),
('bd7', 'b5', 'Pro7', 2, 380, 0, 760, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id_cart` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_customer` text COLLATE utf8_unicode_ci NOT NULL,
  `id_product` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numbers` int(11) NOT NULL,
  `totalprice` double NOT NULL,
  PRIMARY KEY (`id_cart`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `id_customer`, `id_product`, `numbers`, `totalprice`) VALUES
('c1', '123456', 'Pro1', 1, 380),
('c2', '123456', 'Pro3', 3, 1140),
('c3', '123456', 'Pro5', 2, 760),
('c4', '123457', 'Pro2', 3, 1140),
('c5', '123457', 'Pro4', 5, 1900),
('c6', '123457', 'Pro6', 2, 760);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer_account`
--

DROP TABLE IF EXISTS `customer_account`;
CREATE TABLE IF NOT EXISTS `customer_account` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phonenum` text COLLATE utf8_unicode_ci NOT NULL,
  `id_card` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_card`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer_account`
--

INSERT INTO `customer_account` (`username`, `phonenum`, `id_card`, `email`, `address`, `password`, `status`) VALUES
('Tống Thành Tài', '0343569245', 123456, 'ttt@gmail.com', '251 Chấn Hưng', '123tai', 0),
('Trần Minh Phường', '0984373641', 123457, 'tmp@gmail.com', 'Ngã 5 Chuồng Chó', '123phuong', 0),
('Tống Thành Tài', '0387666785', 1223341, 'tongthanhtai27052001@gmail.com', '251 Chấn Hưng', '123', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id_product` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `productname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_producttype` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_provider` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `productimage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `price` double NOT NULL,
  `color` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `size` float NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `productname`, `id_producttype`, `id_provider`, `productimage`, `total`, `price`, `color`, `size`, `description`, `status`) VALUES
('Pro5', 'HYPERVENOM5', 'Men', 'Nike', 'product1.jpg', 38, 380, 'Black', 40, 'Men\'s Firm-Ground Football Boot', 1),
('Pro4', 'HYPERVENOM4', 'Men', 'Nike', 'product5.jpg', 38, 380, 'Grey', 39, 'Men\'s Firm-Ground Football Boot', 1),
('Pro3', 'HYPERVENOM3', 'Kid', 'Nike', 'product3.jpg', 38, 380, 'White', 38, 'Personalized children\'s sports shoes', 1),
('Pro2', 'HYPERVENOM2', 'Kid', 'Nike', 'product4.jpg', 38, 380, 'Blue', 37, 'Personalized children\'s sports shoes', 1),
('Pro1', 'HYPERVENOM1', 'Kid', 'Nike', 'product1.jpg', 38, 380, 'Red', 36, 'Personalized children\'s sports shoes', 1),
('Pro6', 'HYPERVENOM6', 'Men', 'Adidas', 'product6.jpg', 38, 380, 'Green', 41, 'Men\'s Firm-Ground Football Boot', 1),
('Pro11', 'HYPERVENOM66', 'Kid', 'Nike', 'product1.jpg', 18, 400, '', 45, 'Real Nike Air Max 2021', 1),
('Pro15', 'HYPERVENOM11', 'Kid', 'Nike', 'product4.jpg', 54, 400, '', 40, 'Description xAir', 1),
('Pro18', 'HYPERVENOM18', 'Kid', 'Adidas', 'product1.jpg', 15, 400, '', 43, 'Real Nike Air Max 2021', 1),
('Pro10', 'HYPERVENOM10', 'Woman', 'Adidas', 'product4.jpg', 38, 380, 'Green', 45, 'Personalized women\'s sports shoes', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `producttype`
--

DROP TABLE IF EXISTS `producttype`;
CREATE TABLE IF NOT EXISTS `producttype` (
  `id_producttype` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `producttypename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_producttype`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `producttype`
--

INSERT INTO `producttype` (`id_producttype`, `producttypename`, `status`) VALUES
('Men', 'Shoes for man', 1),
('Woman', 'Shoes for woman', 1),
('Kid', 'Shoes for kid', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `provider`
--

DROP TABLE IF EXISTS `provider`;
CREATE TABLE IF NOT EXISTS `provider` (
  `id_provider` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `providername` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_card` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_provider`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `provider`
--

INSERT INTO `provider` (`id_provider`, `providername`, `id_card`, `email`, `address`, `status`) VALUES
('Nike', 'Nike - Just Do It', '123456', 'nike@gmail.com', 'Washington, Mỹ', 1),
('Adidas', 'Adidas Shoes', '162987', 'adidas@gmail.com', 'Herzogenaurach, Đức', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id_staff` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `staffname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `salary` double NOT NULL,
  `phonenum` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_staff`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`id_staff`, `staffname`, `salary`, `phonenum`, `email`, `address`, `status`, `password`) VALUES
('NV02', 'Ngyễn Thị Ánh', 6000000, '34312678', 'anh@gmail.com', 'Hà Nội', 1, '123anh'),
('NV01', 'Lê Văn Tám', 5000000, '34412345', 'tam@gmail.com', 'Bến Tre', 2, '123tam'),
('NV03', 'Trần Thanh Tâm', 4000000, '32345312', 'tam@gmail.com', 'Hải Phòng', 3, '123tam'),
('NV04', 'Phạm Nhật Vượng', 9000000, '34545343', 'vuong@gmail.com', 'Bình Phước', 0, '123vuong'),
('NV05', 'Lê Thị Riêng', 6000000, '32345532', 'rieng@gmail.com', 'TP Hồ Chí Minh', 1, '123rieng'),
('NV06', 'Lê Văn Bưởi', 5000000, '33444268', 'buoi@gmail.com', 'Vũng Tàu', 2, '123buoi'),
('NV07', 'Ngyễn Thị Ánh Tuyết', 5000000, '32343476', 'tuyet@gmail.com', 'Cà Mau', 2, '123tuyet'),
('NV08', 'Phạm Nhất Thống', 5000000, '30970980', 'thong@gmail.com', 'Sóc Trăng', 2, '123thong'),
('NV09', 'Trần Văn Hai', 4000000, '32300972', 'hai@gmail.com', 'Sóc Trăng', 3, '123hai'),
('NV10', 'Chu Thị Hồng', 5000000, '98709335', 'hong@gmail.com', 'Sóc Trăng', 2, '123hong');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
