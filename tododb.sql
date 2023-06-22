-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 22 2023 г., 16:47
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
(18, 'Admin', 'qq@mail.ru', '$2y$10$1sk/B7V0mm2xKWMrHK24SOF/H0FIx8nAduEYTftfOrLWq2.bdWAKm', '0', '2023-06-05 08:40:31'),
(48, 'Михаил Иванович', 'security@magazin-rubin.ru', '$2y$10$CRTTZJjinc9K6RwDCqiRL.8nv/.k5AswrWgz1AsnO3e8Hnk4SN8FS', '2', '2023-06-22 16:37:55'),
(49, 'Юля', 'buhgalter@yandex.ru', '$2y$10$JiYZ90bA7enblSw72uX8D.1p3vQj5Ehrk5NEZwz0Wez3XCxsAKruK', '2', '2023-06-22 16:38:52'),
(50, 'Надя', 'gb-rubin@magazin-rubin.ru', '$2y$10$9srOJV754SZWwmVHopK5QObZBO4.qXYaP29PVE0yUy3OnHRAECOKe', '2', '2023-06-22 16:39:42'),
(51, 'Vlad', 'cvlad@yandex.ru', '$2y$10$x8kztynRQPCdtpiu6SmvzeMsMaPUj9O6CxLH6p62DNxXya5.qDj5a', '2', '2023-06-22 16:40:23');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
