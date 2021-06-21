-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th6 21, 2021 lúc 03:42 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Cấu trúc bảng cho bảng `account__admin`
--

DROP TABLE IF EXISTS `account__admin`;
CREATE TABLE IF NOT EXISTS `account__admin` (
  `admin_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phonenum` int(11) NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account__admin`
--

INSERT INTO `account__admin` (`admin_name`, `email`, `phonenum`, `password`) VALUES
('Administrator', 'admin1234@gmail.com', 314254154, 'admin1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `id_bill` int(11) NOT NULL AUTO_INCREMENT,
  `bill_code` double NOT NULL,
  `date` date NOT NULL,
  `id_customer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `totalprice` double NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_bill`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `bill_code`, `date`, `id_customer`, `totalprice`, `status`) VALUES
(8, 7176, '2021-06-17', '1223341', 380, 1),
(11, 1806, '2021-06-18', '1477744', 380, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

DROP TABLE IF EXISTS `bill_detail`;
CREATE TABLE IF NOT EXISTS `bill_detail` (
  `id_billdetail` int(11) NOT NULL AUTO_INCREMENT,
  `bill_code` double NOT NULL,
  `id_product` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `price` double NOT NULL,
  `discount` float NOT NULL,
  `total` double NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_billdetail`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id_billdetail`, `bill_code`, `id_product`, `number`, `price`, `discount`, `total`, `status`) VALUES
(8, 1380, 'Pro99', 3, 380, 0, 1140, 1),
(16, 7176, 'Pro4', 7, 300, 0.1, 270, 1),
(15, 7176, 'Pro5', 1, 480, 0.1, 432, 1);

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
('Phan Trọng Đức', '0347134654', 1231654654, 'tmp@gmail.com', 'Hà Tĩnh', '123tai', 1),
('Trần Minh Phường', '347281807', 123487548, 'tmp@gmail.com', 'Đồng Tháp', '012345165', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id_feedback` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_feedback`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `id_product`, `email`, `date`, `description`, `status`) VALUES
(17, 'Pro5', 'tmp@gmail.com', '2021-06-20', 'Hello admin', 1),
(16, 'Pro21', 'pttx1@gmail.com', '2012-07-26', 'Hello. My full name is Phan Tấn Trường', 1),
(5, 'Pro99', 'tmp@gmail.com', '2021-07-25', 'Hello administrator. My name is Dao Thi Banh Beo...!', 1),
(7, 'Pro3', 'tmp@gmail.com', '2021-06-19', 'Hello administrator. hello hello', 1),
(14, 'Pro5', 'tmp@gmail.com', '2021-06-20', 'Hello Administrator', 1),
(10, 'Pro2', 'tmp@gmail.com', '2021-06-19', 'Hello admin.', 1),
(9, 'Pro3', 'tmp@gmail.com', '2021-06-19', 'I want to buy Product 3...', 1),
(12, 'Pro2', 'tmp@gmail.com', '2021-06-19', 'Hello', 1),
(15, 'Pro5', 'tmp@gmail.com', '2021-06-20', 'Hello Administrator 11x', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id_product` double NOT NULL AUTO_INCREMENT,
  `productname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_producttype` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_provider` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `productimage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `price` double NOT NULL,
  `color` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `size` float NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `productname`, `id_producttype`, `id_provider`, `productimage`, `total`, `price`, `color`, `size`, `description`, `status`) VALUES
(1, 'LeBron 18 Best 1–9', 'Kid', 'Nike', 'LeBron 18 Best 1–9.jpg', 72, 880, 'Red', 36, 'The Nike React Infinity Run Flyknit 2 continues to help keep you running.', 1),
(2, 'Nike ACG Mountain Fly Low', 'Kid', 'Nike', 'Nike ACG Mountain Fly Low.jpg', 48, 1350, 'Blue', 37, 'PThe Nike React Infinity Run Flyknit 2 continues to help keep you running.', 1),
(4, 'Nike Air Max 90 LX', 'Men', 'Nike', 'Nike Air Max 90 LX.jpg', 50, 458, 'Grey', 39, 'The Nike React Infinity Run Flyknit 2 continues to help keep you running.', 1),
(5, 'Nike Air Zoom Pegasus', 'Men', 'Nike', 'Nike Air Zoom Pegasus.jpg', 61, 360, 'Black', 40, 'Breathable mesh in the upper combines the comfort  you want with a wider fit at the toes.', 1),
(6, 'Nike Air Zoom Pulse', 'Men', 'Nike', 'Nike Air Zoom Pulse.jpg', 29, 1220, 'Green', 41, 'Continue the next evolution of speed with a racing shoe made to help you ', 1),
(7, 'Nike Air Zoom SuperRep 2', 'Men', 'Nike', 'Nike Air Zoom SuperRep 2.jpg', 66, 840, 'Grey', 42, 'Breathable mesh in the upper combines the comfort you want with a wider fit at the toes.', 1),
(8, 'Nike Aqua Rift', 'Woman', 'Nike', 'Nike Aqua Rift.jpg', 45, 223, 'Black', 43, 'Breathable mesh in the upper combines the comfort you want with a wider fit at the toes.', 1),
(9, 'Nike Blazer Low 77', 'Woman', 'Nike', 'Nike Blazer Low 77.jpg', 43, 564, 'Green', 44, 'Continue the next evolution of speed with a racing shoe made to help you ', 1),
(10, 'Nike Free Metcon 4', 'Woman', 'Nike', 'Nike Free Metcon 4.jpg', 62, 894, 'Green', 45, 'Continue the next evolution of speed with a racing shoe ', 1),
(11, 'Nike Free Run 5.0', 'Kid', 'Nike', 'Nike Free Run 5.0.jpg', 11, 543, 'Red', 42, 'The Nike React Infinity Run Flyknit 2 continues to help keep you running.', 1),
(12, 'Nike React Infinity Pro', 'Kid', 'Nike', 'Nike React Infinity Pro.jpg', 45, 876, 'Blue', 43, 'The Nike React Infinity Run Flyknit 2 continues to help keep you running. ', 1),
(13, 'Nike Romaleos 4', 'Men', 'Nike', 'Nike Romaleos 4.jpg', 23, 450, 'White', 44, 'Made from at least 20% recycled material by weight, the sock-like Nike Free Run 5.0 ', 1),
(14, 'Nike SB BLZR Court DVDL', 'Men', 'Nike', 'Nike SB BLZR Court DVDL.jpg', 16, 560, 'Grey', 45, 'Continue the next evolution of speed with a racing shoe made to help you ', 1),
(15, 'Nike SB BLZR Court', 'Men', 'Nike', 'Nike SB BLZR Court.jpg', 46, 249, 'Black', 39, 'Made from at least 20% recycled material by weight, the sock-like Nike Free Run 5.0 ', 1),
(16, 'Nike SB Zoom Blazer Mid Edge', 'Men', 'Nike', 'Nike SB Zoom Blazer Mid Edge.jpg', 27, 223, 'Green', 40, 'Continue the next evolution of speed with a racing shoe made to help you ', 1),
(17, 'Nike Waffle One', 'Woman', 'Nike', 'Nike Waffle One.jpg', 9, 229, 'Grey', 41, 'Breathable mesh in the upper combines the comfort  you want with a wider fit at the toes.', 1),
(18, 'Nike ZoomX Invincible Run Flyknit', 'Woman', 'Nike', 'Nike ZoomX Invincible Run Flyknit.jpg', 121, 320, 'Black', 42, 'Continue the next evolution of speed with a racing shoe made to help you ', 1),
(19, 'NikeCourt Vapor Lite', 'Woman', 'Nike', 'NikeCourt Vapor Lite.jpg', 16, 220, 'Green', 43, 'Made from at least 20% recycled material by weight, the sock-like Nike Free Run 5.0 ', 1);

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
('Kid', 'Shoes for Kid', 1),
('Manly', 'Shoes XXmenSS', 1),
('Men shishionX', 'Shoes for Kid', 1);

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
('Nike', 'Nike AirPort 48XlS', '1242124', 'nikeairpport@gmail.com', 'Earthosia American', 1),
('Adidas', 'Adidas Shoes', '1629871', 'adidas@gmail.com', 'Herzogenaurach, Đức', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
