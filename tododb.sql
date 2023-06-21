-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 21 2023 г., 08:51
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
(35, 'Юля', 'buhgalter@magazin-rubin.ru', '$2y$10$mLsSaNGNUnXI/0KbEul9J.z0iwU/oEo5TBcYA5DCUQPEtL0Ku8Yo6', '2', '2023-06-08 16:26:51'),
(38, 'Московая', 'gb-rubin@yandex.ru', '$2y$10$gnjQp07hl6myWpt1n.67euG0MSE3cVvOqVCTiECG0y5uR3qdbDlsu', '2', '2023-06-20 16:10:29'),
(39, 'Михаил Иванович', 'security@yandex.ru', '$2y$10$38.Kb/kZTQj/GWzt7IsBruodaaXGupwysTO80dT0PFDv1.O11h.w6', '2', '2023-06-20 16:11:23'),
(40, 'юрист', 'yurist@magazin-rubin.ru', '$2y$10$5FLMJ1LvZjJ0QGlj6BcnrO2Q6LlpxwQn3nwSRVHAgLlS65nRYMQaq', '2', '2023-06-20 16:12:03'),
(41, 'asasd', 'security1@yandex.ru', '$2y$10$2zZHsNWYBczFy4.nyYmOxOHhu/w74FHAi8f8k9hopDZZtcqdeVfzS', '2', '2023-06-20 16:19:05'),
(42, 'obuh', 'yurist2@magazin-rubin.ru', '$2y$10$9E6WbKANrCzIl7iHJhmB7OdXsdz/EGSYoV7EJl8GFfQMuk0A.8UHO', '2', '2023-06-20 16:20:38'),
(43, 'test', 'test@bk.ru', '123456', '2', '2023-06-21 08:50:35');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
