-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 01 2023 г., 18:03
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shopewhatch`
--

-- --------------------------------------------------------

--
-- Структура таблицы `attribute_group`
--

CREATE TABLE `attribute_group` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attribute_group`
--

INSERT INTO `attribute_group` (`id`, `title`) VALUES
(1, 'Механизм'),
(5, 'Индикация'),
(6, 'Бренды');

-- --------------------------------------------------------

--
-- Структура таблицы `attribute_product`
--

CREATE TABLE `attribute_product` (
  `attr_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attribute_product`
--

INSERT INTO `attribute_product` (`attr_id`, `product_id`) VALUES
(1, 1),
(2, 4),
(2, 5),
(2, 11),
(2, 15),
(2, 16),
(2, 17),
(2, 20),
(2, 21),
(2, 22),
(3, 12),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(4, 2),
(4, 3),
(4, 27),
(4, 28),
(5, 1),
(5, 4),
(5, 5),
(5, 12),
(5, 13),
(6, 2),
(6, 29),
(6, 30),
(6, 31),
(6, 32),
(6, 33),
(7, 3),
(7, 6),
(8, 1),
(9, 2),
(9, 14),
(10, 4),
(10, 5),
(10, 13),
(11, 7),
(11, 8),
(11, 9),
(11, 10),
(12, 1),
(14, 3),
(16, 1),
(16, 4),
(16, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `attribute_value`
--

CREATE TABLE `attribute_value` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `attr_group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attribute_value`
--

INSERT INTO `attribute_value` (`id`, `value`, `attr_group_id`) VALUES
(1, 'Механика с автоподзаводом', 1),
(2, 'Механика с ручным заводом', 1),
(3, 'Кварцевый от батарейки', 1),
(4, 'Кварцевый от солнечного аккумулятора', 1),
(5, 'Сапфировое', 2),
(6, 'Минеральное', 2),
(7, 'Полимерное', 2),
(8, 'Стальной', 3),
(9, 'Кожаный', 3),
(10, 'Каучуковый', 3),
(11, 'Полимерный', 3),
(12, 'Нержавеющая сталь', 4),
(13, 'Титановый сплав', 4),
(14, 'Латунь', 4),
(15, 'Полимер', 4),
(16, 'Керамика', 4),
(17, 'Алюминий', 4),
(18, 'Аналоговые', 5),
(19, 'Цифровые', 5),
(20, 'Casio', 6),
(21, 'Citizen', 6),
(22, 'Royal London', 6),
(23, 'Seiko', 6),
(24, 'Diesel', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'brand_no_image.jpg',
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `title`, `alias`, `img`, `description`) VALUES
(1, 'Casio', 'casio', 'abt-1.jpg', 'Японский производитель электронных устройств'),
(2, 'Citizen', 'citizen', 'abt-2.jpg', 'Citizen Eco-Drive – это своеобразный механизм с вечным двигателем'),
(3, 'Royal London', 'royal-london', 'abt-3.jpg', 'это модные часы с английским характером в швейцарском качестве'),
(4, 'Seiko', 'seiko', 'seiko.png', NULL),
(5, 'Diesel', 'diesel', 'diesel.png', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `parent_id` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `alias`, `parent_id`, `keywords`, `description`) VALUES
(1, 'Мужские часы', 'men', 0, 'Men', 'Men'),
(2, 'Женские часы', 'women', 0, 'Women', 'Women'),
(3, 'Детские часы', 'kids', 0, 'Kids', 'Kids'),
(4, 'Электронные', 'elektronnye', 1, 'Электронные', 'Электронные'),
(5, 'Механические', 'mehanicheskie', 1, 'mehanicheskie', 'mehanicheskie'),
(6, 'Casio', 'casio', 4, 'Casio', 'Casio'),
(7, 'Citizen', 'citizen', 4, 'Citizen', 'Citizen'),
(8, 'Royal London', 'royal-london', 5, 'Royal London', 'Royal London'),
(9, 'Seiko', 'seiko', 5, 'Seiko', 'Seiko'),
(10, 'Epos', 'epos', 5, 'Epos', 'Epos'),
(11, 'Электронные', 'elektronnye-11', 2, 'Электронные', 'Электронные'),
(12, 'Механические', 'mehanicheskie-12', 2, 'Механические', 'Механические'),
(13, 'Adriatica', 'adriatica', 11, 'Adriatica', 'Adriatica'),
(14, 'Anne Klein', 'anne-klein', 12, 'Anne Klein', 'Anne Klein'),
(19, ' Sauvage', 'sauvage', 4, ' Sauvage', ' Sauvage');

-- --------------------------------------------------------

--
-- Структура таблицы `currency`
--

CREATE TABLE `currency` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `code` varchar(3) NOT NULL,
  `symbol_left` varchar(10) NOT NULL,
  `symbol_right` varchar(10) NOT NULL,
  `value` float(15,2) NOT NULL,
  `base` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `currency`
--

INSERT INTO `currency` (`id`, `title`, `code`, `symbol_left`, `symbol_right`, `value`, `base`) VALUES
(3, 'Рубль', 'Руб', '₽', '', 78.00, '0');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `product_id`, `img`) VALUES
(1, 2, 's-1.jpg'),
(2, 2, 's-2.jpg'),
(3, 2, 's-3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `modification`
--

CREATE TABLE `modification` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `modification`
--

INSERT INTO `modification` (`id`, `product_id`, `title`, `price`) VALUES
(1, 1, 'Silver', 300),
(2, 1, 'Black', 300),
(3, 1, 'Dark Black', 305),
(4, 1, 'Red', 310),
(5, 2, 'Silver', 80),
(6, 2, 'Red', 70);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` enum('0','1','2') NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL,
  `currency` varchar(10) NOT NULL,
  `note` text DEFAULT NULL,
  `sum` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `user_id`, `status`, `date`, `update_at`, `currency`, `note`, `sum`) VALUES
(1, 1, '0', '2023-05-29 13:01:12', '2023-05-29 18:23:47', 'Руб', '', 0),
(2, 1, '0', '2023-05-29 14:33:28', NULL, 'Руб', '', 0),
(3, 1, '0', '2023-05-29 14:37:09', NULL, 'Руб', '', 0),
(4, 1, '0', '2023-05-29 15:12:46', NULL, 'Руб', '', 50700),
(5, 1, '0', '2023-05-29 15:34:34', NULL, 'Руб', '', 5460),
(7, 1, '0', '2023-05-29 15:46:05', NULL, 'Руб', '', 23400),
(9, 1, '0', '2023-05-29 15:47:55', NULL, 'Руб', '', 23400),
(10, 1, '2', '2023-05-29 15:50:31', NULL, 'Руб', '', 23400),
(16, 4, '0', '2023-05-29 18:02:25', NULL, 'Руб', '', 12480);

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `qty`, `title`, `price`) VALUES
(1, 1, 2, 1, 'Casio MQ-24-7BUL', 5460),
(2, 2, 2, 2, 'Casio MQ-24-7BUL', 5460),
(3, 2, 3, 1, 'Sauvage SA-SV88682RG', 31200),
(4, 3, 2, 2, 'Casio MQ-24-7BUL', 5460),
(5, 3, 3, 1, 'Sauvage SA-SV88682RG', 31200),
(6, 4, 1, 1, 'Casio MRP-700-1AVEF', 23400),
(7, 4, 6, 1, 'Citizen AT0696-59E', 27300),
(8, 5, 2, 1, 'Casio MQ-24-7BUL', 5460),
(10, 7, 1, 1, 'Casio MRP-700-1AVEF', 23400),
(12, 9, 1, 1, 'Casio MRP-700-1AVEF', 23400),
(13, 10, 1, 1, 'Casio MRP-700-1AVEF', 23400),
(19, 16, 2, 1, 'Casio MQ-24-7BUL', 5460),
(20, 16, 8, 1, 'Royal London 41040-01', 7020);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` tinyint(3) UNSIGNED NOT NULL,
  `brand_id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `price` float NOT NULL DEFAULT 0,
  `old_price` float NOT NULL DEFAULT 0,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'no_image.jpg',
  `hit` enum('0','1') NOT NULL DEFAULT '0',
  `sale` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `brand_id`, `title`, `alias`, `content`, `price`, `old_price`, `status`, `keywords`, `description`, `img`, `hit`, `sale`) VALUES
(1, 6, 1, 'Casio MRP-700-1AVEF', 'casio-mrp-700-1avef', NULL, 300, 0, '1', NULL, NULL, 'p-1.png', '0', ''),
(2, 6, 1, 'Casio MQ-24-7BUL', 'casio-mq-24-7bul', '<p> Красивые наручные часы станут удачным дополнением Вашего повседневного образа и надежным помощником в жизни. Брендовые наручные часы - стильный и современный аксессуар. Покупая оригинальные часы у официального дистрибьютора, Вы можете быть уверены, что получаете аксессуар наилучшего качества с официальной гарантией.</p>\r\n<h4>Основные характеристики</h4>\r\n                                            <table class=\"spec-table float-left\">\r\n                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <tbody><tr>\r\n                                    <td>Пол</td>\r\n                                    <td>Мужские</td>\r\n                                </tr>\r\n                                                            <tr>\r\n                                    <td>Бренд</td>\r\n                                    <td>Casio</td>\r\n                                </tr>\r\n                                                            <tr>\r\n                                    <td>Тип крепления</td>\r\n                                    <td>Полимерный ремень</td>\r\n                                </tr>\r\n                                                            <tr>\r\n                                    <td>Тип механизма</td>\r\n                                    <td>Кварцевый</td>\r\n                                </tr>\r\n                                                            <tr>\r\n                                    <td>Водозащита</td>\r\n                                    <td>3 АТМ</td>\r\n                                </tr>\r\n                                                            <tr>\r\n                                    <td>Стекло</td>\r\n                                    <td>Плексиглас</td>\r\n                                </tr>\r\n                                                            <tr>\r\n                                    <td>Страна бренда</td>\r\n                                    <td>Япония</td>\r\n                                </tr>\r\n                                                            <tr>\r\n                                    <td>Вид</td>\r\n                                    <td>Наручные</td>\r\n                                </tr>\r\n                                                    </tbody></table>', 70, 0, '1', NULL, NULL, 'p-2.png', '1', '0'),
(3, 6, 1, 'Sauvage SA-SV88682RG', 'sauvage SA-SV88682RG', 'Красивые наручные часы станут удачным дополнением Вашего повседневного образа и надежным помощником в жизни. Брендовые наручные часы - стильный и современный аксессуар. Покупая оригинальные часы у официального дистрибьютора, Вы можете быть уверены, что получаете аксессуар наилучшего качества с официальной гарантией.', 400, 0, '1', NULL, NULL, 'p-3.png', '1', ''),
(4, 7, 2, 'Citizen JP1010-00E', 'citizen-jp1010-00e', NULL, 400, 0, '1', NULL, NULL, 'p-4.png', '1', ''),
(5, 7, 2, 'Citizen BJ2111-08E', 'citizen-bj2111-08e', NULL, 500, 550, '1', NULL, NULL, 'p-5.png', '0', '1'),
(6, 7, 2, 'Citizen AT0696-59E', 'citizen-at0696-59e', NULL, 350, 355, '1', NULL, NULL, 'p-6.png', '0', '1'),
(7, 6, 3, 'Q&Q Q956J302Y', 'q-and-q-q956j302y', NULL, 20, 28, '1', NULL, NULL, 'p-7.png', '0', '1'),
(8, 6, 4, 'Royal London 41040-01', 'royal-london-41040-01', NULL, 90, 0, '1', NULL, NULL, 'p-8.png', '1', ''),
(9, 6, 4, 'Royal London 41194-03 ', 'royal-london-41194-03 ', NULL, 180, 200, '1', NULL, NULL, 'r-1.jpg', '0', '1'),
(10, 6, 4, 'Royal London 41156-02', 'royal-london-41156-02', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.</p>\n\n                                            <p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.</p>', 100, 0, '1', NULL, NULL, 'no_image.jpg', '0', '1'),
(11, 3, 2, 'Тестовый товар', 'testovyy-tovar', 'контент...', 10, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(12, 7, 2, 'Часы 1', 'chasy-1', NULL, 100, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(13, 7, 2, 'Часы 2', 'chasy-2', NULL, 105, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(14, 7, 2, 'Часы 3', 'chasy-3', NULL, 110, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(15, 7, 2, 'Часы 4', 'chasy-4', NULL, 115, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(16, 7, 2, 'Часы 5', 'chasy-5', NULL, 115, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(17, 7, 2, 'Часы 6', 'chasy-6', NULL, 120, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(20, 7, 2, 'Часы 7', 'chasy-7', NULL, 120, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(21, 7, 2, 'Часы 8', 'chasy-8', NULL, 120, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(22, 7, 2, 'Часы 9', 'chasy-9', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(23, 7, 2, 'Часы 10', 'chasy-10', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(24, 7, 2, 'Часы 11', 'chasy-11', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(25, 7, 2, 'Часы 12', 'chasy-12', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(26, 7, 2, 'Часы 13', 'chasy-13', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(27, 7, 2, 'Часы 14', 'chasy-14', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0', '1'),
(28, 7, 2, 'Часы 15', 'chasy-15', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(29, 7, 2, 'Часы 16', 'chasy-16', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(30, 7, 2, 'Часы 17', 'chasy-17', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(31, 7, 2, 'Часы 18', 'chasy-18', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(32, 7, 2, 'Часы 19', 'chasy-19', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0', ''),
(33, 7, 2, 'Часы 20', 'chasy-20', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0', '');

-- --------------------------------------------------------

--
-- Структура таблицы `related_product`
--

CREATE TABLE `related_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `related_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `related_product`
--

INSERT INTO `related_product` (`product_id`, `related_id`) VALUES
(1, 2),
(1, 5),
(2, 5),
(2, 7),
(5, 1),
(5, 7),
(5, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `name`, `address`, `role`) VALUES
(1, 'user1', '$2y$10$4ZUuveY/k2ShcjOKMQSMJu8zKTMffFRNfoHXYv/SRGhTdJxo.Kkpy', 'test@altrp.ru', 'Никита Михайлович Вахрушев', 'test ', 'user'),
(2, 'testaltrp', '$2y$10$BlsmcSy/at983gpJ8P57HuYrPV7cwMfshVCGgKuCHlze7MptBqIBW', 'test21@altrp.ru', 'Сергей Владимирович Свиридов', 'Ростов-на-Дону, ул Думенко 5, кв21', 'user'),
(3, 'admin', '$2y$10$Uukej3MHEaRH8DV7wkVXr.YGs2ubDPOpNihssj4iKYZOjtUjK5rDK', 'test-backend@altrp.ru', 'Павел', 'test ', 'admin'),
(4, 'sRfdW23', '$2y$10$J18mhc6FOiNtgv2J1M3xPu/MD/o9ntK9cGW9.gwSN915rkPTyDtWq', 'sRfdW23@mail.ru', 'Павел Николаевич Петрушов', 'Ростов-на-Дону, ул Еременко 4, кв54', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `attribute_group`
--
ALTER TABLE `attribute_group`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `attribute_product`
--
ALTER TABLE `attribute_product`
  ADD PRIMARY KEY (`attr_id`,`product_id`);

--
-- Индексы таблицы `attribute_value`
--
ALTER TABLE `attribute_value`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `value` (`value`),
  ADD KEY `attr_group_id` (`attr_group_id`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Индексы таблицы `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `modification`
--
ALTER TABLE `modification`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`),
  ADD KEY `category_id` (`category_id`,`brand_id`),
  ADD KEY `hit` (`hit`);

--
-- Индексы таблицы `related_product`
--
ALTER TABLE `related_product`
  ADD PRIMARY KEY (`product_id`,`related_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `attribute_group`
--
ALTER TABLE `attribute_group`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `attribute_value`
--
ALTER TABLE `attribute_value`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `modification`
--
ALTER TABLE `modification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
