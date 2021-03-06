-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 07 2020 г., 14:43
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `travel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `header` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `ordera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `img_path`, `alt`, `header`, `content`, `ordera`) VALUES
(1, 'img/moscow.png', 'kreml', 'Путешествия по России', 'Балалайки, матрешки, Кремль', 1),
(2, 'img/big-ben.png', 'big-ben', 'Путешествия по Англии', 'Разные страны, разные культуры.', 5),
(3, 'img/pyramids.png', 'pyramids', 'Путешествия по Африке', 'Классные сафари, львы и много папуасов.', 8),
(4, 'img/south-america.png', 'south-america', 'Путешествия по Северной Америке.', 'Конечно мы проедем всю Америку и тут будет еще немного контента.', 12),
(5, 'img/north-america.png', 'north-america', 'Путешествия по Южной Америке.', 'Южная Америка нас ждет, там классно, бананы и землетрясения.', 16),
(6, 'img/kangaroo.png', 'kangaroo', 'Путешествия по Австралии.', 'Австралия, кенгуру, летающих пауков там нет! Или есть. Приезжайте и проверьте!', 20),
(10, 'img/upload/5edc0d294b423jap2.jpg', 'суши, аниме, гейши', 'Путешествия по Японии', 'Япония - это классная страна.', 23);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
