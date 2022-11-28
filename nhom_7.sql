-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 07:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom_7`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `image`) VALUES
(1, 'Nike', 'nike.jpg'),
(2, 'Adidas', 'Adidas.jpg'),
(8, 'Puma', 'puma.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `created_at`, `updated_at`) VALUES
(1, 'Giày chạy bộ', '2022-11-16', '2022-11-16'),
(2, 'Giày Boxing', '2022-11-16', '2022-11-16'),
(13, 'Giày leo núi', '2022-11-19', '2022-11-19'),
(14, 'Giày đá bóng', '2022-11-19', '2022-11-19'),
(15, 'Giày tập gym', '2022-11-19', '2022-11-19'),
(16, 'Giày bóng chuyền', '2022-11-19', '2022-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_cmt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avt_cmt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_sp` int(11) NOT NULL,
  `contents` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_products`
--

CREATE TABLE `favorite_products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info_shop`
--

CREATE TABLE `info_shop` (
  `id` int(1) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `info_shop`
--

INSERT INTO `info_shop` (`id`, `phone`, `address`, `email`) VALUES
(1, '085231121', '144 Nguyễn Trãi, Thanh Xuân, Hà Nội', 'pullman144@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `news_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `update_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_status` int(11) NOT NULL DEFAULT 1,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL DEFAULT 0,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Thanh toán khi nhận hàng',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `id_status`, `customer_name`, `customer_phone_number`, `customer_email`, `customer_address`, `total_price`, `payment_method`, `created_at`, `updated_at`) VALUES
(4737, 52, 2, 'Trần Thanh Ngọc', '0123445', 'ngoctt18589@fpt.edu.vn', 'Hà nội', 5400000, '1', NULL, NULL),
(7578, 52, 1, 'Trần Thanh Ngọc', '0123445', 'ngoctt18589@fpt.edu.vn', 'Hà nội', 5400000, '1', NULL, NULL),
(7622, 51, 1, 'Linh', '0852311221', 'linhtvph18589@fpt.edu.vn', 'Hud 3, 60 Nguyễn Đức Cảnh', 8000000, 'Thanh toán khi nhận hàng', NULL, NULL),
(7721, 52, 1, 'Trần Thanh Ngọc', '0123445', 'ngoctt18589@fpt.edu.vn', 'Hà nội', 5300000, '1', NULL, NULL),
(8038, 52, 1, 'Trần Thanh Ngọc', '0123445', 'ngoctt18589@fpt.edu.vn', 'Hà nội', 3500000, 'Thanh toán khi nhận hàng', '2022-11-24 12:03:20', NULL),
(9137, 52, 3, 'Trần Thanh Ngọc', '0123445', 'ngoctt18589@fpt.edu.vn', 'Hà nội', 5300000, '1', NULL, NULL),
(9261, NULL, 1, 'Food', '12322222222222', 'linhtvph18589@fpt.edu.vn', 'Hà nội', 22000000, 'Thanh toán khi nhận hàng', '2022-11-24 12:02:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity_product` int(11) NOT NULL,
  `total_money` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity_product`, `total_money`, `created_at`, `update_at`) VALUES
(1, 7721, 64, 1, 3500000, NULL, NULL),
(2, 7721, 65, 2, 1800000, NULL, NULL),
(3, 4737, 65, 1, 900000, NULL, NULL),
(4, 4737, 64, 1, 3500000, NULL, NULL),
(5, 4737, 63, 1, 1000000, NULL, NULL),
(6, 7578, 65, 1, 900000, NULL, NULL),
(7, 7578, 64, 1, 3500000, NULL, NULL),
(8, 7578, 63, 1, 1000000, NULL, NULL),
(10, 7622, 63, 1, 1000000, NULL, NULL),
(11, 7622, 59, 1, 7000000, NULL, NULL),
(12, 9261, 59, 3, 21000000, NULL, NULL),
(13, 9261, 63, 1, 1000000, NULL, NULL),
(14, 8038, 64, 1, 3500000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Đang chờ xử lý'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(0, 'Đã hủy'),
(1, 'Chờ xác nhận'),
(2, 'Đang vận chuyển'),
(3, 'Giao hàng thành công');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `title` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `promo_price` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT 100,
  `thumbnail` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `sales` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `price`, `number`, `promo_price`, `views`, `thumbnail`, `description`, `status`, `created_at`, `updated_at`, `sales`) VALUES
(1, 2, 2, 'Giày Nike Air Zoom Winflo ', 120000, 11, 100000, 100, 'product-5.jpg', 'Đầu tiên sẽ là mẫu giày air zoom winflo 8, đây là mẫu giày chạy bộ unisex (cho cả nam và nữ) với trọng lượng chỉ chưa đến 300 gram (bản nam) và 238 gram (bản nữ) thì rõ ràng rất tuyệt cho việc chạy bộ rồi. Lưới thoáng khí ở mũi giày và Flywire giúp thoải mái khi chạy vì nhiệt tăng cao trong giày.111', 1, '2022-11-16 15:41:41', '2022-11-16 15:41:41', 2),
(59, 1, 1, 'Giày thể thao nam Adidas 1', 8000000, 31, 7000000, 190, 'product-7.jpg', 'Đẹp 1', 1, '2022-11-17 13:51:04', NULL, 10),
(63, 14, 1, 'Giày Nike Jordan 1 Low Black Toe.', 1200000, 10, 1000000, 100, 'product-details-img4.jpg', 'Giày Nike SB Delta Force Vulc mẫu giày thời trang basic không bao giờ lỗi mốt, chắc chắn ai cũng sẽ cần một đôi để có thể đi bất cứ nơi đâu đều rất phù hợp.', 1, '2022-11-20 22:57:08', NULL, 2),
(64, 16, 8, 'GIÀY PUMA SOFTRIDE FEEL NAM - XANH NAVY', 4000000, 3, 3500000, 100, 'product-9.jpg', 'Giày Puma Softride Feel là mẫu giày thể thao có có thiết kế đơn giản mà rất tinh tế. Một mẫu giày mà bạn có thế sử dụng trong mọi hoạt động hàng ngày.', 1, '2022-11-20 22:59:09', NULL, 2),
(65, 15, 1, 'Giày NIKE METCON 8 TRAINING SHOES - HO22', 1000000, 5, 900000, 100, 'product-10.jpg', 'Giày Lacoste Game Advance là mẫu giày mới nhất của Lacoste. Giày Lacoste Game Advance Luxe có thiết kế cổ điển truyền thống của Lacoste nhưng lại có hơi hướng hiện đại rất hấp dẫn. Giày Lacoste Game Advance được làm từ chất liệu da lộn cao cấp của Lacoste, phần đế giày chất liệu cao su bền đẹp với thời gian. ', 1, '2022-11-20 23:00:52', NULL, 2),
(67, 13, 2, 'GIÀY RESPONSE', 1600000, 12, 1300000, 100, 'product-8.jpg', 'Tận hưởng sự êm ái và đàn hồi trong từng buổi chạy. Đôi giày adidas này mang đến cho bạn cảm giác thoải mái và nâng đỡ cần thiết để chinh phục đường chạy hoặc đường địa hình. Thân giày bằng vải lưới và cổ giày lót đệm cho độ ôm vừa khít, thoải mái. Đệm gót giày đúc Fitcounter tạo cảm giác vừa vặn tự nhiên. Đế giữa Bounce mang lại sự êm ái và linh hoạt cho sải bước tự nhiên và đàn hồi', 1, '2022-11-25 03:56:40', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `list_image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `promo_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `promo_image` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `slideshow_img` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `slideshow_img`, `product_id`) VALUES
(21, 'home2-slide1.jpg', 63),
(23, 'home2-slide2.jpg', 59),
(25, 'home1-slide2.jpg', 63);

-- --------------------------------------------------------

--
-- Table structure for table `subbanner`
--

CREATE TABLE `subbanner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'uploads/avtcmt.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone_number`, `address`, `password`, `role_id`, `created_at`, `updated_at`, `avatar`) VALUES
(1, 'Trần Văn Linh', 'linh@gmail.com', '012', 'Hà Nội', '123', 2, '2022-11-15 19:19:53', '2022-11-15 19:19:53', 'men.png'),
(24, 'Nguyễn Lương Thắng', 'thang@gmail.com', '123', 'Quảng ninh', '123', 2, '2022-11-16 16:33:35', '2022-11-16 16:33:35', 'men.png'),
(25, 'Nguyễn Tài Hải', 'hai@gmail.com', '123', 'Cà mau', '123', 2, '2022-11-16 22:23:34', '2022-11-16 22:23:34', 'ezgif.com-gif-maker.jpg'),
(50, 'admin', 'admin@gmail.com', '12', '12', 'admin', 2, '2022-11-18 17:43:21', '2022-11-18 17:43:21', 'chu an.jpg'),
(51, 'Linh', 'linhtvph18589@fpt.edu.vn', '012', 'qư', '123', 1, '2022-11-19 16:10:07', '2022-11-19 16:10:07', 'men.png'),
(52, 'Trần Thanh Ngọc', 'ngoctt18589@fpt.edu.vn', '0123445', 'Hà nội', '123', 1, '2022-11-19 22:37:56', '2022-11-19 22:37:56', 'uploads/avtcmt.png'),
(53, '12', 'linhtvph18589@fpt.edu.vn', NULL, NULL, '12', 1, '2022-11-19 22:58:22', '2022-11-19 22:58:22', 'uploads/avtcmt.png'),
(54, 'Trần Ngọc Lan', 'lan@gmail.com', '0123', 'Cà mau', '123', 1, '2022-11-19 23:19:07', '2022-11-19 23:19:07', 'uploads/avtcmt.png'),
(55, 'meo', 'meo@gmail.com', NULL, NULL, '123', 1, '2022-11-22 21:22:33', '2022-11-22 21:22:33', 'uploads/avtcmt.png'),
(56, 'abc', 'admin@gmail.com', NULL, NULL, '123', 1, '2022-11-22 21:28:29', '2022-11-22 21:28:29', 'uploads/avtcmt.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Indexes for table `favorite_products`
--
ALTER TABLE `favorite_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `info_shop`
--
ALTER TABLE `info_shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_ttdh` (`id_status`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`category_id`),
  ADD KEY `product_brand_id` (`brand_id`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subbanner`
--
ALTER TABLE `subbanner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ibfk_1` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `favorite_products`
--
ALTER TABLE `favorite_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `info_shop`
--
ALTER TABLE `info_shop`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9262;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `subbanner`
--
ALTER TABLE `subbanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `products` (`id`);

--
-- Constraints for table `favorite_products`
--
ALTER TABLE `favorite_products`
  ADD CONSTRAINT `favorite_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `favorite_products_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `order_status` (`id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
