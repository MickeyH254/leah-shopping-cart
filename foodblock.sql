-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 09:07 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodblock`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_04_214017_create_permission_tables', 1),
(4, '2018_10_04_214112_create_products_table', 1),
(5, '2018_10_06_202545_create_shoppingcart_table', 2),
(7, '2018_10_08_000000_create_users_table', 3),
(8, '2018_10_09_201324_create_transaction_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Dicta qui libero.', 'uploads/products/burger.png', 409, 'Inventore voluptatem minima qui in eius quidem. Qui et non ut quo. Sit doloremque debitis natus et iste. Nemo tenetur esse iusto commodi optio.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(2, 'Rerum dignissimos fugit architecto.', 'uploads/products/burger.png', 7648, 'Aut quas eum dolores libero non voluptatem sapiente. Exercitationem impedit id qui ut officiis tempore ut. Omnis sed laudantium excepturi iste veritatis iste nesciunt.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(3, 'Culpa omnis labore.', 'uploads/products/burger.png', 1665, 'Pariatur fuga fugiat deleniti repellendus veritatis laboriosam. Est ipsa autem sed vel in et sed. Asperiores est amet voluptates culpa suscipit et. Laborum qui quia soluta ducimus voluptatibus fugit mollitia.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(4, 'Molestias omnis.', 'uploads/products/burger.png', 8416, 'Quaerat assumenda est esse voluptate illum et sunt. Inventore suscipit dignissimos nobis illo non deserunt at aliquid. Ea veniam illo similique qui similique ad praesentium totam. Velit aut necessitatibus laudantium quidem necessitatibus. Vero dolorum consequuntur qui et libero aliquid nulla consequatur. Maiores debitis ut in eum harum et.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(5, 'Magni sapiente velit sed.', 'uploads/products/burger.png', 5954, 'Laborum voluptates nam temporibus tempora qui. Ex non asperiores et molestiae molestias. Magnam reiciendis velit nihil ut excepturi. Aut nisi fuga expedita. Quidem quia labore nulla quas voluptas.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(6, 'Quia porro corporis.', 'uploads/products/burger.png', 1687, 'Voluptas enim necessitatibus officia quis provident. Velit ex officia aperiam quaerat officiis dolorum id. Excepturi est hic est et. Quas laboriosam neque amet dolorem perferendis.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(7, 'Tempore libero autem possimus.', 'uploads/products/burger.png', 6619, 'Et qui quidem maxime est voluptatem eius. Possimus omnis error dolorem consequatur distinctio. Voluptatibus saepe maxime facere aut dolore amet eos. Et et dolores qui sint libero est.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(8, 'At repellendus laboriosam ullam.', 'uploads/products/burger.png', 4226, 'Exercitationem voluptas dolores dolores laudantium et modi quia. Veniam ut quaerat natus. Repellendus magni commodi eius ut praesentium dolore voluptate neque. Soluta et est similique explicabo et.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(9, 'Est dolore repudiandae dolore.', 'uploads/products/burger.png', 1940, 'Quos nihil consequatur voluptas exercitationem libero est. Iste eum molestiae dolorem molestias vel debitis. Aut nihil architecto dolore autem ea molestias.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(10, 'Magni est maxime eius.', 'uploads/products/burger.png', 9843, 'Ullam exercitationem veritatis quaerat nesciunt. Illum distinctio eos incidunt fugit sunt. Facere quisquam ut atque ea quia eum pariatur.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(11, 'Soluta impedit.', 'uploads/products/burger.png', 9536, 'Voluptatem praesentium velit maxime cupiditate sunt non. Consequatur mollitia asperiores asperiores incidunt. Sunt placeat excepturi quo. Reprehenderit quia placeat eum id. Totam rem adipisci molestias ut quasi et.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(12, 'Asperiores aut reprehenderit.', 'uploads/products/burger.png', 8718, 'Labore eum quia minus qui. Omnis et non esse. Dignissimos qui voluptas impedit dignissimos sit. Qui explicabo magni doloribus aliquam explicabo. Earum accusamus ipsa veniam aut expedita.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(13, 'Id culpa hic.', 'uploads/products/burger.png', 2765, 'Placeat rerum fugiat expedita occaecati. Quae possimus sit neque. Eligendi ut repellat voluptate dolor sed. Omnis sit dolorum aut deserunt consequuntur. Ex qui eum et quaerat.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(14, 'Saepe illum quo.', 'uploads/products/burger.png', 3889, 'Quia voluptates et eos sed exercitationem quia. Laudantium ea sunt autem dicta quia et fuga tempora. Voluptate quia quas et. Sit fugiat nam odit sunt veniam aut aut cupiditate. In officiis labore tempora.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(15, 'Libero quis pariatur voluptatem.', 'uploads/products/burger.png', 1711, 'Tempora aut nostrum laboriosam non rerum. Dolore veniam sed praesentium ut magnam id maiores. Iste nisi beatae eum voluptatum consectetur eius. Maxime ducimus unde aut. Sed dolorem voluptatem nemo porro quis maxime id. Expedita et sit modi facilis vero minima.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(16, 'Et provident enim optio.', 'uploads/products/burger.png', 8381, 'Eveniet molestiae et omnis architecto dolores. Sit expedita voluptatem vitae. Nisi eaque dolore molestias vel. Autem nisi tenetur non consequatur sequi itaque eius est.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(17, 'Aut omnis soluta magni aut.', 'uploads/products/burger.png', 1043, 'Ad repudiandae dolor laboriosam dolorem. Ut totam quibusdam consequuntur nostrum suscipit. Et omnis eos qui illum. Voluptatem non ut maxime consequatur.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(18, 'Ab eos necessitatibus.', 'uploads/products/burger.png', 4409, 'Voluptatum quaerat ut quo minus. Non alias quis consequatur. Fugit temporibus ut dolore maiores.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(19, 'Necessitatibus est repellat tempore.', 'uploads/products/burger.png', 6975, 'Optio aut eveniet assumenda unde sunt. Cum omnis voluptas nihil iste. Molestiae maiores animi assumenda adipisci dolores ut. Vero temporibus excepturi doloribus et rerum quos voluptatem. Provident totam corporis voluptas enim.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(20, 'Atque vel non ut.', 'uploads/products/burger.png', 6902, 'Sed cum voluptatem quis. Excepturi sunt consequuntur fuga voluptatem. Aut quia quia praesentium amet. Repudiandae quis rerum iure aliquam. Voluptas perspiciatis exercitationem suscipit adipisci laudantium ratione. Reiciendis suscipit assumenda sunt harum.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(21, 'Voluptatem molestiae ratione officiis.', 'uploads/products/burger.png', 9806, 'Voluptatem nam velit aut rerum perspiciatis. Quasi error voluptatum non numquam maxime enim et sed. Numquam qui voluptatem porro provident consequatur quibusdam veniam ad.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(22, 'Facilis reiciendis quia similique debitis.', 'uploads/products/burger.png', 7889, 'Veritatis ut unde dolores quos ipsa et velit cum. Qui asperiores autem eveniet corrupti accusamus cum officiis aspernatur. Qui error ea qui a velit. Facere laborum voluptas est omnis temporibus. Et molestiae sit in qui. Odit doloremque nam et quibusdam.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(23, 'Labore incidunt cupiditate occaecati.', 'uploads/products/burger.png', 4865, 'Recusandae cum rerum adipisci. Eveniet hic rem voluptatem veritatis. Sit dignissimos quia numquam deleniti natus. Quasi et alias quis sunt debitis est. Dolorum provident eos commodi delectus voluptatem.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(24, 'Pariatur ea voluptas.', 'uploads/products/burger.png', 3750, 'Harum labore consequuntur eum ut fuga dolorem dolores. A optio numquam quo eius ea. Rerum possimus accusamus maxime.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(25, 'Quis quo quis.', 'uploads/products/burger.png', 4386, 'Ratione sequi fugit non ullam fugiat nemo. Corrupti accusantium aut aspernatur sunt quas tempore et. Dicta et exercitationem nisi et magnam.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(26, 'Qui libero et.', 'uploads/products/burger.png', 112, 'Minus repellendus sunt ad dignissimos. Dolorem eius corporis necessitatibus assumenda et. Eos enim fugiat eos nemo earum quia accusamus. Illo consequatur odio eum beatae aliquam tempora quis. Nemo voluptas quisquam eaque delectus quia commodi iste. Qui architecto quae doloribus suscipit ut facere dolor.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(27, 'Libero excepturi id omnis.', 'uploads/products/burger.png', 1403, 'Qui quod et blanditiis id. Deserunt id ut ipsum doloremque. Ducimus incidunt voluptas nostrum et officiis sapiente aspernatur. Debitis dolorem facilis explicabo modi ad quo est. Alias hic placeat quam porro.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(28, 'Laboriosam aliquid voluptatem quis.', 'uploads/products/burger.png', 5176, 'Sint porro eum quae eligendi est beatae. Est animi et laudantium accusantium quibusdam est voluptate. Optio aut occaecati pariatur modi. Non fugit voluptas soluta libero quidem quidem quo. Ullam ut beatae rerum.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(29, 'Est quidem cumque facilis.', 'uploads/products/burger.png', 3246, 'Dicta molestiae quaerat et consequatur ut ducimus ex. Ea dolores vel et mollitia. Omnis sit dolor delectus nihil voluptas soluta. Aliquid dignissimos voluptas ex ullam exercitationem. Quo nostrum tenetur facere.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(30, 'Aut voluptas voluptatem.', 'uploads/products/burger.png', 9542, 'Corrupti similique ut ex qui voluptate. Iure quaerat sed eos excepturi autem facilis fugit libero. Minima ea aut doloremque temporibus neque. Fugit rem et eum quo ut illum qui.', '2018-10-05 08:14:56', '2018-10-05 08:14:56'),
(31, 'Dragon Multiple', 'dragon multiple.jpg', 600, 'It is good', NULL, NULL),
(32, 'Dragon Multi', 'uploads/red-bull single.jpg', 50, 'It is good', NULL, NULL),
(33, 'Cheese fries', 'uploads/Texas-Cheese-Fries-2-sm.jpg', 300, 'It is good', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_token_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_paid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `email`, `token`, `stripe_token_type`, `amount_paid`, `created_at`, `updated_at`) VALUES
(1, 'mickeyhotshot@gmail.com', 'tok_1DJWDRH70627zYineXSOlcQB', 'card', '7648', '2018-10-10 01:11:50', NULL),
(2, 'mickeyhotshot@gmail.com', 'tok_1DK24FH70627zYinkyYHKYaA', 'card', '15296', '2018-10-11 19:51:30', NULL),
(3, 'mickeyhotshot@gmail.com', 'tok_1DK6lUH70627zYinWQnpUd5N', 'card', '19034', '2018-10-11 19:51:17', NULL),
(4, 'mickeyhotshot@gmail.com', 'tok_1DK6qCH70627zYinWNxDiN6X', 'card', '10978', '2018-10-11 19:51:17', NULL),
(5, 'mickeyhotshot@gmail.com', 'tok_1DKqsZH70627zYinMo8ACalJ', 'card', '7648', '2018-10-13 14:26:43', NULL),
(6, 'mickeyhotshot@gmail.com', 'tok_1DKr3hH70627zYinArN8f4XF', 'card', '1665', '2018-10-13 14:38:16', NULL),
(7, 'mickeyhotshot@gmail.com', 'tok_1DKtiCH70627zYin8K8l2VbH', 'card', '2863', '2018-10-13 17:27:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '1',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Michael', 'mickeyhotshot@gmail.com', 1, '$2y$10$/0B2N8pEtU1dswgf.oUTBuoi7VfiANlvtnDauAEtKbch4iNmhhB.m', 'rmK3v29TuHDIyrLPcp8OPNkTLI29apWGTQW6GBHEFLDmIAe4WHQaqDoMgX2c', '2018-10-08 13:43:06', '2018-10-08 13:43:06'),
(2, 'Main', 't@t.com', 0, '$2y$10$oND./7Awc2BmmgovBEtriuN/LcQyFQJcZ6390cTKw8M4y8QvFpxli', 'pTnnY0fJEJLvMb1DehXjeGdr8bGQRlH2GE7KGnPQj8HaaDJIC07w53xjlU0b', '2018-10-08 13:44:11', '2018-10-08 13:44:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaction_token_unique` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
