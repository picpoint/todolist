-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 30 2023 г., 08:53
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tododb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT '2',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(48, 'Михаил Иванович', 'security@magazin-rubin.ru', '$2y$10$CRTTZJjinc9K6RwDCqiRL.8nv/.k5AswrWgz1AsnO3e8Hnk4SN8FS', '2', '2023-06-22 16:37:55'),
(49, 'Юля', 'buhgalter@yandex.ru', '$2y$10$JiYZ90bA7enblSw72uX8D.1p3vQj5Ehrk5NEZwz0Wez3XCxsAKruK', '2', '2023-06-22 16:38:52'),
(50, 'Надя', 'gb-rubin@magazin-rubin.ru', '$2y$10$9srOJV754SZWwmVHopK5QObZBO4.qXYaP29PVE0yUy3OnHRAECOKe', '2', '2023-06-22 16:39:42'),
(51, 'Vlad', 'cvlad@yandex.ru', '$2y$10$x8kztynRQPCdtpiu6SmvzeMsMaPUj9O6CxLH6p62DNxXya5.qDj5a', '2', '2023-06-22 16:40:23'),
(52, 'admin', 'rmtar@bk.ru', '$2y$10$LuzGb441Bdzr7kQmNdeeTuUJW8YxWTdDdQa186wtcl2ampG8wezUi', '0', '2023-06-23 08:48:08'),
(73, 'qqq', 'qqq@bk.ru', '$2y$10$TXYxPlyzpXC3QHd6H.z2s.dFx7aa8cFSbs2lrJD.nOZljxA58ECyy', '2', '2023-06-30 08:48:10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
