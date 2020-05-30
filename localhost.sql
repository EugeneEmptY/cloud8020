-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 30 2020 г., 21:01
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `localhost`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `driverName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `carNumber` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `driverName`, `user_id`, `carNumber`, `created_at`, `updated_at`) VALUES
(84, 'Norman Reedus', 5, 'ABC-111', '2020-05-30 09:50:11', '2020-05-30 09:50:11'),
(85, 'Norman Reedus', 5, 'ABC-222', '2020-05-30 09:51:31', '2020-05-30 09:51:31'),
(86, 'Norman Reedus', 5, 'ABC-333', '2020-05-30 09:52:08', '2020-05-30 09:52:08'),
(87, 'Norman Reedus', 5, 'ABC-444', '2020-05-30 09:52:28', '2020-05-30 09:52:28'),
(88, 'Norman Reedus', 5, 'ABC-555', '2020-05-30 09:53:26', '2020-05-30 09:53:26'),
(89, 'Danai Gurira', 2, 'DEF-111', '2020-05-30 09:54:02', '2020-05-30 09:54:02'),
(90, 'Danai Gurira', 2, 'DEF-222', '2020-05-30 09:54:20', '2020-05-30 09:54:20'),
(91, 'Danai Gurira', 2, 'DEF-333', '2020-05-30 09:54:37', '2020-05-30 09:54:37'),
(92, 'Danai Gurira', 2, 'DEF-444', '2020-05-30 09:54:51', '2020-05-30 09:54:51'),
(93, 'Danai Gurira', 2, 'DEF-555', '2020-05-30 09:55:04', '2020-05-30 09:55:04'),
(94, 'Melissa McBride', 4, 'GHI-111', '2020-05-30 09:57:26', '2020-05-30 09:57:26'),
(95, 'Melissa McBride', 4, 'GHI-222', '2020-05-30 09:57:37', '2020-05-30 09:57:37'),
(96, 'Melissa McBride', 4, 'GHI-333', '2020-05-30 09:57:48', '2020-05-30 09:57:48'),
(97, 'Melissa McBride', 4, 'GHI-444', '2020-05-30 09:58:20', '2020-05-30 09:58:20'),
(98, 'Melissa McBride', 4, 'GHI-555', '2020-05-30 09:58:30', '2020-05-30 09:58:30');

-- --------------------------------------------------------

--
-- Структура таблицы `car_fleets`
--

CREATE TABLE `car_fleets` (
  `id` int(10) UNSIGNED NOT NULL,
  `carFleetTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carFleetAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carFleetSchedule` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `car_fleets`
--

INSERT INTO `car_fleets` (`id`, `carFleetTitle`, `carFleetAddress`, `carFleetSchedule`, `created_at`, `updated_at`) VALUES
(15, 'Car Fleet 1', 'Car Fleet 1 Address', '8:00 AM - 10:00 PM', '2020-05-30 09:31:31', '2020-05-30 09:31:31'),
(16, 'Car Fleet 2', 'Car Fleet 2 Address', NULL, '2020-05-30 09:33:10', '2020-05-30 09:33:10'),
(17, 'Car Fleet 3', 'Car Fleet 3 Address', '8:00 AM - 10:00 PM', '2020-05-30 09:33:23', '2020-05-30 09:33:23'),
(18, 'Car Fleet 4', 'Car Fleet 4 Address', NULL, '2020-05-30 09:37:12', '2020-05-30 09:37:12'),
(19, 'Car Fleet 5', 'Car Fleet 5 Address', '8:00 AM - 10:00 PM', '2020-05-30 09:37:19', '2020-05-30 09:37:19'),
(20, 'Car Fleet 6', 'Car Fleet 6 Address', NULL, '2020-05-30 09:37:27', '2020-05-30 09:37:27'),
(21, 'Car Fleet 7', 'Car Fleet 7 Address', NULL, '2020-05-30 09:37:36', '2020-05-30 09:37:36'),
(22, 'Car Fleet 8', 'Car Fleet 8 Address', '8:00 AM - 10:00 PM', '2020-05-30 09:37:43', '2020-05-30 09:37:43'),
(23, 'Car Fleet 9', 'Car Fleet 9 Address', '8:00 AM - 10:00 PM', '2020-05-30 09:37:50', '2020-05-30 09:37:50'),
(24, 'Car Fleet 10', 'Car Fleet 10 Address', '8:00 AM - 10:00 PM', '2020-05-30 09:38:32', '2020-05-30 09:38:32'),
(25, 'Car Fleet 11', 'Car Fleet 11 Address', NULL, '2020-05-30 09:38:41', '2020-05-30 09:38:41'),
(26, 'Car Fleet 12', 'Car Fleet 12 Address', '8:00 AM - 10:00 PM', '2020-05-30 09:38:51', '2020-05-30 09:38:51'),
(27, 'Car Fleet 13', 'Car Fleet 13 Address', '8:00 AM - 10:00 PM', '2020-05-30 09:39:03', '2020-05-30 09:39:03'),
(28, 'Car Fleet 14', 'Car Fleet 14 Address', NULL, '2020-05-30 09:39:12', '2020-05-30 09:39:12'),
(29, 'Car Fleet 15', 'Car Fleet 15 Address', NULL, '2020-05-30 09:39:22', '2020-05-30 09:39:22'),
(30, 'Car Fleet 16', 'Car Fleet 16 Address', '8:00 AM - 10:00 PM', '2020-05-30 11:02:22', '2020-05-30 11:02:22');

-- --------------------------------------------------------

--
-- Структура таблицы `car_fleets_cars`
--

CREATE TABLE `car_fleets_cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `car_fleets_id` int(10) UNSIGNED NOT NULL,
  `cars_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `car_fleets_cars`
--

INSERT INTO `car_fleets_cars` (`id`, `car_fleets_id`, `cars_id`, `created_at`, `updated_at`) VALUES
(34, 15, 84, '2020-05-30 09:50:11', '2020-05-30 09:50:11'),
(35, 16, 84, '2020-05-30 09:50:11', '2020-05-30 09:50:11'),
(36, 17, 84, '2020-05-30 09:50:11', '2020-05-30 09:50:11'),
(37, 18, 85, '2020-05-30 09:51:32', '2020-05-30 09:51:32'),
(38, 19, 85, '2020-05-30 09:51:32', '2020-05-30 09:51:32'),
(39, 20, 85, '2020-05-30 09:51:32', '2020-05-30 09:51:32'),
(40, 22, 86, '2020-05-30 09:52:08', '2020-05-30 09:52:08'),
(41, 23, 86, '2020-05-30 09:52:08', '2020-05-30 09:52:08'),
(42, 24, 86, '2020-05-30 09:52:08', '2020-05-30 09:52:08'),
(43, 21, 87, '2020-05-30 09:52:28', '2020-05-30 09:52:28'),
(44, 25, 87, '2020-05-30 09:52:28', '2020-05-30 09:52:28'),
(45, 26, 87, '2020-05-30 09:52:28', '2020-05-30 09:52:28'),
(46, 27, 88, '2020-05-30 09:53:27', '2020-05-30 09:53:27'),
(47, 28, 88, '2020-05-30 09:53:27', '2020-05-30 09:53:27'),
(48, 29, 88, '2020-05-30 09:53:27', '2020-05-30 09:53:27'),
(49, 15, 89, '2020-05-30 09:54:02', '2020-05-30 09:54:02'),
(50, 16, 89, '2020-05-30 09:54:02', '2020-05-30 09:54:02'),
(51, 29, 89, '2020-05-30 09:54:02', '2020-05-30 09:54:02'),
(52, 17, 90, '2020-05-30 09:54:20', '2020-05-30 09:54:20'),
(53, 27, 90, '2020-05-30 09:54:20', '2020-05-30 09:54:20'),
(54, 28, 90, '2020-05-30 09:54:20', '2020-05-30 09:54:20'),
(55, 18, 91, '2020-05-30 09:54:37', '2020-05-30 09:54:37'),
(56, 19, 91, '2020-05-30 09:54:37', '2020-05-30 09:54:37'),
(57, 26, 91, '2020-05-30 09:54:37', '2020-05-30 09:54:37'),
(58, 20, 92, '2020-05-30 09:54:51', '2020-05-30 09:54:51'),
(59, 24, 92, '2020-05-30 09:54:51', '2020-05-30 09:54:51'),
(60, 25, 92, '2020-05-30 09:54:51', '2020-05-30 09:54:51'),
(61, 21, 93, '2020-05-30 09:55:04', '2020-05-30 09:55:04'),
(62, 22, 93, '2020-05-30 09:55:04', '2020-05-30 09:55:04'),
(63, 23, 93, '2020-05-30 09:55:04', '2020-05-30 09:55:04'),
(64, 15, 94, '2020-05-30 09:57:26', '2020-05-30 09:57:26'),
(65, 18, 94, '2020-05-30 09:57:26', '2020-05-30 09:57:26'),
(66, 21, 94, '2020-05-30 09:57:26', '2020-05-30 09:57:26'),
(67, 16, 95, '2020-05-30 09:57:37', '2020-05-30 09:57:37'),
(68, 19, 95, '2020-05-30 09:57:37', '2020-05-30 09:57:37'),
(69, 22, 95, '2020-05-30 09:57:37', '2020-05-30 09:57:37'),
(70, 17, 96, '2020-05-30 09:57:48', '2020-05-30 09:57:48'),
(71, 20, 96, '2020-05-30 09:57:48', '2020-05-30 09:57:48'),
(72, 23, 96, '2020-05-30 09:57:48', '2020-05-30 09:57:48'),
(73, 24, 97, '2020-05-30 09:58:20', '2020-05-30 09:58:20'),
(74, 26, 97, '2020-05-30 09:58:20', '2020-05-30 09:58:20'),
(75, 28, 97, '2020-05-30 09:58:20', '2020-05-30 09:58:20'),
(76, 25, 98, '2020-05-30 09:58:30', '2020-05-30 09:58:30'),
(77, 27, 98, '2020-05-30 09:58:30', '2020-05-30 09:58:30'),
(78, 29, 98, '2020-05-30 09:58:30', '2020-05-30 09:58:30'),
(79, 30, 96, '2020-05-30 11:02:23', '2020-05-30 11:02:23'),
(80, 30, 97, '2020-05-30 11:02:23', '2020-05-30 11:02:23'),
(81, 30, 98, '2020-05-30 11:02:23', '2020-05-30 11:02:23');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_05_26_235457_create_cars_table', 1),
(4, '2020_05_27_002423_create_car_fleets_table', 2),
(5, '2020_05_28_010113_create_cars_and_fleets_table', 3),
(6, '2020_05_28_012502_add_carFleets_column_to_cars_table', 4),
(7, '2020_05_28_012739_add_carFleetCars_column_to_car_fleets_table', 5),
(8, '2020_05_28_013130_create_cars_and_fleets_table', 6),
(9, '2020_05_28_013501_create_cars_car_fleets_table', 7),
(11, '2020_05_28_021828_add_carFleets_to_cars', 9),
(12, '2020_05_28_030946_AddUserRole', 10),
(15, '2020_05_28_035835_create_roles_table', 11),
(16, '2020_05_28_040053_create_role_user_table', 11),
(17, '2020_05_28_042426_add_user_roles_to_users_table', 12),
(18, '2020_05_29_015019_create_car_fleets_cars_table', 13),
(19, '2020_05_29_132106_create_car_fleet_car_table', 14),
(20, '2020_05_29_134138_create_car_fleets_cars_table', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `user_role`) VALUES
(1, 'Dean Morgan', 'jDeanMorgan@gmail.com', '$2y$10$2uG8SDGeVwnZqc3kjOnQKudbYW5CIpuX1rG6H9UnBnig3jKeq2LZS', 'NTWL6xWPyIfsml7CmJmlpfliNiG7y8zK7jfLceccZTHqvTGLfaWxY3sxBRKp', '2020-05-26 21:14:37', '2020-05-26 21:14:37', 'Administrator'),
(2, 'Danai Gurira', 'dGurira78@gmail.com', '$2y$10$JOYsc6PlSh72goBmgg7D7.ozizPDNEDGqZCQ5Z7Q/hq72c2Vc0Azi', 'Km2Qqf4uYaru3O3WvMdh5yUL3mTgpB9hsJGMWItGdxZ9w0IeZztTKbnH2iD2', '2020-05-27 21:54:36', '2020-05-27 21:54:36', 'Driver'),
(3, 'Andrew Lincoln', 'aLincoln73@gmail.com', '$2y$10$YC.5fpnZ6HXMRUZTb1/rN.n4WvFGX8ls/rTLYMF/zXLrYlYMIxIJO', 'siH1tXNoPU5RJGZFYRmteqhrNQv6xnmxIttudkew3ksw26QEVzb1PYvE1HSd', '2020-05-27 21:55:40', '2020-05-27 21:55:40', 'user'),
(4, 'Melissa McBride', 'mMcBride@gmail.com', '$2y$10$mPf1ejbFVDNeU9LkuM1v4.SaUniGqow4Kk0UYO1s2klXjNVP5NiDC', 'JmLU3VCrUStqpSqlhO9QBM0BOJHsFLQJZDkARVHbDswNRg8NwuHmiyBHnfSg', '2020-05-28 02:05:18', '2020-05-29 02:27:24', 'Driver'),
(5, 'Norman Reedus', 'nReedus@gmail.com', '$2y$10$/vVGcyiHwC0LBAGeuKiA/OobtmmcIqoD6/fAn1VXm1Gkymzzve3u2', '9Ik7yMxqwYgXayCrybYaEkP4gfMGEv1OVFrhD7SpXmMHcMZJtTHhtgQXNQTY', '2020-05-30 09:40:14', '2020-05-30 09:49:28', 'Driver');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `car_fleets`
--
ALTER TABLE `car_fleets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `car_fleets_cars`
--
ALTER TABLE `car_fleets_cars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `car_fleets_id` (`car_fleets_id`,`cars_id`),
  ADD KEY `car_fleets_id_2` (`car_fleets_id`,`cars_id`),
  ADD KEY `cars_id` (`cars_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT для таблицы `car_fleets`
--
ALTER TABLE `car_fleets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `car_fleets_cars`
--
ALTER TABLE `car_fleets_cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `car_fleets_cars`
--
ALTER TABLE `car_fleets_cars`
  ADD CONSTRAINT `car_fleets_cars_ibfk_1` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `car_fleets_cars_ibfk_2` FOREIGN KEY (`car_fleets_id`) REFERENCES `car_fleets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
