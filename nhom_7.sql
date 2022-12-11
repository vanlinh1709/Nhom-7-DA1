-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 07:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
  `name` varchar(255) DEFAULT NULL,
  `banner_img` varchar(255) NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `banner_img`, `product_id`) VALUES
(1, NULL, 'cms_3.1.jpg', 1),
(2, NULL, 'cms_3.3.jpg', 1),
(4, NULL, 'cms_3.2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL
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
  `cate_name` varchar(100) NOT NULL,
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
(18, 'Giày bóng rổ', '2022-12-11', '2022-12-11'),
(19, 'Giày cầu lông', '2022-12-11', '2022-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `name_sender` varchar(255) DEFAULT NULL,
  `email_sender` varchar(255) DEFAULT NULL,
  `id_sp` int(11) NOT NULL,
  `contents` text NOT NULL,
  `status` int(5) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `id_user`, `name_sender`, `email_sender`, `id_sp`, `contents`, `status`, `created_at`) VALUES
(44, NULL, 'VietNam', 'vietnam1709@gmail.com', 65, 'Giày đẹp', 1, '2022-12-10 22:00:49'),
(50, NULL, 'admin', 'admin@gmail.com', 65, 'Cảm ơn bạn!', 0, '2022-12-11 22:49:48'),
(51, NULL, 'admin', 'admin@gmail.com', 65, 'Cảm ơn bạn!', 0, '2022-12-11 22:52:57'),
(52, NULL, 'admin', 'admin@gmail.com', 65, 'Cảm ơn bạn!', 1, '2022-12-11 23:38:30');

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
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `link_face` varchar(255) DEFAULT NULL,
  `link_twitter` varchar(255) DEFAULT NULL,
  `link_insta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `info_shop`
--

INSERT INTO `info_shop` (`id`, `phone`, `address`, `email`, `link_face`, `link_twitter`, `link_insta`) VALUES
(1, '085231121', '144 Nguyễn Trãi, Thanh Xuân, Hà Nội', 'pullman144@gmail.com', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` date NOT NULL,
  `poster` varchar(255) NOT NULL,
  `short_des` varchar(500) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `content`, `created_at`, `poster`, `short_des`, `product_id`) VALUES
(1, 'Giày Nike Air Zoom Pegasus 39 Premium là phiên bản cao cấp nhất của dòng Pegasus 39.Với những cải tiến vượt trội đặc biệt với việc gấp 2 lần lớp đệm Air Zoom so với phiên bản trước, Nike Air Zoom Pegasus 39 Premium xứng đáng là siêu phẩm được săn đón nhất hiện nay.', '2022-12-11', 'admin', 'Giày Nike Air Zoom Pegasus 39 Premium là phiên bản cao cấp nhất của dòng Pegasus 39.', 65),
(2, 'Giày Nike Air Zoom Pegasus 39 Premium là phiên bản cao cấp nhất của dòng Pegasus 39.Với những cải tiến vượt trội đặc biệt với việc gấp 2 lần lớp đệm Air Zoom so với phiên bản trước, Nike Air Zoom Pegasus 39 Premium xứng đáng là siêu phẩm được săn đón nhất hiện nay.', '2022-12-11', 'admin', 'Giày Nike Air Zoom Pegasus 39 Premium là phiên bản cao cấp nhất của dòng Pegasus 39.', 59),
(12, 'Giày Nike Air Zoom Pegasus 39 Premium là phiên bản cao cấp nhất của dòng Pegasus 39.Với những cải tiến vượt trội đặc biệt với việc gấp 2 lần lớp đệm Air Zoom so với phiên bản trước, Nike Air Zoom Pegasus 39 Premium xứng đáng là siêu phẩm được săn đón nhất hiện nay.', '2022-12-11', 'admin', 'Giày Nike Air Zoom Pegasus 39 Premium là phiên bản cao cấp nhất của dòng Pegasus 39.', 70),
(13, 'Giày Nike Air Zoom Pegasus 39 Premium là phiên bản cao cấp nhất của dòng Pegasus 39.Với những cải tiến vượt trội đặc biệt với việc gấp 2 lần lớp đệm Air Zoom so với phiên bản trước, Nike Air Zoom Pegasus 39 Premium xứng đáng là siêu phẩm được săn đón nhất hiện nay.', '2022-12-11', 'admin', 'Giày Nike Air Zoom Pegasus 39 Premium là phiên bản cao cấp nhất của dòng Pegasus 39.', 71),
(14, 'Giày Nike Air Zoom Pegasus 39 Premium là phiên bản cao cấp nhất của dòng Pegasus 39.Với những cải tiến vượt trội đặc biệt với việc gấp 2 lần lớp đệm Air Zoom so với phiên bản trước, Nike Air Zoom Pegasus 39 Premium xứng đáng là siêu phẩm được săn đón nhất hiện nay.', '2022-12-11', 'admin', 'Giày Nike Air Zoom Pegasus 39 Premium là phiên bản cao cấp nhất của dòng Pegasus 39.', 72),
(15, 'Giày Nike Air Zoom Pegasus 39 Premium là phiên bản cao cấp nhất của dòng Pegasus 39.Với những cải tiến vượt trội đặc biệt với việc gấp 2 lần lớp đệm Air Zoom so với phiên bản trước, Nike Air Zoom Pegasus 39 Premium xứng đáng là siêu phẩm được săn đón nhất hiện nay.', '2022-12-11', 'admin', 'Giày Nike Air Zoom Pegasus 39 Premium là phiên bản cao cấp nhất của dòng Pegasus 39.', 73);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_status` int(11) NOT NULL DEFAULT 1,
  `customer_name` varchar(191) NOT NULL,
  `customer_phone_number` varchar(191) NOT NULL,
  `customer_email` varchar(191) DEFAULT NULL,
  `customer_address` text NOT NULL,
  `total_price` int(11) NOT NULL DEFAULT 0,
  `payment_method` varchar(255) NOT NULL DEFAULT 'Thanh toán khi nhận hàng',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `id_status`, `customer_name`, `customer_phone_number`, `customer_email`, `customer_address`, `total_price`, `payment_method`, `created_at`, `updated_at`) VALUES
(5136, 50, 1, 'admin', '12', 'admin@gmail.com', '12', 0, 'Thanh toán khi nhận hàng', '2022-12-10 18:25:41', NULL),
(5543, NULL, 1, 'Food', '12', 'linhtvph18589@fpt.edu.vn', 'Hà nội', 900000, 'Thanh toán khi nhận hàng', '2022-12-04 23:13:57', NULL),
(6850, NULL, 2, 'Linh', '123451234 1', 'linhtvph18589@fpt.edu.vn', '144 Nguyễn Trãi, Thanh Xuân, Hà Nội', 7140000, 'Thanh toán khi nhận hàng', '2022-12-05 18:23:58', NULL),
(7622, 51, 2, 'Linh', '0852311221', 'linhtvph18589@fpt.edu.vn', 'Hud 3, 60 Nguyễn Đức Cảnh', 8000000, 'Thanh toán khi nhận hàng', NULL, NULL),
(7897, NULL, 1, 'Linh', '023865', 'linhtvph18589@fpt.edu.vn', 'Quảng ninh', 4500000, 'Thanh toán khi nhận hàng', '2022-12-02 16:29:50', NULL),
(9261, NULL, 1, 'Food', '12322222222222', 'linhtvph18589@fpt.edu.vn', 'Hà nội', 22000000, 'Thanh toán khi nhận hàng', '2022-11-24 12:02:41', NULL),
(9523, NULL, 2, 'Linh123', '01234', 'admin@gmail.com', 'Hà Nội', 5700000, 'Thanh toán khi nhận hàng', '2022-12-02 17:46:42', NULL),
(99095, 51, 0, 'Linh', '012', 'linhtvph18589@fpt.edu.vn', 'qư', 5658000, 'Thanh toán khi nhận hàng', '2022-12-12 00:30:02', NULL),
(549269, 51, 0, 'Linh', '012', 'linhtvph18589@fpt.edu.vn', 'qư', 2829000, 'Thanh toán khi nhận hàng', '2022-12-12 00:46:54', NULL),
(707239, 51, 0, 'Linh', '012', 'linhtvph18589@fpt.edu.vn', 'qư', 2829000, 'Thanh toán khi nhận hàng', '2022-12-12 00:45:36', NULL),
(709678, 51, 0, 'Linh', '012', 'linhtvph18589@fpt.edu.vn', 'qư', 2829000, 'Thanh toán khi nhận hàng', '2022-12-12 00:47:20', NULL);

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
(10, 7622, 63, 1, 1000000, NULL, NULL),
(11, 7622, 59, 1, 7000000, NULL, NULL),
(12, 9261, 59, 3, 21000000, NULL, NULL),
(13, 9261, 63, 1, 1000000, NULL, NULL),
(16, 7897, 63, 1, 1000000, NULL, NULL),
(19, 9523, 67, 3, 3900000, NULL, NULL),
(20, 9523, 65, 2, 1800000, NULL, NULL),
(21, 5543, 65, 1, 900000, NULL, NULL),
(22, 6850, 75, 2, 6980000, NULL, NULL),
(23, 6850, 70, 2, 160000, NULL, NULL),
(24, 5136, 1, 1, 100000, NULL, NULL),
(31, 99095, 83, 1, 2829000, NULL, NULL),
(32, 99095, 72, 1, 2829000, NULL, NULL),
(33, 707239, 83, 1, 2829000, NULL, NULL),
(34, 549269, 83, 1, 2829000, NULL, NULL),
(35, 709678, 83, 1, 2829000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT 'Đang chờ xử lý'
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
  `title` varchar(350) NOT NULL,
  `price` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `promo_price` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT 100,
  `thumbnail` varchar(500) NOT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `sales` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `price`, `number`, `promo_price`, `views`, `thumbnail`, `description`, `status`, `created_at`, `updated_at`, `sales`) VALUES
(1, 2, 2, 'Giày Nike Air Zoom Winflo  Aiba 81', 120000, 11, 100000, 325, 'product-5.jpg', 'Đầu tiên sẽ là mẫu giày air zoom winflo 8, đây là mẫu giày chạy bộ unisex (cho cả nam và nữ) với trọng lượng chỉ chưa đến 300 gram (bản nam) và 238 gram (bản nữ) thì rõ ràng rất tuyệt cho việc chạy bộ rồi. Lưới thoáng khí ở mũi giày và Flywire giúp thoải mái khi chạy vì nhiệt tăng cao trong giày.111', 1, '2022-11-16 15:41:41', '2022-11-16 15:41:41', 2),
(59, 15, 8, 'Giày thể thao nam Adidas Kasao V31', 800000, 10, 700000, 415, 'product-details-img4.jpg', 'Đẹp 1', 0, '2022-11-17 13:51:04', NULL, 10),
(63, 14, 1, 'Giày Nike Jordan 1 Low Black Toe.', 1200000, 10, 1000000, 325, 'product-details-img4.jpg', 'Giày Nike SB Delta Force Vulc mẫu giày thời trang basic không bao giờ lỗi mốt, chắc chắn ai cũng sẽ cần một đôi để có thể đi bất cứ nơi đâu đều rất phù hợp.', 1, '2022-11-20 22:57:08', NULL, 2),
(65, 15, 1, 'Giày NIKE METCON 8 TRAINING SHOES - HO22', 1000000, 5, 900000, 325, 'product-10.jpg', 'Giày Lacoste Game Advance là mẫu giày mới nhất của Lacoste. Giày Lacoste Game Advance Luxe có thiết kế cổ điển truyền thống của Lacoste nhưng lại có hơi hướng hiện đại rất hấp dẫn. Giày Lacoste Game Advance được làm từ chất liệu da lộn cao cấp của Lacoste, phần đế giày chất liệu cao su bền đẹp với thời gian. ', 1, '2022-11-20 23:00:52', NULL, 2),
(67, 13, 2, 'GIÀY RESPONSE', 1600000, 12, 1300000, 325, 'product-8.jpg', 'Tận hưởng sự êm ái và đàn hồi trong từng buổi chạy. Đôi giày adidas này mang đến cho bạn cảm giác thoải mái và nâng đỡ cần thiết để chinh phục đường chạy hoặc đường địa hình. Thân giày bằng vải lưới và cổ giày lót đệm cho độ ôm vừa khít, thoải mái. Đệm gót giày đúc Fitcounter tạo cảm giác vừa vặn tự nhiên. Đế giữa Bounce mang lại sự êm ái và linh hoạt cho sải bước tự nhiên và đàn hồi', 1, '2022-11-25 03:56:40', NULL, 2),
(70, 2, 1, 'Giày Nike Air Zoom Winflo V3  PROMAX - ĐỎ ĐẬM', 1000000, 1, 800000, 325, 'product-1.jpg', 'Phần quai: Lưới dệt không giãn.\r\n\r\nMục đích ôm chặt chân, không có giãn để chân được giữ chặt quá trình đi bộ.\r\n\r\nPhần đế: Cao su/Phylon thiết kế hoa văn từng mảng nhỏ, xẻ liên kết để phù hợp đi bộ không bị trượt, uốn gấp tốt.', 1, '2022-12-04 23:24:16', NULL, 2),
(71, 1, 1, 'GIÀY NIKE DUNK LOW NAM - RÊU NÂU', 1000000, 10, 800000, 351, 'product-4.jpg', 'Giày Nike Dunk Low là dòng giày sneaker rất được yêu thích của Nike trên toàn thế giới. Với thiết kế đơn giản nhưng đẹp mắt, Giày Nike Dunk Low chắc chắn là đôi giày không thể thiếu với bất cứ ai.', 1, '2022-12-05 16:30:50', NULL, 2),
(72, 1, 1, 'GIÀY NIKE AIR ZOOM PEGASUS 39 PREMIUM NAM - TRẮNG XANH', 3829000, 3, 2829000, 334, 'product-6.jpg', 'Giày Nike Air Zoom Pegasus 39 Premium là phiên bản cao cấp nhất của dòng Pegasus 39.Với những cải tiến vượt trội đặc biệt với việc gấp 2 lần lớp đệm Air Zoom so với phiên bản trước, Nike Air Zoom Pegasus 39 Premium xứng đáng là siêu phẩm được săn đón nhất hiện nay.', 1, '2022-12-05 16:31:54', NULL, 2),
(73, 2, 1, 'GIÀY NIKE PRECISION SERVER PRO DINAMON 5 NAM - ĐEN TRẮNG', 2450000, 5, 1990000, 325, 'product-10.jpg', 'Giày Nike Precision 5 một mẫu giày sneaker Nike làm bằng chất liệu cao cấp và công nghệ đỉnh cao sẽ là một lựa chọn tuyệt vời của các tín đồ sneaker.', 1, '2022-12-05 16:36:41', NULL, 2),
(74, 13, 1, 'GIÀY NIKE AIR ZOOM PEGASUS 39 PREMIUM NAM - TRẮNG XANH', 4829000, 10, 3829000, 325, 'product-1.jpg', 'Giày Nike Air Zoom Pegasus 39 Premium là phiên bản cao cấp nhất của dòng Pegasus 39.Với những cải tiến vượt trội đặc biệt với việc gấp 2 lần lớp đệm Air Zoom so với phiên bản trước, Nike Air Zoom Pegasus 39 Premium xứng đáng là siêu phẩm được săn đón nhất hiện nay.', 1, '2022-12-05 16:37:47', NULL, 2),
(75, 13, 1, 'GIÀY NIKE AIR ZOOM PEGASUS 39 NAM - XANH CAM', 3690000, 5, 3490000, 325, 'product-2.jpg', 'Giày Nike Air Zoom Pegasus 39 là mẫu giày thể thao phiên bản thứ 39 của dòng giày huyền thoại Nike Pegasus nổi tiếng. Với những cải tiến vượt trội đặc biệt với việc gấp 2 lần lớp đệm Air Zoom so với phiên bản trước, Nike Air Zoom Pegasus 39 xứng đáng là siêu phẩm được săn đón nhất năm 2022.', 1, '2022-12-05 16:38:43', NULL, 2),
(79, 1, 1, 'GIÀY NIKE DUNK LOW NAM 12 - RÊU NÂU', 1000000, 10, 800000, 351, 'product-6.jpg', 'Giày Nike Dunk Low là dòng giày sneaker rất được yêu thích của Nike trên toàn thế giới. Với thiết kế đơn giản nhưng đẹp mắt, Giày Nike Dunk Low chắc chắn là đôi giày không thể thiếu với bất cứ ai.', 1, '2022-12-05 16:30:50', NULL, 2),
(80, 14, 1, 'Giày Nike Jordan 1 Low Black Toe.', 1200000, 10, 1000000, 325, 'product-details-img5.jpg', 'Giày Nike SB Delta Force Vulc mẫu giày thời trang basic không bao giờ lỗi mốt, chắc chắn ai cũng sẽ cần một đôi để có thể đi bất cứ nơi đâu đều rất phù hợp.', 1, '2022-11-20 22:57:08', NULL, 2),
(81, 15, 1, 'Giày NIKE METCON 8 TRAINING SHOES - HO22', 1000000, 5, 900000, 325, 'product-10.jpg', 'Giày Lacoste Game Advance là mẫu giày mới nhất của Lacoste. Giày Lacoste Game Advance Luxe có thiết kế cổ điển truyền thống của Lacoste nhưng lại có hơi hướng hiện đại rất hấp dẫn. Giày Lacoste Game Advance được làm từ chất liệu da lộn cao cấp của Lacoste, phần đế giày chất liệu cao su bền đẹp với thời gian. ', 1, '2022-11-20 23:00:52', NULL, 2),
(82, 1, 1, 'GIÀY NIKE DUNK LOW NAM - RÊU NÂU', 1000000, 10, 800000, 351, 'product-3.jpg', 'Giày Nike Dunk Low là dòng giày sneaker rất được yêu thích của Nike trên toàn thế giới. Với thiết kế đơn giản nhưng đẹp mắt, Giày Nike Dunk Low chắc chắn là đôi giày không thể thiếu với bất cứ ai.', 1, '2022-12-05 16:30:50', NULL, 2),
(83, 1, 1, 'GIÀY NIKE AIR ZOOM PEGASUS 39 PREMIUM NAM - TRẮNG XANH', 3829000, 3, 2829000, 334, 'product-2.jpg', 'Giày Nike Air Zoom Pegasus 39 Premium là phiên bản cao cấp nhất của dòng Pegasus 39.Với những cải tiến vượt trội đặc biệt với việc gấp 2 lần lớp đệm Air Zoom so với phiên bản trước, Nike Air Zoom Pegasus 39 Premium xứng đáng là siêu phẩm được săn đón nhất hiện nay.', 1, '2022-12-05 16:31:54', NULL, 2),
(84, 1, 1, 'GIÀY NIKE DUNK LOW NAM 12 - RÊU NÂU', 1000000, 10, 800000, 351, 'product-1.jpg', 'Giày Nike Dunk Low là dòng giày sneaker rất được yêu thích của Nike trên toàn thế giới. Với thiết kế đơn giản nhưng đẹp mắt, Giày Nike Dunk Low chắc chắn là đôi giày không thể thiếu với bất cứ ai.', 1, '2022-12-05 16:30:50', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `list_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `promo_name` varchar(255) NOT NULL,
  `promo_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
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
  `slideshow_img` varchar(500) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `slideshow_img`, `product_id`) VALUES
(23, 'home2-slide2.jpg', 59),
(25, 'home1-slide2.jpg', 63);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `avatar` varchar(255) DEFAULT 'uploads/avtcmt.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone_number`, `address`, `password`, `role_id`, `created_at`, `updated_at`, `avatar`) VALUES
(1, 'Trần Văn Linh', 'linh@gmail.com', '012', 'Hà Nội', '123', 2, '2022-11-15 19:19:53', '2022-11-15 19:19:53', 'men.png'),
(24, 'Nguyễn Lương Thắng', 'thang@gmail.com', '123', 'Quảng ninh', '123', 2, '2022-11-16 16:33:35', '2022-11-16 16:33:35', 'men.png'),
(25, 'Nguyễn Tài Hải', 'hai@gmail.com', '123', 'Cà mau', '123', 2, '2022-11-16 22:23:34', '2022-11-16 22:23:34', 'ezgif.com-gif-maker.jpg'),
(50, 'admin', 'admin@gmail.com', '12', '12', 'admin', 2, '2022-11-18 17:43:21', '2022-11-18 17:43:21', 'chu an.jpg'),
(51, 'Linh', 'linhtvph18589@fpt.edu.vn', '012', 'qư', '123', 1, '2022-11-19 16:10:07', '2022-11-19 16:10:07', 'men.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=909030;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `order_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
