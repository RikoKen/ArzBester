-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 11 2023 г., 13:14
-- Версия сервера: 5.7.39-log
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news__site`
--

CREATE TABLE `news__site` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news__site`
--

INSERT INTO `news__site` (`id`, `title`, `description`, `date`, `href`, `src`) VALUES
(0, 'Летний пропуск', 'Летний сезонный пропуск, ежедневные награды, новый крафт и свалка, \r\n											система маршрутизации, оптимизация, новый маппинг, улучшенная графика и исправления.', '23.06.2023', 'summer-pass.jpg', ''),
(1, 'Летнее событие, дайвинг и рыбалка', 'Летний пропуск до 124 уровня, обновленный мобильный худ, добавили тюнинг, винилы, тонировку, \r\n											адаптировали охоту, сделали сюжетную линию, кейс, новый транспорт, дайвинг и еще множество изменений!', '14.08.2023', 'preview(1).jpg', ''),
(2, 'Коллекции, огороды и инвентарь', 'В этом обновлении мы добавили систему гардероба для дома, улучшили огороды, \r\n											сделали новый инвентарь, обновили казино, добавили интерьер риэлтерского агентства и ресторана и добавили новый транспорт!', '16.09.2023', 'post-inventory.jpg', ''),
(3, 'Велесова ночь. Часть 2', 'Чтобы с головой погрузиться в этот таинственный праздник, мы подготовили продолжение квестовой линии. \r\n											Вам предстоит стать помощником ведьмы и разгадать загадку подозрительного поведения животных и секреты древнего артефакта.', '01.11.2023', 'velesova-2.jpg', ''),
(5, 'NIKOLAS STUDIO', 'chufachek design', '11.12.2023', '1702279587summer-pass.jpg', '0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news__site`
--
ALTER TABLE `news__site`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news__site`
--
ALTER TABLE `news__site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
