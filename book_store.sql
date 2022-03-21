-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2022 at 01:36 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book.store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `descriptions`, `slug`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Truyện Tranh', 'truyện có tranh', 'truyen-tranh', '0123456789', '2022-03-03 04:54:37', '2022-03-08 20:17:37'),
(2, 'Truyện kinh dị', NULL, 'kinh-di', '0123456789', '2022-03-03 08:10:38', '2022-03-05 21:55:32'),
(3, 'Truyện kiếm hiệp', NULL, 'kiem-hiep', '0123456789', '2022-03-03 08:13:20', '2022-03-03 08:13:20'),
(5, 'Truyện cười', NULL, 'truyen-cuoi', '0123456789', '2022-03-05 22:01:03', '2022-03-05 22:01:03'),
(6, 'Truyện ngôn tình', NULL, 'ngon-tinh', '0123456789', '2022-03-07 06:41:24', '2022-03-07 06:41:24'),
(9, 'Tiểu thuyết', NULL, NULL, '0123456789', '2022-03-07 06:42:18', '2022-03-07 06:42:18'),
(10, 'Truyện ngắn-sách', NULL, NULL, '0123456789', '2022-03-07 06:42:33', '2022-03-13 19:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `password`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Hoang Nhu', '0367898643', '235 Hoang quoc viet', '12345678h', 'nuoccam2k@gmail.com', '2022-03-09 11:11:38', '2022-03-09 11:11:38'),
(3, 'Kiều  Trang', '0367898668', '235 Hoang quoc viet', '12345678h', 'trangkieu@gmail.com', '2022-03-09 11:12:35', '2022-03-09 11:12:35'),
(4, 'thuphuong', '0367898666', '235 Hoang quoc viet', '12345678h', 'thuphuong123@gmail.com', '2022-03-09 11:13:44', '2022-03-09 11:13:44'),
(5, 'nuoccam', '0367898688', '235 Hoang quoc viet', '12345678h', 'nhuviethoang2k@gmail.com', '2022-03-09 11:15:16', '2022-03-09 11:15:16'),
(6, 'Trang Kiều', '0373177267', '235 Hoang quoc viet', '$2y$10$3zVWcOSTctLUAPHXkV8iI.E4CEXzsmeiF.ED0iqtpWcPk.dO7Q0B6', 'kieutrang@gmail.com', '2022-03-09 19:19:11', '2022-03-09 19:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_03_015232_create_categories_table', 2),
(6, '2022_03_06_102719_creata_products_table', 3),
(7, '2022_03_06_141624_create_products_table', 4),
(8, '2022_03_09_110410_create_customers_table', 5),
(9, '2022_03_09_173326_create_customers_table', 6),
(10, '2022_03_09_175054_create_customers_table', 7),
(11, '2022_03_14_135652_create_order_products_table', 8),
(12, '2022_03_14_142517_create_order_rent_table', 8),
(13, '2022_03_16_165153_create_suppliers_table', 9),
(14, '2022_03_17_074836_create_product_supplier_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_rent`
--

CREATE TABLE `order_rent` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `start_day` timestamp NOT NULL,
  `expiration_date` timestamp NOT NULL,
  `this_day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_rent`
--

INSERT INTO `order_rent` (`id`, `customer_id`, `name_product`, `price`, `start_day`, `expiration_date`, `this_day`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 'Doraemon: Nobita và đảo giấu vàng', 4000, '2022-03-15 17:00:00', '2022-03-17 17:00:00', '2022-03-17 17:00:00', 'nhận tại cửa hàng', 1, '2022-03-14 20:50:59', '2022-03-17 19:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) DEFAULT '0',
  `origin_price` int(11) DEFAULT '0',
  `sale_price` int(11) DEFAULT '0',
  `rent_price` int(11) DEFAULT '0',
  `discount_percent` int(11) DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `origin_price`, `sale_price`, `rent_price`, `discount_percent`, `description`, `image`, `user_id`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Doraemon: Nobita và đảo giấu vàng', 0, 23000, NULL, 2000, 0, NULL, 'ĐRM_đảo_giấu_vàng.jpg', 1, 1, 0, '2022-03-07 00:42:58', '2022-03-07 00:42:58'),
(2, 'Conan tập 1', 0, 23000, NULL, 2000, 0, NULL, 'conan1.jpg', 1, 1, 0, '2022-03-07 03:35:45', '2022-03-07 03:35:45'),
(4, 'Trạng Quỳnh', 100, 70000, NULL, 4000, 0, NULL, 'trang-quynh.jpg', 1, 5, 1, '2022-03-07 06:46:39', '2022-03-07 06:46:39'),
(5, 'Đắc Nhân Tâm', 100, 100000, NULL, 4000, 0, NULL, 'dac-nhan-tam.jpg', 1, 10, 0, '2022-03-10 04:04:12', '2022-03-10 04:04:12'),
(6, 'Thanh xuân của ai không mơ hồ', 50, 100000, NULL, 4000, 0, NULL, 'thanh-xuan.jpg', 1, 6, 0, '2022-03-10 04:05:07', '2022-03-10 04:05:07'),
(7, 'Cô gái năm ấy chúng ta cùng theo đuổi', 50, 120000, NULL, 4000, 0, NULL, 'co-gai-nam-ay-chung-ta-cung-theo-duoi.jpg', 1, 6, 0, '2022-03-10 04:06:48', '2022-03-10 04:06:48'),
(8, 'Tiếu Ngạo Giang Hồ', 70, 30000, NULL, 1000, 0, NULL, 'tngh.jpg', 1, 3, 0, '2022-03-10 04:07:28', '2022-03-10 04:07:28'),
(9, 'Phong Vân Truyện', 40, 23000, NULL, 1000, 0, NULL, 'phong-van.jpg', 1, 3, 0, '2022-03-10 04:08:08', '2022-03-10 04:08:08'),
(10, 'Ring', 50, 100000, NULL, 1000, 0, NULL, 'ring.jpg', 1, 2, 0, '2022-03-10 04:08:47', '2022-03-10 04:08:47'),
(11, 'IT', 50, 120000, NULL, 1000, 0, NULL, 'it_stephen_king.jpg', 1, 2, 0, '2022-03-10 04:09:47', '2022-03-10 04:09:47'),
(12, 'Ác quỷ nam kinh', 40, 100000, NULL, 1000, 0, NULL, 'namkinh.jpg', 1, 2, NULL, '2022-03-10 04:10:50', '2022-03-10 04:10:50');

-- --------------------------------------------------------

--
-- Table structure for table `product_supplier`
--

CREATE TABLE `product_supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_supplier`
--

INSERT INTO `product_supplier` (`id`, `product_id`, `supplier_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-03-17 02:09:10', '2022-03-17 02:09:10'),
(2, 2, 1, '2022-03-17 02:09:10', '2022-03-17 02:09:10'),
(3, 4, 1, '2022-03-17 02:09:10', '2022-03-17 02:09:10'),
(4, 10, 2, '2022-03-17 02:33:29', '2022-03-17 02:33:29'),
(5, 11, 2, '2022-03-17 02:33:29', '2022-03-17 02:33:29'),
(6, 12, 2, '2022-03-17 02:33:29', '2022-03-17 02:33:29'),
(7, 5, 3, '2022-03-17 06:47:39', '2022-03-17 06:47:39'),
(8, 6, 3, '2022-03-17 06:47:39', '2022-03-17 06:47:39'),
(9, 7, 3, '2022-03-17 06:47:39', '2022-03-17 06:47:39'),
(10, 8, 3, '2022-03-17 06:47:39', '2022-03-17 06:47:39'),
(11, 9, 3, '2022-03-17 06:47:39', '2022-03-17 06:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Nhà Sách Trung Kính', 'sachtrungkinh@gmail.com', '0123456789', '119 Trung Kính', '2022-03-17 02:09:10', '2022-03-17 02:09:10'),
(2, 'Nhà Sách Kiều Trang', 'trangkieu@gmail.com', '0123654789', 'đội cấn 3 đình', '2022-03-17 02:33:29', '2022-03-17 02:33:29'),
(3, 'Nhà Sách Tiền Phong', 'tienphong@gmail.com', '0123444789', '61 khuc thua du', '2022-03-17 06:47:39', '2022-03-17 06:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `address`, `password`, `email`, `image`, `role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '0123456789', 'Hà Nội', '$2y$10$krELAixzxs5MhbUqP6sVHOsrldtDsV5Gj1hFl.jrFbbwxTDmLOay6', 'admin@gmail.com', NULL, 0, NULL, NULL, '2022-03-01 20:07:57', '2022-03-01 20:07:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_name_unique` (`name`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_rent`
--
ALTER TABLE `order_rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_supplier`
--
ALTER TABLE `product_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_rent`
--
ALTER TABLE `order_rent`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_supplier`
--
ALTER TABLE `product_supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
