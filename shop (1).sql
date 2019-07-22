-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 23 2019 г., 02:20
-- Версия сервера: 5.6.41
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `atribute`
--

CREATE TABLE `atribute` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `atribute`
--

INSERT INTO `atribute` (`id`, `name`, `code`) VALUES
(1, 'цвет', 123),
(4, 'размер', 427);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `meta_title`, `description`) VALUES
(1, 0, 'Women\'s wear', 'Женская одежда, коллекция лето 2019', 'ОДЕЖДА ДЛЯ НАСТОЯЩИХ ЛЕДИ Представлен большой выбор однотонных или разноцветных нарядов, с модными принтами и узорами. '),
(2, 0, 'Men\'s wear', NULL, NULL),
(3, 0, 'Kids', NULL, NULL),
(4, 1, 'Clothing', NULL, NULL),
(5, 1, 'Footwear', NULL, NULL),
(6, 1, 'Caps & Hats', NULL, NULL),
(7, 1, 'Bags', NULL, NULL),
(8, 1, 'Accessories', NULL, NULL),
(9, 2, 'Clothing', NULL, NULL),
(10, 2, 'Footwear', NULL, NULL),
(11, 2, 'Caps & Hats', NULL, NULL),
(12, 2, 'Bags', NULL, NULL),
(13, 2, 'Accessories', NULL, NULL),
(19, 3, 'Clothing', NULL, NULL),
(20, 3, 'Footwear', NULL, NULL),
(21, 3, 'Caps & Hats', NULL, NULL),
(22, 3, 'Bags', NULL, NULL),
(23, 3, 'Accessories', NULL, NULL),
(31, 4, 'T-shirts', NULL, 'ОДЕЖДА ДЛЯ НАСТОЯЩИХ ЛЕДИ Представлен большой выбор однотонных или разноцветных нарядов, с модными принтами и узорами. '),
(32, 4, 'Trousers', NULL, NULL),
(33, 4, 'Skirts', NULL, NULL),
(34, 4, 'Dresses', '\r\n', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `text`, `user_id`, `product_id`, `status`, `date`) VALUES
(1, 'good item. I like it', 1, 3, 1, '2019-07-21'),
(5, 'privet', 2, 3, 1, '2019-07-21'),
(8, 'the best ', 1, 6, 0, '2019-07-22');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1561793440),
('m190629_065202_create_product_table', 1561793443),
('m190629_065242_create_category_table', 1561793443),
('m190629_065306_create_atribute_table', 1561793443),
('m190629_065323_create_user_table', 1561793443),
('m190629_065346_create_comment_table', 1561793445),
('m190629_065446_create_product_atribute_table', 1561793446),
('m190721_104732_add_date_to_comment', 1563706217);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `qty` int(10) NOT NULL,
  `sum` float NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `qty_item` int(11) NOT NULL,
  `sum_item` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `price` float DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `saled` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `content`, `price`, `image`, `saled`, `user_id`, `status`, `category_id`, `date`) VALUES
(3, 'Футболка Мужская', 'Стильная футболка свободного кроя, декорирована кругом и иероглифами. Модель с круглым вырезом горловины и коротким рукавом. Благодаря лаконичному дизайну сочетать футболку можно с любым низом — от простых джинсов до принтованных шорт.', 26, '531a552fc0a5da18c175d69ae50da2af.jpeg', 10, NULL, NULL, 2, '2019-07-19'),
(4, 'Футболка2', 'jbb', 68, '7f336b2b2f0f4fa0ced809c41030030a.jpeg', 11, NULL, NULL, 2, '2019-07-20'),
(5, 'куртка', '<p>куртка</p>\r\n', 85, NULL, 2, NULL, NULL, NULL, '2019-07-16'),
(6, 'куртка', 'z', 22, NULL, NULL, NULL, NULL, 1, '2019-07-16');

-- --------------------------------------------------------

--
-- Структура таблицы `product_atribute`
--

CREATE TABLE `product_atribute` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `atribute_id` int(11) DEFAULT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_atribute`
--

INSERT INTO `product_atribute` (`id`, `product_id`, `atribute_id`, `value`) VALUES
(10, 3, 1, 'red2'),
(11, 3, 2, '4'),
(12, 3, 3, '5'),
(13, 3, 4, '234'),
(14, 4, 1, 'red'),
(15, 4, 2, '4'),
(16, 4, 3, '5'),
(17, 4, 4, '60'),
(18, 5, 1, 'синий'),
(19, 5, 2, ''),
(20, 5, 3, ''),
(21, 5, 4, 'м');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `isAdmin` int(11) DEFAULT '0',
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `isAdmin`, `photo`) VALUES
(1, 'AleksndraTmcn', 'sasa@gmail.com', '123', 1, ''),
(2, 'Sasha', 'sasa1@gmail.com', '123', 0, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `atribute`
--
ALTER TABLE `atribute`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-post-user_id` (`user_id`),
  ADD KEY `idx-product_id` (`product_id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_atribute`
--
ALTER TABLE `product_atribute`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `atribute`
--
ALTER TABLE `atribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `product_atribute`
--
ALTER TABLE `product_atribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk-post-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
