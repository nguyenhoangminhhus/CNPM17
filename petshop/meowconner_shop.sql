-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2017 lúc 07:22 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `meowconner_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billdetails`
--

CREATE TABLE `billdetails` (
  `billdetails_id` int(10) NOT NULL,
  `Transaction_id` int(11) NOT NULL,
  `products_id` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `name`, `parent_id`, `category_image`, `category_description`, `created_at`, `updated_at`) VALUES
(1, 'Đệm ổ nằm', 1, '', 'đệm nằm', NULL, NULL),
(2, 'Đồ chơi chó & mèo', 2, '', 'Đồ chơi', NULL, NULL),
(3, 'Lồng chuồng túi vận chuyển', 3, '', 'Vận chuyển', NULL, NULL),
(4, 'Quần áo & phụ kiện', 4, '', 'Đồ phụ kiện', '2017-12-14 17:00:00', NULL),
(5, 'Sữa tắm & Mỹ phẩm', 5, '', 'Sữa tắm', '2017-12-14 17:00:00', NULL),
(6, 'Thức ăn cho chó', 6, '', 'Dành cho chó', '2017-12-14 17:11:00', NULL),
(7, 'Thức ăn cho mèo', 7, '', 'Dành cho mèo', NULL, NULL),
(8, 'Thuốc thú y', 8, '', 'Thuốc', NULL, NULL),
(9, 'Vật dụng ăn uống', 9, '', 'đồ dùng ăn uống', NULL, NULL),
(10, 'Vệ sinh ', 10, '', 'Vệ sinh & khử mùi', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `users_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `users_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2017_11_03_015706_create_products_table', 1),
(9, '2017_11_03_015806_create_category_table', 1),
(10, '2017_11_03_015846_create_users_table', 1),
(11, '2017_11_03_020821_create_customers_table', 1),
(12, '2017_11_03_020846_create_bill_table', 1),
(13, '2017_11_03_020911_create_billDetails_table', 1),
(14, '2017_11_03_020946_create_sale_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `products_id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) NOT NULL,
  `saleoff_id` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bestseller` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`products_id`, `name`, `category_id`, `saleoff_id`, `price`, `image`, `comment`, `description`, `bestseller`, `created_at`, `updated_at`) VALUES
(2, 'Đệm dâu tây', 1, 1, 100000.00, 'đệm dâu tây 100k.jpg', '', ' thích hợp chó chó mèo nhỏ hơn 4kg ', 0, NULL, NULL),
(3, 'Đệm gấu pool', 1, 1, 180000.00, 'đệm gấu pool 180k.jpg', '', 'Đẹp, xinh xắn', 0, NULL, NULL),
(4, 'Đệm họa tiết', 1, 1, 130000.00, 'đệm họa tiết 130k.jpg', '', 'Nhỏ nhắn', 0, NULL, NULL),
(6, 'Đệm minion', 1, 1, 180000.00, 'đệm minion 180k.jpg', '', 'Đẹp', 0, NULL, NULL),
(7, 'Đệm ngôi nhà', 1, 1, 250000.00, 'đệm ngôi nhà 250k.jpg', '', 'Đẹp', 0, NULL, NULL),
(8, 'Đệm totoro', 1, 1, 195000.00, 'đệm totoro 195k.jpg', '', 'Rẻ, đẹp', 0, NULL, NULL),
(9, 'Đệm hình thú', 1, 1, 175000.00, 'nệm hình thú 175k.jpg', '', 'đẹp', 0, NULL, NULL),
(10, 'CÁ canip', 2, 1, 50000.00, 'Cá Canip 50k.jpg', '', 'dẽ thương', 0, NULL, NULL),
(11, 'Cần câu đồ chơi', 2, 1, 0.00, 'Cần Câu đồ chơi 30k.jpg', '', 'vui vui', 0, NULL, NULL),
(12, 'Nhà cây', 2, 1, 350000.00, 'cattree nhà cây 350k.jpg', '', ':D :D', 0, NULL, NULL),
(13, 'Chuột Dính', 2, 1, 25000.00, 'chuột dính 25k.jpg', '', '@@', 0, NULL, NULL),
(15, 'nhà cây xanh', 2, 1, 150000.00, 'nhà cây 150k.jpg', '', ':@@', 0, NULL, NULL),
(16, 'BA lô phi hành gia', 3, 1, 400000.00, 'ba lô phi hành gia 400k.jpg', '', ':D ', 0, NULL, NULL),
(17, 'Lồng sắt 3 tầng', 2, 1, 999999.99, 'lồng sắt 3 tầng 1500k.jpg', '', 'Quá là tiện lợi luôn', 0, NULL, NULL),
(18, 'Lồng sắt ', 3, 1, 0.00, 'lồng sắt 600k.jpg', '', 'Tiện lợi', 0, NULL, NULL),
(19, 'Nhà nhựa thú cưng', 3, 1, 999999.99, 'nhà nhựa thú cưng- 1000k.jpg', '', 'đẹp quá xá!', 0, NULL, NULL),
(20, 'Lồng quây ', 3, 1, 300000.00, 'Quây chó mèo 300l.jpg', '', 'Tinh tế', 0, NULL, NULL),
(21, 'Túi cỡ vừa', 3, 1, 165000.00, 'Túi vận chuyển 165k.jpg', '', 'Nhỏ gọn.', 0, NULL, NULL),
(22, 'Túi cỡ nhỏ', 3, 1, 150000.00, 'túi vận chuyển size bé 150k.jpg', '', 'Nhỏ gọn+ tiện', 0, NULL, NULL),
(23, 'Áo bò sữa', 4, 1, 0.00, 'áo bò sữa-95k.jpg', '', 'Đẹp , lạ mắt', 0, NULL, NULL),
(24, 'Áo cosplay', 4, 1, 120000.00, 'áo cosplay - 120k.jpg', '', 'Dễ thương', 0, NULL, NULL),
(25, 'Áo hổ', 4, 1, 95000.00, 'áo hổ-95k.jpg', '', 'DỄ thương', 0, NULL, NULL),
(26, 'Áo khủng long', 4, 1, 0.00, 'áo khủng long-95k.jpg', '', 'Dễ thương', 0, NULL, NULL),
(27, 'Dầu xả dưỡng lông', 5, 1, 0.00, 'dầu xả dưỡng lông budle 150k.jpg', '', 'Thơm dịu dàng', 0, NULL, NULL),
(28, 'Dưỡng lông trixie', 5, 1, 175000.00, 'dầu xả dưỡng lông trixie.jpg', '', 'thơm dịu dàngllll', 0, NULL, NULL),
(29, 'Khăn tắm ', 5, 1, 50000.00, 'khăn tắm 50k.jpg', '', 'nhiều màu sắc, tha hồ lựa chọn', 0, NULL, NULL),
(31, 'Bánh Thưởng', 6, 1, 100000.00, 'bánh thưởng 100k.jpg', '', 'ngon ngon..', 0, NULL, NULL),
(32, 'bánh ganador', 6, 1, 120000.00, 'ganador cún lớn 120k.jpg', '', 'Dành cho cún lớn .. heeee', 0, NULL, NULL),
(33, 'Hạt zenith', 6, 1, 130000.00, 'hạt zenith 130k.jpg', '', 'ngon ngolll ạ', 0, NULL, NULL),
(34, 'Hạt Blisk ', 7, 1, 65000.00, 'Hạt Blisk 65k.jpg', '', 'bổ && rẻ', 0, NULL, NULL),
(36, 'Hạt Cat eye', 7, 1, 95000.00, 'Hạt Cat eye 95k.jpg', '', 'trông cũng được', 0, NULL, NULL),
(37, 'Thuốc nhuộm lông', 8, 1, 80000.00, 'thuốc nhuộm lông.jpg', '', 'nhìn cx hay, bắt mắt', 0, NULL, NULL),
(38, 'Thuốc trị ve, giận', 8, 1, 0.00, 'thuốc trị ve giận.jpg', '', '33333', 0, NULL, NULL),
(39, 'Bát ăn nhựa', 9, 1, 40000.00, 'bát ăn nhựa 40k.jpg', '', 'Đẹp quá', 0, NULL, NULL),
(40, 'Chén inox', 9, 1, 0.00, 'chén inox 60k.jpg', '', 'dsfsfs', 0, NULL, NULL),
(41, '', 10, 1, 20000.00, 'găng tay trải lông chó mèo.jpg', '', 'dà', 0, NULL, NULL),
(42, 'Xẻng xúc phân', 10, 1, 25000.00, 'xẻng xúc phân.jpg', '', 'fadfasf', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sale`
--

CREATE TABLE `sale` (
  `sale_id` int(10) NOT NULL,
  `sall_off_code` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sale`
--

INSERT INTO `sale` (`sale_id`, `sall_off_code`, `date_from`, `date_to`, `created_at`, `updated_at`) VALUES
(1, 137, '2017-12-15', '2018-01-10', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(10) NOT NULL,
  `users_email` int(11) NOT NULL,
  `date_oder` date NOT NULL,
  `date_delivery` date NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `users_id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `billdetails`
--
ALTER TABLE `billdetails`
  ADD PRIMARY KEY (`billdetails_id`),
  ADD KEY `billDeatails_id` (`billdetails_id`),
  ADD KEY `bill_id` (`Transaction_id`),
  ADD KEY `products_id` (`products_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `category_id_2` (`category_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `products_id` (`products_id`),
  ADD KEY `saleoff_id` (`saleoff_id`);

--
-- Chỉ mục cho bảng `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `customers_id` (`users_email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `billdetails`
--
ALTER TABLE `billdetails`
  MODIFY `billdetails_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT cho bảng `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `billdetails`
--
ALTER TABLE `billdetails`
  ADD CONSTRAINT `billdetails_ibfk_1` FOREIGN KEY (`products_id`) REFERENCES `products` (`products_id`),
  ADD CONSTRAINT `billdetails_ibfk_2` FOREIGN KEY (`Transaction_id`) REFERENCES `transaction` (`transaction_id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`saleoff_id`) REFERENCES `sale` (`sale_id`);

--
-- Các ràng buộc cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`users_email`) REFERENCES `customers` (`customers_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
