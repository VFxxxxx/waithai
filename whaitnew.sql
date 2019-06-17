-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 17 2019 г., 18:35
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `whaitnew`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `text`, `image`, `meta_title`, `meta_keywords`, `meta_description`, `locale`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Поздравляем всех буддистов с великим днем Висакха Буча!', 'pozdravliaiem-vsiekh-buddistov-s-vielikim-dniem-visakkha-bucha', '<p>Висакха Буча (Весак) -&nbsp;один из самых почитаемых и важных религиозных праздников Таиланда. Он посвящен сразу трем событиям из жизни Будды -&nbsp;рождению, просветлению и смерти. В этот день тайцы ходят на службы в храмы, делают подношения монахам, медитируют, совершают традиционные для праздника ритуалы.&nbsp;</p>', 'images/xqnqxVzhPVfiEXN6IOm0ke4MHAi2taxhFGB0j9Z9.jpeg', 'Поздравляем всех буддистов с великим днем Висакха Буча!', 'Поздравляем всех буддистов с великим днем Висакха Буча!', 'Поздравляем всех буддистов с великим днем Висакха Буча!', 'ru', '2019-06-17 11:12:19', '2019-06-17 11:07:00', '2019-06-17 11:14:20');

-- --------------------------------------------------------

--
-- Структура таблицы `gifts`
--

CREATE TABLE `gifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_preview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_preview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gifts`
--

INSERT INTO `gifts` (`id`, `title`, `text_preview`, `text_detail`, `price`, `image_preview`, `image_detail`, `meta_title`, `meta_keywords`, `meta_description`, `locale`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Инь-Янь массаж лица │ 40 минут', '<p>Стоимость сертификата составляет:&nbsp;800&nbsp;грн</p>', '<p>Предъявитель данного сертификата имеет право на единоразовое посещение основной процедуры&nbsp;&laquo;Инь-Янь массаж лица&raquo;,&nbsp;продолжительностью 40 минут,</p>\r\n\r\n<p><strong>или же одного из сеансов на выбор</strong>:</p>\r\n\r\n<ul>\r\n	<li><em>Традиционный Тайский Фут-массаж</em><em>, 30 минут</em></li>\r\n	<li><em>Антистрессовый Тайский массаж</em><em>, 30 минут</em></li>\r\n	<li><em>Тайский массаж лица</em><em>, 20 минут</em></li>\r\n	<li><em>Очищение кожи</em><em>, 30 минут</em></li>\r\n</ul>\r\n\r\n<p>Стоимость сертификата составляет:&nbsp;800&nbsp;грн</p>', '800 грн', 'images/x8L6XdiIH6QPC8xlgv65PtWNeGUQRNUfY2XgWbmV.png', 'images/aEHHbawRsTe4E7aEyHsTdAmF7K3vmIZJOnDd3433.jpeg', 'Инь-Янь массаж лица │ 40 минут', 'Инь-Янь массаж лица │ 40 минут', 'Инь-Янь массаж лица │ 40 минут', 'ru', '2019-06-15 18:26:33', '2019-06-15 18:30:04', '2019-06-15 18:55:42'),
(2, 'Традиционный тайский массаж │ 60 минут', '<p>Стоимость сертификата составляет:&nbsp;1200&nbsp;грн</p>', '<p>Предъявитель данного сертификата имеет право на единоразовое посещение основной процедуры&nbsp;&laquo;Традиционный тайский массаж&raquo;,&nbsp;продолжительностью 60 минут,</p>\r\n\r\n<p><strong>или же одного из сеансов на выбор</strong>:</p>\r\n\r\n<ul>\r\n	<li><em>Королевский Инь-Янь массаж лица</em><em>, 60 минут</em></li>\r\n	<li><em>Антистрессовый Тайский массаж</em><em>, 60 минут</em></li>\r\n	<li><em>Традиционный Тайский Фут-массаж</em><em>, 60 минут</em></li>\r\n</ul>\r\n\r\n<p>Стоимость сертификата составляет:&nbsp;1200&nbsp;грн</p>', '1200 грн', 'images/6PDnpf4l7kEsyQNrVBlqnWTW4HX2ktxTUoQtwKv6.png', 'images/16qXsV5vgCk0ePWzv1A6j1aeq7VEpVYwCrLtuvI5.jpeg', 'Традиционный тайский массаж │ 60 минут', 'Традиционный тайский массаж │ 60 минут', 'Традиционный тайский массаж │ 60 минут', 'ru', '2019-06-15 18:38:34', '2019-06-15 18:39:25', '2019-06-15 18:39:25'),
(4, 'Традиционный тайский массаж │ 120 минут', '<p>Стоимость сертификата составляет:&nbsp;2000&nbsp;грн</p>', '<p>Предъявитель данного сертификата имеет право на единоразовое посещение основной процедуры&nbsp;&laquo;Традиционный Тайский Массаж&raquo;,&nbsp;продолжительностью 120 минут,</p>\r\n\r\n<p><strong>или же одного из сеансов на выбор:</strong></p>\r\n\r\n<ul>\r\n	<li><em>Стоун терапия</em><em>, 90 минут</em></li>\r\n	<li><em>Сабай массаж</em><em>, 90 мин</em></li>\r\n	<li><em>Энергетический коктейль</em><em>, 90 минут</em></li>\r\n	<li><em>Арома массаж</em><em>, 90 минут</em></li>\r\n	<li><em>Арома массаж или&nbsp;Сабай&nbsp;массаж&nbsp;в 4 руки, 60 минут</em></li>\r\n	<li><em>Слим-массаж&nbsp;</em><em>или&nbsp;Слим-Сабай&nbsp;массаж, 60 минут</em></li>\r\n	<li><em>Инь-Янь массаж тела</em><em>, 90 минут</em></li>\r\n	<li><em>Массаж тайскими травяными мешочками</em><em>, 90 минут</em></li>\r\n</ul>\r\n\r\n<p>Стоимость сертификата составляет:&nbsp;2000&nbsp;грн</p>', '2000 грн', 'images/PePzgUkt92bFdKXhuYsSfyOIKSlYqAEcgzGpIPqU.png', 'images/w1DXAtC7nDBvyfT9DC51N95vNl2uAaGEbGYh7sH5.jpeg', 'Традиционный тайский массаж │ 120 минут', 'Традиционный тайский массаж │ 120 минут', 'Традиционный тайский массаж │ 120 минут', 'ru', '2019-06-15 18:56:26', '2019-06-15 18:57:18', '2019-06-15 18:57:18'),
(5, 'Комплекс тайских массажей и SPA процедур «Wai Thai» │ 150 минут', '<p>Стоимость сертификата составляет:&nbsp;4000&nbsp;грн</p>', '<p>Предъявитель данного сертификата имеет право на единоразовое посещение основной процедуры&nbsp;&laquo;Комплекс тайских массажей и спа-процедур &laquo;Богиня&raquo;,&nbsp;продолжительностью 150 минут,&nbsp;</p>\r\n\r\n<p><strong>или же одного из сеансов на выбор</strong>:</p>\r\n\r\n<ul>\r\n	<li><em>Богиня</em><em>&nbsp;120 минут</em></li>\r\n	<li><em>Рай на Земле 120 минут</em></li>\r\n	<li>Массаж теплой аромасвечей 90 минут</li>\r\n	<li><em>Любой массаж, продолжительностью&nbsp;120 минут</em></li>\r\n</ul>\r\n\r\n<p>Стоимость сертификата составляет:&nbsp;4000&nbsp;грн</p>', '4000 грн', 'images/3CDJWsXSUxQpr4t5R3I1xlvw0gmGupJ4AKfzXDrK.png', 'images/oyx7h2sQbQDFa9L8fgDTpGLfruB8xI14oEqwvBHb.jpeg', 'Комплекс тайских массажей и SPA процедур «Wai Thai» │ 150 минут', 'Комплекс тайских массажей и SPA процедур «Wai Thai» │ 150 минут', 'Комплекс тайских массажей и SPA процедур «Wai Thai» │ 150 минут', 'ru', '2019-06-15 18:57:31', '2019-06-15 18:58:24', '2019-06-15 18:58:24'),
(6, 'Комплекс массажей «Энергия Таиланда»', '<p>Стоимость сертификата составляет:&nbsp;4700&nbsp;грн</p>', '<p>Предъявитель данного сертификата имеет право на единоразовое посещение каждого из перечисленных ниже массажей:</p>\r\n\r\n<ul>\r\n	<li><em>Традиционный Тайский массаж</em><em>, 90 мин</em></li>\r\n	<li><em>Тайский Сабай-массаж</em><em>, 90 мин</em></li>\r\n	<li><em>Энергетический коктейль</em><em>, 90 мин</em></li>\r\n</ul>\r\n\r\n<p>Стоимость сертификата составляет:&nbsp;4700&nbsp;грн</p>', '4700 грн', 'images/eH9iFpYV2Xd94NntIk9XbtQdUlN7pWOwxThCvEPZ.png', 'images/kcSGtU8eJvpuqoDlVMZWaolWRR47NMbUUV6H7Rdo.jpeg', 'Комплекс массажей «Энергия Таиланда»', 'Комплекс массажей «Энергия Таиланда»', 'Комплекс массажей «Энергия Таиланда»', 'ru', '2019-06-15 18:58:38', '2019-06-15 18:59:21', '2019-06-15 18:59:21'),
(7, 'Комплекс тайских массажей и спа-процедур «Рай на Земле для двоих» │ 150 минут', '<p>Стоимость сертификата составляет:&nbsp;5000&nbsp;грн</p>', '<p>Предъявитель данного сертификата имеет право на единоразовое посещение основной процедуры&nbsp;&laquo;Комплекс тайских массажей и спа-процедур &laquo;Рай на земле для двоих&raquo;,&nbsp;продолжительностью 150 минут,</p>\r\n\r\n<p><strong>или же</strong>:</p>\r\n\r\n<ul>\r\n	<li><em>любого массажа для двоих, продолжительностью&nbsp;120 минут</em></li>\r\n</ul>\r\n\r\n<p>Стоимость сертификата составляет:&nbsp;5000&nbsp;грн</p>', '5000 грн', 'images/LMT8Rjq2st1jWPVcTtZNVW2cp6SIXhDsV5NsfAFx.png', 'images/qxbg3MFCSzo3KwWfMuHik8iBOTWINE806r3V86Io.jpeg', 'Комплекс тайских массажей и спа-процедур «Рай на Земле для двоих» │ 150 минут', 'Комплекс тайских массажей и спа-процедур «Рай на Земле для двоих» │ 150 минут', 'Комплекс тайских массажей и спа-процедур «Рай на Земле для двоих» │ 150 минут', 'ru', '2019-06-15 18:59:26', '2019-06-15 19:00:06', '2019-06-15 19:00:06');

-- --------------------------------------------------------

--
-- Структура таблицы `massages`
--

CREATE TABLE `massages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `massages`
--

INSERT INTO `massages` (`id`, `title`, `slug`, `text`, `meta_title`, `meta_keywords`, `meta_description`, `category_id`, `image`, `locale`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Тайский массаж лица', 'tais-kii-masazh-oblichchia', '<h1>ТАЙСКИЙ МАССАЖ ЛИЦА</h1>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Время</th>\r\n			<th>День</th>\r\n			<th>Вечер</th>\r\n		</tr>\r\n		<tr>\r\n			<td>20 мин</td>\r\n			<td>500 грн</td>\r\n			<td>600 грн</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ознакомиться с информацией о временных зонах Вы можете&nbsp;<a href=\"https://waithai.ua/ru/privilege/komfortnoie-vriemia-dlia-vas-1\">тут</a></p>\r\n\r\n<p>Записаться сейчас</p>\r\n\r\n<p>Процедура повышает тонус кожи, делая её более упругой и эластичной,&nbsp; улучшает цвет лица.</p>\r\n\r\n<p>Массаж снимает&nbsp; головную боль, облегчает симптомы заболевания при простуде.&nbsp; Рекомендуется в качестве дополнения к основным массажам.</p>', 'Тайский массаж лица', 'Тайский массаж лица', 'Тайский массаж лица', '9', 'images/YG05piN83XM5XLJS6bpMBNJgJAbhLBpJBhB9Fnqx.jpeg', 'ru', '2019-06-15 17:41:12', '2019-06-15 17:42:03', '2019-06-15 17:42:03'),
(2, 'Традиционный тайский массаж', 'traditsiinii-tais-kii-masazh', '<h1>ТРАДИЦИОННЫЙ ТАЙСКИЙ МАССАЖ</h1>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Время</th>\r\n			<th>День</th>\r\n			<th>Вечер</th>\r\n		</tr>\r\n		<tr>\r\n			<td>60 мин</td>\r\n			<td>1000 грн</td>\r\n			<td>1200 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>90 мин</td>\r\n			<td>1400 грн</td>\r\n			<td>1800 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>120 мин</td>\r\n			<td>1700 грн</td>\r\n			<td>2100 грн</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ознакомиться с информацией о временных зонах Вы можете&nbsp;<a href=\"https://waithai.ua/ru/privilege/komfortnoie-vriemia-dlia-vas-1\">тут</a></p>\r\n\r\n<p>Записаться сейчас</p>\r\n\r\n<p>Точечный массаж тела с элементами пассивной йоги. Выполняется от кончиков пальцев ног до макушки головы. Улучшает кровообращение, устраняет болевые ощущения в позвоночнике и суставах, укрепляет и повышает их гибкость. После массажа возникает ощущение бодрости и энергетического подъёма.</p>\r\n\r\n<iframe width=\"556\" height=\"310\" src=\"https://www.youtube.com/embed/dD0b0XoE-Lk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Традиционный тайский массаж', 'Традиционный тайский массаж', 'Традиционный тайский массаж', '9', 'images/UMM7bH4GiN5za6MTgAdcRD81OEOssLLOEzd8WmcX.jpeg', 'ru', '2019-06-15 17:36:15', '2019-06-15 17:39:51', '2019-06-15 17:39:51'),
(3, 'Традиционный массаж тела в 4 руки', 'traditsiinii-masazh-tila-v-4-ruki', '<h1>ТРАДИЦИОННЫЙ МАССАЖ ТЕЛА В 4 РУКИ</h1>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Время</th>\r\n			<th>День</th>\r\n			<th>Вечер</th>\r\n		</tr>\r\n		<tr>\r\n			<td>60 мин</td>\r\n			<td>1900 грн</td>\r\n			<td>2400 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>90 мин</td>\r\n			<td>2600 грн</td>\r\n			<td>3200 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>120 мин</td>\r\n			<td>3000 грн</td>\r\n			<td>3700 грн</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ознакомиться с информацией о временных зонах Вы можете&nbsp;<a href=\"https://waithai.ua/ru/privilege/komfortnoie-vriemia-dlia-vas-1\">тут</a></p>\r\n\r\n<p>Записаться сейчас</p>\r\n\r\n<p>Парная техника выполнения массажа расслабляет и восстанавливает нервную систему, имеет необычайно высокий терапевтический эффект, способствует глубокому мышечному расслаблению, устраняет болевые ощущения в позвоночнике и суставах, укрепляет и повышает их гибкость.</p>', 'Традиционный массаж тела в 4 руки', 'Традиционный массаж тела в 4 руки', 'Традиционный массаж тела в 4 руки', '9', 'images/2OOJDHM0Mde8iGTM7Hg5J4wUr8XLGggWnCRQfc4w.jpeg', 'ru', '2019-06-15 17:42:51', '2019-06-15 17:44:33', '2019-06-15 17:44:33'),
(4, 'Традиционный тайский фут-массаж', 'traditsiinii-tais-kii-fut-masazh', '<h1>ТРАДИЦИОННЫЙ ТАЙСКИЙ ФУТ-МАССАЖ</h1>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Время</th>\r\n			<th>День</th>\r\n			<th>Вечер</th>\r\n		</tr>\r\n		<tr>\r\n			<td>30 мин</td>\r\n			<td>600 грн</td>\r\n			<td>800 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>60 мин</td>\r\n			<td>800 грн</td>\r\n			<td>1000 грн</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ознакомиться с информацией о временных зонах Вы можете&nbsp;<a href=\"https://waithai.ua/ru/privilege/komfortnoie-vriemia-dlia-vas-1\">тут</a></p>\r\n\r\n<p>Записаться сейчас</p>\r\n\r\n<p>Скорее напоминает терапию, чем&nbsp; массаж, эффект от которой отражается на всем теле. Каждый внутренний орган человека имеет соответствующую рефлекторную зону на стопе, активизируя которые нормализируется работа всех систем организма и укрепляется иммунитет. Массаж снимает усталость, устраняет отёчность и тяжесть в ногах. Выполняется до области колена с применением специальной деревянной палочки.</p>\r\n<iframe width=\"556\" height=\"310\" src=\"https://www.youtube.com/embed/8hls2w28t88\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Традиционный тайский фут-массаж', 'Традиционный тайский фут-массаж', 'Традиционный тайский фут-массаж', '9', 'images/Ub2QsbuCAf9ss8Yeje0Z5noETr0Kd045PVf7UyZi.jpeg', 'ru', '2019-06-15 17:44:44', '2019-06-15 17:45:26', '2019-06-15 17:45:26'),
(5, 'Антистрессовый тайский массаж', 'antistriesovii-tais-kii-masazh', '<h1>АНТИСТРЕССОВЫЙ ТАЙСКИЙ МАССАЖ</h1>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Время</th>\r\n			<th>День</th>\r\n			<th>Вечер</th>\r\n		</tr>\r\n		<tr>\r\n			<td>30 мин</td>\r\n			<td>700 грн</td>\r\n			<td>900 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>60 мин</td>\r\n			<td>1000 грн</td>\r\n			<td>1200 грн</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ознакомиться с информацией о временных зонах Вы можете&nbsp;<a href=\"https://waithai.ua/ru/privilege/komfortnoie-vriemia-dlia-vas-1\">тут</a></p>\r\n\r\n<p>Записаться сейчас</p>\r\n\r\n<p>Точечная техника массажа способствует расслаблению напряжённых участков тела в области воротниковой зоны и позвоночника, улучшает кровообращение. Массаж дарит ощущение лёгкости, освобождения жизненной энергии и повышает настроение.</p>', 'Антистрессовый тайский массаж', 'Антистрессовый тайский массаж', 'Антистрессовый тайский массаж', '9', 'images/Gb5DMFwQWtFvEf0Q2NPa0GtA30lWY7UoJICv4yCo.jpeg', 'ru', '2019-06-15 17:45:40', '2019-06-15 17:46:13', '2019-06-15 17:46:13'),
(6, '«Энергетический коктейль»', 'ieniergietichnii-koktieil', '<h1>&laquo;ЭНЕРГЕТИЧЕСКИЙ КОКТЕЙЛЬ&raquo;</h1>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Время</th>\r\n			<th>День</th>\r\n			<th>Вечер</th>\r\n		</tr>\r\n		<tr>\r\n			<td>90 мин</td>\r\n			<td>1600 грн</td>\r\n			<td>2000 грн</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ознакомиться с информацией о временных зонах Вы можете&nbsp;<a href=\"https://waithai.ua/ru/privilege/komfortnoie-vriemia-dlia-vas-1\">тут</a></p>\r\n\r\n<p>Записаться сейчас</p>\r\n\r\n<p>Совмещает в себе часовой традиционный тайский массаж и получасовой массаж стоп. Сочетание этих двух массажей&nbsp; является лучшим лекарством от бессонницы, хронической усталости и нервного перенапряжения, восстанавливает силы, энергетический баланс организма, укрепляет иммунитет.</p>', '«Энергетический коктейль»', '«Энергетический коктейль»', '«Энергетический коктейль»', '9', 'images/E6Qw23And1fEqPDAifk5B9WguUdmJK6KozkAbV6S.jpeg', 'ru', '2019-06-15 17:46:22', '2019-06-15 17:46:54', '2019-06-15 17:46:54'),
(7, 'Аромамассаж тела', 'aromamasazh-tila', '<h1>АРОМАМАССАЖ ТЕЛА</h1>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Время</th>\r\n			<th>День</th>\r\n			<th>Вечер</th>\r\n		</tr>\r\n		<tr>\r\n			<td>60 мин</td>\r\n			<td>1500 грн</td>\r\n			<td>1900 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>90 мин</td>\r\n			<td>1900 грн</td>\r\n			<td>2400 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>120 мин</td>\r\n			<td>2600 грн</td>\r\n			<td>3200 грн</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ознакомиться с информацией о временных зонах Вы можете&nbsp;<a href=\"https://waithai.ua/ru/privilege/komfortnoie-vriemia-dlia-vas-1\">тут</a></p>\r\n\r\n<p>Записаться сейчас</p>\r\n\r\n<p>Легкие поглаживающие движения мастера в сочетании с&nbsp; целительными свойствами&nbsp; ароматических масел создают эффект ароматерапии. Массаж положительно воздействует на нервную систему, стабилизирует эмоциональное равновесие, дарит телу полную релаксацию.</p>', 'Аромамассаж тела', 'Аромамассаж тела', 'Аромамассаж тела', '10', 'images/AVLkbaboQ5bAHrzVB0OMdyw4Kg1k7NvxAVtqMp2s.jpeg', 'ru', '2019-06-15 17:47:49', '2019-06-15 17:49:17', '2019-06-15 17:49:39'),
(8, 'Аромамассаж тела в 4 руки', 'aromamasazh-tila-v-4-ruki', '<h1>АРОМАМАССАЖ ТЕЛА В 4 РУКИ</h1>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Время</th>\r\n			<th>День</th>\r\n			<th>Вечер</th>\r\n		</tr>\r\n		<tr>\r\n			<td>60 мин</td>\r\n			<td>1899 грн</td>\r\n			<td>2400 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>90 мин</td>\r\n			<td>2800 грн</td>\r\n			<td>3500 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>120 мин</td>\r\n			<td>3600 грн</td>\r\n			<td>4500 грн</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ознакомиться с информацией о временных зонах Вы можете&nbsp;<a href=\"https://waithai.ua/ru/privilege/komfortnoie-vriemia-dlia-vas-1\">тут</a></p>\r\n\r\n<p>Записаться сейчас</p>\r\n\r\n<p>Парная методика&nbsp; выполнения массажа способствует улучшению психоэмоционального состояния, укреплению иммунитета, стимулирует обменные процессы в организме. Процедура отлично снимает усталость, стресс, ускоряет выздоровление после травм и болезней,&nbsp; обладает прекрасным свойством расслабления.</p>\r\n\r\n<iframe width=\"556\" height=\"310\" src=\"https://www.youtube.com/embed/rIzk8Ty2Clo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Аромамассаж тела в 4 руки', 'Аромамассаж тела в 4 руки', 'Аромамассаж тела в 4 руки', '10', 'images/uNMbn4xV3nx6DFrn7HS1kmpFxI5wzgqOMK5VwHZR.jpeg', 'ru', '2019-06-15 17:49:43', '2019-06-15 17:50:24', '2019-06-15 17:50:24'),
(9, 'Сабай массаж', 'sabai-masazh', '<h1>САБАЙ МАССАЖ</h1>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Время</th>\r\n			<th>День</th>\r\n			<th>Вечер</th>\r\n		</tr>\r\n		<tr>\r\n			<td>60 мин</td>\r\n			<td>1500 грн</td>\r\n			<td>1900 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>90 мин</td>\r\n			<td>1900 грн</td>\r\n			<td>2400 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>120 мин</td>\r\n			<td>2600 грн</td>\r\n			<td>3200 грн</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ознакомиться с информацией о временных зонах Вы можете&nbsp;<a href=\"https://waithai.ua/ru/privilege/komfortnoie-vriemia-dlia-vas-1\">тут</a></p>\r\n\r\n<p>Записаться сейчас</p>\r\n\r\n<p>Уникальная комбинация тайского традиционного и тайского масляного массажа. За счёт точечной техники, а также скользящих и глубоких, но при этом мягких и плавных приёмов массажа, глубоко прорабатываются мышцы и связки, возвращается их эластичность. Процедура расслабляет, восстанавливает после стрессов и физических нагрузок.</p>', 'Сабай массаж', 'Сабай массаж', 'Сабай массаж', '10', 'images/qo0eG6rqqCT4kCRQU9q6wsUubFNuTPw8f6IpPDSz.jpeg', 'ru', '2019-06-15 17:50:36', '2019-06-15 17:51:04', '2019-06-15 17:51:05'),
(10, 'Сабай массаж в 4 руки', 'sabai-masazh-u-4-ruki', '<h1>САБАЙ МАССАЖ В 4 РУКИ</h1>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Время</th>\r\n			<th>День</th>\r\n			<th>Вечер</th>\r\n		</tr>\r\n		<tr>\r\n			<td>60 мин</td>\r\n			<td>1900 грн</td>\r\n			<td>2400 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>90 мин</td>\r\n			<td>2800 грн</td>\r\n			<td>3500 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>120 мин</td>\r\n			<td>3600 грн</td>\r\n			<td>4500 грн</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ознакомиться с информацией о временных зонах Вы можете&nbsp;<a href=\"https://waithai.ua/ru/privilege/komfortnoie-vriemia-dlia-vas-1\">тут</a></p>\r\n\r\n<p>Записаться сейчас</p>\r\n\r\n<p>Исполнение традиционного Сабай массажа двумя мастерами одновременно значительно усиливает его терапевтический эффект. Процедура позволяет достичь наивысшей точки расслабления, возвращает эластичность мышцам и связкам.</p>\r\n\r\n<p>Массаж восстанавливает после физических нагрузок, приносит ощущение полного психологического комфорта.</p>', 'Сабай массаж в 4 руки', 'Сабай массаж в 4 руки', 'Сабай массаж в 4 руки', '10', 'images/Y5Cg2zGrAbbs9E5XrRTDwGOtSXgN9sp0mT2sP3xx.jpeg', 'ru', '2019-06-15 17:51:14', '2019-06-15 17:52:02', '2019-06-15 17:52:02'),
(11, 'Слим массаж', 'slim-masazh', '<h1>СЛИМ МАССАЖ</h1>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Время</th>\r\n			<th>День</th>\r\n			<th>Вечер</th>\r\n		</tr>\r\n		<tr>\r\n			<td>30 мин</td>\r\n			<td>1000 грн</td>\r\n			<td>1300 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>60 мин</td>\r\n			<td>1500 грн</td>\r\n			<td>1900 грн</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ознакомиться с информацией о временных зонах Вы можете&nbsp;<a href=\"https://waithai.ua/ru/privilege/komfortnoie-vriemia-dlia-vas-1\">тут</a></p>\r\n\r\n<p>Записаться сейчас</p>\r\n\r\n<p>Популярная и эффективная техника коррекции фигуры, включающая приёмы похлопывания, разминания и растирания подкожной жировой прослойки. Слим массаж тонизирует мышцы, создавая лифтинговый эффект, увеличивает сосудистую проводимость, стимулируя&nbsp; отток венозной крови и движение лимфы.</p>\r\n\r\n<p>Массаж не вызывает болевых ощущений в процессе выполнения и не оставляет после кровоподтёков и синяков. Ощущения во время процедуры всегда находятся в зоне комфорта.</p>', 'Слим массаж', 'Слим массаж', 'Слим массаж', '10', 'images/FTNJxpy5hvgN3g2eOdTEk0dVHO6o1eYvhwenSRR7.jpeg', 'ru', '2019-06-15 17:52:12', '2019-06-15 17:52:42', '2019-06-15 17:52:42'),
(12, 'Слим-сабай массаж', 'slim-sabai-masazh', '<h1>СЛИМ-САБАЙ МАССАЖ</h1>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Время</th>\r\n			<th>День</th>\r\n			<th>Вечер</th>\r\n		</tr>\r\n		<tr>\r\n			<td>60 мин</td>\r\n			<td>1800 грн</td>\r\n			<td>2200 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>90 мин</td>\r\n			<td>2500 грн</td>\r\n			<td>3100 грн</td>\r\n		</tr>\r\n		<tr>\r\n			<td>120 мин</td>\r\n			<td>3000 грн</td>\r\n			<td>3700 грн</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ознакомиться с информацией о временных зонах Вы можете&nbsp;<a href=\"https://waithai.ua/ru/privilege/komfortnoie-vriemia-dlia-vas-1\">тут</a></p>\r\n\r\n<p>Записаться сейчас</p>\r\n\r\n<p>Сочетание техник Слим и Сабай-массажа позволяет закрепить эффект уменьшения объёмов. Массаж снимает отёчность и застойные явления, позволяя организму избавиться от продуктов распада и токсинов, сопровождающих процесс похудения. А &laquo;выглаживающие&raquo; движения Сабай делают эту процедуру более мягкой и приятной.</p>', 'Слим-сабай массаж', 'Слим-сабай массаж', 'Слим-сабай массаж', '10', 'images/AWaldpvv3te3LDZCjmsRBKwcYy832ktJ2feiVIxZ.jpeg', 'ru', '2019-06-15 17:52:51', '2019-06-15 17:53:18', '2019-06-15 17:53:30');

-- --------------------------------------------------------

--
-- Структура таблицы `massage_categories`
--

CREATE TABLE `massage_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `massage_categories`
--

INSERT INTO `massage_categories` (`id`, `title`, `slug`, `text`, `meta_title`, `meta_keywords`, `meta_description`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'In pajamas', 'pajamas', '<p>Thai massage is a great acquirement of Eastern culture, which is considered as unique and &nbsp;virtually inaccessible to other nations experience. This is the sacrament of deep knowledge about &nbsp;spiritual and mental health, which can not be reached in any of the western cultures. The most important thing about Thai massage is not only health improvement, but also great pleasure that we want to share with our dear guest!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:645px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Day time</td>\r\n			<td>Evening time</td>\r\n		</tr>\r\n		<tr>\r\n			<td>08:00 &ndash; 18:00</td>\r\n			<td>18:00-24:00</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'pajamas', 'pajamas', 'pajamas', 'en', '2019-06-15 17:29:49', '2019-06-15 17:29:49'),
(2, 'With oil', 'oil', '<p>Thai massage with oil is a unique technique where the therapeutic effect and manipulation with core vitality tonus centres combined. Combined technique includes use of oil, lymphatic drainage and acupressure scheme. Nevertheless oil massage based on traditional methods, but the pleasure it gives may not be compared with other massage techniques. That is the sense of the massage, isn&#39;t it?! The ancient Eastern nations suggested that &laquo;a moment of pleasure prolongs life&raquo;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:645px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Day time</td>\r\n			<td>Evening time</td>\r\n		</tr>\r\n		<tr>\r\n			<td>08:00 &ndash; 18:00</td>\r\n			<td>18:00-24:00</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'oil', 'oil', 'oil', 'en', '2019-06-15 17:30:20', '2019-06-15 17:30:20'),
(3, 'SPA', 'spa', '<p>To understand the essence of &laquo;SPA&raquo; one should apply to primary sources of explanation. SPA is an abbreviation which is known as &laquo;Sanus per Aquam&raquo; (Latin) or &laquo;Sanitas pro Aqua&raquo; (Latin), which means &quot;health through water&quot;. This concept is known since Roman times, where hot healing and thermal baths were used. That is why this method of recovery was named - a spa. But its modern sense is much broader. Now the spa is known as a treatment procedures using water type: mineral and marine, freshwater and salt, combining with seaweed, mud, medicinal plants and stone`s energetic power. Spa treatments aimed at healing and relaxation of the whole organism. Acting through the skin, spa components activate metabolism, improve circulation, remove toxins from the body and improve overall health condition. After the procedure skin becomes extremely soft and elastic with saturated vitality tone. We are pleased to offer you spa treatments, developed by experts &laquo;Wai Thai&raquo; specially for our favorite clients. These procedures are combined with classic Thai massage.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:645px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Day time</td>\r\n			<td>Evening time</td>\r\n		</tr>\r\n		<tr>\r\n			<td>08:00 &ndash; 18:00</td>\r\n			<td>18:00-24:00</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'spa', 'spa', 'spa', 'en', '2019-06-15 17:30:43', '2019-06-15 17:30:43'),
(4, 'Baby', 'kids', '<p>The main purpose of Thai massage for child &nbsp;is a sensual and soulful harmony of child&#39;s body. Baby massage helps relieve muscle tension, improves mood, normalizes blood circulation. The massage is conducted based on age of the child with great gentleness and care. Together with you, we care about the health of your baby!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:645px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Day time</td>\r\n			<td>Evening time</td>\r\n		</tr>\r\n		<tr>\r\n			<td>08:00 &ndash; 18:00</td>\r\n			<td>18:00-24:00</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'kids', 'kids', 'kids', 'en', '2019-06-15 17:31:14', '2019-06-15 17:31:14'),
(5, 'В піжамах', 'pajamas', '<p>Тайський масаж &ndash; велике знання східної культури, яка володіє практично недоступними іншим народам мудрістю та досвідом. Це &ndash; таїнство пізнання всієї глибини духовного та психічного здоров&#39;я людини, до якого не дійшла жодна із західних культур. Ну, і найголовніше, тайський масаж &ndash; це не тільки здоров&#39;я, а й величезне задоволення, і саме цим ми хочемо поділитися з Вами, наші любі гості!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Денний час</td>\r\n			<td>Вечірній час</td>\r\n		</tr>\r\n		<tr>\r\n			<td>08:00 &ndash; 18:00</td>\r\n			<td>18:00-24:00</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'pajamas', 'pajamas', 'pajamas', 'ua', '2019-06-15 17:31:53', '2019-06-15 17:31:53'),
(6, 'З олією', 'oil', '<p>Тайський масаж з маслом &ndash; це особлива техніка, коли лікувальний ефект і розкриття глибинних центрів життєвого тонусу відбувається за методом зворотного зв&#39;язку. Це змішана техніка, у якій використовують масло, лімфодренажну схему й точковий масаж. Ойл-масаж включає також і традиційні прийоми, але задоволення, що він дає, ні з чим не порівняти. А власне в цьому і сенс масажу! Недарма стародавні східні мудреці говорили: одна мить насолоди продовжує життя.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Денний час</td>\r\n			<td>Вечірній час</td>\r\n		</tr>\r\n		<tr>\r\n			<td>08:00 &ndash; 18:00</td>\r\n			<td>18:00-24:00</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'oil', 'oil', 'oil', 'ua', '2019-06-15 17:32:27', '2019-06-15 17:32:27'),
(7, 'SPA', 'spa', '<p>Для того щоб зрозуміти, що ж таке &laquo;спа&raquo;, необхідно звернутися до першоджерел. SPA &ndash; це абревіатура від &laquo;Sanus per Aquam&raquo; або &laquo;Sаnitas pro Aqua&raquo;, що в перекладі з латини означає &laquo;здоров&#39;я за допомогою води&raquo; або &laquo;здоров&#39;я через воду&raquo;. Це поняття відоме з часів Стародавнього Риму, де для зцілення купались у термальних джерелах і приймали термальні ванни. Ось чому такий метод оздоровлення дістав назву &ndash; спа. Однак його сучасне розуміння набагато ширше. Нині спа &ndash; це оздоровчий комплекс процедур з використанням будь-якої води: і мінеральної, і морської, і прісної, а також морських водоростей та солі, лікувальних грязей, цілющих рослин й сили і енергії каменів. Спа-процедури спрямовані на оздоровлення й релаксацію всього організму в цілому. Впливаючи через шкіру, спа-компоненти активізують процеси обміну речовин, покращують кровообіг, виводять токсини й шлаки з організму і поліпшують загальне самопочуття. Після процедур шкіра стає незвичайно м&#39;якою і пружною, набуває тонусу й насичується життєвою енергією. Ми раді запропонувати Вашій увазі спа-процедури, розроблені фахівцями &laquo;Wai Thai&raquo; спеціально для наших улюблених клієнтів. Ці процедури гармонійно поєднуються з класичним тайським масажем.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Денний час</td>\r\n			<td>Вечірній час</td>\r\n		</tr>\r\n		<tr>\r\n			<td>08:00 &ndash; 18:00</td>\r\n			<td>18:00-24:00</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'spa', 'spa', 'spa', 'ua', '2019-06-15 17:32:44', '2019-06-15 17:32:44'),
(8, 'Дитячі', 'kids', '<p>Основне завдання тайського масажу для дітей &ndash; це тілесна та душевна гармонізація дитячого організму. Дитячий масаж допомагає зняти напругу м&#39;язів, покращує настрій, нормалізує кровообіг. Масаж проводиться з урахуванням вікових особливостей дитини, з особливою м&#39;якістю та дбайливістю. Разом з Вами ми подбаємо про здоров&#39;я Вашого малюка!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Денний час</td>\r\n			<td>Вечірній час</td>\r\n		</tr>\r\n		<tr>\r\n			<td>08:00 &ndash; 18:00</td>\r\n			<td>18:00-24:00</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'kids', 'kids', 'kids', 'ua', '2019-06-15 17:33:04', '2019-06-15 17:33:04'),
(9, 'В пижамах', 'pajamas', '<p>Тайский массаж &ndash; великое знание восточной культуры, которая обладает практически недоступными другим народам мудростью и опытом. Это то таинство, то познание всей глубины духовного и психического здоровья человека, к которому не смог прийти ни один человек из западных культур. Ну, и самое главное, тайский массаж &ndash; это не только здоровье, но и величайшее удовольствие, с которым мы и хотим поделиться с Вами, наши уважаемые клиенты!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:645px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Дневное время</td>\r\n			<td>Вечернее время</td>\r\n		</tr>\r\n		<tr>\r\n			<td>08:00 &ndash; 18:00</td>\r\n			<td>18:00-24:00</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'pajamas', 'pajamas', 'pajamas', 'ru', '2019-06-15 17:34:37', '2019-06-15 17:34:37'),
(10, 'С маслом', 'oil', '<p>Тайский массаж с маслом &ndash; это особая техника, за счет которой лечебный эффект и раскрытие глубинных центров жизненного тонуса осуществляется по методу обратной связи. Это смешанная техника массажа, которая выполняется по маслу с использованием лимфодренажной схемы и точечного массажа. Ойл-массаж, конечно включает в себя и традиционные приемы, но к этому добавляется еще и ни с чем несравнимое удовольствие, и в этом весь смысл! Недаром древние восточные мудрецы говорили &ndash; один миг наслаждения удлиняет жизнь.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:645px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Дневное время</td>\r\n			<td>Вечернее время</td>\r\n		</tr>\r\n		<tr>\r\n			<td>08:00 &ndash; 18:00</td>\r\n			<td>18:00-24:00</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'oil', 'oil', 'oil', 'ru', '2019-06-15 17:35:11', '2019-06-15 17:35:11'),
(11, 'SPA', 'spa', '<p>Для того чтобы понять, что же такое SPA, необходимо обратиться к истокам. SPA - это аббревиатура от латинского Sanus per Aquam, или Sаnitas pro Aqua, что в переводе с латыни означает &laquo;здоровье с помощью воды&raquo; или &laquo;здоровье через воду&raquo;. Это понятие известно со времен Древнего Рима, где для исцеления недугов использовали термальные источники и термальные ванны. Такой метод оздоровления стал называться SPA. Однако современное понимание SPA гораздо шире. Сегодня SPA - это оздоровительный комплекс процедур с использованием любой воды - и минеральной, и морской, и пресной, а также морских водорослей и соли, лечебных грязей, целебных растений и силы и энергии камней. SPA -процедуры направлены на оздоровление и релаксацию всего организма в целом. Воздействуя через кожный покров, SPA-компоненты активизируют процессы обмена веществ, улучшают кровообращение, выводят токсины и шлаки из организма и улучшают общее самочувствие. После процедур кожа становится необыкновенно мягкая и упругая, приобретает тонус и насыщается жизненной энергией. Мы рады предложить Вашему вниманию SPA, разработанные специалистами Wai Thai специально для наших любимых клиентов. Данные процедуры гармонично объединены с классическими процедурами тайского массажа.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:645px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Дневное время</td>\r\n			<td>Вечернее время</td>\r\n		</tr>\r\n		<tr>\r\n			<td>08:00 &ndash; 18:00</td>\r\n			<td>18:00-24:00</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'spa', 'spa', 'spa', 'ru', '2019-06-15 17:35:30', '2019-06-15 17:35:30'),
(12, 'Детские', 'kids', '<p>Основная задача тайского массажа для детей &mdash; это приведение детского организма к состоянию гармонии как телесной, так и душевной. Детский массаж помогает снять напряжение мышц, поднимает настроение, нормализует кровообращение. Массаж делается с учетом возрастных особенностей ребенка и с особой мягкостью и бережностью. Вместе с Вами мы позаботимся о здоровье Вашего малыша!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:645px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Дневное время</td>\r\n			<td>Вечернее время</td>\r\n		</tr>\r\n		<tr>\r\n			<td>08:00 &ndash; 18:00</td>\r\n			<td>18:00-24:00</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'kids', 'kids', 'kids', 'ru', '2019-06-15 17:35:54', '2019-06-15 17:35:54');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_06_15_111510_create_massage_categories_table', 2),
(9, '2019_06_15_111830_create_massages_table', 2),
(11, '2019_06_15_201214_create_gifts_table', 3),
(13, '2019_06_15_220731_create_teams_table', 4),
(15, '2019_06_17_135552_create_videos_table', 6),
(16, '2019_06_17_135636_create_news_table', 6),
(17, '2019_06_17_104414_create_articles_table', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`, `image`, `meta_title`, `meta_keywords`, `meta_description`, `locale`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Поздравляем всех буддистов с великим днем Висакха Буча!', 'pozdravliaiem-vsiekh-buddistov-s-vielikim-dniem-visakkha-bucha', 'Висакха Буча (Весак) -&nbsp;один из самых почитаемых и важных религиозных праздников Таиланда. Он посвящен сразу трем событиям из жизни Будды -&nbsp;рождению, просветлению и смерти. В этот день тайцы ходят на службы в храмы, делают подношения монахам, медитируют, совершают традиционные для праздника ритуалы.&nbsp', 'images/ANfdw6FtHUanxykCo843CV0F8eiG2yOcCx7DiWBg.jpeg', 'Поздравляем всех буддистов с великим днем Висакха Буча!', 'Поздравляем всех буддистов с великим днем Висакха Буча!', 'Поздравляем всех буддистов с великим днем Висакха Буча!', 'ru', '2019-06-17 11:12:19', '2019-06-17 11:13:15', '2019-06-17 11:13:15');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@test.ru', NULL, '$2y$10$/O6.8YwBh1Dpw7L8z1a94.nJ4fs2pIIgq7TNSikCXjeZageYfDhGy', NULL, '2019-06-15 07:18:11', '2019-06-15 07:18:11');

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gifts`
--
ALTER TABLE `gifts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `massage_categories`
--
ALTER TABLE `massage_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `gifts`
--
ALTER TABLE `gifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `massages`
--
ALTER TABLE `massages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `massage_categories`
--
ALTER TABLE `massage_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
